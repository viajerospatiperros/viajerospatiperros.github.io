<?php
/**
 * Template display for featured category style 9
 *
 * @since 1.0
 */
?>

<div class="mag-post-box hentry">
	<div class="magcat-thumb">
		<?php
		/* Display Review Piechart  */
		if( function_exists('penci_display_piechart_review_html') ) {
			penci_display_piechart_review_html( get_the_ID(), 'small' );
		}
		?>
		<?php if( ! get_theme_mod( 'penci_disable_lazyload_layout' ) ) { ?>
		<a class="penci-image-holder penci-lazy small-fix-size<?php echo penci_class_lightbox_enable(); ?>" data-src="<?php echo penci_get_featured_image_size( get_the_ID(), penci_featured_images_size('small') ); ?>" href="<?php penci_permalink_fix(); ?>" title="<?php echo wp_strip_all_tags( get_the_title() ); ?>">
		</a>
		<?php } else { ?>
		<a class="penci-image-holder small-fix-size<?php echo penci_class_lightbox_enable(); ?>" style="background-image: url('<?php echo penci_get_featured_image_size( get_the_ID(), penci_featured_images_size('small') ); ?>');" href="<?php penci_permalink_fix(); ?>" title="<?php echo wp_strip_all_tags( get_the_title() ); ?>">
		</a>
		<?php } ?>
		<?php if( has_post_thumbnail() && get_theme_mod('penci_home_featured_cat_icons') ): ?>
			<?php if ( has_post_format( 'video' ) ) : ?>
				<a href="<?php the_permalink() ?>" class="icon-post-format"><?php penci_fawesome_icon('fas fa-play'); ?></a>
			<?php endif; ?>
			<?php if ( has_post_format( 'audio' ) ) : ?>
				<a href="<?php the_permalink() ?>" class="icon-post-format"><?php penci_fawesome_icon('fas fa-music'); ?></a>
			<?php endif; ?>
			<?php if ( has_post_format( 'link' ) ) : ?>
				<a href="<?php the_permalink() ?>" class="icon-post-format"><?php penci_fawesome_icon('fas fa-link'); ?></a>
			<?php endif; ?>
			<?php if ( has_post_format( 'quote' ) ) : ?>
				<a href="<?php the_permalink() ?>" class="icon-post-format"><?php penci_fawesome_icon('fas fa-quote-left'); ?></a>
			<?php endif; ?>
			<?php if ( has_post_format( 'gallery' ) ) : ?>
				<a href="<?php the_permalink() ?>" class="icon-post-format"><?php penci_fawesome_icon('far fa-image'); ?></a>
			<?php endif; ?>
		<?php endif; ?>
	</div>
	<div class="magcat-detail">
		<h3 class="magcat-titlte entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<?php if ( ! get_theme_mod( 'penci_home_featured_cat_date' ) ): ?>
			<div class="grid-post-box-meta mag-meta">
				<?php if ( ! get_theme_mod( 'penci_home_featured_cat_date' ) ) : ?>
					<span><?php penci_soledad_time_link(); ?></span>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<?php penci_soledad_meta_schema(); ?>
	</div>
</div>