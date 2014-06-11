<form action="<?php echo home_url( '/' ); ?>" role="search" method="get">
	<input type="search" name="s" id="s" placeholder="<?php echo( esc_attr( __( 'Search The Quietus', 'quietus' ) ) ); ?>">
	<button type="submit"><?php echo( __( 'Search', 'quietus' ) ); ?></button>
</form>
