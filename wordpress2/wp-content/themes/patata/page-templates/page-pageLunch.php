<?php /* Template Name: Dienos pietūs */
get_header(); ?>

<style>
	.pageLunch .inner {
		background-color: <?php echo get_theme_mod('background_colorM'); ?>;
		background-color: <?php echo get_theme_mod('footer_color'); ?>;

	}
</style>

<section class="pageLunch">
	<div class="inner">
		<div class="leftSide">
			<h3 class="lineAfter"><?php echo get_theme_mod('text_title', 'Lorem Ipsum'); ?></h3>
			<div class="text">
				<p><?php echo get_theme_mod('patiekalas_pirmas', 'Lorem Ipsum'); ?></p>
				<p><?php echo get_theme_mod('patiekalas_antras', 'Lorem Ipsum'); ?></p>
				<p><?php echo get_theme_mod('dienos_pietu_pastabos', '-'); ?></p>
			</div>
		</div>

		<div class="rightSide">
			<img src="<?php echo get_theme_mod('img_patiekalas_pirmas'); ?>">
			<img src="<?php echo get_theme_mod('img_patiekalas_antras'); ?>">
		</div>
	</div>
</section>

<?php get_footer(); ?>
