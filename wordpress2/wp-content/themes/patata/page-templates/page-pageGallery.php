<?php /* Template Name: Galerija */
get_header(); ?>

<section class="pageGallery">
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






