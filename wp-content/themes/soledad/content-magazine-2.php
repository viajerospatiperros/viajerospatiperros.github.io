<?php
/**
 * Template loop for magazine style 2
 */
?>
<li class="grid-style magazine-layout magazine-2<?php if( get_theme_mod('penci_grid_meta_overlay') ): echo ' grid-overlay-meta'; endif; ?>">
	<article id="post-<?php the_ID(); ?>" class="item hentry">
		<?php if ( has_post_format( 'gallery' ) ) : ?>
			<?php $images = get_post_meta( get_the_ID(), '_format_gallery_images', true ); ?>
			<?php if ( $images ) : ?>
				<div class="thumbnail">
					<div class="penci-owl-carousel penci-owl-carousel-slider penci-nav-visible" data-auto="true">
						<?php foreach ( $images as $image ) : ?>
							<?php $the_image = wp_get_attachment_image_src( $image, penci_featured_images_size() ); ?>
							<?php $the_caption = get_post_field( 'post_excerpt', $image ); ?>

							<?php if( ! get_theme_mod( 'penci_disable_lazyload_layout' ) ) { ?>
								<figure class="penci-image-holder penci-lazy" alt="<?php the_title(); ?>"<?php if ($the_caption) : ?> title="<?php echo esc_attr( $the_caption ); ?>"<?php endif; ?> data-src="<?php echo esc_url( $the_image[0] ); ?>">
								</figure>
							<?php } else { ?>
								<figure class="penci-image-holder" alt="<?php the_title(); ?>"<?php if ($the_caption) : ?> title="<?php echo esc_attr( $the_caption ); ?>"<?php endif; ?> style="background-image: url('<?php echo esc_url( $the_image[0] ); ?>');">
								</figure>
							<?php } ?>

						<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>

		<?php elseif ( has_post_thumbnail() ) : ?>
			<div class="thumbnail">
				<?php
				/* Display Review Piechart  */
				if( function_exists('penci_display_piechart_review_html') ) {
					penci_display_piechart_review_html( get_the_ID() );
				}
				?>

				<?php if( ! get_theme_mod( 'penci_disable_lazyload_layout' ) ) { ?>
					<a class="penci-image-holder penci-lazy<?php echo penci_class_lightbox_enable(); ?>" data-src="<?php echo penci_get_featured_image_size( get_the_ID(), penci_featured_images_size() ); ?>" href="<?php penci_permalink_fix(); ?>" title="<?php echo wp_strip_all_tags( get_the_title() ); ?>">
					</a>
				<?php } else { ?>
					<a class="penci-image-holder<?php echo penci_class_lightbox_enable(); ?>" style="background-image: url('<?php echo penci_get_featured_image_size( get_the_ID(), penci_featured_images_size() ); ?>');" href="<?php penci_permalink_fix(); ?>" title="<?php echo wp_strip_all_tags( get_the_title() ); ?>">
					</a>
				<?php } ?>

				<?php if( ! get_theme_mod('penci_grid_icon_format') ): ?>
					<?php if ( has_post_format( 'video' ) ) : ?>
						<a href="<?php the_permalink() ?>" class="icon-post-format"><?php penci_fawesome_icon('fas fa-play'); ?></a>
					<?php endif; ?>
					<?php if ( has_post_format( 'audio' ) ) : ?>
						<a href="<?php the_permalink() ?>" class="icon-post-format"><?php penci_fawesome_icon('fas fa-music'); ?></a>
					<?php endif; ?>
					<?php if ( has_post_format( 'gallery' ) ) : ?>
						<a href="<?php the_permalink() ?>" class="icon-post-format"><?php penci_fawesome_icon('far fa-image'); ?></a>
					<?php endif; ?>
					<?php if ( has_post_format( 'link' ) ) : ?>
						<a href="<?php the_permalink() ?>" class="icon-post-format"><?php penci_fawesome_icon('fas fa-link'); ?></a>
					<?php endif; ?>
					<?php if ( has_post_format( 'quote' ) ) : ?>
						<a href="<?php the_permalink() ?>" class="icon-post-format"><?php penci_fawesome_icon('fas fa-quote-left'); ?></a>
					<?php endif; ?>
				<?php endif; ?>
			</div>
		<?php endif; ?>

		<div class="grid-header-box">

			<?php if ( ! get_theme_mod( 'penci_grid_cat' ) ) : ?>
				<span class="cat"><?php penci_category( '' ); ?></span>
			<?php endif; ?>

			<h2 class="penci-entry-title entry-title grid-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php penci_soledad_meta_schema(); ?>
			<?php if ( ! get_theme_mod( 'penci_grid_date' ) || ! get_theme_mod( 'penci_grid_author' ) || get_theme_mod( 'penci_grid_countviews' ) ) : ?>
				<div class="grid-post-box-meta">
					<?php if ( ! get_theme_mod( 'penci_grid_author' ) ) : ?>
						<span class="author-italic author vcard"><?php echo penci_get_setting('penci_trans_by'); ?> <a class="url fn n" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></span>
					<?php endif; ?>
					<?php if ( ! get_theme_mod( 'penci_grid_date' ) ) : ?>
						<span><?php penci_soledad_time_link(); ?></span>
					<?php endif; ?>
					<?php
					if ( get_theme_mod( 'penci_grid_countviews' ) ) {
						echo '<span>';
						echo penci_get_post_views( get_the_ID() );
						echo ' ' . penci_get_setting( 'penci_trans_countviews' );
						echo '</span>';
					}
					?>
				</div>
			<?php endif; ?>
		</div>

		<?php if( get_the_excerpt() && ! get_theme_mod( 'penci_grid_remove_excerpt' ) ): ?>
			<div class="item-content entry-content">
				<?php the_excerpt(); ?>
			</div>
		<?php endif; ?>
		
		<?php if( get_theme_mod( 'penci_grid_add_readmore' ) ): 
		$class_button = '';
		if( get_theme_mod( 'penci_grid_remove_arrow' ) ): $class_button .= ' penci-btn-remove-arrow'; endif;
		if( get_theme_mod( 'penci_grid_readmore_button' ) ): $class_button .= ' penci-btn-make-button'; endif;
		if( get_theme_mod( 'penci_grid_readmore_align' ) ): $class_button .= ' penci-btn-align-' . get_theme_mod( 'penci_grid_readmore_align' ); endif;
		?>
			<div class="penci-readmore-btn<?php echo $class_button; ?>">
				<a class="penci-btn-readmore" href="<?php the_permalink(); ?>"><?php echo penci_get_setting( 'penci_trans_read_more' ); ?><?php penci_fawesome_icon('fas fa-angle-double-right'); ?></a>
			</div>
		<?php endif; ?>

	</article>
</li>