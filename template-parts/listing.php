<?php
if ( is_category() && get_queried_object_id() == get_the_category()[0]->cat_ID ) {
	$show_category = false;
} else {
	$show_category = true;
}
?>
<li class="listing">
	<?php if ( $show_category ): ?>
		<p class="category-title"><?php quietus_the_category( true ); ?></p>
	<?php endif; ?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="post-title"><?php the_title(); ?></a>
	<div class="post-standfirst"><?php the_excerpt(); ?></div>
</li>
