<?php

namespace PenciSoledadElementor\Modules\PenciFeaturedSliders\Widgets;

use PenciSoledadElementor\Base\Base_Widget;
use PenciSoledadElementor\Modules\QueryControl\Module;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Image_Size;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class PenciFeaturedSliders extends Base_Widget {

	public function get_name() {
		return 'penci-featured-sliders';
	}

	public function get_title() {
		return esc_html__( 'Penci Featured Slider', 'soledad' );
	}

	public function get_icon() {
		return 'eicon-gallery-grid';
	}

	public function get_keywords() {
		return array( 'post', 'slider' );
	}

	protected function _register_controls() {
		parent::_register_controls();

		$this->register_query_section_controls();
		// Section layout
		$this->start_controls_section(
			'section_layout', array(
				'label' => esc_html__( 'Layout', 'soledad' ),
				'tab'   => Controls_Manager::TAB_CONTENT,
			)
		);

		$this->add_control(
			'style', array(
				'label'   => __( 'Choose Style', 'soledad' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'style-1',
				'options' => array(
					'style-1'  => 'Style 1',
					'style-2'  => 'Style 2',
					'style-4'  => 'Style 4',
					'style-6'  => 'Style 6',
					'style-7'  => 'Style 7',
					'style-8'  => 'Style 8',
					'style-9'  => 'Style 9',
					'style-10' => 'Style 10',
					'style-11' => 'Style 11',
					'style-13' => 'Style 13',
					'style-15' => 'Style 15',
					'style-17' => 'Style 17',
					'style-19' => 'Style 19',
					'style-20' => 'Style 20',
					'style-21' => 'Style 21',
					'style-22' => 'Style 22',
					'style-23' => 'Style 23',
					'style-24' => 'Style 24',
					'style-25' => 'Style 25',
					'style-26' => 'Style 26',
					'style-27' => 'Style 27',
					'style-28' => 'Style 28',
					'style-29' => 'Style 29',
					'style-35' => 'Style 35',
					'style-37' => 'Style 37',
					'style-38' => 'Style 38',
				)
			)
		);


		$list_switchers = array(
			'disable_lazyload_slider' => array(
				'label' => 'Disable Lazy Load Images on The Slider'
			),
			'enable_flat_overlay'     => array(
				'label'     => 'Enable Flat Overlay Replace with Gradient Overlay',
				'condition' => array( 'style!' => array( 'style-1', 'style-2', 'style-3', 'style-4', 'style-5', 'style-29', 'style-30', 'style-35', 'style-36', 'style-37', 'style-38' ) ),
			),
			'center_box'              => array(
				'label' => 'Hide Center Box'
			),
			'meta_date_hide'          => array(
				'label' => 'Hide Post Date',
			),
			'show_viewscount'          => array(
				'label' => 'Show Count View',
			),
			'hide_categories'         => array(
				'label' => 'Hide Categories Of Post',
			),
			'hide_meta_comment'       => array(
				'label' => 'Hide Post Number Comments',
			),
			'hide_meta_excerpt'       => array(
				'label'     => 'Hide Post Excerpt',
				'condition' => array( 'style' => array( 'style-35', 'style-38' ) ),
			),
			'hide_format_icons'       => array(
				'label' => 'Hide Post Format Icons',
			)
		);

		foreach ( $list_switchers as $list_switcher_key => $list_switcher_info ) {
			$this->add_control(
				$list_switcher_key, array(
					'label'       => $list_switcher_info['label'],
					'type'        => Controls_Manager::SWITCHER,
					'description' => isset( $list_switcher_info['desc'] ) ? $list_switcher_info['desc'] : '',
					'condition'   => isset( $list_switcher_info['condition'] ) ? $list_switcher_info['condition'] : '',
				)
			);
		}
		$this->add_control(
			'title_length', array(
				'label'     => __( 'Post Title Length', 'soledad' ),
				'type'      => Controls_Manager::NUMBER,
				'default'   => '12',
				'separator' => 'before',
			)
		);
		$this->end_controls_section();

		// Options slider
		$this->start_controls_section(
			'section_slider_options', array(
				'label' => __( 'Slider Options', 'soledad' ),
			)
		);
		$this->add_control(
			'autoplay', array(
				'label'   => __( 'Autoplay', 'soledad' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			)
		);
		$this->add_control(
			'loop', array(
				'label'   => __( 'Slider Loop', 'soledad' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			)
		);
		$this->add_control(
			'auto_time', array(
				'label'   => __( 'Slider Auto Time (at x seconds)', 'soledad' ),
				'type'    => Controls_Manager::NUMBER,
				'default' => 4000,
			)
		);
		$this->add_control(
			'speed', array(
				'label'   => __( 'Slider Speed (at x seconds)', 'soledad' ),
				'type'    => Controls_Manager::NUMBER,
				'default' => 800,
			)
		);
		$this->add_control(
			'shownav', array(
				'label'   => __( 'Show next/prev buttons', 'soledad' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'condition' => array( 'style' => array( 'style-35', 'style-37' ) ),
			)
		);
		$this->add_control(
			'showdots', array(
				'label'     => __( 'Show dots navigation', 'soledad' ),
				'type'      => Controls_Manager::SWITCHER,
				'condition' => array( 'style' => array( 'style-35', 'style-37' ) ),
			)
		);
		$this->end_controls_section();

		$style_big_post = array( 'style-6', 'style-13', 'style-15', 'style-17', 'style-18', 'style-19', 'style-20', 'style-21', 'style-22', 'style-23', 'style-24', 'style-25', 'style-26', 'style-27', 'style-28', 'style-37' );
		// Design
		$this->start_controls_section(
			'section_design_image', array(
				'label' => __( 'Image', 'soledad' ),
				'tab'   => Controls_Manager::TAB_STYLE
			)
		);

		$this->add_control(
			'post_thumb_size', array(
				'label'   => __( 'Image size', 'soledad' ),
				'type'    => Controls_Manager::SELECT,
				'default' => '',
				'options' => $this->get_list_image_sizes( true ),
			)
		);
		$this->add_control(
			'bpost_thumb_size', array(
				'label'     => __( 'Image size for Big Post', 'soledad' ),
				'type'      => Controls_Manager::SELECT,
				'default'   => '',
				'options'   => $this->get_list_image_sizes( true ),
				'condition' => array( 'style' => $style_big_post ),
			)
		);

		$this->add_control(
			'img_border_radius', array(
				'label'       => __( 'Border Radius', 'elementor' ),
				'description' => 'You can use pixel or percent. E.g:  <strong>10px</strong>  or  <strong>10%</strong>',
				'type'        => Controls_Manager::SLIDER,
				'size_units'  => array( '%', 'px' ),
				'default'     => array( 'unit' => '%', 'size' => 0 ),
				'range'       => array( '%' => array( 'max' => 50 ), 'px' => array( 'min' => 0, 'max' => 200 ) ),
				'selectors'   => array(
					'{{WRAPPER}} .featured-area .penci-image-holder,{{WRAPPER}} .featured-area .penci-slider4-overlay' => 'border-radius: {{SIZE}}{{UNIT}};-webkit-border-radius: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .featured-area .penci-slide-overlay .overlay-link'                                    => 'border-radius: {{SIZE}}{{UNIT}};-webkit-border-radius: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .featured-style-29 .featured-slider-overlay,{{WRAPPER}} .penci-slider38-overlay'      => 'border-radius: {{SIZE}}{{UNIT}};-webkit-border-radius: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .penci-featured-content-right:before'                                                 => 'border-top-right-radius: {{SIZE}}{{UNIT}};border-bottom-right-radius: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .penci-flat-overlay .penci-slide-overlay .penci-mag-featured-content:before'          => 'border-bottom-left-radius: {{SIZE}}{{UNIT}};border-bottom-right-radius: {{SIZE}}{{UNIT}};',
				)
			)
		);
		$this->add_responsive_control(
			'img_ratio', array(
				'label'     => __( 'Ratio Height/Width of Images', 'soledad' ),
				'description' => 'This option does not apply for <strong>Slider Styles 19 & 27</strong>',
				'type'      => Controls_Manager::SLIDER,
				'range'     => array( 'px' => array( 'min' => 0.1, 'max' => 2, 'step' => 0.01 ) ),
				'selectors' => array(
					'{{WRAPPER}} .penci-owl-carousel:not(.elsl-style-19):not(.elsl-style-27) .penci-image-holder'        => 'height: auto !important;',
					'{{WRAPPER}} .penci-owl-carousel:not(.elsl-style-19):not(.elsl-style-27) .penci-image-holder:before' => 'content:"";padding-top:calc( {{SIZE}} * 100% );height: auto;',
					'{{WRAPPER}} .featured-style-13 .penci-owl-carousel .penci-item-1 .penci-image-holder:before' => 'padding-top:calc( {{SIZE}} * 50% );',
					'{{WRAPPER}} .featured-style-15 .penci-owl-carousel .penci-item-2 .penci-image-holder:before' => 'padding-top:calc( {{SIZE}} * 50% );',
					'{{WRAPPER}} .featured-style-25 .penci-owl-carousel .penci-item-1 .penci-image-holder:before' => 'padding-top:calc( {{SIZE}} * 150% );',
				),
			)
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_design_content', array(
				'label' => __( 'Content', 'soledad' ),
				'tab'   => Controls_Manager::TAB_STYLE
			)
		);

		$this->add_control(
			'overlay_bgcolor', array(
				'label'     => __( 'Overlay Background Color', 'soledad' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .featured-style-1 .penci-featured-content .featured-slider-overlay' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .featured-style-2 .penci-featured-content .featured-slider-overlay' => 'background-color: {{VALUE}}',
				),
				'condition' => array( 'style' => array( 'style-1', 'style-2' ) ),
			)
		);

		$this->add_control(
			'heading_title_style', array(
				'label' => __( 'Title', 'soledad' ),
				'type'  => Controls_Manager::HEADING
			)
		);

		$this->add_control(
			'title_color', array(
				'label'     => __( 'Color', 'soledad' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .feat-text h3, {{WRAPPER}} .feat-text h3 a'             => 'color: {{VALUE}};',
					'{{WRAPPER}} .feat-text-right h3, {{WRAPPER}} .feat-text-right h3 a' => 'color: {{VALUE}};',
				)
			)
		);
		$this->add_control(
			'title_hcolor', array(
				'label'     => __( 'Hover Color', 'soledad' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .feat-text h3 a:hover'       => 'color: {{VALUE}};',
					'{{WRAPPER}} .feat-text-right h3 a:hover' => 'color: {{VALUE}};',
				)
			)
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), array(
				'name'     => 'title_typography',
				'selector' => '{{WRAPPER}} .feat-text h3, {{WRAPPER}} .feat-text h3 a,{{WRAPPER}} .feat-text-right h3, {{WRAPPER}} .feat-text-right h3 a'
			)
		);
		$this->add_responsive_control(
			'bptitle_size', array(
				'label'     => __( 'Font size for Big Post', 'soledad' ),
				'type'      => Controls_Manager::SLIDER,
				'range'     => array( 'px' => array( 'min' => 0, 'max' => 100, ) ),
				'selectors' => array(
					'{{WRAPPER}} .featured-area .penci-pitem-big .feat-text h3,{{WRAPPER}} .featured-area .penci-pitem-big .feat-text h3 a' => 'font-size: {{SIZE}}px'
				),
				'condition' => array( 'style' => $style_big_post ),
			)
		);

		$this->add_control(
			'title_spacing', array(
				'label'     => __( 'Spacing', 'soledad' ),
				'type'      => Controls_Manager::SLIDER,
				'range'     => array( 'px' => array( 'max' => 100 ) ),
				'selectors' => array( '{{WRAPPER}} .feat-text h3, {{WRAPPER}} .feat-text-right h3' => 'margin-bottom: {{SIZE}}{{UNIT}};' )
			)
		);

		$this->add_control(
			'heading_pcat_style', array(
				'label' => __( 'Category', 'soledad' ),
				'type'  => Controls_Manager::HEADING
			)
		);

		$this->add_control(
			'pcat_color', array(
				'label'     => __( 'Color', 'soledad' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => array( '{{WRAPPER}} .feat-text .featured-cat a,{{WRAPPER}} .featured-style-35 .featured-cat a' => 'color: {{VALUE}};' )
			)
		);
		$this->add_control(
			'pcat_hcolor', array(
				'label'     => __( 'Hover Color', 'soledad' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => array( '{{WRAPPER}} .feat-text .featured-cat a:hover,{{WRAPPER}} .featured-style-35 .featured-cat a:hover' => 'color: {{VALUE}};' )
			)
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), array(
				'name'     => 'pcat_typo',
				'selector' => '{{WRAPPER}} .feat-text .featured-cat a,{{WRAPPER}} {{WRAPPER}} .featured-style-35 .featured-cat a'
			)
		);

		$this->add_control(
			'pcat_spacing', array(
				'label'     => __( 'Spacing', 'soledad' ),
				'type'      => Controls_Manager::SLIDER,
				'range'     => array( 'px' => array( 'max' => 100 ) ),
				'selectors' => array( '{{WRAPPER}} .feat-text .featured-cat,{{WRAPPER}} {{WRAPPER}} .featured-style-35 .featured-cat' => 'margin-bottom: {{SIZE}}{{UNIT}};' )
			)
		);

		$this->add_control(
			'heading_meta_style', array(
				'label'     => __( 'Meta', 'soledad' ),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'before'
			)
		);

		$this->add_control(
			'meta_color', array(
				'label'     => __( 'Color', 'soledad' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .feat-text .feat-meta span,{{WRAPPER}} .feat-text .feat-meta a'                                    => 'color: {{VALUE}};',
					'{{WRAPPER}} .featured-content-excerpt .feat-meta span,{{WRAPPER}} .featured-content-excerpt .feat-meta span a' => 'color: {{VALUE}};',
				)
			)
		);
		$this->add_control(
			'meta_hcolor', array(
				'label'     => __( 'Hover Color', 'soledad' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .feat-text .feat-meta a:hover'                     => 'color: {{VALUE}};',
					'{{WRAPPER}} .featured-content-excerpt .feat-meta span a:hover' => 'color: {{VALUE}};',
				)
			)
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), array(
				'name'     => 'meta_typography',
				'selector' => '{{WRAPPER}} .feat-text .feat-meta span,{{WRAPPER}} .feat-text .feat-meta a,{{WRAPPER}} .featured-content-excerpt .feat-meta span,{{WRAPPER}} .featured-content-excerpt .feat-meta span a'
			)
		);

		$this->add_control(
			'meta_spacing', array(
				'label'     => __( 'Spacing', 'soledad' ),
				'type'      => Controls_Manager::SLIDER,
				'range'     => array( 'px' => array( 'max' => 100 ) ),
				'selectors' => array( '{{WRAPPER}} .feat-text .feat-meta,{{WRAPPER}} .featured-content-excerpt .feat-meta' => 'margin-top: {{SIZE}}{{UNIT}};' )
			)
		);

		$this->add_control(
			'heading_excerpt_style', array(
				'label'     => __( 'Excerpt', 'soledad' ),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => array( 'style' => array( 'style-35', 'style-38' ) )
			)
		);

		$this->add_control(
			'excerpt_color', array(
				'label'     => __( 'Color', 'soledad' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => array( '{{WRAPPER}} .featured-content-excerpt p,{{WRAPPER}} .featured-slider-excerpt p' => 'color: {{VALUE}};' ),
				'condition' => array( 'style' => array( 'style-35', 'style-38' ) )
			)
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), array(
				'name'      => 'excerpt_typography',
				'selector'  => '{{WRAPPER}} .featured-content-excerpt p,{{WRAPPER}} .featured-slider-excerpt p',
				'condition' => array( 'style' => array( 'style-35', 'style-38' ) )
			)
		);

		$this->add_control(
			'excerpt_spacing', array(
				'label'     => __( 'Spacing', 'soledad' ),
				'type'      => Controls_Manager::SLIDER,
				'range'     => array( 'px' => array( 'max' => 100 ) ),
				'selectors' => array( '{{WRAPPER}} .featured-content-excerpt p,{{WRAPPER}} .featured-slider-excerpt p' => 'margin-bottom: {{SIZE}}{{UNIT}};' ),
				'condition' => array( 'style' => array( 'style-35', 'style-38' ) )
			)
		);

		$this->add_control(
			'heading_readmore_style', array(
				'label'     => __( 'Read More', 'elementor-pro' ),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => array( 'style' => array( 'style-35', 'style-38' ) )
			)
		);

		$this->add_control(
			'read_more_color', array(
				'label'     => __( 'Color', 'elementor-pro' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => array( '{{WRAPPER}} .penci-featured-slider-button a' => 'color: {{VALUE}};border-color:{{VALUE}};' ),
				'condition' => array( 'style' => array( 'style-35', 'style-38' ) )
			)
		);

		$this->add_control(
			'read_more_hcolor', array(
				'label'     => __( 'Hover Color', 'elementor-pro' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => array( '{{WRAPPER}} .penci-featured-slider-button a:hover' => 'color: {{VALUE}};' ),
				'condition' => array( 'style' => array( 'style-35', 'style-38' ) )
			)
		);
		$this->add_control(
			'read_more_hbgcolor', array(
				'label'     => __( 'Hover Background Color', 'elementor-pro' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => array( '{{WRAPPER}} .penci-featured-slider-button a:hover' => 'border-color: {{VALUE}};background-color: {{VALUE}};' ),
				'condition' => array( 'style' => array( 'style-35', 'style-38' ) )
			)
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), array(
				'name'      => 'read_more_typography',
				'selector'  => '{{WRAPPER}} .penci-featured-slider-button a',
				'condition' => array( 'style' => array( 'style-35', 'style-38' ) )
			)
		);

		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings();

		$query_args = Module::get_query_args( 'posts', $settings );

		$feat_query = new \WP_Query( $query_args );

		if ( ! $feat_query->have_posts() ) {
			echo self::show_missing_settings( 'Featured Slider', penci_get_setting( 'penci_ajaxsearch_no_post' ) );
		}

		$slider_style = $settings['style'] ? $settings['style'] : 'style-1';

		$slider_class = $this->get_class_slider( $settings );

		$disable_lazyload    = $settings['disable_lazyload_slider'];
		$slider_title_length = $settings['title_length'] ? $settings['title_length'] : 12;
		$center_box          = $settings['center_box'];
		$meta_date_hide      = $settings['meta_date_hide'];
		$show_viewscount     = $settings['show_viewscount'];
		$hide_categories     = $settings['hide_categories'];
		$hide_meta_comment   = $settings['hide_meta_comment'];
		$hide_meta_excerpt   = $settings['hide_meta_excerpt'];
		$hide_format_icons   = $settings['hide_format_icons'];

		$post_thumb_size  = $settings['post_thumb_size'];
		$bpost_thumb_size = $settings['bpost_thumb_size'];

		echo '<div class="penci-block-el featured-area featured-' . $slider_class . '">';
		if ( $slider_style == 'style-37' ):
			echo '<div class="penci-featured-items-left">';
		endif;
		echo '<div class="penci-owl-carousel penci-owl-featured-area elsl-'. $slider_class .'"' . $this->get_slider_data( $settings ) . '>';
		include dirname( __FILE__ ) . "/{$slider_style}.php";
		echo '</div>';
		echo '</div>';
	}

	public function get_class_slider( $settings ) {
		$slider_style = $settings['style'] ? $settings['style'] : 'style-1';

		$slider_class = $slider_style;
		if ( $slider_style == 'style-5' ) {
			$slider_class = 'style-4 style-5';
		} elseif ( $slider_style == 'style-30' ) {
			$slider_class = 'style-29 style-30';
		} elseif ( $slider_style == 'style-36' ) {
			$slider_class = 'style-35 style-36';
		}

		if ( $settings['enable_flat_overlay'] && in_array( $slider_style, array( 'style-6', 'style-7', 'style-8', 'style-9', 'style-10', 'style-11', 'style-12', 'style-13', 'style-14', 'style-15', 'style-16', 'style-17', 'style-18', 'style-19', 'style-20', 'style-21', 'style-22', 'style-23', 'style-24', 'style-25', 'style-26', 'style-27', 'style-28' ) ) ) {
			$slider_class .= ' penci-flat-overlay';
		}

		return $slider_class;
	}

	public function get_slider_data( $settings ) {
		$slider_style = $settings['style'] ? $settings['style'] : 'style-1';

		$output = '';

		if ( $slider_style == 'style-7' || $slider_style == 'style-8' ) {
			$output .= ' data-item="4" data-desktop="4" data-tablet="2" data-tabsmall="1"';
		} elseif ( $slider_style == 'style-9' || $slider_style == 'style-10' ) {
			$output .= ' data-item="3" data-desktop="3" data-tablet="2" data-tabsmall="1"';
		} elseif ( $slider_style == 'style-11' || $slider_style == 'style-12' ) {
			$output .= ' data-item="2" data-desktop="2" data-tablet="2" data-tabsmall="1"';
		} elseif ( in_array( $slider_style, array( 'style-35', 'style-37' ) ) ) {
			$data_next_prev = 'yes' == $settings['shownav'] ? 'true' : 'false';
			$data_dots      = 'yes' == $settings['showdots'] ? 'true' : 'false';
			$output         .= ' data-dots="' . $data_dots . '" data-nav="' . $data_next_prev . '"';
		}

		$output .= 'data-style="' . $slider_style . '"';
		$output .= 'data-auto="' . ( 'yes' == $settings['autoplay'] ? 'true' : 'false' ) . '"';
		$output .= 'data-autotime="' . ( $settings['auto_time'] ? intval( $settings['auto_time'] ) : '4000' ) . '"';
		$output .= 'data-speed="' . ( $settings['speed'] ? intval( $settings['speed'] ) : '600' ) . '"';
		$output .= 'data-loop="' . ( 'yes' == $settings['loop'] ? 'true' : 'false' ) . '"';

		return $output;
	}

	public static function show_missing_settings( $label, $mess ) {
		$output = '';
		if ( is_user_logged_in() ) {
			$output .= '<div class="penci-missing-settings">';
			$output .= '<span>' . $label . '</span>';
			$output .= $mess;
			$output .= '</div>';
		}

		return $output;
	}

	/**
	 * Get image sizes.
	 *
	 * Retrieve available image sizes after filtering `include` and `exclude` arguments.
	 */
	public function get_list_image_sizes( $default = false ) {
		$wp_image_sizes = $this->get_all_image_sizes();

		$image_sizes = array();

		if ( $default ) {
			$image_sizes[''] = esc_html__( 'Default', 'soledad' );
		}

		foreach ( $wp_image_sizes as $size_key => $size_attributes ) {
			$control_title = ucwords( str_replace( '_', ' ', $size_key ) );
			if ( is_array( $size_attributes ) ) {
				$control_title .= sprintf( ' - %d x %d', $size_attributes['width'], $size_attributes['height'] );
			}

			$image_sizes[ $size_key ] = $control_title;
		}

		$image_sizes['full'] = esc_html__( 'Full', 'soledad' );

		return $image_sizes;
	}

	public function get_all_image_sizes() {
		global $_wp_additional_image_sizes;

		$default_image_sizes = [ 'thumbnail', 'medium', 'medium_large', 'large' ];

		$image_sizes = [];

		foreach ( $default_image_sizes as $size ) {
			$image_sizes[ $size ] = [
				'width'  => (int) get_option( $size . '_size_w' ),
				'height' => (int) get_option( $size . '_size_h' ),
				'crop'   => (bool) get_option( $size . '_crop' ),
			];
		}

		if ( $_wp_additional_image_sizes ) {
			$image_sizes = array_merge( $image_sizes, $_wp_additional_image_sizes );
		}

		return $image_sizes;
	}
}
