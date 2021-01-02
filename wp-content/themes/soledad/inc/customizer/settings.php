<?php
/**
 * All settings in customizer go here
 *
 * @package Wordpress
 *
 * @param object $wp_customize
 *
 * @since   1.0
 */
function pencidesign_register_theme_customizer( $wp_customize ) {

	// Add Sections
	$wp_customize->add_section( 'pencidesign_new_section_custom_css', array(
		'title'       => 'Custom CSS',
		'description' => 'Add your custom CSS which will overwrite the theme CSS',
		'priority'    => 80,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_transition_lang', array(
		'title'       => 'Quick Text Translation',
		"description" => "If you are using WPML or Polylang - Use shortcode [pencilang] with multiple languages (ex: [pencilang en_US='Share' fr_FR='Partager' language_code='Your language text' /]) - Make sure plugin Penci Shortcodes are installed. You can check languages code <a href='https://make.wordpress.org/polyglots/teams/' target='_blank'>here</a>",
		'priority'    => 76,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_color_posts', array(
		'title'       => 'Colors for Single Post',
		'description' => '',
		'priority'    => 75,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_color_footer', array(
		'title'       => 'Colors for Footer',
		'description' => '',
		'priority'    => 70,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_color_footer_signup', array(
		'title'       => 'Colors for Footer Sign-Up Form',
		'description' => '',
		'priority'    => 66,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_color_sidebar', array(
		'title'       => 'Options & Colors for Sidebar',
		'description' => '',
		'priority'    => 65,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_grid_masonry_layout', array(
		'title'       => 'Colors for Other Post Layouts',
		'description' => 'All options here for Grid Layout, List Layout, Masonry Layout, Boxed Layout, Magazine & Photography Layout',
		'priority'    => 62,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_standard_layout', array(
		'title'       => 'Colors for Standard & Classic Post Layouts',
		'description' => 'All options here for Standard Layout, Classic Layout and 1st Posts of 1st Standard & 1st Classic',
		'priority'    => 61,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_color_featured_slider', array(
		'title'       => 'Colors for Featured Slider',
		'description' => 'With Penci Slider Style, Please choose colors when you add new a slide',
		'priority'    => 60,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_vertical_nav', array(
		'title'       => 'Color for Mobile Nav',
		'description' => 'Resize browser width smaller to see change',
		'priority'    => 57,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_signup_header', array(
		'title'       => 'Colors & Options for Header Sign-Up Form',
		'description' => 'All options here only for MailChimp Sign-Up Form on header. If you do not use MailChimp Sign-Up Form in header let ignore it',
		'priority'    => 56,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_color_topbar', array(
		'title'       => 'Colors for Header',
		'description' => '',
		'priority'    => 55,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_color_top_bar', array(
		'title'       => 'Colors for Top Bar',
		'description' => '',
		'priority'    => 52,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_color_home', array(
		'title'       => 'Colors for Homepage & Home Title Box Options',
		'description' => '',
		'priority'    => 51,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_color_general', array(
		'title'       => 'Colors General',
		'description' => '',
		'priority'    => 50,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_woocommerce', array(
		'title'    => 'General Options',
		'priority' => 1,
		'panel'    => 'woocommerce',
	) );
	$wp_customize->add_section( 'pencidesign_new_section_portfolio', array(
		'title'       => 'Portfolio Options',
		'description' => 'If have any options here does not work, please update plugin Penci Portfolio to latest version by go to Plugins > All Plugins > Remove plugin Penci Portfolio and go to Appearance > Install Plugins to re-installation this plugin',
		'priority'    => 47,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_not_found', array(
		'title'       => '404 Page Options',
		'description' => '',
		'priority'    => 46,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_footer', array(
		'title'       => 'Footer Options',
		'description' => '',
		'priority'    => 45,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_social', array(
		'title'       => 'Social Media Options',
		'description' => 'Enter full your social link ( include http:// or https:// on your link ), Icons will not show if left blank.',
		'priority'    => 40,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_page', array(
		'title'       => 'Page Options',
		'description' => '',
		'priority'    => 35,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_post', array(
		'title'       => 'Single Post Options',
		'description' => '',
		'priority'    => 30,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_grid', array(
		'title'       => 'Other Layouts Options',
		'description' => 'All options here for Grid Layout, Masonry Layout, List Layout and List Boxed Layout',
		'priority'    => 25,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_standard', array(
		'title'       => 'Standard & Classic Layouts Options',
		'description' => '',
		'priority'    => 20,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_featured_video', array(
		'title'       => 'Featured Video Background Options',
		'description' => '',
		'priority'    => 16,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_featured', array(
		'title'       => 'Featured Slider Options',
		'description' => '',
		'priority'    => 15,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_homepage', array(
		'title'       => 'Homepage Options',
		'description' => '',
		'priority'    => 10,
	) );

	$wp_customize->add_section( 'pencidesign_new_section_logo_header', array(
		'title'       => 'Logo and Header Options',
		'description' => '',
		'priority'    => 5,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_topbar', array(
		'title'       => 'Topbar Options',
		'description' => '',
		'priority'    => 2,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_general', array(
		'title'    => 'General Options',
		'priority' => 1,
	) );


	/**
	 * Add settings
	 *
	 * @package Wordpress
	 */

	// General
	$wp_customize->add_setting( 'penci_favicon', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_body_boxed_layout', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_body_boxed_bg_color', array(
		'default'           => '#F5F5F5',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_body_boxed_bg_image', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_body_boxed_bg_repeat', array(
		'default'           => 'no-repeat',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_body_boxed_bg_attachment', array(
		'default'           => 'fixed',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_body_boxed_bg_size', array(
		'default'           => 'cover',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_home_layout', array(
		'default'           => 'standard',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_archive_layout', array(
		'default'           => 'standard',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_disable_lazyload_layout', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_image_size', array(
		'default'           => 'horizontal',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );

	$wp_customize->add_setting( 'penci_general_featured_image_ratio', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );

	$wp_customize->add_setting( 'penci_image_border_radius', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_archive_ad_above', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );
	$wp_customize->add_setting( 'penci_archive_ad_below', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );
	$wp_customize->add_setting( 'penci_general_post_orderby', array(
		'default'           => 'date',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_general_post_order', array(
		'default'           => 'DESC',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_disable_breadcrumb', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_hide_latest_post_homepage', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_include_search_page', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_show_modified_date', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_enable_smooth_scroll', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_page_navigation_numbers', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );

	$wp_customize->add_setting( 'penci_archive_nav_ajax', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_archive_nav_scroll', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_arc_number_load_more', array(
		'default'           => '6',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );

	$wp_customize->add_setting( 'penci_page_navigation_ajax', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_page_navigation_scroll', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_number_load_more', array(
		'default'           => '6',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_page_navigation_align', array(
		'default'           => 'align-left',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_sticky', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_home', array(
		'default'           => true,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_archive', array(
		'default'           => true,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_left_sidebar_home', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_two_sidebar_home', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_left_sidebar_archive', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_two_sidebar_archive', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );

	$wp_customize->add_setting( 'penci_dis_sidebar_bbforums', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_dis_sidebar_bbforum', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_dis_sidebar_bbtoppic', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );

	$wp_customize->add_setting( 'penci_remove_cat_words', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_remove_tag_words', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'enable_pri_cat_yoast_seo', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_show_pricat_yoast_only', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_show_pricat_first_yoast', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );

	$wp_customize->add_setting( 'penci_font_for_title', array(
		'default'           => '"Raleway", "100:200:300:regular:500:600:700:800:900", sans-serif',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_font_weight_title', array(
		'default'           => 'normal',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_font_for_body', array(
		'default'           => '"PT Serif", "regular:italic:700:700italic", serif',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_font_for_size_body', array(
		'default'           => '14',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_name_home', array(
		'default'           => 'main-sidebar',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_name_category', array(
		'default'           => 'main-sidebar',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_name_single', array(
		'default'           => 'main-sidebar',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_name_pages', array(
		'default'           => 'main-sidebar',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );

	$wp_customize->add_setting( 'penci_sidebar_left_name_home', array(
		'default'           => 'main-sidebar-left',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_left_name_category', array(
		'default'           => 'main-sidebar-left',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_left_name_single', array(
		'default'           => 'main-sidebar-left',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_left_name_pages', array(
		'default'           => 'main-sidebar-left',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );

	// Start GPRD Policy Options
	$options_color_gprd = array(
		'penci_gprd_bgcolor'     => esc_html__( 'Background For Cookie Law Policy PopUp', 'soledad' ),
		'penci_gprd_color'       => esc_html__( 'Text Color For Cookie Law Policy PopUp', 'soledad' ),
		'penci_gprd_btn_color'   => esc_html__( 'Text Color For Accept Button', 'soledad' ),
		'penci_gprd_btn_bgcolor' => esc_html__( 'Background For Accept Button', 'soledad' ),
		'penci_gprd_border'      => esc_html__( 'Border Color For Cookie Law Policy PopUp', 'soledad' ),
	);
	$wp_customize->add_setting( 'penci_general_gprd_heading', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_disable_default_fonts', array(
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_disable_all_fonts', array(
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_enable_cookie_law', array(
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_show_cookie_law', array(
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_gprd_desc', array(
		'default'           => penci_default_setting_customizer( 'penci_gprd_desc' ),
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );
	$wp_customize->add_setting( 'penci_gprd_btn_accept', array(
		'default'           => penci_default_setting_customizer( 'penci_gprd_btn_accept' ),
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_gprd_rmore', array(
		'default'           => penci_default_setting_customizer( 'penci_gprd_rmore' ),
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_gprd_rmore_link', array(
		'default'           => penci_default_setting_customizer( 'penci_gprd_rmore_link' ),
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_gprd_policy_text', array(
		'default'           => penci_default_setting_customizer( 'penci_gprd_policy_text' ),
		'sanitize_callback' => 'sanitize_text_field'
	) );

	foreach ( $options_color_gprd as $key => $label ) {
		$wp_customize->add_setting( $key, array(
			'sanitize_callback' => 'sanitize_hex_color'
		) );
	}
	// End GPRD Policy Options


	// Start social share
	$wp_customize->add_setting( 'penci_social_share_heading', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_social_share_heading', array(
		'label'    => esc_html__( 'Options for show/hide social sharing', 'soledad' ),
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_social_share_heading',
		'type'     => 'heading',
		'priority' => 90
	) ) );

	$list_block_social = array(
		'plike'       => esc_html__( 'Hide Post Like', 'soledad' ),
		'facebook'    => esc_html__( 'Hide Share Facebook', 'soledad' ),
		'twitter'     => esc_html__( 'Hide Share Twitter', 'soledad' ),
		'pinterest'   => esc_html__( 'Hide Share Pinterest', 'soledad' ),
		'linkedin'    => esc_html__( 'Hide Share Linkedin', 'soledad' ),
		'tumblr'      => esc_html__( 'Hide Share Tumblr', 'soledad' ),
		'reddit'      => esc_html__( 'Hide Share Reddit', 'soledad' ),
		'stumbleupon' => esc_html__( 'Hide Share Stumbleupon', 'soledad' ),
		'whatsapp'    => esc_html__( 'Hide Share Whatsapp', 'soledad' ),
		'telegram'    => esc_html__( 'Hide Share Telegram', 'soledad' ),
		'line'        => esc_html__( 'Hide Share LINE', 'soledad' ),
		'email'       => esc_html__( 'Hide Share Email', 'soledad' ),
	);

	foreach ( $list_block_social as $social_id => $social_label ) {

		$default = '';
		if ( in_array( $social_id, array( 'linkedin', 'tumblr', 'reddit', 'stumbleupon', 'whatsapp', 'telegram', 'line' ) ) ) {
			$default = 1;
		}

		$social_id = 'penci__hide_share_' . $social_id;
		$wp_customize->add_setting( $social_id, array(
			'sanitize_callback' => 'penci_sanitize_checkbox_field',
			'default'           => $default
		) );
		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			$social_id,
			array(
				'label'    => $social_label,
				'section'  => 'pencidesign_new_section_general',
				'type'     => 'checkbox',
				'settings' => $social_id,
				'priority' => 95
			)
		) );

		$list_block_social ++;
	}
	// End social share
	
	// Manager Image Size
	$wp_customize->add_setting( 'penci_manage_images_sizes', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_manage_images_sizes', array(
		'label'    => esc_html__( 'Manage Image Sizes from The Theme', 'soledad' ),
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_manage_images_sizes',
		'type'     => 'heading',
		'priority' => 95
	) ) );
	
	$list_image_sizes = array(
		'penci_dthumb_1920_auto'   => esc_html__( 'Disable Image Size - 1920 x auto', 'soledad' ),
		'penci_dthumb_1920_800'   => esc_html__( 'Disable Image Size - 1920 x 800px', 'soledad' ),
		'penci_dthumb_1170_auto'   => esc_html__( 'Disable Image Size - 1170 x auto', 'soledad' ),
		'penci_dthumb_1170_663'   => esc_html__( 'Disable Image Size - 1170 x 663px', 'soledad' ),
		'penci_dthumb_780_516'   => esc_html__( 'Disable Image Size - 780 x 516px', 'soledad' ),
		'penci_dthumb_585_390'   => esc_html__( 'Disable Image Size - 585 x 390px', 'soledad' ),
		'penci_dthumb_585_auto'   => esc_html__( 'Disable Image Size - 585 x auto', 'soledad' ),
		'penci_dthumb_585_585' => esc_html__( 'Disable Image Size - 585 x 585px', 'soledad' ),
		'penci_dthumb_480_650'  => esc_html__( 'Disable Image Size - 480 x 650px', 'soledad' ),
		'penci_dthumb_263_175'  => esc_html__( 'Disable Image Size - 263 x 175px', 'soledad' )
	);
	foreach ( $list_image_sizes as $id_size => $label_size ) {
		$wp_customize->add_setting( $id_size, array(
			'default'           => false,
			'sanitize_callback' => 'penci_sanitize_checkbox_field'
		) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, $id_size, array(
			'label'    => $label_size,
			'section' => 'pencidesign_new_section_general',
			'settings' => $id_size,
			'type'     => 'checkbox',
			'priority' => 96
		) ) );
	}
	

	// Schema markup
	$wp_customize->add_setting( 'penci_schema_markup', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_schema_markup', array(
		'label'    => esc_html__( 'Options for Schema MarkUp', 'soledad' ),
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_schema_markup',
		'type'     => 'heading',
		'priority' => 96
	) ) );

	$wp_customize->add_setting( 'penci_logo_schema', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'penci_logo_schema', array(
		'label'    => 'Custom General Logo for Schema Markup',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_logo_schema',
		'priority' => 96
	) ) );
	
	$wp_customize->add_setting( 'penci_schema_wphead', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_schema_wphead', array(
		'label'    => 'Remove WPHeader Schema Data',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_schema_wphead',
		'type'     => 'checkbox',
		'priority' => 96
	) ) );
	
	$wp_customize->add_setting( 'penci_schema_wpfoot', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_schema_wpfoot', array(
		'label'    => 'Remove WPFooter Schema Data',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_schema_wpfoot',
		'type'     => 'checkbox',
		'priority' => 96
	) ) );
	
	$wp_customize->add_setting( 'penci_schema_sitenav', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_schema_sitenav', array(
		'label'    => 'Remove Site Navigation Schema Data',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_schema_sitenav',
		'type'     => 'checkbox',
		'priority' => 96
	) ) );
	
	$wp_customize->add_setting( 'penci_schema_hentry', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_schema_hentry', array(
		'label'    => 'Remove Hentry Schema Data',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_schema_hentry',
		'type'     => 'checkbox',
		'priority' => 96
	) ) );

	$wp_customize->add_setting( 'penci_schema_organization', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_schema_organization', array(
		'label'    => 'Remove General Organization Schema Data',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_schema_organization',
		'type'     => 'checkbox',
		'priority' => 96
	) ) );

	$wp_customize->add_setting( 'penci_schema_website', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_schema_website', array(
		'label'    => 'Remove Website Schema Data',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_schema_website',
		'type'     => 'checkbox',
		'priority' => 96
	) ) );

	$wp_customize->add_setting( 'penci_schema_breadcrumbs', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_schema_breadcrumbs', array(
		'label'    => 'Remove Breadcrumbs Schema Data',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_schema_breadcrumbs',
		'type'     => 'checkbox',
		'priority' => 96
	) ) );

	$wp_customize->add_setting( 'penci_schema_single', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_schema_single', array(
		'label'    => 'Remove Schema Data for Single Posts/Pages',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_schema_single',
		'type'     => 'checkbox',
		'priority' => 96
	) ) );

	$wp_customize->add_setting( 'penci_post_use_newsarticle', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_use_newsarticle', array(
		'label'    => 'Use NewsArticle Schema for All Posts',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_post_use_newsarticle',
		'type'     => 'checkbox',
		'priority' => 96
	) ) );

	// Extra Options
	$wp_customize->add_setting( 'penci_general_extra', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_general_extra', array(
		'label'    => esc_html__( 'Extra Options', 'soledad' ),
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_general_extra',
		'type'     => 'heading',
		'priority' => 96
	) ) );
	$wp_customize->add_setting( 'penci_youtube_api_key', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_youtube_api_key', array(
		'label'       => esc_attr__( 'YouTube API Key', 'soledad' ),
		'section'     => 'pencidesign_new_section_general',
		'settings'    => 'penci_youtube_api_key',
		'type'        => 'text',
		'priority'    => 96,
		'description' => 'Please go to <a href="https://developers.google.com/youtube/v3/getting-started?hl=en" target="_blank">https://developers.google.com/youtube/v3/getting-started?hl=en</a> and check this giude and get the YouTube API Key',
	) ) );

	$wp_customize->add_setting( 'penci_api_weather_key', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_api_weather_key', array(
		'label'       => esc_attr__( 'Weather API Key', 'soledad' ),
		'section'     => 'pencidesign_new_section_general',
		'settings'    => 'penci_api_weather_key',
		'type'        => 'text',
		'priority'    => 96,
		'description' => '<a href="' . esc_url( 'https://openweathermap.org/appid#get' ) . '" target="_blank">' . esc_html__( 'Click here to get an api key', 'soledad' ) . '</a>'
	) ) );

	$wp_customize->add_setting( 'penci_map_api_key', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_map_api_key', array(
		'label'    => esc_attr__( 'Map API Key', 'soledad' ),
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_map_api_key',
		'type'     => 'text',
		'priority' => 96
	) ) );

	$wp_customize->add_setting( 'penci_fontawesome_ver5', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_fontawesome_ver5', array(
		'label'    => 'Use Fontawesome Version 5',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_fontawesome_ver5',
		'type'     => 'checkbox',
		'priority' => 96
	) ) );

	$wp_customize->add_setting( 'penci_load_customcss_file', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_load_customcss_file', array(
		'label'    => 'Reduce DOM elements by load Custom CSS via CSS file.',
		'description'  => 'If you are using a plugin to minify your CSS - do not enable this feature.',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_load_customcss_file',
		'type'     => 'checkbox',
		'priority' => 100
	) ) );

	// Top bar
	$wp_customize->add_setting( 'penci_top_bar_show', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_full_width', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_custom_text', array(
		'default'           => esc_html__( 'Top Posts', 'soledad' ),
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_display_by', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_filter_by', array(
		'default'           => 'category',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_category', array(
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_tags', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_posts_autoplay', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_auto_time', array(
		'default'           => '3000',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_auto_speed', array(
		'default'           => '300',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_posts_per_page', array(
		'default'           => '10',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_top_posts_lowcase', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_top_post_size', array(
		'default'           => '12',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_top_post_size_title', array(
		'default'           => '12',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_enable_menu', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_off_uppercase', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_off_uppercase_menu', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_menu_level_one', array(
		'default'           => '11',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_sub_menu_size', array(
		'default'           => '11',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_social_size', array(
		'default'           => '13',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_hide_social', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_brand_social', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );

	// Header and logo
	$wp_customize->add_setting( 'penci_logo', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_logo_max_width', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_logo_max_width_overflow', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_mobile_nav_logo', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	
	$wp_customize->add_setting( 'penci_custom_url_logo', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_custom_url_logo_vertical', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_header_padding', array(
		'default'           => '40',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );

	$wp_customize->add_setting( 'penci_header_layout', array(
		'default'           => 'header-1',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_mainmenu_height', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_mainmenu_height_sticky', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_header_ctwidth', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_header_menu_style', array(
		'default'           => 'menu-style-1',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_font_for_menu', array(
		'default'           => '"Raleway", "100:200:300:regular:500:600:700:800:900", sans-serif',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_font_weight_menu', array(
		'default'           => 'normal',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	
	$wp_customize->add_setting( 'penci_overflow_logo', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_header_enable_padding', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_header_remove_line_hover', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_header_slogan_text', array(
		'default'           => 'keep your memories alive',
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );
	$wp_customize->add_setting( 'penci_header_remove_line_slogan', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_font_size_slogan', array(
		'default'           => '14',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_font_for_slogan', array(
		'default'           => '"PT Serif", "regular:italic:700:700italic", serif',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_font_style_slogan', array(
		'default'           => 'italic',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_font_weight_slogan', array(
		'default'           => 'bold',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_header_3_banner', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_header_3_banner_url', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_header_3_adsense', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );
	$wp_customize->add_setting( 'penci_remove_border_bottom_header', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_disable_sticky_header', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_header_social_check', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_header_social_nav', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_header_social_brand', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_size_header_social_check', array(
		'default'           => '14',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'size_header_search_icon_check', array(
		'default'           => '14',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_header_logo_mobile', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_header_logo_mobile_center', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_topbar_search_check', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_topbar_mega_date', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_off_uppercase_cat_mega', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_font_size_title_cat_mega', array(
		'default'           => '12',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_font_size_child_cat_mega', array(
		'default'           => '12',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_topbar_menu_uppercase', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_font_size_lv1', array(
		'default'           => '12',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_font_size_drop', array(
		'default'           => '12',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_font_size_mobile_nav', array(
		'default'           => '13',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_megamenu_border_radius', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_topbar_mega_disable_lazy', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_topbar_mega_hide_alltab', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_mega_featured_image_size', array(
		'default'           => 'horizontal',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_mega_featured_image_ratio', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_topbar_mega_icons', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_topbar_mega_category', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_header_logo_vertical', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_header_social_vertical', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_header_social_vertical_brand', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_top_insta_overlay_image', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_top_insta_hide_icon', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_custom_code_inside_head_tag', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );
	$wp_customize->add_setting( 'penci_custom_code_after_body_tag', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );

	// Homepage
	$wp_customize->add_setting( 'penci_home_adsense_below_slider', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );
	$wp_customize->add_setting( 'penci_home_hide_boxes', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_home_box_style_2', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_home_box_style_3', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_home_box_text_size', array(
		'default'           => '14',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_home_box_column', array(
		'default'           => '3',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_home_box_type', array(
		'default'           => 'horizontal',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_home_box_weight', array(
		'default'           => 'normal',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_home_boxes_new_tab', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_home_box_img1', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_home_box_text1', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_home_box_url1', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_home_box_img2', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_home_box_text2', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_home_box_url2', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_home_box_img3', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_home_box_text3', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_home_box_url3', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_home_box_img4', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_home_box_text4', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_home_box_url4', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_home_box_img5', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_home_box_text5', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_home_box_url5', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_home_box_img6', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_home_box_text6', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_home_box_url6', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_home_box_img7', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_home_box_text7', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_home_box_url7', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_home_box_img8', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_home_box_text8', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_home_box_url8', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_home_title', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_home_h1content', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_enable_home_popular_posts', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_home_popular_post_numberposts', array(
		'default'           => '10',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_home_popular_type', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_home_popular_title', array(
		'default'           => 'Popular Posts',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_home_popular_cat', array(
		'default'           => '0',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_home_popular_post_font_size', array(
		'default'           => '14',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_hide_date_home_popular', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_lowcase_popular_posts', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_enable_home_popular_icons', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_cat', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );
	$wp_customize->add_setting( 'penci_home_exclude_cat', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );
	$wp_customize->add_setting( 'penci_enable_featured_cat_all_layouts', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_move_latest_posts_above', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_cat_margin', array(
		'default'           => '60',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_cat_author', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_cat_date', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_cat_icons', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_cat_overlay7', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_cat_seemore', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_cat_remove_arrow', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_cat_readmore_button', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_cat_readmore_align', array(
		'default'           => 'left',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_cat_remove_excerpt', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_home_lastest_posts_numbers', array(
		'default'           => '10',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_posts_numbers_1', array(
		'default'           => '5',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_posts_numbers_2', array(
		'default'           => '4',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_posts_numbers_3', array(
		'default'           => '4',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_posts_numbers_4', array(
		'default'           => '6',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_posts_numbers_5', array(
		'default'           => '6',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_posts_numbers_6', array(
		'default'           => '5',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_posts_numbers_7', array(
		'default'           => '6',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_posts_numbers_8', array(
		'default'           => '3',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_posts_numbers_9', array(
		'default'           => '8',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_posts_numbers_10', array(
		'default'           => '6',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_posts_numbers_11', array(
		'default'           => '4',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_posts_numbers_12', array(
		'default'           => '6',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_posts_numbers_13', array(
		'default'           => '6',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_posts_numbers_14', array(
		'default'           => '6',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );

	// Featured slider
	$wp_customize->add_setting( 'penci_featured_slider', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_all_page', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_disable_lazyload_slider', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_enable_flat_overlay', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_slider_border_radius', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_style', array(
		'default'           => 'style-1',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_feature_rev_sc', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_enable_next_prev_penci_slider', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_disable_dots_penci_slider', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'featured_slider_orderby', array(
		'default'           => 'date',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'featured_slider_order', array(
		'default'           => 'DESC',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_featured_autoplay', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_auto_time', array(
		'default'           => '4000',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_auto_speed', array(
		'default'           => '600',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_featured_penci_slider_height', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_featured_penci_slider_ratio', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_penci_slider_remove_overlay', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_filter_type', array(
		'default'           => 'category',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_color_overlay_opacity', array(
		'default'           => '0',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_color_overlay', array(
		'default'           => '#000000',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_partent_overlay_opacity', array(
		'default'           => '0.05',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_featured_cat', array(
		'default'           => '0',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_featured_tags', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );
	$wp_customize->add_setting( 'penci_featured_cat_hide', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_exclude_featured_cat', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_center_box', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_off_uppercase_title', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_hide_categories', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_meta_comment', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_meta_date', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_meta_author', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_meta_excerpt', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_icons', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_slides', array(
		'default'           => '6',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );

	// Featured Video Background
	$wp_customize->add_setting( 'penci_enable_featured_video_bg', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_video_img_mobile', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_featured_video_url', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_featured_video_height', array(
		'default'           => '600',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_featured_video_start', array(
		'default'           => '0',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_featured_video_audio', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_video_image', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_featured_video_text_heading', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_featured_video_sub_heading', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_featured_video_heading_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_video_sub_heading_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	// Standard Settings
	$wp_customize->add_setting( 'penci_standard_thumbnail', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_standard_meta_overlay', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_standard_disable_autoplay_gallery', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_standard_thumb_crop', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_standard_on_uppercase_cat', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_standard_off_uppercase_title', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_standard_share_box', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_standard_cat', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_standard_author', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_standard_date', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_standard_comment', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_standard_viewcount', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_standard_remove_line', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_standard_auto_excerpt', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_standard_effect_button', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_standard_continue_reading_button', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );

	// Grid Settings
	$wp_customize->add_setting( 'penci_grid_icon_format', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_grid_meta_overlay', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_grid_uppercase_cat', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_grid_off_title_uppercase', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_grid_lightbox_video', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_grid_off_letter_spacing', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_grid_nocrop_list', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_grid_share_box', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_grid_cat', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_grid_author', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_grid_date', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_grid_comment', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_grid_countviews', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_grid_remove_line', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_grid_remove_excerpt', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_grid_add_readmore', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_grid_remove_arrow', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_grid_readmore_button', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_grid_readmore_align', array(
		'default'           => 'left',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_post_excerpt_length', array(
		'default'           => 30,
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );


	// Single Settings
	$wp_customize->add_setting( 'penci_post_tags', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_post_author', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_post_author_email', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_post_related', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_post_related_grid', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_post_related_exclusive_cat', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_related_by', array(
		'default'           => 'categories',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_related_orderby', array(
		'default'           => 'date',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_related_sort_order', array(
		'default'           => 'DESC',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_post_related_text', array(
		'default'           => 'You may also like',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_post_related_icons', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_off_uppercase_post_title_related', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_post_twitter_share_text', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );
	$wp_customize->add_setting( 'penci_post_remove_lines_related', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_hide_date_related', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_post_related_autoplay', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_post_related_dots', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_post_related_arrows', array(
		'default'           => true,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_numbers_related_post', array(
		'default'           => '10',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_related_post_popup', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_rltpopup_position', array(
		'default'           => 'left',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_rltpopup_by', array(
		'default'           => 'categories',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_rltpopup_orderby', array(
		'default'           => 'date',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_rltpopup_sort_order', array(
		'default'           => 'DESC',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_rltpopup_heading_text', array(
		'default'           => 'Read also',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_rltpopup_hide_mobile', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_rltpopup_hide_date', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_post_hide_comments', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_post_move_comment_box', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_single_hide_save_fields', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );

	$wp_customize->add_setting( 'penci_single_gdpr', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );

	$wp_customize->add_setting( 'penci_single_gdpr_text', array(
		'default'           => esc_html__( '* By using this form you agree with the storage and handling of your data by this website.', 'soledad' ),
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );

	$wp_customize->add_setting( 'penci_post_disable_gallery', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_gallery_dstyle', array(
		'default'           => 'justified',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_image_height_gallery', array(
		'default'           => '150',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_post_adsense_single10', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );
	$wp_customize->add_setting( 'penci_post_adsense_one', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );
	$wp_customize->add_setting( 'penci_post_adsense_two', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );
	$wp_customize->add_setting( 'penci_post_share', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );

	$wp_customize->add_setting( 'penci_single_style_cscount', array(
		'default'           => 's1',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_single_poslcscount', array(
		'default'           => 'below-content',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_single_ordersec', array(
		'default'           => 'author-postnav-related-comments',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_post_thumb', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_post_thumb_caption', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_post_featured_image_radius', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_post_featured_image_ratio', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_post_caption_below', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_post_caption_disable_italic', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_blockquote_style', array(
		'default'           => 'style-1',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_post_nav', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_post_nav_thumbnail', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_off_uppercase_post_title_nav', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_single_style', array(
		'default'           => 'style-1',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_single_layout', array(
		'default'           => 'right',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_single_smaller_width', array(
		'default'           => '780',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_disable_lazyload_single', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_enable_jarallax_single', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_disable_autoplay_single_slider', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_disable_image_titles_galleries', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_move_title_bellow', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_disable_lightbox_single', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_post_cat', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_on_uppercase_post_cat', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_off_uppercase_post_title', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_single_title_font_size', array(
		'default'           => '24',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_single_title_font_msize', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );

	$opt_single_title_fsize = array(
		'psingle_title_size_s3'  => esc_html__( 'Custom Font Size Posts Title for Post Template Style 3', 'soledad' ),
		'psingle_title_size_s4'  => esc_html__( 'Custom Font Size Posts Title for Post Template Style 4', 'soledad' ),
		'psingle_title_size_s5'  => esc_html__( 'Custom Font Size Posts Title for Post Template Style 5', 'soledad' ),
		'psingle_title_size_s6'  => esc_html__( 'Custom Font Size Posts Title for Post Template Style 6', 'soledad' ),
		'psingle_title_size_s7'  => esc_html__( 'Custom Font Size Posts Title for Post Template Style 7', 'soledad' ),
		'psingle_title_size_s8'  => esc_html__( 'Custom Font Size Posts Title for Post Template Style 8', 'soledad' ),
		'psingle_title_size_s9'  => esc_html__( 'Custom Font Size Posts Title for Post Template Style 9', 'soledad' ),
		'psingle_title_size_s10' => esc_html__( 'Custom Font Size Posts Title for Post Template Style 10', 'soledad' ),
	);
	foreach ( $opt_single_title_fsize as $opt_single_title_fsize_id => $opt_single_title_fsize_label ) {
		$wp_customize->add_setting( $opt_single_title_fsize_id, array(
			'default'           => '',
			'sanitize_callback' => 'penci_sanitize_number_field'
		) );
	}

	$wp_customize->add_setting( 'penci_off_letter_space_post_title', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_align_left_post_title', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_single_title_h1_size', array(
		'default'           => '24',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_single_title_h2_size', array(
		'default'           => '22',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_single_title_h3_size', array(
		'default'           => '20',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_single_title_h4_size', array(
		'default'           => '18',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_single_title_h5_size', array(
		'default'           => '16',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_single_title_h6_size', array(
		'default'           => '14',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_single_title_p_size', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_ads_inside_content_html', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );
	$wp_customize->add_setting( 'penci_ads_inside_content_style', array(
		'default'           => 'style-1',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_ads_inside_content_num', array(
		'default'           => '4',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_single_meta_author', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_single_meta_date', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_single_meta_comment', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_single_show_cview', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_enable_ajax_view', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );

	// Page Settings
	$wp_customize->add_setting( 'penci_page_comments', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_page_share', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_page_default_template_layout', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_page_custom_width', array(
		'default'           => '900',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_page_hide_featured_image', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_page_title_uppercase', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );

	// Social Media

	$wp_customize->add_setting( 'penci_facebook', array(
		'default'           => 'https://www.facebook.com/PenciDesign',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_twitter', array(
		'default'           => 'https://twitter.com/PenciDesign',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_instagram', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_pinterest', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_tumblr', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_linkedin', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_flickr', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_behance', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_youtube', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_email_me', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_vk', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_bloglovin', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_vine', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_soundcloud', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_snapchat', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_spotify', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_github', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_stack', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_twitch', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_steam', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_vimeo', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_xing', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_whatsapp', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_telegram', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_reddit', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_ok', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_500px', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_stumbleupon', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_wechat', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_weibo', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_line', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_viber', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_discord', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_rss', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_slack', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_mixcloud', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );

	// Footer Options
	$wp_customize->add_setting( 'penci_footer_adsense', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );
	$wp_customize->add_setting( 'penci_footer_widget_area', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_footer_widget_area_layout', array(
		'default'           => 'style-1',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_footer_width', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_footer_widget_title_center', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_footer_widget_padding', array(
		'default'           => '60',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_go_to_top', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_go_to_top_floating', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_footer_social_around', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_footer_brand_social', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_footer_disable_radius_social', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_footer_social_remove_text', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_footer_insta_title_overlay', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_footer_insta_hide_icon', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_footer_social_drop_line', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_footer_social_size', array(
		'default'           => '14',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_footer_social_lowercase', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_footer_social_text_size', array(
		'default'           => '14',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_footer_social', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_hide_footer_logo', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_footer_logo', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_custom_url_logo_footer', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_footer_menu', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_footer_menu_size', array(
		'default'           => '14',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_footer_copyright', array(
		'default'           => '@2019 - All Right Reserved. Designed and Developed by <a rel="nofollow" href="https://1.envato.market/YYJ4P" target="_blank">PenciDesign</a>',
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );
	$wp_customize->add_setting( 'penci_footer_copyright_remove_italic', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_footer_copyright_size', array(
		'default'           => '14',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_footer_analytics', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );

	// 404 Page Options
	$wp_customize->add_setting( 'penci_not_found_image', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_not_found_sub_heading', array(
		'default'           => "OOPS! Page you're looking for doesn't exist. Please use search for help",
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );
	$wp_customize->add_setting( 'penci_not_found_hide_search', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_not_found_hide_backhome', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );

	// Portfolio options
	$wp_customize->add_setting( 'penci_portfolio_cat_enable_sidebar', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_portfolio_single_enable_sidebar', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_portfolio_single_enable_2sidebar', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_single_portfolio', array(
		'default'           => 'main-sidebar',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_left_single_portfolio', array(
		'default'           => 'main-sidebar-left',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_portfolio_hide_featured_image_single', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_portfolio_share_box', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_portfolio_next_prev_project', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_portfolio_next_text', array(
		'default'           => 'Next Project',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_portfolio_prev_text', array(
		'default'           => 'Previous Project',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_portfolio_enable_comment', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_portfolio_layout', array(
		'default'           => 'masonry',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_portfolio_item_style', array(
		'default'           => 'text_overlay',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_portfolio_overlay_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_portfolio_overlay_opacity', array(
		'default'           => '0.85',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_portfolio_title_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_portfolio_cate_color', array(
		'default'           => '#888888',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_portfolio_title_hcolor', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_portfolio_cate_hcolor', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	$wp_customize->add_setting( 'penci_portfolio_extra_heading', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_pfl_custom_slug', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_pfl_custom_catslug', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );

	// Woocommerce options
	$wp_customize->add_setting( 'penci_woo_shop_hide_cart_icon', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'size_header_cart_icon_check', array(
		'default'           => '17',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_woo_shop_enable_sidebar', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_woo_cat_enable_sidebar', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_woo_single_enable_sidebar', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_woo_left_sidebar', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_woo_disable_breadcrumb', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_woo_paging_align', array(
		'default'           => 'center',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_woo_disable_zoom', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_woo_post_per_page', array(
		'default'           => '24',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_woo_number_related_products', array(
		'default'           => '4',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );


	// Color Options

	// Color general
	$wp_customize->add_setting( 'penci_color_accent', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_enable_dark_layout', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_bg_color_dark', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_text_color_dark', array(
		'default'           => '#afafaf',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_border_color_dark', array(
		'default'           => '#DEDEDE',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_meta_color_dark', array(
		'default'           => '#949494',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	// Color Homepage
	$wp_customize->add_setting( 'penci_home_boxes_overlay', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_boxes_title_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_boxes_accent_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_popular_label_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_popular_post_title_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_popular_post_title_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_popular_post_date_color', array(
		'default'           => '#888888',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_featured_cat_lowcase', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_cat_size', array(
		'default'           => '14',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_featured_cat_style', array(
		'default'           => 'style-1',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_featured_cat_image_8', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_featured_cat8_repeat', array(
		'default'           => 'no-repeat',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_featured_cat_align', array(
		'default'           => 'pcalign-left',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_heading_latest_align', array(
		'default'           => 'pcalign-center',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_home_title_box_bg', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_title_box_outer_bg', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_title_box_border_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_title_box_border_inner_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_title_box_border_bottom5', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_title_box_border_bottom7', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_title_box_border_top10', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_title_box_shapes_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_title_box_text_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_remove_border_outer', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_home_remove_arrow_down', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_title_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_featured_title_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_featured_accent_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_featured3_overlay_color', array(
		'default'           => '#000000',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_featured3_overlay_opacity', array(
		'default'           => '0.15',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured3_overlay_hover_opacity', array(
		'default'           => '0.7',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured3_title_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_featured3_title_hover_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_featured3_meta_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	// Color Top Bar
	$wp_customize->add_setting( 'penci_top_bar_bg', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_top_bar_top_posts_bg', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_top_bar_top_posts_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_top_bar_button_color', array(
		'default'           => '#999999',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_top_bar_button_hover_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_top_bar_title_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_top_bar_title_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_top_bar_menu_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_top_bar_menu_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_top_bar_menu_border', array(
		'default'           => '#414141',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_top_bar_menu_dropdown_bg', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_top_bar_social_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_top_bar_social_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	// Color Header
	$wp_customize->add_setting( 'penci_header_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_header_background_image', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_header_slogan_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_header_slogan_line_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_header_social_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_header_social_color_hover', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_main_bar_bg', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_main_bar_border_color', array(
		'default'           => '#ECECEC',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_main_bar_nav_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_main_bar_color_active', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_main_bar_padding_color', array(
		'default'           => '#ececec',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_drop_bg_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_drop_items_border', array(
		'default'           => '#E0E0E0',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_drop_text_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_drop_text_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_drop_border_style2', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_mega_bg_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_mega_child_cat_bg_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_mega_post_date_color', array(
		'default'           => '#999999',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_mega_post_category_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_mega_accent_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_mega_border_style2', array(
		'default'           => '#f1f1f2',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_main_bar_search_magnify', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_main_bar_close_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	// Header sign-up form
	$wp_customize->add_setting( 'penci_header_signup_padding', array(
		'default'           => '20',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_move_signup_below', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_move_signup_full_width', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_signup_display_homepage', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_header_signup_bg', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_header_signup_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_header_signup_input_border', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_header_signup_input_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_header_signup_submit_bg', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_header_signup_submit_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_header_signup_submit_bg_hover', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_header_signup_submit_color_hover', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	// Vertical Menu & Mobile Menu Color
	$wp_customize->add_setting( 'penci_ver_nav_overlay_color', array(
		'default'           => '#000000',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_ver_nav_close_bg', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_ver_nav_close_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_ver_nav_bg', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_ver_nav_accent_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_ver_nav_accent_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_ver_nav_items_border', array(
		'default'           => '#DEDEDE',
		'sanitize_callback' => 'sanitize_hex_color'
	) );


	// Featured Slider
	$wp_customize->add_setting( 'penci_featured_slider_overlay_bg', array(
		'default'           => '#000000',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_overlay_bg_opacity', array(
		'default'           => '0.7',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_overlay_bg_hover_opacity', array(
		'default'           => '0.9',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_box_bg_color', array(
		'default'           => '#000000',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_box_opacity', array(
		'default'           => '0.7',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_cat_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_cat_hover_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_title_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_title_hover_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_meta_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_excerpt_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_icon_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_color_29', array(
		'default'           => '#000000',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_overlay_opacity29', array(
		'default'           => '0.3',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_lines_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_button_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_button_hover_bg', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_button_hover_color', array(
		'default'           => '#010101',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	// Standard Layout Color
	$wp_customize->add_setting( 'penci_standard_categories_action_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_standard_title_post_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_standard_title_post_hover_color', array(
		'default'           => '#888888',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_standard_share_icon_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_standard_share_icon_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_standard_accent_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	// Grid & Masonry Layout Color
	$wp_customize->add_setting( 'penci_masonry_categories_accent_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_masonry_title_post_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_masonry_title_post_hover_color', array(
		'default'           => '#888888',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_masonry_box_icon', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_masonry_box_icon_hover', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_masonry_accent_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_photography_overlay_color', array(
		'default'           => '#000000',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_photography_overlay_opacity', array(
		'default'           => '0.3',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_photography_overlay_hover_opacity', array(
		'default'           => '0.7',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_photography_categories_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_photography_title_post_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_photography_title_post_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_photography_meta_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_photography_accent_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_overlay_title_post_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_overlay_title_post_hover_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_overlay_cat_post_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_overlay_cat_hover_post_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_overlay_author_post_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	// Footer Sign-Up Form
	$wp_customize->add_setting( 'penci_footer_signup_showemail', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_footer_signup_area_bg', array(
		'default'           => '#f7f7f7',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_signup_heading_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_signup_des_color', array(
		'default'           => '#5c5c5c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_signup_email_border', array(
		'default'           => '#d7d7d7',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'footer_signup_email_border_hover', array(
		'default'           => '#888888',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_signup_email_text_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_signup_button_bg', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_signup_button_bg_hover', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_signup_button_text', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_signup_button_text_hover', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	// Footer
	$wp_customize->add_setting( 'penci_footer_widget_area_bg', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_widget_bg_image', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_footer_widget_area_text_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_widget_area_list_border', array(
		'default'           => '#E0E0E0',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_widget_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_widget_title_border_color', array(
		'default'           => '#e0e0e0',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_widget_title_border_width', array(
		'default'           => '3',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_footer_widget_accent_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_widget_accent_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_instagram_title_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_icon_color', array(
		'default'           => '#999999',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_icon_hover_icon_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_icon_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_social_text_color', array(
		'default'           => '#999999',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_social_hover_text_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_social_border_color', array(
		'default'           => '#4A4A4A',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'footer_instagram_title_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_copyright_bg_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_copyright_bg_image', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_footer_go_top_color', array(
		'default'           => '#999999',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_go_top_hover_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_go_top_float_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_go_top_float_icon_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_menu_color', array(
		'default'           => '#999999',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_menu_color_hover', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_copyright_text_color', array(
		'default'           => '#999999',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_copyright_accent_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	// Sidebar color
	$wp_customize->add_setting( 'penci_sidebar_widget_margin', array(
		'default'           => '60',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_heading_lowcase', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_heading_size', array(
		'default'           => '14',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_heading_style', array(
		'default'           => 'style-1',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_heading_image_8', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_sidebar_heading_align', array(
		'default'           => 'pcalign-center',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_heading8_repeat', array(
		'default'           => 'no-repeat',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_heading_bg', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_sidebar_heading_outer_bg', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_sidebar_heading_border_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_sidebar_heading_border_inner_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_sidebar_heading_border_color5', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'sidebar_heading_bordertop_color10', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_sidebar_heading_border_color7', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_sidebar_heading_shapes_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_sidebar_heading_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_sidebar_remove_border_outer', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_remove_arrow_down', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_accent_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_sidebar_accent_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	// Single color
	$wp_customize->add_setting( 'penci_single_cat_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_single_title_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_single_share_icon_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_single_share_tcolor', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_single_share_icon_style3_bgcolor', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_single_share_icon_style3_hbgcolor', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_single_share_icon_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_single_number_like_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_single_accent_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_single_color_text', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_single_color_links', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	$more_opt_single = array(
		'penci_single_color_title_s568' => esc_html__( 'Custom Color Posts Title for Post Template Style 5, 6 and 8', 'soledad' ),
		'penci_single_color_cat_s568'   => esc_html__( 'Custom Color Categories for Post Template Style 5, 6 and 8', 'soledad' ),
		'penci_single_color_meta_s568'  => esc_html__( 'Custom Color for Posts Meta for Post Template Style 5, 6 and 8', 'soledad' ),
		'penci_single_bgcolor_header'   => esc_html__( 'Background Color Single Header for Post Template Style 9 & 10', 'soledad' ),
		'penci_single_color_title_s10'  => esc_html__( 'Custom Color Posts Title for Post Template Style 10', 'soledad' ),
		'penci_single_color_cat_s10'    => esc_html__( 'Custom Color Categories for Post Template Style 10', 'soledad' ),
		'penci_single_color_meta_s10'   => esc_html__( 'Custom Color for Posts Meta for Post Template Style 10', 'soledad' ),
		'penci_single_color_bread_s10'  => esc_html__( 'Custom Color for Breadcrumb for Post Template Style 10', 'soledad' ),

		'penci_bquote_text_color'   => esc_html__( 'Custom Text Color for Blockquote', 'soledad' ),
		'penci_bquote_author_color' => esc_html__( 'Custom Author Color for Blockquote', 'soledad' ),
		'penci_bquote_bgcolor'      => esc_html__( 'Custom Background Color for Blockquote', 'soledad' ),
		'penci_bquote_border_color' => esc_html__( 'Custom Border Color and Blockquote Icon for Blockquote', 'soledad' ),
	);

	foreach ( $more_opt_single as $opt_single_color_id => $opt_single_color_label ) {
		$wp_customize->add_setting( $opt_single_color_id, array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_hex_color'
		) );
	}

	$wp_customize->add_setting( 'penci_rltpop_heading_bg', array(
		'default'           => '#111111',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_rltpop_heading_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_rltpop_close_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_rltpop_bg_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_rltpop_title_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_rltpop_title_hover', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_rltpop_date_color', array(
		'default'           => '#888888',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_rltpop_border_color', array(
		'default'           => '#eaeaea',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	// Custom CSS
	$wp_customize->add_setting( 'penci_custom_css', array(
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );

	/*= Add Control
	--------------------------------------------------------------------*/
	// General
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'upload_favicon', array(
		'label'    => 'Upload Favicon',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_favicon',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'body_boxed_layout', array(
		'label'       => 'Enable Body Boxed Layout',
		'section'     => 'pencidesign_new_section_general',
		'description' => 'This option does not apply when you enable vertical navigation',
		'settings'    => 'penci_body_boxed_layout',
		'type'        => 'checkbox',
		'priority'    => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'body_boxed_bg_color', array(
		'label'    => 'Background Color for Body Boxed',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_body_boxed_bg_color',
		'priority' => 3
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'body_boxed_bg_image', array(
		'label'    => 'Background Image for Body Boxed',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_body_boxed_bg_image',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'body_boxed_bg_repeat', array(
		'label'    => 'Background Body Boxed Repeat',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_body_boxed_bg_repeat',
		'type'     => 'select',
		'priority' => 5,
		'choices'  => array(
			'no-repeat' => 'No Repeat',
			'repeat'    => 'Repeat'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'body_boxed_bg_attachment', array(
		'label'    => 'Background Body Boxed Attachment',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_body_boxed_bg_attachment',
		'type'     => 'select',
		'priority' => 6,
		'choices'  => array(
			'fixed'  => 'Fixed',
			'scroll' => 'Scroll',
			'local'  => 'Local'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'body_boxed_bg_size', array(
		'label'    => 'Background Body Boxed Size',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_body_boxed_bg_size',
		'type'     => 'select',
		'priority' => 7,
		'choices'  => array(
			'cover' => 'Cover',
			'auto'  => 'Auto',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_layout', array(
		'label'    => 'Homepage Layout',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_home_layout',
		'type'     => 'radio',
		'priority' => 10,
		'choices'  => array(
			'standard'         => 'Standard Posts',
			'classic'          => 'Classic Posts',
			'overlay'          => 'Overlay Posts',
			'grid'             => 'Grid Posts',
			'grid-2'           => 'Grid 2 Columns Posts',
			'masonry'          => 'Grid Masonry Posts',
			'masonry-2'        => 'Grid Masonry 2 Columns Posts',
			'list'             => 'List Posts',
			'boxed-1'          => 'Boxed Posts Style 1',
			'boxed-2'          => 'Boxed Posts Style 2',
			'mixed'            => 'Mixed Posts',
			'mixed-2'          => 'Mixed Posts Style 2',
			'photography'      => 'Photography Posts',
			'magazine-1'       => 'Magazine Style 1',
			'magazine-2'       => 'Magazine Style 2',
			'standard-grid'    => '1st Standard Then Grid',
			'standard-grid-2'  => '1st Standard Then Grid 2 Columns',
			'standard-list'    => '1st Standard Then List',
			'standard-boxed-1' => '1st Standard Then Boxed',
			'classic-grid'     => '1st Classic Then Grid',
			'classic-grid-2'   => '1st Classic Then Grid 2 Columns',
			'classic-list'     => '1st Classic Then List',
			'classic-boxed-1'  => '1st Classic Then Boxed',
			'overlay-grid'     => '1st Overlay Then Grid',
			'overlay-list'     => '1st Overlay Then List'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'archive_layout', array(
		'label'    => 'Category, Tag, Search, Archive Layout',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_archive_layout',
		'type'     => 'radio',
		'priority' => 15,
		'choices'  => array(
			'standard'         => 'Standard Posts',
			'classic'          => 'Classic Posts',
			'overlay'          => 'Overlay Posts',
			'grid'             => 'Grid Posts',
			'grid-2'           => 'Grid 2 Columns Posts',
			'masonry'          => 'Grid Masonry Posts',
			'masonry-2'        => 'Grid Masonry 2 Columns Posts',
			'list'             => 'List Posts',
			'boxed-1'          => 'Boxed Posts Style 1',
			'boxed-2'          => 'Boxed Posts Style 2',
			'mixed'            => 'Mixed Posts',
			'mixed-2'          => 'Mixed Posts Style 2',
			'photography'      => 'Photography Posts',
			'standard-grid'    => '1st Standard Then Grid',
			'standard-grid-2'  => '1st Standard Then Grid 2 Columns',
			'standard-list'    => '1st Standard Then List',
			'standard-boxed-1' => '1st Standard Then Boxed',
			'classic-grid'     => '1st Classic Then Grid',
			'classic-grid-2'   => '1st Classic Then Grid 2 Columns',
			'classic-list'     => '1st Classic Then List',
			'classic-boxed-1'  => '1st Classic Then Boxed',
			'overlay-grid'     => '1st Overlay Then Grid',
			'overlay-list'     => '1st Overlay Then List'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'disable_lazyload_layout', array(
		'label'    => 'Disable Lazyload on All Posts Layouts & Widgets',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_disable_lazyload_layout',
		'type'     => 'checkbox',
		'priority' => 15
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_image_size', array(
		'label'       => 'Featured Images Type:',
		'section'     => 'pencidesign_new_section_general',
		'settings'    => 'penci_featured_image_size',
		'description' => 'This feature does not apply for Featured Sliders and some special places. For featured images on category mega menu items, please select option for it via <strong>Customize > Logo and Header Options</strong>',
		'type'        => 'radio',
		'priority'    => 15,
		'choices'     => array(
			'horizontal' => 'Horizontal Size',
			'square'     => 'Square Size',
			'vertical'   => 'Vertical Size',
			'custom'     => 'Custom',
		)
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_general_featured_image_ratio', array(
		'label'       => 'Custom Aspect Ratio for Featured Image',
		'section'     => 'pencidesign_new_section_general',
		'settings'    => 'penci_general_featured_image_ratio',
		'description' => 'The aspect ratio of an element describes the proportional relationship between its width and its height. E.g: <strong>3:2</strong>. Default is 3:2 . This option apply  for <strong>Featured Images Type is Custom</strong>',
		'priority'    => 15
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'image_border_radius', array(
		'label'       => 'Custom Border Radius for Featured Images',
		'section'     => 'pencidesign_new_section_general',
		'settings'    => 'penci_image_border_radius',
		'description' => 'Fill value for border radius you want here - You can use pixel or percent. E.g:  <strong>10px</strong>  or  <strong>10%</strong>',
		'priority'    => 15
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'archive_ad_above', array(
		'label'       => 'Google Adsense/Custom HTML Code to Display Above Posts Layout for Archive Pages',
		'section'     => 'pencidesign_new_section_general',
		'settings'    => 'penci_archive_ad_above',
		'description' => 'You can display google adsense/custom HTML code above posts on category, tags, search, archive page by use this option',
		'type'        => 'textarea',
		'priority'    => 16
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'archive_ad_below', array(
		'label'       => 'Google Adsense/Custom HTML Code to Display Below Posts Layout for Archive Pages',
		'section'     => 'pencidesign_new_section_general',
		'settings'    => 'penci_archive_ad_below',
		'description' => 'You can display google adsense/custom HTML code below posts on category, tags, search, archive page by use this option',
		'type'        => 'textarea',
		'priority'    => 17
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'general_post_orderby', array(
		'label'    => 'Sort Posts By',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_general_post_orderby',
		'type'     => 'select',
		'priority' => 20,
		'choices'  => array(
			'date'          => 'Published Date',
			'ID'            => 'Post ID',
			'modified'      => 'Modified Date',
			'title'         => 'Post Title',
			'rand'          => 'Random Posts',
			'comment_count' => 'Comment Count'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'general_post_order', array(
		'label'    => 'Select Posts Order',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_general_post_order',
		'type'     => 'select',
		'priority' => 25,
		'choices'  => array(
			'DESC' => 'Descending',
			'ASC'  => 'Ascending '
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'show_modified_date', array(
		'label'    => 'Display Modified Date Replace with Published Date',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_show_modified_date',
		'type'     => 'checkbox',
		'priority' => 26
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'enable_smooth_scroll', array(
		'label'    => 'Enable Smooth Scroll',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_enable_smooth_scroll',
		'type'     => 'checkbox',
		'priority' => 26
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hide_latest_post_homepage', array(
		'label'    => 'Hide Latest Posts On Homepage',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_hide_latest_post_homepage',
		'type'     => 'checkbox',
		'priority' => 26
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'include_search_page', array(
		'label'    => 'Include Pages to Search Results',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_include_search_page',
		'type'     => 'checkbox',
		'priority' => 26
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'disable_breadcrumb', array(
		'label'    => 'Disable Breadcrumb',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_disable_breadcrumb',
		'type'     => 'checkbox',
		'priority' => 26
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_navigation_ajax', array(
		'label'    => 'Enable Load More Button on Homepage',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_page_navigation_ajax',
		'type'     => 'checkbox',
		'priority' => 27
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_navigation_scroll', array(
		'label'    => 'Enable Infinite Scroll on Homepage',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_page_navigation_scroll',
		'type'     => 'checkbox',
		'priority' => 27
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'number_load_more', array(
		'label'    => 'Custom Number Posts for Each Time Load More Posts',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_number_load_more',
		'type'     => 'number',
		'priority' => 27
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_archive_nav_ajax', array(
		'label'    => 'Enable Load More Button for Categories, Tags, Search, Archive Pages',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_archive_nav_ajax',
		'type'     => 'checkbox',
		'priority' => 27
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_archive_nav_scroll', array(
		'label'    => 'Enable Infinite Scroll for Categories, Tags, Search, Archive Pages',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_archive_nav_scroll',
		'type'     => 'checkbox',
		'priority' => 27
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'penci_arc_number_load_more', array(
		'label'    => 'Custom Number Posts for Each Time Load More Posts on Categories, Tags, Search, Archive Pages',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_arc_number_load_more',
		'type'     => 'number',
		'priority' => 27
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_navigation_numbers', array(
		'label'    => 'Enable Page Navigation Numbers',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_page_navigation_numbers',
		'type'     => 'checkbox',
		'priority' => 27
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_navigation_align', array(
		'label'    => 'Page Navigation Numbers Alignment',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_page_navigation_align',
		'type'     => 'select',
		'priority' => 28,
		'choices'  => array(
			'align-left'   => 'Left',
			'align-right'  => 'Right',
			'align-center' => 'Center',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_sticky', array(
		'label'    => 'Enable Sticky Sidebar',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_sidebar_sticky',
		'type'     => 'checkbox',
		'priority' => 29
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_home', array(
		'label'    => 'Enable Sidebar On Homepage',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_sidebar_home',
		'type'     => 'checkbox',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_archive', array(
		'label'    => 'Enable Sidebar On Archives',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_sidebar_archive',
		'type'     => 'checkbox',
		'priority' => 32
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'left_sidebar_home', array(
		'label'    => 'Enable Left Sidebar On Homepage',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_left_sidebar_home',
		'type'     => 'checkbox',
		'priority' => 33
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'two_sidebar_home', array(
		'label'    => 'Enable Two Sidebars On Homepage',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_two_sidebar_home',
		'type'     => 'checkbox',
		'priority' => 33
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'left_sidebar_archive', array(
		'label'    => 'Enable Left Sidebar On Archives',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_left_sidebar_archive',
		'type'     => 'checkbox',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'two_sidebar_archive', array(
		'label'    => 'Enable Two Sidebars On Archives',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_two_sidebar_archive',
		'type'     => 'checkbox',
		'priority' => 35
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_dis_sidebar_bbforums', array(
		'label'    => 'Disable Sidebar for BBPress Forums',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_dis_sidebar_bbforums',
		'type'     => 'checkbox',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_dis_sidebar_bbforum', array(
		'label'    => 'Disable Sidebar for BBPress Forum',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_dis_sidebar_bbforum',
		'type'     => 'checkbox',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_dis_sidebar_bbtoppic', array(
		'label'    => 'Disable Sidebar for BBPress Topic',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_dis_sidebar_bbtoppic',
		'type'     => 'checkbox',
		'priority' => 35
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'remove_cat_words', array(
		'label'    => 'Remove "Category:" Words on Category Page',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_remove_cat_words',
		'type'     => 'checkbox',
		'priority' => 40
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'remove_tag_words', array(
		'label'    => 'Remove "Tag:" Words on Tag Page',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_remove_tag_words',
		'type'     => 'checkbox',
		'priority' => 40
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'enable_pri_cat_yoast_seo', array(
		'label'    => 'Enable Primary Category Feature from Yoast SEO plugin for Breadcrumb',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'enable_pri_cat_yoast_seo',
		'type'     => 'checkbox',
		'priority' => 40
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_show_pricat_yoast_only', array(
		'label'    => 'Show Primary Category from Yoast SEO only',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_show_pricat_yoast_only',
		'type'     => 'checkbox',
		'priority' => 40
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_show_pricat_first_yoast', array(
		'label'    => 'Show Primary Category at First ( When you display full categories )',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_show_pricat_first_yoast',
		'type'     => 'checkbox',
		'priority' => 40
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'font_for_title', array(
		'label'       => 'Font For Title',
		'section'     => 'pencidesign_new_section_general',
		'settings'    => 'penci_font_for_title',
		'description' => 'Default font is "Raleway"',
		'type'        => 'select',
		'priority'    => 41,
		'choices'     => penci_all_fonts()
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'font_weight_title', array(
		'label'    => 'Font Weight For Title',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_font_weight_title',
		'type'     => 'select',
		'priority' => 42,
		'choices'  => array(
			'normal'  => 'Normal',
			'bold'    => 'Bold',
			'bolder'  => 'Bolder',
			'lighter' => 'Lighter',
			'100'     => '100',
			'200'     => '200',
			'300'     => '300',
			'400'     => '400',
			'500'     => '500',
			'600'     => '600',
			'700'     => '700',
			'800'     => '800',
			'900'     => '900'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'font_for_body', array(
		'label'       => 'Font For Body Text',
		'section'     => 'pencidesign_new_section_general',
		'settings'    => 'penci_font_for_body',
		'description' => 'Default font is "PT Serif"',
		'type'        => 'select',
		'priority'    => 43,
		'choices'     => penci_all_fonts()
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'font_for_size_body', array(
		'label'    => 'Custom Size Of Fonts in Posts (Numeric value only, unit is pixel)',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_font_for_size_body',
		'type'     => 'number',
		'priority' => 44
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_name_home', array(
		'label'       => 'Sidebar for Homepage',
		'section'     => 'pencidesign_new_section_general',
		'settings'    => 'penci_sidebar_name_home',
		'description' => 'If sidebar your choice is empty, will display Main Sidebar',
		'type'        => 'select',
		'priority'    => 45,
		'choices'     => get_list_custom_sidebar_option()
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_left_name_home', array(
		'label'       => 'Sidebar Left for Homepage',
		'section'     => 'pencidesign_new_section_general',
		'settings'    => 'penci_sidebar_left_name_home',
		'description' => 'If sidebar your choice is empty, will display Main Sidebar Left. This option just use when you enable 2 sidebars for Homepage',
		'type'        => 'select',
		'priority'    => 46,
		'choices'     => get_list_custom_sidebar_option()
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_name_category', array(
		'label'       => 'Sidebar for Category',
		'section'     => 'pencidesign_new_section_general',
		'settings'    => 'penci_sidebar_name_category',
		'description' => 'If sidebar your choice is empty, will display Main Sidebar',
		'type'        => 'select',
		'priority'    => 50,
		'choices'     => get_list_custom_sidebar_option()
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_left_name_category', array(
		'label'       => 'Sidebar Left for Category',
		'section'     => 'pencidesign_new_section_general',
		'settings'    => 'penci_sidebar_left_name_category',
		'description' => 'If sidebar your choice is empty, will display Main Sidebar Left. This option just use when you enable 2 sidebars for Archive',
		'type'        => 'select',
		'priority'    => 50,
		'choices'     => get_list_custom_sidebar_option()
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_name_single', array(
		'label'       => 'Sidebar for Single',
		'section'     => 'pencidesign_new_section_general',
		'settings'    => 'penci_sidebar_name_single',
		'description' => 'If sidebar your choice is empty, will display Main Sidebar',
		'type'        => 'select',
		'priority'    => 50,
		'choices'     => get_list_custom_sidebar_option()
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_left_name_single', array(
		'label'       => 'Sidebar Left for Single',
		'section'     => 'pencidesign_new_section_general',
		'settings'    => 'penci_sidebar_left_name_single',
		'description' => 'If sidebar your choice is empty, will display Main Sidebar. This option just use when you enable 2 sidebars for Single',
		'type'        => 'select',
		'priority'    => 50,
		'choices'     => get_list_custom_sidebar_option()
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_name_pages', array(
		'label'       => 'Sidebar for Pages',
		'section'     => 'pencidesign_new_section_general',
		'settings'    => 'penci_sidebar_name_pages',
		'description' => 'If sidebar your choice is empty, will display Main Sidebar Left. This option just use when you enable 2 sidebars for Page',
		'type'        => 'select',
		'priority'    => 55,
		'choices'     => get_list_custom_sidebar_option()
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_left_name_pages', array(
		'label'       => 'Sidebar Left for Pages',
		'section'     => 'pencidesign_new_section_general',
		'settings'    => 'penci_sidebar_left_name_pages',
		'description' => 'If sidebar your choice is empty, will display Main Sidebar Left. This option just use when you enable 2 sidebars for Single',
		'type'        => 'select',
		'priority'    => 55,
		'choices'     => get_list_custom_sidebar_option()
	) ) );

	// Start GDPR Policy Options
	$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_general_gprd_heading', array(
		'label'    => esc_html__( 'GDPR Policy Options', 'soledad' ),
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_general_gprd_heading',
		'type'     => 'heading',
		'priority' => 70
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_disable_default_fonts', array(
		'label'    => esc_html__( 'Remove all default google fonts - load default fonts from located hosting ( for GDPR policy )', 'soledad' ),
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_disable_default_fonts',
		'type'     => 'checkbox',
		'priority' => 71
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_disable_all_fonts', array(
		'label'    => esc_html__( 'Remove all default fonts loads by the theme from located hosting', 'soledad' ),
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_disable_all_fonts',
		'description'  => 'This option only works when you check to option "Remove all default google fonts" above.',
		'type'     => 'checkbox',
		'priority' => 71
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_enable_cookie_law', array(
		'label'    => esc_html__( 'Enable Cookie Law Policy PopUp At The Footer', 'soledad' ),
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_enable_cookie_law',
		'type'     => 'checkbox',
		'priority' => 72
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_show_cookie_law', array(
		'label'    => esc_html__( 'Remove "Privacy & Cookies Policy" notice after Accept clicked', 'soledad' ),
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_show_cookie_law',
		'type'     => 'checkbox',
		'priority' => 73
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_gprd_desc', array(
		'label'    => esc_html__( 'Custom Description for Cookie Law Policy', 'soledad' ),
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_gprd_desc',
		'type'     => 'textarea',
		'priority' => 74
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_gprd_btn_accept', array(
		'label'    => esc_html__( 'Custom Text for "Accept"', 'soledad' ),
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_gprd_btn_accept',
		'priority' => 75
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_gprd_rmore', array(
		'label'    => esc_html__( 'Custom Text for "Read More"', 'soledad' ),
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_gprd_rmore',
		'priority' => 76
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_gprd_rmore_link', array(
		'label'    => esc_html__( 'Custom Link for "Read More"', 'soledad' ),
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_gprd_rmore_link',
		'priority' => 77
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_gprd_policy_text', array(
		'label'    => esc_html__( 'Custom Text for "Privacy & Cookies Policy"', 'soledad' ),
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_gprd_policy_text',
		'priority' => 78
	) ) );

	$options_color_gprd_i = 78;
	foreach ( $options_color_gprd as $key => $label ) {
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $key, array(
			'label'    => $label,
			'section'  => 'pencidesign_new_section_general',
			'settings' => $key,
			'priority' => $options_color_gprd_i
		) ) );

		$options_color_gprd_i ++;
	}

	// End GPRD Policy Options

	// Top bar options
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_bar_show', array(
		'label'    => 'Enable Top Bar',
		'section'  => 'pencidesign_new_section_topbar',
		'settings' => 'penci_top_bar_show',
		'type'     => 'checkbox',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_bar_full_width', array(
		'label'    => 'Enable Full Width Layout for Top Bar',
		'section'  => 'pencidesign_new_section_topbar',
		'settings' => 'penci_top_bar_full_width',
		'type'     => 'checkbox',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_bar_custom_text', array(
		'label'       => 'Custom "Top Posts" Text',
		'section'     => 'pencidesign_new_section_topbar',
		'settings'    => 'penci_top_bar_custom_text',
		'description' => 'If you want hide Top Posts text, let empty this',
		'type'        => 'text',
		'priority'    => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_bar_display_by', array(
		'label'    => 'Display Top Posts By',
		'section'  => 'pencidesign_new_section_topbar',
		'settings' => 'penci_top_bar_display_by',
		'type'     => 'select',
		'priority' => 4,
		'choices'  => array(
			''      => 'Recent Posts',
			'all'   => 'Popular Posts All Time',
			'week'  => 'Popular Posts Once Weekly',
			'month' => 'Popular Posts Once Month'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_bar_filter_by', array(
		'label'    => 'Filter Topbar By',
		'section'  => 'pencidesign_new_section_topbar',
		'settings' => 'penci_top_bar_filter_by',
		'type'     => 'radio',
		'priority' => 4,
		'choices'  => array(
			'category' => 'Category',
			'tags'     => 'Tags'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Category_Control( $wp_customize, 'top_bar_category', array(
		'label'       => 'Select "Top Posts" Category',
		'section'     => 'pencidesign_new_section_topbar',
		'settings'    => 'penci_top_bar_category',
		'description' => 'This option just apply when you select "Filter Topbar by" Category above',
		'priority'    => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_bar_tags', array(
		'label'       => 'Fill List Tags for Filter by Tags on "Top Post"',
		'section'     => 'pencidesign_new_section_topbar',
		'settings'    => 'penci_top_bar_tags',
		'description' => 'This option just apply when you select "Filter Topbar by" Tags above. And please fill list featured tags slug here, check <a rel="nofollow" href="http://soledad.pencidesign.com/soledad-document/images/tags.png" target="_blank">this image</a> to know what is tags slug. Example for multiple tags slug, fill:  tag-1, tag-2, tag-3',
		'type'        => 'textarea',
		'priority'    => 5
	) ) );
	$wp_customize->add_setting( 'penci_top_bar_title_length', array(
		'default'           => '8',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'top_bar_title_length', array(
		'label'    => 'Custom Words Length for Post Titles on Topbar',
		'section'  => 'pencidesign_new_section_topbar',
		'settings' => 'penci_top_bar_title_length',
		'type'     => 'number',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_bar_posts_autoplay', array(
		'label'    => 'Disable Auto Play Posts on Top Bar',
		'section'  => 'pencidesign_new_section_topbar',
		'settings' => 'penci_top_bar_posts_autoplay',
		'type'     => 'checkbox',
		'priority' => 6
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'top_bar_auto_time', array(
		'label'       => 'Custom Auto Time Play Posts',
		'section'     => 'pencidesign_new_section_topbar',
		'settings'    => 'penci_top_bar_auto_time',
		'description' => 'Numeric value only, 1000 = 1 second',
		'type'        => 'number',
		'priority'    => 7
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'top_bar_auto_speed', array(
		'label'       => 'Custom Auto Time Auto Speed',
		'section'     => 'pencidesign_new_section_topbar',
		'settings'    => 'penci_top_bar_auto_speed',
		'description' => 'Numeric value only, 1000 = 1 second',
		'type'        => 'number',
		'priority'    => 8
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'top_bar_posts_per_page', array(
		'label'    => 'Amount of Posts Display on Top Bar',
		'section'  => 'pencidesign_new_section_topbar',
		'settings' => 'penci_top_bar_posts_per_page',
		'type'     => 'number',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'top_bar_top_post_size', array(
		'label'    => 'Custom Font Size for "Top Posts" text',
		'section'  => 'pencidesign_new_section_topbar',
		'settings' => 'penci_top_bar_top_post_size',
		'type'     => 'number',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'top_bar_top_post_size_title', array(
		'label'    => 'Custom Font Size for Posts Title on "Top Posts"',
		'section'  => 'pencidesign_new_section_topbar',
		'settings' => 'penci_top_bar_top_post_size_title',
		'type'     => 'number',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_bar_enable_menu', array(
		'label'       => 'Enable Topbar Menu',
		'section'     => 'pencidesign_new_section_topbar',
		'description' => 'If you enable topbar menu, you need go to Dashboard > Appearance > Menus > create/select a menu for your topbar > scroll down and check to "Topbar Menu" at the bottom',
		'settings'    => 'penci_top_bar_enable_menu',
		'type'        => 'checkbox',
		'priority'    => 11
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_bar_top_posts_lowcase', array(
		'label'    => 'Disable Uppercase for "Top Posts" text',
		'section'  => 'pencidesign_new_section_topbar',
		'settings' => 'penci_top_bar_top_posts_lowcase',
		'type'     => 'checkbox',
		'priority' => 14
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_bar_off_uppercase', array(
		'label'    => 'Turn Off Uppercase Posts Title in Top Bar',
		'section'  => 'pencidesign_new_section_topbar',
		'settings' => 'penci_top_bar_off_uppercase',
		'type'     => 'checkbox',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_bar_off_uppercase_menu', array(
		'label'    => 'Turn Off Uppercase on Topbar Menu',
		'section'  => 'pencidesign_new_section_topbar',
		'settings' => 'penci_top_bar_off_uppercase_menu',
		'type'     => 'checkbox',
		'priority' => 16
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'top_bar_menu_level_one', array(
		'label'    => 'Custom Font Size for Topbar Menu Level 1',
		'section'  => 'pencidesign_new_section_topbar',
		'settings' => 'penci_top_bar_menu_level_one',
		'type'     => 'number',
		'priority' => 16
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'top_bar_sub_menu_size', array(
		'label'    => 'Custom Font Size for Topbar Sub Menu',
		'section'  => 'pencidesign_new_section_topbar',
		'settings' => 'penci_top_bar_sub_menu_size',
		'type'     => 'number',
		'priority' => 16
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'top_bar_social_size', array(
		'label'    => 'Custom Font Size for Social Icons on Topbar',
		'section'  => 'pencidesign_new_section_topbar',
		'settings' => 'penci_top_bar_social_size',
		'type'     => 'number',
		'priority' => 16
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_bar_hide_social', array(
		'label'    => 'Hide Social Icons on Top Bar',
		'section'  => 'pencidesign_new_section_topbar',
		'settings' => 'penci_top_bar_hide_social',
		'type'     => 'checkbox',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_bar_brand_social', array(
		'label'    => 'Enable Use Brand Colors for Social Icons on Top Bar',
		'section'  => 'pencidesign_new_section_topbar',
		'settings' => 'penci_top_bar_brand_social',
		'type'     => 'checkbox',
		'priority' => 20
	) ) );

	// Header and Logo
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'upload_logo', array(
		'label'    => 'Upload Logo',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_logo',
		'priority' => 5
	) ) );

	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'logo_max_width', array(
		'label'    => 'Set A Max Width for Logo. Unit is pixel',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_logo_max_width',
		'type'     => 'number',
		'priority' => 12
	) ) );
	
	
	$wp_customize->add_setting( 'penci_upload_transparent_logo', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'penci_upload_transparent_logo', array(
		'label'       => 'Upload Logo for Transparent Header style 6, 9, 10 & 11',
		'section'     => 'pencidesign_new_section_logo_header',
		'settings'    => 'penci_upload_transparent_logo',
		'description' => 'Important Note: This option apply when you use transparent header only',
		'priority'    => 15
	) ) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'upload_mobile_nav_logo', array(
		'label'    => 'Logo for Vertical Mobile Nav',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_mobile_nav_logo',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'custom_url_logo', array(
		'label'       => 'Custom Link for Logo Image',
		'section'     => 'pencidesign_new_section_logo_header',
		'settings'    => 'penci_custom_url_logo',
		'description' => 'By default, logo image will link to homepage url. If you want to link the logo for another URL - fill here. Include http:// or https:// on the link',
		'type'        => 'text',
		'priority'    => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'custom_url_logo_vertical', array(
		'label'    => 'Custom Link for Logo Image on Vertical Mobile Nav',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_custom_url_logo_vertical',
		'type'     => 'text',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'header_padding', array(
		'label'    => 'Logo Header Padding Top & Bottom',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_header_padding',
		'type'     => 'number',
		'priority' => 25
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'topbar_layout', array(
		'label'    => 'Header Layout',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_header_layout',
		'type'     => 'radio',
		'priority' => 30,
		'choices'  => array(
			'header-1'  => 'Header 1',
			'header-2'  => 'Header 2',
			'header-3'  => 'Header 3',
			'header-4'  => 'Header 4 ( Centered )',
			'header-5'  => 'Header 5 ( Centered )',
			'header-6'  => 'Header 6',
			'header-7'  => 'Header 7',
			'header-8'  => 'Header 8',
			'header-9'  => 'Header 9',
			'header-10' => 'Header 10',
			'header-11' => 'Header 11'
		)
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_header_ctwidth', array(
		'label'    => 'Custom Header Width',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_header_ctwidth',
		'type'     => 'radio',
		'priority' => 30,
		'choices'  => array(
			''          => esc_html__( 'Width: 1170px', 'soledad' ),
			'1400'      => esc_html__( 'Width: 1400px', 'soledad' ),
			'fullwidth' => esc_html__( 'FullWidth', 'soledad' ),
		)
	) ) );

	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'penci_mainmenu_height', array(
		'label'    => 'Custom Main Nav Height( minimum height 36px )',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_mainmenu_height',
		'type'     => 'number',
		'priority' => 30,
		'description' => 'Numeric value only, unit is pixel',
	) ) );

	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'penci_mainmenu_height_sticky', array(
		'label'    => 'Custom Main Nav Height when Sticky Header( minimum height 36px )',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_mainmenu_height_sticky',
		'type'     => 'number',
		'priority' => 30,
		'description' => 'Numeric value only, unit is pixel',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_overflow_logo', array(
		'label'    => 'Overflow Logo for Header Layout 10 & 11',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_overflow_logo',
		'type'     => 'checkbox',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'penci_logo_max_width_overflow', array(
		'label'    => 'Set A Max Width for Logo Sticky Header ( Unit is pixel ). This option apply when you use overflow logo for header layout 10 & 11 only',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_logo_max_width_overflow',
		'type'     => 'number',
		'priority' => 30,
		'description' => 'Numeric value only, unit is pixel',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_menu_style', array(
		'label'    => 'Menu Style',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_header_menu_style',
		'type'     => 'radio',
		'priority' => 30,
		'choices'  => array(
			'menu-style-1' => 'Menu Style 1',
			'menu-style-2' => 'Menu Style 2',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'font_for_menu', array(
		'label'       => 'Custom Font For Main Menu Items',
		'section'     => 'pencidesign_new_section_logo_header',
		'settings'    => 'penci_font_for_menu',
		'description' => 'Default font is "Raleway"',
		'type'        => 'select',
		'priority'    => 30,
		'choices'     => penci_all_fonts()
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'font_weight_menu', array(
		'label'    => 'Font Weight For Menu Items',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_font_weight_menu',
		'type'     => 'select',
		'priority' => 30,
		'choices'  => array(
			'normal'  => 'Normal',
			'bold'    => 'Bold',
			'bolder'  => 'Bolder',
			'lighter' => 'Lighter',
			'100'     => '100',
			'200'     => '200',
			'300'     => '300',
			'400'     => '400',
			'500'     => '500',
			'600'     => '600',
			'700'     => '700',
			'800'     => '800',
			'900'     => '900'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_enable_padding', array(
		'label'    => 'Enable Padding on Menu Item Level 1',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_header_enable_padding',
		'type'     => 'checkbox',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_remove_line_hover', array(
		'label'    => 'Remove Lines When Hover on Menu Style 1',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_header_remove_line_hover',
		'type'     => 'checkbox',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_slogan_text', array(
		'label'       => 'Header Slogan Text',
		'section'     => 'pencidesign_new_section_logo_header',
		'settings'    => 'penci_header_slogan_text',
		'description' => 'If you want hide heading, let empty this',
		'type'        => 'textarea',
		'priority'    => 32
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_remove_line_slogan', array(
		'label'    => 'Remove the Lines on Left & Right of Header Slogan',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_header_remove_line_slogan',
		'type'     => 'checkbox',
		'priority' => 32
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'font_size_slogan', array(
		'label'    => 'Custom Font Size for Slogan',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_font_size_slogan',
		'type'     => 'number',
		'priority' => 32
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'font_for_slogan', array(
		'label'       => 'Font For Header Slogan',
		'section'     => 'pencidesign_new_section_logo_header',
		'settings'    => 'penci_font_for_slogan',
		'description' => 'Default font is "PT Serif"',
		'type'        => 'select',
		'priority'    => 32,
		'choices'     => penci_all_fonts()
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'font_weight_slogan', array(
		'label'    => 'Font Weight For Slogan',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_font_weight_slogan',
		'type'     => 'select',
		'priority' => 32,
		'choices'  => array(
			'normal'  => 'Normal',
			'bold'    => 'Bold',
			'bolder'  => 'Bolder',
			'lighter' => 'Lighter',
			'100'     => '100',
			'200'     => '200',
			'300'     => '300',
			'400'     => '400',
			'500'     => '500',
			'600'     => '600',
			'700'     => '700',
			'800'     => '800',
			'900'     => '900'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'font_style_slogan', array(
		'label'    => 'Font Style for Slogan',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_font_style_slogan',
		'type'     => 'select',
		'priority' => 32,
		'choices'  => array(
			'italic' => 'Italic',
			'normal' => 'Normal'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_3_banner', array(
		'label'       => 'Banner Header Right For Header 3',
		'section'     => 'pencidesign_new_section_logo_header',
		'settings'    => 'penci_header_3_banner',
		'description' => 'You should choose banner with 728px width and 90px - 100px height for the best result',
		'priority'    => 33
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_3_banner_url', array(
		'label'       => 'Link When Click Banner Header Right For Header 3',
		'section'     => 'pencidesign_new_section_logo_header',
		'settings'    => 'penci_header_3_banner_url',
		'description' => '',
		'type'        => 'text',
		'priority'    => 34
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_3_adsense', array(
		'label'       => 'Google adsense/custom HTML code to display in header 3',
		'section'     => 'pencidesign_new_section_logo_header',
		'settings'    => 'penci_header_3_adsense',
		'description' => 'If you want use google adsense/custom HTML code in header style 3, paste your google adsense/custom HTML code here',
		'type'        => 'textarea',
		'priority'    => 34
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'remove_border_bottom_header', array(
		'label'       => 'Remove Border Bottom on The Header',
		'section'     => 'pencidesign_new_section_logo_header',
		'settings'    => 'penci_remove_border_bottom_header',
		'description' => 'This option just apply for header styles 1, 4, 7',
		'type'        => 'checkbox',
		'priority'    => 34
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'disable_sticky_header', array(
		'label'    => 'Disable Sticky Header',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_disable_sticky_header',
		'type'     => 'checkbox',
		'priority' => 34
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'topbar_social_check', array(
		'label'    => 'Disable Header Social Icons',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_header_social_check',
		'type'     => 'checkbox',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_social_nav', array(
		'label'    => 'Enable Social Icons on Main Navigation',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_header_social_nav',
		'type'     => 'checkbox',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_social_brand', array(
		'label'    => 'Enable Use Brand Colors for Social Icons on Header',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_header_social_brand',
		'type'     => 'checkbox',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'size_header_social_check', array(
		'label'    => 'Custom Size for Header Social Icons',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_size_header_social_check',
		'type'     => 'number',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'size_header_search_icon_check', array(
		'label'    => 'Custom Size for Search Icon',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'size_header_search_icon_check',
		'type'     => 'number',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_logo_mobile', array(
		'label'       => 'Display Logo on Horizontal Navigation on Mobile',
		'section'     => 'pencidesign_new_section_logo_header',
		'settings'    => 'penci_header_logo_mobile',
		'type'        => 'checkbox',
		'description' => 'This option does not apply for Header Style 6 & Style 9',
		'priority'    => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_logo_mobile_center', array(
		'label'    => 'Move Logo on Horizontal Navigation on Mobile to Center',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_header_logo_mobile_center',
		'type'     => 'checkbox',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'topbar_menu_uppercase', array(
		'label'    => 'Turn Off Uppercase on Menu items',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_topbar_menu_uppercase',
		'type'     => 'checkbox',
		'priority' => 36
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'font_size_lv1', array(
		'label'    => 'Font Size for Menu Items Level 1',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_font_size_lv1',
		'type'     => 'number',
		'priority' => 36
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'font_size_drop', array(
		'label'    => 'Font Size for Dropdown Menu Items',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_font_size_drop',
		'type'     => 'number',
		'priority' => 36
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'font_size_mobile_nav', array(
		'label'    => 'Custom Font Size for Vertical Mobile Menu Items',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_font_size_mobile_nav',
		'type'     => 'number',
		'priority' => 36
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'megamenu_border_radius', array(
		'label'       => 'Custom Border Radius for Images on Category Mega Menu',
		'section'     => 'pencidesign_new_section_logo_header',
		'settings'    => 'penci_megamenu_border_radius',
		'description' => 'You can use pixel or percent. E.g:  <strong>10px</strong>  or  <strong>10%</strong>. If you want to disable border radius for slider. Fill 0',
		'priority'    => 36
	) ) );
	$wp_customize->add_setting( 'penci_megamenu_title_length', array(
		'default'           => '8',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'megamenu_title_length', array(
		'label'    => 'Custom Words Length for Post Titles on Category Mega Menu',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_megamenu_title_length',
		'type'     => 'number',
		'priority' => 36
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'topbar_mega_disable_lazy', array(
		'label'    => 'Disable LazyLoad Images on Category Mega Menu',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_topbar_mega_disable_lazy',
		'type'     => 'checkbox',
		'priority' => 36
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'topbar_mega_hide_alltab', array(
		'label'    => 'Hide "All" tab on Category Mega Menu',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_topbar_mega_hide_alltab',
		'type'     => 'checkbox',
		'priority' => 36
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mega_featured_image_size', array(
		'label'    => 'Featured Images Type for Category Mega Menu',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_mega_featured_image_size',
		'type'     => 'radio',
		'priority' => 36,
		'choices'  => array(
			'horizontal' => 'Horizontal Size',
			'square'     => 'Square Size',
			'vertical'   => 'Vertical Size',
			'custom'     => 'Custom',
		)
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_mega_featured_image_ratio', array(
		'label'       => 'Custom Aspect Ratio for Featured Images Type for Category Mega Menu',
		'section'     => 'pencidesign_new_section_logo_header',
		'settings'    => 'penci_mega_featured_image_ratio',
		'description' => 'The aspect ratio of an element describes the proportional relationship between its width and its height. E.g: <strong>3:2</strong>. Default is 3:2 . This option apply  for <strong>Featured Images Type for Category Mega Menu is Custom</strong>',
		'priority' => 36,
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'topbar_mega_icons', array(
		'label'    => 'Enable Post Format Icons on Category Mega Menu',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_topbar_mega_icons',
		'type'     => 'checkbox',
		'priority' => 36
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'topbar_mega_category', array(
		'label'    => 'Hide Post Category On Thumbnail Of Mega Menu',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_topbar_mega_category',
		'type'     => 'checkbox',
		'priority' => 36
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'topbar_mega_date', array(
		'label'    => 'Hide Post Date On Mega Menu',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_topbar_mega_date',
		'type'     => 'checkbox',
		'priority' => 37
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'off_uppercase_cat_mega', array(
		'label'    => 'Turn Off Uppercase Posts Title On Category Mega Menu',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_off_uppercase_cat_mega',
		'type'     => 'checkbox',
		'priority' => 38
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'font_size_child_cat_mega', array(
		'label'    => 'Custom Font Size for Child Categories On Category Mega Menu',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_font_size_child_cat_mega',
		'type'     => 'number',
		'priority' => 39
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'font_size_title_cat_mega', array(
		'label'    => 'Custom Font Size for Posts Title On Category Mega Menu',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_font_size_title_cat_mega',
		'type'     => 'number',
		'priority' => 39
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'topbar_search_check', array(
		'label'    => 'Disable Header Search',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_topbar_search_check',
		'type'     => 'checkbox',
		'priority' => 40
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_logo_vertical', array(
		'label'    => 'Disable Logo on Vertical Mobile Nav',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_header_logo_vertical',
		'type'     => 'checkbox',
		'priority' => 45
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_social_vertical', array(
		'label'    => 'Disable Social Icons on Vertical Mobile Nav',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_header_social_vertical',
		'type'     => 'checkbox',
		'priority' => 50
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_social_vertical_brand', array(
		'label'    => 'Enable Use Brand Colors for Social Icons on Vertical Mobile Nav',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_header_social_vertical_brand',
		'type'     => 'checkbox',
		'priority' => 50
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_insta_overlay_image', array(
		'label'    => 'Display Top Instagram Widget Title Overlay Images',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_top_insta_overlay_image',
		'type'     => 'checkbox',
		'priority' => 50
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_insta_hide_icon', array(
		'label'    => 'Hide Instagram Icon on Top Instagram Widget',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_top_insta_hide_icon',
		'type'     => 'checkbox',
		'priority' => 50
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'custom_code_inside_head_tag', array(
		'label'    => 'Add Custom Code Inside &lt;head&gt; tag',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_custom_code_inside_head_tag',
		'type'     => 'textarea',
		'priority' => 55
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_custom_code_after_body_tag', array(
		'label'    => 'Add Custom Code After &lt;body&gt; tag',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_custom_code_after_body_tag',
		'type'     => 'textarea',
		'priority' => 55
	) ) );

	// Homepage Options
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_adsense_below_slider', array(
		'label'       => 'Add Google Adsense/Custom HTML Code Below Featured Slider',
		'section'     => 'pencidesign_new_section_homepage',
		'settings'    => 'penci_home_adsense_below_slider',
		'description' => '',
		'type'        => 'textarea',
		'priority'    => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_hide_boxes', array(
		'label'    => 'Hide Home Featured Boxes',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_hide_boxes',
		'type'     => 'checkbox',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_box_style_2', array(
		'label'    => 'Enable Home Featured Boxes Style 2',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_style_2',
		'type'     => 'checkbox',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_box_style_3', array(
		'label'    => 'Enable Home Featured Boxes Style 3',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_style_3',
		'type'     => 'checkbox',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'home_box_text_size', array(
		'label'    => 'Custom Font Size for Text on Featured Boxes',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_text_size',
		'type'     => 'number',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_box_weight', array(
		'label'    => 'Custom Font Weight for Text on Featured Boxes',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_weight',
		'type'     => 'radio',
		'priority' => 2,
		'choices'  => array(
			'bold'   => 'Bold',
			'normal' => 'Normal'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_box_column', array(
		'label'    => 'Home Featured Boxes Columns',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_column',
		'type'     => 'radio',
		'priority' => 2,
		'choices'  => array(
			'3' => '3 Columns',
			'4' => '4 Columns'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_box_type', array(
		'label'    => 'Home Featured Boxes Size Type',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_type',
		'type'     => 'radio',
		'priority' => 2,
		'choices'  => array(
			'horizontal' => 'Horizontal Size',
			'square'     => 'Square Size',
			'vertical'   => 'Vertical Size'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_boxes_new_tab', array(
		'label'    => 'Open Home Featured Boxes in New Tab',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_boxes_new_tab',
		'type'     => 'checkbox',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home_box_img1', array(
		'label'       => 'Homepage Featured Box 1st Image',
		'section'     => 'pencidesign_new_section_homepage',
		'description' => 'You just need choose image for this option with the width is 500px',
		'settings'    => 'penci_home_box_img1',
		'priority'    => 3
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_box_text1', array(
		'label'    => 'Homepage Featured Box 1st Text',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_text1',
		'type'     => 'text',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_box_url1', array(
		'label'    => 'Homepage Featured Box 1st URL',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_url1',
		'type'     => 'text',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home_box_img2', array(
		'label'       => 'Homepage Featured Box 2nd Image',
		'section'     => 'pencidesign_new_section_homepage',
		'settings'    => 'penci_home_box_img2',
		'description' => 'You just need choose image for this option with the width is 500px',
		'priority'    => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_box_text2', array(
		'label'    => 'Homepage Featured Box 2nd Text',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_text2',
		'type'     => 'text',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_box_url2', array(
		'label'    => 'Homepage Featured Box 2nd URL',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_url2',
		'type'     => 'text',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home_box_img3', array(
		'label'       => 'Homepage Featured Box 3rd Image',
		'section'     => 'pencidesign_new_section_homepage',
		'settings'    => 'penci_home_box_img3',
		'description' => 'You just need choose image for this option with the width is 500px',
		'priority'    => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_box_text3', array(
		'label'    => 'Homepage Featured Box 3rd Text',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_text3',
		'type'     => 'text',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_box_url3', array(
		'label'    => 'Homepage Featured Box 3rd URL',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_url3',
		'type'     => 'text',
		'priority' => 40
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home_box_img4', array(
		'label'       => 'Homepage Featured Box 4th Image',
		'section'     => 'pencidesign_new_section_homepage',
		'settings'    => 'penci_home_box_img4',
		'description' => 'You just need choose image for this option with the width is 500px',
		'priority'    => 41
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_box_text4', array(
		'label'    => 'Homepage Featured Box 4th Text',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_text4',
		'type'     => 'text',
		'priority' => 42
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_box_url4', array(
		'label'    => 'Homepage Featured Box 4th URL',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_url4',
		'type'     => 'text',
		'priority' => 43
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home_box_img5', array(
		'label'       => 'Homepage Featured Box 5th Image',
		'section'     => 'pencidesign_new_section_homepage',
		'settings'    => 'penci_home_box_img5',
		'description' => 'You just need choose image for this option with the width is 500px',
		'priority'    => 44
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_box_text5', array(
		'label'    => 'Homepage Featured Box 5th Text',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_text5',
		'type'     => 'text',
		'priority' => 44
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_box_url5', array(
		'label'    => 'Homepage Featured Box 5th URL',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_url5',
		'type'     => 'text',
		'priority' => 44
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home_box_img6', array(
		'label'       => 'Homepage Featured Box 6th Image',
		'section'     => 'pencidesign_new_section_homepage',
		'settings'    => 'penci_home_box_img6',
		'description' => 'You just need choose image for this option with the width is 500px',
		'priority'    => 44
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_box_text6', array(
		'label'    => 'Homepage Featured Box 6th Text',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_text6',
		'type'     => 'text',
		'priority' => 44
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_box_url6', array(
		'label'    => 'Homepage Featured Box 6th URL',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_url6',
		'type'     => 'text',
		'priority' => 44
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home_box_img7', array(
		'label'       => 'Homepage Featured Box 7th Image',
		'section'     => 'pencidesign_new_section_homepage',
		'settings'    => 'penci_home_box_img7',
		'description' => 'You just need choose image for this option with the width is 500px',
		'priority'    => 44
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_box_text7', array(
		'label'    => 'Homepage Featured Box 7th Text',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_text7',
		'type'     => 'text',
		'priority' => 44
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_box_url7', array(
		'label'    => 'Homepage Featured Box 7th URL',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_url7',
		'type'     => 'text',
		'priority' => 44
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home_box_img8', array(
		'label'       => 'Homepage Featured Box 8th Image',
		'section'     => 'pencidesign_new_section_homepage',
		'settings'    => 'penci_home_box_img8',
		'description' => 'You just need choose image for this option with the width is 500px',
		'priority'    => 44
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_box_text8', array(
		'label'    => 'Homepage Featured Box 8th Text',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_text8',
		'type'     => 'text',
		'priority' => 44
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_box_url8', array(
		'label'    => 'Homepage Featured Box 8th URL',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_url8',
		'type'     => 'text',
		'priority' => 44
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_h1content', array(
		'label'       => 'Add More <H1> Tag for Homepage',
		'section'     => 'pencidesign_new_section_homepage',
		'settings'    => 'penci_home_h1content',
		'description' => 'Write content for H1 tag here',
		'type'        => 'text',
		'priority'    => 45
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'grid_title', array(
		'label'       => 'Heading Latest Posts for Homepage',
		'section'     => 'pencidesign_new_section_homepage',
		'settings'    => 'penci_home_title',
		'description' => 'If you want hide it, let empty this',
		'type'        => 'text',
		'priority'    => 45
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'enable_home_popular_posts', array(
		'label'    => 'Enable Popular Posts on HomePage',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_enable_home_popular_posts',
		'type'     => 'checkbox',
		'priority' => 46
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'home_popular_post_numberposts', array(
		'label'    => 'Custom Amount of Posts on Popular Posts',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_popular_post_numberposts',
		'type'     => 'number',
		'priority' => 46
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_popular_type', array(
		'label'    => 'Display Homepage Popular Posts on',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_popular_type',
		'type'     => 'select',
		'priority' => 46,
		'choices'  => array(
			''      => 'All Time',
			'week'  => 'Once Weekly',
			'month' => 'Once a Month'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_popular_title', array(
		'label'    => 'Change Title for Homepage Popular Posts Box',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_popular_title',
		'type'     => 'text',
		'priority' => 46
	) ) );
	$wp_customize->add_control( new WP_Customize_Category_Control( $wp_customize, 'home_popular_cat', array(
		'label'    => 'Display Homepage Popular Posts for A Category',
		'settings' => 'penci_home_popular_cat',
		'section'  => 'pencidesign_new_section_homepage',
		'priority' => 46
	) ) );
	$wp_customize->add_setting( 'penci_home_polular_title_length', array(
		'default'           => '8',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'home_polular_title_length', array(
		'label'    => 'Custom Words Length for Post Titles on Popular Posts',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_polular_title_length',
		'type'     => 'number',
		'priority' => 46
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hide_date_home_popular', array(
		'label'    => 'Hide Date on HomePage Popular Posts',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_hide_date_home_popular',
		'type'     => 'checkbox',
		'priority' => 46
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'home_popular_post_font_size', array(
		'label'    => 'Custom Font Size for Posts Title on Popular Posts',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_popular_post_font_size',
		'type'     => 'number',
		'priority' => 46
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'lowcase_popular_posts', array(
		'label'    => 'Turn Off Uppercase Posts Title for Popular Posts on HomePage',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_lowcase_popular_posts',
		'type'     => 'checkbox',
		'priority' => 47
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'enable_home_popular_icons', array(
		'label'    => 'Enable Post Format Icons on Homepage Popular Posts',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_enable_home_popular_icons',
		'type'     => 'checkbox',
		'priority' => 48
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_exclude_cat', array(
		'label'       => 'Exclude specific categories from latest posts on Homepage',
		'section'     => 'pencidesign_new_section_homepage',
		'settings'    => 'penci_home_exclude_cat',
		'description' => 'Example: if you do not want all posts in categories: Fashion, Life Style show on your latest posts on homepage. You can fill slug of the categories here: fashion, life-style. You can see <a rel="nofollow" href="http://pencidesign.com/soledad/soledad-document/assets/images/magazine-2.png" target="_blank">this image</a> to understand what is slug',
		'type'        => 'textarea',
		'priority'    => 49
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_featured_cat', array(
		'label'       => 'List Featured Categories for Magazine Layouts',
		'section'     => 'pencidesign_new_section_homepage',
		'settings'    => 'penci_home_featured_cat',
		'description' => 'This option only for Homepage Magazine(style 1 and style 2) layout, copy and paste categories slug you want display above Latest Posts here. Example: You want display categories "Life Style, Travel, Music" above Latest Posts, fill categories slug like "life-style, travel, music"',
		'type'        => 'textarea',
		'priority'    => 50
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'enable_featured_cat_all_layouts', array(
		'label'    => 'Enable Featured Categories for All Layouts - Not for Magazine Layouts Only',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_enable_featured_cat_all_layouts',
		'type'     => 'checkbox',
		'priority' => 50
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'move_latest_posts_above', array(
		'label'    => 'Move Latest Posts To Above Featured Categories',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_move_latest_posts_above',
		'type'     => 'checkbox',
		'priority' => 50
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_featured_cat_overlay7', array(
		'label'    => 'Enable Post Meta Overlay Featured Image for Featured Category Style 7',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_cat_overlay7',
		'type'     => 'checkbox',
		'priority' => 50
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'featured_cat_margin', array(
		'label'    => 'Custom Space Between Featured Categories',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_featured_cat_margin',
		'type'     => 'number',
		'priority' => 51
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_featured_cat_author', array(
		'label'    => 'Hide Post Author on Featured Categories on Magazine Layouts',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_cat_author',
		'type'     => 'checkbox',
		'priority' => 55
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_featured_cat_date', array(
		'label'    => 'Hide Post Date on Featured Categories on Magazine Layouts',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_cat_date',
		'type'     => 'checkbox',
		'priority' => 56
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_featured_cat_icons', array(
		'label'    => 'Enable Post Format Icons on Featured Categories in Magazine Layouts',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_cat_icons',
		'type'     => 'checkbox',
		'priority' => 57
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_featured_cat_seemore', array(
		'label'    => 'Enable "View All" link for Featured Categories in Magazine Layouts',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_cat_seemore',
		'type'     => 'checkbox',
		'priority' => 60
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_featured_cat_remove_arrow', array(
		'label'    => 'Remove arrow on "View All"',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_cat_remove_arrow',
		'type'     => 'checkbox',
		'priority' => 60
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_featured_cat_readmore_button', array(
		'label'    => 'Make "View All" is A Button',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_cat_readmore_button',
		'type'     => 'checkbox',
		'priority' => 60
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_featured_cat_readmore_align', array(
		'label'    => 'Align "View All" Button',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_cat_readmore_align',
		'type'     => 'select',
		'priority' => 60,
		'choices'  => array(
			'left'   => esc_html__( 'Left', 'soledad' ),
			'center' => esc_html__( 'Center', 'soledad' ),
			'right'  => esc_html__( 'Right', 'soledad' )
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_featured_cat_remove_excerpt', array(
		'label'    => 'Remove Posts Excerpt for Featured Categories in Magazine Layouts',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_cat_remove_excerpt',
		'type'     => 'checkbox',
		'priority' => 60
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'home_lastest_posts_numbers', array(
		'label'    => 'Custom Amount of Posts Shown Per Page on Homepage',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_lastest_posts_numbers',
		'type'     => 'number',
		'priority' => 61
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'home_featured_posts_numbers_1', array(
		'label'    => 'Amount of Posts Display on Featured Categories Style 1 with Magazine Layout',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_posts_numbers_1',
		'type'     => 'number',
		'priority' => 65
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'home_featured_posts_numbers_2', array(
		'label'    => 'Amount of Posts Display on Featured Categories Style 2 with Magazine Layout',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_posts_numbers_2',
		'type'     => 'number',
		'priority' => 70
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'home_featured_posts_numbers_3', array(
		'label'    => 'Amount of Posts Display on Featured Categories Style 3 with Magazine Layout',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_posts_numbers_3',
		'type'     => 'number',
		'priority' => 75
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'home_featured_posts_numbers_4', array(
		'label'    => 'Amount of Posts Display on Featured Categories Single Slider Style with Magazine Layout',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_posts_numbers_4',
		'type'     => 'number',
		'priority' => 80
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'home_featured_posts_numbers_5', array(
		'label'    => 'Amount of Posts Display on Featured Categories Slider 2 Columns Style with Magazine Layout',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_posts_numbers_5',
		'type'     => 'number',
		'priority' => 85
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'home_featured_posts_numbers_6', array(
		'label'    => 'Amount of Posts Display on Featured Categories Style 6 with Magazine Layout',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_posts_numbers_6',
		'type'     => 'number',
		'priority' => 85
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'home_featured_posts_numbers_7', array(
		'label'    => 'Amount of Posts Display on Featured Categories Style 7 with Magazine Layout',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_posts_numbers_7',
		'type'     => 'number',
		'priority' => 90
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'home_featured_posts_numbers_8', array(
		'label'    => 'Amount of Posts Display on Featured Categories Style 8 with Magazine Layout',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_posts_numbers_8',
		'type'     => 'number',
		'priority' => 95
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'home_featured_posts_numbers_9', array(
		'label'    => 'Amount of Posts Display on Featured Categories Style 9',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_posts_numbers_9',
		'type'     => 'number',
		'priority' => 100
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'home_featured_posts_numbers_10', array(
		'label'    => 'Amount of Posts Display on Featured Categories Style 10',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_posts_numbers_10',
		'type'     => 'number',
		'priority' => 105
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'home_featured_posts_numbers_11', array(
		'label'    => 'Amount of Posts Display on Featured Categories Style 11',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_posts_numbers_11',
		'type'     => 'number',
		'priority' => 110
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'home_featured_posts_numbers_12', array(
		'label'    => 'Amount of Posts Display on Featured Categories Style 12',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_posts_numbers_12',
		'type'     => 'number',
		'priority' => 110
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'home_featured_posts_numbers_13', array(
		'label'    => 'Amount of Posts Display on Featured Categories Style 13',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_posts_numbers_13',
		'type'     => 'number',
		'priority' => 110
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'home_featured_posts_numbers_14', array(
		'label'    => 'Amount of Posts Display on Featured Categories Style 14',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_posts_numbers_14',
		'type'     => 'number',
		'priority' => 110
	) ) );

	// Featured slider
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_slider', array(
		'label'    => 'Enable Featured Slider',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_featured_slider',
		'type'     => 'checkbox',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_slider_all_page', array(
		'label'    => 'Enable Featured Slider on All Page',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_featured_slider_all_page',
		'type'     => 'checkbox',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'disable_lazyload_slider', array(
		'label'    => 'Disable Lazy Load Images on The Slider',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_disable_lazyload_slider',
		'type'     => 'checkbox',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'enable_flat_overlay', array(
		'label'       => 'Enable Flat Overlay Replace with Gradient Overlay',
		'section'     => 'pencidesign_new_section_featured',
		'settings'    => 'penci_enable_flat_overlay',
		'description' => 'This option does not apply for Slider Styles 1, 2, 3, 4, 5, 29, 30, 35, 36, 37, 38 & Penci Sliders',
		'type'        => 'checkbox',
		'priority'    => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'slider_border_radius', array(
		'label'       => 'Border Radius for Images on Featured Slider',
		'section'     => 'pencidesign_new_section_featured',
		'settings'    => 'penci_slider_border_radius',
		'description' => 'You can use pixel or percent. E.g:  <strong>10px</strong>  or  <strong>10%</strong>. If you want to disable border radius for slider. Fill 0',
		'priority'    => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_slider_style', array(
		'label'       => 'Featured Slider Style',
		'section'     => 'pencidesign_new_section_featured',
		'settings'    => 'penci_featured_slider_style',
		'description' => 'If you choose Penci Slider, you need have posts in "Penci Slider" post type',
		'type'        => 'radio',
		'priority'    => 5,
		'choices'     => array(
			'style-1'  => 'Style 1',
			'style-2'  => 'Style 2',
			'style-3'  => 'Style 3',
			'style-4'  => 'Style 4',
			'style-5'  => 'Style 5',
			'style-6'  => 'Style 6',
			'style-7'  => 'Style 7',
			'style-8'  => 'Style 8',
			'style-9'  => 'Style 9',
			'style-10' => 'Style 10',
			'style-11' => 'Style 11',
			'style-12' => 'Style 12',
			'style-13' => 'Style 13',
			'style-14' => 'Style 14',
			'style-15' => 'Style 15',
			'style-16' => 'Style 16',
			'style-17' => 'Style 17',
			'style-18' => 'Style 18',
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
			'style-30' => 'Style 30',
			'style-31' => 'Penci Slider Style 1',
			'style-32' => 'Penci Slider Style 2',
			'style-33' => 'Revolution Slider Full Width',
			'style-34' => 'Revolution Slider In Container',
			'style-35' => 'Style 35',
			'style-36' => 'Style 36',
			'style-37' => 'Style 37',
			'style-38' => 'Style 38',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'feature_rev_sc', array(
		'label'       => 'Revolution Slider Shortcode',
		'section'     => 'pencidesign_new_section_featured',
		'settings'    => 'penci_feature_rev_sc',
		'type'        => 'textarea',
		'description' => 'If you choose Featured Slider Style is Revolution Slider, you need to fill Revolution Slider shortcode here',
		'priority'    => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'enable_next_prev_penci_slider', array(
		'label'    => 'Enable Next/Prev Button for Penci Slider & Slider Styles 35, 36, 37',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_enable_next_prev_penci_slider',
		'type'     => 'checkbox',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'disable_dots_penci_slider', array(
		'label'    => 'Disable Dots for Penci Slider & Slider Styles 35, 36, 37',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_disable_dots_penci_slider',
		'type'     => 'checkbox',
		'priority' => 5
	) ) );
	$wp_customize->add_setting( 'penci_slider_title_length', array(
		'default'           => '12',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'slider_title_length', array(
		'label'    => 'Custom Words Length for Post Titles on Featured Slider',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_slider_title_length',
		'type'     => 'number',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_slider_orderby', array(
		'label'    => 'Order By on Featured Slider',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'featured_slider_orderby',
		'type'     => 'select',
		'priority' => 5,
		'choices'  => array(
			'date'          => 'Post Date',
			'modified'      => 'Modified Date',
			'title'         => 'Post Title',
			'rand'          => 'Random Posts',
			'ID'            => 'Post ID',
			'comment_count' => 'Comment Count'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_slider_order', array(
		'label'    => 'Sort Order on Featured Slider',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'featured_slider_order',
		'type'     => 'select',
		'priority' => 5,
		'choices'  => array(
			'DESC' => 'Descending',
			'ASC'  => 'Ascending '
		)
	) ) );

	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'featured_slider_slides', array(
		'label'    => 'Amount of Slides',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_featured_slider_slides',
		'type'     => 'number',
		'priority' => 6
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_autoplay', array(
		'label'    => 'Enable Auto Play Slider',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_featured_autoplay',
		'type'     => 'checkbox',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'featured_slider_auto_time', array(
		'label'       => 'Featured Slider Auto Time',
		'section'     => 'pencidesign_new_section_featured',
		'settings'    => 'penci_featured_slider_auto_time',
		'description' => 'Numeric value only, 1000 = 1 second',
		'type'        => 'number',
		'priority'    => 15
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'featured_slider_auto_speed', array(
		'label'       => 'Featured Slider Auto Speed',
		'section'     => 'pencidesign_new_section_featured',
		'settings'    => 'penci_featured_slider_auto_speed',
		'description' => 'Numeric value only, 1000 = 1 second',
		'type'        => 'number',
		'priority'    => 20
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'featured_penci_slider_height', array(
		'label'       => 'Featured Penci Slider Height',
		'section'     => 'pencidesign_new_section_featured',
		'settings'    => 'penci_featured_penci_slider_height',
		'description' => 'Numeric value only, unit is pixel, if you not want fixed height, let empty or fill "0" for it',
		'type'        => 'number',
		'priority'    => 25
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'featured_penci_slider_ratio', array(
		'label'       => 'Custom Fixed Ratio Height/Width of Images on Penci Slider. Unit is %. E.g: 50',
		'section'     => 'pencidesign_new_section_featured',
		'settings'    => 'penci_featured_penci_slider_ratio',
		'description' => '',
		'type'        => 'number',
		'priority'    => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_slider_remove_overlay', array(
		'label'    => 'Remove Black Overlay Background on Heading & Captions of Penci Slider',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_penci_slider_remove_overlay',
		'type'     => 'checkbox',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_slider_filter_type', array(
		'label'    => 'Filter Featured Slider By',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_featured_slider_filter_type',
		'type'     => 'radio',
		'priority' => 26,
		'choices'  => array(
			'category' => 'Featured Category',
			'tags'     => 'Featured Tags'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Category_Control( $wp_customize, 'featured_cat', array(
		'label'       => 'Select Featured Category',
		'settings'    => 'penci_featured_cat',
		'description' => 'Just apply when you select filter by Featured Category above',
		'section'     => 'pencidesign_new_section_featured',
		'priority'    => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_tags', array(
		'label'       => 'Fill List Featured Tags for Featured Slider',
		'section'     => 'pencidesign_new_section_featured',
		'settings'    => 'penci_featured_tags',
		'description' => 'Just apply when you select filter by Featured Tags above. And please fill list featured tags slug here, check <a rel="nofollow" href="http://soledad.pencidesign.com/soledad-document/images/tags.png" target="_blank">this image</a> to know what is tags slug. Example for multiple tags slug, fill:  tag-1, tag-2, tag-3',
		'type'        => 'textarea',
		'priority'    => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_cat_hide', array(
		'label'       => 'Hide Featured Category',
		'section'     => 'pencidesign_new_section_featured',
		'settings'    => 'penci_featured_cat_hide',
		'description' => 'Check this if you want the featured category to be hide on all pages.',
		'type'        => 'checkbox',
		'priority'    => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'exclude_featured_cat', array(
		'label'       => 'Exclude All Posts on the Featured Slider in Latest Posts on Homepage',
		'section'     => 'pencidesign_new_section_featured',
		'description' => 'Let view your site outside customize page to see the changes.',
		'settings'    => 'penci_exclude_featured_cat',
		'type'        => 'checkbox',
		'priority'    => 36
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_center_box', array(
		'label'    => 'Hide Center Box on Featured Slider',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_featured_center_box',
		'type'     => 'checkbox',
		'priority' => 40
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_off_uppercase_title', array(
		'label'    => 'Turn off Uppercase of Heading/Posts Title on Slider',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_featured_off_uppercase_title',
		'type'     => 'checkbox',
		'priority' => 40
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_meta_date', array(
		'label'    => 'Hide Post Date',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_featured_meta_date',
		'type'     => 'checkbox',
		'priority' => 41
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_hide_categories', array(
		'label'       => 'Hide Categories Of Post',
		'section'     => 'pencidesign_new_section_featured',
		'settings'    => 'penci_featured_hide_categories',
		'description' => '',
		'type'        => 'checkbox',
		'priority'    => 42
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_meta_comment', array(
		'label'    => 'Hide Post Number Comments',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_featured_meta_comment',
		'type'     => 'checkbox',
		'priority' => 45
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_meta_author', array(
		'label'    => 'Hide Post Author',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_featured_meta_author',
		'type'     => 'checkbox',
		'priority' => 55
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_meta_excerpt', array(
		'label'    => 'Hide Post Excerpt on Style 35 & 36',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_featured_meta_excerpt',
		'type'     => 'checkbox',
		'priority' => 55
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_slider_icons', array(
		'label'    => 'Hide Post Format Icons',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_featured_slider_icons',
		'type'     => 'checkbox',
		'priority' => 56
	) ) );

	// Video background
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'enable_featured_video_bg', array(
		'label'    => 'Enable Featured Video Background',
		'section'  => 'pencidesign_new_section_featured_video',
		'settings' => 'penci_enable_featured_video_bg',
		'type'     => 'checkbox',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'featured_video_img_mobile', array(
		'label'       => 'Background Image Display Replace Video On Tablet & Mobile',
		'section'     => 'pencidesign_new_section_featured_video',
		'settings'    => 'penci_featured_video_img_mobile',
		'description' => 'Video background not support play on tablet & mobile. So, you should choose an image to display replace video background when your site is on tablet & mobile',
		'priority'    => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_video_url', array(
		'label'    => 'Video Youtube URL',
		'section'  => 'pencidesign_new_section_featured_video',
		'settings' => 'penci_featured_video_url',
		'type'     => 'text',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'featured_video_height', array(
		'label'    => 'Featured Video Background Height',
		'section'  => 'pencidesign_new_section_featured_video',
		'settings' => 'penci_featured_video_height',
		'type'     => 'number',
		'priority' => 7
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'featured_video_start', array(
		'label'    => 'Start Video At (Unit is second)',
		'section'  => 'pencidesign_new_section_featured_video',
		'settings' => 'penci_featured_video_start',
		'type'     => 'number',
		'priority' => 8
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_video_audio', array(
		'label'    => 'Enable Audio of Video',
		'section'  => 'pencidesign_new_section_featured_video',
		'settings' => 'penci_featured_video_audio',
		'type'     => 'checkbox',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'featured_video_image', array(
		'label'    => 'Add Custom Image on Video Background',
		'section'  => 'pencidesign_new_section_featured_video',
		'settings' => 'penci_featured_video_image',
		'priority' => 12
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_video_text_heading', array(
		'label'    => 'Heading Text On Video Background',
		'section'  => 'pencidesign_new_section_featured_video',
		'settings' => 'penci_featured_video_text_heading',
		'type'     => 'text',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_video_sub_heading', array(
		'label'    => 'Sub Heading Text On Video Background',
		'section'  => 'pencidesign_new_section_featured_video',
		'settings' => 'penci_featured_video_sub_heading',
		'type'     => 'textarea',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_video_heading_color', array(
		'label'    => 'Heading Text Color',
		'section'  => 'pencidesign_new_section_featured_video',
		'settings' => 'penci_featured_video_heading_color',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_video_sub_heading_color', array(
		'label'    => 'Sub Heading Text Color',
		'section'  => 'pencidesign_new_section_featured_video',
		'settings' => 'penci_featured_video_sub_heading_color',
		'priority' => 30
	) ) );

	// Standard Post Layout Settings
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard_meta_overlay', array(
		'label'       => 'Enable Post Meta Overlay Featured Image',
		'description' => 'This option just apply for Standard Layout Only',
		'section'     => 'pencidesign_new_section_standard',
		'settings'    => 'penci_standard_meta_overlay',
		'type'        => 'checkbox',
		'priority'    => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard_thumbnail', array(
		'label'    => 'Hide Post Thumbnail',
		'section'  => 'pencidesign_new_section_standard',
		'settings' => 'penci_standard_thumbnail',
		'type'     => 'checkbox',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard_disable_autoplay_gallery', array(
		'label'    => 'Disable Autoplay for Slider on Posts Format Gallery',
		'section'  => 'pencidesign_new_section_standard',
		'settings' => 'penci_standard_disable_autoplay_gallery',
		'type'     => 'checkbox',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard_thumb_crop', array(
		'label'    => 'Make Featured Image Auto Crop',
		'section'  => 'pencidesign_new_section_standard',
		'settings' => 'penci_standard_thumb_crop',
		'type'     => 'checkbox',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard_on_uppercase_cat', array(
		'label'    => 'Enable Uppercase in Post Categories',
		'section'  => 'pencidesign_new_section_standard',
		'settings' => 'penci_standard_on_uppercase_cat',
		'type'     => 'checkbox',
		'priority' => 3
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard_off_uppercase_title', array(
		'label'    => 'Turn Off Uppercase in Post Title',
		'section'  => 'pencidesign_new_section_standard',
		'settings' => 'penci_standard_off_uppercase_title',
		'type'     => 'checkbox',
		'priority' => 3
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard_share_box', array(
		'label'    => 'Hide Share Icons',
		'section'  => 'pencidesign_new_section_standard',
		'settings' => 'penci_standard_share_box',
		'type'     => 'checkbox',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard_cat', array(
		'label'    => 'Hide Category',
		'section'  => 'pencidesign_new_section_standard',
		'settings' => 'penci_standard_cat',
		'type'     => 'checkbox',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard_author', array(
		'label'    => 'Hide Post Author',
		'section'  => 'pencidesign_new_section_standard',
		'settings' => 'penci_standard_author',
		'type'     => 'checkbox',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard_date', array(
		'label'    => 'Hide Post Date',
		'section'  => 'pencidesign_new_section_standard',
		'settings' => 'penci_standard_date',
		'type'     => 'checkbox',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard_comment', array(
		'label'    => 'Hide Comment Count',
		'section'  => 'pencidesign_new_section_standard',
		'settings' => 'penci_standard_comment',
		'type'     => 'checkbox',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_standard_viewcount', array(
		'label'    => 'Show Views Count',
		'section'  => 'pencidesign_new_section_standard',
		'settings' => 'penci_standard_viewcount',
		'type'     => 'checkbox',
		'priority' => 20
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard_remove_line', array(
		'label'    => 'Remove Line Above Post Excerpt',
		'section'  => 'pencidesign_new_section_standard',
		'settings' => 'penci_standard_remove_line',
		'type'     => 'checkbox',
		'priority' => 21
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard_auto_excerpt', array(
		'label'    => 'Auto Render Post Excerpt',
		'section'  => 'pencidesign_new_section_standard',
		'settings' => 'penci_standard_auto_excerpt',
		'type'     => 'checkbox',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard_effect_button', array(
		'label'    => 'Disable Hover Effect Button "Continue Reading"',
		'section'  => 'pencidesign_new_section_standard',
		'settings' => 'penci_standard_effect_button',
		'type'     => 'checkbox',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard_continue_reading_button', array(
		'label'    => 'Make "Continue Reading" is A Button',
		'section'  => 'pencidesign_new_section_standard',
		'settings' => 'penci_standard_continue_reading_button',
		'type'     => 'checkbox',
		'priority' => 30
	) ) );

	// Grid & Masonry Post Layout Settings
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'grid_icon_format', array(
		'label'    => 'Hide Icon Post Format',
		'section'  => 'pencidesign_new_section_grid',
		'settings' => 'penci_grid_icon_format',
		'type'     => 'checkbox',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'grid_meta_overlay', array(
		'label'       => 'Enable Post Meta Overlay Featured Image',
		'section'     => 'pencidesign_new_section_grid',
		'settings'    => 'penci_grid_meta_overlay',
		'description' => 'This option just apply for Grid Posts & Masonry Posts',
		'type'        => 'checkbox',
		'priority'    => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'grid_uppercase_cat', array(
		'label'    => 'Enable Uppercase on Post Categories',
		'section'  => 'pencidesign_new_section_grid',
		'settings' => 'penci_grid_uppercase_cat',
		'type'     => 'checkbox',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'grid_off_title_uppercase', array(
		'label'    => 'Turn Off Uppercase on Post Title',
		'section'  => 'pencidesign_new_section_grid',
		'settings' => 'penci_grid_off_title_uppercase',
		'type'     => 'checkbox',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'grid_lightbox_video', array(
		'label'       => 'Enable Click on Posts Thumbnail to Play Video',
		'description' => 'This option only apply for video posts format - supports only for Youtube & Vimeo',
		'section'     => 'pencidesign_new_section_grid',
		'settings'    => 'penci_grid_lightbox_video',
		'type'        => 'checkbox',
		'priority'    => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'grid_off_letter_spacing', array(
		'label'    => 'Remove Letter Spacing on Post Title of Grid, Masonry, List, Boxed Posts',
		'section'  => 'pencidesign_new_section_grid',
		'settings' => 'penci_grid_off_letter_spacing',
		'type'     => 'checkbox',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'grid_nocrop_list', array(
		'label'       => 'Do Not Crop Images in List Layouts',
		'section'     => 'pencidesign_new_section_grid',
		'settings'    => 'penci_grid_nocrop_list',
		'description' => 'This option does not apply for gallery posts format',
		'type'        => 'checkbox',
		'priority'    => 3
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'grid_share_box', array(
		'label'    => 'Hide Share Box',
		'section'  => 'pencidesign_new_section_grid',
		'settings' => 'penci_grid_share_box',
		'type'     => 'checkbox',
		'priority' => 3
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'grid_cat', array(
		'label'    => 'Hide Category',
		'section'  => 'pencidesign_new_section_grid',
		'settings' => 'penci_grid_cat',
		'type'     => 'checkbox',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'grid_author', array(
		'label'    => 'Hide Post Author',
		'section'  => 'pencidesign_new_section_grid',
		'settings' => 'penci_grid_author',
		'type'     => 'checkbox',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'grid_date', array(
		'label'    => 'Hide Post Date',
		'section'  => 'pencidesign_new_section_grid',
		'settings' => 'penci_grid_date',
		'type'     => 'checkbox',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'grid_countviews', array(
		'label'    => 'Show Views Count',
		'section'  => 'pencidesign_new_section_grid',
		'settings' => 'penci_grid_countviews',
		'type'     => 'checkbox',
		'priority' => 20
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'grid_comment', array(
		'label'    => 'Hide Comment Count',
		'section'  => 'pencidesign_new_section_grid',
		'settings' => 'penci_grid_comment',
		'type'     => 'checkbox',
		'priority' => 20
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'grid_remove_line', array(
		'label'    => 'Remove Line Above Post Excerpt',
		'section'  => 'pencidesign_new_section_grid',
		'settings' => 'penci_grid_remove_line',
		'type'     => 'checkbox',
		'priority' => 21
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'grid_remove_excerpt', array(
		'label'    => 'Remove Post Excerpt',
		'section'  => 'pencidesign_new_section_grid',
		'settings' => 'penci_grid_remove_excerpt',
		'type'     => 'checkbox',
		'priority' => 21
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'grid_add_readmore', array(
		'label'    => 'Add "Read more" button link',
		'section'  => 'pencidesign_new_section_grid',
		'settings' => 'penci_grid_add_readmore',
		'type'     => 'checkbox',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'grid_remove_arrow', array(
		'label'    => 'Remove arrow on "Read more"',
		'section'  => 'pencidesign_new_section_grid',
		'settings' => 'penci_grid_remove_arrow',
		'type'     => 'checkbox',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'grid_readmore_button', array(
		'label'    => 'Make "Read more" is A Button',
		'section'  => 'pencidesign_new_section_grid',
		'settings' => 'penci_grid_readmore_button',
		'type'     => 'checkbox',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'grid_readmore_align', array(
		'label'    => 'Align "Read more" Button',
		'section'  => 'pencidesign_new_section_grid',
		'settings' => 'penci_grid_readmore_align',
		'type'     => 'select',
		'priority' => 25,
		'choices'  => array(
			'left'   => esc_html__( 'Left', 'soledad' ),
			'center' => esc_html__( 'Center', 'soledad' ),
			'right'  => esc_html__( 'Right', 'soledad' )
		)
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'post_excerpt_length', array(
		'label'    => 'Custom Excerpt Length',
		'section'  => 'pencidesign_new_section_grid',
		'settings' => 'penci_post_excerpt_length',
		'type'     => 'number',
		'priority' => 55
	) ) );


	// Post Settings
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_single_style', array(
		'label'    => 'Single Posts Template',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_single_style',
		'type'     => 'select',
		'priority' => 1,
		'choices'  => array(
			'style-1'  => esc_html__( '--Default--', 'soledad' ),
			'style-2'  => esc_html__( 'Style 2', 'soledad' ),
			'style-3'  => esc_html__( 'Style 3', 'soledad' ),
			'style-4'  => esc_html__( 'Style 4', 'soledad' ),
			'style-5'  => esc_html__( 'Style 5', 'soledad' ),
			'style-6'  => esc_html__( 'Style 6', 'soledad' ),
			'style-7'  => esc_html__( 'Style 7', 'soledad' ),
			'style-8'  => esc_html__( 'Style 8', 'soledad' ),
			'style-9'  => esc_html__( 'Style 9', 'soledad' ),
			'style-10' => esc_html__( 'Style 10', 'soledad' ),
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_single_layout', array(
		'label'    => 'Single Posts Sidebar Layout',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_single_layout',
		'type'     => 'select',
		'priority' => 1,
		'choices'  => array(
			'right'       => '--Default--',
			'left'        => 'Left Sidebar',
			'two'         => 'Two Sidebars',
			'no'          => 'No Sidebar',
			'small_width' => 'No Sidebar with Container Width Smaller'
		)
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'single_smaller_width', array(
		'label'    => "Custom Width for No Sidebar with Container Width Smaller Layout You've Selected Above",
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_single_smaller_width',
		'type'     => 'number',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'disable_lazyload_single', array(
		'label'    => 'Disable Lazy Load Images on Single Posts',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_disable_lazyload_single',
		'type'     => 'checkbox',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_enable_jarallax_single', array(
		'label'       => 'Enable Parallax Images on Single Posts',
		'section'     => 'pencidesign_new_section_post',
		'settings'    => 'penci_enable_jarallax_single',
		'type'        => 'checkbox',
		'description' => 'This feature does not apply for Single Style 1 & 2',
		'priority'    => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'disable_autoplay_single_slider', array(
		'label'    => 'Disable Auto Play for Single Slider Gallery & Posts Format Gallery',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_disable_autoplay_single_slider',
		'type'     => 'checkbox',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'disable_image_titles_galleries', array(
		'label'    => 'Hide Images Title on Galleries from The Theme',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_disable_image_titles_galleries',
		'type'     => 'checkbox',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'move_title_bellow', array(
		'label'    => 'Move Categories, Post Title, Post Meta To Bellow Featured Image',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_move_title_bellow',
		'type'     => 'checkbox',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'disable_lightbox_single', array(
		'label'    => 'Disable Lightbox in Single',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_disable_lightbox_single',
		'type'     => 'checkbox',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_cat', array(
		'label'    => 'Hide Category',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_cat',
		'type'     => 'checkbox',
		'priority' => 3
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'on_uppercase_post_cat', array(
		'label'    => 'Enable Uppercase on Post Categories',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_on_uppercase_post_cat',
		'type'     => 'checkbox',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_thumb', array(
		'label'       => 'Hide Featured Image on Top',
		'section'     => 'pencidesign_new_section_post',
		'settings'    => 'penci_post_thumb',
		'description' => 'Hide Featured images auto appears on single posts page - This option not apply for Video format, Gallery format',
		'type'        => 'checkbox',
		'priority'    => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_featured_image_radius', array(
		'label'       => 'Custom Border Radius for Featured Image',
		'section'     => 'pencidesign_new_section_post',
		'settings'    => 'penci_post_featured_image_radius',
		'description' => 'You can use pixel or percent. E.g:  <strong>10px</strong>  or  <strong>10%</strong>. If you want to disable border radius - fill 0',
		'priority'    => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_featured_image_ratio', array(
		'label'       => 'Custom Aspect Ratio for Featured Image',
		'section'     => 'pencidesign_new_section_post',
		'settings'    => 'penci_post_featured_image_ratio',
		'description' => 'The aspect ratio of an element describes the proportional relationship between its width and its height. E.g: <strong>3:2</strong>. Default is 3:2 . This option not apply when enable parallax images. This feature does not apply for Single Style 1 & 2',
		'priority'    => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'off_uppercase_post_title', array(
		'label'    => 'Turn Off Uppercase in Post Title',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_off_uppercase_post_title',
		'type'     => 'checkbox',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'single_title_font_size', array(
		'label'    => 'Custom Font Size for Posts Title',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_single_title_font_size',
		'type'     => 'number',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'penci_single_title_font_msize', array(
		'label'    => 'Custom Font Size for Posts Title on Mobile',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_single_title_font_msize',
		'type'     => 'number',
		'priority' => 4
	) ) );

	foreach ( $opt_single_title_fsize as $opt_single_title_fsize_id => $opt_single_title_fsize_label ) {
		$wp_customize->add_control( new Customize_Number_Control( $wp_customize, $opt_single_title_fsize_id, array(
			'label'    => $opt_single_title_fsize_label,
			'section'  => 'pencidesign_new_section_post',
			'settings' => $opt_single_title_fsize_id,
			'type'     => 'number',
			'priority' => 4
		) ) );
	}

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'off_letter_space_post_title', array(
		'label'    => 'Remove Letter Spacing in Post Title',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_off_letter_space_post_title',
		'type'     => 'checkbox',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'align_left_post_title', array(
		'label'    => 'Enable Align Left Post Title',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_align_left_post_title',
		'type'     => 'checkbox',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'single_meta_author', array(
		'label'    => 'Hide Post Author',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_single_meta_author',
		'type'     => 'checkbox',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'single_meta_date', array(
		'label'    => 'Hide Post Date',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_single_meta_date',
		'type'     => 'checkbox',
		'priority' => 6
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'single_meta_comment', array(
		'label'    => 'Hide Comment Count',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_single_meta_comment',
		'type'     => 'checkbox',
		'priority' => 7
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_single_show_cview', array(
		'label'    => 'Show Views Count',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_single_show_cview',
		'type'     => 'checkbox',
		'priority' => 7
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_enable_ajax_view', array(
		'label'       => 'Enable ajax Post View Count',
		'section'     => 'pencidesign_new_section_post',
		'settings'    => 'penci_enable_ajax_view',
		'description' => 'Use to count posts viewed when you using cache plugin.',
		'type'        => 'checkbox',
		'priority'    => 7
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_thumb_caption', array(
		'label'       => 'Enable Caption on Featured Image for Single style 1 & 2',
		'section'     => 'pencidesign_new_section_post',
		'settings'    => 'penci_post_thumb_caption',
		'description' => 'If your featured image has a caption, it will display on featured image',
		'type'        => 'checkbox',
		'priority'    => 9
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_caption_below', array(
		'label'    => 'Move Caption of Images to Below The Images',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_caption_below',
		'type'     => 'checkbox',
		'priority' => 9
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_caption_disable_italic', array(
		'label'    => 'Disable Italic on Caption of Images',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_caption_disable_italic',
		'type'     => 'checkbox',
		'priority' => 9
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'blockquote_style', array(
		'label'    => 'Blockquote Style:',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_blockquote_style',
		'type'     => 'select',
		'priority' => 9,
		'choices'  => array(
			'style-1' => 'Style 1',
			'style-2' => 'Style 2'
		)
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'single_title_h1_size', array(
		'label'    => 'Custom Font Size for H1 inside Post Content',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_single_title_h1_size',
		'type'     => 'number',
		'priority' => 9
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'single_title_h2_size', array(
		'label'    => 'Custom Font Size for H2 inside Post Content',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_single_title_h2_size',
		'type'     => 'number',
		'priority' => 9
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'single_title_h3_size', array(
		'label'    => 'Custom Font Size for H3 inside Post Content',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_single_title_h3_size',
		'type'     => 'number',
		'priority' => 9
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'single_title_h4_size', array(
		'label'    => 'Custom Font Size for H4 inside Post Content',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_single_title_h4_size',
		'type'     => 'number',
		'priority' => 9
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'single_title_h5_size', array(
		'label'    => 'Custom Font Size for H5 inside Post Content',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_single_title_h5_size',
		'type'     => 'number',
		'priority' => 9
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'single_title_h6_size', array(
		'label'    => 'Custom Font Size for H6 inside Post Content',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_single_title_h6_size',
		'type'     => 'number',
		'priority' => 9
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'single_title_p_size', array(
		'label'    => 'Custom Font Size for general Paragraph inside Post Content',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_single_title_p_size',
		'type'     => 'number',
		'priority' => 9
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ads_inside_content_html', array(
		'label'       => 'Add Ads/Custom HTML Code Inside Posts Content',
		'section'     => 'pencidesign_new_section_post',
		'settings'    => 'penci_ads_inside_content_html',
		'description' => '',
		'type'        => 'textarea',
		'priority'    => 9
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ads_inside_content_style', array(
		'label'    => 'Add Ads/Custom HTML Code Inside Posts Content With:',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_ads_inside_content_style',
		'type'     => 'select',
		'priority' => 9,
		'choices'  => array(
			'style-1' => 'After Each X Paragraphs - Repeat',
			'style-2' => 'After X Paragraphs - No Repeat'
		)
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'ads_inside_content_num', array(
		'label'    => 'Add Ads/Custom HTML Code Inside Posts Content After How Many Paragraphs?',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_ads_inside_content_num',
		'type'     => 'number',
		'priority' => 9
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_tags', array(
		'label'    => 'Hide Tags',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_tags',
		'type'     => 'checkbox',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_share', array(
		'label'    => 'Hide Like Count & Social Share',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_share',
		'type'     => 'checkbox',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_single_style_cscount', array(
		'label'       => 'Share Box Style',
		'section'     => 'pencidesign_new_section_post',
		'settings'    => 'penci_single_style_cscount',
		'description' => '',
		'type'        => 'select',
		'priority'    => 15,
		'choices'     => array(
			's1' => 'Default',
			's2' => 'Style 2',
			's3' => 'Style 3',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_single_poslcscount', array(
		'label'       => 'Share Box  Position',
		'section'     => 'pencidesign_new_section_post',
		'settings'    => 'penci_single_poslcscount',
		'description' => '',
		'type'        => 'select',
		'priority'    => 15,
		'choices'     => array(
			'above-content' => 'Above content',
			'below-content' => 'Below content',
			'abovebelow-content' => 'Above & Below content',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'single_ordersec', array(
		'label'       => 'Re-order "Author Box" - "Post Navigation" - "Related Posts" - "Comments" section',
		'section'     => 'pencidesign_new_section_post',
		'settings'    => 'penci_single_ordersec',
		'description' => '',
		'type'        => 'select',
		'priority'    => 15,
		'choices'     => array(
			'author-postnav-related-comments' => 'Author Box - Post Navigation - Related Posts - Comments',
			'author-postnav-comments-related' => 'Author Box - Post Navigation - Comments - Related Posts',
			'author-comments-postnav-related' => 'Author Box - Comments - Post Navigation - Related Posts',
			'author-comments-related-postnav' => 'Author Box - Comments - Related Posts - Post Navigation',
			'author-related-comments-postnav' => 'Author Box - Related Posts - Comments - Post Navigation',
			'author-related-postnav-comments' => 'Author Box - Related Posts - Post Navigation - Comments',
			'postnav-author-related-comments' => 'Post Navigation - Author Box - Related Posts - Comments',
			'postnav-author-comments-related' => 'Post Navigation - Author Box - Comments - Related Posts',
			'postnav-comments-author-related' => 'Post Navigation - Comments - Author Box - Related Posts',
			'postnav-comments-related-author' => 'Post Navigation - Comments - Related Posts - Author Box',
			'postnav-related-comments-author' => 'Post Navigation - Related Posts - Comments - Author Box',
			'postnav-related-author-comments' => 'Post Navigation - Related Posts - Author Box - Comments',
			'related-author-comments-postnav' => 'Related Posts - Author Box - Comments - Post Navigation',
			'related-author-postnav-comments' => 'Related Posts - Author Box - Post Navigation - Comments',
			'related-comments-author-postnav' => 'Related Posts - Comments - Author Box - Post Navigation',
			'related-comments-postnav-author' => 'Related Posts - Comments - Post Navigation - Author Box',
			'related-postnav-author-comments' => 'Related Posts - Post Navigation - Author Box - Comments',
			'related-postnav-comments-author' => 'Related Posts - Post Navigation - Comments - Author Box',
			'comments-author-postnav-related' => 'Comments - Author Box - Post Navigation - Related Posts',
			'comments-author-related-postnav' => 'Comments - Author Box - Related Posts - Post Navigation',
			'comments-postnav-related-author' => 'Comments - Post Navigation - Related Posts - Author Box',
			'comments-postnav-author-related' => 'Comments - Post Navigation - Author Box - Related Posts',
			'comments-related-author-postnav' => 'Comments - Related Posts - Author Box - Post Navigation',
			'comments-related-postnav-author' => 'Comments - Related Posts - Post Navigation - Author Box',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_author', array(
		'label'    => 'Hide Author Box',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_author',
		'type'     => 'checkbox',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_author_email', array(
		'label'    => 'Show Email Icon of Author on Author Box',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_author_email',
		'type'     => 'checkbox',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_nav', array(
		'label'    => 'Hide Next/Prev Post Navigation',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_nav',
		'type'     => 'checkbox',
		'priority' => 26
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_nav_thumbnail', array(
		'label'    => 'Enable Post Thumbnail for Next/Prev Post Navigation',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_nav_thumbnail',
		'type'     => 'checkbox',
		'priority' => 26
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'off_uppercase_post_title_nav', array(
		'label'    => 'Turn Off Uppercase in Post Title Next/Prev Post Navigation',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_off_uppercase_post_title_nav',
		'type'     => 'checkbox',
		'priority' => 27
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_twitter_share_text', array(
		'label'       => 'Custom Sharing Text for Twitter',
		'section'     => 'pencidesign_new_section_post',
		'settings'    => 'penci_post_twitter_share_text',
		'description' => '',
		'type'        => 'textarea',
		'priority'    => 28
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_remove_lines_related', array(
		'label'    => 'Remove Lines Before & After of Heading Title on Related & Comments',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_remove_lines_related',
		'type'     => 'checkbox',
		'priority' => 29
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_related', array(
		'label'    => 'Hide Related Posts Box',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_related',
		'type'     => 'checkbox',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_related_exclusive_cat', array(
		'label'       => 'Exclude Featured Category from Related Posts based on Categories',
		'section'     => 'pencidesign_new_section_post',
		'settings'    => 'penci_post_related_exclusive_cat',
		'description' => 'Featured Category is category you selected via Customize > Featured Slider Options. This option will help you remove that category on related posts based on categories',
		'type'        => 'checkbox',
		'priority'    => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_related_grid', array(
		'label'    => 'Make Related Posts Display in a Grid Layout ( not Slider )',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_related_grid',
		'type'     => 'checkbox',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'related_by', array(
		'label'    => 'Display Related Posts By:',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_related_by',
		'type'     => 'select',
		'priority' => 31,
		'choices'  => array(
			'categories'  => 'Categories',
			'tags'        => 'Tags',
			'primary_cat' => 'Yoast SEO Primary Category'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_related_orderby', array(
		'label'    => 'Order Related Posts',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_related_orderby',
		'type'     => 'select',
		'priority' => 32,
		'choices'  => array(
			'rand'          => 'Random',
			'date'          => 'Published Date',
			'title'         => 'Posts title',
			'modified'      => 'Modified Date',
			'ID'            => 'Post ID',
			'comment_count' => 'Comment Count'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_related_sort_order', array(
		'label'    => 'Sort Order Related Posts',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_related_sort_order',
		'type'     => 'select',
		'priority' => 32,
		'choices'  => array(
			'DESC' => 'Descending',
			'ASC'  => 'Ascending '
		)
	) ) );
	$wp_customize->add_setting( 'penci_related_posts_title_length', array(
		'default'           => '8',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'related_posts_title_length', array(
		'label'    => 'Custom Words Length for Post Titles on Related Posts',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_related_posts_title_length',
		'type'     => 'number',
		'priority' => 32
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_related_text', array(
		'label'    => 'Related Posts Custom Text',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_related_text',
		'type'     => 'text',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_related_icons', array(
		'label'    => 'Enable Posts Format Icons in Related Posts',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_related_icons',
		'type'     => 'checkbox',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'off_uppercase_post_title_related', array(
		'label'    => 'Turn Off Uppercase in Posts Title Related Posts',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_off_uppercase_post_title_related',
		'type'     => 'checkbox',
		'priority' => 36
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hide_date_related', array(
		'label'    => 'Hide Post Date on Related Posts',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_hide_date_related',
		'type'     => 'checkbox',
		'priority' => 36
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_related_autoplay', array(
		'label'    => 'Related Posts Carousel Auto Play',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_related_autoplay',
		'type'     => 'checkbox',
		'priority' => 37
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_related_dots', array(
		'label'    => 'Hide Dots On Carousel Related Posts',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_related_dots',
		'type'     => 'checkbox',
		'priority' => 38
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_related_arrows', array(
		'label'    => 'Enable Next/Prev Button On Carousel Related Posts',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_related_arrows',
		'type'     => 'checkbox',
		'priority' => 39
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'numbers_related_post', array(
		'label'    => 'Amount of Related Posts',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_numbers_related_post',
		'type'     => 'number',
		'priority' => 40
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'related_post_popup', array(
		'label'       => 'Enable Related Posts Popup',
		'section'     => 'pencidesign_new_section_post',
		'description' => 'Note that: This popup will be appears when you scroll down to bottom of articles',
		'settings'    => 'penci_related_post_popup',
		'type'        => 'checkbox',
		'priority'    => 40
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'rltpopup_position', array(
		'label'    => 'Position of Related Posts Popup',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_rltpopup_position',
		'type'     => 'select',
		'priority' => 40,
		'choices'  => array(
			'left'  => 'Left',
			'right' => 'Right'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'rltpopup_by', array(
		'label'    => 'Display Related Posts Popup By:',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_rltpopup_by',
		'type'     => 'select',
		'priority' => 40,
		'choices'  => array(
			'categories'  => 'Categories',
			'tags'        => 'Tags',
			'primary_cat' => 'Yoast SEO Primary Category'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'rltpopup_orderby', array(
		'label'    => 'Order Related Posts Popup',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_rltpopup_orderby',
		'type'     => 'select',
		'priority' => 40,
		'choices'  => array(
			'date'          => 'Published Date',
			'title'         => 'Posts title',
			'modified'      => 'Modified Date',
			'rand'          => 'Random Posts',
			'ID'            => 'Post ID',
			'comment_count' => 'Comment Count'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'rltpopup_sort_order', array(
		'label'    => 'Sort Order Related Posts Popup',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_rltpopup_sort_order',
		'type'     => 'select',
		'priority' => 40,
		'choices'  => array(
			'DESC' => 'Descending',
			'ASC'  => 'Ascending '
		)
	) ) );
	$wp_customize->add_setting( 'penci_rltpopup_title_length', array(
		'default'           => '6',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'rltpopup_title_length', array(
		'label'    => 'Custom Words Length for Post Titles on Related Posts Popup',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_rltpopup_title_length',
		'type'     => 'number',
		'priority' => 40
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'rltpopup_heading_text', array(
		'label'    => 'Custom Heading Text for Related Posts Popup',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_rltpopup_heading_text',
		'type'     => 'text',
		'priority' => 40
	) ) );
	$wp_customize->add_setting( 'penci_rltpopup_numpost', array(
		'default'           => '3',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'rltpopup_numpost', array(
		'label'    => 'Number Posts Display on Related Posts Popup',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_rltpopup_numpost',
		'type'     => 'number',
		'priority' => 40
	) ) );
	$wp_customize->add_setting( 'penci_rltpopup_padding_bottom', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'rltpopup_padding_bottom', array(
		'label'    => 'Custom Padding Bottom of Related Posts Popup',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_rltpopup_padding_bottom',
		'type'     => 'number',
		'priority' => 40
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'rltpopup_hide_date', array(
		'label'    => 'Hide Date on Related Posts Popup',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_rltpopup_hide_date',
		'type'     => 'checkbox',
		'priority' => 40
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'rltpopup_hide_mobile', array(
		'label'    => 'Hide Related Posts Popup on Mobile',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_rltpopup_hide_mobile',
		'type'     => 'checkbox',
		'priority' => 40
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_hide_comments', array(
		'label'    => 'Hide Post Comments',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_hide_comments',
		'type'     => 'checkbox',
		'priority' => 45
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_move_comment_box', array(
		'label'    => 'Move Comment Form to Above the List Comments',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_move_comment_box',
		'type'     => 'checkbox',
		'priority' => 45
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'single_hide_save_fields', array(
		'label'       => 'Remove checkbox "Save my name, email, and website in this browser for the next time I comment."',
		'section'     => 'pencidesign_new_section_post',
		'settings'    => 'penci_single_hide_save_fields',
		'description' => 'Note that: This checkbox just appears when you use Wordpress from version 4.9.6',
		'type'        => 'checkbox',
		'priority'    => 45
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_single_gdpr', array(
		'label'    => 'Enable GDPR message on Comment Form',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_single_gdpr',
		'type'     => 'checkbox',
		'priority' => 45
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_single_gdpr_text', array(
		'label'       => esc_html__( 'Custom GDPR Message on Comment Form', 'soledad' ),
		'section'     => 'pencidesign_new_section_post',
		'settings'    => 'penci_single_gdpr_text',
		'description' => '',
		'type'        => 'textarea',
		'priority'    => 45
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_disable_gallery', array(
		'label'    => 'Disable Gallery Feature from This Theme',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_disable_gallery',
		'type'     => 'checkbox',
		'priority' => 45
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gallery_dstyle', array(
		'label'    => 'Default Gallery Style from The Theme',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_gallery_dstyle',
		'type'     => 'select',
		'priority' => 45,
		'choices'  => array(
			'justified' => 'Justified Style',
			'masonry' => 'Masonry Style',
			'grid' => 'Grid Style',
			'single-slider' => 'Single Slider',
			'none' => 'None'
		)
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'image_height_gallery', array(
		'label'    => 'Custom the height of images on gallery images (unit is pixel)',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_image_height_gallery',
		'type'     => 'number',
		'priority' => 46
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_post_adsense_single10', array(
		'label'       => 'Add Google Adsense/Custom HTML code For Post Template Style 10',
		'section'     => 'pencidesign_new_section_post',
		'settings'    => 'penci_post_adsense_single10',
		'type'        => 'textarea',
		'priority'    => 49
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_adsense_one', array(
		'label'       => 'Add Google Adsense/Custom HTML code below post description',
		'section'     => 'pencidesign_new_section_post',
		'settings'    => 'penci_post_adsense_one',
		'description' => '',
		'type'        => 'textarea',
		'priority'    => 50
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_adsense_two', array(
		'label'       => 'Add Google Adsense/Custom HTML code in the end of content posts',
		'section'     => 'pencidesign_new_section_post',
		'settings'    => 'penci_post_adsense_two',
		'description' => '',
		'type'        => 'textarea',
		'priority'    => 55
	) ) );

	// Page settings
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_default_template_layout', array(
		'label'    => 'Page Default Template Layout',
		'section'  => 'pencidesign_new_section_page',
		'settings' => 'penci_page_default_template_layout',
		'type'     => 'select',
		'priority' => 1,
		'choices'  => array(
			''              => 'No Sidebar with Container',
			'small-width'   => 'No Sidebar with Smaller Container Width',
			'right-sidebar' => 'Page with Right Sidebar',
			'left-sidebar'  => 'Page with Left Sidebar',
			'two-sidebar'   => 'Page with Two Sidebars'
		)
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'page_custom_width', array(
		'label'       => 'Custom Width for Page No Sidebar with Smaller Container Width',
		'section'     => 'pencidesign_new_section_page',
		'description' => 'Maximum value here is 1170px',
		'settings'    => 'penci_page_custom_width',
		'type'        => 'number',
		'priority'    => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_hide_featured_image', array(
		'label'    => 'Hide Featured Image Auto Appears',
		'section'  => 'pencidesign_new_section_page',
		'settings' => 'penci_page_hide_featured_image',
		'type'     => 'checkbox',
		'priority' => 3
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_title_uppercase', array(
		'label'    => 'Disable Uppercase on Page Titles',
		'section'  => 'pencidesign_new_section_page',
		'settings' => 'penci_page_title_uppercase',
		'type'     => 'checkbox',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_share', array(
		'label'    => 'Hide Share Buttons',
		'section'  => 'pencidesign_new_section_page',
		'settings' => 'penci_page_share',
		'type'     => 'checkbox',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_comments', array(
		'label'    => 'Hide Comments',
		'section'  => 'pencidesign_new_section_page',
		'settings' => 'penci_page_comments',
		'type'     => 'checkbox',
		'priority' => 10
	) ) );
	
	
	$wp_customize->add_setting( 'penci_header_enable_transparent', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_header_enable_transparent', array(
		'label'    => 'Enable Header Transparent',
		'section'  => 'pencidesign_new_section_page',
		'settings' => 'penci_header_enable_transparent',
		'type'     => 'checkbox',
		'priority' => 12
	) ) );
	
	
	// Start Page Header Options
	$wp_customize->add_section( 'penci_page_header', array(
		'title'    => esc_html__( 'Page Header Options', 'soledad' ),
		'priority' => 36,
	) );

	$wp_customize->add_setting( 'penci_pheader_show', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_checkbox_field',
	) );

	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'penci_pheader_show',
		array(
			'label'    => esc_html__( 'Enable Page Header for Pages', 'soledad' ),
			'section'  => 'penci_page_header',
			'type'     => 'checkbox',
			'settings' => 'penci_pheader_show',
		)
	) );

	$wp_customize->add_setting( 'penci_pheader_hideline', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_checkbox_field',
	) );

	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'penci_pheader_hideline',
		array(
			'label'    => esc_html__( 'Hide Line Below Title', 'soledad' ),
			'section'  => 'penci_page_header',
			'type'     => 'checkbox',
			'settings' => 'penci_pheader_hideline',
		)
	) );

	$wp_customize->add_setting( 'penci_pheader_hidebead', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_checkbox_field',
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'penci_pheader_hidebead',
		array(
			'label'    => esc_html__( 'Hide Breadcrumbs', 'soledad' ),
			'section'  => 'penci_page_header',
			'type'     => 'checkbox',
			'settings' => 'penci_pheader_hidebead',
		)
	) );

	$wp_customize->add_setting( 'penci_pheader_align', array(
		'default'           => 'center',
		'sanitize_callback' => 'sanitize_text_field'
	) );

	$wp_customize->add_control( 'penci_pheader_align', array(
		'label'    => esc_html__( 'Text Align', 'soledad' ),
		'section'  => 'penci_page_header',
		'settings' => 'penci_pheader_align',
		'type'     => 'select',
		'choices'  => array(
			'left'   => esc_html__( 'Left', 'soledad' ),
			'center' => esc_html__( 'Center', 'soledad' ),
			'right'  => esc_html__( 'Right', 'soledad' ),
		)
	) );

	$wp_customize->add_setting( 'penci_pheader_width', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );

	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'penci_pheader_width', array(
		'label'       => esc_html__( 'Custom Container Width for Page Header', 'soledad' ),
		'section'     => 'penci_page_header',
		'settings'    => 'penci_pheader_width',
		'type'        => 'font_size',
		'description' => esc_html__( 'By default, container width for page header will follow the container width for header', 'soledad' )
	) ) );

	$wp_customize->add_setting( 'penci_pheader_ptop', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );

	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'penci_pheader_ptop', array(
		'label'    => esc_html__( 'Padding top', 'soledad' ),
		'section'  => 'penci_page_header',
		'settings' => 'penci_pheader_ptop',
		'type'     => 'font_size',
	) ) );

	$wp_customize->add_setting( 'penci_pheader_pbottom', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );

	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'penci_pheader_pbottom', array(
		'label'    => esc_html__( 'Padding bottom', 'soledad' ),
		'section'  => 'penci_page_header',
		'settings' => 'penci_pheader_pbottom',
		'type'     => 'font_size',
	) ) );


	$wp_customize->add_setting( 'penci_pheader_turn_offup', array(
		'sanitize_callback' => 'penci_sanitize_checkbox_field',
	) );

	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'penci_pheader_turn_offup',
		array(
			'label'    => esc_html__( 'Turn Off Uppercase for Title', 'soledad' ),
			'section'  => 'penci_page_header',
			'type'     => 'checkbox',
			'settings' => 'penci_pheader_turn_offup',
		)
	) );

	$wp_customize->add_setting( 'penci_pheader_title_pbottom', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );

	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'penci_pheader_title_pbottom', array(
		'label'    => esc_html__( 'Custom Padding Bottom for Title', 'soledad' ),
		'section'  => 'penci_page_header',
		'settings' => 'penci_pheader_title_pbottom',
		'type'     => 'font_size',
	) ) );

	$wp_customize->add_setting( 'penci_pheader_title_mbottom', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );

	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'penci_pheader_title_mbottom', array(
		'label'    => esc_html__( 'Custom Margin Bottom for Title', 'soledad' ),
		'section'  => 'penci_page_header',
		'settings' => 'penci_pheader_title_mbottom',
		'type'     => 'font_size',
	) ) );

	$wp_customize->add_setting( 'penci_pheader_title_fsize', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );

	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'penci_pheader_title_fsize', array(
		'label'    => esc_html__( 'Custom Font Size for Title', 'soledad' ),
		'section'  => 'penci_page_header',
		'settings' => 'penci_pheader_title_fsize',
		'type'     => 'font_size',
	) ) );

	$wp_customize->add_setting( 'penci_pheader_fwtitle', array(
		'default'           => '600',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'penci_pheader_fwtitle', array(
		'label'    => esc_html__( 'Font Weight For Title', 'soledad' ),
		'section'  => 'penci_page_header',
		'settings' => 'penci_pheader_fwtitle',
		'type'     => 'select',
		'choices'  => array(
			'normal'  => 'Normal',
			'bold'    => 'Bold',
			'bolder'  => 'Bolder',
			'lighter' => 'Lighter',
			'100'     => '100',
			'200'     => '200',
			'300'     => '300',
			'400'     => '400',
			'500'     => '500',
			'600'     => '600',
			'700'     => '700',
			'800'     => '800',
			'900'     => '900'
		)
	) );

	$wp_customize->add_setting( 'penci_pheader_bread_fsize', array(
		'sanitize_callback' => 'penci_sanitize_number_field',
	) );

	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'penci_pheader_bread_fsize', array(
		'label'    => esc_html__( 'Custom Font Size for Breadcrumb', 'soledad' ),
		'section'  => 'penci_page_header',
		'settings' => 'penci_pheader_bread_fsize',
		'type'     => 'font_size',
	) ) );

	$wp_customize->add_setting( 'penci_pheader_colors_heading', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_pheader_colors_heading', array(
		'label'    => esc_html__( 'Colors', 'soledad' ),
		'section'  => 'penci_page_header',
		'settings' => 'penci_pheader_colors_heading',
		'type'     => 'heading',
	) ) );

	$wp_customize->add_setting( 'penci_pheader_bgimg', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'penci_pheader_bgimg', array(
		'label'    => esc_html__( 'Background Image', 'soledad' ),
		'section'  => 'penci_page_header',
		'settings' => 'penci_pheader_bgimg',
	) ) );

	$pheader_colors = array(
		'penci_pheader_bgcolor'      => esc_html__( 'Background Color', 'soledad' ),
		'penci_pheader_title_color'  => esc_html__( 'Title Color', 'soledad' ),
		'penci_pheader_line_color'   => esc_html__( 'Line Color', 'soledad' ),
		'penci_pheader_bread_color'  => esc_html__( 'Breadcrumbs Text Color', 'soledad' ),
		'penci_pheader_bread_hcolor' => esc_html__( 'Breadcrumbs Hover Text Color', 'soledad' ),
	);

	foreach ( $pheader_colors as $key => $label ) {
		$wp_customize->add_setting( $key, array(
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $key, array(
			'label'    => $label,
			'section'  => 'penci_page_header',
			'settings' => $key,
		) ) );
	}
// End Page Header Options

	// Social Media
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook', array(
		'label'    => 'Facebook',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_facebook',
		'type'     => 'text',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter', array(
		'label'    => 'Twitter',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_twitter',
		'type'     => 'text',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'instagram', array(
		'label'    => 'Instagram',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_instagram',
		'type'     => 'text',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pinterest', array(
		'label'    => 'Pinterest',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_pinterest',
		'type'     => 'text',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'linkedin', array(
		'label'    => 'LinkedIn',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_linkedin',
		'type'     => 'text',
		'priority' => 26
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'flickr', array(
		'label'    => 'Flickr',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_flickr',
		'type'     => 'text',
		'priority' => 27
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'behance', array(
		'label'    => 'Behance',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_behance',
		'type'     => 'text',
		'priority' => 28
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'tumblr', array(
		'label'    => 'Tumblr',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_tumblr',
		'type'     => 'text',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'youtube', array(
		'label'    => 'Youtube',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_youtube',
		'type'     => 'text',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'email_me', array(
		'label'       => 'Email',
		'section'     => 'pencidesign_new_section_social',
		'description' => 'If you want to click email icon to link to your mail, please fill: mailto:yourmail@hostmail. Change yourmail@hostmail.com to your mail. You also can fill your contact link page here',
		'settings'    => 'penci_email_me',
		'type'        => 'text',
		'priority'    => 36
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vk', array(
		'label'    => 'VK',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_vk',
		'type'     => 'text',
		'priority' => 37
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bloglovin', array(
		'label'    => 'Bloglovin',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_bloglovin',
		'type'     => 'text',
		'priority' => 38
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vine', array(
		'label'    => 'Vine',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_vine',
		'type'     => 'text',
		'priority' => 39
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'soundcloud', array(
		'label'    => 'Soundcloud',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_soundcloud',
		'type'     => 'text',
		'priority' => 40
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'snapchat', array(
		'label'    => 'Snapchat',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_snapchat',
		'type'     => 'text',
		'priority' => 45
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'spotify', array(
		'label'    => 'Spotify',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_spotify',
		'type'     => 'text',
		'priority' => 45
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'github', array(
		'label'    => 'Github',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_github',
		'type'     => 'text',
		'priority' => 50
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stack-overflow', array(
		'label'    => 'Stack Overflow',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_stack',
		'type'     => 'text',
		'priority' => 55
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitch', array(
		'label'    => 'Twitch',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_twitch',
		'type'     => 'text',
		'priority' => 60
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'steam', array(
		'label'    => 'Steam',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_steam',
		'type'     => 'text',
		'priority' => 61
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vimeo', array(
		'label'    => 'Vimeo',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_vimeo',
		'type'     => 'text',
		'priority' => 65
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'xing', array(
		'label'    => 'XING',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_xing',
		'type'     => 'text',
		'priority' => 66
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whatsapp', array(
		'label'    => 'Whatsapp',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_whatsapp',
		'type'     => 'text',
		'priority' => 67
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'telegram', array(
		'label'    => 'Telegram',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_telegram',
		'type'     => 'text',
		'priority' => 67
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'reddit', array(
		'label'    => 'Reddit',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_reddit',
		'type'     => 'text',
		'priority' => 67
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ok', array(
		'label'    => 'Ok',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_ok',
		'type'     => 'text',
		'priority' => 67
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, '500px', array(
		'label'    => '500px',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_500px',
		'type'     => 'text',
		'priority' => 67
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stumbleupon', array(
		'label'    => 'StumbleUpon',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_stumbleupon',
		'type'     => 'text',
		'priority' => 67
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wechat', array(
		'label'    => 'Wechat',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_wechat',
		'type'     => 'text',
		'priority' => 67
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'weibo', array(
		'label'    => 'Weibo',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_weibo',
		'type'     => 'text',
		'priority' => 67
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_line', array(
		'label'    => 'LINE',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_line',
		'type'     => 'text',
		'priority' => 67
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'viber', array(
		'label'    => 'Viber',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_viber',
		'type'     => 'text',
		'priority' => 67
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'discord', array(
		'label'    => 'Discord',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_discord',
		'type'     => 'text',
		'priority' => 67
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'rss', array(
		'label'    => 'RSS Link',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_rss',
		'type'     => 'text',
		'priority' => 70
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_slack', array(
		'label'    => 'Slack Link',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_slack',
		'type'     => 'text',
		'priority' => 70
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_mixcloud', array(
		'label'    => 'Mixcloud Link',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_mixcloud',
		'type'     => 'text',
		'priority' => 70
	) ) );

	// Footer Settings
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_adsense', array(
		'label'       => 'Add Google Adsense/Custom HTML Code Above Footer',
		'section'     => 'pencidesign_new_section_footer',
		'settings'    => 'penci_footer_adsense',
		'description' => '',
		'type'        => 'textarea',
		'priority'    => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_widget_area', array(
		'label'    => 'Disable Footer Widget Area',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_footer_widget_area',
		'type'     => 'checkbox',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_footer_width', array(
		'label'    => 'Footer Container Width',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_footer_width',
		'type'     => 'select',
		'priority' => 3,
		'choices'  => array(
			''          => esc_html__( 'Width: 1170px', 'soledad' ),
			'1400'      => esc_html__( 'Width: 1400px', 'soledad' ),
			'fullwidth' => esc_html__( 'Full Width', 'soledad' )
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_widget_area_layout', array(
		'label'    => 'Footer Widget Area Columns Layout',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_footer_widget_area_layout',
		'type'     => 'select',
		'priority' => 3,
		'choices'  => array(
			'style-1'  => '1/3 + 1/3 + 1/3',
			'style-2'  => '1/3 + 2/3',
			'style-3'  => '2/3 + 1/3',
			'style-4'  => '1/4 + 1/4 + 1/4 + 1/4',
			'style-5'  => '2/4 + 1/4 + 1/4',
			'style-6'  => '1/4 + 2/4 + 1/4',
			'style-7'  => '1/4 + 1/4 + 2/4',
			'style-8'  => '1/4 + 3/4',
			'style-9'  => '3/4 + 1/4',
			'style-10' => '1/2 + 1/2',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_widget_title_center', array(
		'label'    => 'Align Center Footer Widget Title',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_footer_widget_title_center',
		'type'     => 'checkbox',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'footer_widget_padding', array(
		'label'    => 'Footer Widget Area Padding Top & Bottom',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_footer_widget_padding',
		'type'     => 'number',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_insta_title_overlay', array(
		'label'    => 'Display Footer Instagram Widget Title Overlay Images',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_footer_insta_title_overlay',
		'type'     => 'checkbox',
		'priority' => 12
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_insta_hide_icon', array(
		'label'    => 'Hide Instagram Icon on Footer Instagram',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_footer_insta_hide_icon',
		'type'     => 'checkbox',
		'priority' => 12
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_social_around', array(
		'label'    => 'Disable Border Around Footer Social Icons',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_footer_social_around',
		'type'     => 'checkbox',
		'priority' => 12
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_brand_social', array(
		'label'    => 'Enable Use Brand Colors for Footer Social Icons',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_footer_brand_social',
		'type'     => 'checkbox',
		'priority' => 12
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_disable_radius_social', array(
		'label'    => 'Disable Border Radius on Border of Social Icons',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_footer_disable_radius_social',
		'type'     => 'checkbox',
		'priority' => 12
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_social_remove_text', array(
		'label'    => 'Hide Footer Social Icons Text',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_footer_social_remove_text',
		'type'     => 'checkbox',
		'priority' => 12
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_social_drop_line', array(
		'label'    => 'Make Footer Social Text Drop In New Line',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_footer_social_drop_line',
		'type'     => 'checkbox',
		'priority' => 12
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'footer_social_size', array(
		'label'    => 'Custom Font Size for Icons on Footer Social Icons',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_footer_social_size',
		'type'     => 'number',
		'priority' => 12
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_social_lowercase', array(
		'label'    => 'Disable Uppercase on Footer Social Icons Text',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_footer_social_lowercase',
		'type'     => 'checkbox',
		'priority' => 12
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'footer_social_text_size', array(
		'label'    => 'Custom Font Size for Footer Social Icons Text',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_footer_social_text_size',
		'type'     => 'number',
		'priority' => 12
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_social', array(
		'label'    => 'Disable Footer Socials',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_footer_social',
		'type'     => 'checkbox',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hide_footer_logo', array(
		'label'    => 'Disable Footer Logo',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_hide_footer_logo',
		'type'     => 'checkbox',
		'priority' => 16
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo', array(
		'label'    => 'Footer Logo',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_footer_logo',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'custom_url_logo_footer', array(
		'label'       => 'Custom Link for Footer Logo Image',
		'section'     => 'pencidesign_new_section_footer',
		'settings'    => 'penci_custom_url_logo_footer',
		'description' => 'By default, footer logo image will link to homepage url. If you want to link the footer logo for another URL - fill here. Include http:// or https:// on the link',
		'type'        => 'text',
		'priority'    => 21
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_go_to_top', array(
		'label'    => 'Disable Go To Top Button on Footer',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_go_to_top',
		'type'     => 'checkbox',
		'priority' => 22
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'go_to_top_floating', array(
		'label'    => 'Enable Go To Top Button Floating on The Bottom Right',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_go_to_top_floating',
		'type'     => 'checkbox',
		'priority' => 22
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_menu', array(
		'label'       => 'Enable Footer Menu',
		'section'     => 'pencidesign_new_section_footer',
		'settings'    => 'penci_footer_menu',
		'description' => 'You can setup your footer menu by go to admin > Appearance > Menus > Create/Select your menu and check to "Footer Menu"',
		'type'        => 'checkbox',
		'priority'    => 23
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'footer_menu_size', array(
		'label'    => 'Custom Font Size for Footer Menu',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_footer_menu_size',
		'type'     => 'number',
		'priority' => 24
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_copyright', array(
		'label'    => 'Footer Copyright Text',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_footer_copyright',
		'type'     => 'textarea',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_copyright_remove_italic', array(
		'label'    => 'Remove Italic on Footer Copyright Text',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_footer_copyright_remove_italic',
		'type'     => 'checkbox',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'footer_copyright_size', array(
		'label'    => 'Custom Font Size for Footer Copyright Text',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_footer_copyright_size',
		'type'     => 'number',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_analytics', array(
		'label'    => 'Google Analytics Code',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_footer_analytics',
		'type'     => 'textarea',
		'priority' => 30
	) ) );

	// 404 Page Settings
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'not_found_image', array(
		'label'    => '404 Custom Main Image',
		'section'  => 'pencidesign_new_section_not_found',
		'settings' => 'penci_not_found_image',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'not_found_sub_heading', array(
		'label'    => '404 Custom Message Text',
		'section'  => 'pencidesign_new_section_not_found',
		'settings' => 'penci_not_found_sub_heading',
		'type'     => 'textarea',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'not_found_hide_search', array(
		'label'    => 'Hide Search Form',
		'section'  => 'pencidesign_new_section_not_found',
		'settings' => 'penci_not_found_hide_search',
		'type'     => 'checkbox',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'not_found_hide_backhome', array(
		'label'    => 'Hide "BACK TO HOME PAGE"',
		'section'  => 'pencidesign_new_section_not_found',
		'settings' => 'penci_not_found_hide_backhome',
		'type'     => 'checkbox',
		'priority' => 25
	) ) );

	// Portfolio Options
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'portfolio_cat_enable_sidebar', array(
		'label'    => 'Enable Sidebar On Portfolio Categories',
		'section'  => 'pencidesign_new_section_portfolio',
		'settings' => 'penci_portfolio_cat_enable_sidebar',
		'type'     => 'checkbox',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'portfolio_cat_enable_sidebar', array(
		'label'    => 'Enable Sidebar On Single Portfolio',
		'section'  => 'pencidesign_new_section_portfolio',
		'settings' => 'penci_portfolio_single_enable_sidebar',
		'type'     => 'checkbox',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'portfolio_single_enable_2sidebar', array(
		'label'    => 'Enable Two Sidebars On Single Portfolio',
		'section'  => 'pencidesign_new_section_portfolio',
		'settings' => 'penci_portfolio_single_enable_2sidebar',
		'type'     => 'checkbox',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_single_portfolio', array(
		'label'       => 'Custom Sidebar for Single Portfolio',
		'section'     => 'pencidesign_new_section_portfolio',
		'settings'    => 'penci_sidebar_single_portfolio',
		'description' => 'If sidebar your choice is empty, will display Main Sidebar',
		'type'        => 'select',
		'priority'    => 3,
		'choices'     => get_list_custom_sidebar_option()
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_left_single_portfolio', array(
		'label'       => 'Custom Sidebar Left for Single Portfolio',
		'section'     => 'pencidesign_new_section_portfolio',
		'settings'    => 'penci_sidebar_left_single_portfolio',
		'description' => 'If sidebar your choice is empty, will display Main Sidebar Left. This option just use when you enable 2 sidebars for Single Portfolio',
		'type'        => 'select',
		'priority'    => 3,
		'choices'     => get_list_custom_sidebar_option()
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'portfolio_hide_featured_image_single', array(
		'label'    => 'Hide Featured Image on Single Portfolio',
		'section'  => 'pencidesign_new_section_portfolio',
		'settings' => 'penci_portfolio_hide_featured_image_single',
		'type'     => 'checkbox',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'portfolio_share_box', array(
		'label'    => 'Hide Share Box on Single Portfolio',
		'section'  => 'pencidesign_new_section_portfolio',
		'settings' => 'penci_portfolio_share_box',
		'type'     => 'checkbox',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'portfolio_next_prev_project', array(
		'label'    => 'Enable Next/Prev Project on Single Portfolio',
		'section'  => 'pencidesign_new_section_portfolio',
		'settings' => 'penci_portfolio_next_prev_project',
		'type'     => 'checkbox',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'portfolio_next_text', array(
		'label'    => 'Custom Text for Next Project Button',
		'section'  => 'pencidesign_new_section_portfolio',
		'settings' => 'penci_portfolio_next_text',
		'type'     => 'text',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'portfolio_prev_text', array(
		'label'    => 'Custom Text for Previous Project Button',
		'section'  => 'pencidesign_new_section_portfolio',
		'settings' => 'penci_portfolio_prev_text',
		'type'     => 'text',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'portfolio_enable_comment', array(
		'label'    => 'Enable Comment on Single Portfolio',
		'section'  => 'pencidesign_new_section_portfolio',
		'settings' => 'penci_portfolio_enable_comment',
		'type'     => 'checkbox',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'portfolio_layout', array(
		'label'    => 'Portfolio Category Layout',
		'section'  => 'pencidesign_new_section_portfolio',
		'settings' => 'penci_portfolio_layout',
		'type'     => 'radio',
		'priority' => 5,
		'choices'  => array(
			'masonry' => 'Masonry Layout',
			'grid'    => 'Grid Layout'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_portfolio_item_style', array(
		'label'    => 'Portfolio Category Layout',
		'section'  => 'pencidesign_new_section_portfolio',
		'settings' => 'penci_portfolio_item_style',
		'type'     => 'radio',
		'priority' => 5,
		'choices'  => array(
			'text_overlay' => 'Text Overlay',
			'below_img'    => 'Text Below Image'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'portfolio_overlay_color', array(
		'label'    => 'Portfolio Overlay Hover Color',
		'section'  => 'pencidesign_new_section_portfolio',
		'settings' => 'penci_portfolio_overlay_color',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'portfolio_overlay_opacity', array(
		'label'    => 'Portfolio Overlay Hover Opacity',
		'section'  => 'pencidesign_new_section_portfolio',
		'settings' => 'penci_portfolio_overlay_opacity',
		'type'     => 'select',
		'priority' => 15,
		'choices'  => array(
			'0.05' => '0.05',
			'0.1'  => '0.1',
			'0.15' => '0.15',
			'0.2'  => '0.2',
			'0.25' => '0.25',
			'0.3'  => '0.3',
			'0.35' => '0.35',
			'0.4'  => '0.4',
			'0.45' => '0.45',
			'0.5'  => '0.5',
			'0.55' => '0.55',
			'0.6'  => '0.6',
			'0.65' => '0.65',
			'0.7'  => '0.7',
			'0.75' => '0.75',
			'0.8'  => '0.8',
			'0.85' => '0.85',
			'0.9'  => '0.9',
			'0.95' => '0.95',
			'1'    => '1',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'portfolio_title_color', array(
		'label'    => 'Portfolio Post Title Color',
		'section'  => 'pencidesign_new_section_portfolio',
		'settings' => 'penci_portfolio_title_color',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'portfolio_title_hcolor', array(
		'label'    => 'Portfolio Post Title Hover Color',
		'section'  => 'pencidesign_new_section_portfolio',
		'settings' => 'penci_portfolio_title_hcolor',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'portfolio_cate_color', array(
		'label'    => 'Portfolio Post Categories Color',
		'section'  => 'pencidesign_new_section_portfolio',
		'settings' => 'penci_portfolio_cate_color',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'portfolio_cate_hcolor', array(
		'label'    => 'Portfolio Post Categories Hover Color',
		'section'  => 'pencidesign_new_section_portfolio',
		'settings' => 'penci_portfolio_cate_hcolor',
		'priority' => 25
	) ) );

	$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_portfolio_extra_heading', array(
		'label'    => esc_html__( 'EXTRA', 'soledad' ),
		'section'  => 'pencidesign_new_section_portfolio',
		'settings' => 'penci_portfolio_extra_heading',
		'type'     => 'heading',
		'priority' => 25
	) ) );

	$wp_customize->add_control( 'penci_pfl_custom_slug', array(
		'label'       => esc_html__( 'Custom portfolio item URL prefix', 'soledad' ),
		'section'     => 'pencidesign_new_section_portfolio',
		'settings'    => 'penci_pfl_custom_slug',
		'description' => sprintf( __( 'When you change this setting you need to Save Changes again the  %s permalinks rules here. %s', 'soledad' ), '<a href="' . admin_url( 'options-permalink.php' ) . '" target="_bank">', '</a>' ),
		'input_attrs' => array(
			'placeholder' => __( 'Current portfolio slug: portfolio', 'soledad' ),
		),
		'priority'    => 25
	) );

	$wp_customize->add_control( 'penci_pfl_custom_catslug', array(
		'label'       => esc_html__( 'Custom portfolio category URL prefix', 'soledad' ),
		'section'     => 'pencidesign_new_section_portfolio',
		'settings'    => 'penci_pfl_custom_catslug',
		'description' => sprintf( __( 'When you change this setting you need to Save Changes again the  %s permalinks rules here. %s', 'soledad' ), '<a href="' . admin_url( 'options-permalink.php' ) . '" target="_bank">', '</a>' ),
		'input_attrs' => array(
			'placeholder' => __( 'Current category slug: portfolio-category', 'soledad' ),
		),
		'priority'    => 25
	) );


	// Woocommerce options
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_shop_hide_cart_icon', array(
		'label'    => 'Hide Shopping Cart Icon on Header',
		'section'  => 'pencidesign_new_section_woocommerce',
		'settings' => 'penci_woo_shop_hide_cart_icon',
		'type'     => 'checkbox',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'size_header_cart_icon_check', array(
		'label'    => 'Custom Size for Header Cart Icon',
		'section'  => 'pencidesign_new_section_woocommerce',
		'settings' => 'size_header_cart_icon_check',
		'type'     => 'number',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_shop_enable_sidebar', array(
		'label'    => 'Enable Sidebar On Shop Page',
		'section'  => 'pencidesign_new_section_woocommerce',
		'settings' => 'penci_woo_shop_enable_sidebar',
		'type'     => 'checkbox',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_cat_enable_sidebar', array(
		'label'    => 'Enable Sidebar On Archive',
		'section'  => 'pencidesign_new_section_woocommerce',
		'settings' => 'penci_woo_cat_enable_sidebar',
		'type'     => 'checkbox',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_single_enable_sidebar', array(
		'label'    => 'Enable Sidebar On Single Product',
		'section'  => 'pencidesign_new_section_woocommerce',
		'settings' => 'penci_woo_single_enable_sidebar',
		'type'     => 'checkbox',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_left_sidebar', array(
		'label'    => 'Enable Left Sidebar',
		'section'  => 'pencidesign_new_section_woocommerce',
		'settings' => 'penci_woo_left_sidebar',
		'type'     => 'checkbox',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_disable_breadcrumb', array(
		'label'    => 'Disable Breadcrumb',
		'section'  => 'pencidesign_new_section_woocommerce',
		'settings' => 'penci_woo_disable_breadcrumb',
		'type'     => 'checkbox',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_paging_align', array(
		'label'    => 'Page Navigation Alignment',
		'section'  => 'woocommerce_product_catalog',
		'settings' => 'penci_woo_paging_align',
		'type'     => 'select',
		'priority' => 27,
		'choices'  => array(
			'center' => 'Center',
			'left'   => 'Left',
			'right'  => 'Right'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_disable_zoom', array(
		'label'    => 'Disable Zoom on Gallery Product',
		'section'  => 'pencidesign_new_section_woocommerce',
		'settings' => 'penci_woo_disable_zoom',
		'type'     => 'checkbox',
		'priority' => 24
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'woo_post_per_page', array(
		'label'    => 'Custom Amount of Products Shown Per Page on Shop page & Categories page',
		'section'  => 'woocommerce_product_catalog',
		'settings' => 'penci_woo_post_per_page',
		'type'     => 'number',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'woo_number_related_products', array(
		'label'    => 'Custom Amount of Related Products',
		'section'  => 'pencidesign_new_section_woocommerce',
		'settings' => 'penci_woo_number_related_products',
		'type'     => 'number',
		'priority' => 30
	) ) );


	/* = Color Settings
	-------------------------------------------------------------- */
	// Colors general
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_accent', array(
		'label'    => 'Accent Colors',
		'section'  => 'pencidesign_new_section_color_general',
		'settings' => 'penci_color_accent',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_color_dark', array(
		'label'    => 'Custom Background Color for Body',
		'section'  => 'pencidesign_new_section_color_general',
		'settings' => 'penci_bg_color_dark',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_color_dark', array(
		'label'    => 'Custom General Border Color',
		'section'  => 'pencidesign_new_section_color_general',
		'settings' => 'penci_border_color_dark',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'enable_dark_layout', array(
		'label'       => 'Enable Dark Theme',
		'section'     => 'pencidesign_new_section_color_general',
		'settings'    => 'penci_enable_dark_layout',
		'description' => 'All options below only apply when you enable dark theme. And all other elements, please change it via other colors options for that elements.',
		'type'        => 'checkbox',
		'priority'    => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_color_dark', array(
		'label'    => 'Custom Text Color for Dark Theme',
		'section'  => 'pencidesign_new_section_color_general',
		'settings' => 'penci_text_color_dark',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'meta_color_dark', array(
		'label'    => 'Custom Posts Meta Color for Dark Theme',
		'section'  => 'pencidesign_new_section_color_general',
		'settings' => 'penci_meta_color_dark',
		'priority' => 30
	) ) );


	// Color homepage
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_boxes_overlay', array(
		'label'    => 'Homepage Featured Boxes Border & Background Color',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_boxes_overlay',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_boxes_title_color', array(
		'label'    => 'Homepage Featured Boxes Title Color',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_boxes_title_color',
		'priority' => 3
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_boxes_accent_hover_color', array(
		'label'    => 'Homepage Featured Boxes Accent Hover Color',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_boxes_accent_hover_color',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_popular_label_color', array(
		'label'    => 'Homepage Popular Post Label Color',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_popular_label_color',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_popular_post_title_color', array(
		'label'    => 'Homepage Popular Post Title Post Color',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_popular_post_title_color',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_popular_post_title_hover_color', array(
		'label'    => 'Homepage Popular Post Title Post Hover Color',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_popular_post_title_hover_color',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_popular_post_date_color', array(
		'label'    => 'Homepage Popular Post Date Color',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_popular_post_date_color',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_featured_cat_lowcase', array(
		'label'       => 'Turn Off Uppercase for Heading Latest Posts & Featured Categories Heading',
		'section'     => 'pencidesign_new_section_color_home',
		'settings'    => 'penci_home_featured_cat_lowcase',
		'description' => 'Homepage title box is "Latest Posts" box and featured categories title box in Magazine Layout. Check <a rel="nofollow" href="https://image.prntscr.com/image/Y3ekxwcmQ__srAZLQMiCeA.png" target="_blank">this image</a> to know more',
		'type'        => 'checkbox',
		'priority'    => 4
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'featured_cat_size', array(
		'label'    => 'Custom Font Size Homepage Title Box',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_featured_cat_size',
		'type'     => 'number',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_cat_style', array(
		'label'    => 'Homepage Title Box Style',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_featured_cat_style',
		'type'     => 'radio',
		'priority' => 4,
		'choices'  => array(
			'style-1'  => 'Default Style',
			'style-2'  => 'Style 2',
			'style-3'  => 'Style 3',
			'style-4'  => 'Style 4',
			'style-5'  => 'Style 5',
			'style-6'  => 'Style 6 - Only Text',
			'style-7'  => 'Style 7',
			'style-9'  => 'Style 8',
			'style-8'  => 'Style 9 - Custom Background Image',
			'style-10' => 'Style 10',
			'style-11' => 'Style 11',
			'style-12' => 'Style 12',
			'style-13' => 'Style 13',
			'style-14' => 'Style 14',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'featured_cat_image_8', array(
		'label'    => 'Custom Background Image for Style 9',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_featured_cat_image_8',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_cat8_repeat', array(
		'label'    => 'Background Image Repeat for Style 9',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_featured_cat8_repeat',
		'type'     => 'radio',
		'priority' => 4,
		'choices'  => array(
			'no-repeat' => 'No Repeat',
			'repeat'    => 'Repeat'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_cat_align', array(
		'label'    => 'Homepage Featured Categories Title Box Align',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_featured_cat_align',
		'type'     => 'radio',
		'priority' => 4,
		'choices'  => array(
			'pcalign-left'   => 'Left',
			'pcalign-center' => 'Center',
			'pcalign-right'  => 'Right'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'heading_latest_align', array(
		'label'    => 'Homepage Heading Latest Posts Title Align',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_heading_latest_align',
		'type'     => 'radio',
		'priority' => 4,
		'choices'  => array(
			'pcalign-center' => 'Center',
			'pcalign-left'   => 'Left',
			'pcalign-right'  => 'Right'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_title_box_bg', array(
		'label'    => 'Homepage Title Box Background Color',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_title_box_bg',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_title_box_outer_bg', array(
		'label'    => 'Homepage Title Box Background Outer Color',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_title_box_outer_bg',
		'priority' => 6
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_title_box_border_color', array(
		'label'    => 'Homepage Title Box Border Color',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_title_box_border_color',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_title_box_border_inner_color', array(
		'label'    => 'Homepage Title Box Border Outer Color',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_title_box_border_inner_color',
		'priority' => 11
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_title_box_border_bottom5', array(
		'label'    => 'Custom Color for Border Bottom on Homepage Title Box Style 5, 10, 11, 12',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_title_box_border_bottom5',
		'priority' => 12
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_title_box_border_bottom7', array(
		'label'    => 'Custom Color for Small Border Bottom on Homepage Title Box Style 7 & Style 8',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_title_box_border_bottom7',
		'priority' => 12
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_home_title_box_border_top10', array(
		'label'    => 'Custom Color for Border Top on Homepage Title Box Style 10',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_title_box_border_top10',
		'priority' => 12
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_home_title_box_shapes_color', array(
		'label'    => 'Custom Color for Background Shapes Widget Heading Style 11, 12, 13',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_title_box_shapes_color',
		'priority' => 12
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_title_box_text_color', array(
		'label'    => 'Homepage Title Box Text Color',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_title_box_text_color',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_remove_border_outer', array(
		'label'    => 'Remove Border Outer on Title Box',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_remove_border_outer',
		'type'     => 'checkbox',
		'priority' => 16
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_remove_arrow_down', array(
		'label'    => 'Remove Arrow Down on Title Box',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_remove_arrow_down',
		'type'     => 'checkbox',
		'priority' => 17
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_featured_title_color', array(
		'label'       => 'Featured Posts Title Color',
		'section'     => 'pencidesign_new_section_color_home',
		'settings'    => 'penci_home_featured_title_color',
		'description' => 'Featured posts is posts in featured categories of magazine layouts',
		'priority'    => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_featured_title_hover_color', array(
		'label'    => 'Featured Posts Title Hover Color',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_featured_title_hover_color',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_featured_accent_color', array(
		'label'    => 'Featured Posts Accent Color',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_featured_accent_color',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_featured3_overlay_color', array(
		'label'       => 'Featured Posts Overlay Background Color For Style 3 & Style 11',
		'section'     => 'pencidesign_new_section_color_home',
		'settings'    => 'penci_home_featured3_overlay_color',
		'description' => 'This option and options bellow for featured categories style 3 in magazine layouts ( style 3 is the style of the featured categories are selected in a category edit screen )',
		'priority'    => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_featured3_overlay_opacity', array(
		'label'    => 'Featured Posts Overlay Opacity For Style 3 & Style 11',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_featured3_overlay_opacity',
		'type'     => 'select',
		'priority' => 40,
		'choices'  => array(
			'0'    => '0',
			'0.05' => '0.05',
			'0.1'  => '0.1',
			'0.15' => '0.15',
			'0.2'  => '0.2',
			'0.25' => '0.25',
			'0.3'  => '0.3',
			'0.35' => '0.35',
			'0.4'  => '0.4',
			'0.45' => '0.45',
			'0.5'  => '0.5',
			'0.55' => '0.55',
			'0.6'  => '0.6',
			'0.65' => '0.65',
			'0.7'  => '0.7',
			'0.75' => '0.75',
			'0.8'  => '0.8',
			'0.85' => '0.85',
			'0.9'  => '0.9',
			'0.95' => '0.95',
			'1'    => '1',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_featured3_overlay_hover_opacity', array(
		'label'    => 'Featured Posts Overlay Hover Opacity For Style 3 & Style 11',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_featured3_overlay_hover_opacity',
		'type'     => 'select',
		'priority' => 41,
		'choices'  => array(
			'0'    => '0',
			'0.05' => '0.05',
			'0.1'  => '0.1',
			'0.15' => '0.15',
			'0.2'  => '0.2',
			'0.25' => '0.25',
			'0.3'  => '0.3',
			'0.35' => '0.35',
			'0.4'  => '0.4',
			'0.45' => '0.45',
			'0.5'  => '0.5',
			'0.55' => '0.55',
			'0.6'  => '0.6',
			'0.65' => '0.65',
			'0.7'  => '0.7',
			'0.75' => '0.75',
			'0.8'  => '0.8',
			'0.85' => '0.85',
			'0.9'  => '0.9',
			'0.95' => '0.95',
			'1'    => '1',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_featured3_title_color', array(
		'label'    => 'Featured Posts Title Color For Style 3, Style 11, Style 14 & Single Slider',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_featured3_title_color',
		'priority' => 45
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_featured3_title_hover_color', array(
		'label'    => 'Featured Posts Title Hover Color For Style 3, Style 11, Style 14 & Single Slider',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_featured3_title_hover_color',
		'priority' => 50
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_featured3_meta_color', array(
		'label'    => 'Featured Posts Meta Color For Style 3, Style 11, Style 14 & Single Slider',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_featured3_meta_color',
		'priority' => 55
	) ) );

	// Top Bar Color
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bar_bg', array(
		'label'    => 'Top Bar Background Color',
		'section'  => 'pencidesign_new_section_color_top_bar',
		'settings' => 'penci_top_bar_bg',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bar_top_posts_bg', array(
		'label'    => '"Top Posts" Background Color',
		'section'  => 'pencidesign_new_section_color_top_bar',
		'settings' => 'penci_top_bar_top_posts_bg',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bar_top_posts_color', array(
		'label'    => '"Top Posts" Text Color',
		'section'  => 'pencidesign_new_section_color_top_bar',
		'settings' => 'penci_top_bar_top_posts_color',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bar_button_color', array(
		'label'    => 'Next/Prev Posts Top Bar Button Color',
		'section'  => 'pencidesign_new_section_color_top_bar',
		'settings' => 'penci_top_bar_button_color',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bar_button_hover_color', array(
		'label'    => 'Next/Prev Posts Top Bar Button Hover Color',
		'section'  => 'pencidesign_new_section_color_top_bar',
		'settings' => 'penci_top_bar_button_hover_color',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bar_title_color', array(
		'label'    => 'Top Bar Posts Title Color',
		'section'  => 'pencidesign_new_section_color_top_bar',
		'settings' => 'penci_top_bar_title_color',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bar_title_hover_color', array(
		'label'    => 'Top Bar Posts Title Hover Color',
		'section'  => 'pencidesign_new_section_color_top_bar',
		'settings' => 'penci_top_bar_title_hover_color',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bar_menu_color', array(
		'label'    => 'Top Bar Menu Text Color',
		'section'  => 'pencidesign_new_section_color_top_bar',
		'settings' => 'penci_top_bar_menu_color',
		'priority' => 36
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bar_menu_hover_color', array(
		'label'    => 'Top Bar Menu Text Hover Color',
		'section'  => 'pencidesign_new_section_color_top_bar',
		'settings' => 'penci_top_bar_menu_hover_color',
		'priority' => 37
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bar_menu_border', array(
		'label'    => 'Top Bar Menu Border Color',
		'section'  => 'pencidesign_new_section_color_top_bar',
		'settings' => 'penci_top_bar_menu_border',
		'priority' => 38
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bar_menu_dropdown_bg', array(
		'label'    => 'Top Bar Menu Dropdown Background Color',
		'section'  => 'pencidesign_new_section_color_top_bar',
		'settings' => 'penci_top_bar_menu_dropdown_bg',
		'priority' => 38
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bar_social_color', array(
		'label'    => 'Top Bar Social Icons Color',
		'section'  => 'pencidesign_new_section_color_top_bar',
		'settings' => 'penci_top_bar_social_color',
		'priority' => 40
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bar_social_hover_color', array(
		'label'    => 'Top Bar Social Icons Hover Color',
		'section'  => 'pencidesign_new_section_color_top_bar',
		'settings' => 'penci_top_bar_social_hover_color',
		'priority' => 45
	) ) );

	// Header Color
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_background_color', array(
		'label'    => 'Header Background Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_header_background_color',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_background_image', array(
		'label'       => 'Header Background Image',
		'section'     => 'pencidesign_new_section_color_topbar',
		'description' => 'You should use image with minimum width 1920px and minimum height 300px',
		'settings'    => 'penci_header_background_image',
		'priority'    => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_slogan_color', array(
		'label'    => 'Header Slogan Text Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_header_slogan_color',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_slogan_line_color', array(
		'label'    => 'Header Slogan Line Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_header_slogan_line_color',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_social_color', array(
		'label'    => 'Header Social Icons Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_header_social_color',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_social_color_hover', array(
		'label'    => 'Header Social Icons Color Hover',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_header_social_color_hover',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_bar_bg', array(
		'label'    => 'Main Bar Background',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_main_bar_bg',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_bar_border_color', array(
		'label'    => 'Main Bar Border Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_main_bar_border_color',
		'priority' => 36
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_bar_nav_color', array(
		'label'    => 'Main Bar Menu Text Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_main_bar_nav_color',
		'priority' => 40
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_bar_color_active', array(
		'label'    => 'Main Bar Menu Text Hover & Active Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_main_bar_color_active',
		'priority' => 45
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_bar_padding_color', array(
		'label'    => 'Main Bar Padding Menu Items Background Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_main_bar_padding_color',
		'priority' => 45
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'drop_bg_color', array(
		'label'    => 'Dropdown Background Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_drop_bg_color',
		'priority' => 50
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'drop_items_border', array(
		'label'    => 'Dropdown Menu Items Border Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_drop_items_border',
		'priority' => 60
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'drop_text_color', array(
		'label'    => 'Dropdown Text Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_drop_text_color',
		'priority' => 65
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'drop_text_hover_color', array(
		'label'    => 'Dropdown Text Hover Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_drop_text_hover_color',
		'priority' => 70
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'drop_border_style2', array(
		'label'    => 'Dropdown Border When Hover for Menu Style2',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_drop_border_style2',
		'priority' => 70
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mega_bg_color', array(
		'label'    => 'Category Mega Menu Background Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_mega_bg_color',
		'priority' => 75
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mega_child_cat_bg_color', array(
		'label'    => 'Category Mega Menu List Child Categories Background Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_mega_child_cat_bg_color',
		'priority' => 80
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mega_post_date_color', array(
		'label'    => 'Category Mega Menu Post Date Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_mega_post_date_color',
		'priority' => 85
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mega_post_category_color', array(
		'label'    => 'Mega Menu Post Category Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_mega_post_category_color',
		'priority' => 85
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mega_accent_color', array(
		'label'    => 'Category Mega Menu Accent Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_mega_accent_color',
		'priority' => 86
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mega_border_style2', array(
		'label'    => 'Border Color for Category Mega on Menu Style2',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_mega_border_style2',
		'priority' => 86
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_bar_search_magnify', array(
		'label'    => 'Main Bar Search Icon Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_main_bar_search_magnify',
		'priority' => 90
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_bar_close_color', array(
		'label'    => 'Main Bar Icon Close Search Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_main_bar_close_color',
		'priority' => 95
	) ) );
	// Page header trans
	$wp_customize->add_setting( 'penci_page_transparent_heading', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_page_transparent_heading', array(
		'label'    => esc_html__( 'Header Transparent', 'soledad' ),
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_page_transparent_heading',
		'type'     => 'heading',
		'priority' => 100
	) ) );
	$wp_customize->add_setting( 'penci_header_tran_slogan_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_header_tran_slogan_color', array(
		'label'    => 'Header Slogan Text Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_header_tran_slogan_color',
		'priority' => 100
	) ) );
	$wp_customize->add_setting( 'penci_header_tran_slogan_line_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_header_tran_slogan_line_color', array(
		'label'    => 'Header Slogan Line Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_header_tran_slogan_line_color',
		'priority' => 100
	) ) );
	$wp_customize->add_setting( 'penci_header_tran_social_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_header_tran_social_color', array(
		'label'    => 'Header Social Icons Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_header_tran_social_color',
		'priority' => 100
	) ) );
	$wp_customize->add_setting( 'penci_header_tran_social_color_hover', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_header_tran_social_color_hover', array(
		'label'    => 'Header Social Icons Color Hover',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_header_tran_social_color_hover',
		'priority' => 100
	) ) );

	$wp_customize->add_setting( 'penci_tran_main_bar_nav_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_tran_main_bar_nav_color', array(
		'label'    => 'Main Bar Menu Text Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_tran_main_bar_nav_color',
		'priority' => 100
	) ) );
	
	$wp_customize->add_setting( 'penci_tran_main_bar_color_active', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_tran_bar_color_active', array(
		'label'    => 'Main Bar Menu Text Hover & Active Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_tran_main_bar_color_active',
		'priority' => 100
	) ) );
	$wp_customize->add_setting( 'penci_tran_main_bar_padding_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_tran_main_bar_padding_color', array(
		'label'    => 'Main Bar Padding Menu Items Background Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_tran_main_bar_padding_color',
		'priority' => 100
	) ) );
	$wp_customize->add_setting( 'penci_tran_main_bar_search_magnify', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_tran_main_bar_search_magnify', array(
		'label'    => 'Main Bar Search Icon Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_tran_main_bar_search_magnify',
		'priority' => 100
	) ) );
	$wp_customize->add_setting( 'penci_tran_main_bar_close_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_tran_main_bar_close_color', array(
		'label'    => 'Main Bar Icon Close Search Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_tran_main_bar_close_color',
		'priority' => 100
	) ) );


	// Header sign-up form area
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'move_signup_below', array(
		'label'       => 'Move Header Sign-Up Form To Below Featured Slider',
		'section'     => 'pencidesign_new_section_signup_header',
		'settings'    => 'penci_move_signup_below',
		'description' => 'If you using Sign-Up form on the header, this option will help you move Sign-Up form to below the featured slider',
		'type'        => 'checkbox',
		'priority'    => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'move_signup_full_width', array(
		'label'    => 'Make Header Sign-Up Form Below Featured Slider Full Width',
		'section'  => 'pencidesign_new_section_signup_header',
		'settings' => 'penci_move_signup_full_width',
		'type'     => 'checkbox',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'signup_display_homepage', array(
		'label'    => 'Display Header Sign-Up Form only on Homepage',
		'section'  => 'pencidesign_new_section_signup_header',
		'settings' => 'penci_signup_display_homepage',
		'type'     => 'checkbox',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'header_signup_padding', array(
		'label'    => 'Header Sign-Up Form Padding Top & Bottom (Unit is pixel)',
		'section'  => 'pencidesign_new_section_signup_header',
		'settings' => 'penci_header_signup_padding',
		'type'     => 'number',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_signup_bg', array(
		'label'    => 'Header Sign-Up Form Area Background Color',
		'section'  => 'pencidesign_new_section_signup_header',
		'settings' => 'penci_header_signup_bg',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_signup_color', array(
		'label'    => 'Text Color',
		'section'  => 'pencidesign_new_section_signup_header',
		'settings' => 'penci_header_signup_color',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_signup_input_border', array(
		'label'    => 'Input Border Color',
		'section'  => 'pencidesign_new_section_signup_header',
		'settings' => 'penci_header_signup_input_border',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_signup_input_color', array(
		'label'    => 'Input Text Color',
		'section'  => 'pencidesign_new_section_signup_header',
		'settings' => 'penci_header_signup_input_color',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_signup_submit_bg', array(
		'label'    => 'Submit Button Background Color',
		'section'  => 'pencidesign_new_section_signup_header',
		'settings' => 'penci_header_signup_submit_bg',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_signup_submit_color', array(
		'label'    => 'Submit Button Text Color',
		'section'  => 'pencidesign_new_section_signup_header',
		'settings' => 'penci_header_signup_submit_color',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_signup_submit_bg_hover', array(
		'label'    => 'Submit Button Hover Background Color',
		'section'  => 'pencidesign_new_section_signup_header',
		'settings' => 'penci_header_signup_submit_bg_hover',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_signup_submit_color_hover', array(
		'label'    => 'Submit Button Hover Text Color',
		'section'  => 'pencidesign_new_section_signup_header',
		'settings' => 'penci_header_signup_submit_color_hover',
		'priority' => 35
	) ) );

	// Vertical Nav & Mobile Main Nav Color
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ver_nav_overlay_color', array(
		'label'    => 'Mobile Nav Close Overlay Color',
		'section'  => 'pencidesign_new_section_vertical_nav',
		'settings' => 'penci_ver_nav_overlay_color',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ver_nav_close_bg', array(
		'label'    => 'Mobile Nav Close Button Background',
		'section'  => 'pencidesign_new_section_vertical_nav',
		'settings' => 'penci_ver_nav_close_bg',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ver_nav_close_color', array(
		'label'    => 'Mobile Nav Close Button Icon Color',
		'section'  => 'pencidesign_new_section_vertical_nav',
		'settings' => 'penci_ver_nav_close_color',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ver_nav_bg', array(
		'label'    => 'Mobile Nav Background',
		'section'  => 'pencidesign_new_section_vertical_nav',
		'settings' => 'penci_ver_nav_bg',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ver_nav_accent_color', array(
		'label'    => 'Mobile Nav Accent Color',
		'section'  => 'pencidesign_new_section_vertical_nav',
		'settings' => 'penci_ver_nav_accent_color',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ver_nav_accent_hover_color', array(
		'label'    => 'Mobile Nav Accent Hover Color',
		'section'  => 'pencidesign_new_section_vertical_nav',
		'settings' => 'penci_ver_nav_accent_hover_color',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ver_nav_items_border', array(
		'label'    => 'Mobile Nav Menu Items Border Color',
		'section'  => 'pencidesign_new_section_vertical_nav',
		'settings' => 'penci_ver_nav_items_border',
		'priority' => 30
	) ) );


	// Featured colors
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_slider_overlay_bg', array(
		'label'       => 'Featured Slider Overlay Color',
		'section'     => 'pencidesign_new_section_color_featured_slider',
		'description' => 'This option just apply for some featured slider styles has overlay color',
		'settings'    => 'penci_featured_slider_overlay_bg',
		'priority'    => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_slider_overlay_bg_opacity', array(
		'label'    => 'Featured Slider Overlay Color Opacity',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_overlay_bg_opacity',
		'type'     => 'select',
		'priority' => 2,
		'choices'  => array(
			'0'    => '0',
			'0.05' => '0.05',
			'0.1'  => '0.1',
			'0.15' => '0.15',
			'0.2'  => '0.2',
			'0.25' => '0.25',
			'0.3'  => '0.3',
			'0.35' => '0.35',
			'0.4'  => '0.4',
			'0.45' => '0.45',
			'0.5'  => '0.5',
			'0.55' => '0.55',
			'0.6'  => '0.6',
			'0.65' => '0.65',
			'0.7'  => '0.7',
			'0.75' => '0.75',
			'0.8'  => '0.8',
			'0.85' => '0.85',
			'0.9'  => '0.9',
			'0.95' => '0.95',
			'1'    => '1',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_slider_overlay_bg_hover_opacity', array(
		'label'    => 'Featured Slider Hover Overlay Color Opacity',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_overlay_bg_hover_opacity',
		'type'     => 'select',
		'priority' => 5,
		'choices'  => array(
			'0'    => '0',
			'0.05' => '0.05',
			'0.1'  => '0.1',
			'0.15' => '0.15',
			'0.2'  => '0.2',
			'0.25' => '0.25',
			'0.3'  => '0.3',
			'0.35' => '0.35',
			'0.4'  => '0.4',
			'0.45' => '0.45',
			'0.5'  => '0.5',
			'0.55' => '0.55',
			'0.6'  => '0.6',
			'0.65' => '0.65',
			'0.7'  => '0.7',
			'0.75' => '0.75',
			'0.8'  => '0.8',
			'0.85' => '0.85',
			'0.9'  => '0.9',
			'0.95' => '0.95',
			'1'    => '1',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_slider_box_bg_color', array(
		'label'       => 'Center Box Background Color',
		'section'     => 'pencidesign_new_section_color_featured_slider',
		'settings'    => 'penci_featured_slider_box_bg_color',
		'description' => 'This option just apply for featured slider styles 1, 2, 3, 35, 36',
		'priority'    => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_slider_box_opacity', array(
		'label'    => 'Center Box Opacity',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_box_opacity',
		'type'     => 'select',
		'priority' => 11,
		'choices'  => array(
			'0'    => '0',
			'0.05' => '0.05',
			'0.1'  => '0.1',
			'0.15' => '0.15',
			'0.2'  => '0.2',
			'0.25' => '0.25',
			'0.3'  => '0.3',
			'0.35' => '0.35',
			'0.4'  => '0.4',
			'0.45' => '0.45',
			'0.5'  => '0.5',
			'0.55' => '0.55',
			'0.6'  => '0.6',
			'0.65' => '0.65',
			'0.7'  => '0.7',
			'0.75' => '0.75',
			'0.8'  => '0.8',
			'0.85' => '0.85',
			'0.9'  => '0.9',
			'0.95' => '0.95',
			'1'    => '1',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_slider_cat_color', array(
		'label'    => 'Post Category Color',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_cat_color',
		'priority' => 16
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_slider_cat_hover_color', array(
		'label'    => 'Post Category Hover Color',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_cat_hover_color',
		'priority' => 17
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_slider_title_color', array(
		'label'    => 'Title Post Color',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_title_color',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_slider_title_hover_color', array(
		'label'    => 'Title Post Hover Color',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_title_hover_color',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_slider_meta_color', array(
		'label'    => 'Post Meta Color',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_meta_color',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_slider_excerpt_color', array(
		'label'    => 'Post Excerpt Color',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_excerpt_color',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_slider_icon_color', array(
		'label'    => 'Post Format Icons Color',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_icon_color',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_slider_color_29', array(
		'label'    => 'Overlay Color for Slider Style 29 & 30',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_color_29',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_slider_overlay_opacity29', array(
		'label'    => 'Overlay Opacity for Slider Style 29 & 30',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_overlay_opacity29',
		'type'     => 'select',
		'priority' => 35,
		'choices'  => array(
			'0'    => '0',
			'0.05' => '0.05',
			'0.1'  => '0.1',
			'0.15' => '0.15',
			'0.2'  => '0.2',
			'0.25' => '0.25',
			'0.3'  => '0.3',
			'0.35' => '0.35',
			'0.4'  => '0.4',
			'0.45' => '0.45',
			'0.5'  => '0.5',
			'0.55' => '0.55',
			'0.6'  => '0.6',
			'0.65' => '0.65',
			'0.7'  => '0.7',
			'0.75' => '0.75',
			'0.8'  => '0.8',
			'0.85' => '0.85',
			'0.9'  => '0.9',
			'0.95' => '0.95',
			'1'    => '1',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_slider_lines_color', array(
		'label'    => 'Color of Lines on Slider Style 29 & 30',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_lines_color',
		'priority' => 40
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_slider_button_color', array(
		'label'    => 'Color Button Text & Button Border on Slider Style 29, 30, 35, 36',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_button_color',
		'priority' => 45
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_slider_button_hover_bg', array(
		'label'    => 'Background Color Hover of Buttor on Slider Style 29, 30, 35, 36, 38',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_button_hover_bg',
		'priority' => 50
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_slider_button_hover_color', array(
		'label'    => 'Text Color Hover of Buttor on Slider Style 29, 30, 35, 36, 38',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_button_hover_color',
		'priority' => 55
	) ) );

	// Standard layout colors
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'standard_categories_action_color', array(
		'label'    => 'Categories Accent Color',
		'section'  => 'pencidesign_new_section_standard_layout',
		'settings' => 'penci_standard_categories_action_color',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'standard_title_post_color', array(
		'label'    => 'Title Post Color',
		'section'  => 'pencidesign_new_section_standard_layout',
		'settings' => 'penci_standard_title_post_color',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'standard_title_post_hover_color', array(
		'label'    => 'Title Post Hover Color',
		'section'  => 'pencidesign_new_section_standard_layout',
		'settings' => 'penci_standard_title_post_hover_color',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'standard_share_icon_color', array(
		'label'    => 'Share Box Icon Color',
		'section'  => 'pencidesign_new_section_standard_layout',
		'settings' => 'penci_standard_share_icon_color',
		'priority' => 20
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'standard_share_icon_hover_color', array(
		'label'    => 'Share Box Icon Hover Color',
		'section'  => 'pencidesign_new_section_standard_layout',
		'settings' => 'penci_standard_share_icon_hover_color',
		'priority' => 25
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'standard_accent_color', array(
		'label'    => 'Accent Color',
		'section'  => 'pencidesign_new_section_standard_layout',
		'settings' => 'penci_standard_accent_color',
		'priority' => 30
	) ) );

	// Color for Other Post Layout
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'masonry_categories_accent_color', array(
		'label'    => 'Categories Accent Color',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_masonry_categories_accent_color',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'masonry_title_post_color', array(
		'label'    => 'Title Post Color',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_masonry_title_post_color',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'masonry_title_post_hover_color', array(
		'label'    => 'Title Post Hover Color',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_masonry_title_post_hover_color',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'masonry_box_icon', array(
		'label'    => 'Share Box Icon Color',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_masonry_box_icon',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'masonry_box_icon_hover', array(
		'label'    => 'Share Box Icon Color Hover',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_masonry_box_icon_hover',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'masonry_accent_color', array(
		'label'    => 'Accent Color',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_masonry_accent_color',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'photography_overlay_color', array(
		'label'    => 'Background Overlay Color For Photography Layout',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_photography_overlay_color',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'photography_overlay_opacity', array(
		'label'    => 'Background Overlay Opacity For Photography Layout',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_photography_overlay_opacity',
		'type'     => 'select',
		'priority' => 36,
		'choices'  => array(
			'0'    => '0',
			'0.05' => '0.05',
			'0.1'  => '0.1',
			'0.15' => '0.15',
			'0.2'  => '0.2',
			'0.25' => '0.25',
			'0.3'  => '0.3',
			'0.35' => '0.35',
			'0.4'  => '0.4',
			'0.45' => '0.45',
			'0.5'  => '0.5',
			'0.55' => '0.55',
			'0.6'  => '0.6',
			'0.65' => '0.65',
			'0.7'  => '0.7',
			'0.75' => '0.75',
			'0.8'  => '0.8',
			'0.85' => '0.85',
			'0.9'  => '0.9',
			'0.95' => '0.95',
			'1'    => '1',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'photography_overlay_hover_opacity', array(
		'label'    => 'Background Overlay Hover Opacity For Photography Layout',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_photography_overlay_hover_opacity',
		'type'     => 'select',
		'priority' => 37,
		'choices'  => array(
			'0'    => '0',
			'0.05' => '0.05',
			'0.1'  => '0.1',
			'0.15' => '0.15',
			'0.2'  => '0.2',
			'0.25' => '0.25',
			'0.3'  => '0.3',
			'0.35' => '0.35',
			'0.4'  => '0.4',
			'0.45' => '0.45',
			'0.5'  => '0.5',
			'0.55' => '0.55',
			'0.6'  => '0.6',
			'0.65' => '0.65',
			'0.7'  => '0.7',
			'0.75' => '0.75',
			'0.8'  => '0.8',
			'0.85' => '0.85',
			'0.9'  => '0.9',
			'0.95' => '0.95',
			'1'    => '1',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'photography_categories_color', array(
		'label'    => 'Categories Color For Photography Layout',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_photography_categories_color',
		'priority' => 40
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'photography_title_post_color', array(
		'label'    => 'Title Post Color For Photography Layout',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_photography_title_post_color',
		'priority' => 45
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'photography_title_post_hover_color', array(
		'label'    => 'Title Post Hover Color For Photography Layout',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_photography_title_post_hover_color',
		'priority' => 50
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'photography_meta_color', array(
		'label'    => 'Meta Color For Photography Layout',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_photography_meta_color',
		'priority' => 55
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'photography_accent_color', array(
		'label'    => 'Accent Color For Photography Layout',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_photography_accent_color',
		'priority' => 60
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'overlay_title_post_color', array(
		'label'    => 'Title Post Color For Overlay Layout',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_overlay_title_post_color',
		'priority' => 65
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'overlay_title_post_hover_color', array(
		'label'    => 'Title Post Hover Color For Overlay Layout',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_overlay_title_post_hover_color',
		'priority' => 70
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'overlay_cat_post_color', array(
		'label'    => 'Categories Post Color For Overlay Layout',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_overlay_cat_post_color',
		'priority' => 75
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'overlay_cat_hover_post_color', array(
		'label'    => 'Categories Post Hover Color For Overlay Layout',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_overlay_cat_hover_post_color',
		'priority' => 80
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'overlay_author_post_color', array(
		'label'    => 'Post Author Color For Overlay Layout',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_overlay_author_post_color',
		'priority' => 85
	) ) );

	// Footer Sign-up Form Colors
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_signup_showemail', array(
		'label'    => 'Display Email Field on Footer SignUp Form',
		'section'  => 'pencidesign_new_section_color_footer_signup',
		'settings' => 'penci_footer_signup_showemail',
		'type'     => 'checkbox',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_signup_area_bg', array(
		'label'    => 'Footer SignUp Form Area Background Color',
		'section'  => 'pencidesign_new_section_color_footer_signup',
		'settings' => 'penci_footer_signup_area_bg',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_signup_heading_color', array(
		'label'    => 'SignUp Form Heading Text Color',
		'section'  => 'pencidesign_new_section_color_footer_signup',
		'settings' => 'penci_footer_signup_heading_color',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_signup_des_color', array(
		'label'    => 'SignUp Form Description Text Color',
		'section'  => 'pencidesign_new_section_color_footer_signup',
		'settings' => 'penci_footer_signup_des_color',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_signup_email_border', array(
		'label'    => 'SignUp Form Email Input Border Color',
		'section'  => 'pencidesign_new_section_color_footer_signup',
		'settings' => 'penci_footer_signup_email_border',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'signup_email_border_hover', array(
		'label'    => 'SignUp Form Email Input Hover Border Color',
		'section'  => 'pencidesign_new_section_color_footer_signup',
		'settings' => 'footer_signup_email_border_hover',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_signup_email_text_color', array(
		'label'    => 'SignUp Form Email Text Color',
		'section'  => 'pencidesign_new_section_color_footer_signup',
		'settings' => 'penci_footer_signup_email_text_color',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_signup_button_bg', array(
		'label'    => 'SignUp Form Submit Background Color',
		'section'  => 'pencidesign_new_section_color_footer_signup',
		'settings' => 'penci_footer_signup_button_bg',
		'priority' => 40
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_signup_button_bg_hover', array(
		'label'    => 'SignUp Form Submit Hover Background Color',
		'section'  => 'pencidesign_new_section_color_footer_signup',
		'settings' => 'penci_footer_signup_button_bg_hover',
		'priority' => 45
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_signup_button_text', array(
		'label'    => 'SignUp Form Submit Text Color',
		'section'  => 'pencidesign_new_section_color_footer_signup',
		'settings' => 'penci_footer_signup_button_text',
		'priority' => 50
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_signup_button_text_hover', array(
		'label'    => 'SignUp Form Submit Hover Text Color',
		'section'  => 'pencidesign_new_section_color_footer_signup',
		'settings' => 'penci_footer_signup_button_text_hover',
		'priority' => 55
	) ) );


	// Footer colors
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_area_bg', array(
		'label'    => 'Footer Widget Area Background',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_widget_area_bg',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_widget_bg_image', array(
		'label'    => 'Footer Widget Area Background Image',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_widget_bg_image',
		'priority' => 6
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_area_text_color', array(
		'label'    => 'Footer Widget Area Text Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_widget_area_text_color',
		'priority' => 6
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_area_list_border', array(
		'label'    => 'Footer Widget Area List Border Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_widget_area_list_border',
		'priority' => 6
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_color', array(
		'label'    => 'Footer Widget Title Text Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_widget_color',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_title_border_color', array(
		'label'    => 'Footer Widget Title Border Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_widget_title_border_color',
		'priority' => 16
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'footer_widget_title_border_width', array(
		'label'    => 'Custom Border Width of Footer Widget Title',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_widget_title_border_width',
		'type'     => 'number',
		'priority' => 16
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_accent_color', array(
		'label'    => 'Footer Widget Accent Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_widget_accent_color',
		'priority' => 18
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_accent_hover_color', array(
		'label'    => 'Footer Widget Accent Hover Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_widget_accent_hover_color',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_instagram_title_color', array(
		'label'    => 'Footer Instagram Title Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_instagram_title_color',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_copyright_bg_color', array(
		'label'    => 'Footer Section Background Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_copyright_bg_color',
		'priority' => 21
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_copyright_bg_image', array(
		'label'    => 'Footer Section Background Image',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_copyright_bg_image',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_icon_color', array(
		'label'    => 'Footer Social Icons Border & Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_icon_color',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_icon_hover_icon_color', array(
		'label'    => 'Footer Social Icons Hover Icons Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_icon_hover_icon_color',
		'priority' => 36
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_icon_hover_color', array(
		'label'    => 'Footer Social Icons Hover Border & Background Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_icon_hover_color',
		'priority' => 40
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_social_text_color', array(
		'label'    => 'Footer Social Text Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_social_text_color',
		'priority' => 45
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_social_hover_text_color', array(
		'label'    => 'Footer Social Hover Text Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_social_hover_text_color',
		'priority' => 50
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_social_border_color', array(
		'label'    => 'Footer Section Social Border Bottom Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_social_border_color',
		'priority' => 55
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_instagram_title_color', array(
		'label'    => 'Footer Instagram Border Top Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'footer_instagram_title_color',
		'priority' => 55
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_menu_color', array(
		'label'    => 'Footer Menu Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_menu_color',
		'priority' => 56
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_menu_color_hover', array(
		'label'    => 'Footer Menu Color Hover',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_menu_color_hover',
		'priority' => 57
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_copyright_text_color', array(
		'label'    => 'Footer Copyright Text Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_copyright_text_color',
		'priority' => 60
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_copyright_accent_color', array(
		'label'    => 'Footer Copyright Accent Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_copyright_accent_color',
		'priority' => 65
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_go_top_color', array(
		'label'    => 'Go To Top Text & Icon Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_go_top_color',
		'priority' => 70
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_go_top_hover_color', array(
		'label'    => 'Go To Top Text & Icon Hover Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_go_top_hover_color',
		'priority' => 75
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_go_top_float_color', array(
		'label'    => 'Go To Top Button Floating Background Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_go_top_float_color',
		'priority' => 80
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_go_top_float_icon_color', array(
		'label'    => 'Go To Top Button Floating Icon Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_go_top_float_icon_color',
		'priority' => 85
	) ) );

	// Sidebar Color
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'sidebar_widget_margin', array(
		'label'    => 'Custom Space Between Widgets',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_widget_margin',
		'type'     => 'number',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_heading_lowcase', array(
		'label'    => 'Turn Off Uppercase Widget Heading',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_heading_lowcase',
		'type'     => 'checkbox',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'sidebar_heading_size', array(
		'label'    => 'Custom Widget Heading Text Size',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_heading_size',
		'type'     => 'number',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_heading_style', array(
		'label'    => 'Sidebar Widget Heading Style',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_heading_style',
		'type'     => 'radio',
		'priority' => 3,
		'choices'  => array(
			'style-1'  => 'Default Style',
			'style-2'  => 'Style 2',
			'style-3'  => 'Style 3',
			'style-4'  => 'Style 4',
			'style-5'  => 'Style 5',
			'style-6'  => 'Style 6 - Only Text',
			'style-7'  => 'Style 7',
			'style-9'  => 'Style 8',
			'style-8'  => 'Style 9 - Custom Background Image',
			'style-10' => 'Style 10',
			'style-11' => 'Style 11',
			'style-12' => 'Style 12',
			'style-13' => 'Style 13',
			'style-14' => 'Style 14',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sidebar_heading_image_8', array(
		'label'    => 'Custom Background Image for Style 9',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_heading_image_8',
		'priority' => 3
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_heading8_repeat', array(
		'label'    => 'Background Image Repeat for Style 9',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_heading8_repeat',
		'type'     => 'radio',
		'priority' => 4,
		'choices'  => array(
			'no-repeat' => 'No Repeat',
			'repeat'    => 'Repeat'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_heading_align', array(
		'label'    => 'Sidebar Widget Heading Align',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_heading_align',
		'type'     => 'radio',
		'priority' => 4,
		'choices'  => array(
			'pcalign-center' => 'Center',
			'pcalign-left'   => 'Left',
			'pcalign-right'  => 'Right'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_remove_border_outer', array(
		'label'    => 'Remove Border Outer on Widget Heading',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_remove_border_outer',
		'type'     => 'checkbox',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_remove_arrow_down', array(
		'label'    => 'Remove Arrow Down on Widget Heading',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_remove_arrow_down',
		'type'     => 'checkbox',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_heading_bg', array(
		'label'    => 'Sidebar Widget Heading Background Color',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_heading_bg',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_heading_outer_bg', array(
		'label'    => 'Sidebar Widget Heading Background Outer Color',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_heading_outer_bg',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_heading_border_color', array(
		'label'    => 'Sidebar Widget Heading Border Color',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_heading_border_color',
		'priority' => 6
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_heading_border_inner_color', array(
		'label'    => 'Sidebar Widget Heading Border Outer Color',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_heading_border_inner_color',
		'priority' => 7
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_heading_border_color5', array(
		'label'    => 'Custom Color for Border Bottom on Widget Heading Style 5, 10, 11, 12',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_heading_border_color5',
		'priority' => 7
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_heading_border_color7', array(
		'label'    => 'Custom Color for Small Border Bottom on Widget Heading Style 7 & Style 8',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_heading_border_color7',
		'priority' => 7
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_heading_bordertop_color10', array(
		'label'    => 'Custom Color for Border Top on Widget Heading Style 10',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'sidebar_heading_bordertop_color10',
		'priority' => 7
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_sidebar_heading_shapes_color', array(
		'label'    => 'Custom Color for Background Shapes Widget Heading Style 11, 12, 13',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_heading_shapes_color',
		'priority' => 7
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_heading_color', array(
		'label'    => 'Sidebar Widget Heading Text Color',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_heading_color',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_accent_color', array(
		'label'    => 'Accent Color',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_accent_color',
		'priority' => 40
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_accent_hover_color', array(
		'label'    => 'Accent Hover Color',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_accent_hover_color',
		'priority' => 45
	) ) );

	// Single Color
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'single_cat_color', array(
		'label'    => 'Single Categories Accent Color',
		'section'  => 'pencidesign_new_section_color_posts',
		'settings' => 'penci_single_cat_color',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'single_title_color', array(
		'label'    => 'Single Title Color',
		'section'  => 'pencidesign_new_section_color_posts',
		'settings' => 'penci_single_title_color',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_single_share_tcolor', array(
		'label'    => 'Share Text Color',
		'section'  => 'pencidesign_new_section_color_posts',
		'settings' => 'penci_single_share_tcolor',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'single_share_icon_color', array(
		'label'    => 'Share Box Icon Color',
		'section'  => 'pencidesign_new_section_color_posts',
		'settings' => 'penci_single_share_icon_color',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_single_share_icon_style3_bgcolor', array(
		'label'    => 'Icon Background Color for Share Box Style 3',
		'section'  => 'pencidesign_new_section_color_posts',
		'settings' => 'penci_single_share_icon_style3_bgcolor',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_single_share_icon_style3_hbgcolor', array(
		'label'    => 'Icon Background Hover Color for Share Box Style 3',
		'section'  => 'pencidesign_new_section_color_posts',
		'settings' => 'penci_single_share_icon_style3_hbgcolor',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'single_share_icon_hover_color', array(
		'label'    => 'Share Box Icon Hover Color',
		'section'  => 'pencidesign_new_section_color_posts',
		'settings' => 'penci_single_share_icon_hover_color',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'single_number_like_color', array(
		'label'    => 'Numbers Like Of Post Color',
		'section'  => 'pencidesign_new_section_color_posts',
		'settings' => 'penci_single_number_like_color',
		'priority' => 21
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'single_accent_color', array(
		'label'    => 'Accent Color',
		'section'  => 'pencidesign_new_section_color_posts',
		'settings' => 'penci_single_accent_color',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'single_color_text', array(
		'label'    => 'Custom Text Color Inside Post Content',
		'section'  => 'pencidesign_new_section_color_posts',
		'settings' => 'penci_single_color_text',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'single_color_links', array(
		'label'    => 'Color for Links',
		'section'  => 'pencidesign_new_section_color_posts',
		'settings' => 'penci_single_color_links',
		'priority' => 30
	) ) );
	
	for ( $pheading = 1; $pheading < 7; $pheading++ ) {
		$wp_customize->add_setting( 'penci_single_color_h' . $pheading, array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_hex_color'
		) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'penci_single_color_h' . $pheading, array(
			'label'    => 'Custom Color for H'. $pheading .' Tag Inside Post Content',
			'section'  => 'pencidesign_new_section_color_posts',
			'settings' => 'penci_single_color_h' . $pheading,
			'priority' => 30
		) ) );
	}

	foreach ( $more_opt_single as $opt_single_color_id => $opt_single_color_label ) {

		$desc = '';
		if ( 'penci_single_color_title_s568' == $opt_single_color_id ||
		     'penci_single_color_cat_s568' == $opt_single_color_id ||
		     'penci_single_color_meta_s568' == $opt_single_color_id ) {
			$desc = esc_html__( 'This option doesn\'t apply for move post title & meta below featured image', 'soledad' );
		}

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $opt_single_color_id, array(
			'label'       => $opt_single_color_label,
			'section'     => 'pencidesign_new_section_color_posts',
			'settings'    => $opt_single_color_id,
			'priority'    => 30,
			'description' => $desc
		) ) );
	}

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rltpop_heading_bg', array(
		'label'    => 'Custom Heading Background on Related Posts Popup',
		'section'  => 'pencidesign_new_section_color_posts',
		'settings' => 'penci_rltpop_heading_bg',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rltpop_heading_color', array(
		'label'    => 'Custom Heading Text Color on Related Posts Popup',
		'section'  => 'pencidesign_new_section_color_posts',
		'settings' => 'penci_rltpop_heading_color',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rltpop_close_color', array(
		'label'    => 'Close Button Color on Related Posts Popup',
		'section'  => 'pencidesign_new_section_color_posts',
		'settings' => 'penci_rltpop_close_color',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rltpop_bg_color', array(
		'label'    => 'Background Color for Related Posts Popup',
		'section'  => 'pencidesign_new_section_color_posts',
		'settings' => 'penci_rltpop_bg_color',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rltpop_title_color', array(
		'label'    => 'Custom Color for Post Titles on Related Posts Popup',
		'section'  => 'pencidesign_new_section_color_posts',
		'settings' => 'penci_rltpop_title_color',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rltpop_title_hover', array(
		'label'    => 'Custom Color for Post Titles Hover on Related Posts Popup',
		'section'  => 'pencidesign_new_section_color_posts',
		'settings' => 'penci_rltpop_title_hover',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rltpop_date_color', array(
		'label'    => 'Custom Color for Date on Related Posts Popup',
		'section'  => 'pencidesign_new_section_color_posts',
		'settings' => 'penci_rltpop_date_color',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rltpop_border_color', array(
		'label'    => 'Custom Color for Borders on Related Posts Popup',
		'section'  => 'pencidesign_new_section_color_posts',
		'settings' => 'penci_rltpop_border_color',
		'priority' => 30
	) ) );

	// Text transition
	$wp_customize->add_setting( 'penci_trans_type_and_hit', array(
		'default'           => 'Type and hit enter...',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_type_and_hit', array(
		'label'    => 'Text: "Type and hit enter..."',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_type_and_hit',
		'type'     => 'text',
		'priority' => 1
	) ) );
	$wp_customize->add_setting( 'penci_trans_countviews', array(
		'default'           => 'views',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_trans_countviews', array(
		'label'    => 'Text: "views"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_countviews',
		'type'     => 'text',
		'priority' => 1
	) ) );
	$wp_customize->add_setting( 'penci_trans_comment', array(
		'default'           => 'comment',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_comment', array(
		'label'    => 'Text: "comment"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_comment',
		'type'     => 'text',
		'priority' => 1
	) ) );
	$wp_customize->add_setting( 'penci_trans_comments', array(
		'default'           => 'comments',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_comments', array(
		'label'       => 'Text: "comments"',
		'section'     => 'pencidesign_new_section_transition_lang',
		'description' => 'for plural of comments',
		'settings'    => 'penci_trans_comments',
		'type'        => 'text',
		'priority'    => 5
	) ) );
	$wp_customize->add_setting( 'penci_trans_reply_comment', array(
		'default'           => 'Reply',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_reply_comment', array(
		'label'    => 'Text: "Reply"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_reply_comment',
		'type'     => 'text',
		'priority' => 5
	) ) );
	$wp_customize->add_setting( 'penci_trans_edit_comment', array(
		'default'           => 'Edit',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_edit_comment', array(
		'label'    => 'Text: "Edit"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_edit_comment',
		'type'     => 'text',
		'priority' => 5
	) ) );
	$wp_customize->add_setting( 'penci_trans_wait_approval_comment', array(
		'default'           => 'Your comment is awaiting approval',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_wait_approval_comment', array(
		'label'    => 'Text: "Your comment is awaiting approval"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_wait_approval_comment',
		'type'     => 'text',
		'priority' => 5
	) ) );
	$wp_customize->add_setting( 'penci_trans_save_fields', array(
		'default'           => 'Save my name, email, and website in this browser for the next time I comment.',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_save_fields', array(
		'label'    => 'Text: "Save my name, email, and website in this browser for the next time I comment."',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_save_fields',
		'type'     => 'textarea',
		'priority' => 5
	) ) );

	$wp_customize->add_setting( 'penci_trans_by', array(
		'default'           => 'by',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_by', array(
		'label'    => 'Text: "by"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_by',
		'type'     => 'text',
		'priority' => 10
	) ) );

	$wp_customize->add_setting( 'penci_trans_text_views', array(
		'default'           => 'views',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_trans_text_views', array(
		'label'    => 'Text: "views"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_text_views',
		'type'     => 'text',
		'priority' => 10
	) ) );

	$wp_customize->add_setting( 'penci_trans_home', array(
		'default'           => 'Home',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_home', array(
		'label'    => 'Text: "Home"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_home',
		'type'     => 'text',
		'priority' => 11
	) ) );
	$wp_customize->add_setting( 'penci_trans_newer_posts', array(
		'default'           => 'Newer Posts',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_newer_posts', array(
		'label'    => 'Text: "Newer Posts"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_newer_posts',
		'type'     => 'text',
		'priority' => 15
	) ) );
	$wp_customize->add_setting( 'penci_trans_older_posts', array(
		'default'           => 'Older Posts',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_older_posts', array(
		'label'    => 'Text: "Older Posts"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_older_posts',
		'type'     => 'text',
		'priority' => 20
	) ) );
	$wp_customize->add_setting( 'penci_trans_load_more_posts', array(
		'default'           => 'Load More Posts',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_load_more_posts', array(
		'label'    => 'Text: "Load More Posts"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_load_more_posts',
		'type'     => 'text',
		'priority' => 25
	) ) );
	$wp_customize->add_setting( 'penci_trans_no_more_posts', array(
		'default'           => 'Sorry, No more posts',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_no_more_posts', array(
		'label'    => 'Text: "Sorry, No more posts"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_no_more_posts',
		'type'     => 'text',
		'priority' => 30
	) ) );
	$wp_customize->add_setting( 'penci_trans_all', array(
		'default'           => 'All',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_all', array(
		'label'    => 'Text: "All"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_all',
		'type'     => 'text',
		'priority' => 35
	) ) );
	$wp_customize->add_setting( 'penci_trans_back_to_top', array(
		'default'           => 'Back To Top',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_back_to_top', array(
		'label'    => 'Text: "Back To Top"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_back_to_top',
		'type'     => 'text',
		'priority' => 40
	) ) );
	$wp_customize->add_setting( 'penci_trans_written_by', array(
		'default'           => 'written by',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_written_by', array(
		'label'    => 'Text: "written by"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_written_by',
		'type'     => 'text',
		'priority' => 45
	) ) );
	$wp_customize->add_setting( 'penci_trans_previous_post', array(
		'default'           => 'previous post',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_previous_post', array(
		'label'    => 'Text: "previous post"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_previous_post',
		'type'     => 'text',
		'priority' => 50
	) ) );
	$wp_customize->add_setting( 'penci_trans_next_post', array(
		'default'           => 'next post',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_next_post', array(
		'label'    => 'Text: "next post"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_next_post',
		'type'     => 'text',
		'priority' => 55
	) ) );
	$wp_customize->add_setting( 'penci_trans_name', array(
		'default'           => 'Name*',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_name', array(
		'label'    => 'Text: "Name*"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_name',
		'type'     => 'text',
		'priority' => 60
	) ) );
	$wp_customize->add_setting( 'penci_trans_email', array(
		'default'           => 'Email*',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_email', array(
		'label'    => 'Text: "Email*"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_email',
		'type'     => 'text',
		'priority' => 65
	) ) );
	$wp_customize->add_setting( 'penci_trans_website', array(
		'default'           => 'Website',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_website', array(
		'label'    => 'Text: "Website"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_website',
		'type'     => 'text',
		'priority' => 70
	) ) );
	$wp_customize->add_setting( 'penci_trans_your_comment', array(
		'default'           => 'Your Comment',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_your_comment', array(
		'label'    => 'Text: "Your Comment"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_your_comment',
		'type'     => 'text',
		'priority' => 75
	) ) );
	$wp_customize->add_setting( 'penci_trans_leave_a_comment', array(
		'default'           => 'Leave a Comment',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_leave_a_comment', array(
		'label'    => 'Text: "Leave a Comment"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_leave_a_comment',
		'type'     => 'text',
		'priority' => 80
	) ) );
	$wp_customize->add_setting( 'penci_trans_cancel_reply', array(
		'default'           => 'Cancel Reply',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_cancel_reply', array(
		'label'    => 'Text: "Cancel Reply"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_cancel_reply',
		'type'     => 'text',
		'priority' => 85
	) ) );
	$wp_customize->add_setting( 'penci_trans_submit', array(
		'default'           => 'Submit',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_submit', array(
		'label'    => 'Text: "Submit"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_submit',
		'type'     => 'text',
		'priority' => 90
	) ) );
	$wp_customize->add_setting( 'penci_trans_category', array(
		'default'           => 'Category:',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_category', array(
		'label'    => 'Text: "Category:"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_category',
		'type'     => 'text',
		'priority' => 95
	) ) );
	$wp_customize->add_setting( 'penci_trans_continue_reading', array(
		'default'           => 'Continue Reading',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_continue_reading', array(
		'label'    => 'Text: "Continue Reading"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_continue_reading',
		'type'     => 'text',
		'priority' => 100
	) ) );
	$wp_customize->add_setting( 'penci_trans_read_more', array(
		'default'           => 'Read more',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_read_more', array(
		'label'    => 'Text: "Read more"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_read_more',
		'type'     => 'text',
		'priority' => 105
	) ) );
	$wp_customize->add_setting( 'penci_trans_view_all', array(
		'default'           => 'View All',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_view_all', array(
		'label'    => 'Text: "View All"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_view_all',
		'type'     => 'text',
		'priority' => 105
	) ) );
	$wp_customize->add_setting( 'penci_trans_tag', array(
		'default'           => 'Tag:',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_tag', array(
		'label'    => 'Text: "Tag:"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_tag',
		'type'     => 'text',
		'priority' => 110
	) ) );
	$wp_customize->add_setting( 'penci_trans_tags', array(
		'default'           => 'Tags',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_tags', array(
		'label'    => 'Text: "Tags"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_tags',
		'type'     => 'text',
		'priority' => 115
	) ) );
	$wp_customize->add_setting( 'penci_trans_posts_tagged', array(
		'default'           => 'Posts tagged with',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_posts_tagged', array(
		'label'    => 'Text: "Posts tagged with"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_posts_tagged',
		'type'     => 'text',
		'priority' => 120
	) ) );
	$wp_customize->add_setting( 'penci_trans_author', array(
		'default'           => 'Author',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_author', array(
		'label'    => 'Text: "Author"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_author',
		'type'     => 'text',
		'priority' => 125
	) ) );
	$wp_customize->add_setting( 'penci_trans_daily_archives', array(
		'default'           => 'Daily Archives',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_daily_archives', array(
		'label'    => 'Text: "Daily Archives"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_daily_archives',
		'type'     => 'text',
		'priority' => 130
	) ) );
	$wp_customize->add_setting( 'penci_trans_monthly_archives', array(
		'default'           => 'Monthly Archives',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_monthly_archives', array(
		'label'    => 'Text: "Monthly Archives"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_monthly_archives',
		'type'     => 'text',
		'priority' => 135
	) ) );
	$wp_customize->add_setting( 'penci_trans_yearly_archives', array(
		'default'           => 'Yearly Archives',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_yearly_archives', array(
		'label'    => 'Text: "Yearly Archives"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_yearly_archives',
		'type'     => 'text',
		'priority' => 140
	) ) );
	$wp_customize->add_setting( 'penci_trans_archives', array(
		'default'           => 'Archives',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_archives', array(
		'label'    => 'Text: "Archives"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_archives',
		'type'     => 'text',
		'priority' => 145
	) ) );
	$wp_customize->add_setting( 'penci_trans_search', array(
		'default'           => 'Search',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_search', array(
		'label'    => 'Text: "Search"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_search',
		'type'     => 'text',
		'priority' => 150
	) ) );
	$wp_customize->add_setting( 'penci_trans_search_results_for', array(
		'default'           => 'Search results for',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_search_results_for', array(
		'label'    => 'Text: "Search results for"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_search_results_for',
		'type'     => 'text',
		'priority' => 155
	) ) );
	$wp_customize->add_setting( 'penci_trans_share', array(
		'default'           => 'Share',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_share', array(
		'label'    => 'Text: "Share"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_share',
		'type'     => 'text',
		'priority' => 160
	) ) );

	$wp_customize->add_setting( 'penci_trans_comments_closed', array(
		'default'           => 'Comments are closed.',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_comments_closed', array(
		'label'    => 'Text: "Comments are closed."',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_comments_closed',
		'type'     => 'text',
		'priority' => 165
	) ) );

	$wp_customize->add_setting( 'penci_trans_search_not_found', array(
		'default'           => 'Sorry, but nothing matched your search terms. Please try again with some different keywords.',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_search_not_found', array(
		'label'    => 'Text: "Sorry, but nothing matched your search terms. Please try again with some different keywords."',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_search_not_found',
		'type'     => 'text',
		'priority' => 170
	) ) );

	$wp_customize->add_setting( 'penci_trans_back_to_homepage', array(
		'default'           => 'Back to Home Page',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'trans_back_to_homepage', array(
		'label'    => 'Text: "Back to Home Page"',
		'section'  => 'pencidesign_new_section_transition_lang',
		'settings' => 'penci_trans_back_to_homepage',
		'type'     => 'text',
		'priority' => 175
	) ) );

	$login_register = array(
		'penci_trans_hello_text'          => esc_html__( 'Hello', 'soledad' ),
		'penci_trans_profile_text'        => esc_html__( 'Profile', 'soledad' ),
		'penci_trans_logout_text'         => esc_html__( 'Logout', 'soledad' ),
		'penci_plogin_wrong'              => esc_html__( 'Wrong username or password', 'soledad' ),
		'penci_plogin_success'            => esc_html__( 'Login successful, redirecting...', 'soledad' ),
		'penci_plogin_email_place'        => esc_html__( 'Email Address', 'soledad' ),
		'penci_plogin_pass_place'         => esc_html__( 'Password', 'soledad' ),
		'penci_plogin_remember_text'      => esc_html__( 'Keep me signed in until I sign out', 'soledad' ),
		'penci_plogin_login_text'         => esc_html__( 'Login to your account', 'soledad' ),
		'penci_plogin_lostpass_text'      => esc_html__( 'Forgot your password?', 'soledad' ),
		'penci_plogin_hasaccount_text'    => esc_html__( 'Do not have an account ?', 'soledad' ),
		'penci_plogin_registration_text'  => esc_html__( 'Register here', 'soledad' ),
		'penci_trans_usernameemail_text'  => esc_html__( 'Username or email', 'soledad' ),
		'penci_trans_pass_text'           => esc_html__( 'Password', 'soledad' ),
		'penci_plogin_label_remember'     => esc_html__( 'Keep me signed in until I sign out', 'soledad' ),
		'penci_plogin_label_log_in'       => esc_html__( 'Login to your account', 'soledad' ),
		'penci_plogin_label_lostpassword' => esc_html__( 'Forgot your password?', 'soledad' ),
		'penci_plogin_text_has_account'   => esc_html__( 'Do not have an account ?', 'soledad' ),
		'penci_plogin_label_registration' => esc_html__( 'Register here', 'soledad' ),

		'penci_pregister_first_name'         => esc_html__( 'First Name', 'soledad' ),
		'penci_pregister_last_name'          => esc_html__( 'Last Name', 'soledad' ),
		'penci_pregister_user_name'          => esc_html__( 'Username', 'soledad' ),
		'penci_pregister_user_email'         => esc_html__( 'Email address', 'soledad' ),
		'penci_pregister_user_pass'          => esc_html__( 'Password', 'soledad' ),
		'penci_pregister_pass_confirm'       => esc_html__( 'Confirm Password', 'soledad' ),
		'penci_pregister_button_submit'      => esc_html__( 'Sign up new account', 'soledad' ),
		'penci_pregister_has_account'        => esc_html__( 'Have an account?', 'soledad' ),
		'penci_pregister_label_registration' => esc_html__( 'Login here', 'soledad' ),

		'penci_plogin_mess_invalid_email'    => esc_html__( 'Invalid email.', 'soledad' ),
		'penci_plogin_mess_error_email_pass' => esc_html__( 'Password does not match the confirm password', 'soledad' ),
		'penci_plogin_mess_username_reg'     => esc_html__( 'This username is already registered.', 'soledad' ),
		'penci_plogin_mess_email_reg'        => esc_html__( 'This email address is already registered.', 'soledad' ),
		'penci_plogin_mess_wrong_email_pass' => esc_html__( 'Wrong username or password.', 'soledad' ),
		'penci_plogin_mess_reg_succ'         => esc_html__( 'Registered successful, redirecting...', 'soledad' ),
	);

	foreach ( $login_register as $login_register_id => $login_register_label ) {
		$wp_customize->add_setting( $login_register_id, array(
			'default'           => $login_register_label,
			'sanitize_callback' => 'sanitize_text_field'
		) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, $login_register_id, array(
			'label'    => 'Text: "' . $login_register_label . '"',
			'section'  => 'pencidesign_new_section_transition_lang',
			'settings' => $login_register_id,
			'type'     => 'text',
			'priority' => 175
		) ) );
	}

	// Custom CSS
	$wp_customize->add_control( new WP_Customize_Code_Editor_Control( $wp_customize, 'custom_css', array(
		'label'       => 'Custom CSS',
		'section'     => 'pencidesign_new_section_custom_css',
		'settings'    => 'penci_custom_css',
		'code_type'   => 'text/css',
		'input_attrs' => array(
			'aria-describedby' => 'editor-keyboard-trap-help-1 editor-keyboard-trap-help-2 editor-keyboard-trap-help-3 editor-keyboard-trap-help-4',
		),
		'priority'    => 5
	) ) );

	// Menu Hamburger
	$section_menu_hbg = 'penci_menu_hbg';
	$wp_customize->add_section( $section_menu_hbg, array(
		'title'       => esc_html__( 'Vertical Nav & Hamburger Menu Options', 'soledad' ),
		'priority'    => 6,
		'description' => 'Most of the options here apply for both Vertical Navigation & Hamburger Menu. When you enable Vertical Navigation - of course, the Hamburger Menu will does not display.',
	) );

	// Enable Menu hbg
	$wp_customize->add_setting( 'penci_menu_hbg_show', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_checkbox_field',
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'penci_menu_hbg_show',
		array(
			'label'    => esc_html__( 'Enable Menu Hamburger', 'soledad' ),
			'section'  => $section_menu_hbg,
			'type'     => 'checkbox',
			'settings' => 'penci_menu_hbg_show',
		)
	) );

	$wp_customize->add_setting( 'penci_vertical_nav_show', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_checkbox_field',
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'penci_vertical_nav_show',
		array(
			'label'    => esc_html__( 'Enable Vertical Navigation', 'soledad' ),
			'section'  => $section_menu_hbg,
			'type'     => 'checkbox',
			'settings' => 'penci_vertical_nav_show',
		)
	) );

	$wp_customize->add_setting( 'penci_vertical_nav_remove_header', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_checkbox_field',
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'penci_vertical_nav_remove_header',
		array(
			'label'    => esc_html__( 'Completely Delete The Header When Enable Vertical Navigation', 'soledad' ),
			'section'  => $section_menu_hbg,
			'type'     => 'checkbox',
			'settings' => 'penci_vertical_nav_remove_header',
		)
	) );

	$wp_customize->add_setting( 'penci_menu_hbg_mobile', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_checkbox_field',
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'penci_menu_hbg_mobile',
		array(
			'label'    => esc_html__( 'Hide Menu Hamburger Icon Display on Horizontal Navigation on Mobile', 'soledad' ),
			'section'  => $section_menu_hbg,
			'type'     => 'checkbox',
			'settings' => 'penci_menu_hbg_mobile',
		)
	) );

	$wp_customize->add_setting( 'penci_menu_hbg_bgimg', array(
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'penci_menu_hbg_bgimg', array(
		'label'    => esc_html__( 'Set A Background Image', 'soledad' ),
		'section'  => $section_menu_hbg,
		'settings' => 'penci_menu_hbg_bgimg',
	) ) );

	$wp_customize->add_setting( 'penci_hbg_width', array(
		'default'           => '330',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'penci_hbg_width', array(
		'label'       => 'Custom Width for Vertical Nav & Menu Hamburger ( Min is 270 - Max is 500 )',
		'description' => 'Min width is 270px, max width is 500',
		'section'     => $section_menu_hbg,
		'settings'    => 'penci_hbg_width',
		'type'        => 'number'
	) ) );
	$wp_customize->add_setting( 'penci_hbg_size_icon', array(
		'default'           => '18',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'penci_hbg_size_icon', array(
		'label'       => 'Custom Size for Menu Hamburger Icon Display on Horizontal Navigation ( Min is 14 - Max is 30 )',
		'description' => 'Min width is 14px - max width is 30px',
		'section'     => $section_menu_hbg,
		'settings'    => 'penci_hbg_size_icon',
		'type'        => 'number'
	) ) );
	$wp_customize->add_setting( 'penci_menu_hbg_pos', array(
		'default'           => 'left',
		'sanitize_callback' => 'penci_sanitize_choices_field',
	) );
	$wp_customize->add_control( 'penci_menu_hbg_pos', array(
		'label'    => esc_html__( 'Position in Page', 'soledad' ),
		'section'  => $section_menu_hbg,
		'settings' => 'penci_menu_hbg_pos',
		'type'     => 'select',
		'choices'  => array(
			'left'  => esc_html__( 'Left', 'soledad' ),
			'right' => esc_html__( 'Right', 'soledad' )
		)
	) );

	$wp_customize->add_setting( 'penci_menu_hbg_hide_logo', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_checkbox_field',
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'penci_menu_hbg_hide_logo',
		array(
			'label'    => esc_html__( 'Hide Logo', 'soledad' ),
			'section'  => $section_menu_hbg,
			'type'     => 'checkbox',
			'settings' => 'penci_menu_hbg_hide_logo',
		)
	) );

	$wp_customize->add_setting( 'penci_menu_hbg_logo', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'penci_menu_hbg_logo', array(
		'label'    => esc_html__( 'Custom Logo Image', 'soledad' ),
		'section'  => $section_menu_hbg,
		'settings' => 'penci_menu_hbg_logo',
	) ) );

	$wp_customize->add_setting( 'penci_custom_logo_hamburger', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'custom_logo_hamburger', array(
		'label'    => 'Custom Link for Logo Image',
		'section'  => $section_menu_hbg,
		'settings' => 'penci_custom_logo_hamburger',
		'type'     => 'text',
	) ) );

	$wp_customize->add_setting( 'penci_hbg_logo_max_width', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'hbg_logo_max_width', array(
		'label'    => 'Set A Max Width for Logo Image',
		'section'  => $section_menu_hbg,
		'settings' => 'penci_hbg_logo_max_width',
		'type'     => 'number',
	) ) );

	$wp_customize->add_setting( 'penci_menu_hbg_sitetitle', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_textarea_field',
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_menu_hbg_sitetitle', array(
		'label'    => esc_html__( 'Add Site Title', 'soledad' ),
		'section'  => $section_menu_hbg,
		'settings' => 'penci_menu_hbg_sitetitle',
	) ) );

	$wp_customize->add_setting( 'penci_hbg_sitetitle_size', array(
		'default'           => '18',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'penci_hbg_sitetitle_size', array(
		'label'    => 'Custom Font Size for Site Title',
		'section'  => $section_menu_hbg,
		'settings' => 'penci_hbg_sitetitle_size',
		'type'     => 'number'
	) ) );

	$wp_customize->add_setting( 'penci_menu_hbg_desc', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_textarea_field',
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_menu_hbg_desc', array(
		'label'    => esc_html__( 'Add Site Description', 'soledad' ),
		'section'  => $section_menu_hbg,
		'settings' => 'penci_menu_hbg_desc',
		'type'     => 'textarea',
	) ) );

	$wp_customize->add_setting( 'penci_hbg_sitedes_size', array(
		'default'           => '14',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'penci_hbg_sitedes_size', array(
		'label'    => 'Custom Font Size for Site Description',
		'section'  => $section_menu_hbg,
		'settings' => 'penci_hbg_sitedes_size',
		'type'     => 'number'
	) ) );

	$wp_customize->add_setting( 'penci_menu_hbg_show_search', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_checkbox_field',
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'penci_menu_hbg_show_search',
		array(
			'label'    => esc_html__( 'Add Search Form Below Site Description', 'soledad' ),
			'section'  => $section_menu_hbg,
			'type'     => 'checkbox',
			'settings' => 'penci_menu_hbg_show_search',
		)
	) );

	$wp_customize->add_setting( 'penci_menu_hbg_primary', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_control( new Penci_Customize_List_Menus_Control( $wp_customize, 'menu_hbg_primary', array(
		'label'    => 'Select Custom Menu to Display on Primary Menu',
		'section'  => $section_menu_hbg,
		'settings' => 'penci_menu_hbg_primary',
		'type'     => 'list_menus'
	) ) );

	$wp_customize->add_setting( 'penci_menu_hbg_hide_menu', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_checkbox_field',
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'penci_menu_hbg_hide_menu',
		array(
			'label'    => esc_html__( 'Hide Primary Menu', 'soledad' ),
			'section'  => $section_menu_hbg,
			'type'     => 'checkbox',
			'settings' => 'penci_menu_hbg_hide_menu',
		)
	) );

	$wp_customize->add_setting( 'penci_menu_hbg_lowcase', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_checkbox_field',
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'penci_menu_hbg_lowcase',
		array(
			'label'    => esc_html__( 'Disable Uppercase on Primary Menu Items', 'soledad' ),
			'section'  => $section_menu_hbg,
			'type'     => 'checkbox',
			'settings' => 'penci_menu_hbg_lowcase',
		)
	) );

	$wp_customize->add_setting( 'penci_font_size_menu_hbg', array(
		'default'           => '13',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'font_size_menu_hbg', array(
		'label'    => 'Custom Font Size for Primary Menu Items',
		'section'  => $section_menu_hbg,
		'settings' => 'penci_font_size_menu_hbg',
		'type'     => 'number'
	) ) );

	$wp_customize->add_setting( 'penci_font_size_submenu_hbg', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'font_size_submenu_hbg', array(
		'label'    => 'Custom Font Size for Sub Menu on Primary Menu Items',
		'section'  => $section_menu_hbg,
		'settings' => 'penci_font_size_submenu_hbg',
		'type'     => 'number'
	) ) );

	$wp_customize->add_setting( 'penci_menu_hbg_hideftext', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_checkbox_field',
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'penci_menu_hbg_hideftext',
		array(
			'label'    => esc_html__( 'Hide Footer Text', 'soledad' ),
			'section'  => $section_menu_hbg,
			'type'     => 'checkbox',
			'settings' => 'penci_menu_hbg_hideftext',
		)
	) );
	$wp_customize->add_setting( 'penci_menu_hbg_hidesocial', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_checkbox_field',
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'penci_menu_hbg_hidesocial',
		array(
			'label'    => esc_html__( 'Hide Social Icons', 'soledad' ),
			'section'  => $section_menu_hbg,
			'type'     => 'checkbox',
			'settings' => 'penci_menu_hbg_hidesocial',
		)
	) );
	$wp_customize->add_setting( 'penci_menuhbg_social_style', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_choices_field',
	) );
	$wp_customize->add_control( 'penci_menuhbg_social_style', array(
		'label'       => esc_html__( 'Select Style for Social Icons', 'soledad' ),
		'section'     => $section_menu_hbg,
		'settings'    => 'penci_menuhbg_social_style',
		'description' => 'The options for custom colors, background color, border for social icons will does not apply for Brand Color styles',
		'type'        => 'select',
		'choices'     => array(
			''                                                => esc_html__( 'Default', 'soledad' ),
			'style-6 penci-social-textcolored'                => esc_html__( 'Icons with Brand Color', 'soledad' ),
			'style-2'                                         => esc_html__( 'Round with Border', 'soledad' ),
			'style-2 hgb-social-style-3'                      => esc_html__( 'Square with Border', 'soledad' ),
			'style-4 penci-social-colored'                    => esc_html__( 'Round with Brand Color', 'soledad' ),
			'style-4 hgb-social-style-5 penci-social-colored' => esc_html__( 'Square with Brand Color', 'soledad' ),
		)
	) );
	$wp_customize->add_setting( 'penci_menuhbg_icon_size', array(
		'default'           => '14',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'penci_menuhbg_icon_size', array(
		'label'    => 'Custom Font Size for Social Media Icons',
		'section'  => $section_menu_hbg,
		'settings' => 'penci_menuhbg_icon_size',
		'type'     => 'number'
	) ) );

	$wp_customize->add_setting( 'penci_menu_hbg_footer_text', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_textarea_field',
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_menu_hbg_footer_text', array(
		'label'    => esc_html__( 'Custom Footer Text', 'soledad' ),
		'section'  => $section_menu_hbg,
		'settings' => 'penci_menu_hbg_footer_text',
		'type'     => 'textarea',
	) ) );

	$wp_customize->add_setting( 'penci_menu_hbg_widgets', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_menu_hbg_widgets', array(
		'label'    => esc_html__( 'Widgets', 'soledad' ),
		'section'  => $section_menu_hbg,
		'settings' => 'penci_menu_hbg_widgets',
		'type'     => 'heading',
	) ) );

	$wp_customize->add_setting( 'penci_mhbg_widget_margin', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'penci_mhbgwidget_margin', array(
		'label'    => 'Custom Space Between Widgets',
		'section'  => $section_menu_hbg,
		'settings' => 'penci_mhbg_widget_margin',
		'type'     => 'number',
	) ) );

	$wp_customize->add_setting( 'penci_mhbgwidget_heading_lowcase', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_mhbgwidget_heading_lowcase', array(
		'label'    => 'Turn Off Uppercase Widget Heading',
		'section'  => $section_menu_hbg,
		'settings' => 'penci_mhbgwidget_heading_lowcase',
		'type'     => 'checkbox',
	) ) );

	$wp_customize->add_setting( 'penci_mhbgwidget_heading_size', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'penci_mhbgwidget_heading_size', array(
		'label'    => 'Custom Widget Heading Text Size',
		'section'  => $section_menu_hbg,
		'settings' => 'penci_mhbgwidget_heading_size',
		'type'     => 'number',
	) ) );

	$wp_customize->add_setting( 'penci_mhbgwidget_heading_style', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_mhbgwidget_heading_style', array(
		'label'    => 'Sidebar Widget Heading Style',
		'section'  => $section_menu_hbg,
		'settings' => 'penci_mhbgwidget_heading_style',
		'type'     => 'radio',
		'choices'  => array(
			''         => 'Default',
			'style-1'  => 'Style 1',
			'style-2'  => 'Style 2',
			'style-3'  => 'Style 3',
			'style-4'  => 'Style 4',
			'style-5'  => 'Style 5',
			'style-6'  => 'Style 6 - Only Text',
			'style-7'  => 'Style 7',
			'style-9'  => 'Style 8',
			'style-8'  => 'Style 9 - Custom Background Image',
			'style-10' => 'Style 10',
			'style-11' => 'Style 11',
			'style-12' => 'Style 12',
			'style-13' => 'Style 13',
			'style-14' => 'Style 14',
		)
	) ) );

	$wp_customize->add_setting( 'penci_mhbgwidget_heading_image_9', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'penci_mhbgwidget_heading_image_9', array(
		'label'    => 'Custom Background Image for Style 9',
		'section'  => $section_menu_hbg,
		'settings' => 'penci_mhbgwidget_heading_image_9',
	) ) );

	$wp_customize->add_setting( 'penci_mhbgwidget_heading9_repeat', array(
		'default'           => 'no-repeat',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_mhbgwidget_heading9_repeat', array(
		'label'    => 'Background Image Repeat for Style 9',
		'section'  => $section_menu_hbg,
		'settings' => 'penci_mhbgwidget_heading9_repeat',
		'type'     => 'radio',
		'choices'  => array(
			'no-repeat' => 'No Repeat',
			'repeat'    => 'Repeat'
		)
	) ) );

	$wp_customize->add_setting( 'penci_mhbgwidget_heading_align', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_mhbgwidget_heading_align', array(
		'label'    => 'Sidebar Widget Heading Align',
		'section'  => $section_menu_hbg,
		'settings' => 'penci_mhbgwidget_heading_align',
		'type'     => 'radio',
		'choices'  => array(
			''               => 'Default',
			'pcalign-center' => 'Center',
			'pcalign-left'   => 'Left',
			'pcalign-right'  => 'Right'
		)
	) ) );

	$wp_customize->add_setting( 'penci_mhbgwidget_remove_border_outer', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_mhbgwidget_remove_border_outer', array(
		'label'    => 'Remove Border Outer on Widget Heading',
		'section'  => $section_menu_hbg,
		'settings' => 'penci_mhbgwidget_remove_border_outer',
		'type'     => 'checkbox',
	) ) );

	$wp_customize->add_setting( 'penci_mhbgwidget_remove_arrow_down', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'penci_mhbgwidget_remove_arrow_down', array(
		'label'    => 'Remove Arrow Down on Widget Heading',
		'section'  => $section_menu_hbg,
		'settings' => 'penci_mhbgwidget_remove_arrow_down',
		'type'     => 'checkbox',
	) ) );

	$wp_customize->add_setting( 'penci_menu_hbg_colors', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_control( new Penci_Customize_Heading_Control( $wp_customize, 'penci_menu_hbg_colors', array(
		'label'    => esc_html__( 'Colors', 'soledad' ),
		'section'  => $section_menu_hbg,
		'settings' => 'penci_menu_hbg_colors',
		'type'     => 'heading',
	) ) );

	$options_color_menu_hbg1 = array(
		'penci_mhbg_icon_toggle_color'   => esc_html__( 'Menu Hamburger Icon Color on Horizontal Navigation', 'soledad' ),
		'penci_mhbg_icon_toggle_hcolor'  => esc_html__( 'Menu Hamburger Icon Hover Color on Horizontal Navigation', 'soledad' ),
		'penci_mhbg_bgcolor'             => esc_html__( 'Background Color', 'soledad' ),
		'penci_mhbg_textcolor'           => esc_html__( 'General Text Color', 'soledad' ),
		'penci_mhbg_closecolor'          => esc_html__( 'Menu Hamburger Close Icon Color', 'soledad' ),
		'penci_mhbg_closehover'          => esc_html__( 'Menu Hamburger Close Icon Hover Color', 'soledad' ),
		'penci_mhbg_bordercolor'         => esc_html__( 'General Border Color', 'soledad' ),
		'penci_mhbgtitle_color'          => esc_html__( 'Site Title Color', 'soledad' ),
		'penci_mhbgdesc_hcolor'          => esc_html__( 'Site Description Color', 'soledad' ),
		'penci_mhbg_search_border'       => esc_html__( 'Custom Border Colors for Search Box', 'soledad' ),
		'penci_mhbg_search_border_hover' => esc_html__( 'Custom Border Colors for Search Box on Focus', 'soledad' ),
		'penci_mhbg_search_color'        => esc_html__( 'Custom Text Colors for Search Box', 'soledad' ),
		'penci_mhbg_search_icon'         => esc_html__( 'Custom Colors for Search Icon', 'soledad' ),
		'penci_mhbgaccent_color'         => esc_html__( 'Accent Color', 'soledad' ),
		'penci_mhbgaccent_hover_color'   => esc_html__( 'Accent Hover Color', 'soledad' ),
		'penci_mhbgfooter_color'         => esc_html__( 'Footer Text Color', 'soledad' ),
		'penci_mhbgicon_color'           => esc_html__( 'Social Icons Color', 'soledad' ),
		'penci_mhbgicon_hover_color'     => esc_html__( 'Social Icons Hover Color', 'soledad' ),
		'penci_mhbgicon_border'          => esc_html__( 'Social Icons Border Color', 'soledad' ),
		'penci_mhbgicon_border_hover'    => esc_html__( 'Social Icons Border Hover Color', 'soledad' ),
		'penci_mhbgicon_bg'              => esc_html__( 'Social Icons Background Color', 'soledad' ),
		'penci_mhbgicon_bg_hover'        => esc_html__( 'Social Icons Background Hover Color', 'soledad' ),
	);

	$options_color_menu_hbg2 = array(
		'penci_mhwidget_heading_bg'           => esc_html__( 'Widget Heading Background Color', 'soledad' ),
		'penci_mhwidget_heading_outer_bg'     => esc_html__( 'Widget Heading Background Outer Color', 'soledad' ),
		'penci_mhwidget_heading_bcolor'       => esc_html__( 'Sidebar Widget Heading Border Color', 'soledad' ),
		'penci_mhwidget_heading_binner_color' => esc_html__( 'Widget Heading Border Outer Color', 'soledad' ),
		'penci_mhwidget_heading_bcolor5'      => esc_html__( 'Custom Color for Border Bottom on Widget Heading Style 5', 'soledad' ),
		'penci_mhwidget_heading_bcolor7'      => esc_html__( 'Custom Color for Small Border Bottom on Widget Heading Style 7 & Style 8', 'soledad' ),
		'penci_mhwidget_heading_color'        => esc_html__( 'Widget Heading Text Color', 'soledad' ),
	);

	foreach ( $options_color_menu_hbg1 as $key => $label ) {
		$wp_customize->add_setting( $key, array(
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $key, array(
			'label'    => $label,
			'section'  => $section_menu_hbg,
			'settings' => $key,
		) ) );
	}

	foreach ( $options_color_menu_hbg2 as $key => $label ) {
		$wp_customize->add_setting( $key, array(
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $key, array(
			'label'    => $label,
			'section'  => $section_menu_hbg,
			'settings' => $key,
		) ) );
	}

	// Remove Sections
	$wp_customize->remove_section( 'title_tagline' );
	$wp_customize->remove_section( 'nav' );
	$wp_customize->remove_section( 'static_front_page' );
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'background_image' );

}

/**
 * Callback function for sanitizing radio settings.
 * Use for PenciDesign
 *
 * @param $input , $setting
 *
 * @return $input
 */
if ( ! function_exists( 'penci_sanitize_choices_field' ) ) {
	function penci_sanitize_choices_field( $input ) {
		return $input;
	}
}

/**
 * Callback function for sanitizing textarea settings
 * Use for PenciDesign
 *
 * @param $input , $setting
 *
 * @return $input
 */
if ( ! function_exists( 'penci_sanitize_textarea_field' ) ) {
	function penci_sanitize_textarea_field( $input ) {
		return $input;
	}
}
/**
 * Callback function for sanitizing checkbox settings.
 * Use for PenciDesign
 *
 * @param $input
 *
 * @return string default value if type is not exists
 */
if ( ! function_exists( 'penci_sanitize_checkbox_field' ) ) {
	function penci_sanitize_checkbox_field( $input ) {
		if ( $input == 1 ) {
			return true;
		} else {
			return false;
		}
	}
}

/**
 * Callback function for sanitizing checkbox settings.
 * Use for PenciDesign
 *
 * @param $input
 *
 * @return a number
 */
if ( ! function_exists( 'penci_sanitize_number_field' ) ) {
	function penci_sanitize_number_field( $input ) {
		return absint( $input );
	}
}

add_action( 'customize_register', 'pencidesign_register_theme_customizer' );
?>