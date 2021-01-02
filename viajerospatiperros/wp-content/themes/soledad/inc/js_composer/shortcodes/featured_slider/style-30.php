<?php
/**
 * Template part for Slider Style 30
 */

$post_thumb_size = ! empty( $post_thumb_size ) ? $post_thumb_size : 'penci-slider-thumb';
?>
<?php if ( $feat_query->have_posts() ) : while ( $feat_query->have_posts() ) : $feat_query->the_post(); ?>
	<div class="item">
		<?php if( ! $disable_lazyload ) { ?>
			<a class="penci-image-holder owl-lazy" data-src="<?php echo penci_get_featured_image_size( get_the_ID(), $post_thumb_size ); ?>" href="<?php the_permalink(); ?>" title="<?php echo wp_strip_all_tags( get_the_title() ); ?>"></a>
		<?php } else { ?>
			<a class="penci-image-holder" style="background-image: url('<?php echo penci_get_featured_image_size( get_the_ID(), $post_thumb_size ); ?>');" href="<?php the_permalink(); ?>" title="<?php echo wp_strip_all_tags( get_the_title() ); ?>"></a>
		<?php }?>

		<a href="<?php the_permalink() ?>" class="featured-slider-overlay"></a>
		<?php if ( ! $center_box ): ?>
			<div class="penci-featured-content">
				<div class="feat-text<?php if ( $meta_date_hide ): echo ' slider-hide-date'; endif;?>">
					<?php if ( ! $hide_categories ): ?>
						<div class="cat featured-cat"><?php penci_category( '' ); ?></div>
					<?php endif; ?>
					<h3><a title="<?php echo wp_strip_all_tags( get_the_title() ); ?>" href="<?php the_permalink() ?>"><?php echo wp_trim_words( wp_strip_all_tags( get_the_title() ), $slider_title_length, '...' ); ?></a></h3>
					<div class="penci-featured-slider-button">
						<a href="<?php the_permalink() ?>"><?php echo penci_get_setting( 'penci_trans_read_more' ); ?></a>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
<?php endwhile; wp_reset_postdata(); endif; ?>
