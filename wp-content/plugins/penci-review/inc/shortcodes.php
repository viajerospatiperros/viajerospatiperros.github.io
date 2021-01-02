<?php
if( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* Don't run the shortcode inside dashboard */
if( is_admin() ){
	return;
}

/**
 * Penci review Shortcode
 * Use penci_review to display the review on single a post
 */
function penci_review_shortcode_function( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'id' => ''
	), $atts ) );

	$review_id = get_the_ID();
	if ( ! empty( $id ) && is_numeric( $id ) ) {
		$review_id = $id;
	}

	// Get review meta
	//$review_type = get_theme_mod('penci_review_type') ? get_theme_mod('penci_review_type') : 'Product';
	//$review_edit = get_post_meta( $review_id, 'penci_review_etype', true );
	//if( $review_edit ) { $review_type = $review_edit; }
	$review_title = get_post_meta( $review_id, 'penci_review_title', true );
	$review_des = get_post_meta( $review_id, 'penci_review_des', true );
	$review_1 = get_post_meta( $review_id, 'penci_review_1', true );
	$review_1num = get_post_meta( $review_id, 'penci_review_1_num', true );
	$review_2 = get_post_meta( $review_id, 'penci_review_2', true );
	$review_2num = get_post_meta( $review_id, 'penci_review_2_num', true );
	$review_3 = get_post_meta( $review_id, 'penci_review_3', true );
	$review_3num = get_post_meta( $review_id, 'penci_review_3_num', true );
	$review_4 = get_post_meta( $review_id, 'penci_review_4', true );
	$review_4num = get_post_meta( $review_id, 'penci_review_4_num', true );
	$review_5 = get_post_meta( $review_id, 'penci_review_5', true );
	$review_5num = get_post_meta( $review_id, 'penci_review_5_num', true );
	$review_good = get_post_meta( $review_id, 'penci_review_good', true );
	$review_bad = get_post_meta( $review_id, 'penci_review_bad', true );

	// Turn review good and bad into an array
	$review_good_array = '';
	$review_bad_array = '';
	if( $review_good ):
		$review_good_array = preg_split( '/\r\n|[\r\n]/', $review_good );
	endif;
	if( $review_bad ):
		$review_bad_array = preg_split( '/\r\n|[\r\n]/', $review_bad );
	endif;

	// Global score and based number point
	$total_score = 0;
	$total_num = 0;

	$review_meta        = get_post_meta( $review_id, 'penci_review_meta', true );
	$review_ct_image    = isset( $review_meta['penci_review_ct_image'] ) ? $review_meta['penci_review_ct_image'] : '';
	$review_address     = isset( $review_meta['penci_review_address'] ) ? $review_meta['penci_review_address'] : '';
	$review_phone       = isset( $review_meta['penci_review_phone'] ) ? $review_meta['penci_review_phone'] : '';
	$review_website     = isset( $review_meta['penci_review_website'] ) ? $review_meta['penci_review_website'] : '';
	$review_price       = isset( $review_meta['penci_review_price'] ) ? $review_meta['penci_review_price'] : '';
	$review_linkbuy     = isset( $review_meta['penci_review_linkbuy'] ) ? $review_meta['penci_review_linkbuy'] : '';
	$review_textbuy     = isset( $review_meta['penci_review_textbuy'] ) ? $review_meta['penci_review_textbuy'] : '';
	$schema_markup_type = isset( $review_meta['penci_review_schema_markup'] ) ? $review_meta['penci_review_schema_markup'] : '';
	$img_size_pre       = isset( $review_meta['penci_review_img_size'] ) ? $review_meta['penci_review_img_size'] : '';

	$schema_options_val = get_post_meta( $review_id, 'penci_review_schema_options', true );
	$schema_type_val    = isset( $schema_options_val[ $schema_markup_type ] ) ? $schema_options_val[ $schema_markup_type ] : array();

	// Hide featured image
	$hide_img     = penci_predata_customize_pmeta( $review_meta, 'penci_rv_hide_featured_img', 'penci_rv_hide_featured_img' );
	$hide_schema   = penci_predata_customize_pmeta( $review_meta, 'penci_review_hide_schema', 'penci_rv_hide_schema'  );
	ob_start(); ?>

	<aside class="wrapper-penci-review">
		<div class="penci-review">
			<div class="penci-review-container penci-review-count">
				<?php
				$img_size = get_theme_mod( 'penci_review_img_size', 'thumbnail' );
				if ( $img_size_pre ) {
					$img_size = $img_size_pre;
				}

				$url_review_ct_image = wp_get_attachment_image_url( $review_ct_image, $img_size );
				if ( ! $url_review_ct_image && has_post_thumbnail( $review_id ) ) {
					$url_review_ct_image = get_the_post_thumbnail_url( $review_id, $img_size );
				}

				if ( $url_review_ct_image && ! $hide_img ): ?>
				<div class="penci-review-thumb">
					<img src="<?php echo $url_review_ct_image; ?>" alt="<?php echo esc_attr( $review_title ); ?>"/>
				</div>
				<?php endif; ?>
				<?php if ( $review_title ) : ?>
					<h4 class="penci-review-title">
						<a href="<?php the_permalink(); ?>">
							<span><?php echo $review_title; ?></span>
						</a>
					</h4>
				<?php endif; ?>
				<div class="penci-review-metas">
					<?php
					if( $review_price && ! get_theme_mod( 'penci_review_hide_price' ) ){
						$price_text = penci_review_tran_setting( 'penci_review_price_text' );
						echo '<div class="penci-review-meta penci-review-price"><i>' . $price_text . '</i> ' . $review_price . '</div>';
					}
					if( $review_phone && ! get_theme_mod( 'penci_review_hide_phone' ) ){
						echo '<div class="penci-review-meta penci-review-phone"><i class="fa fa-phone"></i><a href="tel:' . $review_phone . '">' . $review_phone . '</a></div>';
					}
					if( $review_address && ! get_theme_mod( 'penci_review_hide_address' ) ){
						echo '<div class="penci-review-meta penci-review-address"><i class="fa fa-map-marker"></i>' . $review_address . '</div>';
					}
					if( $review_website && ! get_theme_mod( 'penci_review_hide_website' ) ){
						echo '<div class="penci-review-meta penci-review-website"><i class="fa fa-globe"></i><a href="' . esc_url( $review_website ) . '" target="_blank">' . $review_website . '</a></div>';
					}
					if ( $review_textbuy && ! get_theme_mod( 'penci_review_hide_btnbuy' ) ) {
						$prefix = $suffix = 'div';

						if ( $review_linkbuy ) {
							$prefix = 'a href="' . esc_url( $review_linkbuy ) . '" ';
							$suffix = 'a';
						}
						echo '<div class="penci-review-btnbuyw"><' . $prefix . ' class="penci-review-btnbuy button" target="_blank">' . $review_textbuy . '</' . $suffix . '></div>';
					}
					?>
				</div>
				<?php if( ! $hide_schema ): ?>
					<div class="penci-review-schemas">
						<?php
						$schema_fields = Penci_Review_Schema_Markup::get_schema_types( $schema_markup_type );
						if( $schema_fields ){
							foreach ( $schema_fields as $schema_field ){
								if( isset( $schema_type_val[$schema_field['name']] ) && $schema_type_val[$schema_field['name']] ){
									echo '<div class="penci-review-schema"><strong>' . $schema_field['label'] . ' : </strong>' . $schema_type_val[$schema_field['name']] . '</div>';
								}
							}
						}
						?>
					</div>
				<?php endif; ?>
				<?php if ( $review_des ) : ?>
					<div class="penci-review-desc"><p><?php echo $review_des; ?></p></div>
				<?php endif; ?>
				<span class="penci-review-hauthor" style="display: none !important;"><span><?php bloginfo( 'name' ); ?></span></span>
				<ul class="penci-review-number">
					<?php if( $review_1 && $review_1num ): ?>
						<li>
							<div class="penci-review-text">
								<div class="penci-review-point"><?php echo $review_1; ?></div>
								<div class="penci-review-score"><?php echo $review_1num; ?></div>
							</div>
							<div class="penci-review-process">
								<span class="penci-process-run" data-width="<?php echo number_format( $review_1num, 1, '.', '' ); ?>"></span>
							</div>
						</li>
					<?php endif; ?>

					<?php if( $review_2 && $review_2num ): ?>
						<li>
							<div class="penci-review-text">
								<div class="penci-review-point"><?php echo $review_2; ?></div>
								<div class="penci-review-score"><?php echo $review_2num; ?></div>
							</div>
							<div class="penci-review-process">
								<span class="penci-process-run" data-width="<?php echo number_format( $review_2num, 1, '.', '' ); ?>"></span>
							</div>
						</li>
					<?php endif; ?>

					<?php if( $review_3 && $review_3num ): ?>
						<li>
							<div class="penci-review-text">
								<div class="penci-review-point"><?php echo $review_3; ?></div>
								<div class="penci-review-score"><?php echo $review_3num; ?></div>
							</div>
							<div class="penci-review-process">
								<span class="penci-process-run" data-width="<?php echo number_format( $review_3num, 1, '.', '' ); ?>"></span>
							</div>
						</li>
					<?php endif; ?>

					<?php if( $review_4 && $review_4num ): ?>
						<li>
							<div class="penci-review-text">
								<div class="penci-review-point"><?php echo $review_4; ?></div>
								<div class="penci-review-score"><?php echo $review_4num; ?></div>
							</div>
							<div class="penci-review-process">
								<span class="penci-process-run" data-width="<?php echo number_format( $review_4num, 1, '.', '' ); ?>"></span>
							</div>
						</li>
					<?php endif; ?>

					<?php if( $review_5 && $review_5num ): ?>
						<li>
							<div class="penci-review-text">
								<div class="penci-review-point"><?php echo $review_5; ?></div>
								<div class="penci-review-score"><?php echo $review_5num; ?></div>
							</div>
							<div class="penci-review-process">
								<span class="penci-process-run" data-width="<?php echo number_format( $review_5num, 1, '.', '' ); ?>"></span>
							</div>
						</li>
					<?php endif; ?>
				</ul>
			</div>
			<div class="penci-review-container penci-review-point">
				<div class="penci-review-row">
					<?php if ( $review_good_array || $review_bad_array ) : ?>
						<div class="penci-review-stuff">
							<div class="penci-review-row<?php if ( ! $review_good_array || ! $review_bad_array ) : echo ' full-w'; endif; ?>">
							<?php if ( $review_good_array ) : ?>
								<div class="penci-review-good">
									<h5 class="penci-review-title"><?php if ( get_theme_mod( 'penci_review_good_text' ) ) { echo do_shortcode( get_theme_mod( 'penci_review_good_text' ) );} else { esc_html_e( 'The Goods', 'soledad' ); } ?></h5>
									<ul>
										<?php foreach ( $review_good_array as $good ) : ?>
											<?php if ( $good ) : ?>
												<li><?php echo $good; ?></li>
											<?php endif; ?>
										<?php endforeach; ?>
									</ul>
								</div>
							<?php endif; ?>
							<?php if ( $review_bad_array ) : ?>
								<div class="penci-review-good penci-review-bad">
									<h5 class="penci-review-title"><?php if ( get_theme_mod( 'penci_review_bad_text' ) ) { echo do_shortcode( get_theme_mod( 'penci_review_bad_text' ) );} else { esc_html_e( 'The Bads', 'soledad' ); } ?></h5>
									<ul>
										<?php foreach ( $review_bad_array as $bad ) : ?>
											<?php if ( $bad ) : ?>
												<li><?php echo $bad; ?></li>
											<?php endif; ?>
										<?php endforeach; ?>
									</ul>
								</div>
							<?php endif; ?>
							</div>
						</div>
					<?php endif; ?>
					<div class="penci-review-average<?php if ( ! $review_good_array && ! $review_bad_array ) : echo ' full-w'; endif; ?>">
						<div class="penci-review-score-total<?php if( get_theme_mod( 'penci_review_hide_average' ) ): echo ' only-score'; endif; ?>">
							<div class="penci-review-score-num">
								<?php $total_average = penci_get_review_average_score( $review_id ); echo number_format( $total_average, 1, '.', '' ); ?>
								<span style="display: none !important;"><?php echo ( $total_average/2 ); ?></span>
								<span style="display: none !important;">5</span>
							</div>
							<?php if( ! get_theme_mod( 'penci_review_hide_average' ) ): ?>
							<span><?php if ( get_theme_mod( 'penci_review_average_text' ) ) { echo do_shortcode( get_theme_mod( 'penci_review_average_text' ) );} else { esc_html_e( 'Average Score', 'soledad' ); } ?></span>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</aside>
	<?php
	return ob_get_clean();
}

add_shortcode( 'penci_review', 'penci_review_shortcode_function' );
