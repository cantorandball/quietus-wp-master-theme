<?php global $child_categories; ?>

<?php if ( $child_categories ): ?>
	<aside role="complementary" class="layout__sidebar--wider side-bar">
		<div class="child-categories">
			<h2 class="child-categories__title"><?php echo __( sprintf( 'In %s', single_cat_title( '', false ) ), 'quietus' ); ?></h2>
			<ul>
				<?php foreach ( $child_categories as $cat ): ?>
					<li>
						<a href="<?php echo esc_url( get_category_link( $cat ) ); ?>">
							<h2><?php echo $cat->name; ?></h2>
						</a>
						<div class="child-categories__excerpt">
							<?php echo $cat->description; ?>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>

		<!-- PLACEHOLDER ADVERT -->
		<div id="skyscraper--mini" class="advert"></div>
	</aside>
<?php endif; ?>
