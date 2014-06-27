<?php
/**
 * Displays a list of latest posts in the News category
 */
$latest_news = get_latest_news();
?>
<dl class="puffs">
	<?php if ( $latest_news->have_posts() ): ?>
	<dt class="puff-header"><?php echo( __( 'Latest News', 'quietus' ) ); ?></dt>
	<dd>
		<ul class="puff-list">
			<?php
			while ( $latest_news->have_posts() ): $latest_news->the_post();
				get_template_part( 'template-parts/puff' );
			endwhile;
			?>
		</ul>
	</dd>
	<?php endif; ?>
</dl>
