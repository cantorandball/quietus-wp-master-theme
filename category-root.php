<?php
/**
 * @package WordPress
 * @subpackage The_Quietus_Master
 * @since The Quietus Master 1.0
 */

global $child_categories;
get_header();
?>

<section role="main" class="category">
	<div class="layout__jumbotron">
		<header>
			<h2 class="category__title"><?php single_cat_title( '', true ); ?></h2>
		</header>

		<ul class="categories">
			<?php foreach( $child_categories as $cat ): ?>
				<?php $posts = get_posts_in_category( $cat->cat_ID, 3 ); ?>
				<?php if ( $posts->have_posts() ): $posts->the_post(); ?>
					<li class="category-card">
						<h2><?php echo $cat->name; ?></h2>
						<div class="puff category-card__puff">
							<a href="<?php the_permalink(); ?>" style="<?php echo get_background_image_url( get_the_ID(), 'medium' ); ?>">
								<span class="puff__content"><?php the_title(); ?></span>
							</a>
						</div>
						<ul>
							<?php while( $posts->have_posts() ): $posts->the_post(); ?>
								<?php get_template_part( 'template-parts/listing' ) ?>
							<?php endwhile; ?>
						</ul>
						<a href="<?php echo esc_url( get_category_link( $cat->cat_ID ) ); ?>">More from ‘<?php echo $cat->name; ?>’</a>
					</li>
				<?php endif; ?>
			<?php endforeach; ?>
		</ul>
	</div>
</section>

<?php
get_footer();
?>
