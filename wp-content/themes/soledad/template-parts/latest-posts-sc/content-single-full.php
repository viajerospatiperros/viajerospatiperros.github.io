<?php
/**
 * Display part top of full width single style
 * Call this file when enable single style 2
 *
 * @since 1.0
 */
$thumb_alt = $thumb_title_html = '';

if( has_post_thumbnail() ){
	$thumb_id = get_post_thumbnail_id( get_the_ID() );
	$thumb_alt = penci_get_image_alt( $thumb_id, get_the_ID() );
	$thumb_title_html = penci_get_image_title( $thumb_id );
}
$sidebar_position    = penci_get_posts_sidebar_class();

$featured_image_size = 'penci-full-thumb';
if ( 'two-sidebar' == $sidebar_position ) {
	$featured_image_size = 'penci-single-full';
}

?>
<?php if( ! get_theme_mod( 'penci_move_title_bellow' ) ): ?>

	<div class="header-standard header-classic single-header">
		<?php if ( ! get_theme_mod( 'penci_post_cat' ) ) : ?>
			<div class="penci-standard-cat penci-single-cat"><span class="cat"><?php penci_category( '' ); ?></span></div>
		<?php endif; ?>

		<h1 class="post-title single-post-title entry-title"><?php penci_trim_post_title( get_the_ID(), $grid_title_length ); ?></h1>
		<?php penci_soledad_meta_schema(); ?>
		<?php if ( ! get_theme_mod( 'penci_single_meta_author' ) || ! get_theme_mod( 'penci_single_meta_date' ) || ! get_theme_mod( 'penci_single_meta_comment' ) || get_theme_mod( 'penci_single_show_cview' ) ) : ?>
			<div class="post-box-meta-single">
				<?php if ( ! get_theme_mod( 'penci_single_meta_author' ) ) : ?>
					<span class="author-post byline"><span class="author vcard"><?php echo penci_get_setting('penci_trans_by'); ?> <a class="author-url url fn n" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></span></span>
				<?php endif; ?>
				<?php if ( ! get_theme_mod( 'penci_single_meta_date' ) ) : ?>
					<span><?php penci_soledad_time_link(); ?></span>
				<?php endif; ?>
				<?php if ( ! get_theme_mod( 'penci_single_meta_comment' ) ) : ?>
					<span><?php comments_number( '0 ' . penci_get_setting( 'penci_trans_comment' ), '1 '. penci_get_setting( 'penci_trans_comment' ), '% ' . penci_get_setting( 'penci_trans_comments' ) ); ?></span>
				<?php endif; ?>
				<?php if ( get_theme_mod( 'penci_single_show_cview' ) ) : ?>
					<span><i class="penci-post-countview-number"><?php echo penci_get_post_views( get_the_ID() ); ?></i> <?php echo penci_get_setting( 'penci_trans_text_views' ); ?></span>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>

<?php endif; /* End check move title bellow featured image */  ?>

<?php if ( has_post_format( 'link' ) || has_post_format( 'quote' ) ) : ?>
	<div class="standard-post-special post-image<?php if ( has_post_format( 'quote' ) ): ?> penci-special-format-quote<?php endif; ?><?php if ( ! has_post_thumbnail() || 'yes' == $atts['standard_thumbnail'] ) : echo ' no-thumbnail'; endif; ?>">
		<?php if ( has_post_thumbnail() && 'yes' != $atts['standard_thumbnail'] ) : ?>
			<?php if( ! get_theme_mod( 'penci_disable_lazyload_single' ) ) { ?>
				<img class="attachment-penci-full-thumb size-penci-full-thumb penci-lazy wp-post-image" src="<?php echo get_template_directory_uri() . '/images/penci2-holder.png'; ?>" alt="<?php echo $thumb_alt; ?>"<?php echo $thumb_title_html; ?> data-src="<?php echo penci_get_featured_image_size( get_the_ID(), $featured_image_size ); ?>">
			<?php } else { ?>
				<?php the_post_thumbnail( $featured_image_size ); ?>
			<?php }?>
		<?php endif; ?>
		<div class="standard-content-special">
			<div class="format-post-box<?php if ( has_post_format( 'quote' ) ) { echo ' penci-format-quote'; } else { echo ' penci-format-link'; } ?>">
				<span class="post-format-icon"><?php penci_fawesome_icon('fas fa-' . (  has_post_format( 'quote' ) ? 'quote-left' : 'link' ) ); ?></span>
				<p class="dt-special">
					<?php
					if ( has_post_format( 'quote' ) ) {
						$dt_content = get_post_meta( $post->ID, '_format_quote_source_name', true );
						if ( ! empty( $dt_content ) ): echo sanitize_text_field( $dt_content ); endif;
					}
					else {
						$dt_content = get_post_meta( $post->ID, '_format_link_url', true );
						if ( ! empty( $dt_content ) ):
							echo '<a href="'. esc_url( $dt_content ) .'" target="_blank">'. sanitize_text_field( $dt_content ) .'</a>';
						endif;
					}
					?>
				</p>
				<?php
				if ( has_post_format( 'quote' ) ):
					$quote_author = get_post_meta( $post->ID, '_format_quote_source_url', true );
					if ( ! empty( $quote_author ) ):
						echo '<div class="author-quote"><span>' . sanitize_text_field( $quote_author ) . '</span></div>';
					endif;
				endif; ?>
			</div>
		</div>
	</div>

<?php elseif ( has_post_format( 'gallery' ) ) : ?>

	<?php $images = get_post_meta( $post->ID, '_format_gallery_images', true ); ?>

	<?php if ( $images ) :
		$autoplay = ! get_theme_mod('penci_disable_autoplay_single_slider') ? 'true' : 'false';
	?>
		<div class="post-image">
			<div class="penci-owl-carousel penci-owl-carousel-slider penci-nav-visible" data-auto="<?php echo $autoplay; ?>" data-lazy="true">
				<?php foreach ( $images as $image ) : ?>

					<?php $the_image = wp_get_attachment_image_src( $image, $featured_image_size ); ?>
					<?php $the_caption = get_post_field( 'post_excerpt', $image ); 
					$image_alt = penci_get_image_alt( $image, get_the_ID() );
					$image_title_html = penci_get_image_title( $image );
					?>
					<figure>
						<?php if( ! get_theme_mod( 'penci_disable_lazyload_single' ) ) { ?>
							<img class="owl-lazy" data-src="<?php echo esc_url( $the_image[0] ); ?>" alt="<?php echo $image_alt; ?>"<?php echo $image_title_html; ?> />
						<?php } else { ?>
							<img src="<?php echo esc_url( $the_image[0] ); ?>" alt="<?php echo $image_alt; ?>"<?php echo $image_title_html; ?> />
						<?php }?>
					</figure>

				<?php endforeach; ?>
			</div>
		</div>
	<?php endif; ?>

<?php elseif ( has_post_format( 'video' ) ) : ?>

	<div class="post-image">
		<?php $penci_video = get_post_meta( $post->ID, '_format_video_embed', true ); ?>
		<?php if ( wp_oembed_get( $penci_video ) ) : ?>
			<?php echo wp_oembed_get( $penci_video ); ?>
		<?php else : ?>
			<?php echo $penci_video; ?>
		<?php endif; ?>
	</div>

<?php elseif ( has_post_format( 'audio' ) ) : ?>

	<div class="standard-post-image post-image audio<?php if ( ! has_post_thumbnail() || get_theme_mod( 'penci_post_thumb' ) ) : echo ' no-thumbnail'; endif; ?>">
		<?php if ( has_post_thumbnail() && ! get_theme_mod( 'penci_post_thumb' ) ) : ?>
			<?php if( ! get_theme_mod( 'penci_disable_lazyload_single' ) ) { ?>
				<img class="attachment-penci-full-thumb size-penci-full-thumb penci-lazy wp-post-image" src="<?php echo get_template_directory_uri() . '/images/penci2-holder.png'; ?>" alt="<?php echo $thumb_alt; ?>"<?php echo $thumb_title_html; ?> data-src="<?php echo penci_get_featured_image_size( get_the_ID(),	$featured_image_size ); ?>">
			<?php } else { ?>
				<?php the_post_thumbnail( $featured_image_size ); ?>
			<?php }?>
		<?php endif; ?>
		<div class="audio-iframe">
			<?php $penci_audio = get_post_meta( $post->ID, '_format_audio_embed', true );
			$penci_audio_str = substr( $penci_audio, -4 ); ?>
			<?php if ( wp_oembed_get( $penci_audio ) ) : ?>
				<?php echo wp_oembed_get( $penci_audio ); ?>
			<?php elseif( $penci_audio_str == '.mp3' ) : ?>
				<?php echo do_shortcode('[audio src="'. esc_url( $penci_audio ) .'"]'); ?>
			<?php else : ?>
				<?php echo $penci_audio; ?>
			<?php endif; ?>
		</div>
	</div>

<?php else : ?>

	<?php if ( has_post_thumbnail() ) : ?>
		<?php if ( ! get_theme_mod( 'penci_post_thumb' ) ) : ?>
			<div class="post-image">
				<?php
				if ( ! get_theme_mod( 'penci_disable_lightbox_single' ) ) {
					$thumb_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
					echo '<a href="'. esc_url( $thumb_url ) .'" data-rel="penci-gallery-image-content">';
					?>
					<?php if( ! get_theme_mod( 'penci_disable_lazyload_single' ) ) { ?>
						<img class="attachment-penci-full-thumb size-penci-full-thumb penci-lazy wp-post-image" src="<?php echo get_template_directory_uri() . '/images/penci2-holder.png'; ?>" alt="<?php echo $thumb_alt; ?>"<?php echo $thumb_title_html; ?> data-src="<?php echo penci_get_featured_image_size( get_the_ID(),	$featured_image_size ); ?>">
					<?php } else { ?>
						<?php the_post_thumbnail( $featured_image_size ); ?>
					<?php }?>
					<?php
					echo '</a>';
				} else {
					?>
					<?php if( ! get_theme_mod( 'penci_disable_lazyload_single' ) ) { ?>
						<img class="attachment-penci-full-thumb size-penci-full-thumb penci-lazy wp-post-image" src="<?php echo get_template_directory_uri() . '/images/penci2-holder.png'; ?>" alt="<?php echo $thumb_alt; ?>"<?php echo $thumb_title_html; ?> data-src="<?php echo penci_get_featured_image_size( get_the_ID(),	$featured_image_size ); ?>">
					<?php } else { ?>
						<?php the_post_thumbnail( $featured_image_size ); ?>
					<?php }?>
					<?php
				}

				if ( get_the_post_thumbnail_caption() && get_theme_mod( 'penci_post_thumb_caption' ) ) {
					echo '<div class="penci-featured-caption">' . get_the_post_thumbnail_caption() . '</div>';
				}
				?>
			</div>
		<?php endif; ?>
	<?php endif; ?>

<?php endif; ?>

<?php if( get_theme_mod( 'penci_move_title_bellow' ) ): ?>

	<div class="header-standard header-classic single-header penci-title-bellow">
		<?php if ( ! get_theme_mod( 'penci_post_cat' ) ) : ?>
			<div class="penci-standard-cat penci-single-cat"><span class="cat"><?php penci_category( '' ); ?></span></div>
		<?php endif; ?>

		<h1 class="post-title single-post-title entry-title"><?php penci_trim_post_title( get_the_ID(), $grid_title_length ); ?></h1>

		<?php if ( ! get_theme_mod( 'penci_single_meta_author' ) || ! get_theme_mod( 'penci_single_meta_date' ) || ! get_theme_mod( 'penci_single_meta_comment' ) || get_theme_mod( 'penci_single_show_cview' ) ) : ?>
			<div class="post-box-meta-single">
				<?php if ( ! get_theme_mod( 'penci_single_meta_author' ) ) : ?>
					<span class="author-post byline"><span class="author vcard"><?php echo penci_get_setting('penci_trans_by'); ?> <a class="author-url url fn n" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></span></span>
				<?php endif; ?>
				<?php if ( ! get_theme_mod( 'penci_single_meta_date' ) ) : ?>
					<span><?php penci_soledad_time_link(); ?></span>
				<?php endif; ?>
				<?php if ( ! get_theme_mod( 'penci_single_meta_comment' ) ) : ?>
					<span><?php comments_number( '0 ' . penci_get_setting( 'penci_trans_comment' ), '1 '. penci_get_setting( 'penci_trans_comment' ), '% ' . penci_get_setting( 'penci_trans_comments' ) ); ?></span>
				<?php endif; ?>
				<?php if ( get_theme_mod( 'penci_single_show_cview' ) ) : ?>
					<span><i class="penci-post-countview-number"><?php echo penci_get_post_views( get_the_ID() ); ?></i> <?php echo penci_get_setting( 'penci_trans_text_views' ); ?></span>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>

<?php endif; /* End check move title bellow featured image */  ?>