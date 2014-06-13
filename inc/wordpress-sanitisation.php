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

	if ( in_array( 'current-menu-item', $classes ) || item_is_active( $item ) ) {
		$new_classes[] = 'active';
	}

	return $new_classes;
}
add_filter( 'nav_menu_css_class', 'quietus_nav_menu_css_class', 10, 2 );

/**
 * Returns true or false depending on whether the current nav item is active.
 * Nav items are category names, so they are active if they match the name of
 * current category, or the current categories top parent.
 *
 * @param  object $item Nav menu item data object
 * @return boolean      Whether this item is active or not
 */
function item_is_active( $item ) {
	global $category_looked_up, $top_category;

	$active = false;

	// We cache the top category as a global, so we don’t need to perform a
	// lookup for every nav item.
	if ( !$category_looked_up ) {
		$top_category = get_top_category();
	}

	if ( $top_category ) {
		$active = ( $item->title == $top_category->name );
	}

	// Cache the fact we’ve performed a category lookup.
	$category_looked_up = true;
	return $active;
}

/**
 * Get the top parent category for the current category
 * @return object The top ancestor for the current category, or null if no category.
 */
function get_top_category() {
	$category = get_current_category();

	if ( !$category ) {
		return null;
	}

	if ( $category->category_parent == 0 ) {
		return $category;
	}

	$parents = get_category_parents( $category->cat_ID, false, '/', true );
	$parents = explode( '/', $parents );

	return get_category_by_slug( $parents[0] );
}

/**
 * Returns the current category for the page
 * @return object The current category, or null
 */
function get_current_category() {
	$category = null;

	if ( is_single() ) {
		$post = get_post();
		$category = get_the_category( $post->ID )[0];
	} elseif ( is_category() ) {
		$category_name = single_cat_title( '', false );
		$category = get_category( get_cat_ID( $category_name ) );
	}

	return $category;
}

/**
 * Hide admin bar
 */
add_filter( 'show_admin_bar', '__return_false' );
?>
