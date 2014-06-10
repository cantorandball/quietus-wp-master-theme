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
?>
