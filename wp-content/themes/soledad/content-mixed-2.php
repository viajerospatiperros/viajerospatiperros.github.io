<?php
/**
 * Template loop for mixed style
 */
?>
<?php
/**
* Create var $j to count order posts
* If $j = 1, to show mixed post, $j > 1 to show grid post
*
* @since 1.0
*/
$penci_mixed_style = isset( $penci_mixed_style ) ? $penci_mixed_style : '';

$k = 3;
if ( ! isset ( $j ) ) { $j = 1; } else { $j = $j; }
if( ( is_home() && ! penci_get_setting( 'penci_sidebar_home' ) ) || ( is_archive() && ! penci_get_setting( 'penci_sidebar_archive' ) ) || is_page_template( 'page-vc.php' ) || is_page_template( 'page-penci-full-width.php' ) ):
	$k = 4;
endif;

if( isset( $template ) && $template == 'no-sidebar' ) {
	$k = 4;
}

if( 's1' == $penci_mixed_style ) {
	$k = 4;
} elseif( 's2' == $penci_mixed_style ) {
	$k = 3;
}

if ( ( $j % $k ) == 1 ) {
	get_template_part( 'content', 'overlay' );
}
else {
	get_template_part( 'content', 'grid' );
}

$j ++;
?>