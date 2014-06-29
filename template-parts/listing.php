<?php
if ( is_category() && get_queried_object_id() == get_the_category()[0]->cat_ID ) {
	$show_category = false;
} else {
	$show_category = true;
}
?>
<li class="listing">
	<?php if ( has_post_thumbnail() ): ?>
	<a class="listing-thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" style="background-image:url(<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium' )[0]; ?>)">
		View article
	</a>
	<?php endif; ?>
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
</li>
