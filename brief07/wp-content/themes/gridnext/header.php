<?php
/**
* The header for GridNext theme.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="gridnext-site-body" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#gridnext-posts-wrapper"><?php esc_html_e( 'Skip to content', 'gridnext' ); ?></a>

<?php gridnext_header_image(); ?>

<?php gridnext_secondary_menu_area(); ?>

<?php gridnext_before_header(); ?>

<div class="gridnext-site-header gridnext-container" id="gridnext-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">
<div class="gridnext-head-content gridnext-clearfix" id="gridnext-head-content">

<?php if ( gridnext_is_header_content_active() ) { ?>
<div class="gridnext-outer-wrapper">
<div class="gridnext-header-inside gridnext-clearfix">
<div class="gridnext-header-inside-content gridnext-clearfix">
<div class="gridnext-header-inside-container">

<div class="gridnext-logo">
<?php if ( has_custom_logo() ) : ?>
    <div class="site-branding">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="gridnext-logo-img-link">
        <img src="<?php echo esc_url( gridnext_custom_logo() ); ?>" alt="" class="gridnext-logo-img"/>
    </a>
    <div class="gridnext-custom-logo-info"><?php gridnext_site_title(); ?></div>
    </div>
<?php else: ?>
    <div class="site-branding">
      <?php gridnext_site_title(); ?>
    </div>
<?php endif; ?>
</div>

<?php if ( gridnext_is_primary_menu_active() ) { ?>
<div class="gridnext-header-menu">
<div class="gridnext-container gridnext-primary-menu-container gridnext-clearfix">
<div class="gridnext-primary-menu-container-inside gridnext-clearfix">
<nav class="gridnext-nav-primary" id="gridnext-primary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'gridnext' ); ?>">
<button class="gridnext-primary-responsive-menu-icon" aria-controls="gridnext-menu-primary-navigation" aria-expanded="false"><?php echo esc_html( gridnext_primary_menu_text() ); ?></button>
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'gridnext-menu-primary-navigation', 'menu_class' => 'gridnext-primary-nav-menu gridnext-menu-primary', 'fallback_cb' => 'gridnext_fallback_menu', 'container' => '', ) ); ?>
</nav>
</div>
</div>
</div>
<?php } ?>

</div>
</div>
</div>
</div>
<?php } else { ?>
<div class="gridnext-no-header-content">
  <?php gridnext_site_title(); ?>
</div>
<?php } ?>

</div><!--/#gridnext-head-content -->
</div><!--/#gridnext-header -->

<?php gridnext_after_header(); ?>

<div id="gridnext-header-end"></div>

<?php gridnext_top_wide_widgets(); ?>

<div class="gridnext-outer-wrapper" id="gridnext-wrapper-outside">

<div class="gridnext-container gridnext-clearfix" id="gridnext-wrapper">
<div class="gridnext-content-wrapper gridnext-clearfix" id="gridnext-content-wrapper">