<?php get_header() ?>


<section class="posts">

    <?php
    $args = array(
        'posts_per_page' => 5,
        'offset' => 0,
        'category' => '',
        'category_name' => '',
        'orderby' => 'date',
        'order' => 'DESC',
        'include' => '', 'exclude' => '',
        'meta_key' => '',
        'meta_value' => '',
        'post_type' => 'post', 'post_mime_type' => '',
        'post_parent' => '',
        'author' => '',
        'post_status' => 'publish',
        'suppress_filters' => true
    );

    get_posts($args); ?><!-- Palo Alto -->

	<div class="content">

		<!-- get_template_part('... .php') įtraukia kitą .php failą, šiuo  atveju loop.php -->
		<!-- paleidžia loop failo duomenis-->
        <?php get_template_part('loop'); ?>

	</div>
</section>
<div class="pagination">
	<div class="content">
<!--		<div class="pages">-->
<!--			<button class="selected">1</button>-->
<!--			<button>2</button>-->
<!--			<button>3</button>-->
<!--		</div>-->

        <?php echo paginate_links(array('prev-next'=>false)); ?>

	</div>
</div>

<?php get_footer() ?>
