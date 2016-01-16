<?php
/**
 * @package WordPress
 * @subpackage The_Quietus_Master
 * @since The Quietus Master 1.0
 */

get_header(); ?>

<section role="main" class="search">
	<header>
		<h1>Search results for <span class="search-term"><?php the_search_query(); ?></span></h1>
	</header>

	<?php if ( have_posts() ): ?>
		<div class="search-post-listing">
			<ul>
				<?php
				while( have_posts() ): the_post();
				get_template_part( 'template-parts/listing' );
				endwhile;
				?>
			</ul>
		</div>
		<?php get_template_part( 'template-parts/pagination' ); ?>
	<?php else: ?>
		<div class="search-no-posts">
			<p><?php echo( __( 'No results found', 'quietus' ) ); ?>.</p>
		</div>
	<?php endif; ?>
</section>

<?php
get_sidebar();
get_footer(); ?>
