<?php
if (have_posts()) { // ar wp atrado nors vieną postą
    while (have_posts()) {
        the_post(); // imti naujausią postą iš DB ir patalpina į global kintamajį $post
        ?>
        <article>
            <?php if (has_post_thumbnail()) { ?>
                <div class="aheader">
                    <img src="<?php echo get_the_post_thumbnail_url() ?>">
                </div>
            <?php } ?>

        <?php
    }
}
?>
