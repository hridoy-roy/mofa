function Navigation($) {
  var _document = $(document)
  var _window = $(window)
  var _scrollTop = 0

  var nav = $('#main-nav')
  var navSub = $('#nav-sub')
  var navCollapse = $('#mopa-main-menu')
  var navLink = $('#main-nav ul li a')
  var navBrand = $('#main-nav .navbar-brand')
  var logo = $('#logo')

  var searchBtn = $('#main-nav .main-nav-search')
  var searchCloseBtn = $('#main-nav .main-nav-search-form .btn-close')
  var searchForm = $('#main-nav .main-nav-search-form')

  var alertBar = $('.mtsnb')
  var alertBarClose = $('.mtsnb-hide')
  var alertBarOpen = $('.mtsnb-show')

  var NAV_HIDDEN = { marginTop: '-150px' }
  var NAV_SUB_HIDDEN = { marginTop: '-150px' }

  var NAV_DARK = { background: '#000' }
  var NAV_TRANSPARENT = { background: 'transparent' }

  var BREAK_POINT = 768

  init()

  function init() {
    var lastScrollTop = 0

    _window.scroll(function (e) {
      var _this = $(this)
      var scrollTop = _this.scrollTop()

      _scrollTop = scrollTop

      scrollTop > lastScrollTop ? hide(scrollTop) : show()
      lastScrollTop = scrollTop
    })

    adjustNav()

    searchBtn.on('click', showSearch)
    searchCloseBtn.on('click', hideSearch)

    alertBarOpen.on('click', adjustNav)
    alertBarClose.on('click', adjustNav)
  }

  function getScrollTop() {
    return _scrollTop
  }

  function adjustNav() {
    var _marginTopOffset = 0

    setTimeout(function () {
      if (alertBar.hasClass('mtsnb-shown'))
        _marginTopOffset = alertBar.innerHeight()

      nav.css({ marginTop: _marginTopOffset + 'px' })
      navSub.css({ marginTop: _marginTopOffset + nav.innerHeight() + 'px' })
    }, 500)
  }

  function shrink() {
    document.querySelector('body').setAttribute('data-nav-state', 'shrinked')
  }

  function expand() {
    document.querySelector('body').setAttribute('data-nav-state', 'expanded')
    adjustNav()
  }

  function hide(scrollTop) {
    if (scrollTop != undefined) {
      if (scrollTop < 100) return
    }
    nav.css(NAV_HIDDEN)
    navSub.css(NAV_SUB_HIDDEN)
  }

  function show() {
    if (_document.scrollTop() > 0) {
      shrink()
    } else {
      expand()
    }

    if (nav.hasClass('transparent')) {
      if (_document.scrollTop() > 0) {
        nav.css(NAV_DARK)
      } else {
        nav.css(NAV_TRANSPARENT)
      }
    }

    if (alertBar.hasClass('mtsnb-hidden')) {
      nav.css({ marginTop: 0 })
      navSub.css({ marginTop: nav.innerHeight() + 'px' })
    }

    if (alertBar.hasClass('mtsnb-shown')) {
      setTimeout(function () {
        var _offset = getScrollTop() > 0 ? 0 : alertBar.innerHeight()

        nav.css({ marginTop: _offset + 'px' })
        navSub.css({ marginTop: _offset + nav.innerHeight() + 'px' })
      }, 100)
    }
  }

  function showSearch(e) {
    e.preventDefault()

    navCollapse.hide()
    searchForm.show()
  }

  function hideSearch(e) {
    e.preventDefault()

    navCollapse.show()
    searchForm.hide()
  }
}
