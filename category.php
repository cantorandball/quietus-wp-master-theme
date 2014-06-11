<?php
/**
 * @package WordPress
 * @subpackage The_Quietus_Master
 * @since The Quietus Master 1.0
 */

get_header(); ?>

<section>
	<?php if ( have_posts() ): ?>
	<header>
		<h1><?php single_cat_title( '', true ); ?></h1>
	</header>
	<?php endif; ?>

	<ul>
		<?php
		while( have_posts() ): the_post();
			get_template_part( 'listing', 'excerpt' );
		endwhile;
		?>
	</ul>
</section>

<?php
get_sidebar();
get_footer(); ?>
