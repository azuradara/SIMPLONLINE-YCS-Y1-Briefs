<?php
$awe_blog_options = awe_blog_theme_options();

$sidebar_blog_category = $awe_blog_options['sidebar_blog_category'];
$content_length = '250';

$paged = get_query_var('page') ? absint(get_query_var('page')) : 1;

if ($sidebar_blog_category == 'none') {
    $args = [
        'post_type' => 'post',
        'posts_per_page' => 6,
        'post_status' => 'publish',
        'order' => 'desc',
        'orderby' => 'menu_order date',
        'paged' => $paged,
    ];
} else {
    $args = [
        'post_type' => 'post',
        'posts_per_page' => 6,
        'post_status' => 'publish',
        'order' => 'desc',
        'orderby' => 'menu_order date',
        'paged' => $paged,
        'tax_query' => [
            'relation' => 'AND',
            [
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => [$sidebar_blog_category],
            ],
        ],
    ];
}
?>
<div class="posts-with-sidebar section">
	<div class="container">
		<div class="row">
             <div class="col-md-8">
                <?php
                $recent_query = new WP_Query($args);
                if ($recent_query->have_posts()): ?>


                        <?php
                        while ($recent_query->have_posts()):

                            $recent_query->the_post();
                            global $post;
                            $post_thumbnail_id = get_post_thumbnail_id(
                                get_the_ID()
                            );
                            $image = wp_get_attachment_image_src(
                                $post_thumbnail_id,
                                'awe-blog-thumbnail-img'
                            );
                            $content = get_the_content();

                            if (!empty($image)) {
                                $image_style =
                                    "style='background-image:url(" .
                                    esc_url($image[0]) .
                                    ")'";
                            } else {
                                $image_style = '';
                            }
                            ?>
                            <div class="post-content-wrap">
                                <div class="posts-wrap">
                                  <img src="<?php echo esc_url(
                                      $image[0]
                                  ); ?>" alt="" />

                                <h2><a href="<?php echo esc_url(
                                    get_the_permalink()
                                ); ?>"><?php the_title(); ?></a></h2>

							<ul class="post-meta">
                            <li class="meta-date"><a href="<?php echo esc_url(
                                awe_blog_archive_link($post)
                            ); ?>"><time class="entry-date published" datetime="<?php echo esc_url(
    awe_blog_archive_link($post)
); ?>"><?php echo esc_html(the_time(get_option('date_format'))); ?></time>
                                </a></li>
                            <li class="meta-comment"><a href="<?php echo esc_url(
                                get_comments_link(get_the_ID())
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
                                  <figcaption>
                                    
                                    <p><?php echo wp_kses_post(
                                        awe_blog_get_excerpt(
                                            $recent_query->post->ID,
                                            $content_length
                                        )
                                    ); ?></p>

                                  </figcaption>
                                  <a href="<?php echo esc_url(
                                      get_the_permalink()
                                  ); ?>" class="btn btn-default"><?php esc_html_e(
    'Read More',
    'awe-blog'
); ?></a>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        $max_posts = $recent_query->max_num_pages;
                        if ($max_posts > 1) {
                            $current_page = max(1, get_query_var('page'));
                            echo '<div class="navigation">';

                            echo paginate_links([
                                'base' => get_pagenum_link(1) . '%_%',
                                'format' => '?paged=%#%',
                                'current' => $current_page,
                                'total' => $max_posts,
                                'type' => 'list',
                                'prev_text' => esc_html__(
                                    'Previous Posts',
                                    'awe-blog'
                                ),
                                'next_text' => esc_html__(
                                    'More Posts',
                                    'awe-blog'
                                ),
                            ]);
                            echo '</div>';
                        }
                        wp_reset_postdata();
                        ?>
                    <?php endif;
                ?>
             </div>

             <?php if (is_active_sidebar('home-sidebar')): ?>
                    
                    <div class="col-md-4">
                    <aside id="secondary" class="widget-area">
                        <?php dynamic_sidebar('home-sidebar'); ?>
                        </aside>
                    </div>
                    
                    <?php endif; ?>
        </div>
    </div>
</div>
        
