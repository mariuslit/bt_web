<?php get_header(); ?>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
//        echo get_the_content();
        ?>
		<div style="background-color: yellow;" class="pageContent">
            <?php echo get_the_content(); ?>

		</div>
    <?php }
} ?>

<?php get_footer(); ?>
