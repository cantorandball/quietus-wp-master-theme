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

	<header>
		<h1 class="category-name"><?php single_cat_title( '', true ); ?></h1>
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

<?php get_sidebar( 'category' ); ?>

<?php get_footer(); ?>
