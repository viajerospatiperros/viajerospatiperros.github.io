<?php
$sidebar_enable = penci_single_sidebar_return();
$sidebar_position = penci_get_posts_sidebar_class();
$sidebar_small_width = penci_single_smaller_content_enable();

// Check layout magazine
$single_magazine = 'container container-single penci-single-style-3 penci-single-smore container-single-fullwidth hentry';
if( get_theme_mod( 'penci_home_layout' ) == 'magazine-1' || get_theme_mod( 'penci_home_layout' ) == 'magazine-2' ) {
	$single_magazine .= ' container-single-magazine';
}

// Check class main content
$class_container_single = 'container container-single penci-single-style-3 penci-single-smore';
if ( $sidebar_enable ){
	$class_container_single .= ' penci_sidebar';
	$class_container_single .= ' ' . $sidebar_position;

	$single_magazine .= ' ' . $sidebar_position;
} else {
	$class_container_single .= ' penci_is_nosidebar';
	$single_magazine .= ' penci_is_nosidebar';
}

if( $sidebar_small_width ) {
	$class_container_single .= ' penci-single-smaller-width';
}

if( ! get_theme_mod( 'penci_disable_lightbox_single' ) ){
	$class_container_single .= ' penci-enable-lightbox';
}

if( ! get_theme_mod( 'penci_disable_lightbox_single' ) ){
	$class_container_single .= ' penci-enable-lightbox';
}
$post_format = get_post_format();

$post_format = get_post_format();
$show_post_format = true;
if( get_theme_mod( 'penci_post_thumb' ) && ! in_array( $post_format, array( 'link', 'quote','gallery','video' ) )  ) {
	$class_container_single .= ' penci-single-pheader-noimg';
	$show_post_format = false;
}
?>
<div class="penci-single-pheader <?php echo ( $single_magazine );?>">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			if( ! get_theme_mod( 'penci_move_title_bellow' ) ) {
				get_template_part( 'template-parts/single', 'breadcrumb' );
				get_template_part( 'template-parts/single', 'entry-header' );
			}
			get_template_part( 'template-parts/single', 'post-format' );
		endwhile;
	endif;
	?>
</div>
<div class="<?php echo $class_container_single; ?>">
	<div id="main"<?php if ( get_theme_mod( 'penci_sidebar_sticky' ) ): ?> class="penci-main-sticky-sidebar"<?php endif; ?>>
		<div class="theiaStickySidebar">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php penci_set_post_views( $post->ID ); ?>
				<?php get_template_part( 'template-parts/single', 'content-main' ); ?>
			<?php endwhile; endif; ?>
		</div>
	</div>
<?php get_template_part( 'template-parts/single', 'sidebar' ); ?>
<?php
get_footer();