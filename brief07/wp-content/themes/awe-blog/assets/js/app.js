(function ($) {

  $('.awe_slider__slides:not(.slick-initialized)').slick({
    infinite: true,
    autoplay: true,
    fade: true,
    arrows: true,
    slidesToShow: 1,
    pauseOnHover: false,
    centerMode: false,
});

  $('.card-slider-wrap').slick({
    infinite: true,
    autoplay: false,
    arrows: false,
    slidesToShow: 4,
    pauseOnHover: false,
    centerMode: false,
    responsive: [
      {
        breakpoint: 990,
        settings: {
          slidesToShow: 3,
          autoplay: true,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          autoplay: true,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          autoplay: true,
          slidesToScroll: 1,
        }
      }
    ]
  });



  $(".iframe-link").YouTubePopUp();



  function responsiveIframe() {
    var videoSelectors = [
      'iframe[src*="player.vimeo.com"]',
      'iframe[src*="youtube.com"]',
      'iframe[src*="youtube-nocookie.com"]',
      'iframe[src*="kickstarter.com"][src*="video.html"]',
      'iframe[src*="screenr.com"]',
      'iframe[src*="blip.tv"]',
      'iframe[src*="dailymotion.com"]',
      'iframe[src*="viddler.com"]',
      'iframe[src*="qik.com"]',
      'iframe[src*="revision3.com"]',
      'iframe[src*="hulu.com"]',
      'iframe[src*="funnyordie.com"]',
      'iframe[src*="flickr.com"]',
      'embed[src*="v.wordpress.com"]',
      'iframe[src*="videopress.com"]',
      'embed[src*="videopress.com"]'
      // add more selectors here
    ];
    var allVideos = videoSelectors.join(',');
    jQuery(allVideos).wrap('<span class="media-holder" />');
  }

  // Responsive Iframes
  responsiveIframe();


})(jQuery);


