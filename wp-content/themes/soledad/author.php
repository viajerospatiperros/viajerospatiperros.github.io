<?php
/**
 * The template for displaying author pages
 *
 * @package Wordpress
 * @since 1.0
 */
get_header();

/* Sidebar position */
$sidebar_position = penci_get_sidebar_position_archive();

/* Archive layout */
$layout_this = get_theme_mod( 'penci_archive_layout' );
if ( ! isset( $layout_this ) || empty( $layout_this ) ): $layout_this = 'standard'; endif;
$class_layout = '';
if( $layout_this == 'classic' ): $class_layout = ' classic-layout'; endif;
?>

		<?php if( ! get_theme_mod( 'penci_disable_breadcrumb' ) ): ?>
			<?php
			$yoast_breadcrumb = '';
			if ( function_exists( 'yoast_breadcrumb' ) ) {
				$yoast_breadcrumb = yoast_breadcrumb( '<div class="container penci-breadcrumb">', '</div>', false );
			}

			if( $yoast_breadcrumb ){
				echo $yoast_breadcrumb;
			}else{ ?>
			<div class="container penci-breadcrumb">
				<span><a class="crumb" href="<?php echo esc_url( home_url('/') ); ?>"><?php echo penci_get_setting( 'penci_trans_home' ); ?></a></span><?php penci_fawesome_icon('fas fa-angle-right'); ?>
				<?php
				echo '<span>';
				echo penci_get_setting( 'penci_trans_author' );
				echo '</span>';
				?>
			</div>
			<?php } ?>
		<?php endif; ?>

		<div class="container<?php echo esc_attr( $class_layout ); if ( penci_get_setting( 'penci_sidebar_archive' ) ) : ?> penci_sidebar <?php echo esc_attr( $sidebar_position ); ?><?php endif; ?>">
			<div id="main" class="penci-layout-<?php echo esc_attr( $layout_this ); ?><?php if ( get_theme_mod( 'penci_sidebar_sticky' ) ): ?> penci-main-sticky-sidebar<?php endif; ?>">
				<div class="theiaStickySidebar">
					<div class="archive-box">
						<div class="title-bar">
							<?php
							echo '<span>';
							echo penci_get_setting( 'penci_trans_author' );
							echo ' </span>';
							printf( wp_kses ( __( '<h1 class="page-title">%s</h1>', 'soledad' ), penci_allow_html() ), get_the_author() );
							?>
						</div>
					</div>

					<?php get_template_part( 'inc/templates/about_author' ); ?>

					<?php echo penci_render_google_adsense( 'penci_archive_ad_above' ); ?>

					<?php if ( have_posts() ) : ?>
						<?php
						$class_grid_arr = array(
							'mixed',
							'mixed-2',
							'overlay-grid',
							'overlay-list',
							'photography',
							'grid',
							'grid-2',
							'list',
							'boxed-1',
							'boxed-2',
							'boxed-3',
							'standard-grid',
							'standard-grid-2',
							'standard-list',
							'standard-boxed-1',
							'classic-grid',
							'classic-grid-2',
							'classic-list',
							'classic-boxed-1',
							'magazine-1',
							'magazine-2'
						);
						if( in_array( $layout_this, $class_grid_arr ) ) {
							echo '<ul class="penci-wrapper-data penci-grid">';
						}elseif( in_array( $layout_this, array( 'masonry', 'masonry-2' ) ) ) {
							echo '<div class="penci-wrap-masonry"><div class="penci-wrapper-data masonry penci-masonry">';
						}elseif( get_theme_mod( 'penci_archive_nav_ajax' ) || get_theme_mod( 'penci_archive_nav_scroll' ) ) {
							echo '<div class="penci-wrapper-data">';
						}

						while ( have_posts() ) : the_post();
							include( locate_template( 'content-' . $layout_this . '.php' ) );
						endwhile;

						if( in_array( $layout_this, $class_grid_arr ) ) {
							echo '</ul>';
						}elseif( in_array( $layout_this, array( 'masonry', 'masonry-2' ) ) ) {
							echo '</div></div>';
						}elseif( get_theme_mod( 'penci_archive_nav_ajax' ) || get_theme_mod( 'penci_archive_nav_scroll' ) ) {
							echo '</div>';
						}

						penci_soledad_archive_pag_style( $layout_this );
						?>
					<?php endif; wp_reset_postdata(); /* End if of the loop */ ?>

					<?php echo penci_render_google_adsense( 'penci_archive_ad_below' ); ?>

				</div>
			</div>

		<?php if ( penci_get_setting( 'penci_sidebar_archive' ) ) : ?>
			<?php get_sidebar(); ?>
			<?php if ( get_theme_mod( 'penci_two_sidebar_archive' ) ) : get_sidebar( 'left' ); endif; ?>
		<?php endif; ?>
<?php get_footer(); ?>