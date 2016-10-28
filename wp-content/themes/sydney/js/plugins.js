
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
    var getSharingContent = function (shareButton) {
      shareButton = $(shareButton);
      var content = {},
          blockSharing = shareButton.closest('.social-share'),
          post = shareButton.parents('[data-share-content]'),
          title = post.find('[data-share-title]'),
          image = post.find('[data-share-img]'),
          firstImage = post.find('img:first');
      image = (image.length) ? image : firstImage;
      content = {
        linkPinterest: 'http://www.pinterest.com/pin/create/button/',
        linkTwitter: 'http://twitter.com/share',
        shareLink: location.href,
        shareTitle: title.text(),
        shareImage: image.attr('src'),
        shareCaption: '',
        shareDescription: 'an nhiên trong từng cà phê giọt',
        hashtags: 'CafeAnNhien, CafeRangXay, CafeNguyenChat',
        via: 'CafeAnNhien'
      };
      return content;
    };
    var shareFacebook = function (content) {
      var options = {
        method: 'share',
        display: 'popup',
        href: content.shareLink,
        caption: content.shareTitle,
        description: content.shareDescription,
        picture: content.shareImage
      };
      FB.ui(options, function(response){});
    };

    var shareTwitter = function (content) {
       window.open('http://twitter.com/share?url=' + content.shareLink
        + '&text=' + content.shareTitle
        + '&hashtags=' + content.hashtags + content.shareTitle
        + '&via=' + content.via, 'twitterwindow', 'height=450, width=550, top='+($(window).height()/2 - 225) +', left='+$(window).width()/2 +', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
    };
    var sharePinterest = function (content) {
      window.open(content.linkPinterest +
      '?url=' + content.shareLink +
      '&media=' + content.shareImage +
      '&description=' + content.shareTitle,
      'twitterwindow', 'height=550, width=650, top='+($(window).height()/2 - 225) +', left='+$(window).width()/2 +', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
      return false;
    };

    body.off('click.shareFacebook').on('click.shareFacebook', '.share-facebook', function () {
      var content = getSharingContent(this);
      shareFacebook(content);
    });
    body.off('click.shareTwitter').on('click.shareTwitter', '.share-twitter', function () {
      var content = getSharingContent(this);
      shareTwitter(content);
    });
    body.off('click.sharePinterest').on('click.sharePinterest', '.share-pinterest', function () {
      var content = getSharingContent(this);
      sharePinterest(content);
    });
  };
  var likeFacebook = function () {
    console.log('go here');
    $('body').off('click.likeFacebook').on('click.likeFacebook', '.facebook-footer', function () {
      $(this).parent().find('.fb-like').trigger('click');
      // var content = getSharingContent(this);
      // sharePinterest(content);
    });
  };
  return {
    publicVar: privateVar,
    publicMethod: privateMethod,
    lazyLoadImg: lazyLoadImg,
    hoverThumbnail: hoverThumbnail,
    socialSharing: socialSharing,
    likeFacebook: likeFacebook
  };

})(jQuery, window);

jQuery(function() {
  Site.publicMethod();
  Site.lazyLoadImg();
  Site.hoverThumbnail();
  Site.socialSharing();
  Site.likeFacebook();
});
