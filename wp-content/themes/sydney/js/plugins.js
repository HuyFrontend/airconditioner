
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
  return {
    publicVar: privateVar,
    publicMethod: privateMethod,
    lazyLoadImg: lazyLoadImg
  };

})(jQuery, window);

jQuery(function() {
  Site.publicMethod();
  Site.lazyLoadImg();
});
