<?php
/**
 * @package WordPress
 * @subpackage The_Quietus_Master
 * @since The Quietus Master 1.0
 */

get_header(); ?>

<?php while( have_posts() ): the_post(); ?>
<article role="main" class="post">
	<header>
		<h3 class="post__category-title"><?php the_category(); ?></h3>
		<h2><?php the_title(); ?></h2>
		<div class="post__byline">
			<address><?php the_author_posts_link(); ?></address>
			<time pubdate datetime="<?php the_time( 'Y-m-d H:i' ); ?>"><?php the_time('F jS, Y'); ?></time>
		</div>
	</header>
	<?php if ( has_excerpt() ): ?>
	<section class="post__standfirst">
		<?php the_excerpt(); ?>
	</section>
	<?php endif; ?>
	<section class="post__content">
		<?php the_content(); ?>
	</section>
	<section class="post__sharing">
		<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="50" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
	</section>
</article>
<?php endwhile; ?>

<?php
get_sidebar();
get_sidebar( 'article' );
get_footer(); ?>
