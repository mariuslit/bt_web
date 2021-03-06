<?php get_header(); ?>

<section class="posts">
    <div class="content">
        <?php
        if (have_posts()) {
            the_post();
        ?>
        <article>
            <?php if(has_post_thumbnail()) { ?>
            <div class="aheader">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>">
            </div>
            <?php } ?>

            <div class="abody">
                <!--        <h4><a href="#">I Do Observe</a></h4>-->
                <h6><?php the_date('Y.m.d'); ?></h6>
                <h1>
                    <?php echo get_the_title(); ?>
                </h1>

                <div class="sep"></div>

                <?php the_content(); ?>

                <div class="afooter">
                    <div class="tags">
                        <?php
            $tags = get_the_tags();

            if ($tags) {
                foreach ($tags as $tag) {
                    $tagUrl = get_bloginfo('url').'/tag/'.$tag->slug;

                    echo '<a href="'.$tagUrl.'">#'.$tag->name.'</a> ';
                }
            }
                        ?>
                    </div>
                </div>
            </div>
        </article>

        <?php
        }
        ?>
    </div>
</section>

<?php get_footer(); ?>