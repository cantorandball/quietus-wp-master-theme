<?php
/**
 * @package WordPress
 * @subpackage The_Quietus_Master
 * @since The Quietus Master 1.0
 */

get_header(); ?>

<?php while( have_posts() ): the_post(); ?>
<article role="main" class="post post-review" itemscope itemtype="http://schema.org/Review">
	<header class="post-header">
		<p class="category-title"><?php quietus_the_category( true ); ?></p>
		<h1 itemprop="itemReviewed">
			<span class="post-review-release" itemprop="name"><?php the_field('album_title'); ?></span>
			<span class="post-review-artist" itemprop="creator"><?php the_field('album_artist'); ?></span>
		</h1>
		<?php get_template_part( 'template-parts/single-standfirst' ) ?>
		<?php get_template_part( 'template-parts/single-byline' ) ?>
	</header>
	<div class="post-body">
		<?php get_template_part( 'template-parts/single-featured-image' ) ?>
		<section class="post-content" itemprop="reviewBody">
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