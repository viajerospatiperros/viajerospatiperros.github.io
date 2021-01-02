<?php
/**
 * Template loop for gird style
 */
?>
<div class="grid-style grid-mixed">
	<article id="post-<?php the_ID(); ?>" class="item hentry">

		<?php if ( has_post_thumbnail() ) : ?>
			<div class="thumbnail thumb-left">
				<?php
				/* Display Review Piechart  */
				if( function_exists('penci_display_piechart_review_html') ) {
					penci_display_piechart_review_html( get_the_ID() );
				}
				?>
				<?php if( ! get_theme_mod( 'penci_disable_lazyload_layout' ) ) { ?>
				<a class="penci-image-holder penci-lazy<?php echo penci_class_lightbox_enable(); ?>" data-src="<?php echo penci_get_featured_image_size( get_the_ID(), penci_featured_images_size('large') ); ?>" href="<?php penci_permalink_fix(); ?>" title="<?php echo wp_strip_all_tags( get_the_title() ); ?>">
				</a>
				<?php } else { ?>
				<a class="penci-image-holder<?php echo penci_class_lightbox_enable(); ?>" style="background-image: url('<?php echo penci_get_featured_image_size( get_the_ID(), penci_featured_images_size('large') ); ?>');" href="<?php penci_permalink_fix(); ?>" title="<?php echo wp_strip_all_tags( get_the_title() ); ?>">
				</a>
				<?php } ?>
			</div>
		<?php endif; ?>

		<div class="mixed-detail">
			<div class="grid-header-box">
				<?php if ( 'yes' != $grid_cat ) : ?>
					<span class="cat"><?php penci_category( '' ); ?></span>
				<?php endif; ?>
				<h2 class="penci-entry-title entry-title grid-title"><a href="<?php the_permalink(); ?>"><?php penci_trim_post_title( get_the_ID(), $grid_title_length ); ?></a></h2>
				<?php penci_soledad_meta_schema(); ?>
				<?php if ( 'yes' != $grid_date || 'yes' != $grid_author || 'yes' == $grid_viewscount ) : ?>
					<div class="grid-post-box-meta">
						<?php if ( 'yes' != $grid_author ) : ?>
							<span class="author-italic author vcard"><?php echo penci_get_setting('penci_trans_by'); ?> <a class="url fn n" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></span>
						<?php endif; ?>
						<?php if ( 'yes' != $grid_date ) : ?>
							<span><?php penci_soledad_time_link(); ?></span>
						<?php endif; ?>
						<?php
						if ( 'yes' == $grid_viewscount ) {
							echo '<span>';
							echo penci_get_post_views( get_the_ID() );
							echo ' ' . penci_get_setting( 'penci_trans_countviews' );
							echo '</span>';
						}
						?>
					</div>
				<?php endif; ?>
			</div>

			<?php if( get_the_excerpt() && 'yes' != $grid_remove_excerpt ): ?>
				<div class="item-content entry-content">
					<?php penci_the_excerpt( $grid_excerpt_length ); ?>
				</div>
			<?php endif; ?>

			<?php if( 'yes' == $grid_add_readmore ):
			$class_button = '';
			if( 'yes' == $grid_remove_arrow ): $class_button .= ' penci-btn-remove-arrow'; endif;
			if( 'yes' == $grid_readmore_button ): $class_button .= ' penci-btn-make-button'; endif;
			if( $grid_readmore_align ): $class_button .= ' penci-btn-align-' . $grid_readmore_align; endif;
			?>
				<div class="penci-readmore-btn<?php echo $class_button; ?>">
					<a class="penci-btn-readmore" href="<?php the_permalink(); ?>"><?php echo penci_get_setting( 'penci_trans_read_more' ); ?><?php penci_fawesome_icon('fas fa-angle-double-right'); ?></a>
				</div>
			<?php endif; ?>

			<?php if ( 'yes' != $grid_share_box || 'yes' != $grid_comment ) : ?>
				<div class="penci-post-box-meta<?php if( 'yes' == $grid_share_box || 'yes' == $grid_comment ): echo ' center-inner'; endif; ?>">
					<?php if ( 'yes' != $grid_comment ) : ?>
						<div class="penci-box-meta">
							<span><a href="<?php comments_link(); ?> "><?php penci_fawesome_icon('far fa-comment'); ?><?php comments_number( '0 ' . penci_get_setting( 'penci_trans_comment' ), '1 '. penci_get_setting( 'penci_trans_comment' ), '% ' . penci_get_setting( 'penci_trans_comments' ) ); ?></a></span>
						</div>
					<?php endif; ?>
					<?php if ( 'yes' != $grid_share_box ) : ?>
						<div class="penci-post-share-box">
							<?php echo penci_getPostLikeLink( get_the_ID() ); ?>
							<?php penci_soledad_social_share( );  ?>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>

		<?php if ( has_post_thumbnail() ) : ?>
			<div class="thumbnail thumb-right">
				<?php
				/* Display Review Piechart  */
				if( function_exists('penci_display_piechart_review_html') ) {
					penci_display_piechart_review_html( get_the_ID() );
				}
				?>
				<?php if( ! get_theme_mod( 'penci_disable_lazyload_layout' ) ) { ?>
					<a class="penci-image-holder penci-lazy<?php echo penci_class_lightbox_enable(); ?>" data-src="<?php echo penci_get_featured_image_size( get_the_ID(), penci_featured_images_size('large') ); ?>" href="<?php penci_permalink_fix(); ?>" title="<?php echo wp_strip_all_tags( get_the_title() ); ?>">
					</a>
				<?php } else { ?>
					<a class="penci-image-holder<?php echo penci_class_lightbox_enable(); ?>" style="background-image: url('<?php echo penci_get_featured_image_size( get_the_ID(), penci_featured_images_size('large') ); ?>');" href="<?php penci_permalink_fix(); ?>" title="<?php echo wp_strip_all_tags( get_the_title() ); ?>">
					</a>
				<?php } ?>
			</div>
		<?php endif; ?>

	</article>
</div>