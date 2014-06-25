<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<?php wp_head(); ?>
</head>

<body class="">
	<div id="leaderboard" class="advert advert--leaderboard"></div>
	<header id="header">
		<h1 id="header__logo">
			<a href="/" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
				<?php bloginfo('name'); ?>
			</a>
		</h1>
		<div id="header__search">
			<?php get_search_form(); ?>
		</div>
	</header>
	<nav id="nav--global">
		<ul class="nav--global__primary">
			<?php wp_nav_menu( array(
				'container' => false,
				'items_wrap' => '%3$s',
				'depth' => 1
			) ); ?>
	   	</ul>
		<button id="nav--global__toggle">Toggle navigation</button>
	</nav>
	<div class="layout__page">
