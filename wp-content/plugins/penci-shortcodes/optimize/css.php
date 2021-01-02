<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // No direct access, please.
}

function penci_speed_add_preload_script(){
	if( ! is_admin() ){
	?>
<script type="text/javascript">!function(a){"use strict";var b=function(b,c,d){function j(a){if(e.body)return a();setTimeout(function(){j(a)})}function l(){f.addEventListener&&f.removeEventListener("load",l),f.media=d||"all"}var g,e=a.document,f=e.createElement("link");if(c)g=c;else{var h=(e.body||e.getElementsByTagName("head")[0]).childNodes;g=h[h.length-1]}var i=e.styleSheets;f.rel="stylesheet",f.href=b,f.media="only x",j(function(){g.parentNode.insertBefore(f,c?g:g.nextSibling)});var k=function(a){for(var b=f.href,c=i.length;c--;)if(i[c].href===b)return a();setTimeout(function(){k(a)})};return f.addEventListener&&f.addEventListener("load",l),f.onloadcssdefined=k,k(l),f};"undefined"!=typeof exports?exports.loadCSS=b:a.loadCSS=b}("undefined"!=typeof global?global:this); !function(a){if(a.loadCSS){var b=loadCSS.relpreload={};if(b.support=function(){try{return a.document.createElement("link").relList.supports("preload")}catch(a){return!1}},b.poly=function(){for(var b=a.document.getElementsByTagName("link"),c=0;c<b.length;c++){var d=b[c];"preload"===d.rel&&"style"===d.getAttribute("as")&&(a.loadCSS(d.href,d,d.getAttribute("media")),d.rel=null)}},!b.support()){b.poly();var c=a.setInterval(b.poly,300);a.addEventListener&&a.addEventListener("load",function(){b.poly(),a.clearInterval(c)}),a.attachEvent&&a.attachEvent("onload",function(){a.clearInterval(c)})}}}(this);</script>
	<?php
	}
	}
add_action( 'wp_footer', 'penci_speed_add_preload_script', 9999 );


/*
 * Remove gutenberg styles
 * Priority set to 100 to make sure it running after enqueue wp-block-library style
 */
function penci_disable_gutenberg_styles() {
    if( get_theme_mod( 'penci_speed_remove_gutenbergcss' ) ) {
        wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_style( 'wp-block-library-theme' );
    }
    
}
add_action( 'wp_print_styles', 'penci_disable_gutenberg_styles', 100 );

/*
 * Hook to get_footer to move font icons stylesheet to footer
 */
function penci_enqueue_font_icons_footer(){
	if( get_theme_mod( 'penci_speed_move_icons' ) && ! get_theme_mod( 'penci_preload_font_icons' ) ){
		if( get_theme_mod('penci_swap_font_icons') ){
			wp_enqueue_style( 'penci-font-awesomeold', get_template_directory_uri() . '/css/font-awesome.4.7.0.swap.min.css', NULL, '4.7.0' );
			wp_enqueue_style( 'penci-font-iconmoon', get_template_directory_uri() . '/css/iconmoon.swap.css', NULL, '1.0' );
			wp_enqueue_style( 'penci-font-iweather', get_template_directory_uri() . '/css/weather-icon.swap.css', NULL, '2.0' );
		} else {
			wp_enqueue_style( 'penci-font-awesomeold', get_template_directory_uri() . '/css/font-awesome.4.7.0.min.css', NULL, '4.7.0' );
			wp_enqueue_style( 'penci-font-iconmoon', get_template_directory_uri() . '/css/iconmoon.css', NULL, '1.0' );
			wp_enqueue_style( 'penci-font-iweather', get_template_directory_uri() . '/css/weather-icon.css', NULL, '2.0' );
		}
		
		if( function_exists( 'penci_get_setting' ) ){
			$fontawesome_ver5 = penci_get_setting( 'penci_fontawesome_ver5' );
			if ( $fontawesome_ver5 ) {
				if( get_theme_mod('penci_swap_font_icons') ){
					wp_enqueue_style( 'penci-font-awesome', get_template_directory_uri() . '/css/font-awesome.5.11.2.swap.min.css', NULL, '5.11.2' );
				} else {
					wp_enqueue_style( 'penci-font-awesome', get_template_directory_uri() . '/css/font-awesome.5.11.2.min.css', NULL, '5.11.2' );
				}
			}
		}
	}
}
add_action( 'get_footer', 'penci_enqueue_font_icons_footer' );

/*
 * Function cover string to array from inputs
 */
function penci_speed_strto_array( $string ){
	$string_replace = str_replace( ' ', '', $string );
	if( ! $string_replace ){
		return array();
	}
	$return_array = explode( ',', $string_replace );
	
	return $return_array;
}

/*
 * Get exclude array CSS ids 
 */
if( ! function_exists( 'penci_speed_exclude_array_css_ids' ) ){
	function penci_speed_exclude_array_css_ids(){
		$css_exclude = array();
		if( function_exists( 'penci_get_setting' ) ){
			$exclude_name = get_theme_mod( 'penci_preload_exclude_name' );
			$include_name = get_theme_mod( 'penci_preload_include_name' );
			$css_exclude = array( 'penci-main-style', 'penci-soledad-customizer', 'penci-soledad-parent-style', 'penci_style', 'elementor-frontend', 'js_composer_front', 'penci-soledad-rtl-style', 'login', 'l10n', 'forms', 'buttons', 'dashicons', 'admin-bar' );
			
			if( ! get_theme_mod( 'penci_preload_font_icons' ) ){
				$css_exclude[] = 'penci-font-awesomeold';
				$css_exclude[] = 'penci-font-iconmoon';
				$css_exclude[] = 'penci-font-iweather';
				$css_exclude[] = 'penci-font-awesome';
			}
			
			if( ! penci_get_setting( 'penci_preload_google_fonts' ) ){
				$css_exclude[] = 'penci-fonts';
				if( function_exists('penci_fonts_url') ){
					$data_fonts = penci_fonts_url( 'earlyaccess' );
					if( is_array( $data_fonts ) && ! empty( $data_fonts ) ){
						foreach( $data_fonts as $fontname ) {
							$css_exclude[] = 'penci-font-' . $fontname;
						}
					}
				}
			}
			
			if( $exclude_name ){
				$exclude_array = penci_speed_strto_array( $exclude_name );
				if( ! empty( $exclude_array ) ){
					foreach( $exclude_array as $ex_name ){
						$css_exclude[] = $ex_name;
					}
				}
			}
			
			if( $include_name ){
				$include_array = penci_speed_strto_array( $include_name );
				if( ! empty( $include_array ) ){
					$css_exclude = array_diff( $css_exclude, $include_array );
				}
			}
		}
		
		return $css_exclude;
	}
}

/*
 * Get include array CSS ids
 */
if( ! function_exists( 'penci_speed_include_array_css_ids' ) ){
	function penci_speed_include_array_css_ids(){
		$css_include = array();
		if( function_exists( 'penci_get_setting' ) ){
			$exclude_name = get_theme_mod( 'penci_preload_exclude_name' );
			$include_name = get_theme_mod( 'penci_preload_include_name' );
			
			$css_include = array();
			if( get_theme_mod( 'penci_preload_font_icons' ) ){
				$css_include[] = 'penci-font-awesomeold';
				$css_include[] = 'penci-font-iconmoon';
				$css_include[] = 'penci-font-iweather';
				$css_include[] = 'penci-font-awesome';
			}
			if( penci_get_setting( 'penci_preload_google_fonts' ) ){
				$css_include[] = 'penci-fonts';
				if( function_exists('penci_fonts_url') ){
					$data_fonts = penci_fonts_url( 'earlyaccess' );
					if( is_array( $data_fonts ) && ! empty( $data_fonts ) ){
						foreach( $data_fonts as $fontname ) {
							$css_include[] = 'penci-font-' . $fontname;
						}
					}
				}
			}
			
			if( $exclude_name ){
				$exclude_array = penci_speed_strto_array( $exclude_name );
				if( ! empty( $exclude_array ) ){
					$css_include = array_diff( $css_include, $exclude_array );
				}
			}
			
			if( $include_name ){
				$include_array = penci_speed_strto_array( $include_name );
				if( ! empty( $include_array ) ){
					foreach( $include_array as $in_name ){
						$css_include[] = $in_name;
					}
				}
			}
		}
		
		return $css_include;
	}
}

/*
 * Ok, do preload stylesheets now
 */
if ( ! function_exists( 'penci_speed_do_preload_icons' ) ) {
	add_filter( 'style_loader_tag', 'penci_speed_do_preload_icons', 10, 4 );
	function penci_speed_do_preload_icons( $html, $handle, $href, $media ) {
		if ( is_admin() && ! function_exists( 'penci_get_setting' ) ) {
			return $html;
		}
		
		if( get_theme_mod( 'penci_preload_all_stylesheets' ) ){
			$exclude = penci_speed_exclude_array_css_ids();
			if ( ! in_array( $handle, $exclude ) ) {
				return '<link rel="preload" as="style" onload="this.rel=\'stylesheet\'" id="' . $handle . '-css" href="' . $href . '" type="text/css" media="' . $media . '">
<noscript><link id="' . $handle . '-css" rel="stylesheet" href="' . $href . '"></noscript>
';
			}
		} else {
			$include = penci_speed_include_array_css_ids();
			if ( in_array( $handle, $include ) ) {
				return '<link rel="preload" as="style" onload="this.rel=\'stylesheet\'" id="' . $handle . '-css" href="' . $href . '" type="text/css" media="' . $media . '">
<noscript><link id="' . $handle . '-css" rel="stylesheet" href="' . $href . '"></noscript>
';
			}
		}
		
		return $html;
	}
}