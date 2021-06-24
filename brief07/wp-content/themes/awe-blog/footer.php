<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package awe_blog
 */

$awe_blog_options = awe_blog_theme_options();

$show_prefooter = $awe_blog_options['show_prefooter'];

?>

<footer id="colophon" class="site-footer">


	<?php if ($show_prefooter== 1){ ?>
	    <section class="footer-sec">
	        <div class="container">
	            <div class="row">
	                <?php if (is_active_sidebar('awe_blog_footer_1')) : ?>
	                    <div class="col-md-4">
	                        <?php dynamic_sidebar('awe_blog_footer_1') ?>
	                    </div>
	                    <?php
	                else: awe_blog_blank_widget();
	                endif; ?>
	                <?php if (is_active_sidebar('awe_blog_footer_2')) : ?>
	                    <div class="col-md-4">
	                        <?php dynamic_sidebar('awe_blog_footer_2') ?>
	                    </div>
	                    <?php
	                else: awe_blog_blank_widget();
	                endif; ?>
	                <?php if (is_active_sidebar('awe_blog_footer_3')) : ?>
	                    <div class="col-md-4">
	                        <?php dynamic_sidebar('awe_blog_footer_3') ?>
	                    </div>
	                    <?php
	                else: awe_blog_blank_widget();
	                endif; ?>
	            </div>
	        </div>
	    </section>
	<?php } ?>

		<div class="site-info">
		<p><?php esc_html_e('Powered By WordPress', 'awe-blog');
                    esc_html_e(' | ', 'awe-blog') ?>
                    <span><a target="_blank" rel="nofollow"
                       href="<?php echo esc_url('https://www.flawlessthemes.com/theme/awe-blog-best-blog-wordpress-theme-ever/'); ?>"><?php esc_html_e('Awe Blog' , 'awe-blog'); ?></a></span>
                </p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
