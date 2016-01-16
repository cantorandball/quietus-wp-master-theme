<?php
/**
 * The Quietus Master theme setup
 *
 * @package WordPress
 * @subpackage The_Quietus_Master
 * @since The Quietus Master 1.0
 */

function quietus_setup() {
	add_theme_support( 'html5', array(
		'caption',
		'comment-list',
		'comment-form',
		'gallery',
		'search-form'
	) );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	register_nav_menu( 'site_header_nav', __( 'Site Header Nav Menu', 'quietus' ) );
}
add_action( 'after_setup_theme', 'quietus_setup' );
?>
