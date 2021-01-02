<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // No direct access, please.
}

class Penci_Soledad_Optimization_JS {

	/**
	 * __construct funtions
	 */
	function __construct(){

		if( ! is_admin() ){
			// Filter defer tag
			if( get_theme_mod( 'penci_speed_add_defer' ) || get_theme_mod( 'penci_speed_add_more_defer' ) ){
				/* Filter script_loader_tag with 2 variable $html & handle */
				add_filter( 'script_loader_tag',  array( $this, 'filter_defer_script' ), 10, 2 );
			}
		}

	}
	
	/**
	 * Filter to add defer="defer" to the JS files
	 */
	public function filter_defer_script( $html, $handle ) {

		if ( ! is_admin() ) {
			
			$array_js = array();
			
			if( get_theme_mod( 'penci_speed_add_defer' ) ){
				$array_js[] = 'penci-libs-js';
				$array_js[] = 'penci-facebook-js';
				$array_js[] = 'penci-smoothscroll';
				$array_js[] = 'main-scripts';
				$array_js[] = 'penci_ajax_like_post';
				$array_js[] = 'penci_rateyo';
				$array_js[] = 'jquery-recipe-rateyo';
				$array_js[] = 'penci-elementor';
				$array_js[] = 'penci_ajax_more_posts';
				$array_js[] = 'penci_ajax_more_scroll';
				$array_js[] = 'penci_ajax_archive_more_scroll';
				/* $array_js[] = 'comment-reply'; */ /* Consider to add */
			}
			if( get_theme_mod( 'penci_speed_add_more_defer' ) ){
				$input_array = get_theme_mod( 'penci_speed_add_more_defer' );
				$array_input = penci_speed_strto_array( $input_array );
				if( ! empty( $array_input ) ){
					foreach( $array_input as $js_id ){
						$array_js[] = $js_id;
					}
				}
			}
			
			if( ! empty( $array_js ) && in_array( $handle, $array_js ) ){
				return str_replace( " src", " defer='defer' src", $html );
			}
		}

		return $html;
	}
	
}

new Penci_Soledad_Optimization_JS();

/**
 * Lazyload Google Adsense script
 */
function penci_speed_lazyload_google_adsense(){
	if( 'method1' == get_theme_mod('penci_speed_lazy_adsense') ){
	?>
<!--noptimize-->
<script type="text/javascript">
function downloadJSAtOnload() {
var element = document.createElement("script");
element.src = "https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js";
document.body.appendChild(element);
}
if (window.addEventListener)
window.addEventListener("load", downloadJSAtOnload, false);
else if (window.attachEvent)
window.attachEvent("onload", downloadJSAtOnload);
else window.onload = downloadJSAtOnload;
</script>
<!--/noptimize-->
	<?php
	} elseif( 'method2' == get_theme_mod('penci_speed_lazy_adsense') ) {
	?>
<script type='text/javascript'>
//<![CDATA[
var la=!1;window.addEventListener("scroll",function(){(0!=document.documentElement.scrollTop&&!1===la||0!=document.body.scrollTop&&!1===la)&&(!function(){var e=document.createElement("script");e.type="text/javascript",e.async=!0,e.src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(e,a)}(),la=!0)},!0);
//]]>
</script>
	<?php
	}
}
add_action( 'wp_footer', 'penci_speed_lazyload_google_adsense', 9999 );

/**
 * Remove jQuery Migrate
 */
add_action( 'wp_default_scripts', 'penci_speed_do_remove_jquery_migrate' );
function penci_speed_do_remove_jquery_migrate(){
	if ( get_theme_mod( 'penci_speed_remove_jquery_migrate' ) && isset( $scripts->registered['jquery'] ) ) {
		$script = $scripts->registered['jquery'];
		if ( $script->deps ) {
			// Check whether the script has any dependencies
			$script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
		}
	}
}

// Remove jQuery Migrate version 3+ added by the jQuery Updater plugin
add_action( 'wp_enqueue_scripts', 'penci_speed_do_remove_jquery_migrate_back', 99 );
function penci_speed_do_remove_jquery_migrate_back(){
	global $wp_scripts;
	if( get_theme_mod( 'penci_speed_remove_jquery_migrate' ) && isset( $wp_scripts->registered['jquery-migrate'] ) ){
		$script = $wp_scripts->registered['jquery-migrate'];
		if( ! empty( $script ) && $script->ver >= 3 ){
			$deps = $wp_scripts->registered['jquery']->deps;
			$wp_scripts->registered['jquery']->deps = array_diff( $deps, array( 'jquery-migrate' ) );
		}
	}
}