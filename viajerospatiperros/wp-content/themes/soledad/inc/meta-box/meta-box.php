<?php
/**
 * Add custom meta box for pages
 * Add custom sidebar for page go here
 * Use add_meta_box() function to hook it
 *
 * @package Wordpress
 * @since 1.0
 *
 */

require get_template_directory() . '/inc/meta-box/meta-box-array.php';

function Penci_Add_Custom_Metabox() {
	new Penci_Add_Custom_Metabox_Class();
}

if ( is_admin() ) {
	add_action( 'load-post.php', 'Penci_Add_Custom_Metabox' );
	add_action( 'load-post-new.php', 'Penci_Add_Custom_Metabox' );
}

/**
 * The Class.
 */
class Penci_Add_Custom_Metabox_Class {

	/**
	 * Hook into the appropriate actions when the class is constructed.
	 */
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_box' ) );
		add_action( 'save_post', array( $this, 'save' ) );
	}

	/**
	 * Adds the meta box container.
	 */
	public function add_meta_box( $post_type ) {
		$post_types = array('post');     //limit meta box to certain post types
		if ( in_array( $post_type, $post_types )) {
			add_meta_box(
				'penci_custom_sidebar_page'
				,esc_html__( 'Options for This Post/Page', 'soledad' )
				,array( $this, 'render_meta_box_content' )
				,$post_type
				,'advanced'
				,'high'
			);
		}
	}

	/**
	 * Save the meta when the post is saved.
	 *
	 * @param int $post_id The ID of the post being saved.
	 */
	public function save( $post_id ) {


		/*
		 * We need to verify this came from the our screen and with proper authorization,
		 * because save_post can be triggered at other times.
		 */

		// Check if our nonce is set.
		if ( ! isset( $_POST['penci_inner_custom_box_nonce'] ) )
			return $post_id;

		$nonce = $_POST['penci_inner_custom_box_nonce'];

		// Verify that the nonce is valid.
		if ( ! wp_verify_nonce( $nonce, 'penci_inner_custom_box' ) )
			return $post_id;

		// If this is an autosave, our form has not been submitted,
		//     so we don't want to do anything.
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return $post_id;

		// Check the user's permissions.
		if ( 'page' == $_POST['post_type'] ) {

			if ( ! current_user_can( 'edit_page', $post_id ) )
				return $post_id;

		} else {

			if ( ! current_user_can( 'edit_post', $post_id ) )
				return $post_id;
		}

		// Sanitize the user input.
		$mydata = sanitize_text_field( $_POST['penci_custom_sidebar_page_field'] );
		$sidebar_left_page = sanitize_text_field( $_POST['penci_custom_sidebar_left_page_field'] );

		if ( 'post' == $_POST['post_type'] ) {
			$sidebar   = sanitize_text_field( $_POST['penci_post_sidebar_display'] );
		}

		$hide_header = $hide_footer = '';

		if ( 'page' == $_POST['post_type'] ) {
			$slider         = sanitize_text_field( $_POST['penci_page_slider_field'] );
			$featured_boxes = sanitize_text_field( $_POST['penci_page_display_featured_boxes'] );
			$pagetitle      = sanitize_text_field( $_POST['penci_page_display_title_field'] );
			$breadcrumb     = sanitize_text_field( $_POST['penci_page_breadcrumb_field'] );
			$sharebox       = sanitize_text_field( $_POST['penci_page_sharebox_field'] );
			$rev_shortcode  = sanitize_text_field( $_POST['penci_page_rev_shortcode'] );
			$hide_header    = sanitize_text_field( $_POST['penci_page_hide_header_field'] );
			$hide_footer    = sanitize_text_field( $_POST['penci_page_hide_footer_field'] );
			$page_sidebar    = sanitize_text_field( $_POST['penci_sidebar_page_pos'] );
		}



		// Update the meta field.
		update_post_meta( $post_id, 'penci_custom_sidebar_page_display', $mydata );
		update_post_meta( $post_id, 'penci_custom_sidebar_left_page_field', $sidebar_left_page );

		if ( 'post' == $_POST['post_type'] ) {
			update_post_meta( $post_id, 'penci_post_sidebar_display', $sidebar );

			if( isset( $_POST['penci_single_style'] ) ){
				update_post_meta( $post_id, 'penci_single_style', $_POST['penci_single_style'] );
			}

			if( isset( $_POST['penci_pfeatured_image_ratio'] ) ){
				update_post_meta( $post_id, 'penci_pfeatured_image_ratio', $_POST['penci_pfeatured_image_ratio'] );
			}

			if( isset( $_POST['penci_enable_jarallax_single'] ) ){
				update_post_meta( $post_id, 'penci_enable_jarallax_single', $_POST['penci_enable_jarallax_single'] );
			}
			
			if( isset( $_POST['penci_post_hide_featuimg'] ) ){
				update_post_meta( $post_id, 'penci_post_hide_featuimg', $_POST['penci_post_hide_featuimg'] );
			}
		}

		if ( 'page' == $_POST['post_type'] ) {
			update_post_meta( $post_id, 'penci_page_slider', $slider );
			update_post_meta( $post_id, 'penci_page_display_featured_boxes', $featured_boxes );
			update_post_meta( $post_id, 'penci_page_display_title', $pagetitle );
			update_post_meta( $post_id, 'penci_page_breadcrumb', $breadcrumb );
			update_post_meta( $post_id, 'penci_page_sharebox', $sharebox );
			update_post_meta( $post_id, 'penci_page_rev_shortcode', $rev_shortcode );
			update_post_meta( $post_id, 'penci_page_hide_header', $hide_header );
			update_post_meta( $post_id, 'penci_page_hide_footer', $hide_footer );
			update_post_meta( $post_id, 'penci_sidebar_page_pos', $page_sidebar );
		}
	}


	/**
	 * Render Meta Box content.
	 *
	 * @param WP_Post $post The post object.
	 */
	public function render_meta_box_content( $post ) {

		// Add an nonce field so we can check for it later.
		wp_nonce_field( 'penci_inner_custom_box', 'penci_inner_custom_box_nonce' );

		// Use get_post_meta to retrieve an existing value from the database.
		$value          = get_post_meta( $post->ID, 'penci_custom_sidebar_page_display', true );
		$value_left     = get_post_meta( $post->ID, 'penci_custom_sidebar_left_page_field', true );



		$sidebar        = get_post_meta( $post->ID, 'penci_post_sidebar_display', true );
		$slider         = get_post_meta( $post->ID, 'penci_page_slider', true );
		$featured_boxes = get_post_meta( $post->ID, 'penci_page_display_featured_boxes', true );
		$pagetitle      = get_post_meta( $post->ID, 'penci_page_display_title', true );
		$breadcrumb     = get_post_meta( $post->ID, 'penci_page_breadcrumb', true );
		$sharebox       = get_post_meta( $post->ID, 'penci_page_sharebox', true );
		$rev_shortcode  = get_post_meta( $post->ID, 'penci_page_rev_shortcode', true );
		$single_style   = get_post_meta( $post->ID, 'penci_single_style', true );
		$hide_featuimg = get_post_meta( $post->ID, 'penci_post_hide_featuimg', true );

		$hide_header           = get_post_meta( $post->ID, 'penci_page_hide_header', true );
		$hide_footer           = get_post_meta( $post->ID, 'penci_page_hide_footer', true );
		$pfeatured_image_ratio = get_post_meta( $post->ID, 'penci_pfeatured_image_ratio', true );
		$enable_parallax       = get_post_meta( $post->ID, 'penci_enable_jarallax_single', true );
		$page_sidebar          = get_post_meta( $post->ID, 'penci_sidebar_page_pos', true );
		

		// Display the form, using the current value.
		?>

		<?php if ( 'page' == get_post_type( $post->ID ) ) { ?>

			<h2 style="font-weight: 600; font-size: 14px; padding-left: 0;">Select Featured Slider/Featured Video to Display on Top of This Page?</h2>
			<p>
				<select id="penci_page_slider_field" name="penci_page_slider_field">
					<option value="">None</option>
					<option value="style-1" <?php selected( $slider, 'style-1' ); ?>>Posts Featured Slider Style 1</option>
					<option value="style-2" <?php selected( $slider, 'style-2' ); ?>>Posts Featured Slider Style 2</option>
					<option value="style-3" <?php selected( $slider, 'style-3' ); ?>>Posts Featured Slider Style 3</option>
					<option value="style-4" <?php selected( $slider, 'style-4' ); ?>>Posts Featured Slider Style 4</option>
					<option value="style-5" <?php selected( $slider, 'style-5' ); ?>>Posts Featured Slider Style 5</option>
					<option value="style-6" <?php selected( $slider, 'style-6' ); ?>>Posts Featured Slider Style 6</option>
					<option value="style-7" <?php selected( $slider, 'style-7' ); ?>>Posts Featured Slider Style 7</option>
					<option value="style-8" <?php selected( $slider, 'style-8' ); ?>>Posts Featured Slider Style 8</option>
					<option value="style-9" <?php selected( $slider, 'style-9' ); ?>>Posts Featured Slider Style 9</option>
					<option value="style-10" <?php selected( $slider, 'style-10' ); ?>>Posts Featured Slider Style 10</option>
					<option value="style-11" <?php selected( $slider, 'style-11' ); ?>>Posts Featured Slider Style 11</option>
					<option value="style-12" <?php selected( $slider, 'style-12' ); ?>>Posts Featured Slider Style 12</option>
					<option value="style-13" <?php selected( $slider, 'style-13' ); ?>>Posts Featured Slider Style 13</option>
					<option value="style-14" <?php selected( $slider, 'style-14' ); ?>>Posts Featured Slider Style 14</option>
					<option value="style-15" <?php selected( $slider, 'style-15' ); ?>>Posts Featured Slider Style 15</option>
					<option value="style-16" <?php selected( $slider, 'style-16' ); ?>>Posts Featured Slider Style 16</option>
					<option value="style-17" <?php selected( $slider, 'style-17' ); ?>>Posts Featured Slider Style 17</option>
					<option value="style-18" <?php selected( $slider, 'style-18' ); ?>>Posts Featured Slider Style 18</option>
					<option value="style-19" <?php selected( $slider, 'style-19' ); ?>>Posts Featured Slider Style 19</option>
					<option value="style-20" <?php selected( $slider, 'style-20' ); ?>>Posts Featured Slider Style 20</option>
					<option value="style-21" <?php selected( $slider, 'style-21' ); ?>>Posts Featured Slider Style 21</option>
					<option value="style-22" <?php selected( $slider, 'style-22' ); ?>>Posts Featured Slider Style 22</option>
					<option value="style-23" <?php selected( $slider, 'style-23' ); ?>>Posts Featured Slider Style 23</option>
					<option value="style-24" <?php selected( $slider, 'style-24' ); ?>>Posts Featured Slider Style 24</option>
					<option value="style-25" <?php selected( $slider, 'style-25' ); ?>>Posts Featured Slider Style 25</option>
					<option value="style-26" <?php selected( $slider, 'style-26' ); ?>>Posts Featured Slider Style 26</option>
					<option value="style-27" <?php selected( $slider, 'style-27' ); ?>>Posts Featured Slider Style 27</option>
					<option value="style-28" <?php selected( $slider, 'style-28' ); ?>>Posts Featured Slider Style 28</option>
					<option value="style-29" <?php selected( $slider, 'style-29' ); ?>>Posts Featured Slider Style 29</option>
					<option value="style-30" <?php selected( $slider, 'style-30' ); ?>>Posts Featured Slider Style 30</option>
					<option value="style-31" <?php selected( $slider, 'style-31' ); ?>>Penci Slider Style 1</option>
					<option value="style-32" <?php selected( $slider, 'style-32' ); ?>>Penci Slider Style 2</option>
					<option value="style-33" <?php selected( $slider, 'style-33' ); ?>>Revolution Slider Full Width</option>
					<option value="style-34" <?php selected( $slider, 'style-34' ); ?>>Revolution Slider In Container</option>
					<option value="style-35" <?php selected( $slider, 'style-35' ); ?>>Posts Featured Slider Style 35</option>
					<option value="style-36" <?php selected( $slider, 'style-36' ); ?>>Posts Featured Slider Style 36</option>
					<option value="style-37" <?php selected( $slider, 'style-37' ); ?>>Posts Featured Slider Style 37</option>
					<option value="style-38" <?php selected( $slider, 'style-38' ); ?>>Posts Featured Slider Style 38</option>
					<option value="video" <?php selected( $slider, 'video' ); ?>>Featured Video Background</option>
				</select>
			</p>

			<h2 style="font-weight: 600; font-size: 14px; padding-left: 0;">Revolution Slider Shortcode</h2>
			<p class="description">If you select Revolution Slider above, please fill Revolution Slider Shortcode here</p>
			<textarea style="width: 100%; height: 50px;" name="penci_page_rev_shortcode"><?php if( $rev_shortcode ): echo $rev_shortcode; endif; ?></textarea>

			<h2 style="font-weight: 600; font-size: 14px; padding-left: 0;">Display Featured Boxes?</h2>
			<p>
				<select id="penci_page_display_featured_boxes" name="penci_page_display_featured_boxes">
					<option value="">No</option>
					<option value="yes" <?php selected( $featured_boxes, 'yes' ); ?>>Yes</option>
				</select>
			</p>

			<h2 style="font-weight: 600; font-size: 14px; padding-left: 0;">Display Page Title?</h2>
			<p>
				<select id="penci_page_display_title_field" name="penci_page_display_title_field">
					<option value="">Yes</option>
					<option value="no" <?php selected( $pagetitle, 'no' ); ?>>No</option>
				</select>
			</p>

			<h2 style="font-weight: 600; font-size: 14px; padding-left: 0;">Display Breadcrumb on This Page?</h2>
			<p>
				<select id="penci_page_breadcrumb_field" name="penci_page_breadcrumb_field">
					<option value="">Yes</option>
					<option value="no" <?php selected( $breadcrumb, 'no' ); ?>>No</option>
				</select>
			</p>

			<h2 style="font-weight: 600; font-size: 14px; padding-left: 0;">Display Share Box on This Page?</h2>
			<p>
				<select id="penci_page_sharebox_field" name="penci_page_sharebox_field">
					<option value="">Yes</option>
					<option value="no" <?php selected( $sharebox, 'no' ); ?>>No</option>
				</select>
			</p>


			<h2 style="font-weight: 600; font-size: 14px; padding-left: 0;">Hide Header on This Page?</h2>
			<p>
				<select id="penci_page_hide_header_field" name="penci_page_hide_header_field">
					<option value="">No</option>
					<option value="yes" <?php selected( $hide_header, 'yes' ); ?>>Yes</option>
				</select>
			</p>

			<h2 style="font-weight: 600; font-size: 14px; padding-left: 0;">Hide Footer on This Page?</h2>
			<p>
				<select id="penci_page_hide_footer_field" name="penci_page_hide_footer_field">
					<option value="">No</option>
					<option value="yes" <?php selected( $hide_footer, 'yes' ); ?>>Yes</option>
				</select>
			</p>
			<h2 style="font-weight: 600; font-size: 14px; padding-left: 0;">Select Sidebar Position for This Page</h2>
			<p class="description"><?php esc_html_e( 'This option just apply for Page Template "Page with Sidebar" and "Page VC Builder with Sidebar"', 'soledad' ); ?></p>
			<p>
				<select id="penci_sidebar_page_pos" name="penci_sidebar_page_pos">
					<option value=""><?php esc_html_e( "Default", "soledad" ); ?></option>
					<option value="left-sidebar" <?php selected( $page_sidebar, 'left-sidebar' ); ?>><?php esc_html_e( "Left Sidebar", "soledad" ); ?></option>
					<option value="right-sidebar" <?php selected( $page_sidebar, 'right-sidebar' ); ?>><?php esc_html_e( "Right Sidebar", "soledad" ); ?></option>
					<option value="two-sidebar" <?php selected( $page_sidebar, 'two-sidebar' ); ?>><?php esc_html_e( "Two Sidebar", "soledad" ); ?></option>
				</select>
			</p>
		<?php } ?>

		<?php if ( 'post' == get_post_type( $post->ID ) ) { ?>
			<h2 style="font-weight: 600; font-size: 14px; padding-left: 0;">Hide Featured Image Auto Appears on This Post?</h2>
			<p class="description">
			<?php esc_html_e( 'This option just apply for Single Post Template Style 1 & 2.', 'soledad' ); ?><br>
			<?php esc_html_e( 'If you want to hide Featured Images auto appears for all posts, check option for it via Customize > Single Post Options > Hide Featured Image on Top', 'soledad' ); ?></p>
			<p>
				<select id="penci_post_hide_featuimg" name="penci_post_hide_featuimg">
					<option value="">Default ( follow Customize )</option>
					<option value="no" <?php selected( $hide_featuimg, 'no' ); ?>>No, Show Featured Image</option>
					<option value="yes" <?php selected( $hide_featuimg, 'yes' ); ?>>Yes, Hide Featured Image</option>
				</select>
			</p>
			
			<h2 style="font-weight: 600; font-size: 14px; padding-left: 0;">Display sidebar on this post?</h2>
			<p>
				<select id="penci_post_sidebar_display" name="penci_post_sidebar_display">
					<option value="">Default Value ( on Customize )</option>
					<option value="left" <?php selected( $sidebar, 'left' ); ?>>Left Sidebar</option>
					<option value="right" <?php selected( $sidebar, 'right' ); ?>>Right Sidebar</option>
					<option value="two" <?php selected( $sidebar, 'two' ); ?>>Two Sidebar</option>
					<option value="no" <?php selected( $sidebar, 'no' ); ?>>No Sidebar</option>
					<option value="small_width" <?php selected( $sidebar, 'small_width' ); ?>>No Sidebar with Container Width Smaller</option>
				</select>
			</p>
		<?php } ?>

		<h2 style="font-weight: 600; font-size: 14px; padding-left: 0;">Custom Sidebar for This Posts/Page</h2>
		<p class="description"><?php esc_html_e( 'Note: for page, you can choose display sidebar or no in Template "Page with Sidebar" and custom sidebar here, if sidebar you choice here is empty, will display sidebar you choice for page in customize', 'soledad' ); ?></p>
		<p>
			<select id="penci_custom_sidebar_page_field" name="penci_custom_sidebar_page_field">
				<option value=""><?php esc_html_e( "Default Sidebar( on Customize )", "soledad" ); ?></option>
				<option value="main-sidebar" <?php selected( $value, 'main-sidebar' ); ?>><?php esc_html_e( "Main Sidebar", "soledad" ); ?></option>
				<option value="main-sidebar-left" <?php selected( $value, 'main-sidebar-left' ); ?>><?php esc_html_e( "Main Sidebar Left", "soledad" ); ?></option>
				<option value="custom-sidebar-1" <?php selected( $value, 'custom-sidebar-1' ); ?>><?php esc_html_e( "Custom Sidebar 1", "soledad" ); ?></option>
				<option value="custom-sidebar-2" <?php selected( $value, 'custom-sidebar-2' ); ?>><?php esc_html_e( "Custom Sidebar 2", "soledad" ); ?></option>
				<option value="custom-sidebar-3" <?php selected( $value, 'custom-sidebar-3' ); ?>><?php esc_html_e( "Custom Sidebar 3", "soledad" ); ?></option>
				<option value="custom-sidebar-4" <?php selected( $value, 'custom-sidebar-4' ); ?>><?php esc_html_e( "Custom Sidebar 4", "soledad" ); ?></option>
				<option value="custom-sidebar-5" <?php selected( $value, 'custom-sidebar-5' ); ?>><?php esc_html_e( "Custom Sidebar 5", "soledad" ); ?></option>
				<option value="custom-sidebar-6" <?php selected( $value, 'custom-sidebar-6' ); ?>><?php esc_html_e( "Custom Sidebar 6", "soledad" ); ?></option>
				<option value="custom-sidebar-7" <?php selected( $value, 'custom-sidebar-7' ); ?>><?php esc_html_e( "Custom Sidebar 7", "soledad" ); ?></option>
				<option value="custom-sidebar-8" <?php selected( $value, 'custom-sidebar-8' ); ?>><?php esc_html_e( "Custom Sidebar 8", "soledad" ); ?></option>
				<option value="custom-sidebar-9" <?php selected( $value, 'custom-sidebar-9' ); ?>><?php esc_html_e( "Custom Sidebar 9", "soledad" ); ?></option>
				<option value="custom-sidebar-10" <?php selected( $value, 'custom-sidebar-10' ); ?>><?php esc_html_e( "Custom Sidebar 10", "soledad" ); ?></option>
				<?php Penci_Custom_Sidebar::get_list_sidebar( $value ); ?>
			</select>
		</p>
		<h2 style="font-weight: 600; font-size: 14px; padding-left: 0;">Custom Sidebar Left for This Posts/Page</h2>
		<p class="description"><?php esc_html_e( 'Note: for page, you can choose display sidebar or no in Template "Page with Sidebar" and custom sidebar here, if sidebar you choice here is empty, will display sidebar you choice for page in customize', 'soledad' ); ?></p>
		<p>
			<select id="penci_custom_sidebar_left_page_field" name="penci_custom_sidebar_left_page_field">
				<option value=""><?php esc_html_e( "Default Sidebar( on Customize )", "soledad" ); ?></option>
				<option value="main-sidebar" <?php selected( $value_left, 'main-sidebar' ); ?>><?php esc_html_e( "Main Sidebar", "soledad" ); ?></option>
				<option value="main-sidebar-left" <?php selected( $value_left, 'main-sidebar-left' ); ?>><?php esc_html_e( "Main Sidebar Left", "soledad" ); ?></option>
				<option value="custom-sidebar-1" <?php selected( $value_left, 'custom-sidebar-1' ); ?>><?php esc_html_e( "Custom Sidebar 1", "soledad" ); ?></option>
				<option value="custom-sidebar-2" <?php selected( $value_left, 'custom-sidebar-2' ); ?>><?php esc_html_e( "Custom Sidebar 2", "soledad" ); ?></option>
				<option value="custom-sidebar-3" <?php selected( $value_left, 'custom-sidebar-3' ); ?>><?php esc_html_e( "Custom Sidebar 3", "soledad" ); ?></option>
				<option value="custom-sidebar-4" <?php selected( $value_left, 'custom-sidebar-4' ); ?>><?php esc_html_e( "Custom Sidebar 4", "soledad" ); ?></option>
				<option value="custom-sidebar-5" <?php selected( $value_left, 'custom-sidebar-5' ); ?>><?php esc_html_e( "Custom Sidebar 5", "soledad" ); ?></option>
				<option value="custom-sidebar-6" <?php selected( $value_left, 'custom-sidebar-6' ); ?>><?php esc_html_e( "Custom Sidebar 6", "soledad" ); ?></option>
				<option value="custom-sidebar-7" <?php selected( $value_left, 'custom-sidebar-7' ); ?>><?php esc_html_e( "Custom Sidebar 7", "soledad" ); ?></option>
				<option value="custom-sidebar-8" <?php selected( $value_left, 'custom-sidebar-8' ); ?>><?php esc_html_e( "Custom Sidebar 8", "soledad" ); ?></option>
				<option value="custom-sidebar-9" <?php selected( $value_left, 'custom-sidebar-9' ); ?>><?php esc_html_e( "Custom Sidebar 9", "soledad" ); ?></option>
				<option value="custom-sidebar-10" <?php selected( $value_left, 'custom-sidebar-10' ); ?>><?php esc_html_e( "Custom Sidebar 10", "soledad" ); ?></option>
				<?php Penci_Custom_Sidebar::get_list_sidebar( $value_left ); ?>
			</select>
		</p>

		<?php if ( 'post' == get_post_type( $post->ID ) ) { ?>
			<h2 style="font-weight: 600; font-size: 14px; padding-left: 0;">Select Single Style for This Post?</h2>
			<p>
				<select id="penci_single_style" name="penci_single_style">
					<option value=""><?php esc_html_e( "Default Style( on Customize )", "soledad" ); ?></option>
					<option value="style-1" <?php selected( $single_style, 'style-1' ); ?>><?php esc_html_e( "Style 1", "soledad" ); ?></option>
					<option value="style-2" <?php selected( $single_style, 'style-2' ); ?>><?php esc_html_e( "Style 2", "soledad" ); ?></option>
					<option value="style-3" <?php selected( $single_style, 'style-3' ); ?>><?php esc_html_e( "Style 3", "soledad" ); ?></option>
					<option value="style-4" <?php selected( $single_style, 'style-4' ); ?>><?php esc_html_e( "Style 4", "soledad" ); ?></option>
					<option value="style-5" <?php selected( $single_style, 'style-5' ); ?>><?php esc_html_e( "Style 5", "soledad" ); ?></option>
					<option value="style-6" <?php selected( $single_style, 'style-6' ); ?>><?php esc_html_e( "Style 6", "soledad" ); ?></option>
					<option value="style-7" <?php selected( $single_style, 'style-7' ); ?>><?php esc_html_e( "Style 7", "soledad" ); ?></option>
					<option value="style-8" <?php selected( $single_style, 'style-8' ); ?>><?php esc_html_e( "Style 8", "soledad" ); ?></option>
					<option value="style-9" <?php selected( $single_style, 'style-9' ); ?>><?php esc_html_e( "Style 9", "soledad" ); ?></option>
					<option value="style-10" <?php selected( $single_style, 'style-10' ); ?>><?php esc_html_e( "Style 10", "soledad" ); ?></option>
				</select>
			</p>
			<h2 style="font-weight: 600; font-size: 14px; padding-left: 0;">Custom Aspect Ratio for Featured Image of This Post?</h2>
			<p class="description">The aspect ratio of an element describes the proportional relationship between its width and its height. E.g: 3:2. Default is 3:2.<br>This option does not apply when enable parallax images & Single Post Style 1 & 2</p>

			<p><input id="_customize-input-penci_pfeatured_image_ratio" name="penci_pfeatured_image_ratio" type="text"  value="<?php echo esc_attr( $pfeatured_image_ratio ); ?>"></p>
			<h2 style="font-weight: 600; font-size: 14px; padding-left: 0;">Enable Parallax Images for This Post?</h2>
			<p class="description"><?php esc_html_e( 'This feature does not apply for Single Style 1 & 2', 'soledad' ); ?></p>

			<p>
				<select id="penci_enable_jarallax_single" name="penci_enable_jarallax_single">
					<option value="">No</option>
					<option value="yes" <?php selected( $enable_parallax, 'yes' ); ?>>Yes</option>
				</select>
			</p>
		<?php }
	}
}