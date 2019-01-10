<footer>
	<div class="content">
		<div class="logo">
			<?php //the_custom_logo(); ?>
            <?php bloginfo('name'); ?>
		</div>
			<!--
        <ul class="menu">
            <li><a href="#" class="selected">HOME</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">ARCHIVE</a></li>
            <li><a href="#">CONTACT</a></li>
            <li><a href="#"><img src="<?php /*echo get_template_directory_uri()*/ ?>/img/search_light.png"></a></li>
        </ul>
            <?php wp_nav_menu(array(
            		'theme_location' => 'footer_menu',
				)); ?>
-->

			<div class="sep"></div>

			<p class="info">
				<!--		description - funkcijos kintamasis kuris radasi Customizing Site Identity Taglina		-->
                <?php echo get_bloginfo('description'); ?>
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




