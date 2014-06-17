<?php
/**
 * @package WordPress
 * @subpackage The_Quietus_Master
 * @since The Quietus Master 1.0
 */

$parent   = null;
$category = get_queried_object();
if ( $category->category_parent != '0' )
	$parent = get_category( $category->category_parent );

get_header(); ?>

<section role="main" class="category">
	<header>
		<?php if ( $parent ): ?>
			<h3>
				<a href="<?php echo get_category_link( $parent->cat_ID ); ?>"><?php echo $parent->name; ?></a>
			</h3>
		<?php endif; ?>
		<h2>
			<?php single_cat_title( '', true ); ?>
		</h2>
	</header>

	<?php if ( category_description() ): ?>
		<section class="category__standfirst">
			<?php echo category_description(); ?>
		</section>
	<?php endif ?>

	<?php if ( have_posts() ): ?>
		<div class="category__post-listing">
			<ul>
				<?php
				while( have_posts() ): the_post();
				get_template_part( 'listing', 'excerpt' );
				endwhile;
				?>
			</ul>
		</div>
	<?php else: ?>
		<div class="category__no-posts">
			<p>There are no articles in this category.</p>
		</div>
	<?php endif; ?>

	<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>
