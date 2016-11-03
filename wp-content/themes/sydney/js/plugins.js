
/**
 * @name Site
 * @description Global variables and functions
 * @version 1.0
 */

var Site = (function($, window, undefined) {
  'use strict';

  var lazyLoadImg = function () {
    var lazylement = $('.lazy-load');
    lazylement.lazyload({
      // container: $('.container'),
      effect: 'fadeIn'
    });
  };
  var hoverThumbnail = function () {
    var thumbImgs = $('[data-hover-image]'),
        mainImg = thumbImgs.parent().find('.large-view img.large-img');
    thumbImgs.off('click.changeImg', '.thumb-view').on('click.changeImg', '.thumb-view', function () {
      var newSource = $(this).find('img').attr('data-src');
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
        shareDescription: 'An nhiên trong từng cà phê giọt',
        hashtags: 'CaPheNguyenChat, CaPheRangXayNguyenChat, CaPheAnNhien, CafeAnNhien.Com',
        via: 'CafeAnNhien.Com'
      };
      return content;
    };
    var shareFacebook = function (content) {
      var options = {
        method: 'share',
        display: 'popup',
        href: content.shareLink,
        caption: content.shareTitle,
        description: content.shareDescription + ' - ' + content.hashtags,
        picture: content.shareImage
      };
      FB.ui(options, function(response){});
    };

    var shareTwitter = function (content) {
      window.open('http://twitter.com/share?url=' + content.shareLink
        + '&text=' + content.shareTitle
        + '&hashtags=' + content.hashtags
        + '&via=' + content.via, 'twitterwindow', 'height=450, width=550, top='+($(window).height()/2 - 225) +', left='+$(window).width()/2 +', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
    };
    var sharePinterest = function (content) {
      window.open(content.linkPinterest +
      '?url=' + content.shareLink +
      '&media=' + content.shareImage +
      '&description=' + content.shareTitle + ' - ' + content.hashtags,
      'twitterwindow', 'height=550, width=750, top='+($(window).height()/2 - 225) +', left='+$(window).width()/2 +', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
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
    body.off('click.likeFacebook').on('click.likeFacebook', '.facebook-footer', function () {
      $(this).parent().find('.fb-like').trigger('click');
    });
  };
  var formatPrice = function (){
    var priceElement = $('.price-value');
    for (var i = 0, len = priceElement.length; i < len; i++) {
      var thisElement = $(priceElement[i])
      var price = thisElement.text();
      price = price.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.");
      thisElement.html(price);
    }
  };
  var test = function () {
    var items = $('.product-item');
    for (var i = 0, len = items.length; i < len; i++) {
      console.log('item height ' + i + ': ', $(items[i]).height());
    }
  };
  var initSlick = function () {
    var slickContainer = $('[data-slick]');
    slickContainer.slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      // dots: true,
      centerMode: true,
      responsive: [{
        breakpoint: 480,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      }]
    });
  };
  return {
    test: test,
    lazyLoadImg: lazyLoadImg,
    hoverThumbnail: hoverThumbnail,
    socialSharing: socialSharing,
    likeFacebook: likeFacebook,
    formatPrice: formatPrice,
    initSlick: initSlick
  };

})(jQuery, window);

jQuery(function() {
  Site.test();
  Site.lazyLoadImg();
  Site.hoverThumbnail();
  Site.socialSharing();
  Site.formatPrice();
  // Site.likeFacebook();
  Site.initSlick();
});
