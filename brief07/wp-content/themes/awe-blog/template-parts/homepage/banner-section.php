<?php
$awe_blog_options = awe_blog_theme_options();
$awe_blog_slider_category = $awe_blog_options['awe_blog_slider_category'];
?>

<?php
if ($awe_blog_slider_category && 'none' != $awe_blog_slider_category) {
    $args = [
        'post_type' => 'post',
        'posts_per_page' => 2,
        'post_status' => 'publish',
        'order' => 'desc',
        'orderby' => 'menu_order date',
        'tax_query' => [
            'relation' => 'AND',
            [
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => [$awe_blog_slider_category],
            ],
        ],
    ];
} else {
    $args = [
        'post_type' => 'post',
        'posts_per_page' => 2,
        'post_status' => 'publish',
        'order' => 'desc',
        'orderby' => 'menu_order date',
    ];
}

$slider_query = new WP_Query($args);
$loop = 0;

if ($slider_query->have_posts()): ?>
	<div class="home-banner-slider">
		<!-- slides -->
		<div class="slider">
		<div class="awe_slider__slides">
			<?php
   while ($slider_query->have_posts()):

       $slider_query->the_post();

       $image_src = wp_get_attachment_image_src(
           get_post_thumbnail_id(),
           'full'
       );
       if($image_src){
        $url = $image_src[0];
        }
       if (!empty($image_src)) {
           $image_style =
               "style='background-image:url(" . esc_url($url) . ")'"; ?>
			<?php
       } else {
           $image_style = '';
       }
       ?>


				<div class="awe_slide__inner" <?php echo wp_kses_post($image_style); ?>>
					<div class="slide__content">
						<h2 class="slide__heading"><?php the_title(); ?></h2>
						<p><?php echo wp_kses_post(awe_blog_get_excerpt(get_the_ID(), 200)); ?></p>
						<a class="btn btn-default" href="<?php echo esc_url(
          get_the_permalink()
      ); ?>"><?php esc_html_e('Read More', 'awe-blog'); ?></a>
					</div>
				</div>

	<?php
   endwhile;
   wp_reset_postdata();
   ?>
	</div>

			
		</div>
	</div>
</div>


	<?php endif;



