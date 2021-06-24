<?php
/**
* Header Functions
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function gridnext_pingback_header() {
    if ( is_singular() && pings_open() ) {
        echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
    }
}
add_action( 'wp_head', 'gridnext_pingback_header' );

// Get custom-logo URL
function gridnext_custom_logo() {
    if ( ! has_custom_logo() ) {return;}
    $gridnext_custom_logo_id = get_theme_mod( 'custom_logo' );
    $gridnext_logo = wp_get_attachment_image_src( $gridnext_custom_logo_id , 'full' );
    $gridnext_logo_src = $gridnext_logo[0];
    return apply_filters( 'gridnext_custom_logo', $gridnext_logo_src );
}

// Site Title
function gridnext_site_title() {
    if ( is_front_page() && is_home() ) { ?>
            <h1 class="gridnext-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php if ( !(gridnext_get_option('hide_tagline')) ) { ?><p class="gridnext-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_home() ) { ?>
            <h1 class="gridnext-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php if ( !(gridnext_get_option('hide_tagline')) ) { ?><p class="gridnext-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_singular() ) { ?>
            <p class="gridnext-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(gridnext_get_option('hide_tagline')) ) { ?><p class="gridnext-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_category() ) { ?>
            <p class="gridnext-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(gridnext_get_option('hide_tagline')) ) { ?><p class="gridnext-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_tag() ) { ?>
            <p class="gridnext-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(gridnext_get_option('hide_tagline')) ) { ?><p class="gridnext-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_author() ) { ?>
            <p class="gridnext-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(gridnext_get_option('hide_tagline')) ) { ?><p class="gridnext-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_archive() && !is_category() && !is_tag() && !is_author() ) { ?>
            <p class="gridnext-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(gridnext_get_option('hide_tagline')) ) { ?><p class="gridnext-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_search() ) { ?>
            <p class="gridnext-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(gridnext_get_option('hide_tagline')) ) { ?><p class="gridnext-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_404() ) { ?>
            <p class="gridnext-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(gridnext_get_option('hide_tagline')) ) { ?><p class="gridnext-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } else { ?>
            <h1 class="gridnext-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php if ( !(gridnext_get_option('hide_tagline')) ) { ?><p class="gridnext-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php }
}

function gridnext_header_image_destination() {
    $url = home_url( '/' );
    if ( gridnext_get_option('header_image_destination') ) {
        $url = gridnext_get_option('header_image_destination');
    }
    return apply_filters( 'gridnext_header_image_destination', $url );
}


function gridnext_header_image_markup() {
    if ( get_header_image() ) {
        if ( gridnext_get_option('remove_header_image_link') ) {
            the_header_image_tag( array( 'class' => 'gridnext-header-img', 'alt' => '' ) );
        } else { ?>
            <a href="<?php echo esc_url( gridnext_header_image_destination() ); ?>" rel="home" class="gridnext-header-img-link"><?php the_header_image_tag( array( 'class' => 'gridnext-header-img', 'alt' => '' ) ); ?></a>
        <?php }
    }
}

function gridnext_header_image_details() {
    $header_image_custom_title = '';
    if ( gridnext_get_option('header_image_custom_title') ) {
        $header_image_custom_title = gridnext_get_option('header_image_custom_title');
    }

    $header_image_custom_description = '';
    if ( gridnext_get_option('header_image_custom_description') ) {
        $header_image_custom_description = gridnext_get_option('header_image_custom_description');
    }

    if ( !(gridnext_get_option('hide_header_image_details')) ) {
    if ( gridnext_get_option('header_image_custom_text') ) {
        if ( $header_image_custom_title || $header_image_custom_description ) { ?>
            <div class="gridnext-header-image-info">
            <div class="gridnext-header-image-info-inside">
                <?php if ( $header_image_custom_title ) { ?><p class="gridnext-header-image-site-title gridnext-header-image-block"><?php echo wp_kses_post( force_balance_tags( do_shortcode($header_image_custom_title) ) ); ?></p><?php } ?>
                <?php if ( !(gridnext_get_option('hide_header_image_description')) ) { ?><?php if ( $header_image_custom_description ) { ?><p class="gridnext-header-image-site-description gridnext-header-image-block"><?php echo wp_kses_post( force_balance_tags( do_shortcode($header_image_custom_description) ) ); ?></p><?php } ?><?php } ?>
            </div>
            </div>
        <?php }
    } else { ?>
        <div class="gridnext-header-image-info">
        <div class="gridnext-header-image-info-inside">
            <p class="gridnext-header-image-site-title gridnext-header-image-block"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(gridnext_get_option('hide_header_image_description')) ) { ?><p class="gridnext-header-image-site-description gridnext-header-image-block"><?php bloginfo( 'description' ); ?></p><?php } ?>
        </div>
        </div>
    <?php }
    }
}

function gridnext_header_image_wrapper() { ?>
    <div class="gridnext-outer-wrapper">
    <div class="gridnext-header-image gridnext-clearfix">
    <?php gridnext_header_image_markup(); ?>
    <?php gridnext_header_image_details(); ?>
    </div>
    </div><?php
}

function gridnext_header_image() {
    if ( gridnext_get_option('hide_header_image') ) { return; }
    if ( get_header_image() ) {
        gridnext_header_image_wrapper();
    }
}