<?php 
/* Template Name: Kontaktai */ 

get_header();
?>


<style>
    .has-2-columns {
        display: flex;
    }
    
    .has-2-columns .wp-block-column { 
        width: 50%;
        padding: 50px;
    }
</style>

<section class="fullWidth" style="background: #fff;">
    <?php
        if (have_posts()) {
            the_post();
            
            echo get_the_content();
        }
    ?>
</section>

<?php get_footer(); ?>