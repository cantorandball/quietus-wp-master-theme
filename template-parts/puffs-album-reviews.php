<?php
/**
 * Displays a list of latest posts in the Album Reviews category
 */
$latest_reviews = get_latest_reviews();
?>
<dl class="puffs puffs-album-reviews">
	<?php if ( $latest_reviews->have_posts() ): ?>
	<dt class="puff-header"><?php echo( __( 'Latest Reviews', 'quietus' ) ); ?></dt>
	<dd>
		<ul class="puff-list">
			<?php
			while ( $latest_reviews->have_posts() ): $latest_reviews->the_post();
				get_template_part( 'template-parts/puff', 'album-reviews' );
			endwhile;
			?>
		</ul>
	</dd>
	<?php endif; ?>
</dl>
