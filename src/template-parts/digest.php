<div class="digest">
	<h3>On The Quietus</h3>
	<dl class="digest-sections">
		<dt class="digest-section-title is-active">Latest Reviews</dt>
		<dd class="digest-section digest-section-album-reviews">
			<?php get_template_part( 'template-parts/puffs', 'album-reviews' ); ?>
		</dd>
		<dt class="digest-section-title">Editors Picks</dt>
		<dd class="digest-section">
			<ol>
			<?php
			$recent_posts = wp_get_recent_posts(array( 'category' => '4' ));
			foreach( $recent_posts as $recent ){
				echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="' . esc_attr($recent["post_excerpt"]) . '" >' . $recent["post_title"] . '</a></li>';
			} ?>
			</ol>
		</dd>
		<dt class="digest-section-title">Most Recent</dt>
		<dd class="digest-section">
			<ol>
			<?php
			$recent_posts = wp_get_recent_posts();
			foreach( $recent_posts as $recent ){
				echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="' . esc_attr($recent["post_excerpt"]) . '" >' . $recent["post_title"] . '</a></li>';
			} ?>
			</ol>
		</dd>
	</dl>
</div>
