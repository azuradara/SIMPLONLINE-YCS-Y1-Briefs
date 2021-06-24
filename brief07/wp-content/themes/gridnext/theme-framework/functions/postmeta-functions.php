<?php
/**
* Post meta functions
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'gridnext_post_tags' ) ) :
/**
 * Prints HTML with meta information for the tags.
 */
function gridnext_post_tags() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space after the comma */
        $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'gridnext' ) );
        if ( $tags_list ) {
            /* translators: 1: list of tags. */
            printf( '<span class="gridnext-tags-links"><i class="fas fa-tags" aria-hidden="true"></i> ' . esc_html__( 'Tagged %1$s', 'gridnext' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }
    }
}
endif;


if ( ! function_exists( 'gridnext_grid_cats' ) ) :
function gridnext_grid_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( '&nbsp;', 'gridnext' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="gridnext-grid-post-categories">' . __( '<span class="gridnext-sr-only">Posted in </span>%1$s', 'gridnext' ) . '</div>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }
    }
}
endif;


function gridnext_author_image_size() {
    global $post;
    $gravatar_size = 36;
    return apply_filters( 'gridnext_author_image_size', $gravatar_size );
}

if ( ! function_exists( 'gridnext_author_image' ) ) :
function gridnext_author_image( $size = '' ) {
    global $post;
    if ( $size ) {
        $gravatar_size = $size;
    } else {
        $gravatar_size = gridnext_author_image_size();
    }
    $author_email   = get_the_author_meta( 'user_email' );
    $gravatar_args  = apply_filters(
        'gridnext_gravatar_args',
        array(
            'size' => $gravatar_size,
        )
    );

    $avatar_url = '';
    if( get_the_author_meta('themesdna_userprofile_image',get_query_var('author') ) ) {
        $avatar_url = get_the_author_meta( 'themesdna_userprofile_image' );
    } else {
        $avatar_url = get_avatar_url( $author_email, $gravatar_args );
    }

    //$avatar_url     = get_avatar_url( $author_email, $gravatar_args );
    if ( gridnext_get_option('author_image_link') ) {
        $avatar_markup  = '<a href="'.esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ).'" title="'.esc_attr( get_the_author() ).'"><img class="gridnext-grid-post-author-image" alt="' . esc_attr( get_the_author() ) . '" src="' . esc_url( $avatar_url ) . '" /></a>';
    } else {
        $avatar_markup  = '<img class="gridnext-grid-post-author-image" alt="' . esc_attr( get_the_author() ) . '" src="' . esc_url( $avatar_url ) . '" />';
    }
    return apply_filters( 'gridnext_author_image', $avatar_markup );
}
endif;


if ( ! function_exists( 'gridnext_grid_header_meta' ) ) :
function gridnext_grid_header_meta() { ?>
    <?php global $post; ?>
    <?php if ( !(gridnext_get_option('hide_post_author_home')) || !(gridnext_get_option('hide_posted_date_home')) ) { ?>
    <div class="gridnext-grid-header-meta gridnext-grid-post-block">
    <div class="gridnext-grid-header-meta-inside">
    <?php if ( !(gridnext_get_option('hide_post_author_home')) ) { ?><span class="gridnext-grid-post-author gridnext-grid-post-meta"><i class="far fa-user" aria-hidden="true"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span><?php } ?>
    <?php if ( !(gridnext_get_option('hide_posted_date_home')) ) { ?><span class="gridnext-grid-post-date gridnext-grid-post-meta"><i class="far fa-calendar-alt" aria-hidden="true"></i><?php echo esc_html( get_the_date() ); ?></span><?php } ?>
    </div>
    </div>
    <?php } ?>
<?php }
endif;


if ( ! function_exists( 'gridnext_grid_footer_meta' ) ) :
 /**
  * Prints HTML with meta information for the categories, tags and comments.
  */
function gridnext_grid_footer_meta() {
    global $post; ?>
    <?php if ( (!(gridnext_get_option('hide_post_categories_home')) && has_category()) || (!(gridnext_get_option('hide_post_tags_home')) && has_tag()) ) { ?>
    <div class="gridnext-grid-footer-meta gridnext-grid-post-block">
    <div class="gridnext-grid-footer-meta-inside">
    <?php
    if ( !(gridnext_get_option('hide_post_categories_home')) && has_category() ) {
        if ( 'post' == get_post_type() ) {
            /* translators: used between list items, there is a space after the comma */
            $categories_list = get_the_category_list( esc_html__( ', ', 'gridnext' ) );
            if ( $categories_list ) { ?>
                <span class="gridnext-summary-post-cat-links gridnext-grid-footer-meta-block"><i class="far fa-folder-open" aria-hidden="true"></i><?php echo wp_kses_post( $categories_list ); ?></span>
            <?php }
        }
    }

    if ( !(gridnext_get_option('hide_post_tags_home')) && has_tag() ) {
        if ( 'post' == get_post_type() ) {
            /* translators: used between list items, there is a space after the comma */
            $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'gridnext' ) );
            if ( $tags_list ) { ?>
                <span class="gridnext-summary-post-tags-links gridnext-grid-footer-meta-block"><i class="fas fa-tags" aria-hidden="true"></i><?php echo wp_kses_post( $tags_list ); ?></span>
            <?php }
        }
    }
    ?>
    </div>
    </div>
    <?php } ?>
    <?php
}
endif;


if ( ! function_exists( 'gridnext_nongrid_postmeta' ) ) :
function gridnext_nongrid_postmeta() { ?>
    <?php global $post; ?>
    <?php if ( !(gridnext_get_option('hide_post_author_home')) || !(gridnext_get_option('hide_posted_date_home')) || !(gridnext_get_option('hide_comments_link_home')) || !(gridnext_get_option('hide_post_categories_home')) ) { ?>
    <div class="gridnext-entry-meta-single">
    <?php if ( !(gridnext_get_option('hide_post_author_home')) ) { ?><span class="gridnext-entry-meta-single-author"><i class="far fa-user-circle" aria-hidden="true"></i>&nbsp;<span class="author vcard" itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span></span><?php } ?>
    <?php if ( !(gridnext_get_option('hide_posted_date_home')) ) { ?><span class="gridnext-entry-meta-single-date"><i class="far fa-clock" aria-hidden="true"></i>&nbsp;<?php echo esc_html( get_the_date() ); ?></span><?php } ?>
    <?php if ( !(gridnext_get_option('hide_comments_link_home')) ) { ?><?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
    <span class="gridnext-entry-meta-single-comments"><i class="far fa-comments" aria-hidden="true"></i>&nbsp;<?php comments_popup_link( sprintf( wp_kses( /* translators: %s: post title */ __( 'Leave a Comment<span class="gridnext-sr-only"> on %s</span>', 'gridnext' ), array( 'span' => array( 'class' => array(), ), ) ), wp_kses_post( get_the_title() ) ) ); ?></span>
    <?php } ?><?php } ?>
    <?php if ( !(gridnext_get_option('hide_post_categories_home')) ) { ?><?php gridnext_single_cats(); ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;


if ( ! function_exists( 'gridnext_single_cats' ) ) :
function gridnext_single_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( ', ', 'gridnext' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<span class="gridnext-entry-meta-single-cats"><i class="far fa-folder-open" aria-hidden="true"></i>&nbsp;' . __( '<span class="gridnext-sr-only">Posted in </span>%1$s', 'gridnext' ) . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }
    }
}
endif;


if ( ! function_exists( 'gridnext_single_postmeta' ) ) :
function gridnext_single_postmeta() { ?>
    <?php global $post; ?>
    <?php if ( !(gridnext_get_option('hide_post_author')) || !(gridnext_get_option('hide_posted_date')) || !(gridnext_get_option('hide_comments_link')) || !(gridnext_get_option('hide_post_categories')) || !(gridnext_get_option('hide_post_edit')) ) { ?>
    <div class="gridnext-entry-meta-single">
    <?php if ( !(gridnext_get_option('hide_post_author')) ) { ?><span class="gridnext-entry-meta-single-author"><i class="far fa-user-circle" aria-hidden="true"></i>&nbsp;<span class="author vcard" itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span></span><?php } ?>
    <?php if ( !(gridnext_get_option('hide_posted_date')) ) { ?><span class="gridnext-entry-meta-single-date"><i class="far fa-clock" aria-hidden="true"></i>&nbsp;<?php echo esc_html( get_the_date() ); ?></span><?php } ?>
    <?php if ( !(gridnext_get_option('hide_comments_link')) ) { ?><?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
    <span class="gridnext-entry-meta-single-comments"><i class="far fa-comments" aria-hidden="true"></i>&nbsp;<?php comments_popup_link( sprintf( wp_kses( /* translators: %s: post title */ __( 'Leave a Comment<span class="gridnext-sr-only"> on %s</span>', 'gridnext' ), array( 'span' => array( 'class' => array(), ), ) ), wp_kses_post( get_the_title() ) ) ); ?></span>
    <?php } ?><?php } ?>
    <?php if ( !(gridnext_get_option('hide_post_categories')) ) { ?><?php gridnext_single_cats(); ?><?php } ?>
    <?php if ( !(gridnext_get_option('hide_post_edit')) ) { ?><?php edit_post_link( sprintf( wp_kses( /* translators: %s: Name of current post. Only visible to screen readers */ __( 'Edit<span class="gridnext-sr-only"> %s</span>', 'gridnext' ), array( 'span' => array( 'class' => array(), ), ) ), wp_kses_post( get_the_title() ) ), '<span class="edit-link">&nbsp;&nbsp;<i class="far fa-edit" aria-hidden="true"></i> ', '</span>' ); ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;


if ( ! function_exists( 'gridnext_page_postmeta' ) ) :
function gridnext_page_postmeta() { ?>
    <?php global $post; ?>
    <?php if ( !(gridnext_get_option('hide_page_author')) || !(gridnext_get_option('hide_page_date')) || !(gridnext_get_option('hide_page_comments')) ) { ?>
    <div class="gridnext-entry-meta-single">
    <?php if ( !(gridnext_get_option('hide_page_author')) ) { ?><span class="gridnext-entry-meta-single-author"><i class="far fa-user-circle" aria-hidden="true"></i>&nbsp;<span class="author vcard" itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span></span><?php } ?>
    <?php if ( !(gridnext_get_option('hide_page_date')) ) { ?><span class="gridnext-entry-meta-single-date"><i class="far fa-clock" aria-hidden="true"></i>&nbsp;<?php echo esc_html( get_the_date() ); ?></span><?php } ?>
    <?php if ( !(gridnext_get_option('hide_page_comments')) ) { ?><?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
    <span class="gridnext-entry-meta-single-comments"><i class="far fa-comments" aria-hidden="true"></i>&nbsp;<?php comments_popup_link( sprintf( wp_kses( /* translators: %s: post title */ __( 'Leave a Comment<span class="gridnext-sr-only"> on %s</span>', 'gridnext' ), array( 'span' => array( 'class' => array(), ), ) ), wp_kses_post( get_the_title() ) ) ); ?></span>
    <?php } ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;


if ( ! function_exists( 'gridnext_grid_media_postmeta' ) ) :
function gridnext_grid_media_postmeta() { ?>
    <?php global $post; ?>
    <?php if ( !(gridnext_get_option('hide_comments_link_home')) && (! post_password_required() && ( comments_open() || get_comments_number() )) ) { ?>
    <div class="gridnext-grid-media-data gridnext-clearfix">
    <?php if ( gridnext_get_option('comments_count_full_home') ) { ?>
    <?php if ( !(gridnext_get_option('hide_comments_link_home')) ) { ?><?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
    <span class="gridnext-grid-post-comments gridnext-grid-post-comments-normal gridnext-grid-media-data-meta"><i class="far fa-comments" aria-hidden="true"></i>&nbsp;<?php comments_popup_link( sprintf( wp_kses( /* translators: %s: post title */ __( '0 Comment<span class="gridnext-sr-only"> on %s</span>', 'gridnext' ), array( 'span' => array( 'class' => array(), ), ) ), wp_kses_post( get_the_title() ) ) ); ?></span>
    <?php } ?><?php } ?>
    <?php } else { ?>
    <?php if ( !(gridnext_get_option('hide_comments_link_home')) ) { ?><?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
    <span class="gridnext-grid-post-comments gridnext-grid-post-comments-small gridnext-grid-media-data-meta"><i class="far fa-comments" aria-hidden="true"></i>&nbsp;<?php comments_popup_link( sprintf( wp_kses( /* translators: %s: post title */ __( '0<span class="gridnext-sr-only"> Comment on %s</span>', 'gridnext' ), array( 'span' => array( 'class' => array(), ), ) ), wp_kses_post( get_the_title() ) ), sprintf( wp_kses( /* translators: %s: post title */ __( '1<span class="gridnext-sr-only"> Comment on %s</span>', 'gridnext' ), array( 'span' => array( 'class' => array(), ), ) ), wp_kses_post( get_the_title() ) ), sprintf( wp_kses( /* translators: %s: post title */ __( '%1$s<span class="gridnext-sr-only"> Comments on %2$s</span>', 'gridnext' ), array( 'span' => array( 'class' => array(), ), ) ), number_format_i18n( get_comments_number() ), wp_kses_post( get_the_title() ) ) ); ?></span>
    <?php } ?><?php } ?>
    <?php } ?>
    </div>
    <?php } ?>
<?php }
endif;