<?php
/**
 * Template display for featured category style 12
 *
 * @since 2.0
 */
?>

<div class="magcat-carousel">
	<div class="magcat-thumb hentry">
		<a href="<?php penci_permalink_fix(); ?>" class="mag-post-thumb<?php echo penci_class_lightbox_enable(); ?>">
			<?php
			/* Display Review Piechart  */
			if( function_exists('penci_display_piechart_review_html') ) {
				penci_display_piechart_review_html( get_the_ID(), 'small' );
			}
			?>
			<?php if( ! get_theme_mod( 'penci_disable_lazyload_layout' ) ) { ?>
			<span class="penci-image-holder penci-lazy" data-src="<?php echo penci_get_featured_image_size( get_the_ID(), penci_featured_images_size() ); ?>" href="<?php the_permalink(); ?>" title="<?php echo wp_strip_all_tags( get_the_title() ); ?>">
			</span>
			<?php } else { ?>
			<span class="penci-image-holder" style="background-image: url('<?php echo penci_get_featured_image_size( get_the_ID(), penci_featured_images_size() ); ?>');" href="<?php the_permalink(); ?>" title="<?php echo wp_strip_all_tags( get_the_title() ); ?>">
			</span>
			<?php } ?>
			<?php if( has_post_thumbnail() && get_theme_mod('penci_home_featured_cat_icons') ): ?>
				<?php if ( has_post_format( 'video' ) ) : ?>
					<?php penci_fawesome_icon('fas fa-play'); ?>
				<?php endif; ?>
				<?php if ( has_post_format( 'audio' ) ) : ?>
					<?php penci_fawesome_icon('fas fa-music'); ?>
				<?php endif; ?>
				<?php if ( has_post_format( 'link' ) ) : ?>
					<?php penci_fawesome_icon('fas fa-link'); ?>
				<?php endif; ?>
				<?php if ( has_post_format( 'quote' ) ) : ?>
					<?php penci_fawesome_icon('fas fa-quote-left'); ?>
				<?php endif; ?>
				<?php if ( has_post_format( 'gallery' ) ) : ?>
					<?php penci_fawesome_icon('far fa-image'); ?>
				<?php endif; ?>
			<?php endif; ?>
		</a>
		<div class="magcat-detail">
			<h3 class="magcat-titlte entry-title matcat-small-title entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php if ( ! get_theme_mod( 'penci_home_featured_cat_author' ) || ! get_theme_mod( 'penci_home_featured_cat_date' ) ): ?>
				<div class="grid-post-box-meta mag-meta matcat-small-meta">
					<?php if ( ! get_theme_mod( 'penci_home_featured_cat_author' ) ) : ?>
						<span class="author vcard"><?php echo penci_get_setting('penci_trans_by'); ?> <a class="url fn n" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></span>
					<?php endif; ?>
					<?php if ( ! get_theme_mod( 'penci_home_featured_cat_date' ) ) : ?>
						<span><?php penci_soledad_time_link(); ?></span>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<?php penci_soledad_meta_schema(); ?>
		</div>
	</div>
</div>