<?php
/**
 * @package WordPress
 * @subpackage The_Quietus_Master
 * @since The Quietus Master 1.0
 */

global $current_category;

$parent           = null;
$current_category = get_queried_object();

if ( $current_category->category_parent != '0' )
	$parent = get_category( $current_category->category_parent );

get_header(); ?>

<section role="main" class="category">
	<div class="layout-jumbotron">
		<header>
			<?php if ( $parent ): ?>
				<p class="category-title">
					<a href="<?php echo get_category_link( $parent->cat_ID ); ?>"><?php echo $parent->name; ?></a>
				</p>
			<?php endif; ?>
			<h1 class="category-name">
				<?php single_cat_title( '', true ); ?>
			</h1>
		</header>

		<?php if ( category_description() ): ?>
			<section class="category-description">
				<?php echo category_description(); ?>
			</section>
		<?php endif ?>
	</div>

	<div class="layout-content">
		<?php if ( have_posts() ): ?>
			<div class="category-post-listing">
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
			<div class="category-no-posts">
				<p>There are no articles in this category.</p>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php
get_sidebar();
get_footer();
?>
