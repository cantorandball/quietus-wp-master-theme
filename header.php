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
	<div class="advert advert-leaderboard" id="leaderboard"></div>
	<header class="header">
		<h1 class="logo">
			<a href="/" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
				<?php bloginfo('name'); ?>
			</a>
		</h1>
		<div class="search-box">
			<?php get_search_form(); ?>
		</div>
	</header>
	<nav class="site-nav">
		<ul class="site-nav-primary">
			<?php wp_nav_menu( array(
				'container' => false,
				'items_wrap' => '%3$s',
				'depth' => 1
			) ); ?>
	   	</ul>
		<ul class="site-nav-secondary"><?php wp_nav_menu( array(
				'container' => false,
				'items_wrap' => '%3$s',
				'depth' => 0,
				'walker' => new quietus_sub_menu()
			) ); ?></ul>
	   	<div class="site-nav-overflow">
	   		<button class="site-nav-overflow-toggle">Toggle navigation</button>
			<ul class="site-nav-overflow-items"></ul>
	   	</div>
	</nav>
	<div class="page">
