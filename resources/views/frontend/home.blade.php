@extends('layouts.frontend.app')
@section('title', 'Title')
@section('main-section')
<div id="page" class="site">
  <div id="content" class="site-content">
      <div class="container-fluid">
          <div class="hero gradient homepage">
              <div class="hero-overlay">
                  <div class="hero-content">
                      <h1 class="infinite">We make learning visual.</h1>
                      <h3>Your museum for photography &amp; film.</h3>
                      <div class="hero-button-container">
                          <a href="#" class="mopa-btn mopa-btn--gradient mopa-btn--wide mopa-btn--margin hidden-xs" >Plan
                              Your Visit</a>
                          <a href="#"
                              class="mopa-btn mopa-btn--gradient mopa-btn--wide mopa-btn--margin hidden-xs">Become A
                              Member</a>
                          <div class="info-ad visible-xs">
                              <a href="#" class="newinfo admission info">
                                  Admission: <br>Pay what you wish<br>
                                  <i class="bi bi-info-circle"></i>
                              </a>
                          </div>
                      </div>
                  </div>
                  <img alt="" loading="eager" class="homepage-hero-image ls-is-cached lazyloaded"
                      src="{{ asset('assets/frontend/img/banner/banner.png') }}"
                      sizes="(max-width: 1440px) 100vw, 1440px" width="1440" height="631">
                  <div class="hero-info index-hero">
                      <a onclick="return false;" href="#" class="info store-hours">
                          <span class="hidden-sm hidden-xs">
                              Closed Now
                          </span>
                          <span class="status">
                              <span class="hidden-sm hidden-xs">· </span>
                              OPENS FRIDAY @ 11:00AM 
                              <i style="margin-bottom: -3px;" class="bi bi-info-circle"></i>
                            </span>
                      </a>
                      <a href="#" class="info admission hidden-xs">
                          Admission: Pay what you wish
                          <i class="bi bi-info-circle"></i>
                      </a>
                  </div>
              </div>
          </div>

          <div class="content">
              <div id="main-grid" class="row masonry-grid"
                  style="display: inline-block; opacity: 1;height: 2050px;">

                  <div class="col-md-7 masonry-item-container calculated">
                      <div class="mp-post exhibitions masonry-item ">
                          <img alt="" class="mp-post-banner lazyloaded"
                              src="{{ asset('assets/frontend/img/student/1200x950.jpg') }}"
                              sizes="(max-width: 1200px) 100vw, 1200px" width="1200" height="950">
                          <div class="overlay">
                              <div class="exhibitions-icon">
                                  <img alt="" data-src="{{ asset('assets/frontend/img/svg/exhibitions.svg') }}"
                                      class=" ls-is-cached lazyloaded"
                                      src="{{ asset('assets/frontend/img/svg/exhibitions.svg') }}" width="32"
                                      height="29">
                              </div>
                              <div class="mp-post-info">
                                  <a href="#">
                                      <h3 class="mp-post-title">Aaron Siskind: Mid Century Modern</h3>
                                  </a>
                                  <span class="label sm mp-post-type">Current exhibition - </span>
                                  <span class="label sm mp-post-data">October 2, 2021 - May 1, 2022</span>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-md-5 masonry-item-container calculated">
                      <div class="mp-post exhibitions masonry-item sm" onclick="location.assign('#')">
                          <img alt="" data-sizes="(max-width: 1000px) 100vw, 1000px" class="mp-post-banner lazyloaded"
                          src="{{ asset('assets/frontend/img/student/1000x666.jpg') }}"
                              sizes="(max-width: 1000px) 100vw, 1000px" width="1000" height="666">
                          <div class="overlay">
                              <div class="exhibitions-icon">
                                  <img alt="" class=" lazyloaded"
                                      src="{{ asset('assets/frontend/img/svg/exhibitions.svg') }}" width="32"
                                      height="29">
                              </div>
                              <div class="mp-post-info">
                                  <a href="">
                                      <h3 class="mp-post-title">Beyond The Boundaries: Photographs By Norman Seeff
                                      </h3>
                                  </a>
                                  <span class="label sm mp-post-type">Current exhibition - </span>
                                  <span class="label sm mp-post-data">September 25, 2021 - February 6, 2022</span>
                              </div>
                          </div>
                      </div>

                      <div class="mp-post-simple event masonry-item">
                          <span class="label sm mp-post-type">News </span>
                          <span class="label sm mp-post-date">- March 25, 2021</span>
                          <a href="#">
                              <h4 class="mp-post-title">LENSTALK’s Solidarity Message to the API Community</h4>
                          </a>
                      </div>
                  </div>

                  <div class="col-md-7 masonry-item-container calculated" style="top: 0.000374023px;">
                      <div class="mp-post-simple event masonry-item">
                          <span class="label sm mp-post-type">News </span>
                          <span class="label sm mp-post-date">- March 18, 2021</span>
                          <a href="#">
                              <h4 class="mp-post-title">Updates on LENSTALK reopening</h4>
                          </a>
                      </div>
                      <div class="mp-post exhibitions masonry-item lg">
                          <img alt="" class="mp-post-banner lazyload"
                              src="{{ asset('assets/frontend/img/student/960x668.jpg') }}"
                              width="960" height="668">
                          <div class="overlay">
                              <div class="mp-post-info">
                                  <a href="#">
                                      <h3 class="mp-post-title">Open Show San Diego #21</h3>
                                  </a>
                                  <span class="label sm mp-post-type">Conversation - </span>
                                  <span class="label sm mp-post-data">October 28 @ 6:00 pm - October 28 @ 8:00
                                      pm</span>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-md-5 masonry-item-container calculated" style="top: -40.8336px;">
                      <div class="cta lg masonry-item"
                          style="background-image: url('{{ asset('assets/frontend/img/student/616x547.jpg') }}')">
                          <div class="cta-info-container">
                              <div class="cta-info">
                                  <div class="cta-icon">
                                      <a href="#"><img style="height: 50px;"
                                              src="https://mopa.org/wp-content/themes/mopa/img/icons/mopa.svg" alt=""
                                              width="255" height="150">
                                      </a>
                                  </div>
                                  <a href="#">
                                      <h3 class="cta-title">Become a LENSTALK member today!</h3>
                                  </a>
                                  <a href="#">
                                      <p class="cta-subtitle">Enjoy free admission, exclusive discounts, members-only
                                          events and much
                                          more.</p>
                                  </a>
                              </div>
                          </div>
                      </div>


                      <div class="mp-post-simple event masonry-item">
                          <span class="label sm mp-post-type">News </span>
                          <span class="label sm mp-post-date">- March 2, 2021</span>
                          <a href="#">
                              <h4 class="mp-post-title">LENSTALK Partnered with Bank of America Art Conservation Project
                                  to Restore
                                  Century-old Artworks of Cultural Significance</h4>
                          </a>
                      </div>
                  </div>

                  <div class="col-md-7 masonry-item-container calculated" onclick="location.assign('#')"
                      style="top: 0.000374023px;">
                      <a href="#">
                      </a>
                      <div class="cta sm masonry-item"
                          style="background-image: url('{{ asset('assets/frontend/img/student/615x410.jpg')}}')">
                          <a href="#">
                          </a>
                          <div class="cta-info-container"><a href="#">
                              </a>
                              <div class="cta-info"><a href="#">
                                  </a><a href="#">
                                      <h3 class="cta-title">Grow &amp; Learn with LENSTALK</h3>
                                  </a>
                                  <a href="#">
                                      <p class="cta-subtitle">Learn more about photographic arts education and
                                          workshops with LENSTALK for
                                          adults, kids &amp; school programs</p>
                                  </a>
                              </div>
                          </div>
                      </div>
                      <div class="mp-post-simple event masonry-item">
                          <span class="label sm mp-post-type">News </span>
                          <span class="label sm mp-post-date">- August 20, 2020</span>
                          <a href="#">
                              <h4 class="mp-post-title">LENSTALK launches photo challenge series for youth</h4>
                          </a>
                      </div>
                  </div>

                  <div class="col-md-5 masonry-item-container calculated" style="top: -41px;">
                      <div class="mp-post exhibitions masonry-item lg"
                          onclick="location.assign('#')">
                          <img alt="" src="{{ asset('assets/frontend/img/student/UPCOMING_968X668.jpg')}}"
                              width="960" height="448">
                          <div class="overlay">
                              <div class="mp-post-info">
                                  <a href="#">
                                      <h3 class="mp-post-title">Coming of Age Film Festival Presents: Marjorie Prime</h3>
                                  </a>
                                  <span class="label sm mp-post-type">Coming of Age Film Festival - </span>
                                  <span class="label sm mp-post-data">October 20 @ 6:00 pm - October 20 @ 8:00
                                      pm</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="instagram-feed">
                  <div class="row">
                      <div class="col-sm-12">
                          <h2 class="title"><span class="green">#LENSTALK</span> Through Your Lens</h2>
                      </div>
                      <div class="feed-list-container">

                          <div id="sb_instagram" class="sbi sbi_col_6 sbi_width_resp sbi_medium" style="width: 100%;"
                              data-feedid="sbi_22955934#6" data-res="auto" data-cols="6" data-num="6"
                              data-shortcode-atts="{}" data-postid="30" data-sbi-index="1">

                              <div id="sbi_images">
                                  <div class="sbi_item sbi_type_video sbi_had_error"
                                      id="sbi_2341565676107125032_22955934" data-date="1593356414">
                                      <div class="sbi_photo_wrap">
                                          <a class="sbi_photo sbi_imgLiquid_bgSize sbi_imgLiquid_ready" href="#"
                                              target="_blank">
                                              <span class="sbi-screenreader">Let's take a look at three Chinese
                                                  photographers w</span>
                                              <svg style="color: rgba(255,255,255,1)"
                                                  class="svg-inline--fa fa-play fa-w-14 sbi_playbtn" aria-label="Play"
                                                  aria-hidden="true" data-fa-processed="" data-prefix="fa"
                                                  data-icon="play" role="presentation"
                                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                  <path fill="currentColor"
                                                      d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z">
                                                  </path>
                                              </svg>
                                              <img alt="" class="lazyload sbi_img_error"
                                                  src="https://mopa.org/wp-content/uploads/sb-instagram-feed-images/2341565676107125032_22955934low.jpg"
                                                  style="display: none;">
                                          </a>
                                      </div>
                                  </div>
                                  <div class="sbi_item sbi_type_video sbi_had_error"
                                      id="sbi_2341233933823688781_22955934" data-date="1593316862">
                                      <div class="sbi_photo_wrap">
                                          <a class="sbi_photo sbi_imgLiquid_bgSize sbi_imgLiquid_ready" href="#"
                                              target="_blank"
                                              style="height: 224.733px; background-image: url(&quot;https://mopa.org/wp-content/uploads/sb-instagram-feed-images/2341233933823688781_22955934low.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                              <span class="sbi-screenreader">Using a simple container with a pinhole,
                                                  you can c</span>
                                              <svg style="color: rgba(255,255,255,1)"
                                                  class="svg-inline--fa fa-play fa-w-14 sbi_playbtn" aria-label="Play"
                                                  aria-hidden="true" data-fa-processed="" data-prefix="fa"
                                                  data-icon="play" role="presentation"
                                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                  <path fill="currentColor"
                                                      d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z">
                                                  </path>
                                              </svg> <img alt=""
                                                  src="https://mopa.org/wp-content/uploads/sb-instagram-feed-images/2341233933823688781_22955934low.jpg"
                                                  style="display: none;">
                                          </a>
                                      </div>
                                  </div>
                                  <div class="sbi_item sbi_type_image" id="sbi_2340871557156809669_22955934"
                                      data-date="1593273656">
                                      <div class="sbi_photo_wrap">
                                          <a class="sbi_photo sbi_imgLiquid_bgSize sbi_imgLiquid_ready"
                                              href="https://www.instagram.com/p/CB8ckddJavF/" target="_blank"
                                              rel="noopener nofollow"
                                              style="height: 224.733px; background-image: url(&quot;https://mopa.org/wp-content/uploads/sb-instagram-feed-images/2340871557156809669_22955934low.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                              <span class="sbi-screenreader">Happy birthday, Fazal Sheikh!⁣
                                                  ⁣
                                                  In 2016, LENSTALK</span>
                                              <img alt="" class="lazyload"
                                                  src="https://mopa.org/wp-content/uploads/sb-instagram-feed-images/2340871557156809669_22955934low.jpg"
                                                  style="display: none;">
                                          </a>
                                      </div>
                                  </div>
                                  <div class="sbi_item sbi_type_video sbi_had_error"
                                      id="sbi_2340388371716927400_22955934" data-date="1593216069">
                                      <div class="sbi_photo_wrap">
                                          <a class="sbi_photo sbi_imgLiquid_bgSize sbi_imgLiquid_ready" href="#"
                                              target="_blank" rel="noopener nofollow"
                                              style="height: 224.733px; background-image: url(&quot;https://mopa.org/wp-content/uploads/sb-instagram-feed-images/2340388371716927400_22955934low.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                              <span class="sbi-screenreader">Every photograph holds a story. From
                                                  personal snap</span>
                                              <svg style="color: rgba(255,255,255,1)"
                                                  class="svg-inline--fa fa-play fa-w-14 sbi_playbtn" aria-label="Play"
                                                  aria-hidden="true" data-fa-processed="" data-prefix="fa"
                                                  data-icon="play" role="presentation"
                                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                  <path fill="currentColor"
                                                      d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z">
                                                  </path>
                                              </svg> <img alt="" class="lazyload sbi_img_error"
                                                  src="https://mopa.org/wp-content/uploads/sb-instagram-feed-images/2340388371716927400_22955934low.jpg"
                                                  style="display: none;">
                                          </a>
                                      </div>
                                  </div>
                                  <div class="sbi_item sbi_type_image" id="sbi_2338857230395031320_22955934"
                                      data-date="1593033530">
                                      <div class="sbi_photo_wrap">
                                          <a class="sbi_photo sbi_imgLiquid_bgSize sbi_imgLiquid_ready" href="#"
                                              target="_blank"
                                              style="height: 224.733px; background-image: url(&quot;https://mopa.org/wp-content/uploads/sb-instagram-feed-images/2338857230395031320_22955934low.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                              <span class="sbi-screenreader">As a teenager studying in Shanghai, Lang
                                                  Jingshan </span>
                                              <img alt="" class="lazyload"
                                                  src="https://mopa.org/wp-content/uploads/sb-instagram-feed-images/2338857230395031320_22955934low.jpg"
                                                  style="display: none;">
                                          </a>
                                      </div>
                                  </div>
                                  <div class="sbi_item sbi_type_image" id="sbi_2338194307737790726_22955934"
                                      data-date="1592954503">
                                      <div class="sbi_photo_wrap">
                                          <a class="sbi_photo sbi_imgLiquid_bgSize sbi_imgLiquid_ready" href="#"
                                              target="_blank" rel="noopener nofollow"
                                              style="height: 224.733px; background-image: url(&quot;https://mopa.org/wp-content/uploads/sb-instagram-feed-images/2338194307737790726_22955934low.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                              <span class="sbi-screenreader">Called the “Father of Asian Photography,”
                                                  Lang</span>
                                              <img alt="" class="lazyload"
                                                  src="https://mopa.org/wp-content/uploads/sb-instagram-feed-images/2338194307737790726_22955934low.jpg"
                                                  style="display: none;">
                                          </a>
                                      </div>
                                  </div>
                              </div>
                              <div id="sbi_load">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <script type="text/javascript">
          jQuery(".masonry-grid").css("opacity", 0);
          jQuery(window).on('load', function () {
              jQuery(".masonry-grid").css("opacity", 1);

              if (jQuery(window).width() > 768) {
                  calculateGrid();
                  setTimeout(function () {
                      adjustContainerHeight();
                  }, 100);
              }
          });

          function calculateGrid() {
              jQuery(".masonry-item-container").each(function () {
                  var _this = jQuery(this);
                  var prev = _this.prev().prev();

                  if (prev.length > 0 && !_this.hasClass('calculated')) {
                      var prevHeight = 0;
                      prev.children('.masonry-item').each(function () {
                          prevHeight += jQuery(this).innerHeight();
                          console.log('prevHeight', jQuery(this).innerHeight());
                      });
                      var offset = ((prev.offset().top + prevHeight) - _this.offset().top);
                      _this.css('top', offset + 'px');
                  }
                  _this.addClass('calculated');

              });
          }

          function adjustContainerHeight() {
              var mainHeightEven = 0;
              var mainHeightOdd = 0;
              var mainHeight = 0;

              jQuery(".calculated:even").each(function () {
                  jQuery(this).children('.masonry-item').each(function () {
                      mainHeightEven += jQuery(this).innerHeight();
                  });
              });

              jQuery(".calculated:odd").each(function () {
                  jQuery(this).children('.masonry-item').each(function () {
                      mainHeightOdd += jQuery(this).innerHeight();
                  });
              });

              mainHeight = mainHeightEven > mainHeightOdd ? mainHeightEven : mainHeightOdd;
              jQuery('#main-grid').css('height', mainHeight);
          }

      </script>
  </div>
</div>


@push('body-scripts')
        @once
        <script>
            var prevScrollpos2 = window.pageYOffset;
           window.onscroll = function name() {
               var currentScrollPos2 = window.pageYOffset;
               if (prevScrollpos2 > currentScrollPos2) {
                   document.getElementById("main-nav").style.marginTop = "0";
               } else {
                   document.getElementById("main-nav").style.marginTop = "-130px";
               }
               prevScrollpos2 = currentScrollPos2;
           }
       </script>
        @endonce
    @endpush
@endsection