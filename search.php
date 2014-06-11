<?php
/**
 * @package WordPress
 * @subpackage The_Quietus_Master
 * @since The Quietus Master 1.0
 */

get_header(); ?>

<section>
	<header>
		<h1><?php printf( __( 'Search Results for %s:', 'quietus' ), get_search_query() ); ?></h1>
	</header>

	<?php if ( have_posts() ): ?>
		<ul>
			<?php
			while( have_posts() ): the_post();
			get_template_part( 'listing', 'excerpt' );
			endwhile;
			?>
		</ul>
	<?php else: ?>
		<div class="no-results">
			<p><?php echo( __( 'No results found', 'quietus' ) ); ?>.</p>
		</div>
	<?php endif; ?>
</section>

<?php
get_sidebar();
get_footer(); ?>
