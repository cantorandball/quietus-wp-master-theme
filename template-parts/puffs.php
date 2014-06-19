<?php
/**
 * Displays a list of latest posts in the News and Album Reviews categories
 */
$latest_news = get_latest_news();
$latest_reviews = get_latest_reviews();
?>
<dl class="puffs">
	<?php if ( $latest_news->have_posts() ): ?>
	<dt class="puff__header"><?php echo( __( 'Latest News', 'quietus' ) ); ?></dt>
	<dd>
		<ul class="puff__list">
			<?php
			while ( $latest_news->have_posts() ): $latest_news->the_post();
				get_template_part( 'template-parts/puff' );
			endwhile;
			?>
		</ul>
	</dd>
	<?php endif; ?>
</dl>
<dl class="puffs">
	<?php if ( $latest_reviews->have_posts() ): ?>
	<dt class="puff__header"><?php echo( __( 'Latest Reviews', 'quietus' ) ); ?></dt>
	<dd>
		<ul class="puff__list">
			<?php
			while ( $latest_reviews->have_posts() ): $latest_reviews->the_post();
				get_template_part( 'template-parts/puff', 'album-reviews' );
			endwhile;
			?>
		</ul>
	</dd>
	<?php endif; ?>
</dl>
