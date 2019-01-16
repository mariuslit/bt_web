<?php /* Template Name: Dienos pietūs Lunch3 */
get_header(); ?>

<section class="pageLunch">
	<div class="inner">
		<div class="leftSide">
			<h3 class="">DIENOS PIETŪS</h3>
			<h3 class="lineAfter">4 €</h3>
			<div class="text">
				<p><?php echo get_theme_mod('patiekalas_pirmas', 'Lorem Ipsum 1'); ?></p>
				<p><?php echo get_theme_mod('patiekalas_antras', 'Lorem Ipsum 2'); ?></p>
			</div>
		</div>

		<div class="rightSide">
			<img src="<?php echo get_theme_mod('img_patiekalas_pirmas'); ?>">
			<img src="<?php echo get_theme_mod('img_patiekalas_antras'); ?>">
			<!--				<img class="rightSide" src="-->
            <?php //echo get_template_directory_uri();?><!--/images/gallery/img-7.jpg" alt="Dienos pietūs">-->
		</div>
	</div>
</section>

<?php get_footer(); ?>
