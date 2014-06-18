<?php
/**
 * @package WordPress
 * @subpackage The_Quietus_Master
 * @since The Quietus Master 1.0
 */

get_header(); ?>

<?php while( have_posts() ): the_post(); ?>
<article role="main" class="post post--review" itemscope itemtype="http://schema.org/Review">
	<div class="layout__jumbotron">
		<header>
			<h3 class="post__category-title"><?php the_category(); ?></h3>
			<h2 class="post__title" itemprop="itemReviewed">
				<span class="post--review__release" itemprop="name"><?php the_field('album_title'); ?></span>
				<span class="post--review__artist" itemprop="creator"><?php the_field('album_artist'); ?></span>
			</h2>
		</header>
		<?php if ( has_excerpt() ): ?>
		<section class="post__standfirst">
			<?php the_excerpt(); ?>
		</section>
		<?php endif; ?>
		<div class="post__byline">
			<address class="post__byline--author" itemprop="author" rel="author"><?php the_author_posts_link(); ?></address>
			<time class="post__byline--date" pubdate datetime="<?php the_time( 'Y-m-d H:i' ); ?>" itemprop="datePublished"><?php the_time('F jS, Y'); ?></time>
		</div>
	</div>
	<div class="layout__content">
		<?php if ( has_post_thumbnail() ): ?>
		<figure class="post__featured-image" itemprop="image">
			<?php the_post_thumbnail(); ?>
		</figure>
		<?php endif; ?>
		<section class="post__content" itemprop="reviewBody">
			<?php the_content(); ?>
		</section>
		<section class="post__sharing">
			<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="50" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
		</section>
		<section class="post__related">
			<?php get_template_part( 'related-posts' ); ?>
		</section>
	</div>
</article>

<?php endwhile; ?>

<?php
get_sidebar();
get_footer(); ?>
