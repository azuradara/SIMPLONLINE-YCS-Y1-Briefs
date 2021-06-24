<?php
/**
* Menu Functions
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

// Get our wp_nav_menu() fallback, wp_page_menu(), to show a "Home" link as the first item
function gridnext_page_menu_args( $args ) {
    $args['show_home'] = true;
    return $args;
}
add_filter( 'wp_page_menu_args', 'gridnext_page_menu_args' );

function gridnext_primary_menu_text() {
   $menu_text = esc_html__( 'Menu', 'gridnext' );
    if ( gridnext_get_option('primary_menu_text') ) {
        $menu_text = gridnext_get_option('primary_menu_text');
    }
   return apply_filters( 'gridnext_primary_menu_text', $menu_text );
}

function gridnext_secondary_menu_text() {
   $menu_text = esc_html__( 'Menu', 'gridnext' );
    if ( gridnext_get_option('secondary_menu_text') ) {
        $menu_text = gridnext_get_option('secondary_menu_text');
    }
   return apply_filters( 'gridnext_secondary_menu_text', $menu_text );
}

function gridnext_top_fallback_menu() {
   wp_page_menu( array(
        'sort_column'  => 'menu_order, post_title',
        'menu_id'      => 'gridnext-menu-secondary-navigation',
        'menu_class'   => 'gridnext-secondary-nav-menu gridnext-menu-secondary',
        'container'    => 'ul',
        'echo'         => true,
        'link_before'  => '',
        'link_after'   => '',
        'before'       => '',
        'after'        => '',
        'item_spacing' => 'discard',
        'walker'       => '',
    ) );
}

function gridnext_fallback_menu() {
   wp_page_menu( array(
        'sort_column'  => 'menu_order, post_title',
        'menu_id'      => 'gridnext-menu-primary-navigation',
        'menu_class'   => 'gridnext-primary-nav-menu gridnext-menu-primary',
        'container'    => 'ul',
        'echo'         => true,
        'link_before'  => '',
        'link_after'   => '',
        'before'       => '',
        'after'        => '',
        'item_spacing' => 'discard',
        'walker'       => '',
    ) );
}

function gridnext_secondary_menu_area() {
if ( gridnext_is_menu_social_bar_active() ) { ?>
<div class="gridnext-outer-wrapper">
<div class="gridnext-container gridnext-secondary-menu-container gridnext-clearfix">
<div class="gridnext-secondary-menu-container-inside gridnext-clearfix">
<nav class="gridnext-nav-secondary" id="gridnext-secondary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation" aria-label="<?php esc_attr_e( 'Secondary Menu', 'gridnext' ); ?>">
<?php if ( gridnext_is_secondary_menu_active() ) { ?>
<button class="gridnext-secondary-responsive-menu-icon" aria-controls="gridnext-menu-secondary-navigation" aria-expanded="false"><?php echo esc_html( gridnext_secondary_menu_text() ); ?></button>
<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'gridnext-menu-secondary-navigation', 'menu_class' => 'gridnext-secondary-nav-menu gridnext-menu-secondary', 'fallback_cb' => 'gridnext_top_fallback_menu', 'container' => '', ) ); ?>
<?php } ?>

<?php if ( gridnext_is_social_buttons_active() ) { ?>
<?php gridnext_social_buttons(); ?>

<?php if ( !(gridnext_get_option('hide_search_button')) ) { ?>
<div id="gridnext-search-overlay-wrap" class="gridnext-search-overlay">
  <div class="gridnext-search-overlay-content">
    <?php get_search_form(); ?>
  </div>
  <button class="gridnext-search-closebtn" aria-label="<?php esc_attr_e( 'Close Search', 'gridnext' ); ?>" title="<?php esc_attr_e('Close Search','gridnext'); ?>">&#xD7;</button>
</div>
<?php } ?>
<?php } ?>
</nav>
</div>
</div>
</div>
<?php }
}