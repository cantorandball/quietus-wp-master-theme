<?php
if ( is_category() && get_queried_object_id() == get_the_category()[0]->cat_ID ) {
	$show_category = false;
} else {
	$show_category = true;
}
?>
<li class="listing-featured">
	<div class="puff">
		<a href="<?php the_permalink(); ?>" style="<?php echo get_background_image_url( get_the_ID(), 'medium' ); ?>">
			<div class="puff-content">
				<h3 class="category-title"><?php quietus_the_category( false ); ?></h3>
				<h2 class="post-title"><?php the_title(); ?></h2>
			</div>
		</a>
	</div>
</li>
