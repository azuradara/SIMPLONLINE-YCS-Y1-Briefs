<?php
/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridnext_widgets_init() {

register_sidebar(array(
    'id' => 'gridnext-sidebar-one',
    'name' => esc_html__( 'Sidebar 1 Widgets', 'gridnext' ),
    'description' => esc_html__( 'This widget area is located on the left-hand side of your web page.', 'gridnext' ),
    'before_widget' => '<div id="%1$s" class="gridnext-side-widget widget gridnext-widget-box %2$s"><div class="gridnext-widget-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridnext-widget-header"><h2 class="gridnext-widget-title"><span class="gridnext-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridnext-sidebar-two',
    'name' => esc_html__( 'Sidebar 2 Widgets', 'gridnext' ),
    'description' => esc_html__( 'This widget area is located on the right-hand side of your web page.', 'gridnext' ),
    'before_widget' => '<div id="%1$s" class="gridnext-side-widget widget gridnext-widget-box %2$s"><div class="gridnext-widget-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridnext-widget-header"><h2 class="gridnext-widget-title"><span class="gridnext-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridnext-home-fullwidth-widgets',
    'name' => esc_html__( 'Top Full Width Widgets (Default HomePage)', 'gridnext' ),
    'description' => esc_html__( 'This full-width widget area is located after the header of your website. Widgets of this widget area are displayed on the default homepage of your website (when you are showing your latest posts on homepage).', 'gridnext' ),
    'before_widget' => '<div id="%1$s" class="gridnext-main-widget widget gridnext-widget-box %2$s"><div class="gridnext-widget-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridnext-widget-header"><h2 class="gridnext-widget-title"><span class="gridnext-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridnext-fullwidth-widgets',
    'name' => esc_html__( 'Top Full Width Widgets (Everywhere)', 'gridnext' ),
    'description' => esc_html__( 'This full-width widget area is located after the header of your website. Widgets of this widget area are displayed on every page of your website.', 'gridnext' ),
    'before_widget' => '<div id="%1$s" class="gridnext-main-widget widget gridnext-widget-box %2$s"><div class="gridnext-widget-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridnext-widget-header"><h2 class="gridnext-widget-title"><span class="gridnext-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridnext-home-top-widgets',
    'name' => esc_html__( 'Above Content Widgets (Default HomePage)', 'gridnext' ),
    'description' => esc_html__( 'This widget area is located at the top of the main content (above posts) of your website. Widgets of this widget area are displayed on the default homepage of your website (when you are showing your latest posts on homepage).', 'gridnext' ),
    'before_widget' => '<div id="%1$s" class="gridnext-main-widget widget gridnext-widget-box %2$s"><div class="gridnext-widget-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridnext-widget-header"><h2 class="gridnext-widget-title"><span class="gridnext-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridnext-top-widgets',
    'name' => esc_html__( 'Above Content Widgets (Everywhere)', 'gridnext' ),
    'description' => esc_html__( 'This widget area is located at the top of the main content (above posts) of your website. Widgets of this widget area are displayed on every page of your website.', 'gridnext' ),
    'before_widget' => '<div id="%1$s" class="gridnext-main-widget widget gridnext-widget-box %2$s"><div class="gridnext-widget-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridnext-widget-header"><h2 class="gridnext-widget-title"><span class="gridnext-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridnext-home-left-top-widgets',
    'name' => esc_html__( 'Top Left Widgets (Default HomePage)', 'gridnext' ),
    'description' => esc_html__( 'This widget area is located at the left top of your website. Widgets of this widget area are displayed on the default homepage of your website (when you are showing your latest posts on homepage).', 'gridnext' ),
    'before_widget' => '<div id="%1$s" class="gridnext-main-widget widget gridnext-widget-box %2$s"><div class="gridnext-widget-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridnext-widget-header"><h2 class="gridnext-widget-title"><span class="gridnext-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridnext-left-top-widgets',
    'name' => esc_html__( 'Top Left Widgets (Everywhere)', 'gridnext' ),
    'description' => esc_html__( 'This widget area is located at the left top of your website. Widgets of this widget area are displayed on every page of your website.', 'gridnext' ),
    'before_widget' => '<div id="%1$s" class="gridnext-main-widget widget gridnext-widget-box %2$s"><div class="gridnext-widget-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridnext-widget-header"><h2 class="gridnext-widget-title"><span class="gridnext-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridnext-home-right-top-widgets',
    'name' => esc_html__( 'Top Right Widgets (Default HomePage)', 'gridnext' ),
    'description' => esc_html__( 'This widget area is located at the right top of your website. Widgets of this widget area are displayed on the default homepage of your website (when you are showing your latest posts on homepage).', 'gridnext' ),
    'before_widget' => '<div id="%1$s" class="gridnext-main-widget widget gridnext-widget-box %2$s"><div class="gridnext-widget-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridnext-widget-header"><h2 class="gridnext-widget-title"><span class="gridnext-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridnext-right-top-widgets',
    'name' => esc_html__( 'Top Right Widgets (Everywhere)', 'gridnext' ),
    'description' => esc_html__( 'This widget area is located at the right top of your website. Widgets of this widget area are displayed on every page of your website.', 'gridnext' ),
    'before_widget' => '<div id="%1$s" class="gridnext-main-widget widget gridnext-widget-box %2$s"><div class="gridnext-widget-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridnext-widget-header"><h2 class="gridnext-widget-title"><span class="gridnext-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridnext-home-bottom-widgets',
    'name' => esc_html__( 'Below Content Widgets (Default HomePage)', 'gridnext' ),
    'description' => esc_html__( 'This widget area is located at the bottom of the main content (below posts) of your website. Widgets of this widget area are displayed on the default homepage of your website (when you are showing your latest posts on homepage).', 'gridnext' ),
    'before_widget' => '<div id="%1$s" class="gridnext-main-widget widget gridnext-widget-box %2$s"><div class="gridnext-widget-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridnext-widget-header"><h2 class="gridnext-widget-title"><span class="gridnext-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridnext-bottom-widgets',
    'name' => esc_html__( 'Below Content Widgets (Everywhere)', 'gridnext' ),
    'description' => esc_html__( 'This widget area is located at the bottom of the main content (below posts) of your website. Widgets of this widget area are displayed on every page of your website.', 'gridnext' ),
    'before_widget' => '<div id="%1$s" class="gridnext-main-widget widget gridnext-widget-box %2$s"><div class="gridnext-widget-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridnext-widget-header"><h2 class="gridnext-widget-title"><span class="gridnext-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridnext-home-fullwidth-bottom-widgets',
    'name' => esc_html__( 'Bottom Full Width Widgets (Default HomePage)', 'gridnext' ),
    'description' => esc_html__( 'This full-width widget area is located before the footer of your website. Widgets of this widget area are displayed on the default homepage of your website (when you are showing your latest posts on homepage).', 'gridnext' ),
    'before_widget' => '<div id="%1$s" class="gridnext-main-widget widget gridnext-widget-box %2$s"><div class="gridnext-widget-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridnext-widget-header"><h2 class="gridnext-widget-title"><span class="gridnext-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridnext-fullwidth-bottom-widgets',
    'name' => esc_html__( 'Bottom Full Width Widgets (Everywhere)', 'gridnext' ),
    'description' => esc_html__( 'This full-width widget area is located before the footer of your website. Widgets of this widget area are displayed on every page of your website.', 'gridnext' ),
    'before_widget' => '<div id="%1$s" class="gridnext-main-widget widget gridnext-widget-box %2$s"><div class="gridnext-widget-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridnext-widget-header"><h2 class="gridnext-widget-title"><span class="gridnext-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridnext-single-post-bottom-widgets',
    'name' => esc_html__( 'Single Post Bottom Widgets', 'gridnext' ),
    'description' => esc_html__( 'This widget area is located at the bottom of single post of any post type (except attachments and pages).', 'gridnext' ),
    'before_widget' => '<div id="%1$s" class="gridnext-main-widget widget gridnext-widget-box %2$s"><div class="gridnext-widget-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridnext-widget-header"><h2 class="gridnext-widget-title"><span class="gridnext-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

register_sidebar(array(
    'id' => 'gridnext-top-footer',
    'name' => esc_html__( 'Footer Top Widgets', 'gridnext' ),
    'description' => esc_html__( 'This widget area is located on the top of the footer of your website.', 'gridnext' ),
    'before_widget' => '<div id="%1$s" class="gridnext-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridnext-widget-title"><span class="gridnext-widget-title-inside">',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridnext-footer-1',
    'name' => esc_html__( 'Footer 1 Widgets', 'gridnext' ),
    'description' => esc_html__( 'This widget area is the column 1 of the footer of your website.', 'gridnext' ),
    'before_widget' => '<div id="%1$s" class="gridnext-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridnext-widget-title"><span class="gridnext-widget-title-inside">',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridnext-footer-2',
    'name' => esc_html__( 'Footer 2 Widgets', 'gridnext' ),
    'description' => esc_html__( 'This widget area is the column 2 of the footer of your website.', 'gridnext' ),
    'before_widget' => '<div id="%1$s" class="gridnext-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridnext-widget-title"><span class="gridnext-widget-title-inside">',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridnext-footer-3',
    'name' => esc_html__( 'Footer 3 Widgets', 'gridnext' ),
    'description' => esc_html__( 'This widget area is the column 3 of the footer of your website.', 'gridnext' ),
    'before_widget' => '<div id="%1$s" class="gridnext-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridnext-widget-title"><span class="gridnext-widget-title-inside">',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridnext-footer-4',
    'name' => esc_html__( 'Footer 4 Widgets', 'gridnext' ),
    'description' => esc_html__( 'This widget area is the column 4 of the footer of your website.', 'gridnext' ),
    'before_widget' => '<div id="%1$s" class="gridnext-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridnext-widget-title"><span class="gridnext-widget-title-inside">',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridnext-footer-5',
    'name' => esc_html__( 'Footer 5 Widgets', 'gridnext' ),
    'description' => esc_html__( 'This widget area is the column 5 of the footer of your website.', 'gridnext' ),
    'before_widget' => '<div id="%1$s" class="gridnext-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridnext-widget-title"><span class="gridnext-widget-title-inside">',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridnext-bottom-footer',
    'name' => esc_html__( 'Footer Bottom Widgets', 'gridnext' ),
    'description' => esc_html__( 'This widget area is located on the bottom of the footer of your website.', 'gridnext' ),
    'before_widget' => '<div id="%1$s" class="gridnext-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridnext-widget-title"><span class="gridnext-widget-title-inside">',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridnext-404-widgets',
    'name' => esc_html__( '404 Page Widgets', 'gridnext' ),
    'description' => esc_html__( 'This widget area is located on the 404(not found) page of your website.', 'gridnext' ),
    'before_widget' => '<div id="%1$s" class="gridnext-main-widget widget gridnext-widget-box %2$s"><div class="gridnext-widget-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<div class="gridnext-widget-header"><h2 class="gridnext-widget-title"><span class="gridnext-widget-title-inside">',
    'after_title' => '</span></h2></div>'));

}
add_action( 'widgets_init', 'gridnext_widgets_init' );


function gridnext_sidebar_one_widgets() {
    dynamic_sidebar( 'gridnext-sidebar-one' );
}

function gridnext_sidebar_two_widgets() {
    dynamic_sidebar( 'gridnext-sidebar-two' );
}

function gridnext_top_wide_widgets() { ?>

<?php if ( is_active_sidebar( 'gridnext-home-fullwidth-widgets' ) || is_active_sidebar( 'gridnext-fullwidth-widgets' ) ) : ?>
<div class="gridnext-outer-wrapper">
<div class="gridnext-top-wrapper-outer gridnext-clearfix">
<div class="gridnext-featured-posts-area gridnext-top-wrapper gridnext-clearfix">
<?php if ( is_front_page() && is_home() && !is_paged() ) { ?>
<?php dynamic_sidebar( 'gridnext-home-fullwidth-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'gridnext-fullwidth-widgets' ); ?>
</div>
</div>
</div>
<?php endif; ?>

<?php }


function gridnext_top_widgets() { ?>

<?php if ( is_active_sidebar( 'gridnext-home-top-widgets' ) || is_active_sidebar( 'gridnext-top-widgets' ) ) : ?>
<div class="gridnext-featured-posts-area gridnext-featured-posts-area-top gridnext-clearfix">
<?php if ( is_front_page() && is_home() && !is_paged() ) { ?>
<?php dynamic_sidebar( 'gridnext-home-top-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'gridnext-top-widgets' ); ?>
</div>
<?php endif; ?>

<?php }


function gridnext_top_left_right_widgets() { ?>

<div class="gridnext-left-right-wrapper gridnext-clearfix">

<?php if ( is_active_sidebar( 'gridnext-home-left-top-widgets' ) || is_active_sidebar( 'gridnext-left-top-widgets' ) ) : ?>
<div class="gridnext-left-top-wrapper">
<div class="gridnext-featured-posts-area gridnext-featured-posts-area-top gridnext-clearfix">
<?php if ( is_front_page() && is_home() && !is_paged() ) { ?>
<?php dynamic_sidebar( 'gridnext-home-left-top-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'gridnext-left-top-widgets' ); ?>
</div>
</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'gridnext-home-right-top-widgets' ) || is_active_sidebar( 'gridnext-right-top-widgets' ) ) : ?>
<div class="gridnext-right-top-wrapper">
<div class="gridnext-featured-posts-area gridnext-featured-posts-area-top gridnext-clearfix">
<?php if ( is_front_page() && is_home() && !is_paged() ) { ?>
<?php dynamic_sidebar( 'gridnext-home-right-top-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'gridnext-right-top-widgets' ); ?>
</div>
</div>
<?php endif; ?>

</div>

<?php }


function gridnext_bottom_widgets() { ?>

<?php if ( is_active_sidebar( 'gridnext-home-bottom-widgets' ) || is_active_sidebar( 'gridnext-bottom-widgets' ) ) : ?>
<div class='gridnext-featured-posts-area gridnext-featured-posts-area-bottom gridnext-clearfix'>
<?php if ( is_front_page() && is_home() && !is_paged() ) { ?>
<?php dynamic_sidebar( 'gridnext-home-bottom-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'gridnext-bottom-widgets' ); ?>
</div>
<?php endif; ?>

<?php }


function gridnext_bottom_wide_widgets() { ?>

<?php if ( is_active_sidebar( 'gridnext-home-fullwidth-bottom-widgets' ) || is_active_sidebar( 'gridnext-fullwidth-bottom-widgets' ) ) : ?>
<div class="gridnext-outer-wrapper">
<div class="gridnext-bottom-wrapper-outer gridnext-clearfix">
<div class="gridnext-featured-posts-area gridnext-bottom-wrapper gridnext-clearfix">
<?php if ( is_front_page() && is_home() && !is_paged() ) { ?>
<?php dynamic_sidebar( 'gridnext-home-fullwidth-bottom-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'gridnext-fullwidth-bottom-widgets' ); ?>
</div>
</div>
</div>
<?php endif; ?>

<?php }


function gridnext_404_widgets() { ?>

<?php if ( is_active_sidebar( 'gridnext-404-widgets' ) ) : ?>
<div class="gridnext-featured-posts-area gridnext-featured-posts-area-top gridnext-clearfix">
<?php dynamic_sidebar( 'gridnext-404-widgets' ); ?>
</div>
<?php endif; ?>

<?php }


function gridnext_post_bottom_widgets() {
    if ( is_singular() ) {
        global $post;
        if ( is_active_sidebar( 'gridnext-single-post-bottom-widgets' ) ) : ?>
            <div class="gridnext-featured-posts-area gridnext-clearfix">
            <?php dynamic_sidebar( 'gridnext-single-post-bottom-widgets' ); ?>
            </div>
        <?php endif;
    }
}