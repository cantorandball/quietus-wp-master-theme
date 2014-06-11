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
function get_latest_news_and_reviews() {
	$query_args = array(
		'category_name'  => 'news,album-reviews',
		'posts_per_page' => 20,
		'orderby'        => 'date'
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
?>
