	<footer>
		<div class="content">
			<div class="logo">
					<!-- Palo Alto -->
					<?php bloginfo('name'); ?>
			</div>
			<!-- <ul class="menu">
				<li><a href="#" class="selected">HOME</a></li>
				<li><a href="#">ABOUT</a></li>
				<li><a href="#">ARCHIVE</a></li>
				<li><a href="#">CONTACT</a></li>
				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/search_light.png"></a></li>
			</ul> -->
			<?php wp_nav_menu(array(
				'theme_location' => 'footer_menu',
			)); ?>
			<div class="sep"></div>
			<p class="info">
					<!-- Nunc placerat dolor at lectus hendrerit dignissim. Ut tortor sem, consectetur nec hendrerit ut, ullamcorper ac odio. Donec viverra ligula at quam tincidunt imperdiet. Nulla mattis tincidunt auctor. -->
					<?php bloginfo('description'); ?>
			</p>
			<div class="sep"></div>
			<p class="copy">
				&copy; 2015 - Palo Alto. All Rights Reserved. Designed & Developed by
				<a href="#">PixelBuddha Team</a>
			</p>
			<ul class="social">
				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png"></a></li>
				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png"></a></li>
				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png"></a></li>
				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/pinterest.png"></a></li>
			</ul>
		</div>
	</footer>
</body>
</html>
