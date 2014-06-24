<?php
$current_category = null;
$categories = get_the_category();
if ( $categories )
    $current_category = $categories[0]->slug;
?>
<li class="puff <?= $current_category ?>">
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" style="<?php echo get_background_image_url( get_the_ID(), 'medium' ); ?>">
		<span class="puff__content"><?php the_title(); ?></span>
	</a>
</li>
