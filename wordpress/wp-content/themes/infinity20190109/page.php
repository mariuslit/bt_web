<?php get_header(); ?>

<?php
if (have_posts()) {
    the_post();
?>

<div style="background: red; color: white;" class="pageContent">
    <?php echo get_the_content(); ?>
</div>

<?php
}
?>

<?php get_footer(); ?>