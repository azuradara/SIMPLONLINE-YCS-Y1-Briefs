<?php
/**
* Post share buttons
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridnext_share_text_home() {
    $sharetext = esc_html__( 'Share:', 'gridnext' );
    if ( gridnext_get_option('hide_share_text_home') ) {return;}
    if ( gridnext_get_option('share_text_home') ) {
        $sharetext = gridnext_get_option('share_text_home');
    }
    return apply_filters( 'gridnext_share_text_home', $sharetext );
}

function gridnext_small_share_buttons() {

        global $post;

        // Get current page URL 
        $posturl = rawurlencode(get_permalink($post->ID));

        // Get current page title
        $posttitle = rawurlencode(the_title_attribute('echo=0'));

        // Construct sharing URL without using any script
        $twitter_url = 'https://twitter.com/intent/tweet?text='.$posttitle.'&amp;url='.$posturl;
        $facebook_url = 'https://www.facebook.com/sharer.php?u='.$posturl;
        $linkedin_url = 'https://www.linkedin.com/shareArticle?mini=true&amp;title='.$posttitle.'&amp;url='.$posturl;

        $image_url_regex = '/(http(s?):)([\/|.|\w|\s|-])*\.(?:jpg|jpeg|gif|png)/i';
        $postthumb = '';
        $postthumb_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false );
        $postthumb = isset($postthumb_attributes[0]) ? $postthumb_attributes[0] : '';

        if(!empty($postthumb)) {
            $pinterest_url = 'https://pinterest.com/pin/create/button/?url='.$posturl.'&amp;media='.$postthumb.'&amp;description='.$posttitle;
        }

        // Add sharing button at the end of page/page content
        $socialcontent = '<div class="gridnext-small-share-buttons gridnext-grid-post-block gridnext-clearfix"><div class="gridnext-small-share-buttons-inside gridnext-clearfix"><span class="gridnext-small-share-text">'.wp_kses_post(gridnext_share_text_home()).' </span>';
        if ( !(gridnext_get_option('hide_share_twitter_home')) ) {
            $socialcontent .= '<a class="gridnext-small-share-buttons-twitter" href="'.esc_url($twitter_url).'" target="_blank" rel="nofollow" title="'.esc_attr__('Tweet This!', 'gridnext').' : '.the_title_attribute('echo=0').'"><i class="fab fa-twitter" aria-hidden="true"></i><span class="gridnext-sr-only"> '.esc_html__('Tweet This!', 'gridnext').' : '.esc_html( get_the_title() ).'</span></a>';
        }
        if ( !(gridnext_get_option('hide_share_facebook_home')) ) {
            $socialcontent .= '<a class="gridnext-small-share-buttons-facebook" href="'.esc_url($facebook_url).'" target="_blank" rel="nofollow" title="'.esc_attr__('Share this on Facebook', 'gridnext').' : '.the_title_attribute('echo=0').'"><i class="fab fa-facebook-f" aria-hidden="true"></i><span class="gridnext-sr-only"> '.esc_html__('Share this on Facebook', 'gridnext').' : '.esc_html( get_the_title() ).'</span></a>';
        }
        if ( !(gridnext_get_option('hide_share_pinterest_home')) && !(empty($postthumb)) ) {
            $socialcontent .= '<a class="gridnext-small-share-buttons-pinterest" href="'.esc_url($pinterest_url).'" target="_blank" rel="nofollow" title="'.esc_attr__('Share this on Pinterest', 'gridnext').' : '.the_title_attribute('echo=0').'"><i class="fab fa-pinterest" aria-hidden="true"></i><span class="gridnext-sr-only"> '.esc_html__('Share this on Pinterest', 'gridnext').' : '.esc_html( get_the_title() ).'</span></a>';
        }
        if ( !(gridnext_get_option('hide_share_linkedin_home')) ) {
            $socialcontent .= '<a class="gridnext-small-share-buttons-linkedin" href="'.esc_url($linkedin_url).'" target="_blank" rel="nofollow" title="'.esc_attr__('Share this on Linkedin', 'gridnext').' : '.the_title_attribute('echo=0').'"><i class="fab fa-linkedin-in" aria-hidden="true"></i><span class="gridnext-sr-only"> '.esc_html__('Share this on Linkedin', 'gridnext').' : '.esc_html( get_the_title() ).'</span></a>';
        }
        $socialcontent .= '</div></div>';

        return apply_filters( 'gridnext_small_share_buttons', $socialcontent );

}