<?php
/**
* Author bio box
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridnext_add_author_bio_box() {
    $content='';
    if (is_single()) {
        $content .= '
            <div class="gridnext-author-bio">
            <div class="gridnext-author-bio-inside">
            <div class="gridnext-author-bio-top">
            <span class="gridnext-author-bio-gravatar">
                '. get_avatar( get_the_author_meta('email') , 80 ) .'
            </span>
            <div class="gridnext-author-bio-text">
                <div class="gridnext-author-bio-name">'.esc_html__( 'Author: ', 'gridnext' ).'<span>'. get_the_author_link() .'</span></div><div class="gridnext-author-bio-text-description">'. wp_kses_post( get_the_author_meta('description',get_query_var('author') ) ) .'</div>
            </div>
            </div>
            </div>
            </div>
        ';
    }
    return apply_filters( 'gridnext_add_author_bio_box', $content );
}