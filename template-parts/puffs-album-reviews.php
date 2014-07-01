<?php
/**
 * Displays a list of latest posts in the Album Reviews category
 */
$latest_reviews = get_latest_reviews();
?>
<div class="puffs puffs-album-reviews">
	<?php if ( $latest_reviews->have_posts() ): ?>
		<ul class="puff-list">
			<?php
			while ( $latest_reviews->have_posts() ): $latest_reviews->the_post();
				get_template_part( 'template-parts/puff', 'album-reviews' );
			endwhile;
			?>
		</ul>
	<?php endif; ?>
</div>
