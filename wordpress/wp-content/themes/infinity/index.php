<?php get_header(); ?>
	<section class="posts">
        
		<div class="content">
			<?php get_template_part('loop'); ?>
		</div>
        
	</section>

	<div class="pagination">
		<div class="content">
<!--
			<div class="pages">
				<button class="selected">1</button>
				<button>2</button>
				<button>3</button>
			</div>
-->
            
            <?php echo paginate_links(array('prev_next' => false)); ?>
		</div>
	</div>
<?php get_footer(); ?>
