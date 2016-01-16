<?php

/**
 * Removes default post categories meta_box so we can add our own custom one.
 */
function quietus_remove_categories_meta_box() {
	remove_meta_box( 'categorydiv', 'post', 'side' );
}
add_action( 'admin_head', 'quietus_remove_categories_meta_box' );

/**
 * Adds a meta box with post categories for the quietus
 */
function quietus_add_categories_meta_box() {
	add_meta_box(
	             'quietus-post-category',
	             __( 'Category', 'quietus' ),
	             'quietus_categories_meta_box_callback',
	             'post',
	             'side',
	             'core'
	             );
}
add_action( 'add_meta_boxes', 'quietus_add_categories_meta_box' );

/**
 * Callback to output fields for our custom category metabox
 *
 * Output is a definition list.
 * Top level categories are selectable if they have no child categories.
 *
 * @param  object $post the post being added/edited
 */
function quietus_categories_meta_box_callback( $post ) {
	$categories = get_categories( array(
	                             'type'         => 'post',
	                             'parent'       => 0,
	                             'hide_empty'   => 0,
	                             'hierarchical' => 0
	                             ) );

	echo '<dl>';
	foreach ( $categories as $category ) {
		$children = get_categories( array(
		                           'type'         => 'post',
		                           'parent'       => $category->cat_ID,
		                           'hide_empty'   => 0,
		                           'hierarchical' => 0
		                           ) );

		$category_dt = $children ? $category->name : quietus_category_input( $category, $post );
		echo '<dt>' . $category_dt . '</dt>';

		if ( $children ) {
			echo '<dd><ul class="child-categories">';
			foreach ( $children as $child ) {
				echo '<li>' . quietus_category_input( $child, $post ) . '</li>';
			}
			echo '</ul></dd>';
		}
	}
	echo '</dl>';
}

/**
 * Returns an HTML fragment with a category radio button
 * @param  object $cat the category to generate a radio button for
 * @return string      category radio input and label
 */
function quietus_category_input( $cat, $post ) {
	$cat_ID   = $cat->cat_ID;
	$cat_name = $cat->name;
	$checked  = in_category( $cat_ID, $post->ID );

	return '<input type="radio" id="in-category-' . $cat_ID . '" name="post_category[]" value="' . $cat_ID .'"' . ( $checked ? ' checked' : '' ) . '>
	<label for="in-category-' . $cat_ID . '">' . $cat_name . '</label>';
}
?>
