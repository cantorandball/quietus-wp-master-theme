<?php
if ( is_category() && get_queried_object_id() == get_the_category()[0]->cat_ID ) {
	$show_category = false;
} else {
	$show_category = true;
}
?>
<li class="listing">
	<?php if ( has_post_thumbnail() ): ?>
		<div class="listing-thumbnail">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium' )[0]; ?>" alt="<?php the_title_attribute(); ?>">
			</a>
		</div>
	<?php endif; ?>
	<div class="listing-content">
		<?php if ( $show_category ): ?>
			<h3 class="listing-category-title">
				<?php quietus_the_category( true ); ?>
			</h3>
		<?php endif; ?>
		<h2 class="listing-post-title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>
		<div class="listing-excerpt">
			<?php the_excerpt(); ?>
		</div>
	</div>
</li>
