@extends('layouts.frontend.app')
@section('nev_sub')
<nav id="nav-sub" class="navbar navbar-default navbar-fixed-top sub-nav" role="navigation">
    <div class="container">
        <a href="#" class="sub-nav-back-mobile visible-xs visible-sm visible-md" data-toggle="collapse"
            data-target="#mopa-sub-menu">
            <span class="clearfix">
                <span class="pull-left">Learn</span>
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
                        href="#">Youth</a></li>
                <li id="menu-item-1866"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1866"><a
                        href="#">Seniors</a></li>
                <li id="menu-item-1869"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1869"><a
                        href="https://mopa.org/exhibitions/past">Schools</a></li>
                <li id="menu-item-1867"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1867"><a
                        href="#">Photo Club</a></li>
            </ul>
        </div>
    </div>
</nav>
@endsection
@section('main-section')
<div id="page" class="site">
    <div id="content" class="site-content" style="margin-top: 176px;">
        <div class="container-fluid">
            <div class="hero lg">
                <div class="hero-img-overlay"
                    style="background-image:url('https://mopa.org/wp-content/uploads/2017/07/hero-3.jpg')">
                </div>

                <div class="hero-overlay">
                    <div class="hero-content text-center">
                        <h1 class="infinite">Learn With MOPA</h1>
                        <!-- There is a subtitle to display -->
                        <br>
                        <h4>We offer classes, workshops, and resources on our website for people of all ages to grow
                            their understanding of photography and film.</h4>
                        <!-- There is a button to display. Text and link must have a value -->
                    </div>
                </div><!-- end .hero-overlay-->
            </div>
        </div>


        <!-- HELP FUND -->
        <a href="#" target="_blank">
            <div class="cta-small">
                <span class="label lg">SUPPORT OUR LEARNING PROGRAMS BY DONATING TO MOPA TODAY</span>
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="17px" height="11px"
                    viewBox="0 0 24.309 18.529" enable-background="new 0 0 24.309 18.529" xml:space="preserve">
                    <path fill="#ffffff" d="M23.795,8.027l-7.514-7.514c-0.684-0.684-1.791-0.684-2.475,0c-0.684,0.683-0.684,1.792,0,2.475l4.557,4.557
H1.75C0.784,7.544,0,8.328,0,9.294s0.784,1.75,1.75,1.75h16.553l-4.496,4.497c-0.684,0.684-0.684,1.791,0,2.475
c0.342,0.342,0.789,0.513,1.237,0.513s0.896-0.171,1.237-0.513l7.354-7.354c0.327-0.26,0.562-0.628,0.639-1.056
C24.383,9.052,24.225,8.456,23.795,8.027z"></path>
                </svg>
            </div>
        </a>

        <div class="content">

            <div class="textured-title">
                <h2 class="text-center">Resources</h2>
            </div>
            <div class="container">
                <div class="row">
                    <main id="main" class="ajax_posts" role="main">
                        <div class="col-sm-12 tile post"
                            style="background-image: url(https://mopa.org/wp-content/uploads/2019/01/faymanweb-e1548716630427.jpg)"
                            onclick="location.assign('https://mopa.org/educate/fayman/')">
                            <div class="img-overlay">
                                <div class="text-center contents resources">
                                    <div class="category-titles"><span
                                            class="label sm colored-title">Adults</span><span
                                            class="label sm colored-title">Photography 101</span><span
                                            class="label sm colored-title">Resources</span><span
                                            class="label sm colored-title">Schools</span><span
                                            class="label sm colored-title">Seniors</span><span
                                            class="label sm colored-title">Videos</span></div><a
                                        href="https://mopa.org/educate/fayman/" rel="bookmark">
                                        <h3 class="text-center title">A Colorful Life: Lynn G. Fayman</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 tile post"
                            style="background-image: url(https://mopa.org/wp-content/uploads/2020/05/cyanotype.png)"
                            onclick="location.assign('https://mopa.org/educate/in-process-cyanotype/')">
                            <div class="img-overlay">
                                <div class="text-center contents resources">
                                    <div class="category-titles"><span
                                            class="label sm colored-title">Adults</span><span
                                            class="label sm colored-title">Photography 101</span><span
                                            class="label sm colored-title">Resources</span><span
                                            class="label sm colored-title">Schools</span><span
                                            class="label sm colored-title">Seniors</span></div><a
                                        href="https://mopa.org/educate/in-process-cyanotype/" rel="bookmark">
                                        <h3 class="text-center title">In Process: Cyanotype</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 tile post"
                            style="background-image: url(https://mopa.org/wp-content/uploads/2020/05/symbolism_contemporary-photo.png)"
                            onclick="location.assign('https://mopa.org/educate/symbolism-in-contemporary-chinese-photography/')">
                            <div class="img-overlay">
                                <div class="text-center contents resources">
                                    <div class="category-titles"><span
                                            class="label sm colored-title">Adults</span><span
                                            class="label sm colored-title">Photography 101</span><span
                                            class="label sm colored-title">Resources</span><span
                                            class="label sm colored-title">Schools</span><span
                                            class="label sm colored-title">Seniors</span></div><a
                                        href="https://mopa.org/educate/symbolism-in-contemporary-chinese-photography/"
                                        rel="bookmark">
                                        <h3 class="text-center title">Symbolism in Contemporary Chinese Photography
                                        </h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </main>
                </div><!-- .row -->
                <button id="more_posts" data-subpage="resources" data-pageloc="learn" data-ppp="4" type="button"
                    name="button" class="btn btn-default btn-lg center-block btn-loadmore">LOAD MORE</button>

                <div class="textured-title">
                    <h2 class="text-center">Programs</h2>
                </div>
                <div class="row">
                    <main id="main2" class="ajax_posts2" role="main">
                        <div class="col-sm-12 col-md-6 col-lg-6 tile post"
                            style="background-image:url(https://mopa.org/wp-content/uploads/2020/07/photoclub-Hero-Desktop-scaled.jpg);">
                            <div class="img-overlay">
                                <div class="contents">
                                    <img src="https://mopa.org/wp-content/themes/mopa/img/icons/bulb-white.svg"
                                        alt="" class="center-block
              bulb">
                                    <p class="text-center sub">LEARNING PROGRAMS &nbsp; • &nbsp;YOUTH</p>
                                    <a href="https://mopa.org/educate/photoclub/">
                                        <h2 class="text-center">Photo Club</h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 tile post"
                            style="background-image:url(https://mopa.org/wp-content/uploads/2017/08/Camps-main.jpg);"
                            onclick="location.assign(' https://mopa.org/educate/summer-camps/')">
                            <div class="img-overlay">
                                <div class="contents">
                                    <img src="https://mopa.org/wp-content/themes/mopa/img/icons/bulb-white.svg"
                                        alt="" class="center-block
              bulb">
                                    <p class="text-center sub">LEARNING PROGRAMS &nbsp; • &nbsp;YOUTH</p>
                                    <a href="https://mopa.org/educate/summer-camps/">
                                        <h2 class="text-center">Camps</h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 tile post"
                            style="background-image:url(https://mopa.org/wp-content/uploads/2017/08/Turner_Rachel_WEB.jpg);"
                            onclick="location.assign(' https://mopa.org/educate/youth-exhibition/')">
                            <div class="img-overlay">
                                <div class="contents">
                                    <img src="https://mopa.org/wp-content/themes/mopa/img/icons/bulb-white.svg"
                                        alt="" class="center-block
              bulb">
                                    <p class="text-center sub">LEARNING PROGRAMS &nbsp; • &nbsp;SCHOOLS &nbsp; •
                                        &nbsp;YOUTH</p>
                                    <a href="https://mopa.org/educate/youth-exhibition/">
                                        <h2 class="text-center">Youth Exhibition</h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 tile post"
                            style="background-image:url(https://mopa.org/wp-content/uploads/2017/08/workshop.jpg);"
                            onclick="location.assign(' https://mopa.org/educate/tours-k-12-college-university-classes/')">
                            <div class="img-overlay">
                                <div class="contents">
                                    <img src="https://mopa.org/wp-content/themes/mopa/img/icons/bulb-white.svg"
                                        alt="" class="center-block
              bulb">
                                    <p class="text-center sub">LEARNING PROGRAMS &nbsp; • &nbsp;SCHOOLS</p>
                                    <a href="https://mopa.org/educate/tours-k-12-college-university-classes/">
                                        <h2 class="text-center">Tours and Workshops</h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
                <button id="more_posts2" data-subpage="programs" data-pageloc="learn" data-ppp="4" type="button"
                    name="button" class="btn btn-default btn-lg center-block btn-loadmore">LOAD MORE</button>
            </div>
            <div class="container-fluid content-wrapper categories">
                <div class="row">

                    <div class="col-sm-6 col-md-3 col-lg-3 tile small"
                        style="cursor: pointer; background-image: url('https://mopa.org/wp-content/themes/mopa/img/learn/youth.JPG')"
                        onclick="location.assign('https://mopa.org/learn/youth/')">
                        <div class="img-overlay">
                            <div class="contents">
                                <a href="https://mopa.org/learn/youth/">
                                    <p class="text-center single">YOUTH</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 tile small"
                        style="cursor: pointer; background-image: url('https://mopa.org/wp-content/themes/mopa/img/learn/adults.JPG')"
                        onclick="location.assign('https://mopa.org/learn/adult/')">
                        <div class="img-overlay">
                            <div class="contents">
                                <a href="https://mopa.org/learn/adult/">
                                    <p class="text-center single">ADULTS</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 tile small"
                        style="cursor: pointer; background-image: url('https://mopa.org/wp-content/themes/mopa/img/learn/seniors.JPG')"
                        onclick="location.assign('https://mopa.org/learn/senior/')">
                        <div class="img-overlay">
                            <div class="contents">
                                <a href="https://mopa.org/learn/senior/">
                                    <p class="text-center single">SENIORS</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 tile small"
                        style="cursor: pointer; background-image: url('https://mopa.org/wp-content/themes/mopa/img/learn/schools.JPG')"
                        onclick="location.assign('https://mopa.org/learn/schools/')">
                        <div class="img-overlay">
                            <div class="contents">
                                <a href="https://mopa.org/learn/youth/">
                                    <p class="text-center single">SCHOOLS</p>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12 tile"
                        style="background-image: url('https://mopa.org/wp-content/themes/mopa/img/learn/library.JPG')"
                        onclick="location.assign('https://mopa.org/visit/library/')">
                        <div class="img-overlay">
                            <div class="contents lib">
                                <h2 class="text-center title">The Dubois Library</h2>
                                <h4 class="text-center">MOPA's Edmund L. and Nancy K. Dubois Library holds more <br>
                                    than 20,000 items, all related to photography.</h4>
                                <button type="button" name="button"
                                    class="btn btn-default btn-lg center-block button btn-loadmore-library"
                                    onclick="location.assign('https://mopa.org/visit/library/')">LEARN MORE</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>

    </div>
</div>
@endsection