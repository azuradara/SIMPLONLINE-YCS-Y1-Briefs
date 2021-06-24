<?php
/**
* Social profiles options
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridnext_social_profiles($wp_customize) {

    $wp_customize->add_section( 'gridnext_section_social', array( 'title' => esc_html__( 'Social Links Options', 'gridnext' ), 'panel' => 'gridnext_main_options_panel', 'priority' => 240, ));

    $wp_customize->add_setting( 'gridnext_options[hide_header_social_buttons]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_header_social_buttons_control', array( 'label' => esc_html__( 'Hide Social Area', 'gridnext' ), 'description' => esc_html__('If you checked this option, all buttons will disappear. There is no any effect from these options: "Hide Search Button", "Show Login/Logout Button", "Show Random Post Button".', 'gridnext'), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[hide_header_social_buttons]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[hide_search_button]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_search_button_control', array( 'label' => esc_html__( 'Hide Search Button', 'gridnext' ), 'description' => esc_html__('This option has no effect if you have checked the option: "Hide Social Area".', 'gridnext'), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[hide_search_button]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[show_login_button]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_show_login_button_control', array( 'label' => esc_html__( 'Show Login/Logout Button', 'gridnext' ), 'description' => esc_html__('This option has no effect if you have checked the option: "Hide Social Area".', 'gridnext'), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[show_login_button]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[show_rp_button]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_show_rp_button_control', array( 'label' => esc_html__( 'Show Random Post Button', 'gridnext' ), 'description' => esc_html__('This option has no effect if you have checked the option: "Hide Social Area".', 'gridnext'), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[show_rp_button]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[twitterlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_twitterlink_control', array( 'label' => esc_html__( 'Twitter URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[twitterlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[facebooklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_facebooklink_control', array( 'label' => esc_html__( 'Facebook URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[facebooklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[googlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) ); 

    $wp_customize->add_control( 'gridnext_googlelink_control', array( 'label' => esc_html__( 'Google Plus URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[googlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[pinterestlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_pinterestlink_control', array( 'label' => esc_html__( 'Pinterest URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[pinterestlink]', 'type' => 'text' ) );
    
    $wp_customize->add_setting( 'gridnext_options[linkedinlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_linkedinlink_control', array( 'label' => esc_html__( 'Linkedin Link', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[linkedinlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[instagramlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_instagramlink_control', array( 'label' => esc_html__( 'Instagram Link', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[instagramlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[vklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_vklink_control', array( 'label' => esc_html__( 'VK Link', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[vklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[flickrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_flickrlink_control', array( 'label' => esc_html__( 'Flickr Link', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[flickrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[youtubelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_youtubelink_control', array( 'label' => esc_html__( 'Youtube URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[youtubelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[vimeolink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_vimeolink_control', array( 'label' => esc_html__( 'Vimeo URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[vimeolink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[soundcloudlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_soundcloudlink_control', array( 'label' => esc_html__( 'Soundcloud URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[soundcloudlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[messengerlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_messengerlink_control', array( 'label' => esc_html__( 'Messenger URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[messengerlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[whatsapplink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_whatsapplink_control', array( 'label' => esc_html__( 'WhatsApp URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[whatsapplink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[lastfmlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_lastfmlink_control', array( 'label' => esc_html__( 'Lastfm URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[lastfmlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[mediumlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_mediumlink_control', array( 'label' => esc_html__( 'Medium URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[mediumlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[githublink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_githublink_control', array( 'label' => esc_html__( 'Github URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[githublink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[bitbucketlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_bitbucketlink_control', array( 'label' => esc_html__( 'Bitbucket URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[bitbucketlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[tumblrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_tumblrlink_control', array( 'label' => esc_html__( 'Tumblr URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[tumblrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[digglink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_digglink_control', array( 'label' => esc_html__( 'Digg URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[digglink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[deliciouslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_deliciouslink_control', array( 'label' => esc_html__( 'Delicious URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[deliciouslink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[stumblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_stumblelink_control', array( 'label' => esc_html__( 'Stumbleupon URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[stumblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[mixlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_mixlink_control', array( 'label' => esc_html__( 'Mix URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[mixlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[redditlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_redditlink_control', array( 'label' => esc_html__( 'Reddit URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[redditlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[dribbblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_dribbblelink_control', array( 'label' => esc_html__( 'Dribbble URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[dribbblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[flipboardlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_flipboardlink_control', array( 'label' => esc_html__( 'Flipboard URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[flipboardlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[bloggerlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_bloggerlink_control', array( 'label' => esc_html__( 'Blogger URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[bloggerlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[etsylink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_etsylink_control', array( 'label' => esc_html__( 'Etsy URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[etsylink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[behancelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_behancelink_control', array( 'label' => esc_html__( 'Behance URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[behancelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[amazonlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_amazonlink_control', array( 'label' => esc_html__( 'Amazon URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[amazonlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[meetuplink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_meetuplink_control', array( 'label' => esc_html__( 'Meetup URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[meetuplink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[mixcloudlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_mixcloudlink_control', array( 'label' => esc_html__( 'Mixcloud URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[mixcloudlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[slacklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_slacklink_control', array( 'label' => esc_html__( 'Slack URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[slacklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[snapchatlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_snapchatlink_control', array( 'label' => esc_html__( 'Snapchat URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[snapchatlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[spotifylink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_spotifylink_control', array( 'label' => esc_html__( 'Spotify URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[spotifylink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[yelplink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_yelplink_control', array( 'label' => esc_html__( 'Yelp URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[yelplink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[wordpresslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_wordpresslink_control', array( 'label' => esc_html__( 'WordPress URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[wordpresslink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[twitchlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_twitchlink_control', array( 'label' => esc_html__( 'Twitch URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[twitchlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[telegramlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_telegramlink_control', array( 'label' => esc_html__( 'Telegram URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[telegramlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[bandcamplink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_bandcamplink_control', array( 'label' => esc_html__( 'Bandcamp URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[bandcamplink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[quoralink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_quoralink_control', array( 'label' => esc_html__( 'Quora URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[quoralink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[foursquarelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_foursquarelink_control', array( 'label' => esc_html__( 'Foursquare URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[foursquarelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[deviantartlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_deviantartlink_control', array( 'label' => esc_html__( 'DeviantArt URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[deviantartlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[imdblink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_imdblink_control', array( 'label' => esc_html__( 'IMDB URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[imdblink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[codepenlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_codepenlink_control', array( 'label' => esc_html__( 'Codepen URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[codepenlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[jsfiddlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_jsfiddlelink_control', array( 'label' => esc_html__( 'JSFiddle URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[jsfiddlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[stackoverflowlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_stackoverflowlink_control', array( 'label' => esc_html__( 'Stack Overflow URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[stackoverflowlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[stackexchangelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_stackexchangelink_control', array( 'label' => esc_html__( 'Stack Exchange URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[stackexchangelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[bsalink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_bsalink_control', array( 'label' => esc_html__( 'BuySellAds URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[bsalink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[web500pxlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_web500pxlink_control', array( 'label' => esc_html__( '500px URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[web500pxlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[ellolink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_ellolink_control', array( 'label' => esc_html__( 'Ello URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[ellolink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[discordlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_discordlink_control', array( 'label' => esc_html__( 'Discord URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[discordlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[goodreadslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_goodreadslink_control', array( 'label' => esc_html__( 'Goodreads URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[goodreadslink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[odnoklassnikilink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_odnoklassnikilink_control', array( 'label' => esc_html__( 'Odnoklassniki URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[odnoklassnikilink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[houzzlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_houzzlink_control', array( 'label' => esc_html__( 'Houzz URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[houzzlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[pocketlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_pocketlink_control', array( 'label' => esc_html__( 'Pocket URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[pocketlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[xinglink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_xinglink_control', array( 'label' => esc_html__( 'XING URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[xinglink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[googleplaylink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_googleplaylink_control', array( 'label' => esc_html__( 'Google Play URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[googleplaylink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[slidesharelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_slidesharelink_control', array( 'label' => esc_html__( 'SlideShare URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[slidesharelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[dropboxlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_dropboxlink_control', array( 'label' => esc_html__( 'Dropbox URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[dropboxlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[paypallink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_paypallink_control', array( 'label' => esc_html__( 'PayPal URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[paypallink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[viadeolink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_viadeolink_control', array( 'label' => esc_html__( 'Viadeo URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[viadeolink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[wikipedialink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_wikipedialink_control', array( 'label' => esc_html__( 'Wikipedia URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[wikipedialink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[skypeusername]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field' ) );

    $wp_customize->add_control( 'gridnext_skypeusername_control', array( 'label' => esc_html__( 'Skype Username', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[skypeusername]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[emailaddress]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_email' ) );

    $wp_customize->add_control( 'gridnext_emailaddress_control', array( 'label' => esc_html__( 'Email Address', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[emailaddress]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[rsslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_rsslink_control', array( 'label' => esc_html__( 'RSS Feed URL', 'gridnext' ), 'section' => 'gridnext_section_social', 'settings' => 'gridnext_options[rsslink]', 'type' => 'text' ) );

}