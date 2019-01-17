<?php /* Template Name: Dienos pietūs senas */ get_header(); ?>

	<section class="pageLunch">
		<div class="inner">
			<div class="leftSide">
<!--            	<h3 class="">DIENOS PIETŪS-->
			 <?php
	                if (have_posts()) {
	                    the_title( '<h3 class="lineAfter">', '</h3>' );
	                }?>
<!--				</h3>-->
<!--				<h3 class="lineAfter">4 €</h3>-->
				<div class="text">
<!--					čia turi būti <p> tagai -->
                    <?php
                    if (have_posts()) {
                        the_post();
                        // spausdina visa content: ir tekstą ir paveikslėlius, išskyrus title
                        echo get_the_content();
                    }?>
				</div>
			</div>

			<div class="rightSide">
<!--				<img class="rightSide" src="--><?php //echo get_template_directory_uri();?><!--/images/gallery/img-7.jpg" alt="Dienos pietūs">-->
			</div>
		</div>
	</section>

<?php get_footer(); ?>
