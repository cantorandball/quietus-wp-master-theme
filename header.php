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
	  <script type="text/javascript">
	    var googletag = googletag || {};
	    googletag.cmd = googletag.cmd || [];
	    (function() {
	      var gads = document.createElement("script");
	      gads.async = true;
	      gads.type = "text/javascript";
	      var useSSL = "https:" == document.location.protocol;
	      gads.src = (useSSL ? "https:" : "http:") + "//www.googletagservices.com/tag/js/gpt.js";
	      var node =document.getElementsByTagName("script")[0];
	      node.parentNode.insertBefore(gads, node);
	    })();
	  </script>
	  <div id="div-gpt-ad-988954517153641511-1">
	    <script type='text/javascript'>
	      googletag.cmd.push(function() {
	        googletag.defineSlot('/16916245/thequietus.com', [[728, 90],[970, 250]],'div-gpt-ad-988954517153641511-1')
	          .addService(googletag.pubads())
	          .setTargeting("topic", "music");
	        googletag.enableServices();
	        googletag.display('div-gpt-ad-988954517153641511-1');
	    });
	    </script>
	  </div>

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
