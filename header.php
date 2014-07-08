<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<meta http-equiv="author" content="The Quietus" />
	<meta http-equiv="contact" content="editor@thequietus.com" />
	<meta name="copyright" content="Copyright (c)2007-<?php echo date("Y"); ?> The Quietus. All Rights Reserved." />
	<meta name="description" content="A new rock music and pop culture website. Editorial independent music website offering news, reviews, features, interviews, videos and pictures" />
	<meta name="keywords" content="quietus, thequietus.com, get music videos, photos, reviews, interviews, newsletters, info on festivals, tours, clubs, concerts, releases, cd, indie, rock, pop, film, books, metal, rap, see photos, music videos, hip hop, dance, mash up, john doran, luke turner" />
	<?php wp_head(); ?>
</head>

<body>
	<div class="advert advert-leaderboard" id="leaderboard"></div>
	<header class="page-header">
		<div class="logo">
			<a href="/" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
				<?php bloginfo('name'); ?>
			</a>
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
	   	<div class="site-nav-overflow">
	   		<button class="site-nav-overflow-toggle">Toggle navigation</button>
			<ul class="site-nav-overflow-items"></ul>
	   	</div>
		<?php get_search_form(); ?>
	</nav>
	<div class="page">
