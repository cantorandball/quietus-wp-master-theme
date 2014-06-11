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
?>
