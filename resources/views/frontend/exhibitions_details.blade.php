@extends('layouts.frontend.app')
@section('nev_sub')
<nav id="nav-sub" class="navbar navbar-default navbar-fixed-top sub-nav" role="navigation">
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
</nav>
@endsection

@section('main-section')
<div id="page" class="site">
    <div id="content" class="site-content" style="margin-top: 183px;">
        <div class="content">
            <div class="container-fluid">
                <div class="hero-library"
                    style="background-image: url(https://mopa.org/wp-content/uploads/2021/05/Alfaro-Maya-1-scaled.jpg)">
                    <div class="row exhibit-details-overlay">
                        <div class="col-md-9">
                            <div class="current-exhib-head current-exhib-detail-head center-flex">
                                <div class="detail-banner-content">
                                    <span class="label sm orange">CURRENT EXHIBITION</span>
                                    <h1>Darkest Nights, Brightest Stars: 15th Annual Juried Youth Exhibition</h1>
                                    <h4>Now through Apr 10, 2022</h4>

                                    <a href="#" onclick="defaultEventViewer.toggleViewer(1)"
                                        class="btn btn-default btn-lg ">
                                        <i class="bi bi-eye"></i>
                                        VIEW EXHIBITION
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">

                            <div class="hero-side-library">

                                <a href="#" class="more-information-button visible-xs visible-sm">
                                    <span class="clearfix">
                                        <span class="pull-left">
                                            <span class="label lg">More Information</span>
                                        </span>
                                        <span class="caret-rotate pull-right">
                                            <img data-src="/img/icons/caret.svg"
                                                class="lazyload"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                                        </span>
                                    </span>
                                </a>

                                <div class="hero-side-content ">
                                    <h4 class="store-status">
                                        Exhibition Closed Now
                                    </h4>
                                    <span class="status">
                                        Opens FRIDAY @ 12:00PM </span>

                                    <div class="visit-time">
                                        <a href="#">
                                            <span class="white title">MUSEUM</span>
                                            <span class="black">CLOSED NOW •</span>
                                            <span class="black">OPENS FRIDAY @ 12:00PM</span>
                                        </a>

                                        <a href="#">
                                            <span class="white title">STORE</span>
                                            <span class="black">CLOSED NOW •</span>
                                            <span class="black">OPENS FRIDAY @ 11:00AM</span>
                                        </a>

                                        <a href="#">
                                            <span class="white title">LIBRARY</span>
                                            <span class="black">CLOSED NOW •</span>
                                        </a>
                                    </div>
                                    <h4 style="cursor: pointer;">
                                        Pay what you wish Admission &nbsp;
                                        <i class="bi bi-info-circle" style=""></i>
                                    </h4>
                                    <hr>
                                    <a class="visit-icons visit-icons-exhibition" href="https://mopa.org/visit/">
                                        <span class="label sm">PLAN YOUR VISIT</span>
                                        <div class="icon">
                                            <svg width="15px" height="9px" enable-background="new 0 0 24.309 18.529"
                                                version="1.1" viewBox="0 0 24.309 18.529" xml:space="preserve"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.795,8.027l-7.514-7.514c-0.684-0.684-1.791-0.684-2.475,0c-0.684,0.683-0.684,1.792,0,2.475l4.557,4.557 H1.75C0.784,7.544,0,8.328,0,9.294s0.784,1.75,1.75,1.75h16.553l-4.496,4.497c-0.684,0.684-0.684,1.791,0,2.475 c0.342,0.342,0.789,0.513,1.237,0.513s0.896-0.171,1.237-0.513l7.354-7.354c0.327-0.26,0.562-0.628,0.639-1.056 C24.383,9.052,24.225,8.456,23.795,8.027z"
                                                    fill="#fff"></path>
                                            </svg>
                                        </div>
                                    </a>
                                    <hr>
                                    <a class="visit-icons visit-icons-exhibition"
                                        href="https://mopa.org/join/memberships/">
                                        <span class="label sm">BECOME A MEMBER</span>
                                        <div class="icon">
                                            <svg width="15px" height="9px" enable-background="new 0 0 24.309 18.529"
                                                version="1.1" viewBox="0 0 24.309 18.529" xml:space="preserve"
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
                                                onclick="MyWindow=window.open('https://www.facebook.com/sharer/sharer.php?u=https://mopa.org/exhibitions/15th-annual-juried-youth-exhibition-darkest-nights-brightest-stars/','MyWindow',width=600,height=300); return false;">
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
                                                onclick="MyWindow=window.open('https://twitter.com/home?status=https://mopa.org/exhibitions/15th-annual-juried-youth-exhibition-darkest-nights-brightest-stars/','MyWindow',width=600,height=300); return false;">
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
                                            <a
                                                href="mailto:?&amp;subject=MOPA Link&amp;body=https://mopa.org/exhibitions/15th-annual-juried-youth-exhibition-darkest-nights-brightest-stars/">
                                                <svg width="25px" height="15.19px"
                                                    enable-background="new 0 0 29.209 17.748" version="1.1"
                                                    viewBox="0 0 29.209 17.748" xml:space="preserve"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g fill="#fff">
                                                        <polygon points="2.503 0 14.498 10.479 26.706 0"></polygon>
                                                        <polygon points="21.498 8.423 29.209 15.846 29.209 1.804">
                                                        </polygon>
                                                        <polygon points="7.634 8.467 0 1.798 0 15.768"></polygon>
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
                </div>

                <div class="exhibition-detail-content textured-bg">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="gradientBG exhibition-detail-gradient">
                                <span id="limited-content">
                                    <div class="at-above-post addthis_tool"
                                        data-url="https://mopa.org/exhibitions/15th-annual-juried-youth-exhibition-darkest-nights-brightest-stars/">
                                    </div>
                                    <p>MOPA’s 15th Annual Juried Youth Exhibition uniquely combines imaginative
                                        artworks&nbsp; responding to two separate thematic calls for submissions:
                                        Growing Up and Space. Youth artists in K-12 throughout San Diego and Tijuana
                                        were invited to share their unique interpretations of these seemingly disparate
                                        themes through photography and video. Through their lenses, powerful voices and
                                        common threads […]
                                        <!-- AddThis Advanced Settings above via filter on get_the_excerpt -->
                                        <!-- AddThis Advanced Settings below via filter on get_the_excerpt -->
                                        <!-- AddThis Advanced Settings generic via filter on get_the_excerpt -->
                                        <!-- AddThis Share Buttons above via filter on get_the_excerpt -->
                                        <!-- AddThis Share Buttons below via filter on get_the_excerpt -->
                                    </p>
                                    <div class="at-below-post addthis_tool"
                                        data-url="https://mopa.org/exhibitions/15th-annual-juried-youth-exhibition-darkest-nights-brightest-stars/">
                                    </div>
                                    <p>
                                        <!-- AddThis Share Buttons generic via filter on get_the_excerpt -->
                                    </p>
                                </span>
                                <span id="full-content" style="display: none">
                                    <div class="at-above-post addthis_tool"
                                        data-url="https://mopa.org/exhibitions/15th-annual-juried-youth-exhibition-darkest-nights-brightest-stars/">
                                    </div>
                                    <p>MOPA’s 15th Annual Juried Youth Exhibition uniquely combines imaginative
                                        artworks&nbsp; responding to two separate thematic calls for submissions:
                                        Growing Up and Space. Youth artists in K-12 throughout San Diego and Tijuana
                                        were invited to share their unique interpretations of these seemingly disparate
                                        themes through photography and video. Through their lenses, powerful voices and
                                        common threads emerged.</p>
                                    <p>The young artists rose above these unprecedented times to share compelling
                                        stories and perspectives about ambition, transformation, self identity, the
                                        earthly, and the ethereal. Finding solace and strength in art, their visions
                                        shine brightly into the future and remind us to see beyond what is present and
                                        known.</p>
                                    <p><em>Darkest Nights, Brightest Stars</em> is made possible by the generous
                                        financial support provided by:</p>
                                    <p>The Bern Schwartz Family Foundation, Farrell Family Foundation, Capdevilla
                                        Gillespie Foundation, California Arts Council, City of San Diego, Gardner
                                        Bilingual Fund</p>
                                    <p>The Exhibition Support Council is sustained by community leaders like:</p>
                                    <p>Alan and Brigit Pitcairn, Barbara Mandel, Bob and Marilyn Mackie, Diane Brockman,
                                        Elizabeth Taft, Gail and Mel Mackler, Julie Lorene Smith, Karen Kinney, Marie
                                        Tartar and Steve Eilenberg, Marion and David Knowles, Peggy Ann Wallace, The
                                        Elaine Galinson &amp; Herbert Solomon Donor Advised Fund of the Jewish Community
                                        Foundation, and Todd and Julie Wagner</p>
                                    <p>&nbsp;</p>
                                    <p><img alt="Logo for the City of San Diego"
                                            data-srcset="https://mopa.org/wp-content/uploads/2018/10/SanDiego-Large-300x144.png 300w, https://mopa.org/wp-content/uploads/2018/10/SanDiego-Large.png 350w"
                                            data-src="https://mopa.org/wp-content/uploads/2018/10/SanDiego-Large-300x144.png"
                                            data-sizes="(max-width: 300px) 100vw, 300px"
                                            class="aligncenter wp-image-3475 size-medium lazyload"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                            width="300" height="144"><noscript><img
                                                class="aligncenter wp-image-3475 size-medium"
                                                src="https://mopa.org/wp-content/uploads/2018/10/SanDiego-Large-300x144.png"
                                                alt="Logo for the City of San Diego" width="300" height="144"
                                                srcset="https://mopa.org/wp-content/uploads/2018/10/SanDiego-Large-300x144.png 300w, https://mopa.org/wp-content/uploads/2018/10/SanDiego-Large.png 350w"
                                                sizes="(max-width: 300px) 100vw, 300px" /></noscript></p>
                                    <p><img alt=""
                                            data-src="https://mopa.org/wp-content/uploads/2021/05/Logo-Full-Color_RGB-200.png"
                                            class="size-full wp-image-5807 aligncenter lazyload"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                            width="200" height="169"><noscript><img
                                                class="size-full wp-image-5807 aligncenter"
                                                src="https://mopa.org/wp-content/uploads/2021/05/Logo-Full-Color_RGB-200.png"
                                                alt="" width="200" height="169" /></noscript></p>

                                    <!-- AddThis Advanced Settings above via filter on the_content -->
                                    <!-- AddThis Advanced Settings below via filter on the_content -->
                                    <!-- AddThis Advanced Settings generic via filter on the_content -->
                                    <!-- AddThis Share Buttons above via filter on the_content -->
                                    <!-- AddThis Share Buttons below via filter on the_content -->
                                    <div class="at-below-post addthis_tool"
                                        data-url="https://mopa.org/exhibitions/15th-annual-juried-youth-exhibition-darkest-nights-brightest-stars/">
                                    </div><!-- AddThis Share Buttons generic via filter on the_content -->
                                </span>
                                <br>
                                <button id="content-toggle" onclick="utils.toggleContent()"
                                    class="btn btn-link label sm exhibit-details-button link">CONTINUE READING</button>
                            </div>

                            <div class="exhibition-item image" onclick="defaultEventViewer.selectImage(0)">
                                <img alt=""
                                    data-src="https://mopa.org/wp-content/uploads/2021/05/Alfaro-Maya-1-scaled.jpg"
                                    class=" ls-is-cached lazyloaded"
                                    src="https://mopa.org/wp-content/uploads/2021/05/Alfaro-Maya-1-scaled.jpg"><noscript><img
                                        alt=""
                                        data-src="https://mopa.org/wp-content/uploads/2021/05/Alfaro-Maya-1-scaled.jpg"
                                        class="lazyload"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                            alt=""
                                            data-src="https://mopa.org/wp-content/uploads/2021/05/Alfaro-Maya-1-scaled.jpg"
                                            class="lazyload"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                src="https://mopa.org/wp-content/uploads/2021/05/Alfaro-Maya-1-scaled.jpg"
                                                alt=""></noscript>
                                        <div class="exhib-data-container">
                                            <h3>In My Head</h3>
                                            <br>
                                            <p class="gray-light hidden-xs hidden-sm"> &nbsp; · &nbsp;</p>
                                            <br>
                                            <span class="label lg hidden-xs hidden-sm">Maya Alfaro</span>
                                            <br>
                                            <br>
                                            <br>
                                            <input type="button" class="btn btn-default btn-lg" value="Learn More"
                                                onclick="defaultEventViewer.selectImage(0)">
                                        </div>
                            </div>
                            <div class="exhibition-item image" onclick="defaultEventViewer.selectImage(1)">
                                <img alt=""
                                    data-src="https://mopa.org/wp-content/uploads/2021/05/Lestyk-Zoey-2-scaled.jpg"
                                    class=" lazyloaded"
                                    src="https://mopa.org/wp-content/uploads/2021/05/Lestyk-Zoey-2-scaled.jpg"><noscript><img
                                        alt=""
                                        data-src="https://mopa.org/wp-content/uploads/2021/05/Lestyk-Zoey-2-scaled.jpg"
                                        class="lazyload"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                            alt=""
                                            data-src="https://mopa.org/wp-content/uploads/2021/05/Lestyk-Zoey-2-scaled.jpg"
                                            class="lazyload"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                src="https://mopa.org/wp-content/uploads/2021/05/Lestyk-Zoey-2-scaled.jpg"
                                                alt=""></noscript>
                                        <div class="exhib-data-container">
                                            <h3>Cats in Space</h3>
                                            <br>
                                            <p class="gray-light hidden-xs hidden-sm"> &nbsp; · &nbsp;</p>
                                            <br>
                                            <span class="label lg hidden-xs hidden-sm">Zoey Lestyk</span>
                                            <br>
                                            <br>
                                            <br>
                                            <input type="button" class="btn btn-default btn-lg" value="Learn More"
                                                onclick="defaultEventViewer.selectImage(1)">
                                        </div>
                            </div>
                        </div><!-- end col-md-# -->
                        <div class="col-md-6">
                            <div class="exhibition-item image" onclick="defaultEventViewer.selectImage(2)">
                                <img alt=""
                                    data-src="https://mopa.org/wp-content/uploads/2021/05/Bossom-Amanda-scaled.jpg"
                                    class=" lazyloaded"
                                    src="https://mopa.org/wp-content/uploads/2021/05/Bossom-Amanda-scaled.jpg"><noscript><img
                                        alt=""
                                        data-src="https://mopa.org/wp-content/uploads/2021/05/Bossom-Amanda-scaled.jpg"
                                        class="lazyload"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                            alt=""
                                            data-src="https://mopa.org/wp-content/uploads/2021/05/Bossom-Amanda-scaled.jpg"
                                            class="lazyload"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                src="https://mopa.org/wp-content/uploads/2021/05/Bossom-Amanda-scaled.jpg"
                                                alt=""></noscript>
                                        <div class="exhib-data-container">
                                            <h3>The Emotions of Life</h3>
                                            <br>
                                            <p class="gray-light hidden-xs hidden-sm"> &nbsp; · &nbsp;</p>
                                            <br>
                                            <span class="label lg hidden-xs hidden-sm">Amanda Bossom</span>
                                            <br>
                                            <br>
                                            <br>
                                            <input type="button" class="btn btn-default btn-lg" value="Learn More"
                                                onclick="defaultEventViewer.selectImage(2)">
                                        </div>
                            </div>
                            <div class="exhibition-item image" onclick="defaultEventViewer.selectImage(3)">
                                <img alt="" data-src="https://mopa.org/wp-content/uploads/2021/05/Lee-Sonia-scaled.jpg"
                                    class=" lazyloaded"
                                    src="https://mopa.org/wp-content/uploads/2021/05/Lee-Sonia-scaled.jpg"><noscript><img
                                        alt=""
                                        data-src="https://mopa.org/wp-content/uploads/2021/05/Lee-Sonia-scaled.jpg"
                                        class="lazyload"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                            alt=""
                                            data-src="https://mopa.org/wp-content/uploads/2021/05/Lee-Sonia-scaled.jpg"
                                            class="lazyload"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                src="https://mopa.org/wp-content/uploads/2021/05/Lee-Sonia-scaled.jpg"
                                                alt=""></noscript>
                                        <div class="exhib-data-container">
                                            <h3>Growing Up</h3>
                                            <br>
                                            <p class="gray-light hidden-xs hidden-sm"> &nbsp; · &nbsp;</p>
                                            <br>
                                            <span class="label lg hidden-xs hidden-sm">Sonia Lee</span>
                                            <br>
                                            <br>
                                            <br>
                                            <input type="button" class="btn btn-default btn-lg" value="Learn More"
                                                onclick="defaultEventViewer.selectImage(3)">
                                        </div>
                            </div>
                            <div class="exhibition-item image" onclick="defaultEventViewer.selectImage(4)">
                                <img alt=""
                                    data-src="https://mopa.org/wp-content/uploads/2021/05/Rodriguez-Lizbeth-scaled.jpg"
                                    class=" lazyloaded"
                                    src="https://mopa.org/wp-content/uploads/2021/05/Rodriguez-Lizbeth-scaled.jpg"><noscript><img
                                        alt=""
                                        data-src="https://mopa.org/wp-content/uploads/2021/05/Rodriguez-Lizbeth-scaled.jpg"
                                        class="lazyload"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                            alt=""
                                            data-src="https://mopa.org/wp-content/uploads/2021/05/Rodriguez-Lizbeth-scaled.jpg"
                                            class="lazyload"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                src="https://mopa.org/wp-content/uploads/2021/05/Rodriguez-Lizbeth-scaled.jpg"
                                                alt=""></noscript>
                                        <div class="exhib-data-container">
                                            <h3>Looking into the Future</h3>
                                            <br>
                                            <p class="gray-light hidden-xs hidden-sm"> &nbsp; · &nbsp;</p>
                                            <br>
                                            <span class="label lg hidden-xs hidden-sm">Lizbeth Rodriguez</span>
                                            <br>
                                            <br>
                                            <br>
                                            <input type="button" class="btn btn-default btn-lg" value="Learn More"
                                                onclick="defaultEventViewer.selectImage(4)">
                                        </div>
                            </div>
                            <div class="gradientYO center-flex" onclick="defaultEventViewer.toggleViewer(1)">
                                <div class="cta-small exhibition-detail-content-cta" style="width: 100%;">
                                    <svg width="25px" height="11px" enable-background="new 0 0 39.745 25.371"
                                        version="1.1" viewBox="0 0 39.745 25.371" xml:space="preserve"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g fill="#fff">
                                            <path
                                                d="m39.745 12.298c-0.04-0.122-4.268-12.146-19.798-12.298l-0.288-1e-3c-15.072 0-19.326 11.556-19.599 12.346-0.039 0.106-0.06 0.22-0.06 0.34 0 0.124 0.022 0.243 0.064 0.352 0.312 0.893 4.599 12.334 19.597 12.334l0.286-2e-3c15.532-0.151 19.759-12.323 19.8-12.446 0.067-0.203 0.066-0.423-2e-3 -0.625zm-19.817 11.1l-0.267 2e-3c-12.699 0-16.894-8.882-17.624-10.716 0.73-1.834 4.927-10.715 17.622-10.715l0.269 1e-3c12.897 0.126 17.098 8.835 17.831 10.644-0.732 1.83-4.931 10.658-17.831 10.784z">
                                            </path>
                                            <path
                                                d="m19.898 4.726c-4.39 0-7.961 3.571-7.961 7.961s3.571 7.961 7.961 7.961 7.961-3.571 7.961-7.961-3.571-7.961-7.961-7.961zm0 13.952c-3.303 0-5.99-2.688-5.99-5.991s2.688-5.991 5.99-5.991 5.99 2.688 5.99 5.991-2.687 5.991-5.99 5.991z">
                                            </path>
                                        </g>
                                    </svg>
                                    <span class="label lg">VIEW EXHIBITION</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>




            &nbsp;<br><br>
            <div class="container">
                <!-- large devices -->
                <div class="row hidden-xs quick-links-container clearfix">
                    <div class="col-sm-4 col-md-4 col-lg-4 quick-links"
                        onclick="location.assign('https://mopa-org.myshopify.com/')">
                        <img style="max-width: 300px; width: 80%; display: block; margin: 0 auto;"
                            src="https://mopa.org/wp-content/themes/mopa/img/join/cam.png" alt="">
                        <h4 class="title">Vintage Canon FTb Pillow</h4>
                        <button type="button" name="button"
                            class="btn btn-default btn-lg center-block quick-links-button">SHOP NOW</button>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 quick-links" onclick="location.assign('/donate')">
                        <img style="max-width: 300px; width: 80%; display: block; margin: 0 auto;"
                            src="https://mopa.org/wp-content/themes/mopa/img/join/donate.png" alt="">
                        <h4 class="title">Support our Gallery</h4>
                        <button type="button" name="button"
                            class="btn btn-default btn-lg center-block quick-links-button">DONATE NOW</button>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 quick-links"
                        onclick="location.assign('https://mopa.org/join/memberships/')">
                        <img style="max-width: 300px; width: 80%; display: block; margin: 0 auto;"
                            src="https://mopa.org/wp-content/themes/mopa/img/join/1.png" alt="">
                        <h4 class="title">Become a MOPA Member</h4>
                        <button type="button" name="button"
                            class="btn btn-default btn-lg center-block quick-links-button">JOIN NOW</button>
                    </div>
                </div>

                <!-- xs sm devices -->
                <div class="row visible-xs quick-links-container">
                    <div class="col-xs-12 quick-links xs">
                        <h4>Vintage Canon FTb Pillow</h4>
                        <button class="btn btn-link label sm exhibit-details-button link quick-links-button xs"><a
                                href="https://mopa-org.myshopify.com/">SHOP NOW</a></button>
                    </div>
                    <div class="col-xs-12 quick-links xs">
                        <h4>Support our Gallery</h4>
                        <button class="btn btn-link label sm exhibit-details-button link quick-links-button xs"><a
                                href="/donate" target="_blank">DONATE NOW</a></button>
                    </div>
                    <div class="col-xs-12 quick-links xs noborder">
                        <h4>Become a MOPA Member</h4>
                        <button class="btn btn-link label sm exhibit-details-button link quick-links-button xs"><a
                                href="https://mopa.org/join/memberships">JOIN NOW</a></button>
                    </div>
                </div>
            </div> <!-- end .container -->
        </div>

        <div id="viewer" class="viewer hide" style="overflow: hidden;">

            <div class="container viewer-header">
                <div class="row" style="flex: 1;">
                    <div class="col-sm-8">
                        <h4>Darkest Nights, Brightest Stars: 15th Annual Juried Youth Exhibition</h4>
                    </div>
                    <div class="col-sm-4">
                        <div class="viewer-header-iconcontainer hidden-xs hidden-sm">
                            <ul>
                                <li>
                                    <a href="#"
                                        onclick="MyWindow=window.open('https://www.facebook.com/sharer/sharer.php?u=https://mopa.org/exhibitions/15th-annual-juried-youth-exhibition-darkest-nights-brightest-stars/','MyWindow',width=600,height=300); return false;">
                                        <svg version="1.1" id="ART1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10px"
                                            height="19.27px" viewBox="0 0 7.07 13.694"
                                            enable-background="new 0 0 7.07 13.694" xml:space="preserve">
                                            <path fill="#fff" d="M4.525,3.059c0-0.386,0.426-0.467,0.782-0.467c0.504,0,1.057,0.152,1.062,0.154l0.267,0.073L7.07,0.325
                    L6.865,0.258C6.833,0.247,6.063,0,4.275,0C3.233,0,2.48,0.345,1.904,1.084C1.4,1.726,1.4,2.732,1.4,3.273v1.069h-1.401v2.465H1.4
                    v6.825h3.125V6.808h2.057L6.78,4.343H4.525V3.059z"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        onclick="MyWindow=window.open('https://twitter.com/home?status=https://mopa.org/exhibitions/15th-annual-juried-youth-exhibition-darkest-nights-brightest-stars/','MyWindow',width=600,height=300); return false;">
                                        <svg version="1.1" id="ART" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px"
                                            height="16.25px" viewBox="0 0 14.861 12.254"
                                            enable-background="new 0 0 14.861 12.254" xml:space="preserve">
                                            <path fill="#fff"
                                                d="M14.861,1.606c-0.547,0.242-1.135,0.405-1.751,0.479c0.63-0.377,1.114-0.975,1.341-1.686
                        c-0.59,0.349-1.241,0.603-1.938,0.738c-0.555-0.592-1.348-0.962-2.225-0.962c-1.684,0-3.049,1.365-3.049,3.048
                        c0,0.239,0.026,0.473,0.079,0.694c-2.534-0.127-4.78-1.34-6.285-3.186C0.771,1.186,0.622,1.709,0.622,2.268
                        c0,1.057,0.538,1.99,1.355,2.538C1.479,4.79,1.009,4.651,0.597,4.425v0.037c0,1.478,1.051,2.711,2.446,2.99
                        C2.787,7.523,2.518,7.56,2.239,7.56c-0.196,0-0.388-0.02-0.573-0.055c0.388,1.211,1.513,2.093,2.848,2.116
                        c-1.043,0.818-2.358,1.306-3.786,1.306c-0.246,0-0.489-0.014-0.728-0.042c1.35,0.864,2.952,1.369,4.673,1.369
                        c5.609,0,8.676-4.646,8.676-8.675c0-0.133-0.003-0.265-0.009-0.395C13.937,2.755,14.454,2.218,14.861,1.606z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="mailto:?&amp;subject=MOPA Link&amp;body=https://mopa.org/exhibitions/15th-annual-juried-youth-exhibition-darkest-nights-brightest-stars/">
                                        <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px"
                                            height="15.19px" viewBox="0 0 29.209 17.748"
                                            enable-background="new 0 0 29.209 17.748" xml:space="preserve">
                                            <g>
                                                <polygon fill="#fff" points="2.503,0 14.498,10.479 26.706,0 	">
                                                </polygon>
                                                <polygon fill="#fff" points="21.498,8.423 29.209,15.846 29.209,1.804 	">
                                                </polygon>
                                                <polygon fill="#fff" points="7.634,8.467 0,1.798 0,15.768 	"></polygon>
                                                <path fill="#fff" d="M19.212,10.386l-3.746,3.215c-0.28,0.242-0.629,0.363-0.977,0.363c-0.353,0-0.704-0.125-0.987-0.371
                      l-3.6-3.145l-7.632,7.299h24.591L19.212,10.386z"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <a id="viewer-close-button" href="#" class="viewer-icon-container">
                    <img alt="" data-src="https://mopa.org/wp-content/themes/mopa/img/icons/close.svg"
                        class="viewer-icon large lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                            class="viewer-icon large" src="https://mopa.org/wp-content/themes/mopa/img/icons/close.svg"
                            alt=""></noscript>
                </a>
            </div>
            <div class="container viewer-content">
                <div id="photo101Carousel" class="carousel slide" data-ride="carousel" data-interval="false">

                    <ol class="carousel-indicators hidden-sm hidden-md hidden-lg hidden-xl" style="bottom: -60px;">
                        <li data-target="#photo101Carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#photo101Carousel" data-slide-to="1"></li>
                        <li data-target="#photo101Carousel" data-slide-to="2"></li>
                        <li data-target="#photo101Carousel" data-slide-to="3"></li>
                        <li data-target="#photo101Carousel" data-slide-to="4"></li>
                    </ol>

                    <div class="carousel-inner viewer-carousel">

                        <div class="item item-0  active" data-title="In My Head" data-year="" data-subtitle=""
                            data-artist="Maya Alfaro" data-nationality="" data-byear="" data-donatedby=""
                            data-description="" data-copyright="© Maya Alfaro">
                            <img alt="" data-src="https://mopa.org/wp-content/uploads/2021/05/Alfaro-Maya-1-scaled.jpg"
                                class="lazyload"
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                    alt=""
                                    data-src="https://mopa.org/wp-content/uploads/2021/05/Alfaro-Maya-1-scaled.jpg"
                                    class="lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                        alt=""
                                        data-src="https://mopa.org/wp-content/uploads/2021/05/Alfaro-Maya-1-scaled.jpg"
                                        class="lazyload"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                            src="https://mopa.org/wp-content/uploads/2021/05/Alfaro-Maya-1-scaled.jpg"
                                            alt=""></noscript>
                        </div>
                        <div class="item item-1 " data-title="Cats in Space" data-year="" data-subtitle=""
                            data-artist="Zoey Lestyk" data-nationality="" data-byear="" data-donatedby=""
                            data-description="" data-copyright="© Zoey Lestyk">

                            <img alt="" data-src="https://mopa.org/wp-content/uploads/2021/05/Lestyk-Zoey-2-scaled.jpg"
                                class="lazyload"
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                    alt=""
                                    data-src="https://mopa.org/wp-content/uploads/2021/05/Lestyk-Zoey-2-scaled.jpg"
                                    class="lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                        alt=""
                                        data-src="https://mopa.org/wp-content/uploads/2021/05/Lestyk-Zoey-2-scaled.jpg"
                                        class="lazyload"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                            src="https://mopa.org/wp-content/uploads/2021/05/Lestyk-Zoey-2-scaled.jpg"
                                            alt=""></noscript>
                        </div>
                        <div class="item item-2 " data-title="The Emotions of Life" data-year="" data-subtitle=""
                            data-artist="Amanda Bossom" data-nationality="" data-byear="" data-donatedby=""
                            data-description="" data-copyright="© Amanda Bossom">

                            <img alt="" data-src="https://mopa.org/wp-content/uploads/2021/05/Bossom-Amanda-scaled.jpg"
                                class="lazyload"
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                    alt=""
                                    data-src="https://mopa.org/wp-content/uploads/2021/05/Bossom-Amanda-scaled.jpg"
                                    class="lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                        alt=""
                                        data-src="https://mopa.org/wp-content/uploads/2021/05/Bossom-Amanda-scaled.jpg"
                                        class="lazyload"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                            src="https://mopa.org/wp-content/uploads/2021/05/Bossom-Amanda-scaled.jpg"
                                            alt=""></noscript>
                        </div>
                        <div class="item item-3 " data-title="Growing Up" data-year="" data-subtitle=""
                            data-artist="Sonia Lee" data-nationality="" data-byear="" data-donatedby=""
                            data-description="" data-copyright="© Sonia Lee">

                            <img alt="" data-src="https://mopa.org/wp-content/uploads/2021/05/Lee-Sonia-scaled.jpg"
                                class="lazyload"
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                    alt="" data-src="https://mopa.org/wp-content/uploads/2021/05/Lee-Sonia-scaled.jpg"
                                    class="lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                        alt=""
                                        data-src="https://mopa.org/wp-content/uploads/2021/05/Lee-Sonia-scaled.jpg"
                                        class="lazyload"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                            src="https://mopa.org/wp-content/uploads/2021/05/Lee-Sonia-scaled.jpg"
                                            alt=""></noscript>
                        </div>
                        <div class="item item-4 " data-title="Looking into the Future" data-year="" data-subtitle=""
                            data-artist="Lizbeth Rodriguez" data-nationality="" data-byear="" data-donatedby=""
                            data-description="" data-copyright="© Lizbeth Rodriguez">

                            <img alt=""
                                data-src="https://mopa.org/wp-content/uploads/2021/05/Rodriguez-Lizbeth-scaled.jpg"
                                class="lazyload"
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                    alt=""
                                    data-src="https://mopa.org/wp-content/uploads/2021/05/Rodriguez-Lizbeth-scaled.jpg"
                                    class="lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                        alt=""
                                        data-src="https://mopa.org/wp-content/uploads/2021/05/Rodriguez-Lizbeth-scaled.jpg"
                                        class="lazyload"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                            src="https://mopa.org/wp-content/uploads/2021/05/Rodriguez-Lizbeth-scaled.jpg"
                                            alt=""></noscript>
                        </div>

                    </div>

                    <a id="viewer-carousel-prev" class="left carousel-control" href="#photo101Carousel"
                        data-slide="prev">
                        <svg style="height: 30px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 12.7 17"
                            enable-background="new 0 0 12.7 17" xml:space="preserve">
                            <path opacity="0.5" fill="#FFFFFF"
                                d="M10.1,0c0.3,0,0.5,0.1,0.7,0.3c0.4,0.4,0.4,1,0,1.4L4,8.5l6.8,6.8c0.4,0.4,0.4,1,0,1.4 s-1,0.4-1.4,0L1.9,9.2c-0.4-0.4-0.4-1,0-1.4l7.5-7.5C9.6,0.1,9.8,0,10.1,0z">
                            </path>
                        </svg>
                    </a>
                    <a id="viewer-carousel-next" class="right carousel-control" href="#photo101Carousel"
                        data-slide="next">
                        <svg style="height: 30px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 12.7 17"
                            enable-background="new 0 0 12.7 17" xml:space="preserve">
                            <path opacity="0.5" fill="#FFFFFF"
                                d="M2.6,17c-0.3,0-0.5-0.1-0.7-0.3c-0.4-0.4-0.4-1,0-1.4l6.8-6.8L1.9,1.7c-0.4-0.4-0.4-1,0-1.4 s1-0.4,1.4,0l7.5,7.5c0.4,0.4,0.4,1,0,1.4l-7.5,7.5C3.1,16.9,2.8,17,2.6,17z">
                            </path>
                        </svg>
                    </a>

                </div>


                <div class="viewer-content-info">
                    <div class="content-container" style="width: 100%">
                        <h4><span class="title" id="viewer-title"></span>
                            <span class="hidden-x"><br></span>
                            <span id="viewer-date" class="text-secondary"></span>
                            <span id="viewer-subtitle" class="text-secondary"></span>
                        </h4>
                        <span id="viewer-artist" class="artist label lg"></span>
                        <span id="viewer-nationality" class="text-secondary sm"></span>
                        <span id="viewer-byear" class="text-secondary sm"></span>
                        <span id="viewer-donatedby" class="text-secondary sm"></span>
                        <span id="viewer-copyright" class="text-secondary sm"></span>
                        <br><br><br>

                        <div class="hidden-sm hidden-md hidden-lg hidden-xl" style="text-align: center;">
                            <a id="viewer-info-button-mobile" href="#" class="viewer-icon-container lg">
                                <img id="viewer-icon-1-mobile" style="transform: rotateZ(90deg);" alt=""
                                    data-src="https://mopa.org/wp-content/themes/mopa/img/icons/arrow-right-no-tail.svg"
                                    class="viewer-icon lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                        id="viewer-icon-1-mobile" style="transform: rotateZ(90deg);" class="viewer-icon"
                                        src="https://mopa.org/wp-content/themes/mopa/img/icons/arrow-right-no-tail.svg"
                                        alt=""></noscript>
                                <img id="viewer-icon-2-mobile" style="display:none; transform: rotateZ(-90deg);" alt=""
                                    data-src="https://mopa.org/wp-content/themes/mopa/img/icons/arrow-right-no-tail.svg"
                                    class="viewer-icon lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                        id="viewer-icon-2-mobile" style="display:none; transform: rotateZ(-90deg);"
                                        class="viewer-icon"
                                        src="https://mopa.org/wp-content/themes/mopa/img/icons/arrow-right-no-tail.svg"
                                        alt=""></noscript>
                            </a>
                        </div>

                        <div class="row viewer-details" id="viewer-details" style="display: none;">
                            <div class="col-md-8">
                                <div style="margin-top: 60px;" class="visible-sm visible-xs">
                                </div>
                                <div style="margin-right: 30px;">
                                    <p class="viewer-description" id="viewer-description"></p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div style="margin-top: 60px;" class="visible-sm visible-xs">
                                </div>
                                <span class="label lg blue">You might also like:</span>
                                <br>
                                <br>
                            </div>
                        </div>
                        <hr class="visible-sm visible-xs" style="
            margin-top: 50px;
            border-top: 1px solid #111;
            ">
                        <div class="viewer-header-iconcontainer hidden-md hidden-lg hidden-xl"
                            style="margin-top: 30px;">
                            <ul style="display: flex; margin: 0; padding: 0;">
                                <li style="display: inline-block;padding: 10px;float: left;">
                                    <a href="#"
                                        onclick="MyWindow=window.open('https://www.facebook.com/sharer/sharer.php?u=http://mopaorg.staging.wpengine.com/exhibit/defying-darkness-photography-at-night/','MyWindow',width=600,height=300); return false;">
                                        <svg version="1.1" id="ART1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10px"
                                            height="19.27px" viewBox="0 0 7.07 13.694"
                                            enable-background="new 0 0 7.07 13.694" xml:space="preserve">
                                            <path fill="#fff" d="M4.525,3.059c0-0.386,0.426-0.467,0.782-0.467c0.504,0,1.057,0.152,1.062,0.154l0.267,0.073L7.07,0.325
                        L6.865,0.258C6.833,0.247,6.063,0,4.275,0C3.233,0,2.48,0.345,1.904,1.084C1.4,1.726,1.4,2.732,1.4,3.273v1.069h-1.401v2.465H1.4
                        v6.825h3.125V6.808h2.057L6.78,4.343H4.525V3.059z"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li style="display: inline-block;padding: 10px;float: left;">
                                    <a href="#"
                                        onclick="MyWindow=window.open('https://twitter.com/home?status=http://mopaorg.staging.wpengine.com/exhibit/defying-darkness-photography-at-night/','MyWindow',width=600,height=300); return false;">
                                        <svg version="1.1" id="ART" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px"
                                            height="16.25px" viewBox="0 0 14.861 12.254"
                                            enable-background="new 0 0 14.861 12.254" xml:space="preserve">
                                            <path fill="#fff"
                                                d="M14.861,1.606c-0.547,0.242-1.135,0.405-1.751,0.479c0.63-0.377,1.114-0.975,1.341-1.686
                            c-0.59,0.349-1.241,0.603-1.938,0.738c-0.555-0.592-1.348-0.962-2.225-0.962c-1.684,0-3.049,1.365-3.049,3.048
                            c0,0.239,0.026,0.473,0.079,0.694c-2.534-0.127-4.78-1.34-6.285-3.186C0.771,1.186,0.622,1.709,0.622,2.268
                            c0,1.057,0.538,1.99,1.355,2.538C1.479,4.79,1.009,4.651,0.597,4.425v0.037c0,1.478,1.051,2.711,2.446,2.99
                            C2.787,7.523,2.518,7.56,2.239,7.56c-0.196,0-0.388-0.02-0.573-0.055c0.388,1.211,1.513,2.093,2.848,2.116
                            c-1.043,0.818-2.358,1.306-3.786,1.306c-0.246,0-0.489-0.014-0.728-0.042c1.35,0.864,2.952,1.369,4.673,1.369
                            c5.609,0,8.676-4.646,8.676-8.675c0-0.133-0.003-0.265-0.009-0.395C13.937,2.755,14.454,2.218,14.861,1.606z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li style="display: inline-block;padding: 10px;float: left;">
                                    <a
                                        href="mailto:?&amp;subject=MOPA Link&amp;body=http://mopaorg.staging.wpengine.com/exhibit/defying-darkness-photography-at-night/">
                                        <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px"
                                            height="15.19px" viewBox="0 0 29.209 17.748"
                                            enable-background="new 0 0 29.209 17.748" xml:space="preserve">
                                            <g>
                                                <polygon fill="#fff" points="2.503,0 14.498,10.479 26.706,0 	">
                                                </polygon>
                                                <polygon fill="#fff" points="21.498,8.423 29.209,15.846 29.209,1.804 	">
                                                </polygon>
                                                <polygon fill="#fff" points="7.634,8.467 0,1.798 0,15.768 	"></polygon>
                                                <path fill="#fff" d="M19.212,10.386l-3.746,3.215c-0.28,0.242-0.629,0.363-0.977,0.363c-0.353,0-0.704-0.125-0.987-0.371
                          l-3.6-3.145l-7.632,7.299h24.591L19.212,10.386z"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <a id="viewer-info-button" href="#" class="viewer-icon-container lg hidden-xs">
                        <img id="viewer-icon-1" alt=""
                            data-src="https://mopa.org/wp-content/themes/mopa/img/icons/info.svg"
                            class="viewer-icon lazyload"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                id="viewer-icon-1" class="viewer-icon"
                                src="https://mopa.org/wp-content/themes/mopa/img/icons/info.svg" alt=""></noscript>
                        <img id="viewer-icon-2" style="display:none;" alt=""
                            data-src="https://mopa.org/wp-content/themes/mopa/img/icons/close.svg"
                            class="viewer-icon lazyload"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                id="viewer-icon-2" style="display:none;" class="viewer-icon"
                                src="https://mopa.org/wp-content/themes/mopa/img/icons/close.svg" alt=""></noscript>
                    </a>

                </div>
            </div>




            <div class="container viewer-footer hidden-xs">
                <div class="thumb-next" href="#photo101ThumbCarousel" role="button" data-slide="prev"
                    style="cursor: default; opacity: .1">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 12.7 17"
                        enable-background="new 0 0 12.7 17" xml:space="preserve">
                        <path opacity="0.5" fill="#FFFFFF"
                            d="M10.1,0c0.3,0,0.5,0.1,0.7,0.3c0.4,0.4,0.4,1,0,1.4L4,8.5l6.8,6.8c0.4,0.4,0.4,1,0,1.4 s-1,0.4-1.4,0L1.9,9.2c-0.4-0.4-0.4-1,0-1.4l7.5-7.5C9.6,0.1,9.8,0,10.1,0z">
                        </path>
                    </svg>
                </div>

                <div id="photo101ThumbCarousel" class="carousel slide photo101ThumbCarousel" data-interval="false">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="item">
                                <div data-target="#photo101Carousel" data-slide-to="0" class="thumb thumb-0 selected">
                                    <img alt=""
                                        data-src="https://mopa.org/wp-content/uploads/2021/05/Alfaro-Maya-1-scaled.jpg"
                                        class="lazyload"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                            alt=""
                                            data-src="https://mopa.org/wp-content/uploads/2021/05/Alfaro-Maya-1-scaled.jpg"
                                            class="lazyload"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                alt=""
                                                data-src="https://mopa.org/wp-content/uploads/2021/05/Alfaro-Maya-1-scaled.jpg"
                                                class="lazyload"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                    src="https://mopa.org/wp-content/uploads/2021/05/Alfaro-Maya-1-scaled.jpg"
                                                    alt=""></noscript>
                                </div>
                            </div>
                            <div class="item">
                                <div data-target="#photo101Carousel" data-slide-to="1" class="thumb thumb-1"><img alt=""
                                        data-src="https://mopa.org/wp-content/uploads/2021/05/Lestyk-Zoey-2-scaled.jpg"
                                        class="lazyload"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                            alt=""
                                            data-src="https://mopa.org/wp-content/uploads/2021/05/Lestyk-Zoey-2-scaled.jpg"
                                            class="lazyload"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                alt=""
                                                data-src="https://mopa.org/wp-content/uploads/2021/05/Lestyk-Zoey-2-scaled.jpg"
                                                class="lazyload"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                    src="https://mopa.org/wp-content/uploads/2021/05/Lestyk-Zoey-2-scaled.jpg"
                                                    alt=""></noscript></div>
                            </div>
                            <div class="item">
                                <div data-target="#photo101Carousel" data-slide-to="2" class="thumb thumb-2"><img alt=""
                                        data-src="https://mopa.org/wp-content/uploads/2021/05/Bossom-Amanda-scaled.jpg"
                                        class="lazyload"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                            alt=""
                                            data-src="https://mopa.org/wp-content/uploads/2021/05/Bossom-Amanda-scaled.jpg"
                                            class="lazyload"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                alt=""
                                                data-src="https://mopa.org/wp-content/uploads/2021/05/Bossom-Amanda-scaled.jpg"
                                                class="lazyload"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                    src="https://mopa.org/wp-content/uploads/2021/05/Bossom-Amanda-scaled.jpg"
                                                    alt=""></noscript></div>
                            </div>
                            <div class="item">
                                <div data-target="#photo101Carousel" data-slide-to="3" class="thumb thumb-3"><img alt=""
                                        data-src="https://mopa.org/wp-content/uploads/2021/05/Lee-Sonia-scaled.jpg"
                                        class="lazyload"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                            alt=""
                                            data-src="https://mopa.org/wp-content/uploads/2021/05/Lee-Sonia-scaled.jpg"
                                            class="lazyload"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                alt=""
                                                data-src="https://mopa.org/wp-content/uploads/2021/05/Lee-Sonia-scaled.jpg"
                                                class="lazyload"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                    src="https://mopa.org/wp-content/uploads/2021/05/Lee-Sonia-scaled.jpg"
                                                    alt=""></noscript></div>
                            </div>
                            <div class="item">
                                <div data-target="#photo101Carousel" data-slide-to="4" class="thumb thumb-4"><img alt=""
                                        data-src="https://mopa.org/wp-content/uploads/2021/05/Rodriguez-Lizbeth-scaled.jpg"
                                        class="lazyload"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                            alt=""
                                            data-src="https://mopa.org/wp-content/uploads/2021/05/Rodriguez-Lizbeth-scaled.jpg"
                                            class="lazyload"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                alt=""
                                                data-src="https://mopa.org/wp-content/uploads/2021/05/Rodriguez-Lizbeth-scaled.jpg"
                                                class="lazyload"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                    src="https://mopa.org/wp-content/uploads/2021/05/Rodriguez-Lizbeth-scaled.jpg"
                                                    alt=""></noscript></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="thumb-next" href="#photo101ThumbCarousel" role="button" data-slide="next"
                    style="cursor: default; opacity: .1">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 12.7 17"
                        enable-background="new 0 0 12.7 17" xml:space="preserve">
                        <path opacity="0.5" fill="#FFFFFF"
                            d="M2.6,17c-0.3,0-0.5-0.1-0.7-0.3c-0.4-0.4-0.4-1,0-1.4l6.8-6.8L1.9,1.7c-0.4-0.4-0.4-1,0-1.4 s1-0.4,1.4,0l7.5,7.5c0.4,0.4,0.4,1,0,1.4l-7.5,7.5C3.1,16.9,2.8,17,2.6,17z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection