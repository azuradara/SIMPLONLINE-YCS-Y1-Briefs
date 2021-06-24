<?php
/**
* Template part for displaying posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('gridnext-post-singular gridnext-post-nongrid gridnext-box'); ?>>
<div class="gridnext-box-inside">

    <?php gridnext_before_nongrid_post_title(); ?>

    <header class="entry-header">
    <div class="entry-header-inside gridnext-clearfix">
        <?php the_title( sprintf( '<h1 class="post-title entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

        <?php gridnext_nongrid_postmeta(); ?>
    </div>
    </header><!-- .entry-header -->

    <?php gridnext_after_nongrid_post_title(); ?>

    <div class="entry-content gridnext-clearfix">
            <?php
            the_content( sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Continue reading<span class="gridnext-sr-only"> "%s"</span> <span class="meta-nav">&rarr;</span>', 'gridnext' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                wp_kses_post( get_the_title() )
            ) );

            wp_link_pages( array(
             'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'gridnext' ) . '</span>',
             'after'       => '</div>',
             'link_before' => '<span>',
             'link_after'  => '</span>',
             ) );
            ?>
    </div><!-- .entry-content -->

    <?php if ( !(gridnext_get_option('hide_post_tags_home')) ) { ?>
    <?php if ( has_tag() ) { ?>
    <footer class="entry-footer gridnext-entry-footer">
    <div class="gridnext-entry-footer-inside">
        <?php gridnext_post_tags(); ?>
    </div>
    </footer><!-- .entry-footer -->
    <?php } ?>
    <?php } ?>

</div>
</article>