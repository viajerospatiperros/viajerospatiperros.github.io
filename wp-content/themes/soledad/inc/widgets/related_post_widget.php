<?php
/**
 * Lastest post widget
 * Get recent posts and display in widget
 *
 * @package Wordpress
 * @since 1.0
 */

add_action( 'widgets_init', 'penci_related_news_load_widget' );

function penci_related_news_load_widget() {
	register_widget( 'penci_related_news_widget' );
}

if( ! class_exists( 'penci_related_news_widget' ) ) {
	class penci_related_news_widget extends WP_Widget {

		/**
		 * Widget setup.
		 */
		function __construct() {
			/* Widget settings. */
			$widget_ops = array( 'classname' => 'penci_related_news_widget', 'description' => esc_html__('A widget that displays your related posts based on currently viewing posts. Note that this widget just appears on single post pages only.', 'soledad') );

			/* Widget control settings. */
			$control_ops = array( 'id_base' => 'penci_related_news_widget' );

			/* Create the widget. */
			global $wp_version;
			if( 4.3 > $wp_version ) {
				$this->WP_Widget( 'penci_related_news_widget', esc_html__('.Soledad Related Posts', 'soledad'), $widget_ops, $control_ops );
			} else {
				parent::__construct( 'penci_related_news_widget', esc_html__( '.Soledad Related Posts', 'soledad' ), $widget_ops, $control_ops );
			}
		}

		/**
		 * How to display the widget on the screen.
		 */
		function widget( $args, $instance ) {
			extract( $args );

			/* Our variables from the widget settings. */
			$title       = apply_filters( 'widget_title', $instance['title'] );
			$type      = isset( $instance['type'] ) ? $instance['type'] : 'categories';
			$orderby      = isset( $instance['orderby'] ) ? $instance['orderby'] : 'date';
			$order      = isset( $instance['order'] ) ? $instance['order'] : 'DESC';
			$number      = isset( $instance['number'] ) ? $instance['number'] : 5;
			$title_length      = isset( $instance['title_length'] ) ? $instance['title_length'] : '';
			$featured    = isset( $instance['featured'] ) ? $instance['featured'] : false;
			$twocolumn   = isset( $instance['twocolumn'] ) ? $instance['twocolumn'] : false;
			$featured2   = isset( $instance['featured2'] ) ? $instance['featured2'] : false;
			$allfeatured = isset( $instance['allfeatured'] ) ? $instance['allfeatured'] : false;
			$thumbright  = isset( $instance['thumbright'] ) ? $instance['thumbright'] : false;
			$postdate    = isset( $instance['postdate'] ) ? $instance['postdate'] : false;
			$icon        = isset( $instance['icon'] ) ? $instance['icon'] : false;
			$image_type  = isset( $instance['image_type'] ) ? $instance['image_type'] : 'default';

			$args = penci_get_query_related_posts( get_the_ID(), $type, $orderby, $order, $number );
			
			if( is_singular( 'post' ) && ! empty( $args ) ) {

				$loop = new WP_Query($args);
				if ($loop->have_posts()) :

					/* Before widget (defined by themes). */
					echo ent2ncr( $before_widget );

					/* Display the widget title if one was input (before and after defined by themes). */
					if ( $title )
						echo ent2ncr( $before_title . $title . $after_title );
					
					$rand = rand( 1000, 10000);
					?>
					<ul id="penci-relatedwg-<?php echo sanitize_text_field( $rand ); ?>" class="side-newsfeed<?php if( $twocolumn && ! $allfeatured ): echo ' penci-feed-2columns'; if( $featured ){ echo ' penci-2columns-featured'; } else { echo ' penci-2columns-feed'; } endif;?>">
						<?php $num = 1; while ($loop->have_posts()) : $loop->the_post(); ?>
							<li class="penci-feed<?php if( ( ( $num == 1 ) && $featured ) || $allfeatured ): echo ' featured-news'; if( $featured2 ): echo ' featured-news2'; endif; endif;  ?><?php if( $allfeatured ): echo ' all-featured-news'; endif;  ?>">
								<div class="side-item">

									<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) : ?>
										<div class="side-image<?php if( $thumbright ): echo ' thumbnail-right'; endif;  ?>">
											<?php
											/* Display Review Piechart  */
											if( function_exists('penci_display_piechart_review_html') ) {
												$size_pie = 'small';
												if( ( ( $num == 1 ) && $featured ) || $allfeatured ): $size_pie = 'normal'; endif;
												penci_display_piechart_review_html( get_the_ID(), $size_pie );
											}
											$thumb = penci_featured_images_size('small');
											if( ( ( $num == 1 ) && $featured ) || $allfeatured ): $thumb = penci_featured_images_size(); endif;
											?>
											<?php if( ! get_theme_mod( 'penci_disable_lazyload_layout' ) ) { ?>
												<a class="penci-image-holder penci-lazy<?php if( ( ( $num == 1 ) && $featured ) || $allfeatured ){ echo ''; } else { echo ' small-fix-size'; } ?>" rel="bookmark" data-src="<?php echo penci_get_featured_image_size( get_the_ID(), $thumb ); ?>" href="<?php the_permalink(); ?>" title="<?php echo wp_strip_all_tags( get_the_title() ); ?>"></a>
											<?php } else { ?>
												<a class="penci-image-holder<?php if( ( ( $num == 1 ) && $featured ) || $allfeatured ){ echo ''; } else { echo ' small-fix-size'; } ?>" rel="bookmark" style="background-image: url('<?php echo penci_get_featured_image_size( get_the_ID(), $thumb ); ?>');" href="<?php the_permalink(); ?>" title="<?php echo wp_strip_all_tags( get_the_title() ); ?>"></a>
											<?php }?>

											<?php if( $icon ): ?>
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
									<?php endif; ?>
									<div class="side-item-text">
										<h4 class="side-title-post">
											<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
												<?php
												if( ! $title_length || ! is_numeric( $title_length ) ){
													if( $featured2 && ( ( ( $num == 1 ) && $featured ) || $allfeatured ) ) { echo wp_trim_words( wp_strip_all_tags( get_the_title() ), 12, '...' ); } else { the_title(); } 
												} else {
													echo wp_trim_words( wp_strip_all_tags( get_the_title() ), $title_length, '...' );
												}
												?>
											</a>
										</h4>
										<?php if( ! $postdate ): ?>
											<span class="side-item-meta"><?php penci_soledad_time_link(); ?></span>
										<?php endif; ?>
									</div>
								</div>
							</li>
							<?php $num++; endwhile; ?>
					</ul>

				<?php
				if( $image_type == 'horizontal' ){
					echo '<style>#penci-relatedwg-' . sanitize_text_field( $rand ) . ' .penci-image-holder:before{ padding-top: 66.6667%; }</style>';
				} elseif( $image_type == 'square' ) {
					echo '<style>#penci-relatedwg-' . sanitize_text_field( $rand ) . ' .penci-image-holder:before{ padding-top: 100%; }</style>';
				} elseif( $image_type == 'vertical' ) {
					echo '<style>#penci-relatedwg-' . sanitize_text_field( $rand ) . ' .penci-image-holder:before{ padding-top: 135.4%; }</style>';
				}

				/* After widget (defined by themes). */
				echo ent2ncr( $after_widget );
				
				wp_reset_postdata();
				endif;
			
			}
		}

		/**
		 * Update the widget settings.
		 */
		function update( $new_instance, $old_instance ) {
			$instance = $old_instance;

			/* Strip tags for title and name to remove HTML (important for text inputs). */
			$instance['title']       = strip_tags( $new_instance['title'] );
			$instance['type']      = strip_tags( $new_instance['type'] );
			$instance['orderby']      = strip_tags( $new_instance['orderby'] );
			$instance['order']      = strip_tags( $new_instance['order'] );
			$instance['number']      = strip_tags( $new_instance['number'] );
			$instance['title_length']      = strip_tags( $new_instance['title_length'] );
			$instance['featured']    = strip_tags( $new_instance['featured'] );
			$instance['twocolumn']   = strip_tags( $new_instance['twocolumn'] );
			$instance['featured2']   = strip_tags( $new_instance['featured2'] );
			$instance['allfeatured'] = strip_tags( $new_instance['allfeatured'] );
			$instance['thumbright']  = strip_tags( $new_instance['thumbright'] );
			$instance['postdate']    = strip_tags( $new_instance['postdate'] );
			$instance['icon']        = strip_tags( $new_instance['icon'] );
			$instance['image_type']        = strip_tags( $new_instance['image_type'] );

			return $instance;
		}


		function form( $instance ) {

			/* Set up some default widget settings. */
			$defaults = array( 'title' => esc_html__('Related Posts', 'soledad'), 'image_type' => 'default', 'type' => 'categories', 'orderby' => 'date', 'order' => 'DESC', 'title_length' => '', 'number' => 5, 'offset' => '', 'featured' => false, 'allfeatured' => false, 'thumbright' => false, 'twocolumn' => false, 'featured2' => false, 'postdate' => false, 'icon' => false );
			$instance = wp_parse_args( (array) $instance, $defaults ); ?>

			<br>
			<p><span style="color: #ff0000;">Note Important:</span> This widget just appears on single post pages only.</p>
			
			<!-- Widget Title: Text Input -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e('Title:', 'soledad'); ?></label>
				<input  type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo sanitize_text_field( $instance['title'] ); ?>"  />
			</p>

			<!-- Display related posts by -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id('type') ); ?>"><?php esc_html_e('Display Related Posts By:', 'soledad'); ?></label>
				<select id="<?php echo esc_attr( $this->get_field_id('type') ); ?>" name="<?php echo esc_attr( $this->get_field_name('type') ); ?>" class="widefat type" style="width:100%;">
					<option value='categories' <?php if ('categories' == $instance['type']) echo 'selected="selected"'; ?>><?php esc_html_e('Categories', 'soledad'); ?></option>
					<option value='tags' <?php if ('tags' == $instance['type']) echo 'selected="selected"'; ?>><?php esc_html_e('Tags', 'soledad'); ?></option>
					<option value='primary_cat' <?php if ('primary_cat' == $instance['type']) echo 'selected="selected"'; ?>><?php esc_html_e('Primary Category from Yoast SEO Plugin', 'soledad'); ?></option>
				</select>
			</p>
			
			<!-- Order by -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id('orderby') ); ?>"><?php esc_html_e('Order By:', 'soledad'); ?></label>
				<select id="<?php echo esc_attr( $this->get_field_id('orderby') ); ?>" name="<?php echo esc_attr( $this->get_field_name('orderby') ); ?>" class="widefat orderby" style="width:100%;">
					<option value='date' <?php if ('date' == $instance['orderby']) echo 'selected="selected"'; ?>><?php esc_html_e('Published Date', 'soledad'); ?></option>
					<option value='ID' <?php if ('ID' == $instance['orderby']) echo 'selected="selected"'; ?>><?php esc_html_e('Posts ID', 'soledad'); ?></option>
					<option value='title' <?php if ('title' == $instance['orderby']) echo 'selected="selected"'; ?>><?php esc_html_e('Posts Titles', 'soledad'); ?></option>
					<option value='modified' <?php if ('modified' == $instance['orderby']) echo 'selected="selected"'; ?>><?php esc_html_e('Modified Date', 'soledad'); ?></option>
					<option value='comment_count' <?php if ('comment_count' == $instance['orderby']) echo 'selected="selected"'; ?>><?php esc_html_e('Comment Count', 'soledad'); ?></option>
					<option value='rand' <?php if ('rand' == $instance['orderby']) echo 'selected="selected"'; ?>><?php esc_html_e('Random', 'soledad'); ?></option>
				</select>
			</p>
			
			<!-- Order -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id('order') ); ?>"><?php esc_html_e('Select Order Type:', 'soledad'); ?></label>
				<select id="<?php echo esc_attr( $this->get_field_id('order') ); ?>" name="<?php echo esc_attr( $this->get_field_name('order') ); ?>" class="widefat orderby" style="width:100%;">
					<option value='DESC' <?php if ('DESC' == $instance['order']) echo 'selected="selected"'; ?>><?php esc_html_e('DESC ( Descending Order )', 'soledad'); ?></option>
					<option value='ASC' <?php if ('ASC' == $instance['order']) echo 'selected="selected"'; ?>><?php esc_html_e('ASC ( Ascending Order )', 'soledad'); ?></option>
				</select>
			</p>
			
			<!-- Image Size -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id('image_type') ); ?>"><?php esc_html_e('Featured Images Type:', 'soledad'); ?></label>
				<select id="<?php echo esc_attr( $this->get_field_id('image_type') ); ?>" name="<?php echo esc_attr( $this->get_field_name('image_type') ); ?>" class="widefat image_type" style="width:100%;">
					<option value='default' <?php if ('default' == $instance['image_type']) echo 'selected="selected"'; ?>><?php esc_html_e('Default ( follow on Customize )', 'soledad'); ?></option>
					<option value='horizontal' <?php if ('horizontal' == $instance['image_type']) echo 'selected="selected"'; ?>><?php esc_html_e('Horizontal Size', 'soledad'); ?></option>
					<option value='square' <?php if ('square' == $instance['image_type']) echo 'selected="selected"'; ?>><?php esc_html_e('Square Size', 'soledad'); ?></option>
					<option value='vertical' <?php if ('vertical' == $instance['image_type']) echo 'selected="selected"'; ?>><?php esc_html_e('Vertical Size', 'soledad'); ?></option>
				</select>
			</p>

			<!-- Number of posts -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>"><?php esc_html_e('Number of posts to show:', 'soledad'); ?></label>
				<input  type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number' ) ); ?>" value="<?php echo esc_attr( $instance['number'] ); ?>" size="3" />
			</p>
			
			<!-- Custom trim post titles -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'title_length' ) ); ?>"><?php esc_html_e('Custom words length for post titles:', 'soledad'); ?></label>
				<input  type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title_length' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title_length' ) ); ?>" value="<?php echo esc_attr( $instance['title_length'] ); ?>" size="3" />
				<span class="description" style="display: block; padding: 0;font-size: 12px;">If your post titles is too long - You can use this option for trim it. Fill number value here.</span>
			</p>

			<!-- Display thumbnail right -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'thumbright' ) ); ?>"><?php esc_html_e('Display thumbnail on right?:','soledad'); ?></label>
				<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'thumbright' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'thumbright' ) ); ?>" <?php checked( (bool) $instance['thumbright'], true ); ?> />
			</p>

			<!-- 2 Columns -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'twocolumn' ) ); ?>"><?php esc_html_e('Display on 2 columns?:','soledad'); ?></label>
				<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'twocolumn' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'twocolumn' ) ); ?>" <?php checked( (bool) $instance['twocolumn'], true ); ?> />
				<span class="description" style="display: block; padding: 0;font-size: 12px;">If you use 2 columns option, it will ignore option display thumbnail on right.</span>
			</p>

			<!-- Display latest post featured -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'featured' ) ); ?>"><?php esc_html_e('Display 1st post featured?:','soledad'); ?></label>
				<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'featured' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'featured' ) ); ?>" <?php checked( (bool) $instance['featured'], true ); ?> />
			</p>

			<!-- Display latest post featured style 2 -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'featured2' ) ); ?>"><?php esc_html_e('Display featured post style 2?:','soledad'); ?></label>
				<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'featured2' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'featured2' ) ); ?>" <?php checked( (bool) $instance['featured2'], true ); ?> />
			</p>

			<!-- Display big post -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'allfeatured' ) ); ?>"><?php esc_html_e('Display all post featured?:','soledad'); ?></label>
				<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'allfeatured' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'allfeatured' ) ); ?>" <?php checked( (bool) $instance['allfeatured'], true ); ?> />
				<span class="description" style="display: block; padding: 0;font-size: 12px;">If you use all post featured option, it will ignore option display thumbnail on right & 2 columns.</span>
			</p>

			<!-- Hide post date -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'postdate' ) ); ?>"><?php esc_html_e('Hide post date?:','soledad'); ?></label>
				<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'postdate' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'postdate' ) ); ?>" <?php checked( (bool) $instance['postdate'], true ); ?> />
			</p>

			<!-- Enable post format icon -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'icon' ) ); ?>"><?php esc_html_e('Enable icon post format?:','soledad'); ?></label>
				<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'icon' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'icon' ) ); ?>" <?php checked( (bool) $instance['icon'], true ); ?> />
			</p>

			<?php
		}
	}
}
?>