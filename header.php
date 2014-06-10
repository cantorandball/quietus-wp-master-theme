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
		</header>
		<nav id="site-nav">
		</nav>
