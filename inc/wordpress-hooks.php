<?php
/**
 * General functionality provided by hooking into the WordPress API
 *
 * @package WordPress
 * @subpackage The_Quietus_Master
 * @since The Quietus Master 1.0
 */

/**
 * Add our styles and scripts to be included in wp_head
 */
function quietus_styles_and_scripts() {
	wp_enqueue_style( 'quietus-style', get_template_directory_uri() . '/css/main.css', array(), null );
}
add_action( 'wp_enqueue_scripts', 'quietus_styles_and_scripts' );

/**
 * Returns a more sensible page title than WordPress default
 * Adds pagination info if present
 * Appends the blog name (eg. The Quietus) to the end
 *
 * @param  string $title the current title that would be displayed
 * @param  string $sep   string used to join parts of title
 * @return string        new title, with blog name and pagination info
 */
function quietus_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( !is_feed() ) {
		$title .= get_bloginfo( 'name' );

		if ( $paged >= 2 || $page >= 2 ) {
			$title = "$title $sep " . sprintf( __( 'Page %s', 'quietus' ), max( $paged, $page ) );
		}
	}

	return $title;
}
add_filter( 'wp_title', 'quietus_wp_title', 10, 2 );
?>
