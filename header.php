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
	<div id="leaderboard">
	  <img src="<?php echo get_template_directory_uri() . '/images/placeholders/ad-billboard.png'; ?>" width="970" height="250">

	  <script type="text/javascript">
	    var height = $("leaderboard").getHeight();
	    if(height >= 250)  $("leaderboard").setStyle({ position:  "static" });
	    Event.observe(window, 'load', function() {
	      var height = $("leaderboard").getHeight();
	      if(height >= 250)  $("leaderboard").setStyle({ position:  "static" });
	    });
	  </script>
	</div>
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
				'depth' => 0
			) ); ?>
	   	</ul>
		<button id="nav--global__toggle">Toggle navigation</button>
	</nav>
	<div id="content">
