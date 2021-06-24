<?php
$awe_blog_options = awe_blog_theme_options();
$below_banner_category = $awe_blog_options['below_banner_category'];
$image_type = $awe_blog_options['image_type'];
?>

<?php
if ($below_banner_category && 'none' != $below_banner_category) {
    $args = [
        'post_type' => 'post',
        'posts_per_page' => 4,
        'post_status' => 'publish',
        'order' => 'desc',
        'orderby' => 'menu_order date',
        'tax_query' => [
            'relation' => 'AND',
            [
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => [$below_banner_category],
            ],
        ],
    ];
} else {
    $args = [
        'post_type' => 'post',
        'posts_per_page' => 4,
        'post_status' => 'publish',
        'order' => 'desc',
        'orderby' => 'menu_order date',
    ];
}

$slider_query = new WP_Query($args);
$loop = 0;

if ($slider_query->have_posts()): ?>

<div class="slider-below-main-banner section">
	<div class="container">
		<div class="row">
			<div class="card-slider-wrap fourcolumn">

            <?php
            while ($slider_query->have_posts()):

                $slider_query->the_post();

                if($image_type == "1"){   
                    $image_src = wp_get_attachment_image_src(
                        get_post_thumbnail_id(),
                        'awe-blog-custom-size'
                    );
                }
                else{
                    $image_src = wp_get_attachment_image_src(
                        get_post_thumbnail_id(),
                        'awe-blog-thumbnail-img'
                    );
                }
                if($image_src){
                    $url = $image_src[0];
                    }
                ?>

				<div class="banner-wrap-element">
					<div class="post-content-wrap">
						<div class="post-thumb">
                        
                        <img src="<?php echo esc_url($url); ?>">
						</div>
						<div class="post-content">
							<h3>
								<a href="<?php echo esc_url(get_the_permalink()); ?>"><?php the_title(); ?></a>
							</h3>
							<ul class="post-meta">
                            <li class="meta-date"><a href="<?php echo esc_url(
                                awe_blog_archive_link($post)
                            ); ?>"><time class="entry-date published" datetime="<?php echo esc_url(
    awe_blog_archive_link($post)
); ?>"><?php echo esc_html(the_time(get_option('date_format'))); ?></time>
                                                </a></li>
                                                <li class="meta-comment"><a
                                                    href="<?php echo esc_url(
                                                        get_comments_link(
                                                            get_the_ID()
                                                        )
                                                    ); ?>"><?php printf(
    /* translators: 1: number of comments */ _nx(
        '%1$s Comment',
        '%1$s Comments',
        get_comments_number(),
        '',
        'awe-blog'
    ),
    number_format_i18n(get_comments_number())
); ?></a></li>
							</ul>
						</div>
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
?>

