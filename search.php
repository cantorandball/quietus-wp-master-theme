<?php
/**
 * @package WordPress
 * @subpackage The_Quietus_Master
 * @since The Quietus Master 1.0
 */

get_header(); ?>

<section role="main" class="search">
	<div class="layout__jumbotron">
		<header>
			<h3 class="search__leadin">
				<?php echo( __( 'Search Results for:', 'quietus' ) ); ?>
			</h3>
			<h2 class="search__title">
				<?php the_search_query(); ?>
			</h2>
		</header>
	</div>

	<div class="layout__content">
		<?php if ( have_posts() ): ?>
			<ul class="search__post-listing">
				<?php
				while( have_posts() ): the_post();
				get_template_part( 'listing', 'excerpt' );
				endwhile;
				?>
			</ul>
		<?php else: ?>
			<div class="search__no-posts">
				<p><?php echo( __( 'No results found', 'quietus' ) ); ?>.</p>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php
get_sidebar();
get_footer(); ?>
