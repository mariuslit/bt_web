<?php /* Template Name: Kontaktai */
get_header();
?>

<section class="fullWidth" style="background: #fff;">
    <?php
    if (have_posts()) {
        the_post();

        echo get_the_content();
    }
    ?>
</section>

<?php get_footer(); ?>

