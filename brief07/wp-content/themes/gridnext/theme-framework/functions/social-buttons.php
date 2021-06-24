<?php
/**
* Social buttons
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridnext_social_buttons() { ?>

<div class='gridnext-header-social-icons'>
    <?php if ( gridnext_get_option('twitterlink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('twitterlink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-twitter" aria-label="<?php esc_attr_e('Twitter Button','gridnext'); ?>"><i class="fab fa-twitter" aria-hidden="true" title="<?php esc_attr_e('Twitter','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('facebooklink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('facebooklink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-facebook" aria-label="<?php esc_attr_e('Facebook Button','gridnext'); ?>"><i class="fab fa-facebook-f" aria-hidden="true" title="<?php esc_attr_e('Facebook','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('googlelink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('googlelink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-google-plus" aria-label="<?php esc_attr_e('Google Plus Button','gridnext'); ?>"><i class="fab fa-google-plus-g" aria-hidden="true" title="<?php esc_attr_e('Google Plus','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('pinterestlink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('pinterestlink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-pinterest" aria-label="<?php esc_attr_e('Pinterest Button','gridnext'); ?>"><i class="fab fa-pinterest" aria-hidden="true" title="<?php esc_attr_e('Pinterest','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('linkedinlink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('linkedinlink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-linkedin" aria-label="<?php esc_attr_e('Linkedin Button','gridnext'); ?>"><i class="fab fa-linkedin-in" aria-hidden="true" title="<?php esc_attr_e('Linkedin','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('instagramlink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('instagramlink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-instagram" aria-label="<?php esc_attr_e('Instagram Button','gridnext'); ?>"><i class="fab fa-instagram" aria-hidden="true" title="<?php esc_attr_e('Instagram','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('flickrlink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('flickrlink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-flickr" aria-label="<?php esc_attr_e('Flickr Button','gridnext'); ?>"><i class="fab fa-flickr" aria-hidden="true" title="<?php esc_attr_e('Flickr','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('youtubelink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('youtubelink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-youtube" aria-label="<?php esc_attr_e('Youtube Button','gridnext'); ?>"><i class="fab fa-youtube" aria-hidden="true" title="<?php esc_attr_e('Youtube','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('vimeolink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('vimeolink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-vimeo" aria-label="<?php esc_attr_e('Vimeo Button','gridnext'); ?>"><i class="fab fa-vimeo-v" aria-hidden="true" title="<?php esc_attr_e('Vimeo','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('soundcloudlink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('soundcloudlink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-soundcloud" aria-label="<?php esc_attr_e('SoundCloud Button','gridnext'); ?>"><i class="fab fa-soundcloud" aria-hidden="true" title="<?php esc_attr_e('SoundCloud','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('messengerlink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('messengerlink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-messenger" aria-label="<?php esc_attr_e('Messenger Button','gridnext'); ?>"><i class="fab fa-facebook-messenger" aria-hidden="true" title="<?php esc_attr_e('Messenger','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('whatsapplink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('whatsapplink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-whatsapp" aria-label="<?php esc_attr_e('WhatsApp Button','gridnext'); ?>"><i class="fab fa-whatsapp" aria-hidden="true" title="<?php esc_attr_e('WhatsApp','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('lastfmlink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('lastfmlink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-lastfm" aria-label="<?php esc_attr_e('Lastfm Button','gridnext'); ?>"><i class="fab fa-lastfm" aria-hidden="true" title="<?php esc_attr_e('Lastfm','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('mediumlink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('mediumlink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-medium" aria-label="<?php esc_attr_e('Medium Button','gridnext'); ?>"><i class="fab fa-medium-m" aria-hidden="true" title="<?php esc_attr_e('Medium','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('githublink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('githublink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-github" aria-label="<?php esc_attr_e('Github Button','gridnext'); ?>"><i class="fab fa-github" aria-hidden="true" title="<?php esc_attr_e('Github','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('bitbucketlink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('bitbucketlink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-bitbucket" aria-label="<?php esc_attr_e('Bitbucket Button','gridnext'); ?>"><i class="fab fa-bitbucket" aria-hidden="true" title="<?php esc_attr_e('Bitbucket','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('tumblrlink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('tumblrlink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-tumblr" aria-label="<?php esc_attr_e('Tumblr Button','gridnext'); ?>"><i class="fab fa-tumblr" aria-hidden="true" title="<?php esc_attr_e('Tumblr','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('digglink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('digglink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-digg" aria-label="<?php esc_attr_e('Digg Button','gridnext'); ?>"><i class="fab fa-digg" aria-hidden="true" title="<?php esc_attr_e('Digg','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('deliciouslink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('deliciouslink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-delicious" aria-label="<?php esc_attr_e('Delicious Button','gridnext'); ?>"><i class="fab fa-delicious" aria-hidden="true" title="<?php esc_attr_e('Delicious','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('stumblelink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('stumblelink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-stumbleupon" aria-label="<?php esc_attr_e('Stumbleupon Button','gridnext'); ?>"><i class="fab fa-stumbleupon" aria-hidden="true" title="<?php esc_attr_e('Stumbleupon','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('mixlink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('mixlink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-mix" aria-label="<?php esc_attr_e('Mix Button','gridnext'); ?>"><i class="fab fa-mix" aria-hidden="true" title="<?php esc_attr_e('Mix','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('redditlink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('redditlink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-reddit" aria-label="<?php esc_attr_e('Reddit Button','gridnext'); ?>"><i class="fab fa-reddit" aria-hidden="true" title="<?php esc_attr_e('Reddit','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('dribbblelink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('dribbblelink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-dribbble" aria-label="<?php esc_attr_e('Dribbble Button','gridnext'); ?>"><i class="fab fa-dribbble" aria-hidden="true" title="<?php esc_attr_e('Dribbble','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('flipboardlink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('flipboardlink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-flipboard" aria-label="<?php esc_attr_e('Flipboard Button','gridnext'); ?>"><i class="fab fa-flipboard" aria-hidden="true" title="<?php esc_attr_e('Flipboard','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('bloggerlink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('bloggerlink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-blogger" aria-label="<?php esc_attr_e('Blogger Button','gridnext'); ?>"><i class="fab fa-blogger" aria-hidden="true" title="<?php esc_attr_e('Blogger','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('etsylink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('etsylink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-etsy" aria-label="<?php esc_attr_e('Etsy Button','gridnext'); ?>"><i class="fab fa-etsy" aria-hidden="true" title="<?php esc_attr_e('Etsy','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('behancelink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('behancelink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-behance" aria-label="<?php esc_attr_e('Behance Button','gridnext'); ?>"><i class="fab fa-behance" aria-hidden="true" title="<?php esc_attr_e('Behance','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('amazonlink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('amazonlink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-amazon" aria-label="<?php esc_attr_e('Amazon Button','gridnext'); ?>"><i class="fab fa-amazon" aria-hidden="true" title="<?php esc_attr_e('Amazon','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('meetuplink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('meetuplink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-meetup" aria-label="<?php esc_attr_e('Meetup Button','gridnext'); ?>"><i class="fab fa-meetup" aria-hidden="true" title="<?php esc_attr_e('Meetup','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('mixcloudlink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('mixcloudlink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-mixcloud" aria-label="<?php esc_attr_e('Mixcloud Button','gridnext'); ?>"><i class="fab fa-mixcloud" aria-hidden="true" title="<?php esc_attr_e('Mixcloud','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('slacklink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('slacklink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-slack" aria-label="<?php esc_attr_e('Slack Button','gridnext'); ?>"><i class="fab fa-slack" aria-hidden="true" title="<?php esc_attr_e('Slack','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('snapchatlink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('snapchatlink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-snapchat" aria-label="<?php esc_attr_e('Snapchat Button','gridnext'); ?>"><i class="fab fa-snapchat" aria-hidden="true" title="<?php esc_attr_e('Snapchat','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('spotifylink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('spotifylink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-spotify" aria-label="<?php esc_attr_e('Spotify Button','gridnext'); ?>"><i class="fab fa-spotify" aria-hidden="true" title="<?php esc_attr_e('Spotify','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('yelplink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('yelplink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-yelp" aria-label="<?php esc_attr_e('Yelp Button','gridnext'); ?>"><i class="fab fa-yelp" aria-hidden="true" title="<?php esc_attr_e('Yelp','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('wordpresslink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('wordpresslink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-wordpress" aria-label="<?php esc_attr_e('WordPress Button','gridnext'); ?>"><i class="fab fa-wordpress" aria-hidden="true" title="<?php esc_attr_e('WordPress','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('twitchlink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('twitchlink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-twitch" aria-label="<?php esc_attr_e('Twitch Button','gridnext'); ?>"><i class="fab fa-twitch" aria-hidden="true" title="<?php esc_attr_e('Twitch','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('telegramlink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('telegramlink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-telegram" aria-label="<?php esc_attr_e('Telegram Button','gridnext'); ?>"><i class="fab fa-telegram" aria-hidden="true" title="<?php esc_attr_e('Telegram','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('bandcamplink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('bandcamplink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-bandcamp" aria-label="<?php esc_attr_e('Bandcamp Button','gridnext'); ?>"><i class="fab fa-bandcamp" aria-hidden="true" title="<?php esc_attr_e('Bandcamp','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('quoralink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('quoralink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-quora" aria-label="<?php esc_attr_e('Quora Button','gridnext'); ?>"><i class="fab fa-quora" aria-hidden="true" title="<?php esc_attr_e('Quora','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('foursquarelink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('foursquarelink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-foursquare" aria-label="<?php esc_attr_e('Foursquare Button','gridnext'); ?>"><i class="fab fa-foursquare" aria-hidden="true" title="<?php esc_attr_e('Foursquare','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('deviantartlink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('deviantartlink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-deviantart" aria-label="<?php esc_attr_e('DeviantArt Button','gridnext'); ?>"><i class="fab fa-deviantart" aria-hidden="true" title="<?php esc_attr_e('DeviantArt','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('imdblink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('imdblink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-imdb" aria-label="<?php esc_attr_e('IMDB Button','gridnext'); ?>"><i class="fab fa-imdb" aria-hidden="true" title="<?php esc_attr_e('IMDB','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('vklink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('vklink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-vk" aria-label="<?php esc_attr_e('VK Button','gridnext'); ?>"><i class="fab fa-vk" aria-hidden="true" title="<?php esc_attr_e('VK','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('codepenlink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('codepenlink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-codepen" aria-label="<?php esc_attr_e('Codepen Button','gridnext'); ?>"><i class="fab fa-codepen" aria-hidden="true" title="<?php esc_attr_e('Codepen','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('jsfiddlelink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('jsfiddlelink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-jsfiddle" aria-label="<?php esc_attr_e('JSFiddle Button','gridnext'); ?>"><i class="fab fa-jsfiddle" aria-hidden="true" title="<?php esc_attr_e('JSFiddle','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('stackoverflowlink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('stackoverflowlink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-stackoverflow" aria-label="<?php esc_attr_e('Stack Overflow Button','gridnext'); ?>"><i class="fab fa-stack-overflow" aria-hidden="true" title="<?php esc_attr_e('Stack Overflow','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('stackexchangelink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('stackexchangelink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-stackexchange" aria-label="<?php esc_attr_e('Stack Exchange Button','gridnext'); ?>"><i class="fab fa-stack-exchange" aria-hidden="true" title="<?php esc_attr_e('Stack Exchange','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('bsalink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('bsalink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-buysellads" aria-label="<?php esc_attr_e('BuySellAds Button','gridnext'); ?>"><i class="fab fa-buysellads" aria-hidden="true" title="<?php esc_attr_e('BuySellAds','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('web500pxlink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('web500pxlink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-web500px" aria-label="<?php esc_attr_e('500px Button','gridnext'); ?>"><i class="fab fa-500px" aria-hidden="true" title="<?php esc_attr_e('500px','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('ellolink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('ellolink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-ello" aria-label="<?php esc_attr_e('Ello Button','gridnext'); ?>"><i class="fab fa-ello" aria-hidden="true" title="<?php esc_attr_e('Ello','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('discordlink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('discordlink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-discord" aria-label="<?php esc_attr_e('Discord Button','gridnext'); ?>"><i class="fab fa-discord" aria-hidden="true" title="<?php esc_attr_e('Discord','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('goodreadslink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('goodreadslink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-goodreads" aria-label="<?php esc_attr_e('Goodreads Button','gridnext'); ?>"><i class="fab fa-goodreads" aria-hidden="true" title="<?php esc_attr_e('Goodreads','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('odnoklassnikilink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('odnoklassnikilink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-odnoklassniki" aria-label="<?php esc_attr_e('Odnoklassniki Button','gridnext'); ?>"><i class="fab fa-odnoklassniki" aria-hidden="true" title="<?php esc_attr_e('Odnoklassniki','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('houzzlink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('houzzlink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-houzz" aria-label="<?php esc_attr_e('Houzz Button','gridnext'); ?>"><i class="fab fa-houzz" aria-hidden="true" title="<?php esc_attr_e('Houzz','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('pocketlink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('pocketlink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-pocket" aria-label="<?php esc_attr_e('Pocket Button','gridnext'); ?>"><i class="fab fa-get-pocket" aria-hidden="true" title="<?php esc_attr_e('Pocket','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('xinglink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('xinglink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-xing" aria-label="<?php esc_attr_e('XING Button','gridnext'); ?>"><i class="fab fa-xing" aria-hidden="true" title="<?php esc_attr_e('XING','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('googleplaylink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('googleplaylink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-googleplay" aria-label="<?php esc_attr_e('Google Play Button','gridnext'); ?>"><i class="fab fa-google-play" aria-hidden="true" title="<?php esc_attr_e('Google Play','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('slidesharelink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('slidesharelink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-slideshare" aria-label="<?php esc_attr_e('SlideShare Button','gridnext'); ?>"><i class="fab fa-slideshare" aria-hidden="true" title="<?php esc_attr_e('SlideShare','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('dropboxlink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('dropboxlink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-dropbox" aria-label="<?php esc_attr_e('Dropbox Button','gridnext'); ?>"><i class="fab fa-dropbox" aria-hidden="true" title="<?php esc_attr_e('Dropbox','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('paypallink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('paypallink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-paypal" aria-label="<?php esc_attr_e('PayPal Button','gridnext'); ?>"><i class="fab fa-paypal" aria-hidden="true" title="<?php esc_attr_e('PayPal','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('viadeolink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('viadeolink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-viadeo" aria-label="<?php esc_attr_e('Viadeo Button','gridnext'); ?>"><i class="fab fa-viadeo" aria-hidden="true" title="<?php esc_attr_e('Viadeo','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('wikipedialink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('wikipedialink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-wikipedia" aria-label="<?php esc_attr_e('Wikipedia Button','gridnext'); ?>"><i class="fab fa-wikipedia-w" aria-hidden="true" title="<?php esc_attr_e('Wikipedia','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('skypeusername') ) : ?>
            <a href="skype:<?php echo esc_html( gridnext_get_option('skypeusername') ); ?>?chat" class="gridnext-header-social-icon-skype" aria-label="<?php esc_attr_e('Skype Button','gridnext'); ?>"><i class="fab fa-skype" aria-hidden="true" title="<?php esc_attr_e('Skype','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('emailaddress') ) : ?>
            <a href="mailto:<?php echo esc_html( gridnext_get_option('emailaddress') ); ?>" class="gridnext-header-social-icon-email" aria-label="<?php esc_attr_e('Email Us Button','gridnext'); ?>"><i class="far fa-envelope" aria-hidden="true" title="<?php esc_attr_e('Email Us','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('rsslink') ) : ?>
            <a href="<?php echo esc_url( gridnext_get_option('rsslink') ); ?>" target="_blank" rel="nofollow" class="gridnext-header-social-icon-rss" aria-label="<?php esc_attr_e('RSS Button','gridnext'); ?>"><i class="fas fa-rss" aria-hidden="true" title="<?php esc_attr_e('RSS','gridnext'); ?>"></i></a><?php endif; ?>
    <?php if ( gridnext_get_option('show_login_button') ) { ?><?php if (is_user_logged_in()) : ?><a href="<?php echo esc_url( wp_logout_url( get_permalink() ) ); ?>" aria-label="<?php esc_attr_e( 'Logout Button', 'gridnext' ); ?>" class="gridnext-header-social-icon-login"><i class="fas fa-sign-out-alt" aria-hidden="true" title="<?php esc_attr_e('Logout','gridnext'); ?>"></i></a><?php else : ?><a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>" aria-label="<?php esc_attr_e( 'Login / Register Button', 'gridnext' ); ?>" class="gridnext-header-social-icon-login"><i class="fas fa-sign-in-alt" aria-hidden="true" title="<?php esc_attr_e('Login / Register','gridnext'); ?>"></i></a><?php endif;?><?php } ?>
    <?php if ( !(gridnext_get_option('hide_search_button')) ) { ?><a href="<?php echo esc_url( '#' ); ?>" class="gridnext-header-social-icon-search" aria-label="<?php esc_attr_e('Search Button','gridnext'); ?>"><i class="fas fa-search" aria-hidden="true" title="<?php esc_attr_e('Search','gridnext'); ?>"></i></a><?php } ?>
</div>

<?php }