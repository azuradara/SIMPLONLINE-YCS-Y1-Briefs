<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package awe_blog
 */

get_header(); ?>

<div id="content" class="vb-section-content section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div id="primary" class="content-area">
                    <main id="main" class="site-main">

						<?php while (have_posts()):
          the_post();

          get_template_part('template-parts/content', get_post_type());

          the_post_navigation([
              'prev_text' =>
                  '<span class="nav-subtitle">' .
                  esc_html__('Previous:', 'awe-blog') .
                  '</span> <span class="nav-title">%title</span>',
              'next_text' =>
                  '<span class="nav-subtitle">' .
                  esc_html__('Next:', 'awe-blog') .
                  '</span> <span class="nav-title">%title</span>',
          ]);

          // If comments are open or we have at least one comment, load up the comment template.
          if (comments_open() || get_comments_number()):
              comments_template();
          endif;
      endwhile;
// End of the loop.
?>

					</main><!-- #main -->
                </div>
            </div>

           
        </div>
    </div>
</div>
<?php get_footer();
