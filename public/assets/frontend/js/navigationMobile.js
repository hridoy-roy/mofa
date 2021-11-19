function NavigationMobile($) {
  var body     = $('html, body')

  var nav           = $("#main-nav-mobile");
  var navClose      = $("#main-nav-mobile .btn-close");
  var navToggle     = $("#main-nav .navbar-toggle");
  var menuWithChild = $("#main-nav-mobile .menu-item-has-children > .toggle-button");

  var subNav        = $("#mopa-sub-menu");
  var subNavToggle  = $(".sub-nav-back-mobile");

  var alertBar      = $("#wpfront-notification-bar");
  init();

  function init() {
    navClose.on('click', function(e) {
      hide();
      body.css('overflow', 'auto');

      alertBar.css('top', 0);

    });

    navToggle.on('click', function(e) {
      show();
      body.css('overflow', 'hidden');

      alertBar.css('top', -(alertBar.innerHeight()));
      // alertBar.hide();
    });

    subNavToggle.on('click', toggleCaret);

    menuWithChild.on('click', function(e) {
      var subMenu = $(this).parent().find('.sub-menu');
      if(subMenu.is(':visible')) {
        subMenu.hide();
        $(this).css('transform', 'rotate(0)');
      } else {
        subMenu.show();
        $(this).css('transform', 'rotate(90deg)');
      }
    });

    $(window).on('scroll', function(e) {
      if(subNav.is(':visible') && $(window).width() <= 768) {
      subNav.removeClass('in').css('display', 'none');
      subNavToggle.find(".caret-rotate").css('transform', 'rotate(0)');
      }
    })
  }

  function toggleCaret(e) {
    e.preventDefault();

    if(subNav.is(':visible')) {
      subNav.hide();
      subNavToggle.find(".caret-rotate").css('transform', 'rotate(0)');
    } else {
      subNav.show();
      subNavToggle.find(".caret-rotate").css('transform', 'rotate(90deg)');
    }
  }
  function hide() {
    nav.hide();
  }

  function show() {
    nav.show();
  }
}
