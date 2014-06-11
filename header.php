<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset');?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title('|', true, 'right'); ?></title>
		<?php wp_head(); ?>
	</head>

	<body>
		<header id="header">
			<h1 id="header__logo"><?php bloginfo('name'); ?></h1>
			<div class="header__search">
				<form action="<?php echo home_url( '/' ); ?>" role="search" method="get">
					<input type="search" name="s" id="s" placeholder="<?php echo( esc_attr( __( 'Search The Quietus', 'quietus' ) ) ); ?>">
					<button type="submit"><?php echo( __( 'Search', 'quietus' ) ); ?></button>
				</form>
			</div>
		</header>
		<nav class="nav--global">
			<ul class="nav--global__primary">
				<?php wp_nav_menu( array(
					'container' => false,
					'items_wrap' => '%3$s',
					'depth' => 0
				) ); ?>
		   </ul>
		</nav>
