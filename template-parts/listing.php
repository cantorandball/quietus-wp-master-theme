<li class="puff">
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" style="background-image:url('<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium' )[0]; ?>')">
		<span class="puff__title"><?php the_title(); ?></span>
	</a>
</li>
