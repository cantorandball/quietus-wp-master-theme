<?php
/**
 * Displays a list of latest posts
 * @var $latest_news_and_reviews wp_query object containing latest posts
 */
$latest_news_and_reviews = get_latest_news_and_reviews();

if ( $latest_news_and_reviews->have_posts() ): ?>
<dl>
	<dt>Latest News &amp; Reviews</dt>
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