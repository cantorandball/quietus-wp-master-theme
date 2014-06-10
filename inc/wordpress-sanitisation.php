<?php
/**
 * Remove unwanted ids and classes from wp_nav_menu output
 */
function quietus_nav_menu_item_id( $id, $item ) {
	return null;
}
add_filter( 'nav_menu_item_id', 'quietus_nav_menu_item_id', 10, 2 );

function quietus_nav_menu_css_class( $classes, $item ) {
	return array();
}
add_filter( 'nav_menu_css_class', 'quietus_nav_menu_css_class', 10, 2 );


/**
 * Hide admin bar
 */
add_filter( 'show_admin_bar', '__return_false' );
?>
