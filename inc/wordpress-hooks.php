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
	wp_enqueue_script( 'quietus-scripts', get_template_directory_uri() . '/js/main.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'quietus_styles_and_scripts' );

/**
 * Returns a more sensible page title than WordPress default
 * Adds pagination info if present
 * Appends the blog name (eg. The Quietus) to the end
 *
 * @param  string $title the current title that would be displayed
 * @param  string $sep   string used to join parts of title
 * @return string        new title, with blog name and pagination info
 */
function quietus_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( !is_feed() ) {
		$title .= get_bloginfo( 'name' );

		if ( $paged >= 2 || $page >= 2 ) {
			$title = "$title $sep " . sprintf( __( 'Page %s', 'quietus' ), max( $paged, $page ) );
		}
	}

	return $title;
}
add_filter( 'wp_title', 'quietus_wp_title', 10, 2 );

/**
 * Filter to create single-category.php templates.
 * Derived from http://www.nathanrice.net/blog/wordpress-single-post-templates
 */
function quietus_category_template( $single_template ) {
    foreach( (array) get_the_category() as $cat ) {
    	if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") ) {
    		return TEMPLATEPATH . "/single-{$cat->slug}.php";
    	};
    };
    return $single_template;
}
add_filter( "single_template", "quietus_category_template" ) ;

/**
 * Forces the excerpt to conclude with a full stop, regardless of what's in the post.
 * @return string HTML-formatted post excerpt
 */
function quietus_format_excerpt() {
	$excerpt = get_the_excerpt();
	$chars = array( ".", "!", "?", "…" );
	if (!in_array ( substr( $excerpt, -1 ), $chars ) ) {
    	$excerpt .= '.';
	};
	return '<p>' . $excerpt . '</p>';
}
add_filter( "the_excerpt", "quietus_format_excerpt" ) ;

?>
