<?php if ( has_post_thumbnail() ): ?>
<figure class="post__featured-image" itemprop="image">
	<?php the_post_thumbnail(); ?>
</figure>
<?php endif; ?>
