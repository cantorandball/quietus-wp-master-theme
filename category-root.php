<?php
/**
 * @package WordPress
 * @subpackage The_Quietus_Master
 * @since The Quietus Master 1.0
 */

get_header();
?>

<section class="category-listings-featured">
	<header>
		<h1 class="category-name"><?php single_cat_title( '', true ); ?></h1>
	</header>
	<ul class="listings-featured">
		<?php for ( $i=0; $i < 3; $i++ ):
			if ( have_posts() ): the_post();
				get_template_part( 'template-parts/listing', 'featured' );
			endif;
		endfor; ?>
	</ul>
</section>

<div class="category-secondary">
	<section class="category-listings">
		<header>
			<h2><?php echo __( 'Recent Articles', 'quietus' ); ?></h2>
		</header>
		<?php if ( have_posts() ): ?>
			<ul class="listings">
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

<?php get_footer(); ?>
