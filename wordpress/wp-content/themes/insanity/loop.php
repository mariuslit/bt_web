<?php
if (have_posts()) { // ar wp atrado nors vieną postą
    while (have_posts()) {
        the_post(); // imta naujausią postą iš DB ir patalpina į global kintamajį $post
        ?>
		<article>
            <?php if (has_post_thumbnail()) { ?>
				<div class="aheader">
					<img src="<?php echo get_the_post_thumbnail_url() ?>">
					<!--                <img src="--><?php //echo get_template_directory_uri()?><!--/img/img1.jpg">-->
				</div>
            <?php } ?>

			<div class="abody">
				<h4><a href="<?php echo get_template_directory_uri() ?>/#">I Do Observe</a></h4>
				<h6><?php the_date('Y.m.d'); ?></h6>
				<h1><?php echo get_the_title(); ?></h1>

				<div class="sep"></div>

				<!--  įterpia straipsnio santrauką -->
                <?php echo the_excerpt(); ?>

				<div class="afooter">

					<a href="<?php echo get_the_permalink() ?>" class="more">Read More</a>

					<div class="tags">
                        <?php
                        $tags = get_the_tags();

                        if($tags) {
                            foreach ($tags as $tag) {

                            	$tagUrl=get_bloginfo('url').'/tag/'.$tag->slug;

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
}
?>
