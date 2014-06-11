<?php
/**
 * @package WordPress
 * @subpackage The_Quietus_Master
 * @since The Quietus Master 1.0
 */

get_header(); ?>

<section>
	<?php if ( have_posts() ): the_post(); ?>
	<header>
		<h1><?php the_author(); ?></h1>
	</header>
	<?php endif; ?>

	<ul>
		<?php
		rewind_posts();
		while( have_posts() ): the_post();
			get_template_part( 'listing', 'excerpt' );
		endwhile;
		?>
	</ul>
</section>

<?php
get_sidebar();
get_footer(); ?>
