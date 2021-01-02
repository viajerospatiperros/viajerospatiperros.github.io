<?php
$group_icon  = 'Icon';
$group_color = 'Typo & Color';

vc_map( array(
	'base'          => "penci_latest_tweets",
	'icon'          => get_template_directory_uri() . '/images/vc-icon.png',
	'category'      => 'Soledad',
	'html_template' => get_template_directory() . '/inc/js_composer/shortcodes/latest_tweets/frontend.php',
	'weight'        => 775,
	'name'          => __( 'Penci Latest Tweets', 'soledad' ),
	'description'   => 'Latest Tweets Block',
	'controls'      => 'full',
	'params'        => array_merge(
		array(
			array(
				'param_name' => 'custom_markup',
				'type'       => 'penci_custom_markup',
				'value'      => '<span style="color: #ff0000;">Note Important:</span> To use this widget you need fill complete your twitter information <a target="_blank" href="' . admin_url( 'options-general.php?page=tdf_settings' ) . '">here</a>',
			),
			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Align This Widget:', 'soledad' ),
				'param_name' => 'pc_aligncenter',
				'value'      => array(
					__( 'Align Center', 'soledad' ) => 'pc_aligncenter',
					__( 'Align Left', 'soledad' )   => 'pc_alignleft',
					__( 'Align Right', 'soledad' )  => 'pc_alignright',
				),
				'std'        => 'pc_aligncenter',
			),
			array(
				'type'       => 'checkbox',
				'heading'    => esc_html__( 'Hide tweets date?', 'soledad' ),
				'param_name' => 'date',
				'value'      => array( __( 'Yes', 'soledad' ) => 'yes' ),
			),
			array(
				'type'       => 'checkbox',
				'heading'    => esc_html__( 'Disable Auto Play Tweets Slider?', 'soledad' ),
				'param_name' => 'auto',
				'value'      => array( __( 'Yes', 'soledad' ) => 'yes' ),
			),

			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Custom Reply text:', 'soledad' ),
				'param_name' => 'reply',
				'std'        => esc_html__( 'Reply', 'soledad' ),
			),
			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Custom Retweet text:', 'soledad' ),
				'param_name' => 'retweet',
				'std'        => esc_html__( 'Retweet', 'soledad' ),
			),
			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Custom Favorite text:', 'soledad' ),
				'param_name' => 'favorite',
				'std'        => esc_html__( 'Favorite', 'soledad' ),
			),
		),
		Penci_Vc_Params_Helper::heading_block_params(),
		Penci_Vc_Params_Helper::params_heading_typo_color(),
		array(
			array(
				'type'             => 'textfield',
				'param_name'       => 'color_Tweets_css',
				'heading'          => esc_html__( 'Tweets colors', 'soledad' ),
				'value'            => '',
				'group'            => $group_color,
				'edit_field_class' => 'penci-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Text color', 'soledad' ),
				'param_name'       => 'tweets_text_color',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'tweets_text_size',
				'heading'          => __( 'Font size for Text', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
				'group'            => $group_color,
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Date color', 'soledad' ),
				'param_name'       => 'tweets_date_color',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'tweets_date_size',
				'heading'          => __( 'Font size for Date', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
				'group'            => $group_color,
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Icon and Link color', 'soledad' ),
				'param_name'       => 'tweets_link_color',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'tweets_link_size',
				'heading'          => __( 'Font size for Link', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
				'group'            => $group_color,
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Dot background color', 'soledad' ),
				'param_name'       => 'tweets_dot_color',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Dot border and background active color', 'soledad' ),
				'param_name'       => 'tweets_dot_hcolor',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
		),
		Penci_Vc_Params_Helper::extra_params()
	)
) );