<?php
/**
 * The Header for our theme
 *
 * @package    WordPress
 * @since      1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php if ( get_theme_mod( 'penci_favicon' ) ) : ?>
		<link rel="shortcut icon" href="<?php echo esc_url( get_theme_mod( 'penci_favicon' ) ); ?>" type="image/x-icon" />
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_theme_mod( 'penci_favicon' ) ); ?>">
	<?php endif; ?>
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> RSS Feed" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?> Atom Feed" href="<?php bloginfo( 'atom_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
if( get_theme_mod( 'penci_custom_code_after_body_tag' ) ):
	echo do_shortcode( get_theme_mod( 'penci_custom_code_after_body_tag' ) );
endif;
?>
<?php
$penci_hide_header = $show_page_title = false;
if ( is_page() ) {
	$penci_hide_header = get_post_meta( get_the_ID(), 'penci_page_hide_header', true );
	
	$show_page_title = get_theme_mod( 'penci_pheader_show' );
	$penci_page_title = get_post_meta( get_the_ID(), 'penci_pmeta_page_title', true );

	$pheader_show = isset( $penci_page_title['pheader_show'] ) ? $penci_page_title['pheader_show'] : '';
	if(  'enable' == $pheader_show  ) {
		$show_page_title = true;
	}elseif(  'disable' == $pheader_show  ) {
		$show_page_title = false;
	}
}

/**
 * Get header layout in your customizer to change header layout
 *
 * @author PenciDesign
 */
$header_layout  = penci_soledad_get_header_layout();
$menu_style = get_theme_mod( 'penci_header_menu_style' ) ? get_theme_mod( 'penci_header_menu_style' ) : 'menu-style-1';

$header_class = $header_layout;
if( $header_layout == 'header-9' ) {
	$header_class = 'header-6 header-9';
}

if ( get_theme_mod( 'penci_vertical_nav_show' ) ) {
	get_template_part( 'template-parts/menu-hamburger' );
}
get_template_part( 'template-parts/header/vertical-nav' );

$class_wrapper_boxed = 'wrapper-boxed header-style-' . esc_attr( $header_layout );
if ( get_theme_mod( 'penci_body_boxed_layout' ) && ! get_theme_mod( 'penci_vertical_nav_show' ) ) {
	$class_wrapper_boxed .= ' enable-boxed';
}
if ( get_theme_mod( 'penci_enable_dark_layout' ) ) {
	$class_wrapper_boxed .= ' dark-layout-enabled';
}
if ( $penci_hide_header ) {
	$class_wrapper_boxed .= ' penci-page-hide-header';
}
if ( get_theme_mod( 'penci_header_logo_mobile_center' ) ) {
	$class_wrapper_boxed .= ' penci-hlogo-center';
}
?>
<div class="<?php echo esc_attr( $class_wrapper_boxed ); ?>">
<?php
if( ! $penci_hide_header ){

	echo '<div class="penci-header-wrap">';
	get_template_part( 'template-parts/header/top-instagram' );
	if( get_theme_mod( 'penci_top_bar_show' ) ){
		get_template_part( 'inc/modules/topbar' );
	}

	get_template_part( 'template-parts/header/' . $header_layout );
	echo '</div>';

	get_template_part( 'template-parts/header/mailchimp-below-header' );

	if( is_home() || get_theme_mod( 'penci_featured_slider_all_page' ) ) {
		get_template_part( 'template-parts/header/feature-slider' );
	}

	if( ( ( is_home() || is_front_page() ) && get_theme_mod( 'penci_signup_display_homepage' ) ) || ! get_theme_mod( 'penci_signup_display_homepage' ) ){
		get_template_part( 'template-parts/header/mailchimp-below-header2' );
	}
}
if ( $show_page_title && !is_home() && !is_front_page() ) {
	get_template_part( 'template-parts/page-header' );
}
