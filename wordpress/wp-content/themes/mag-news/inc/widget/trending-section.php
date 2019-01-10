<?php
/**
 * Register Feaured Post Section.
 *
 * @package mag_news
 */

function mag_news_action_trending_section() {

  register_widget( 'mag_news_trending_section' );
  
}
add_action( 'widgets_init', 'mag_news_action_trending_section' );

class mag_news_trending_section extends WP_Widget{ 

	function __construct() {
		global $control_ops;
		$widget_ops = array(
		  'classname'   => 'trending-section',
		  'description' => esc_html__( 'Add Widget to Display trending Post.', 'mag-news' )
		);
		parent::__construct( 'mag_news_trending_section',esc_html__( 'MN: Trending', 'mag-news' ), $widget_ops, $control_ops );
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 
		  'title'				=> esc_html__( 'Trending', 'mag-news' ),		
		  'category'         	=> '',
		  'number'           	=> 4, 
		  'show_post_meta'	 	=> true,		  	
		) );
		$title     			= isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : esc_html__( 'Trending', 'mag-news' );
		$category 			= isset( $instance['category'] ) ? absint( $instance['category'] ) : 0;
		$number    			= isset( $instance['number'] ) ? absint( $instance['number'] ) : 4;    
		$show_post_meta 	= isset( $instance['show_post_meta'] ) ? (bool) $instance['show_post_meta'] : true;
		
	?>
	    <p>
	    	<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php echo esc_html__( 'Title:', 'mag-news' ); ?></label>
	    	<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
		</p>	
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'category' ) ); ?>">
				<?php esc_html_e( 'Slider Category:', 'mag-news' ); ?>			
			</label>

			<?php
				wp_dropdown_categories(array(
					'show_option_none' => '',
					'class' 		  => 'widefat',
					'show_option_all'  => esc_html__('From Recent Post','mag-news'),
					'name'             => esc_attr($this->get_field_name( 'category' )),
					'selected'         => absint( $category ),          
				) );
			?>
		</p>
	    <p>
	    	<label for="<?php echo esc_attr($this->get_field_id( 'number' )); ?>">
	    		<?php echo esc_html__( 'Choose Number', 'mag-news' );?>    		
	    	</label>

	    	<input class="tiny-text" id="<?php echo esc_attr($this->get_field_id( 'number' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'number' )); ?>" type="number" step="1" min="1" value="<?php echo esc_attr($number); ?>" max="10" />
	    </p>
	    <p><input class="checkbox" type="checkbox"<?php checked( $show_post_meta ); ?> id="<?php echo esc_attr($this->get_field_id( 'show_post_meta' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'show_post_meta' )); ?>" />
	    <label for="<?php echo esc_attr($this->get_field_id( 'show_post_meta' )); ?>"><?php echo esc_html__( 'Enable Post Meta', 'mag-news' ); ?></label></p>	    	      	    
    <?php
    }

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['category'] 			= absint( $new_instance['category'] );
		$instance['number'] 			= (int) $new_instance['number'];
		$instance['show_post_meta'] 	= (bool) $new_instance['show_post_meta'];  	   
		
		return $instance;
	}

    function widget( $args, $instance ) {

    	extract( $args );   
    	$title 				= ( ! empty( $instance['title'] ) ) ? esc_html($instance['title']) : ''; 	
        $category  			= isset( $instance[ 'category' ] ) ? $instance[ 'category' ] : 0;
        $number 			= ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 4; 
        $show_post_meta		= isset( $instance['show_post_meta'] ) ? $instance['show_post_meta'] : true;           

        echo $before_widget; ?>

	        <?php $args = array(
	            'posts_per_page' => absint( $number ),
	            'post_type' => 'post',
	            'post_status' => 'publish',
	            'orderby'	  => 'comment_count',	
	            'post__not_in' => get_option( 'sticky_posts' ),      
	        );

	        if ( absint( $category ) > 0 ) {
	          $args['cat'] = absint( $category );
	        }
	        $the_query = new WP_Query( $args ); 

	        if ($the_query->have_posts()) : $count= 0; ?>
	        	<?php if ( !empty( $title ) ): ?>
	                <div class="heading">
	                    <header class="entry-header">
	                        <h2 class="entry-title"><?php echo esc_html( $title );?></h2>
	                    </header>
	                </div>
                <?php endif; ?>	           
                <div class="trending post-layout-2 owl-carousel owl-theme">
                	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
                		$image = '';
                		if ( !has_post_thumbnail() ):  
                			$image = 'no-thumbnail';
        				endif;?>
	                    <article class="featured-post post hentry <?php echo esc_attr( $image);?>">
	                    	<?php if ( has_post_thumbnail()): ?>
		                        <figure class="featured-post-image">
		                            <?php the_post_thumbnail( 'mag-news-trending-thumb' );?>
		                        </figure>
	                        <?php endif; ?>
                            <div class="post-content">
	                            <?php mag_news_entry_categories(); ?>
	                            <header class="entry-header">
	                                <h4 class="entry-title">
	                                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
	                                </h4>
	                            </header>
                            </div>
                            <div class="entry-meta">                                
		                        <?php if ( true == $show_post_meta ): 
			                        mag_news_posted_by();
			                        mag_news_entry_footer();
		                        endif; ?>
                            </div>
	                    </article>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
	            
	        <?php endif;?>

        <?php echo $after_widget;

    } 

}