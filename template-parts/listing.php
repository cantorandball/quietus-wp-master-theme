<?php
if ( is_category() && get_queried_object_id() == get_the_category()[0]->cat_ID ) {
	$show_category = false;
} else {
	$show_category = true;
}
?>
<li class="listing">
	<?php if ( $show_category ): ?>
		<h3 class="category-title"><?php quietus_the_category( true ); ?></h3>
	<?php endif; ?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		<h2 class="post-title"><?php the_title(); ?></h2>
	</a>
	<div class="post-standfirst"><?php the_excerpt(); ?></div>
</li>
