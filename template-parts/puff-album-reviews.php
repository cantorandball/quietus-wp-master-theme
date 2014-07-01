<?php
$current_category = null;
$categories = get_the_category();
if ( $categories )
    $current_category = $categories[0]->slug;
?>
<li class="puff puff-album-review">
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" style="<?php echo get_background_image_url( get_the_ID(), 'medium' ); ?>">
		<span class="puff-content">
			<span class="puff-release"><?php the_field('album_title'); ?></span>
			<span class="puff-artist"><?php the_field('album_artist'); ?></span>
		</span>
	</a>
</li>
