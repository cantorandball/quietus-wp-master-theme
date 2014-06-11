<?php
/**
 * Displays a list of posts related to the current one
 */
global $wp_query;
$post_id = $wp_query->post->ID;
$related_posts = get_related_posts( $post_id );

if ( $related_posts->have_posts() ): ?>
<dl>
	<dt>Related Articles</dt>
	<dd>
		<ul>
			<?php
			while ( $related_posts->have_posts() ): $related_posts->the_post();
			get_template_part( 'listing' );
			endwhile;
			?>
		</ul>
	</dd>
</dl>
<?php endif; ?>
