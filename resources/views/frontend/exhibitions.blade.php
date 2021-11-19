@extends('layouts.frontend.app')
@section('nev_sub')
{{-- <nav id="nav-sub" class="navbar navbar-default navbar-fixed-top sub-nav" role="navigation">
    <div class="container">
        <a href="#" class="sub-nav-back-mobile visible-xs visible-sm visible-md" data-toggle="collapse"
            data-target="#mopa-sub-menu">
            <span class="clearfix">
                <span class="pull-left">exhibitions</span>
                <span class="caret-rotate pull-right">
                    <img src="https://mopa.org/wp-content/themes/mopa/img/icons/caret.svg"></span>
            </span>
        </a>
        <a href="#" class="sub-nav-back-mobile-membership hidden">
            <span class="clearfix">
                <span class="pull-left">
                    <img style="transform: rotate(180deg)" alt="" class="lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">back
                </span>
            </span>
        </a>

        <div class="collapse navbar-collapse" id="mopa-sub-menu">
            <ul id="menu-exhibitions" class="nav navbar-nav">
                <li id="menu-item-1865"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1865"><a
                        href="#">Current</a></li>
                <li id="menu-item-1866"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1866"><a
                        href="#">Upcoming</a></li>
                <li id="menu-item-1869"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1869"><a
                        href="https://mopa.org/exhibitions/past">Past</a></li>
                <li id="menu-item-1867"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1867"><a
                        href="#">Online</a></li>
            </ul>
        </div>
    </div>
</nav> --}}
@endsection
@section('main-section')
<div id="page" class="site">
    <div id="content" class="site-content" style="margin-top: 176px;">
        <div class="container-fluid">
            <div class="masonry">
                <div class="masonry__item masonry__item--full-width">
                    <div class="hero hero-library md"
                        style="height: auto;background-image:url(https://mopa.org/wp-content/uploads/2019/03/1995.001.004-Aaron-Siskind-Untilted-Marthas-Vineyard-1954.jpg);">
                        <div class="row exhibit-details-overlay">
                            <div class="col-md-9">
                                <div class="current-exhib-head current-exhib-detail-head center-flex"
                                    style="bottom: 0;">
                                    <div class="detail-banner-content">
                                        <a href="https://mopa.org/exhibitions/aaron-siskind-mid-century-modern/"><span
                                                class="label lg orange"> EXHIBITION</span>
                                        </a><a
                                            href="https://mopa.org/exhibitions/aaron-siskind-mid-century-modern/">
                                            <h1 class="mp-post-title">Aaron Siskind: Mid Century Modern</h1>
                                        </a>
                                        <br>
                                        <a href="https://mopa.org/exhibitions/aaron-siskind-mid-century-modern/">
                                            <h4>
                                                Now through February 13 </h4>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">

                                <div class="hero-side-library">

                                    <a href="#" class="more-information-button visible-xs visible-sm">
                                        <span class="clearfix">
                                            <span class="pull-left"><span class="label lg">More
                                                    Information</span></span>
                                            <span class="caret-rotate pull-right">
                                                <img data-src="/img/icons/caret.svg" class="lazyload"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                                                <noscript>
                                                    <img src="/img/icons/caret.svg">
                                                </noscript>
                                            </span>
                                        </span>
                                    </a>

                                    <div class="hero-side-content ">
                                        <h4 class="store-status">
                                            Exhibition Closed Now
                                        </h4>
                                        <span class="status">
                                            Opens SUNDAY @ 11:00AM </span>

                                        <div class="visit-time">
                                            <a href="#">
                                                <span class="white title">MUSEUM</span>
                                                <span class="black">CLOSED NOW •</span>
                                                <span class="black">OPENS SUNDAY @ 11:00AM</span>
                                            </a>

                                            <a href="#">
                                                <span class="white title">STORE</span>
                                                <span class="black">CLOSED NOW •</span>
                                                <span class="black">OPENS SUNDAY @ 12:00PM</span>
                                            </a>

                                            <a href="#">
                                                <span class="white title">LIBRARY</span>
                                                <span class="black">CLOSED NOW •</span>
                                            </a>
                                        </div>
                                        <h4 style="cursor: pointer;"
                                            onclick="utils.showMessageBox(event, 'admission', 'Every visitor may visit the Museum of Photographic Arts (LENSTALK) located in historic Balboa Park, without a general admission fee and can make a contribution instead. This voluntary contribution policy makes LENSTALK accessible to everyone based on what one wishes to pay.', 'rgba(0, 0, 0, .75)')">
                                            Pay what you wish Admission &nbsp;
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                width="15px" height="15px" viewBox="0 0 29.643 29.641"
                                                enable-background="new 0 0 29.643 29.641" xml:space="preserve">
                                                <g>
                                                    <rect x="13.223" y="12.985" fill="#fff" width="3.18"
                                                        height="8.953"></rect>
                                                    <path fill="#fff" d="M14.813,7.705c-1.004,0-1.791,0.804-1.791,1.81c0,1.022,0.787,1.826,1.81,1.826
        c1.005,0,1.791-0.804,1.791-1.826C16.622,8.508,15.818,7.705,14.813,7.705z"></path>
                                                    <path fill="#fff" d="M14.822,0C6.648,0,0,6.649,0,14.821s6.648,14.82,14.822,14.82c8.172,0,14.82-6.648,14.82-14.82
        S22.994,0,14.822,0z M14.822,26.641C8.303,26.641,3,21.338,3,14.821S8.303,3,14.822,3c6.518,0,11.82,5.303,11.82,11.82
        S21.34,26.641,14.822,26.641z"></path>
                                                </g>
                                            </svg>
                                        </h4>
                                        <hr>
                                        <a class="visit-icons visit-icons-exhibition" href="#">
                                            <span class="label sm">PLAN YOUR VISIT</span>
                                            <div class="icon">
                                                <svg width="15px" height="9px"
                                                    enable-background="new 0 0 24.309 18.529" version="1.1"
                                                    viewBox="0 0 24.309 18.529" xml:space="preserve"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M23.795,8.027l-7.514-7.514c-0.684-0.684-1.791-0.684-2.475,0c-0.684,0.683-0.684,1.792,0,2.475l4.557,4.557 H1.75C0.784,7.544,0,8.328,0,9.294s0.784,1.75,1.75,1.75h16.553l-4.496,4.497c-0.684,0.684-0.684,1.791,0,2.475 c0.342,0.342,0.789,0.513,1.237,0.513s0.896-0.171,1.237-0.513l7.354-7.354c0.327-0.26,0.562-0.628,0.639-1.056 C24.383,9.052,24.225,8.456,23.795,8.027z"
                                                        fill="#fff"></path>
                                                </svg>
                                            </div>
                                        </a>
                                        <hr>
                                        <a class="visit-icons visit-icons-exhibition" href="#">
                                            <span class="label sm">BECOME A MEMBER</span>
                                            <div class="icon">
                                                <svg width="15px" height="9px"
                                                    enable-background="new 0 0 24.309 18.529" version="1.1"
                                                    viewBox="0 0 24.309 18.529" xml:space="preserve"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="m23.795 8.027l-7.514-7.514c-0.684-0.684-1.791-0.684-2.475 0-0.684 0.683-0.684 1.792 0 2.475l4.557 4.557h-16.613c-0.966-1e-3 -1.75 0.783-1.75 1.749s0.784 1.75 1.75 1.75h16.553l-4.496 4.497c-0.684 0.684-0.684 1.791 0 2.475 0.342 0.342 0.789 0.513 1.237 0.513s0.896-0.171 1.237-0.513l7.354-7.354c0.327-0.26 0.562-0.628 0.639-1.056 0.109-0.554-0.049-1.15-0.479-1.579z"
                                                        fill="#fff"></path>
                                                </svg>
                                            </div>
                                        </a>
                                        <hr>
                                        <ul>
                                            <li>
                                                <a href="#"
                                                    onclick="MyWindow=window.open('#','MyWindow',width=600,height=300); return false;">
                                                    <svg width="10px" height="19.27px"
                                                        enable-background="new 0 0 7.07 13.694" version="1.1"
                                                        viewBox="0 0 7.07 13.694" xml:space="preserve"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="m4.525 3.059c0-0.386 0.426-0.467 0.782-0.467 0.504 0 1.057 0.152 1.062 0.154l0.267 0.073 0.434-2.494-0.205-0.067c-0.032-0.011-0.802-0.258-2.59-0.258-1.042 0-1.795 0.345-2.371 1.084-0.504 0.642-0.504 1.648-0.504 2.189v1.069h-1.401v2.465h1.401v6.825h3.125v-6.824h2.057l0.198-2.465h-2.255v-1.284z"
                                                            fill="#fff"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    onclick="MyWindow=window.open('#','MyWindow',width=600,height=300); return false;">
                                                    <svg width="20px" height="16.25px"
                                                        enable-background="new 0 0 14.861 12.254" version="1.1"
                                                        viewBox="0 0 14.861 12.254" xml:space="preserve"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="m14.861 1.606c-0.547 0.242-1.135 0.405-1.751 0.479 0.63-0.377 1.114-0.975 1.341-1.686-0.59 0.349-1.241 0.603-1.938 0.738-0.555-0.592-1.348-0.962-2.225-0.962-1.684 0-3.049 1.365-3.049 3.048 0 0.239 0.026 0.473 0.079 0.694-2.534-0.127-4.78-1.34-6.285-3.186-0.262 0.455-0.411 0.978-0.411 1.537 0 1.057 0.538 1.99 1.355 2.538-0.498-0.016-0.968-0.155-1.38-0.381v0.037c0 1.478 1.051 2.711 2.446 2.99-0.256 0.071-0.525 0.108-0.804 0.108-0.196 0-0.388-0.02-0.573-0.055 0.388 1.211 1.513 2.093 2.848 2.116-1.043 0.818-2.358 1.306-3.786 1.306-0.246 0-0.489-0.014-0.728-0.042 1.35 0.864 2.952 1.369 4.673 1.369 5.609 0 8.676-4.646 8.676-8.675 0-0.133-3e-3 -0.265-9e-3 -0.395 0.597-0.429 1.114-0.966 1.521-1.578z"
                                                            fill="#fff"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    onclick="MyWindow=window.open('#','MyWindow',width=600,height=300); return false;">
                                                    <svg width="25px" height="15.88px"
                                                        enable-background="new 0 0 92.512 58.766" version="1.1"
                                                        viewBox="0 0 92.512 58.766" xml:space="preserve"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g fill="#fff">
                                                            <path
                                                                d="m29.384 25.177c-0.014 3.339 0 6.678 0.014 10.017 5.597 0.183 11.208 0.099 16.806 0.183-2.469 12.415-19.36 16.441-28.296 8.333-9.188-7.112-8.754-22.712 0.8-29.319 6.677-5.331 16.175-4.013 22.852 0.603 2.624-2.427 5.079-5.022 7.449-7.716-5.555-4.433-12.373-7.589-19.625-7.253-15.137-0.505-29.053 12.751-29.306 27.888-0.968 12.374 7.169 24.508 18.658 28.885 11.447 4.405 26.121 1.403 33.43-8.88 4.826-6.496 5.864-14.857 5.303-22.713-9.371-0.07-18.728-0.056-28.085-0.028z">
                                                            </path>
                                                            <path
                                                                d="m84.123 25.136c-0.028-2.792-0.042-5.597-0.057-8.389h-8.346c-0.028 2.792-0.056 5.583-0.07 8.389-2.806 0.014-5.598 0.028-8.389 0.056v8.347c2.791 0.028 5.597 0.056 8.389 0.084 0.028 2.792 0.028 5.584 0.057 8.375h8.36c0.015-2.791 0.028-5.583 0.057-8.389 2.806-0.028 5.597-0.042 8.389-0.07v-8.347c-2.793-0.028-5.598-0.028-8.39-0.056z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href="mailto:?&amp;subject=MOPA Link&amp;body=https://mopa.org/exhibitions/aaron-siskind-mid-century-modern/">
                                                    <svg width="25px" height="15.19px"
                                                        enable-background="new 0 0 29.209 17.748" version="1.1"
                                                        viewBox="0 0 29.209 17.748" xml:space="preserve"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g fill="#fff">
                                                            <polygon points="2.503 0 14.498 10.479 26.706 0">
                                                            </polygon>
                                                            <polygon
                                                                points="21.498 8.423 29.209 15.846 29.209 1.804">
                                                            </polygon>
                                                            <polygon points="7.634 8.467 0 1.798 0 15.768">
                                                            </polygon>
                                                            <path
                                                                d="m19.212 10.386l-3.746 3.215c-0.28 0.242-0.629 0.363-0.977 0.363-0.353 0-0.704-0.125-0.987-0.371l-3.6-3.145-7.632 7.299h24.591l-7.649-7.361z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    jQuery(function () {
                                        var moreButton = jQuery('.more-information-button');
                                        var caret = jQuery('.more-information-button .caret-rotate');
                                        var content = jQuery('.hero-side-content');

                                        moreButton.click(function (e) {
                                            e.preventDefault();

                                            content.toggle();

                                            if (content.is(':visible'))
                                                caret.css('transform', 'rotateZ(90deg)')
                                            else
                                                caret.css('transform', 'rotateZ(0)')
                                        })

                                        if (jQuery(window).width() > 768) {
                                            content.show();
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                        <!--</a>-->
                    </div>
                </div>

                <div class="masonry__item">
                    <div class="mp-post exhibitions lg post" style="height: auto;">
                        <img style="width: 100%"
                            onclick="location.assign('https://mopa.org/exhibitions/beyond-the-boundaries-photographs-by-norman-seeff/')"
                            alt=""
                            data-src="https://mopa.org/wp-content/uploads/2021/09/Seeff_Reception_04_credit_Stacy-Keck.jpg"
                            class=" ls-is-cached lazyloaded"
                            src="https://mopa.org/wp-content/uploads/2021/09/Seeff_Reception_04_credit_Stacy-Keck.jpg"><noscript><img
                                style="width: 100%"
                                src="https://mopa.org/wp-content/uploads/2021/09/Seeff_Reception_04_credit_Stacy-Keck.jpg"
                                onclick="location.assign('https://mopa.org/exhibitions/beyond-the-boundaries-photographs-by-norman-seeff/')"
                                alt=""></noscript>
                        <div class="overlay">
                            <div class="exhibitions-icon">
                                <img class="mp-post-image"
                                    src="https://mopa.org/wp-content/themes/mopa/img/icons/exhibitions.svg" alt="">
                            </div>
                            <div class="mp-post-info">
                                <!--<a href="https://mopa.org/exhibitions/beyond-the-boundaries-photographs-by-norman-seeff/?event=5968"><h3 class="mp-post-title">Beyond The Boundaries: Photographs By Norman Seeff</h3></a>-->
                                <a
                                    href="https://mopa.org/exhibitions/beyond-the-boundaries-photographs-by-norman-seeff/">
                                    <h3 class="mp-post-title">Beyond The Boundaries: Photographs By Norman Seeff
                                    </h3>
                                </a>
                                <span class="label sm mp-post-type">
                                    norman seeff </span>
                                <span class="label sm mp-post-data">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="masonry__item">
                    <div class="mp-post exhibitions lg post" style="height: auto;">
                        <img style="width: 100%"
                            onclick="location.assign('https://mopa.org/exhibitions/15th-annual-juried-youth-exhibition-darkest-nights-brightest-stars/')"
                            alt="" data-src="https://mopa.org/wp-content/uploads/2021/05/Alfaro-Maya-1-scaled.jpg"
                            class=" ls-is-cached lazyloaded"
                            src="https://mopa.org/wp-content/uploads/2021/05/Alfaro-Maya-1-scaled.jpg"><noscript><img
                                style="width: 100%"
                                src="https://mopa.org/wp-content/uploads/2021/05/Alfaro-Maya-1-scaled.jpg"
                                onclick="location.assign('https://mopa.org/exhibitions/15th-annual-juried-youth-exhibition-darkest-nights-brightest-stars/')"
                                alt=""></noscript>
                        <div class="overlay">
                            <div class="exhibitions-icon">
                                <img class="mp-post-image"
                                    src="https://mopa.org/wp-content/themes/mopa/img/icons/exhibitions.svg" alt="">
                            </div>
                            <div class="mp-post-info">
                                <!--<a href="https://mopa.org/exhibitions/15th-annual-juried-youth-exhibition-darkest-nights-brightest-stars/?event=5800"><h3 class="mp-post-title">Darkest Nights, Brightest Stars: 15th Annual Juried Youth Exhibition</h3></a>-->
                                <a
                                    href="https://mopa.org/exhibitions/15th-annual-juried-youth-exhibition-darkest-nights-brightest-stars/">
                                    <h3 class="mp-post-title">Darkest Nights, Brightest Stars: 15th Annual Juried
                                        Youth Exhibition</h3>
                                </a>
                                <span class="label sm mp-post-type">
                                    upcoming </span>
                                <span class="label sm mp-post-data">
                                    May 22 - February 6 </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- HELP FUND -->
        <a href="http://weblink.donorperfect.com/FUND_MOPA" class="cta-small" style="display: block;">
            <span class="label lg">HELP FUND OUR EXHIBITIONS BY DONATION TO MOPA TODAY</span>
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="17px" height="11px"
                viewBox="0 0 24.309 18.529" enable-background="new 0 0 24.309 18.529" xml:space="preserve">
                <path fill="#ffffff" d="M23.795,8.027l-7.514-7.514c-0.684-0.684-1.791-0.684-2.475,0c-0.684,0.683-0.684,1.792,0,2.475l4.557,4.557
  H1.75C0.784,7.544,0,8.328,0,9.294s0.784,1.75,1.75,1.75h16.553l-4.496,4.497c-0.684,0.684-0.684,1.791,0,2.475
  c0.342,0.342,0.789,0.513,1.237,0.513s0.896-0.171,1.237-0.513l7.354-7.354c0.327-0.26,0.562-0.628,0.639-1.056
  C24.383,9.052,24.225,8.456,23.795,8.027z"></path>
            </svg>
        </a>

        <div class="textured-bg">
            <!-- NOW PLAYING -->
            <div class="textured-title text-center">
                <h2><span class="green">Coming Soon</span> to the <span class="underline-green">Theater</span></h2>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mp-post coming-of-age-film-festival film-screenings sm"
                            style="background-image: url(https://mopa.org/wp-content/uploads/2020/02/10gle-YldeB2I4tzolVXgCg.jpeg)"
                            onclick="location.href='https://mopa.org/event/boundaries/'">
                            <div class="overlay">
                                <div class="mp-post-info">
                                    <!--<a href="https://mopa.org/exhibitions/aaron-siskind-mid-century-modern/?event=4917"><h3 class="mp-post-title">Coming of Age Film Festival Presents: Boundaries</h3></a>-->
                                    <a href="https://mopa.org/event/boundaries/">
                                        <h3 class="mp-post-title">Coming of Age Film Festival Presents: Boundaries
                                        </h3>
                                    </a>
                                    <span class="label sm mp-post-type">
                                        Coming of Age Film FestivalFilm Screenings </span>
                                    <span class="label sm mp-post-data">
                                        October 14 @ 1:00 am - October 14 @ 3:00 am </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mp-post coming-of-age-film-festival film-screenings sm"
                            style="background-image: url(https://mopa.org/wp-content/uploads/2020/02/PlaywrightsPerspectiveMARJORIEPRIME_INC_July2016.png)"
                            onclick="location.href='https://mopa.org/event/marjorieprime/'">
                            <div class="overlay">
                                <div class="mp-post-info">
                                    <!--<a href="https://mopa.org/exhibitions/aaron-siskind-mid-century-modern/?event=4920"><h3 class="mp-post-title">Coming of Age Film Festival Presents: Marjorie Prime</h3></a>-->
                                    <a href="https://mopa.org/event/marjorieprime/">
                                        <h3 class="mp-post-title">Coming of Age Film Festival Presents: Marjorie
                                            Prime</h3>
                                    </a>
                                    <span class="label sm mp-post-type">
                                        Coming of Age Film FestivalFilm Screenings </span>
                                    <span class="label sm mp-post-data">
                                        October 21 @ 1:00 am - October 21 @ 3:00 am </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- COMING SOON -->
            <div class="textured-title text-center">
                <h2>
                    <span class="orange">Coming Soon</span> to the <span class="underline-orange">Galleries</span>
                </h2>
            </div>

            <div class="container">
                <div class="row">
                </div>
            </div>



            <style>
                .online-exhibition {
                    background-image: url('https://mopa.org/wp-content/uploads/2017/10/online-exhibit-1.jpg') !important;
                }

                .permanent-exhibition {
                    background-image: url('https://mopa.org/wp-content/uploads/2017/10/online-1.jpg', true) !important;
                }
            </style>
            <div class="other-exhibition">
                <div class="row">
                    <div class="col-md-6" onclick="location.assign('#')">
                        <div class="images online-exhibition center-flex">
                            <a href="#">
                                <h4>ONLINE EXHIBITIONS</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="images permanent-exhibition center-flex">
                            <a href="https://mopa.org/exhibitions/permanent-collection">
                                <h4>PERMANENT COLLECTION</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection