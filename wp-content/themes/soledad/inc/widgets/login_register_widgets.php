<?php
add_action( 'widgets_init', 'penci_login_register_load_widget' );

function penci_login_register_load_widget() {
	register_widget( 'Penci_Login_Register_Widget' );
}

if( ! class_exists( 'Penci_Login_Register_Widget' ) ) {
	class Penci_Login_Register_Widget extends WP_Widget {

		protected $defaults;

		function __construct() {
			/* Widget settings. */
			$widget_ops = array( 'classname'   => 'penci_login_register_widget', 'description' => esc_html__( 'A widget that displays an login or register widget', 'soledad' ) );

			/* Widget control settings. */
			$control_ops = array( 'id_base' => 'penci_login_register_widget' );

			/* Create the widget. */
			global $wp_version;
			if( 4.3 > $wp_version ) {
				$this->WP_Widget( 'penci_login_register_widget', esc_html__( '.Soledad Login/Register', 'soledad' ), $widget_ops, $control_ops );
			} else {
				parent::__construct( 'penci_login_register_widget', esc_html__( '.Soledad Login/Register', 'soledad' ), $widget_ops, $control_ops );
			}
		}

		/**
		 * How to display the widget on the screen.
		 */
		function widget( $args, $instance ) {
			$title     = ! empty( $instance['title'] ) ? $instance['title'] : '';
			$form_type = ! empty( $instance['form_style'] ) ? $instance['form_style'] : '';

			$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

			echo $args['before_widget'];
			if ( $title ) {
				echo $args['before_title'] . $title . $args['after_title'];
			}

			$current_url = ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
			?>
			<div class="penci-login-register">
				<div class="penci-block_content">
					<div class="penci-login-wrap penci-user-login clearfix<?php echo( 'login' != $form_type ? ' hidden' : '' ); ?>">
						<?php
						if ( ! is_user_logged_in() ) {
							\Penci_Vc_Helper::_login_form();
						} else {
							$current_user = wp_get_current_user();
							?>
							<div class="penci-user-logged-in">
								<div class="penci-login-header">
									<div class="penci-login-avatar">
										<?php echo get_avatar( $current_user->ID, 85 ); ?>
									</div>
									<p>
										<span class="penci-text-hello"><?php echo penci_get_setting( 'penci_trans_hello_text' ) . ', '; ?></span>
										<span class="penci-display_name"><?php echo $current_user->display_name; ?></span>
									</p>
								</div>
								<div class="penci-user-action-links">
									<?php
									if ( class_exists( 'bbpress' ) ) {
										$profile_url = bbp_get_user_profile_url( bbp_get_current_user_id() );
									} else {
										$profile_url = get_edit_user_link();
									}
									?>
									<a class="penci-button penci-button-ptofile" href="<?php echo $profile_url; ?>"><?php penci_fawesome_icon('far fa-user-circle'); ?> <?php echo penci_get_setting( 'penci_trans_profile_text' ); ?></a>
									<a class="penci-button penci-button-logout" href="<?php echo wp_logout_url( $current_url ); ?>"><?php penci_fawesome_icon('fas fa-sign-out-alt'); ?> <?php echo penci_get_setting( 'penci_trans_logout_text' ); ?></a>
								</div>
							</div>
							<?php
						}
						?>
					</div>
					<div class="penci-register-wrap clearfix<?php echo( 'register' != $form_type ? ' hidden' : '' ); ?>">
						<div class="penci-register-container">
							<form name="form" id="penci-registration-form" class="penci-registration-form" action="<?php echo esc_url( site_url( 'wp-login.php?action=register', 'login_post' ) ); ?>" method="post" novalidate="novalidate">
								<input type="hidden" name="_wpnonce" value="<?php echo wp_create_nonce( 'register' ); ?>">

								<p class="register-input">
									<input class="penci_first_name penci-input" name="penci_first_name" type="text" placeholder="<?php echo penci_get_setting( 'penci_pregister_first_name' ); ?>"/>
								</p>
								<p class="register-input">
									<input class="penci_last_name penci-input" name="penci_last_name" type="text" placeholder="<?php echo penci_get_setting( 'penci_pregister_last_name' ); ?>"/>
								</p>
								<p class="register-input">
									<input class="penci_user_name penci-input" name="penci_user_name" type="text" placeholder="<?php echo penci_get_setting( 'penci_pregister_user_name' ); ?>"/>
								</p>
								<p class="register-input">
									<input class="penci_user_email penci-input" name="penci_user_email" type="email" placeholder="<?php echo penci_get_setting( 'penci_pregister_user_email' ); ?>"/>
								</p>
								<p class="register-input">
									<input class="penci_user_pass penci-input" name="penci_user_pass" type="password" placeholder="<?php echo penci_get_setting( 'penci_pregister_user_pass' ); ?>"/>
								</p>
								<p class="register-input">
									<input class="penci_user_pass_confirm penci-input" name="penci_user_pass_confirm" type="password" placeholder="<?php echo penci_get_setting( 'penci_pregister_pass_confirm' ); ?>"/>
								</p>
								<?php do_action( 'register_form' ); ?>
								<p class="register-input">
									<input type="submit" name="penci_submit" class="button" value="<?php echo penci_get_setting( 'penci_pregister_button_submit' ); ?>"/>
								</p>
							</form>
							<?php
							echo '<div class="penci-loginform-extra"><a class="penci-user-login-here" href="' . esc_url( wp_login_url() ) . '">' . penci_get_setting( 'penci_pregister_label_registration' ) . '</a></div>';
							?>
						</div>
					</div>
					<div class="penci-loading-icon"><?php penci_fawesome_icon('fas fa-spinner fa-pulse fa-3x fa-fw'); ?></div>
				</div>
			</div>
			<?php

			echo $args['after_widget'];
		}

		/**
		 * Update the widget settings.
		 */
		function update( $new_instance, $old_instance ) {
			$instance               = $old_instance;
			$instance['title']      = strip_tags( $new_instance['title'] );
			$instance['form_style'] = strip_tags( $new_instance['form_style'] );

			return $instance;
		}


		function form( $instance ) {

			/* Set up some default widget settings. */
			$defaults = array(
				'form_style' => 'login',
				'title'      => 'Login/Register'
			);
			$instance = wp_parse_args( (array) $instance, $defaults ); ?>

			<!-- Widget Title: Text Input -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'soledad' ); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo sanitize_text_field( $instance['title'] ); ?>" />
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id('form_style') ); ?>">Choose Form Type:</label>
				<select id="<?php echo esc_attr( $this->get_field_id('form_style') ); ?>" name="<?php echo esc_attr( $this->get_field_name('form_style') ); ?>" class="widefat categories" style="width:100%;">
					<option value='login' <?php if ('login' == $instance['form_style']) echo 'selected="selected"'; ?>>Login</option>
					<option value='register' <?php if ('register' == $instance['form_style']) echo 'selected="selected"'; ?>>Register</option>
				</select>
			</p>
		<?php
		}
	}
}
?>