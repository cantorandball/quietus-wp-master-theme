<?php
$current_category = null;
$categories = get_the_category();
if ( $categories )
    $current_category = $categories[0]->slug;
?>
<li class="puff <?= $current_category ?>">
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" style="background-image:url('<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium' )[0]; ?>')">
		<span class="puff__content">
			<span class="puff__release"><?php the_field('album_title'); ?></span>
			<span class="puff__artist"><?php the_field('album_artist'); ?></span>
		</span>
	</a>
</li>
