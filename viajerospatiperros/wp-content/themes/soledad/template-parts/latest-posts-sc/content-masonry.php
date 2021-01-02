<?php
/**
 * Template loop for masonry style
 */
?>
<article id="post-<?php the_ID(); ?>" class="item item-masonry grid-masonry hentry<?php if( 'yes' == $grid_meta_overlay ): echo ' grid-overlay-meta'; endif; ?>">
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="thumbnail">
			<?php
			/* Display Review Piechart  */
			if( function_exists('penci_display_piechart_review_html') ) {
				penci_display_piechart_review_html( get_the_ID() );
			}
			?>
			<a href="<?php penci_permalink_fix() ?>" class="post-thumbnail<?php echo penci_class_lightbox_enable(); ?>">
				<?php 
				$src_full = penci_get_featured_image_size( get_the_ID(), 'full' );
				$src_check = substr( $src_full, -4 );
				if( $src_check == '.gif' ) {
					the_post_thumbnail( 'full' );
				} else {
					the_post_thumbnail( 'penci-masonry-thumb' );
				}
				?>
			</a>
			<?php if( 'yes' != $grid_icon_format ): ?>
				<?php if ( has_post_format( 'video' ) ) : ?>
					<a href="<?php the_permalink() ?>" class="icon-post-format"><?php penci_fawesome_icon('fas fa-play'); ?></a>
				<?php endif; ?>
				<?php if ( has_post_format( 'gallery' ) ) : ?>
					<a href="<?php the_permalink() ?>" class="icon-post-format"><?php penci_fawesome_icon('far fa-image'); ?></a>
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
			<?php endif; ?>
		</div>
	<?php endif; ?>

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

	<?php if ( 'yes' != $grid_share_box ) : ?>
		<div class="penci-post-box-meta penci-post-box-grid">
			<div class="penci-post-share-box">
				<?php echo penci_getPostLikeLink( get_the_ID() ); ?>
				<?php penci_soledad_social_share( );  ?>
			</div>
		</div>
	<?php endif; ?>
</article>