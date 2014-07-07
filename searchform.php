<form action="<?php echo home_url( '/' ); ?>" role="search" method="get" id="site-search">
	<input type="search" name="s" id="search-input" required value="<?php the_search_query(); ?>">
	<button type="submit" class="<?php if(is_search()) {echo 'active';}; ?>"><?php echo( __( 'Search', 'quietus' ) ); ?>
		<?php include(get_template_directory() . '/images/icon-search.svg'); ?>
	</button>
	<button type="button">Cancel
		<?php include(get_template_directory() . '/images/icon-cancel.svg'); ?>
	</button>
</form>
