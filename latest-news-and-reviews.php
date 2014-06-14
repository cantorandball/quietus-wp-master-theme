<?php
/**
 * Displays a list of latest posts in the News and Album Reviews categories
 */
$latest_news_and_reviews = get_latest_news_and_reviews();

if ( $latest_news_and_reviews->have_posts() ): ?>
<dl class="puffs">
	<dt class="puff__header"><?php echo( __( 'Latest News & Reviews', 'quietus' ) ); ?></dt>
	<dd>
		<ul>
			<?php
			while ( $latest_news_and_reviews->have_posts() ): $latest_news_and_reviews->the_post();
			get_template_part( 'listing' );
			endwhile;
			?>
		</ul>
	</dd>
</dl>
<?php endif; ?>
