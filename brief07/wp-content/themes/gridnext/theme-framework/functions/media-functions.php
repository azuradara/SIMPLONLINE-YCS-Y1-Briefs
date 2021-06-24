<?php
/**
* Media functions
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridnext_media_content_grid() {
    global $post; ?>
    <?php if ( !(gridnext_get_option('hide_thumbnail_home')) ) { ?>
    <?php if ( has_post_thumbnail($post->ID) ) { ?>
    <div class="gridnext-grid-post-thumbnail gridnext-grid-post-block">
        <?php if ( gridnext_get_option('thumbnail_link_home') == 'no' ) { ?>
            <?php the_post_thumbnail('gridnext-360w-270h-image', array('class' => 'gridnext-grid-post-thumbnail-img', 'title' => the_title_attribute('echo=0'))); ?>
        <?php } else { ?>
            <a href="<?php echo esc_url( get_permalink() ); ?>" class="gridnext-grid-post-thumbnail-link" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridnext' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_post_thumbnail('gridnext-360w-270h-image', array('class' => 'gridnext-grid-post-thumbnail-img', 'title' => the_title_attribute('echo=0'))); ?></a>
        <?php } ?>
        <?php gridnext_grid_media_postmeta(); ?>
    </div>
    <?php } else { ?>
    <?php if ( !(gridnext_get_option('hide_default_thumbnail')) ) { ?>
    <div class="gridnext-grid-post-thumbnail gridnext-grid-post-thumbnail-default gridnext-grid-post-block">
        <?php if ( gridnext_get_option('thumbnail_link_home') == 'no' ) { ?>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/no-image-360-270.jpg' ); ?>" class="gridnext-grid-post-thumbnail-img"/>
        <?php } else { ?>
            <a href="<?php echo esc_url( get_permalink() ); ?>" class="gridnext-grid-post-thumbnail-link" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridnext' ), the_title_attribute( 'echo=0' ) ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/no-image-360-270.jpg' ); ?>" class="gridnext-grid-post-thumbnail-img"/></a>
        <?php } ?>
        <?php gridnext_grid_media_postmeta(); ?>
    </div>
    <?php } ?>
    <?php } ?>
    <?php } ?>
<?php }

function gridnext_media_content_single() {
    global $post;
    if ( has_post_thumbnail() ) {
        if ( !(gridnext_get_option('hide_thumbnail')) ) {
            if ( gridnext_get_option('thumbnail_link') == 'no' ) { ?>
                <div class="gridnext-post-thumbnail-single">
                <?php
                if ( is_page_template( array( 'template-full-width-post.php' ) ) ) {
                    the_post_thumbnail('gridnext-1200w-autoh-image', array('class' => 'gridnext-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0')));
                } else {
                    the_post_thumbnail('gridnext-920w-autoh-image', array('class' => 'gridnext-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0')));
                }
                ?>
                </div>
            <?php } else { ?>
                <div class="gridnext-post-thumbnail-single">
                <?php if ( is_page_template( array( 'template-full-width-post.php' ) ) ) { ?>
                    <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridnext' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="gridnext-post-thumbnail-single-link"><?php the_post_thumbnail('gridnext-1200w-autoh-image', array('class' => 'gridnext-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0'))); ?></a>
                <?php } else { ?>
                    <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridnext' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="gridnext-post-thumbnail-single-link"><?php the_post_thumbnail('gridnext-920w-autoh-image', array('class' => 'gridnext-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0'))); ?></a>
                <?php } ?>
                </div>
    <?php   }
        }
    }
}

function gridnext_media_content_single_location() {
    global $post;
    if( gridnext_get_option('featured_media_under_post_title') ) {
        add_action('gridnext_after_single_post_title', 'gridnext_media_content_single', 10 );
    } else {
        add_action('gridnext_before_single_post_title', 'gridnext_media_content_single', 10 );
    }
}
add_action('template_redirect', 'gridnext_media_content_single_location', 100 );

function gridnext_media_content_page() {
    global $post; ?>
    <?php
    if ( has_post_thumbnail() ) {
        if ( !(gridnext_get_option('hide_page_thumbnail')) ) {
            if ( gridnext_get_option('thumbnail_link_page') == 'no' ) { ?>
                <div class="gridnext-post-thumbnail-single">
                <?php
                if ( is_page_template( array( 'template-full-width-page.php' ) ) ) {
                    the_post_thumbnail('gridnext-1200w-autoh-image', array('class' => 'gridnext-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0')));
                } else {
                    the_post_thumbnail('gridnext-920w-autoh-image', array('class' => 'gridnext-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0')));
                }
                ?>
                </div>
            <?php } else { ?>
                <div class="gridnext-post-thumbnail-single">
                <?php if ( is_page_template( array( 'template-full-width-page.php' ) ) ) { ?>
                    <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridnext' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="gridnext-post-thumbnail-single-link"><?php the_post_thumbnail('gridnext-1200w-autoh-image', array('class' => 'gridnext-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0'))); ?></a>
                <?php } else { ?>
                    <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridnext' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="gridnext-post-thumbnail-single-link"><?php the_post_thumbnail('gridnext-920w-autoh-image', array('class' => 'gridnext-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0'))); ?></a>
                <?php } ?>
                </div>
    <?php   }
        }
    }
    ?>
<?php }

function gridnext_media_content_page_location() {
    global $post;
    if( gridnext_get_option('featured_media_under_page_title') ) {
        add_action('gridnext_after_single_page_title', 'gridnext_media_content_page', 10 );
    } else {
        add_action('gridnext_before_single_page_title', 'gridnext_media_content_page', 10 );
    }
}
add_action('template_redirect', 'gridnext_media_content_page_location', 110 );

function gridnext_media_content_nongrid() {
    global $post;
    if ( has_post_thumbnail() ) {
        if ( !(gridnext_get_option('hide_thumbnail')) ) {
            if ( gridnext_get_option('thumbnail_link') == 'no' ) { ?>
                <div class="gridnext-post-thumbnail-single">
                <?php
                if ( is_page_template( array( 'template-full-width-post.php' ) ) ) {
                    the_post_thumbnail('gridnext-1200w-autoh-image', array('class' => 'gridnext-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0')));
                } else {
                    the_post_thumbnail('gridnext-920w-autoh-image', array('class' => 'gridnext-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0')));
                }
                ?>
                </div>
            <?php } else { ?>
                <div class="gridnext-post-thumbnail-single">
                <?php if ( is_page_template( array( 'template-full-width-post.php' ) ) ) { ?>
                    <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridnext' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="gridnext-post-thumbnail-single-link"><?php the_post_thumbnail('gridnext-1200w-autoh-image', array('class' => 'gridnext-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0'))); ?></a>
                <?php } else { ?>
                    <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridnext' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="gridnext-post-thumbnail-single-link"><?php the_post_thumbnail('gridnext-920w-autoh-image', array('class' => 'gridnext-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0'))); ?></a>
                <?php } ?>
                </div>
    <?php   }
        }
    }
}

function gridnext_media_content_nongrid_location() {
    if( gridnext_get_option('featured_nongrid_media_under_post_title') ) {
        add_action('gridnext_after_nongrid_post_title', 'gridnext_media_content_nongrid', 10 );
    } else {
        add_action('gridnext_before_nongrid_post_title', 'gridnext_media_content_nongrid', 10 );
    }
}
add_action('template_redirect', 'gridnext_media_content_nongrid_location', 120 );