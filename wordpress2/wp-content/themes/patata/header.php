<!DOCTYPE html>
<html>
<head>

	<title>Restoranas Patata</title>

	<link rel="icon" href="images/favicon.jpg">

	<meta charset="utf-8">

	<link href="https://fonts.googleapis.com/css?family=Lato:400,400i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Thasadith:400,400i,700,700i" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
	<link rel='stylesheet'
	      href='https://use.fontawesome.com/releases/v5.6.3/css/all.css'
	      integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/'
	      crossorigin='anonymous'>
	<!--	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">

	<!--	<script src="javascript.js" defer></script>-->
</head>
<body>

<header>
	<nav class="inner">
		<div class="leftSide">
			<a class="" href="index.php">
                <?php the_custom_logo(); ?>
				<img class="logo" src="<?php echo get_template_directory_uri();?>/images/logo.jpg" alt="logo">
			</a>
		</div>
		<ul class="rightSide">
            <?php wp_nav_menu(array('theme_location' => 'header_menu',
                'menu-class'=>'menu')); ?>
<!--			<a class="" href="--><?php //echo get_template_directory_uri(); ?><!--/index.php">DIENOS PIETŪS</a>-->
<!--			<a class="" href="--><?php //echo get_template_directory_uri(); ?><!--/m-page-pageMenu.php">MENIU</a>-->
<!--			<a class="" href="--><?php //echo get_template_directory_uri(); ?><!--/m-page-pageGallery.php">nuotraukos</a>-->
<!--			<a class="" href="--><?php //echo get_template_directory_uri(); ?><!--/m-page-pageContacts.php">Kontaktai</a>-->
		</ul>
		<button class="buttonSandwich">
			<img src="<?php echo get_template_directory_uri(); ?>/images/menu-button-sandwich-bold.png" class="" alt="menu">
		</button>
		<div class="clear"></div>
	</nav>
</header>









