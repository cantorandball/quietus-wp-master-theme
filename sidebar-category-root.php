<?php global $child_categories; ?>

<aside role="complementary" class="category-side-bar">
	<?php if ( $child_categories ): ?>
		<div class="sub-categories">
			<h2 class="section-title"><?php echo __( sprintf( 'Sections', single_cat_title( '', false ) ), 'quietus' ); ?></span></h2>
			<ul>
				<?php foreach ( $child_categories as $cat ): ?>
					<li>
						<a href="<?php echo esc_url( get_category_link( $cat ) ); ?>">
							<h2 class="category-name"><?php echo $cat->name; ?></h2>
						</a>
						<small class="category-excerpt">
							<?php echo $cat->description; ?>
						</small>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	<?php endif; ?>

	<!-- PLACEHOLDER ADVERT -->
	<div id="skyscraper-mini" class="advert"></div>
</aside>
