<?php /* Template Name: Greitasis meniu */
get_header(); ?>

<section class="menuQuick">
	<div class="inner">
        <?php
        if (have_posts()) {
            the_post();
            echo get_the_content();
        }
        ?>
	</div>
</section>

<?php get_footer(); ?>






