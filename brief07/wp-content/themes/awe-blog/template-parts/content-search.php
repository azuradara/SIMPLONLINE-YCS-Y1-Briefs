<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package awe_blog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
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
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php awe_blog_post_thumbnail(); ?>

	<div class="entry-content">
            <?php
                    echo wp_kses_post(awe_blog_get_excerpt($post->ID, 450));

            ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<a href="<?php echo esc_url(get_the_permalink()); ?>" class="btn btn-default"><?php esc_html_e("Read More", "awe-blog") ?></a>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
