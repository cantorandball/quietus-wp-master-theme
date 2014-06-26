<?php
/**
 * @package WordPress
 * @subpackage The_Quietus_Master
 * @since The Quietus Master 1.0
 */

get_header(); ?>

<?php while( have_posts() ): the_post(); ?>
<article role="main" class="post">
	<div class="layout__jumbotron">
		<header>
			<h3 class="post__category-title"><?php quietus_the_category( true ); ?></h3>
			<h2 class="post__title"><?php the_title(); ?></h2>
		</header>
		<?php get_template_part( 'template-parts/single-standfirst' ) ?>
		<?php get_template_part( 'template-parts/single-byline' ) ?>
	</div>
	<div class="layout__content">
		<?php get_template_part( 'template-parts/single-featured-image' ) ?>
		<section class="post__content">
			<?php the_content(); ?>
		</section>
		<?php get_template_part( 'template-parts/single-sharing' ) ?>
		<?php get_template_part( 'template-parts/single-related' ) ?>
	</div>
</article>

<?php endwhile; ?>

<?php
get_sidebar();
get_footer(); ?>
