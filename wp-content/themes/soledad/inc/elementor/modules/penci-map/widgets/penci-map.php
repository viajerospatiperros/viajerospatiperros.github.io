<?php

namespace PenciSoledadElementor\Modules\PenciMap\Widgets;

use PenciSoledadElementor\Base\Base_Widget;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class PenciMap extends Base_Widget {

	public function get_name() {
		return 'penci-map';
	}

	public function get_title() {
		return esc_html__( 'Penci Map', 'soledad' );
	}

	public function get_icon() {
		return 'eicon-google-maps';
	}

	public function get_keywords() {
		return array( 'map' );
	}

	public function get_script_depends() {
		return array( 'google-map' );
	}

	protected function _register_controls() {
		parent::_register_controls();

		$this->start_controls_section(
			'section_general', array(
				'label' => esc_html__( 'Map', 'soledad' ),
				'tab'   => Controls_Manager::TAB_CONTENT,
			)
		);
		$this->add_control(
			'map_using', array(
				'label'   => __( 'Insert Map Using', 'soledad' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'address',
				'options' => array(
					'address' => esc_html__( 'Address', 'soledad' ),
					'coordinates' => esc_html__( 'Coordinates', 'soledad' ),
				)
			)
		);
		$this->add_control(
			'address', array(
				'label'   => __( 'Address', 'soledad' ),
				'type'    => Controls_Manager::TEXT,
				'condition' => array( 'map_using' => 'address' ),
			)
		);
		$this->add_control(
			'latitude', array(
				'label'   => __( 'Latitude', 'soledad' ),
				'type'    => Controls_Manager::TEXT,
				'condition' => array( 'map_using' => 'coordinates' ),
			)
		);
		$this->add_control(
			'longtitude', array(
				'label'   => __( 'Longtitude', 'soledad' ),
				'type'    => Controls_Manager::TEXT,
				'condition' => array( 'map_using' => 'coordinates' ),
				'separator'   => 'after',
			)
		);
		$this->add_control(
			'map_type', array(
				'label'   => __( 'Map type', 'soledad' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'road',
				'options' => array(
					'road'      => esc_html__( 'Road', 'soledad' ),
					'satellite' => esc_html__( 'Satellite', 'soledad' ),
					'hybrid'    => esc_html__( 'Hybrid', 'soledad' ),
					'terrain'   => esc_html__( 'Terrain', 'soledad' ),
					'custom'    => esc_html__( 'Custom', 'soledad' ),
				)
			)
		);
		$this->add_control(
			'map_width', array(
				'label'     => __( 'Width', 'soledad' ),
				'type'      => Controls_Manager::SLIDER,
				'range'     => array( '%' => array( 'min' => 0, 'max' => 100) ,'px' => array( 'min' => 0, 'max' => 2000 ) ),
				'size_units' => array( '%','px' ),
			)
		);
		$this->add_control(
			'map_height', array(
				'label'     => __( 'Height', 'soledad' ),
				'type'      => Controls_Manager::NUMBER,
			)
		);
		$this->add_control(
			'marker_img',
			array(
				'label'     => __( 'Marker Image', 'soledad' ),
				'type'      => Controls_Manager::MEDIA,
				'separator'   => 'before',
			)
		);
		$this->add_control(
			'marker_title', array(
				'label'   => __( 'Marker Title', 'soledad' ),
				'type'    => Controls_Manager::TEXT,
			)
		);
		$this->add_control(
			'info_window', array(
				'label'   => __( 'Info Window', 'soledad' ),
				'type'    => Controls_Manager::TEXTAREA,
				'separator'   => 'after',
			)
		);
		$pmetas = array(
			'map_is_zoom'   => array( 'label' => __( 'Zoom', 'soledad' ) ),
			'map_pan'   => array( 'label' => __( 'Pan', 'soledad' ) ),
			'map_scale'   => array( 'label' => __( 'Map scale', 'soledad' ) ),
			'map_street_view'   => array( 'label' => __( 'Street view', 'soledad' ) ),
			'map_rotate'   => array( 'label' => __( 'Rotate', 'soledad' ) ),
			'map_overview'   => array( 'label' => __( 'Overview map', 'soledad' ) ),
			'map_scrollwheel'   => array( 'label' => __( 'Scrollwheel', 'soledad' ) ),
		);

		foreach ( $pmetas as $key => $pmeta ) {
			$this->add_control(
				$key, array(
					'label'     => $pmeta['label'],
					'type'      => Controls_Manager::SWITCHER,
					'label_on'  => __( 'Yes', 'soledad' ),
					'label_off' => __( 'No', 'soledad' ),
				)
			);
		}

		$this->add_control(
			'map_zoom', array(
				'label'   => __( 'Zoom', 'soledad' ),
				'type'    => Controls_Manager::SELECT,
				'default' => '8',
				'options' => array(
					6  => 6,
					7  => 7,
					8  => 8,
					9  => 9,
					10 => 10,
					11 => 11,
					12 => 12,
					13 => 13,
					14 => 14,
					15 => 15,
					16 => 16,
				)
			)
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings              = $this->get_settings();


		$default = array(
			'penci_block_width' => '3',
			'shortcode_id'    => 'map',
			'map_using'       => '',
			'address'         => '',
			'latitude'        => '',
			'longtitude'      => '',
			'map_type'        => '',
			'map_width'       => '',
			'map_height'      => '',
			'marker_img'      => '',
			'marker_title'    => '',
			'info_window'     => '',
			'map_is_zoom'     => '',
			'map_pan'         => '',
			'map_scale'       => '',
			'map_street_view' => '',
			'map_rotate'      => '',
			'map_overview'    => '',
			'map_scrollwheel' => '',
			'map_zoom'        => '',
			'come_from'       => 'vc'
		);

		$atts = shortcode_atts( $default, $settings );

		$css_class = 'penci-block-vc penci-google-map';

		$width  = isset( $settings['map_width']['size'] ) && $settings['map_width']['size'] ? $settings['map_width']['size'] . $settings['map_width']['unit'] : '100%';
		$height = intval( $settings['map_height'] ) ? $settings['map_height'] . 'px' : '500px';

		$atts['map_zoom']   = intval( $settings['map_zoom'] ? $settings['map_zoom'] : 8 );
		$atts['marker_img'] = $this->get_marker_img_el( $settings['marker_img'] );

		$option = htmlentities( json_encode( $atts ), ENT_QUOTES, "UTF-8" );

		$block_id = 'penci_map_' . rand( 1000, 100000 );

		printf( '<div style="width:%s;height:%s" id="%s" class="%s" data-map_options="%s"></div>', $width, $height,$block_id, $css_class, $option );
	}

	public function get_marker_img_el( $image, $thumbnail_size = 'thumbnail' ) {
		if ( empty( $image['url'] ) ) {
			return '';
		}
		if ( ! empty( $image['id'] ) ) {
			$attr = wp_get_attachment_image_src( $image['id'], $thumbnail_size );
			if( isset( $attr['url'] ) && $attr['url'] ) {
				$image['url'] = $attr['url'];
			}
		}
		return $image['url'];
	}

}
