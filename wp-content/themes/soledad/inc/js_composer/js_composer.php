<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if( ! class_exists( 'Penci_WPB_VC' ) ):
	class Penci_WPB_VC {
		private static $_instance = null;

		public static function instance() {

			if ( is_null( self::$_instance ) ) {
				self::$_instance = new self();
			}
			return self::$_instance;

		}

		public function __construct() {
			add_action( 'vc_before_init', array( $this, 'init' ), 5 );

			add_action( 'admin_print_scripts-post.php', array( $this, 'printScriptsMessages', ), 9999 );
			add_action( 'admin_print_scripts-post-new.php', array( $this, 'printScriptsMessages', ), 9999 );

			add_filter( 'vc_google_fonts_get_fonts_filter', array( $this, 'add_google_fonts' ) );
			add_action( 'vc_after_init', array( $this, 'vc_after_init_actions' ) );
		}

		public function init() {
			$this->includes();
		}

		public function includes() {
			require get_template_directory() . '/inc/js_composer/params/params.php';
			require get_template_directory() . '/inc/js_composer/inc/global-blocks.php';
			require get_template_directory() . '/inc/js_composer/inc/shortcodes-classes.php';
			require get_template_directory() . '/inc/js_composer/inc/vc-params-helper.php';
			require get_template_directory() . '/inc/js_composer/inc/custom-css-oldsc.php';

			$this->load_shortcodes();
		}

		function vc_after_init_actions() {
			add_action( 'vc_frontend_editor_render', array( $this, 'frontend_editor_render' ) );
			add_action( 'vc_load_iframe_jscss', array( $this, 'load_iframe_jscss' ) );
		}

		function frontend_editor_render() {
			wp_enqueue_script( 'penci-frontend_editor', get_template_directory_uri() . '/inc/js_composer/assets/frontend-editor.js', array( 'vc-frontend-editor-min-js','underscore' ), PENCI_SOLEDAD_VERSION, true );
		}

		function load_iframe_jscss() {
			wp_enqueue_style( 'penci-frontend_editor', get_template_directory_uri() . '/inc/js_composer/assets/frontend-editor.css', '', PENCI_SOLEDAD_VERSION );
			wp_enqueue_script( 'penci_inline_iframe_js',get_template_directory_uri() . '/inc/js_composer/assets/page_editable.js', array( 'vc_inline_iframe_js' ), PENCI_SOLEDAD_VERSION, true );
		}

		protected function load_shortcodes() {
			$dirs = glob( dirname( __FILE__ ) . '/shortcodes/*', GLOB_ONLYDIR );

			foreach ( $dirs as $dir ) {
				$id_shortcode    = basename( $dir );
				if ( 'latest_tweets' == $id_shortcode ) {
					if ( ! function_exists( 'getTweets' ) ) {
						continue;
					}
				}

				include "$dir/settings.php";
			}

			do_action( 'penciframework_add_shortcode_vc' );
		}

		public function get_list_shortcodes(){
			return array(
				'container',
				'column',
				'container_inner',
				'column_inner',
				'fancy_heading',
				'google_map',
				'info_box',
				'popular_cat',
			);
		}

		/**
		 * Enqueue scripts and styles.
		 */
		public function printScriptsMessages() {
			if ( ! vc_is_frontend_editor() && $this->isValidPostType( get_post_type() ) ) {
				wp_enqueue_script( 'pen-vc-backend', get_template_directory_uri() . '/inc/js_composer/assets/vc-backend.js', array( 'jquery','vc-backend-min-js' ), PENCI_SOLEDAD_VERSION, true );
				wp_enqueue_style( 'pen-vc-backend', get_template_directory_uri() . '/inc/js_composer/assets/admin.css','',PENCI_SOLEDAD_VERSION );

				$localize_script = array(
					'ajaxUrl'   => admin_url( 'admin-ajax.php' ),
					'nonce'     => wp_create_nonce( 'ajax-nonce' ),
				);
				wp_localize_script( 'pen-vc-backend', 'PENCILOCALIZE', $localize_script );
			}
		}

		public function isValidPostType( $type = '' ) {
			if ( 'vc_grid_item' === $type ) {
				return false;
			}

			return vc_check_post_type( ! empty( $type ) ? $type : get_post_type() );
		}

		public function add_google_fonts( $fonts_list ) {
			$fonts = array_merge(
				penci_get_custom_fonts(),
				penci_font_browser(),
				penci_list_google_fonts_array()
			);
			array_walk( $fonts, array( $this, 'parse_google_font' ) );
			$fonts_list = array_merge( array( '' ), array_values( $fonts ), $fonts_list );

			return $fonts_list;
		}

		protected function parse_google_font( &$font, $font_data ) {
			list( $name, $styles ) = explode( ',', $font_data . ',' );
			$styles = str_replace( ':', ',', trim( $styles ) );

			$font_class              = new stdClass();
			$font_class->font_family = str_replace( '"','', $name );
			$font_class->font_types  = implode( ',', $this->parse_font_types( $styles ) );
			$font_class->font_styles = $styles;

			$font = $font_class;
		}

		protected function parse_font_types( $styles ) {
			$styles = array_filter( explode( ',', $styles . ',' ) );
			array_walk( $styles, array( $this, 'parse_font_type' ) );

			return $styles;
		}

		protected function parse_font_type( &$style ) {
			$types = array(
				'100'       => '100 thin:100:normal',
				'100i'      => '100 thin italic:100:italic',
				'100italic' => '100 thin italic:100:italic',
				'200'       => '200 thin:200:normal',
				'200i'      => '200 thin italic:200:italic',
				'200italic' => '200 thin italic:200:italic',
				'300'       => '300 light:300:normal',
				'300i'      => '300 light italic:300:italic',
				'300italic' => '300 light italic:300:italic',
				'400'       => '400 regular:400:normal',
				'regular'   => '400 regular:400:normal',
				'400i'      => '400 regular italic:400:italic',
				'400italic' => '400 regular italic:400:italic',
				'italic'    => '400 regular italic:400:italic',
				'500'       => '500 medium:500:normal',
				'500i'      => '500 medium italic:500:italic',
				'500italic' => '500 medium italic:500:italic',
				'600'       => '600 medium:600:normal',
				'600i'      => '600 medium italic:600:italic',
				'600italic' => '600 medium italic:600:italic',
				'700'       => '700 bold:700:normal',
				'bold'      => '700 bold:700:normal',
				'700i'      => '700 bold italic:700:italic',
				'700italic' => '700 bold italic:700:italic',
				'800'       => '800 bolder:800:normal',
				'800i'      => '800 bolder italic:800:italic',
				'800italic' => '800 bolder italic:800:italic',
				'900'       => '900 black:900:normal',
				'900i'      => '900 black italic:900:italic',
				'900italic' => '900 black italic:900:italic',
			);
			$style = isset( $types[ $style ] ) ? $types[ $style ] : '400 regular:400:normal';
		}

		public function get_custom_fonts() {
			$fontfamily1  = get_theme_mod( 'snorlax_custom_fontfamily1' );
			$fontfamily2  = get_theme_mod( 'snorlax_custom_fontfamily2' );
			$fontfamily3  = get_theme_mod( 'snorlax_custom_fontfamily3' );
			$fontfamily4  = get_theme_mod( 'snorlax_custom_fontfamily4' );
			$fontfamily5  = get_theme_mod( 'snorlax_custom_fontfamily5' );
			$fontfamily6  = get_theme_mod( 'snorlax_custom_fontfamily6' );
			$fontfamily7  = get_theme_mod( 'snorlax_custom_fontfamily7' );
			$fontfamily8  = get_theme_mod( 'snorlax_custom_fontfamily8' );
			$fontfamily9  = get_theme_mod( 'snorlax_custom_fontfamily9' );
			$fontfamily10 = get_theme_mod( 'snorlax_custom_fontfamily10' );


			$list_fonts = array();

			if ( $fontfamily1 ) {
				$list_fonts[ $fontfamily1 ] = $fontfamily1;
			}
			if ( $fontfamily2 ) {
				$list_fonts[ $fontfamily2 ] = $fontfamily2;
			}

			if ( $fontfamily3 ) {
				$list_fonts[ $fontfamily3 ] = $fontfamily3;
			}

			if ( $fontfamily4 ) {
				$list_fonts[ $fontfamily4 ] = $fontfamily4;
			}

			if ( $fontfamily5 ) {
				$list_fonts[ $fontfamily5 ] = $fontfamily5;
			}

			if ( $fontfamily6 ) {
				$list_fonts[ $fontfamily6 ] = $fontfamily6;
			}

			if ( $fontfamily7 ) {
				$list_fonts[ $fontfamily7 ] = $fontfamily7;
			}

			if ( $fontfamily8 ) {
				$list_fonts[ $fontfamily8 ] = $fontfamily8;
			}

			if ( $fontfamily9 ) {
				$list_fonts[ $fontfamily9 ] = $fontfamily9;
			}

			if ( $fontfamily10 ) {
				$list_fonts[ $fontfamily10 ] = $fontfamily10;
			}

			return $list_fonts;

		}
	}

	Penci_WPB_VC::instance();
endif;