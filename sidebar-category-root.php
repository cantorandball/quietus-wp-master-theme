<?php global $child_categories; ?>

<aside role="complementary" class="category-side-bar">
	<?php if ( $child_categories ): ?>
		<h2><?php echo __( sprintf( 'Sections', single_cat_title( '', false ) ), 'quietus' ); ?></span></h2>
		<dl class="category-list">
			<?php foreach ( $child_categories as $cat ): ?>
				<dt>
					<a href="<?php echo esc_url( get_category_link( $cat ) ); ?>" class="category-name">
						<?php echo $cat->name; ?>
					</a>
				</dt>
				<dd><?php echo $cat->description; ?></dd>
			<?php endforeach; ?>
		</dl>
	<?php endif; ?>

	<!-- PLACEHOLDER ADVERT -->
	<div id="skyscraper-mini" class="advert"></div>
</aside>
