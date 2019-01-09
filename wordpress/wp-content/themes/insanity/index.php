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

        get_posts( $args ); ?><!-- Palo Alto -->

		<div class="content">
			<article>
				<div class="abody">
					<h4><a href="#">I Do Travel</a></h4>
					<h6>Sep 20</h6>
					<h1>
							No difference how many peaks you reach if there was no pleasure in the climb.
					</h1>
					<div class="sep"></div>
					<p>
							Quisque congue lacus mattis massa luctus, nec hendrerit purus aliquet. Ut ac elementum urna. Pellentesque suscipit metus et egestas congue. Duis eu pellentesque turpis, ut maximus metus. Sed ultrices tellus vitae rutrum congue. Fusce luctus augue id nisl suscipit, vel sollicitudin orci egestas. Morbi posuere venenatis ipsum, ac vestibulum quam dignissim efficitur. Ut vitae rutrum augue, in volutpat quam. Cras a viverra ipsum. Aenean ut consequat ex, vitae vulputate nunc. Vestibulum metus nisi, aliquam sed tincidunt sit amet, pretium et augue.
					</p>
					<div class="afooter">
						<a href="<?php echo get_template_directory_uri()?>/#" class="more">Read More</a>
						<div class="tags">
								<a href="#">#Yosemite</a>
								<a href="#">#Peak</a>
								<a href="#">#Explorer</a>
						</div>
					</div>
				</div>
			</article>
			<article>
				<div class="aheader">
					<img src="<?php echo get_template_directory_uri()?>/img/img1.jpg">
				</div>
				<div class="abody">
					<h4><a href="<?php echo get_template_directory_uri()?>/#">I Do Observe</a></h4>
					<h6>Sep 18</h6>
					<h1>
							You know, I'd rather argue with you, then laugh with anyone else.
					</h1>
					<div class="sep"></div>
					<p>
							Curabitur luctus placerat lorem id eleifend. Nulla ac lacus finibus, tempor velit hendrerit, vulputate lacus. Nunc fermentum nunc sem, ac eleifend tellus cursus nec. Donec a euismod est, vitae accumsan purus. Proin aliquet ex massa, ac finibus magna commodo vitae.
					</p>
					<p>
							Quisque congue lacus mattis massa luctus, nec hendrerit purus aliquet. Ut ac elementum urna. Pellentesque suscipit metus et egestas congue. Duis eu pellentesque turpis, ut maximus metus. Sed ultrices tellus vitae rutrum congue. Fusce luctus augue id nisl suscipit, vel sollicitudin orci egestas. Morbi posuere venenatis ipsum, ac vestibulum quam dignissim efficitur. Ut vitae rutrum augue, in volutpat quam. Cras a viverra ipsum. Aenean ut consequat ex, vitae vulputate nunc. Vestibulum metus nisi, aliquam sed tincidunt sit amet, pretium et augue.
					</p>
					<p>
							Sed sagittis commodo dolor. Vivamus elementum sem sed sapien bibendum viverra. Curabitur semper scelerisque turpis eu ullamcorper. Morbi tincidunt auctor orci id consequat. Nulla odio mi, iaculis id congue quis, euismod id nisi. In varius congue diam, et viverra lorem bibendum ut.
					</p>
					<div class="afooter">
						<a href="<?php echo get_template_directory_uri()?>/#" class="more">Read More</a>
						<div class="tags">
								<a href="#">#Yosemite</a>
								<a href="#">#Peak</a>
								<a href="#">#Photo</a>
						</div>
					</div>
				</div>
			</article>
		</div>
	</section>
	<div class="pagination">
		<div class="content">
			<div class="pages">
				<button class="selected">1</button>
				<button>2</button>
				<button>3</button>
			</div>
		</div>
	</div>

<?php get_footer() ?>
