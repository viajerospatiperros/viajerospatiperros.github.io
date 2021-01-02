<?php
$group_color = 'Typo & Color';

vc_map( array(
	'base'          => 'penci_about_me',
	'icon'          => get_template_directory_uri() . '/images/vc-icon.png',
	'category'      => 'Soledad',
	'html_template' => get_template_directory() . '/inc/js_composer/shortcodes/about_me/frontend.php',
	'weight'        => 700,
	'name'          => __( 'Penci Widget About Me', 'soledad' ),
	'description'   => __( 'About Me Block', 'soledad' ),
	'controls'      => 'full',
	'params'        => array_merge(
		array(
			array(
				'type'        => 'attach_image',
				'heading'     => __( 'About Image', 'soledad' ),
				'param_name'  => 'image',
				'value'       => '',
				'description' => __( 'Select image from media library.', 'soledad' ),
				'admin_label' => true,
			),
			array(
				'type'        => 'textfield',
				'heading'     => __( 'About Image size', 'soledad' ),
				'param_name'  => 'thumbnail_size',
				'std'         => 'full',
				'description' => __( 'Enter image size (Example: "thumbnail", "medium", "large", "full" or other sizes defined by theme). Alternatively enter size in pixels (Example: 200x100 (Width x Height)). Leave parameter empty to use "thumbnail" by default.', 'soledad' ),
			),
			array(
				'type'        => 'href',
				'heading'     => __( 'Add Link for About Image', 'soledad' ),
				'param_name'  => 'link',
				'description' => __( 'If you want to clickable on the about me image link to other page, put the link here. Include http:// or https:// on the link', 'soledad' )
			),
			array(
				'type'       => 'checkbox',
				'heading'    => __( ' Open in new window', 'soledad' ),
				'param_name' => 'link_external'
			),
			array(
				'type'       => 'checkbox',
				'heading'    => __( 'Add nofollow', 'soledad' ),
				'param_name' => 'link_nofollow'
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Heading Text:', 'soledad' ),
				'param_name'  => 'about_us_heading',
				'value'       => '',
				'admin_label' => true,
			),
			array(
				'type'       => 'textarea_html',
				'holder'     => 'div',
				'heading'    => __( 'About us text: ( you can use HTML here )', 'soledad' ),
				'param_name' => 'content',
				'value'      => __( '<p>I am text block. Click edit button to change this text.</p>', 'soledad' ),
			),
			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Align This Block', 'soledad' ),
				'param_name' => 'align_block',
				'value'      => array(
					__( 'Align Left', 'soledad' )   => 'left',
					__( 'Align Center', 'soledad' ) => 'center',
					__( 'Align Right', 'soledad' )  => 'right',
				),
				'std'        => 'center',
			),
			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Title HTML Tag', 'soledad' ),
				'param_name' => 'title_tag',
				'value'      => array(
					__( 'H1', 'soledad' )   => 'h1',
					__( 'H2', 'soledad' )   => 'h2',
					__( 'H3', 'soledad' )   => 'h3',
					__( 'H4', 'soledad' )   => 'h4',
					__( 'H5', 'soledad' )   => 'h5',
					__( 'H6', 'soledad' )   => 'h6',
					__( 'div', 'soledad' )  => 'div',
					__( 'span', 'soledad' ) => 'span',
					__( 'p', 'soledad' )    => 'p',
				),
				'std'        => 'h3',
			),
			array(
				'type'        => 'checkbox',
				'heading'     => __( 'Make About Image Circle:', 'soledad' ),
				'param_name'  => 'img_circle',
				'description' => __( 'To use this feature, please use square image for your image above to get best display.', 'soledad' )
			),
			array(
				'type'        => 'checkbox',
				'heading'     => __( 'Disable Lazyload for About Me Image:', 'soledad' ),
				'param_name'  => 'dis_lazyload',
				'description' => __( 'To use this feature, please use square image for your image above to get best display.', 'soledad' )
			),
			array(
				'type'       => 'penci_number',
				'param_name' => 'image_space',
				'heading'    => __( 'Image Margin Bottom', 'soledad' ),
				'value'      => '',
				'std'        => '',
				'suffix'     => 'px',
				'min'        => 1,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'       => 'penci_number',
				'param_name' => 'image_width',
				'heading'    => __( 'Image Width', 'soledad' ),
				'value'      => '',
				'std'        => '',
				'suffix'     => 'px',
				'min'        => 1,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'       => 'penci_number',
				'param_name' => 'title_bottom_space',
				'heading'    => __( 'Title Margin Bottom', 'soledad' ),
				'value'      => '',
				'std'        => '',
				'suffix'     => 'px',
				'min'        => 1,
				'edit_field_class' => 'vc_col-sm-6',
			),
		),
		Penci_Vc_Params_Helper::heading_block_params(),
		Penci_Vc_Params_Helper::params_heading_typo_color(),
		Penci_Vc_Params_Helper::extra_params(),
		array(
			array(
				'type'             => 'textfield',
				'param_name'       => 'heading_ptitle_settings',
				'heading'          => esc_html__( 'About us text', 'soledad' ),
				'value'            => '',
				'group'            => $group_color,
				'edit_field_class' => 'penci-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Heading Text Color', 'soledad' ),
				'param_name'       => 'title_color',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Content Color', 'soledad' ),
				'param_name'       => 'content_color',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
		)
	)
) );