<?php
/**
 * Filter to strip ID attribute from nav list items
 * @param  string $id   Current id set by WordPress
 * @param  object $item The current nav menu item data object
 * @return null
 */
function quietus_nav_menu_item_id( $id, $item ) {
	return null;
}
add_filter( 'nav_menu_item_id', 'quietus_nav_menu_item_id', 10, 2 );

/**
 * Filter to remove WP’s class name junk from our nav menu
 * @param  array $classes  An array of the current classes given by WordPress
 * @param  object $item    The current nav menu item data object
 * @return array           Either an empty array, or an array containing 'active'
 */
function quietus_nav_menu_css_class( $classes, $item ) {
	$new_classes = array();

	if ( in_array( 'current-menu-item', $classes ) || in_array( 'current-category-ancestor', $classes ) || in_array( 'current-post-ancestor', $classes ) ) {
		$new_classes[] = 'active';
	}

	return $new_classes;
}
add_filter( 'nav_menu_css_class', 'quietus_nav_menu_css_class', 10, 2 );

/**
 * Hide admin bar
 */
add_filter( 'show_admin_bar', '__return_false' );
?>
