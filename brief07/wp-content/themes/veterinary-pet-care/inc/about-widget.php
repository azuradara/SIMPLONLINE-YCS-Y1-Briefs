<?php
/**
 * Custom About us Widget
 */

class Veterinary_Pet_Care_About_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'Veterinary_Pet_Care_About_Widget',
			__('TG: About us', 'veterinary-pet-care'),
			array( 'description' => __( 'Widget for about us section in sidebar', 'veterinary-pet-care' ), ) 
		);
	}
	
	public function widget( $args, $instance ) {
		?>				
		<div class="widget">
			<?php
			$title = apply_filters('widget_title', esc_html($instance['title']));
			$author = $instance['author'];
			$designation = $instance['designation'];
			$description = apply_filters('widget_description', esc_html($instance['description']));
			$facebook_url = $instance['facebook_url'];
			$twitter_url = $instance['twitter_url'];
			$instagram_url = $instance['instagram_url'];
			$linkedin_url = $instance['linkedin_url'];
			$pinterest_url = $instance['pinterest_url'];
			$read_more_url = $instance['read_more_url'];
			$read_more_text = $instance['read_more_text'];
			$upload_image = $instance['upload_image'];			

	        echo '<div class="custom-about-us">';
	        if(!empty($title) ){ ?><h3 class="custom_title"><?php echo esc_html($instance['title']); ?></h3><?php } ?>
	        <?php if($upload_image): ?>
      			<img src="<?php echo esc_url($upload_image); ?>" alt="">
			<?php endif; ?>
			<?php if(!empty($author) ){ ?><p class="custom_author"><?php echo esc_html($instance['author']); ?></p><?php } ?>
			<?php if(!empty($designation) ){ ?><p class="custom_designation"><?php echo esc_html($instance['designation']); ?></p><?php } ?>
	        <?php if(!empty($description) ){ ?><p class="custom_desc"><?php echo esc_html($instance['description']); ?></p><?php } ?>
	        <div class="social-links my-2">
		        <?php if(!empty($facebook_url) ){ ?><a class="custom_facebook fff" href=" <?php echo esc_url($instance['facebook_url']); ?>"><i class="fab fa-facebook-f p-2"></i><span class="screen-reader-text"><?php esc_html_e('Facebook','veterinary-pet-care'); ?></span></a><?php } ?>
		        <?php if(!empty($twitter_url) ){ ?><a class="custom_twitter" href="<?php echo esc_url($instance['twitter_url']); ?>"><i class="fab fa-twitter p-2"></i><span class="screen-reader-text"><?php esc_html_e('Twitter','veterinary-pet-care'); ?></span></a><?php } ?>
		        <?php if(!empty($linkedin_url) ){ ?><a class="custom_linkedin" href="<?php echo esc_url($instance['linkedin_url']); ?>"><i class="fab fa-linkedin-in p-2"></i><span class="screen-reader-text"><?php esc_html_e('Linkedin','veterinary-pet-care'); ?></span></a><?php } ?>
		        <?php if(!empty($instagram_url) ){ ?><a class="custom_instagram" href="<?php echo esc_url($instance['instagram_url']); ?>"><i class="fab fa-instagram p-2"></i><span class="screen-reader-text"><?php esc_html_e('Instagram','veterinary-pet-care'); ?></span></a><?php } ?>
		        <?php if(!empty($pinterest_url) ){ ?><a class="custom_instagram" href="<?php echo esc_url($instance['pinterest_url']); ?>"><i class="fab fa-pinterest-p p-2"></i><span class="screen-reader-text"><?php esc_html_e('Pinterest','veterinary-pet-care'); ?></span></a><?php } ?>
		    </div>
	        <?php if(!empty($read_more_url) ){ ?><div class="more-button my-2"><a class="custom_read_more py-2 px-3" href="<?php echo esc_url($instance['read_more_url']); ?>"><?php if(!empty($read_more_text) ){ ?><?php echo esc_html($instance['read_more_text']); ?><?php } ?></a></div><?php } ?>	        
	        <?php echo '</div>';
			?>
		</div>
		<?php
	}
	
	public function form( $instance ) {

		$title= ''; $author = ''; $designation = ''; $description= ''; $facebook_url = ''; $twitter_url = ''; $linkedin_url = ''; $instagram_url = ''; $pinterest_url = ''; $read_more_text = ''; $read_more_url = ''; $upload_image = ''; 
		
		isset($instance['title']) ? $title = $instance['title'] : null;
		isset($instance['author']) ? $author = $instance['author'] : null;
		isset($instance['designation']) ? $designation = $instance['designation'] : null;
		isset($instance['description']) ? $description = $instance['description'] : null;
		isset($instance['facebook_url']) ? $facebook_url = $instance['facebook_url'] : null;
        isset($instance['twitter_url']) ? $twitter_url = $instance['twitter_url'] : null;
        isset($instance['linkedin_url']) ? $linkedin_url = $instance['linkedin_url'] : null;
		isset($instance['instagram_url']) ? $instagram_url = $instance['instagram_url'] : null;
		isset($instance['pinterest_url']) ? $pinterest_url = $instance['pinterest_url'] : null;
		isset($instance['read_more_url']) ? $read_more_url = $instance['read_more_url'] : null;
		isset($instance['read_more_text']) ? $read_more_text = $instance['read_more_text'] : null;
		isset($instance['upload_image']) ? $upload_image = $instance['upload_image'] : null;		
		?>

		<p>
	        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','veterinary-pet-care'); ?></label>
	        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
    	</p>
    	<p>
	        <label for="<?php echo esc_attr($this->get_field_id('author')); ?>"><?php esc_html_e('Author Name:','veterinary-pet-care'); ?></label>
	        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('author')); ?>" name="<?php echo esc_attr($this->get_field_name('author')); ?>" type="text" value="<?php echo esc_attr($author); ?>">
    	</p>
    	<p>
	        <label for="<?php echo esc_attr($this->get_field_id('designation')); ?>"><?php esc_html_e('Designation:','veterinary-pet-care'); ?></label>
	        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('designation')); ?>" name="<?php echo esc_attr($this->get_field_name('designation')); ?>" type="text" value="<?php echo esc_attr($designation); ?>">
    	</p>
    	<p>
	        <label for="<?php echo esc_attr($this->get_field_id('description')); ?>"><?php esc_html_e('Description:','veterinary-pet-care'); ?></label>
	        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('description')); ?>" name="<?php echo esc_attr($this->get_field_name('description')); ?>" type="text" value="<?php echo esc_attr($description); ?>">
    	</p>
    	<p>
			<label for="<?php echo esc_attr($this->get_field_id('facebook_url')); ?>"><?php esc_html_e('Facebook URL:','veterinary-pet-care'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('facebook_url')); ?>" name="<?php echo esc_attr($this->get_field_name('facebook_url')); ?>" type="text" value="<?php echo esc_attr($facebook_url); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('twitter_url')); ?>"><?php esc_html_e('Twitter URL:','veterinary-pet-care'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('twitter_url')); ?>" name="<?php echo esc_attr($this->get_field_name('twitter_url')); ?>" type="text" value="<?php echo esc_attr($twitter_url); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('linkedin_url')); ?>"><?php esc_html_e('Linkedin URL:','veterinary-pet-care'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkedin_url')); ?>" name="<?php echo esc_attr($this->get_field_name('linkedin_url')); ?>" type="text" value="<?php echo esc_attr($linkedin_url); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('instagram_url')); ?>"><?php esc_html_e('Instagram URL:','veterinary-pet-care'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('instagram_url')); ?>" name="<?php echo esc_attr($this->get_field_name('instagram_url')); ?>" type="text" value="<?php echo esc_attr($instagram_url); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('pinterest_url')); ?>"><?php esc_html_e('Pinterest URL:','veterinary-pet-care'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('pinterest_url')); ?>" name="<?php echo esc_attr($this->get_field_name('pinterest_url')); ?>" type="text" value="<?php echo esc_attr($pinterest_url); ?>">
		</p>
    	<p>
			<label for="<?php echo esc_attr($this->get_field_id('read_more_text')); ?>"><?php esc_html_e('Button Text:','veterinary-pet-care'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('read_more_text')); ?>" name="<?php echo esc_attr($this->get_field_name('read_more_text')); ?>" type="text" value="<?php echo esc_attr($read_more_text); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('read_more_url')); ?>"><?php esc_html_e('Button Url:','veterinary-pet-care'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('read_more_url')); ?>" name="<?php echo esc_attr($this->get_field_name('read_more_url')); ?>" type="text" value="<?php echo esc_attr($read_more_url); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'upload_image' )); ?>"><?php esc_html_e( 'Image Url:','veterinary-pet-care'); ?></label>
			<?php
				if ( $upload_image != '' ) :
					echo '<img class="custom_media_image" src="' . esc_url($upload_image) . '" style="margin:10px 0; padding:0; max-width:100%; float:left; display:inline-block" /><br />';
				endif;
			?>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'upload_image' ) ); ?>" name="<?php echo esc_attr($this->get_field_name( 'upload_image' )); ?>" type="text" value="<?php echo esc_url( $upload_image ); ?>" />
	   	</p>
		<?php 
	}
	
	public function update( $new_instance, $old_instance ) {
		$instance = array();	
		$instance['title'] = (!empty($new_instance['title']) ) ? strip_tags($new_instance['title']) : '';
		$instance['author'] = ( ! empty( $new_instance['author'] ) ) ? $new_instance['author'] : '';
		$instance['designation'] = ( ! empty( $new_instance['designation'] ) ) ? $new_instance['designation'] : '';
		$instance['description'] = (!empty($new_instance['description']) ) ? strip_tags($new_instance['description']) : '';
        $instance['facebook_url'] = (!empty($new_instance['facebook_url']) ) ? strip_tags($new_instance['facebook_url']) : '';
        $instance['twitter_url'] = (!empty($new_instance['twitter_url']) ) ? strip_tags($new_instance['twitter_url']) : '';
        $instance['instagram_url'] = (!empty($new_instance['instagram_url']) ) ? strip_tags($new_instance['instagram_url']) : '';
        $instance['linkedin_url'] = (!empty($new_instance['linkedin_url']) ) ? strip_tags($new_instance['linkedin_url']) : '';
        $instance['pinterest_url'] = (!empty($new_instance['pinterest_url']) ) ? strip_tags($new_instance['pinterest_url']) : '';
        $instance['read_more_text'] = (!empty($new_instance['read_more_text']) ) ? strip_tags($new_instance['read_more_text']) : '';
        $instance['read_more_url'] = (!empty($new_instance['read_more_url']) ) ? strip_tags($new_instance['read_more_url']) : '';
        $instance['upload_image'] = ( ! empty( $new_instance['upload_image'] ) ) ? $new_instance['upload_image'] : '';

		return $instance;
	}
}

function veterinary_pet_care_about_custom_load_widget() {
	register_widget( 'Veterinary_Pet_Care_About_Widget' );
}
add_action( 'widgets_init', 'veterinary_pet_care_about_custom_load_widget' );