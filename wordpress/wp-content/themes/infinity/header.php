<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Blog</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri(); ?>/style.css" />
	<!-- <script src="main.js"></script> -->
</head>
<body>
	<header>
		<div class="content">
			<div class="logo">
				<!-- Palo Alto -->
				<?php bloginfo('name'); ?>
			</div>
			<nav>
				<span class="menu-button" tabindex="0"><img src="<?php echo get_template_directory_uri(); ?>/img/menu.svg"></span>
				<!-- <ul>
					<li	class="menu-item"><a href="#">HOME</a></li>
					<li	class="menu-item"><a href="#">ABOUT</a></li>
					<li	class="menu-item"><a href="#">ARCHIVE</a></li>
					<li	class="menu-item"><a href="#">CONTACT</a></li>
				</ul> -->
				<?php wp_nav_menu(array(
					'theme_location' => 'header_menu',
				)); ?>
				<span><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/search.png"></a></span>
			</nav>
		</div>
	</header>
