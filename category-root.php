<?php
/**
 * @package WordPress
 * @subpackage The_Quietus_Master
 * @since The Quietus Master 1.0
 */

get_header();
?>

<section role="main" class="category">
	<div class="layout__jumbotron">
		<header>
			<h2 class="category__title"><?php single_cat_title( '', true ); ?></h2>
		</header>

		<ul class="featured-articles">
			<?php for ( $i=0; $i < 3; $i++ ): ?>
				<?php if ( have_posts() ): the_post(); ?>
					<li class="featured-article">
						<div class="puff featured-article__puff">
							<a href="<?php the_permalink(); ?>" style="<?php echo get_background_image_url( get_the_ID(), 'medium' ); ?>">
								<div class="puff__content">
									<h3 class="featured-article__category-title">
										<?php quietus_the_category( false ); ?>
									</h3>
									<h2 class="featured-article__title">
										<?php the_title(); ?>
									</h2>
								</div>
							</a>
						</div>
					</li>
				<?php endif; ?>
			<?php endfor; ?>
		</ul>
	</div>

	<div class="layout__content--wider">
		<header>
			<h2 class="category__title"><?php echo __( 'Recent articles', 'quietus' ); ?></h2>
		</header>
		<?php if ( have_posts() ): ?>
			<div class="category__post-listing">
				<ul>
					<?php
					while( have_posts() ): the_post();
					get_template_part( 'template-parts/listing' );
					endwhile;
					?>
				</ul>
			</div>
			<?php get_template_part( 'template-parts/pagination' ); ?>
		<?php endif; ?>
	</div>
</section>

<?php
get_sidebar( 'category-root' );
get_footer();
?>
