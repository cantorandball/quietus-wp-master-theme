		</div>
		<footer class="page-footer">
			<ul class="page-footer-social">
				<li><a href="https://twitter.com/theQuietus" class="icon icon-twitter" title="Follow us on Twitter"><?php include(get_template_directory() . '/images/icon-twitter.svg'); ?></a></li>
				<li><a href="https://www.facebook.com/TheQuietus" class="icon icon-facebook" title="Follow us on Facebook"><?php include(get_template_directory() . '/images/icon-facebook.svg'); ?></a></li>
			</ul>
			<ul class="page-footer-links">
				<li><a href="">About</a></li>
				<li><a href="">Contact</a></li>
				<li><a href="">Who we are</a></li>
				<li><a href="">Code of Conduct</a></li>
				<li><a href="">Cookie Policy</a></li>
				<li><a href="">Terms &amp; Conditions</a></li>
				<li><a href="">Advertise</a></li>
			</ul>
		</footer>
		<?php wp_footer(); ?>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		</script>


		<script type="text/template" data-advert data-id="leaderboard">
			<img src="<?php echo get_template_directory_uri() . '/images/placeholders/ad-billboard.png'; ?>" width="970" height="250">
		</script>
		<script type="text/template" data-advert data-id="skyscraper-mini">
			<img src="<?php echo get_template_directory_uri() . '/images/placeholders/ad-medium.gif'; ?>" alt="" width="300" height="250">
		</script>
		<script type="text/template" data-advert data-id="skyscraper">
			<img src="<?php echo get_template_directory_uri() . '/images/placeholders/ad-filmstrip.gif'; ?>" border="0" width="300" height="600" alt="" class="img_ad">
		</script>
		<script type="text/template" data-advert-article>
			<img src="<?php echo get_template_directory_uri() . '/images/placeholders/ad-article-1.gif'; ?>" border="0" width="300" height="250" alt="" class="img_ad">
		</script>
		<script type="text/template" data-advert-article>
			<img src="<?php echo get_template_directory_uri() . '/images/placeholders/ad-article-1.gif'; ?>" border="0" width="300" height="250" alt="" class="img_ad">
		</script>
	</body>
</html>
