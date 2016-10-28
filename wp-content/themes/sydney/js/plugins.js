
/**
 * @name Site
 * @description Global variables and functions
 * @version 1.0
 */

var Site = (function($, window, undefined) {
  'use strict';

  var privateVar = null;
  var privateMethod = function() {
    // to do
    console.log('plugin here!');
  };
  var lazyLoadImg = function () {
    var lazylement = $('.lazy-load');
    console.info('load lazy');
    lazylement.lazyload({
      // container: $('.container'),
      effect: 'fadeIn'
    });
  };
  var hoverThumbnail = function () {
    var thumbImgs = $('[data-hover-image]'),
        thumbImg = thumbImgs.find('img'),
        mainImg = thumbImgs.parent().find('.large-view img');
    thumbImg.off('click.changeImg').on('click.changeImg', function () {
      var newSource = $(this).attr('data-src');
      mainImg.attr('src', newSource);
    });
  };
  var socialSharing = function () {
    var body = $('body');
    var shareFacebook = function () {
      var options = {
        method: 'share',
        display: 'popup',
        href: 'cafeannhien.com'
      };
      FB.ui(options, function(response){});
    }
    body.off('click.shareFacebook').on('click.shareFacebook', '.share-facebook', function () {
      shareFacebook();
    });
  };

  return {
    publicVar: privateVar,
    publicMethod: privateMethod,
    lazyLoadImg: lazyLoadImg,
    hoverThumbnail: hoverThumbnail,
    socialSharing: socialSharing
  };

})(jQuery, window);

jQuery(function() {
  Site.publicMethod();
  Site.lazyLoadImg();
  Site.hoverThumbnail();
  Site.socialSharing();
});
