<?php
/**
 * Content standard homepage, archive page
 *
 * @since 1.0
 */
$block_style = get_theme_mod('penci_blockquote_style') ? get_theme_mod('penci_blockquote_style') : 'style-1';

$thumb_alt = $thumb_title_html = '';
if( has_post_thumbnail() ){
	$thumb_id = get_post_thumbnail_id( get_the_ID() );
	$thumb_alt = penci_get_image_alt( $thumb_id, get_the_ID() );
	$thumb_title_html = penci_get_image_title( $thumb_id );
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if( 'yes' != $atts['standard_thumbnail'] ): ?>

		<?php if ( has_post_format( 'link' ) || has_post_format( 'quote' ) ) : ?>
			<div class="standard-post-image standard-post-special<?php if ( has_post_format( 'quote' ) ): ?> penci-special-format-quote<?php endif; ?><?php if ( ! has_post_thumbnail() || 'yes' == $atts['standard_thumbnail'] ) : echo ' no-thumbnail'; endif; ?>">
				<?php if ( has_post_thumbnail() && 'yes' != $atts['standard_thumbnail'] ) : ?>
					<?php if( ! get_theme_mod( 'penci_disable_lazyload_layout' ) ) { ?>
						<a <?php if( 'yes' == $standard_thumb_crop ): ?> class="penci-image-holder penci-lazy" data-src="<?php echo penci_get_featured_image_size( get_the_ID(), 'penci-full-thumb' ); ?>"<?php endif; ?> href="<?php the_permalink() ?>">
							<?php if( 'yes' != $standard_thumb_crop ): ?><img class="attachment-penci-full-thumb size-penci-full-thumb penci-lazy wp-post-image" src="<?php echo get_template_directory_uri() . '/images/penci2-holder.png'; ?>" alt="<?php echo $thumb_alt; ?>"<?php echo $thumb_title_html; ?> data-src="<?php echo penci_get_featured_image_size( get_the_ID(), 'penci-full-thumb' ); ?>"><?php endif; ?>
						</a>
					<?php } else { ?>
						<a <?php if( 'yes' == $standard_thumb_crop ): ?> class="penci-image-holder" style="background-image: url('<?php echo penci_get_featured_image_size( get_the_ID(), 'penci-full-thumb' ); ?>');"<?php endif; ?> href="<?php the_permalink() ?>">
							<?php if( 'yes' != $standard_thumb_crop ): ?><?php the_post_thumbnail( 'penci-full-thumb' ); ?><?php endif; ?>
						</a>
					<?php } ?>
				<?php endif; ?>
				<div class="standard-content-special">
					<?php if ( has_post_format( 'quote' ) ): ?><a href="<?php the_permalink();?>"><?php endif; ?>
						<div class="format-post-box<?php if ( has_post_format( 'quote' ) ) { echo ' penci-format-quote'; } else { echo ' penci-format-link'; } ?>">
							<span class="post-format-icon"><?php penci_fawesome_icon( 'fa fa-' . ( has_post_format( 'quote' ) ?  'quote-left' : 'link' )  ); ?></span>
							<p class="dt-special">
								<?php
								if ( has_post_format( 'quote' ) ) {
									$dt_content = get_post_meta( get_the_ID(), '_format_quote_source_name', true );
									if ( ! empty( $dt_content ) ): echo sanitize_text_field( $dt_content ); endif;
								}
								else {
									$dt_content = get_post_meta( get_the_ID(), '_format_link_url', true );
									if ( ! empty( $dt_content ) ):
										echo '<a href="'. esc_url( get_permalink() ) .'">'. sanitize_text_field( $dt_content ) .'</a>';
									endif;
								}
								?>
							</p>
							<?php
							if ( has_post_format( 'quote' ) ):
								$quote_author = get_post_meta( get_the_ID(), '_format_quote_source_url', true );
								if ( ! empty( $quote_author ) ):
									echo '<div class="author-quote"><span>' . sanitize_text_field( $quote_author ) . '</span></div>';
								endif;
							endif; ?>
						</div>
						<?php if ( has_post_format( 'quote' ) ): ?></a><?php endif; ?>
				</div>
			</div>

		<?php elseif ( has_post_format( 'gallery' ) ) : ?>

			<?php $images = get_post_meta( get_the_ID(), '_format_gallery_images', true ); ?>

			<?php if ( $images ) :
				$autoplay = 'yes' != $atts['std_dis_at_gallery'] ? 'true' : 'false';
				?>
				<div class="standard-post-image">
					<div class="penci-owl-carousel penci-owl-carousel-slider penci-nav-visible" data-auto="<?php echo $autoplay; ?>">
						<?php foreach ( $images as $image ) : ?>

							<?php $the_image = wp_get_attachment_image_src( $image, 'penci-full-thumb' ); ?>
							<?php $the_caption = get_post_field( 'post_excerpt', $image );
							$image_alt = penci_get_image_alt( $image, get_the_ID() );
							$image_title_html = penci_get_image_title( $image );
							?>
							<figure class="penci-gallery-images" alt="<?php the_title(); ?>"<?php if ($the_caption) : ?> title="<?php echo esc_attr( $the_caption ); ?>"<?php endif; ?>>
								<img src="<?php echo esc_url( $the_image[0] ); ?>" alt="<?php echo $image_alt; ?>"<?php echo $image_title_html; ?>>
							</figure>

						<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>

		<?php elseif ( has_post_format( 'video' ) ) : ?>

			<div class="standard-post-image video-post">
				<?php $penci_video = get_post_meta( get_the_ID(), '_format_video_embed', true ); ?>
				<?php if ( wp_oembed_get( $penci_video ) ) : ?>
					<?php echo wp_oembed_get( $penci_video ); ?>
				<?php else : ?>
					<?php echo $penci_video; ?>
				<?php endif; ?>
			</div>

		<?php elseif ( has_post_format( 'audio' ) ) : ?>

			<div class="standard-post-image audio<?php if ( ! has_post_thumbnail() ) : echo ' no-thumbnail'; endif; ?>">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php if( ! get_theme_mod( 'penci_disable_lazyload_layout' ) ) { ?>
						<a <?php if( 'yes' == $standard_thumb_crop ): ?> class="penci-image-holder penci-lazy" data-src="<?php echo penci_get_featured_image_size( get_the_ID(), 'penci-full-thumb' ); ?>"<?php endif; ?> href="<?php the_permalink() ?>">
							<?php if( 'yes' != $standard_thumb_crop ): ?><img class="attachment-penci-full-thumb size-penci-full-thumb penci-lazy wp-post-image" src="<?php echo get_template_directory_uri() . '/images/penci2-holder.png'; ?>" alt="<?php echo $thumb_alt; ?>"<?php echo $thumb_title_html; ?> data-src="<?php echo penci_get_featured_image_size( get_the_ID(), 'penci-full-thumb' ); ?>"><?php endif; ?>
						</a>
					<?php } else { ?>
						<a <?php if( 'yes' == $standard_thumb_crop ): ?> class="penci-image-holder" style="background-image: url('<?php echo penci_get_featured_image_size( get_the_ID(), 'penci-full-thumb' ); ?>');"<?php endif; ?> href="<?php the_permalink() ?>">
							<?php if( 'yes' != $standard_thumb_crop ): ?><?php the_post_thumbnail( 'penci-full-thumb' ); ?><?php endif; ?>
						</a>
					<?php } ?>
				<?php endif; ?>
				<div class="audio-iframe">
					<?php $penci_audio = get_post_meta( get_the_ID(), '_format_audio_embed', true );
					$penci_audio_str = substr( $penci_audio, -4 );
					?>
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
				<div class="standard-post-image">
					<?php if( ! get_theme_mod( 'penci_disable_lazyload_layout' ) ) { ?>
						<a <?php if( 'yes' == $standard_thumb_crop ): ?> class="penci-image-holder penci-lazy" data-src="<?php echo penci_get_featured_image_size( get_the_ID(), 'penci-full-thumb' ); ?>"<?php endif; ?> href="<?php the_permalink() ?>">
							<?php if( 'yes' != $standard_thumb_crop ): ?><img class="attachment-penci-full-thumb size-penci-full-thumb penci-lazy wp-post-image" src="<?php echo get_template_directory_uri() . '/images/penci2-holder.png'; ?>" alt="<?php echo $thumb_alt; ?>"<?php echo $thumb_title_html; ?> data-src="<?php echo penci_get_featured_image_size( get_the_ID(), 'penci-full-thumb' ); ?>"><?php endif; ?>
						</a>
					<?php } else { ?>
						<a <?php if( 'yes' == $standard_thumb_crop ): ?> class="penci-image-holder" style="background-image: url('<?php echo penci_get_featured_image_size( get_the_ID(), 'penci-full-thumb' ); ?>');"<?php endif; ?> href="<?php the_permalink() ?>">
							<?php if( 'yes' != $standard_thumb_crop ): ?><?php the_post_thumbnail( 'penci-full-thumb' ); ?><?php endif; ?>
						</a>
					<?php } ?>
				</div>
			<?php endif; ?>

		<?php endif; /* End Thumbnail */ ?>
	<?php endif; ?>

	<div class="header-standard<?php if( 'yes' == $atts['standard_meta_overlay'] ): echo ' standard-overlay-meta'; endif; ?>">
		<?php if ( 'yes' != $standard_cat ) : ?>
			<div class="penci-standard-cat"><span class="cat"><?php penci_category( '' ); ?></span></div>
		<?php endif; ?>

		<h2 class="penci-entry-title entry-title entry-title"><a href="<?php the_permalink(); ?>"><?php penci_trim_post_title( get_the_ID(), $standard_title_length ); ?></a></h2>
		<?php penci_soledad_meta_schema(); ?>
		<?php if ( 'yes' != $standard_author ) : ?>
			<div class="penci-meta-author author-post byline"><span class="author vcard"><?php echo penci_get_setting( 'penci_trans_written_by' ); ?> <a class="url fn n" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></span></div>
		<?php endif; ?>
	</div>

	<div class="standard-content">
		<div class="standard-main-content entry-content">
			<div class="post-entry standard-post-entry classic-post-entry <?php echo 'blockquote-'. $block_style; ?>">
				<?php if( 'yes' == $standard_auto_excerpt ) { ?>
					<?php penci_the_excerpt( $standard_excerpt_length ); ?>
					<div class="penci-more-link<?php if( 'yes' == $atts['std_continue_btn'] ): echo ' penci-more-link-button'; endif; ?>"><a href="<?php the_permalink(); ?>" class="more-link"><?php echo penci_get_setting( 'penci_trans_continue_reading' ); ?></a></div>
				<?php } else { ?>
					<?php the_content( penci_get_setting( 'penci_trans_continue_reading' ) ); ?>
					<?php wp_link_pages(); ?>
				<?php } ?>
			</div>
		</div>

		<?php if ( 'yes' != $standard_share_box || 'yes' != $standard_date || 'yes' != $standard_comment || 'yes' == $standard_viewscount ) : ?>
			<div class="penci-post-box-meta<?php if( 'yes' == $standard_share_box || ( 'yes' == $standard_date && 'yes' == $standard_comment && 'yes' != $standard_viewscount ) ): echo ' center-inner'; endif; ?>">
				<?php if ( 'yes' != $standard_date || 'yes' != $standard_comment || 'yes' == $standard_comment ) : ?>
					<div class="penci-box-meta">
						<?php if ( 'yes' != $standard_date ) : ?>
							<span><?php penci_fawesome_icon('far fa-clock'); ?><?php penci_soledad_time_link(); ?></span>
						<?php endif; ?>
						<?php if ( 'yes' != $standard_comment ) : ?>
							<span><a href="<?php comments_link(); ?> "><?php penci_fawesome_icon('far fa-comment'); ?><?php comments_number( '0 ' . penci_get_setting( 'penci_trans_comment' ), '1 '. penci_get_setting( 'penci_trans_comment' ), '% ' . penci_get_setting( 'penci_trans_comments' ) ); ?></a></span>
						<?php endif; ?>
						<?php
						if ( 'yes' == $standard_viewscount ) {
							echo '<span>';
							echo penci_get_post_views( get_the_ID() );
							echo ' ' . penci_get_setting( 'penci_trans_countviews' );
							echo '</span>';
						}
						?>
					</div>
				<?php endif; ?>
				<?php if ( 'yes' != $standard_share_box ) : ?>
					<div class="penci-post-share-box">
						<?php echo penci_getPostLikeLink( get_the_ID() ); ?>
						<?php penci_soledad_social_share( );  ?>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>

</article>