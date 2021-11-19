var defaultEventViewer;
var utils;
var instagramFeed;
// var alertBar;

jQuery(function($) {
  // alertBar = new AlertBar($);
  defaultEventViewer = new Viewer($);
  utils = new Utils($);
  instagramFeed = new InstagramFeed($);

  new Navigation($);
  new NavigationMobile($);
  new Logo($);

  setTimeout(function () {
    jQuery('.mp-post').each(function() {
      if(jQuery(this).innerHeight() < jQuery(this).find('.overlay').innerHeight()) {
        jQuery(this).innerHeight(jQuery(this).find('.overlay').innerHeight());
      }
    });
  }, 100);
  
});
