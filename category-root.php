<?php
/**
 * @package WordPress
 * @subpackage The_Quietus_Master
 * @since The Quietus Master 1.0
 */

get_header();
?>

<section role="main" class="category">
	<header>
		<h2 class="category-title"><?php single_cat_title( '', true ); ?></h2>
	</header>

	<ul class="featured-articles">
		<?php for ( $i=0; $i < 5; $i++ ): ?>
			<?php if ( have_posts() ): the_post(); ?>
				<li class="featured-article">
					<div class="puff featured-article-puff">
						<a href="<?php the_permalink(); ?>" style="<?php echo get_background_image_url( get_the_ID(), 'medium' ); ?>">
							<div class="puff-content">
								<h3 class="featured-article-category-title">
									<?php quietus_the_category( false ); ?>
								</h3>
								<h2 class="featured-article-title">
									<?php the_title(); ?>
								</h2>
							</div>
						</a>
					</div>
				</li>
			<?php endif; ?>
		<?php endfor; ?>
	</ul>
</section>
<div class="category-sub-content">
	<section class="category category-recent">
		<header>
			<h2 class="category-title"><?php echo __( 'Recent articles', 'quietus' ); ?></h2>
		</header>
		<?php if ( have_posts() ): ?>
			<ul class="listings category-listings">
				<?php
				while( have_posts() ): the_post();
				get_template_part( 'template-parts/listing' );
				endwhile;
				?>
			</ul>
			<?php get_template_part( 'template-parts/pagination' ); ?>
		<?php endif; ?>
	</section>
	<?php get_sidebar( 'category-root' ); ?>
</div>

<?php
get_footer();
?>
