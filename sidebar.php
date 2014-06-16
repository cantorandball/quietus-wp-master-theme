<?php
/**
 * Default sidebar
 * Empty for now, but likely to include ad slots.
 */
?>

<aside role="complementary" class="layout__sidebar side-bar">
	<!-- PLACEHOLDER ADVERT -->
	<div id="skyscraper--mini" class="advert">
		<img src="<?php echo get_template_directory_uri() . '/images/placeholders/ad-medium.gif'; ?>" alt="" width="300" height="250">
	</div>
	<?php get_template_part( 'latest-news-and-reviews' ); ?>
	<!-- PLACEHOLDER ADVERT -->
	<div id="skyscraper" class="advert">
		<img src="<?php echo get_template_directory_uri() . '/images/placeholders/ad-filmstrip.gif'; ?>" border="0" width="300" height="600" alt="" class="img_ad">
	</div>
</aside>
