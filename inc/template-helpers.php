<?php
/**
 * Helper functions for use in theme templates
 *
 * @package WordPress
 * @subpackage The_Quietus_Master
 * @since The Quietus Master 1.0
 */

/**
 * Get latest posts from News and Album Reviews categories
 * @return wp_query wp_query object containing matching posts.
 */
function get_latest_news() {
	$query_args = array(
		'category_name'  => 'news',
		'posts_per_page' => 20,
		'orderby'        => 'date',
		);
	return new WP_Query( $query_args );
}

/**
 * Get latest posts from News and Album Reviews categories
 * @return wp_query wp_query object containing matching posts.
 */
function get_latest_reviews() {
	$query_args = array(
		'category_name'  => 'album-reviews',
		'posts_per_page' => 20,
		'orderby'        => 'date',
		);
	return new WP_Query( $query_args );
}

/**
 * Gets posts related to the one specified.
 * Posts are related if they share any of the same tags
 * @param  int $post_id ID of the post to find related posts for
 * @return wp_query     wp_query object containing matching posts
 */
function get_related_posts( $post_id ) {
	$post_tags = get_the_tags( $post_id );

	if ( !$post_tags ) {
		return new WP_Query();
	}

	$tags = array();
	foreach ( $post_tags as $tag ) {
		$tags[] = $tag->slug;
	}

	$query_args = array(
		'tag'            => join( ',', $tags ),
		'post__not_in'	 => array( $post_id ),
		'posts_per_page' => 20,
		'orderby'        => 'date'
		);

	return new WP_Query( $query_args );
}

function get_paginate_links() {
	global $wp_query;
	$big = 999999999;
	$paginate_links = paginate_links( array(
		'base'     => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
		'current'  => max( 1, get_query_var( 'paged' ) ),
		'total'    => $wp_query->max_num_pages,
		'mid_size' => 5
		) );

	return $paginate_links;
}

function get_posts_in_category( $category_id, $limit ) {
	return new WP_Query( array(
	                    'cat' => $category_id,
	                    'posts_per_page' => $limit
	                    ) );
}

function get_background_image_url( $post_id, $size ) {
	$size = $size || 'medium';
	$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), $size )[0];

	return 'background-image:url(' . $src . ')';
}

function quietus_the_category( $link_to ) {
	$cat = quietus_get_the_category();
	$link = get_category_link( $cat->cat_ID );
	if ( !$cat )
		return;

	if ( $link_to ) {
		echo '<a href="' . esc_url( $link ) . '">' . $cat->name . '</a>';
	} else {
		echo $cat->name;
	}

}

function quietus_get_the_category() {
	$cat = get_the_category();

	if ( $cat ) {
		return $cat[0];
	} else {
		return null;
	}
}

/**
 * Get the current category, regardless of page type.
 * @return Category 	wp category object
 */
if ( !function_exists( 'quietus_get_current_category' ) ) {
	function quietus_get_current_category() {
		global $quietus_current_category;

		if ( $quietus_current_category )
			return $quietus_current_category;

		if ( is_category() ) {
			$quietus_current_category = get_queried_object();
		} else {
			$categories = get_the_category( get_queried_object_id() );
			if ( $categories )
				$quietus_current_category = $categories[0];
		}

		return $quietus_current_category;
	}
}
?>
