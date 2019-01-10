<footer>
    <div class="content">
        <div class="logo">
            <img src="<?php echo get_theme_mod('footer_logo'); ?>">
        </div>

        <?php wp_nav_menu(array(
    'theme_location' => 'footer_menu',
)); ?>
        <div class="sep"></div>

        <p class="info">
            <?php echo get_theme_mod('footer_text', 'Lorem ipsum'); ?>
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
