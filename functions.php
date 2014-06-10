<?php
/**
 * The Quietus Master functions and definitions
 *
 * @package WordPress
 * @subpackage The_Quietus_Master
 * @since The Quietus Master 1.0
 */

require( get_template_directory() . '/inc/theme-setup.php' );

add_filter('show_admin_bar', '__return_false');

?>