<li>
	<h3><?php the_category(); ?></h3>
	<h2>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php the_title(); ?>
		</a>
	</h2>
	<div class="listing__excerpt">
		<?php the_excerpt(); ?>
	</div>
</li>
