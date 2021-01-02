<?php
/**
 * Template display for featured category style 1
 *
 * @since 1.0
 */
?>
<?php if ( $m == 1 ): ?><div class="cat-left"><?php endif; ?>
<div class="mag-post-box hentry<?php if ( $m == 1 ): echo ' first-post'; endif; ?>">
	<div class="magcat-thumb">
		<?php
		/* Display Review Piechart  */
		if( function_exists('penci_display_piechart_review_html') ) {
			$size_pie = 'small';
			if( $m == 1 ): $size_pie = 'normal'; endif;
			penci_display_piechart_review_html( get_the_ID(), $size_pie );
		}
		?>
		<?php if( ! get_theme_mod( 'penci_disable_lazyload_layout' ) ) { ?>
		<a class="penci-image-holder penci-lazy<?php if( $m > 1 ): echo ' small-fix-size'; endif; ?><?php echo penci_class_lightbox_enable(); ?>" data-src="<?php echo penci_get_featured_image_size( get_the_ID(), penci_featured_images_size() ); ?>" href="<?php penci_permalink_fix(); ?>" title="<?php echo wp_strip_all_tags( get_the_title() ); ?>">
		</a>
		<?php } else { ?>
		<a class="penci-image-holder<?php if( $m > 1 ): echo ' small-fix-size'; endif; ?><?php echo penci_class_lightbox_enable(); ?>" style="background-image: url('<?php echo penci_get_featured_image_size( get_the_ID(), penci_featured_images_size() ); ?>');" href="<?php penci_permalink_fix(); ?>" title="<?php echo wp_strip_all_tags( get_the_title() ); ?>">
		</a>
		<?php }?>
		<?php if( has_post_thumbnail() && 'yes' != $hide_icon_format ): ?>
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
		<?php if ( $m == 1 ): ?><div class="mag-header"><?php endif; ?>
		<h3 class="magcat-titlte entry-title dxzczX"><a href="<?php the_permalink(); ?>"><?php penci_trim_post_title( get_the_ID(), ( $m == 1 ? $big_title_length : $_title_length ) ); ?></a></h3>
			<?php if ( ( $m == 1 && 'yes' != $hide_author ) || 'yes' != $hide_date || 'yes' == $show_viewscount ): ?>
				<div class="grid-post-box-meta mag-meta">
					<?php if ( $m == 1 && 'yes' != $hide_author ) : ?>
						<span class="author-italic author vcard"><?php echo penci_get_setting('penci_trans_by'); ?> <a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span>
					<?php endif; ?>
					<?php if ( 'yes' != $hide_date ) : ?>
						<span><?php penci_soledad_time_link(); ?></span>
					<?php endif; ?>
					<?php
					if ( 'yes' == $show_viewscount ) {
						echo '<span>';
						echo penci_get_post_views( get_the_ID() );
						echo ' ' . penci_get_setting( 'penci_trans_countviews' );
						echo '</span>';
					}
					?>
				</div>
			<?php endif; ?>
		<?php if ( $m == 1 ): ?></div><?php endif; ?>
		<?php if ( $m == 1 && get_the_excerpt() && 'yes' != $hide_excerpt ): ?>
			<div class="mag-excerpt entry-content">
				<?php
				if( isset( $_excerpt_length ) ) {
					$_excerpt_length = $_excerpt_length ? $_excerpt_length : 25;
					penci_the_excerpt($_excerpt_length);
				}else{
					the_excerpt();
				}
				?>
			</div>
		<?php endif; ?>
		<?php penci_soledad_meta_schema(); ?>
	</div>
</div>
<?php if ( $m == 1 ): ?></div><div class="cat-right"><?php endif; ?>
<?php if ( $m == $numers_results ): ?></div><?php endif; ?>