<li class="puff">
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" style="background-image:url('<?= wp_get_attachment_image_src( get_post_thumbnail_id($related_posts), 'medium' )[0] ?>')">
		<span class="puff__title"><?php the_title(); ?></span>
	</a>
</li>
