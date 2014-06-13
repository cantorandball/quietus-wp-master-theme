<li class="puff" style="background-image:url('<?= wp_get_attachment_image_src( get_post_thumbnail_id($related_posts), 'medium' )[0] ?>')">
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		<span class="puff__title"><?php the_title(); ?></span>
	</a>
</li>
