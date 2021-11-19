@extends('layouts.frontend.app')
@section('nev_sub')
<style>
    .carousel-inner .btn {
	width: 100%;
}
</style>


<nav id="nav-sub" class="navbar navbar-default navbar-fixed-top sub-nav" role="navigation">
    <div class="container">
        <a href="#" class="sub-nav-back-mobile visible-xs visible-sm visible-md" data-toggle="collapse"
            data-target="#mopa-sub-menu">
            <span class="clearfix">
                <span class="pull-left">Visit</span>
                <span class="caret-rotate pull-right">
                    <i class="bi bi-arrow-right"></i>
                </span>
            </span>
        </a>
        {{-- <a href="#" class="sub-nav-back-mobile-membership hidden">
            <span class="clearfix">
                <span class="pull-left">
                    <img style="transform: rotate(180deg)" alt="" class="lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">back
                </span>
            </span>
        </a> --}}

        <div class="collapse navbar-collapse" id="mopa-sub-menu">
            <ul id="menu-exhibitions" class="nav navbar-nav">
                <li id="menu-item-1865"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1865">
                    <a href="#">Accessibility</a>
                </li>
                <li id="menu-item-1866"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1866">
                    <a href="#">Tours & Group</a>
                </li>
                <li id="menu-item-1869"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1869">
                    <a href="https://mopa.org/exhibitions/past">Theater</a>
                </li>
                <li id="menu-item-1867" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1867">
                    <a href="#">Library</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@endsection
@section('main-section')
<div id="page" class="site">
    <div id="content" class="site-content" style="margin-top: 176px;">
        <div class="container-fluid">
            <div class="hero">
                <div class="hero-img-overlay"
                    style="background-image:url(https://mopa.org/wp-content/themes/mopa/img/visit/visit.jpg)">
                </div>
                <div class="hero-overlay">
                    <div class="hero-content">
                        <h1>Visiting LENSTALK</h1>
                        <br>
                        <h4>Located within Balboa Park at <br> 1649 El Prado in San Diego, California</h4>
                        <br>
                        <span class="label sm">
                            <a href="tel:+16192387559">619.238.7559</a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="dot"> </span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="mailto:info@lenstalk.org">INFO@LENSTALK.ORG</a>
                        </span>
                    </div>
                </div>

                <div class="hero-info visit-time">
                    <a href="https://mopa.org/visit/#VisitHours">
                        <span class="white">MUSEUM</span>
                        <span class="white">• Fri, Sat, Sun, 11:00AM - 4:00PM </span>
                    </a>

                    <a href="https://mopa.org/visit/#VisitHours">
                        <span class="white">STORE</span>
                        <span class="white">• Fri, Sat, Sun, 12:00PM - 4:00PM </span>
                    </a>

                    <a href="https://mopa.org/visit/#VisitHours">
                        <span class="white">LIBRARY</span>
                        <span class="black">• CLOSED NOW •</span>
                    </a>
                </div>

            </div>
        </div>

        <div class="textured-bg">
            <div class="container">
                <div class="hours-info">
                    <h2 class="hours-info-title">Pay What You Wish</h2>
                    <div class="the-content-container">
                        <p>Every visitor may visit the Museum of Photographic Arts (LENSTALK) located in historic Balboa
                            Park, without a general admission fee and can make a contribution instead. This
                            voluntary
                            contribution policy makes LENSTALK accessible to everyone based on what one wishes to pay
                        </p>
                    </div>
                    <h2 class="hours-info-title">Information &amp; Directions</h2>
                    <div class="hours-content">
                        <div class="row">
                            <div class="flex">
                                <div class="col-md-4 infoDirectionContainer">
                                    <div class="hours-info-details gradient-bg">
                                        <div id="carousel-visit-content" class="carousel slide" data-ride="carousel"
                                            data-interval="false">
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <a name="VisitHours"></a>
                                                    <h4></h4>
                                                    <div class="time-block"></div>
                                                    <h4 class="admission">Admission: Pay What You Wish</h4>
                                                    <h5>Administrative Hours</h5>
                                                    <div class="time-block"></div>
                                                    <hr>
                                                    <a href="#carousel-visit-content" class="btn btn-default btn-lg"
                                                        data-slide="next">HOLIDAY HOURS <br><span>seasonal &amp;
                                                            early
                                                            closures</span></a>
                                                    <a href="https://mopa.org/events/month"
                                                        class="btn btn-default btn-lg"> VIEW CALENDAR </a>
                                                    <a style="margin-bottom: 0"
                                                        href="https://www.google.com/maps?ll=32.734623,-117.147823&amp;z=16&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=embed&amp;cid=13899591693014684917"
                                                        class="btn btn-default btn-lg" target="_blank">GET
                                                        DIRECTIONS</a>
                                                </div>
                                                <div class="item">
                                                    <a href="#carousel-visit-content" class="label lg"
                                                        data-slide="prev">
                                                        <svg style="margin-bottom: -4px; margin-left: 10px; display: inline-block; transform: rotate(180deg)"
                                                            version="1.1" id="Layer_1"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                            y="0px" width="22.809px" height="17.029px"
                                                            viewBox="0 0 22.809 17.029"
                                                            enable-background="new 0 0 22.809 17.029"
                                                            xml:space="preserve">
                                                            <path fill="#FFF" d="M22.515,7.807l-7.514-7.514c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l5.837,5.837H1
                    c-0.552,0-1,0.448-1,1s0.448,1,1,1h18.363l-5.776,5.777c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293
                    s0.512-0.098,0.707-0.293l7.427-7.428c0.225-0.184,0.377-0.451,0.377-0.764c0-0.002-0.002-0.005-0.002-0.007
                    C22.81,8.273,22.716,8.008,22.515,7.807z"></path>
                                                        </svg> Museum &amp; Store Hours
                                                    </a>
                                                    <br>
                                                    <br>
                                                    <h6>Museum Hours</h6>
                                                    <br>
                                                    <p>Hours: <span class="aBn" tabindex="0"
                                                            data-term="goog_252156235"><span class="aQJ">11 AM–4
                                                                PM</span></span> Fri–Sun</p>
                                                    <p><span style="font-weight: 400;">Shop Hours: <span class="aBn"
                                                                tabindex="0" data-term="goog_252156235"><span
                                                                    class="aQJ">12 PM–4 PM</span></span>
                                                            Fri–Sun&nbsp;</span></p>
                                                    <p><span style="font-weight: 400;">*Hours may vary during
                                                            holidays
                                                            and special events</span></p>
                                                    <div class="grammarly-disable-indicator">We will be open Monday,
                                                        May
                                                        31 for Memorial Day. Our hours will be 11 AM to 4 PM.</div>
                                                    <br>
                                                    <br>
                                                    <h6>Early Closures</h6>
                                                    <br>
                                                    <p>Due to the COVID-19 virus, MOPA is closed to public for the
                                                        rest
                                                        of March</p>
                                                    <br>
                                                    <br>
                                                    <h6>Holiday Hours</h6>
                                                    <br>
                                                    <p><span style="font-weight: 400;">Open 11 AM – 4 PM on Memorial
                                                            Day, Independence Day, Labor Day, Christmas Eve and New
                                                            Year’s Eve</span> &nbsp; <span
                                                            style="font-weight: 400;">Closed on Martin Luther King
                                                            Day,
                                                            Presidents’ Day, Thanksgiving Day, Veterans Day,
                                                            Christmas
                                                            Day and New Year’s Day</span></p>
                                                    <div class="grammarly-disable-indicator"></div>
                                                    <div class="grammarly-disable-indicator"></div>
                                                    <div class="grammarly-disable-indicator"></div>
                                                    <br>
                                                    <br>
                                                    <h6>Summer Hours</h6>
                                                    <br>
                                                    <p>&nbsp;</p>
                                                    <div class="grammarly-disable-indicator"></div>
                                                    <div class="grammarly-disable-indicator"></div>
                                                    <div class="grammarly-disable-indicator"></div>
                                                    <br>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-8 infoDirectionContainer">
                                    <script
                                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCl_j9zcb0GpjuZngXBQzEpNV3NC5gpSi8"></script>
                                    <div class="mapouter">
                                        <div class="overlay"></div>
                                        <div class="gmap_canvas">
                                            <iframe id="gmap_canvas" scrolling="no" marginheight="0" marginwidth="0"
                                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3651.630061739825!2d90.360683!3d23.760568!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb7e7326b18f66025!2sWomen%20in%20Digital!5e0!3m2!1sen!2sbd!4v1635161548542!5m2!1sen!2sbd"
                                                class=" lazyloaded"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                width="100%" height="100%" frameborder="0"></iframe>google maps
                                        </div>
                                        <style>
                                            .mapouter {
                                                overflow: hidden;
                                                height: 100%;
                                                width: 100%;
                                                min-height: 300px;
                                                position: absolute;
                                            }

                                            .gmap_canvas {
                                                background: none !important;
                                                height: 100%;
                                                width: 100%;
                                            }

                                            @media screen and (max-width: 992px) {
                                                .infoDirectionContainer {
                                                    width: 100%
                                                }

                                                .mapouter {
                                                    height: 400px;
                                                    position: relative;
                                                }
                                            }
                                        </style>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mopa-guide">
            <div class="container">
                <div class="mopa-guide-container">
                    <div class="row">
                        <div class="col-md-8">
                            <img alt=""
                                data-src="https://mopa.org/wp-content/uploads/2017/07/mopa-floorplan-map-1.png"
                                class=" lazyloaded"
                                src="https://mopa.org/wp-content/uploads/2017/07/mopa-floorplan-map-1.png"><noscript><img
                                    src="https://mopa.org/wp-content/uploads/2017/07/mopa-floorplan-map-1.png"
                                    alt=""></noscript>
                        </div>
                        <div class="col-md-4">
                            <h3>LENSTALK Guide</h3>
                            <div class="visit-mopa-guide">
                                <div class="visit-guide-list">
                                    <div class="circle green-circle"> </div>
                                    <p>Aaron Siskind: Mid Century Modern</p>
                                </div>
                                <div class="visit-guide-list">
                                    <div class="circle orange-circle"> </div>
                                    <p>Aaron Siskind: Mid Century Modern</p>
                                </div>
                                <div class="visit-guide-list">
                                    <div class="circle dark-blue-circle"> </div>
                                    <p>Aaron Siskind: Mid Century Modern</p>
                                </div>
                                <div class="visit-guide-list">
                                    <div class="circle yellow-circle"> </div>
                                    <p>Beyond the Boundaries: Photographs by Norman Seeff</p>
                                </div>
                                <div class="visit-guide-list">
                                    <div class="circle blue-circle"> </div>
                                    <p>Beyond the Boundaries: Photographs by Norman Seeff</p>
                                </div>
                                <div class="visit-guide-list">
                                    <div class="circle violet-circle"> </div>
                                    <p>Darkest Nights, Brightest Stars: 15th Annual Juried Youth Exhibition</p>
                                </div>
                                <div class="visit-guide-list">
                                    <div class="circle pink-circle"> </div>
                                    <p>Darkest Nights, Brightest Stars: 15th Annual Juried Youth Exhibition</p>
                                </div>
                                <div class="visit-guide-list">
                                    <svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px"
                                        height="20px" viewBox="0 0 25.617 34.359"
                                        enable-background="new 0 0 25.617 34.359" xml:space="preserve">
                                        <path fill="#fff" d="M25.596,15.452c-0.07-0.493-0.492-0.858-0.99-0.858H12.171l12.431-5.053c0.512-0.208,0.758-0.791,0.55-1.303
      c-0.209-0.512-0.791-0.759-1.304-0.55L9.489,13.525V1c0-0.552-0.448-1-1-1H1.002c-0.552,0-1,0.448-1,1v14.467
      c0,0.02,0.01,0.036,0.011,0.055c-0.001,0.018-0.011,0.034-0.012,0.052c-0.103,5.457,4.287,7.887,7.233,8.587v9.198
      c0,0.553,0.448,1,1,1h9.391c0.553,0,1-0.447,1-1v-9.496C26.213,20.445,25.625,15.659,25.596,15.452z M2.002,2h5.487v12.467H2.002V2z
      M17.241,22.283c-0.372,0.156-0.615,0.52-0.615,0.924v9.152H9.235v-9.025c0-0.498-0.368-0.92-0.861-0.99
      c-0.249-0.035-5.756-0.881-6.326-5.75h21.483C23.241,17.865,22.037,20.286,17.241,22.283z"></path>
                                    </svg>
                                    <p>Bathrooms</p>
                                </div>
                                <div class="visit-guide-list">
                                    <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px"
                                        height="20px" viewBox="0 0 36.143 43.391"
                                        enable-background="new 0 0 36.143 43.391" xml:space="preserve">
                                        <g>
                                            <path fill="#fff" d="M29.437,18.768l-0.023-1.104c-0.017-0.815-0.684-1.468-1.499-1.468H1.5c-0.829,0-1.5,0.671-1.5,1.5v10.874
        c0,8.172,6.648,14.82,14.821,14.82c6.665,0,12.314-4.424,14.172-10.506c0.026,0.001,0.052,0.008,0.078,0.008
        c3.899,0,7.071-3.174,7.071-7.072C36.143,22.044,33.165,18.959,29.437,18.768z M14.821,40.391C8.303,40.391,3,35.088,3,28.571
        v-9.374h23.445l0.197,9.374C26.643,35.088,21.34,40.391,14.821,40.391z M29.576,29.841c0.037-0.43,0.066-0.862,0.066-1.302
        L29.5,21.793c2.041,0.217,3.643,1.93,3.643,4.027C33.143,27.893,31.581,29.589,29.576,29.841z"></path>
                                            <path fill="#fff" d="M14.256,10.649c0.209,0.629,0.794,1.026,1.422,1.026c0.158,0,0.317-0.024,0.475-0.077
        c0.786-0.262,1.211-1.111,0.949-1.897c-0.184-0.551-0.459-1.09-0.725-1.611c-0.429-0.84-0.914-1.792-0.705-2.3
        c0.215-0.517,0.424-0.834,0.666-1.202c0.398-0.605,0.852-1.292,1.24-2.684c0.225-0.797-0.242-1.625-1.039-1.849
        c-0.793-0.223-1.625,0.242-1.85,1.04c-0.263,0.94-0.525,1.337-0.857,1.841C13.547,3.37,13.223,3.861,12.9,4.644
        c-0.738,1.785,0.152,3.532,0.804,4.809C13.93,9.895,14.143,10.313,14.256,10.649z"></path>
                                        </g>
                                    </svg>
                                    <p>Cafe</p>
                                </div>
                                <div class="visit-guide-list">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px"
                                        height="20px" viewBox="0 0 29.643 29.641"
                                        enable-background="new 0 0 29.643 29.641" xml:space="preserve">
                                        <g>
                                            <path fill="#fff" d="M14.813,7.705c-1.004,0-1.791,0.804-1.791,1.81c0,1.022,0.787,1.826,1.81,1.826
        c1.005,0,1.791-0.804,1.791-1.826C16.622,8.508,15.818,7.705,14.813,7.705z"></path>
                                            <path fill="#fff" d="M14.822,0C6.648,0,0,6.649,0,14.821s6.648,14.82,14.822,14.82c8.172,0,14.82-6.648,14.82-14.82
        S22.994,0,14.822,0z M14.822,26.641C8.303,26.641,3,21.338,3,14.821S8.303,3,14.822,3c6.518,0,11.82,5.303,11.82,11.82
        S21.34,26.641,14.822,26.641z"></path>
                                        </g>
                                    </svg>
                                    <p>Information</p>
                                </div>
                                <div class="visit-guide-list">
                                    <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px"
                                        height="20px" viewBox="0 0 31.455 32.16"
                                        enable-background="new 0 0 31.455 32.16" xml:space="preserve">
                                        <path fill="#fff" d="M30.455,8.252H23.48c0.727-0.875,1.181-1.982,1.181-3.205C24.661,2.264,22.396,0,19.612,0
      c-1.687,0-3.172,0.838-4.089,2.112C14.605,0.838,13.119,0,11.433,0C8.649,0,6.385,2.264,6.385,5.048c0,1.223,0.455,2.33,1.18,3.205
      H1c-0.552,0-1,0.448-1,1v6.627c0,0.552,0.448,1,1,1h1.025v14.28c0,0.552,0.448,1,1,1h11.974c0.159,0.106,0.339,0.184,0.545,0.184
      s0.386-0.077,0.545-0.184h12.157c0.553,0,1-0.448,1-1v-14.28h1.209c0.553,0,1-0.448,1-1V9.252C31.455,8.7,31.007,8.252,30.455,8.252
      z M14.543,30.16H4.025v-13.28h10.519V30.16z M14.543,14.696H3.025c-0.206,0-0.386,0.077-0.545,0.184H2v-4.627h12.543V14.696z
      M14.543,4.795v3.457h-2.91c-0.067-0.015-0.129-0.041-0.201-0.041c-1.745,0-3.164-1.419-3.164-3.164s1.419-3.164,3.164-3.164
      c1.626,0,2.955,1.238,3.129,2.819C14.559,4.734,14.543,4.762,14.543,4.795z M19.612,1.884c1.745,0,3.164,1.419,3.164,3.164
      s-1.419,3.164-3.164,3.164c-0.071,0-0.134,0.025-0.201,0.041h-2.867V4.795c0-0.083-0.028-0.156-0.047-0.233
      C16.732,3.049,18.033,1.884,19.612,1.884z M27.246,30.16H16.543v-13.28h10.702V30.16z M29.455,14.879h-0.664
      c-0.158-0.106-0.339-0.184-0.545-0.184H16.543v-4.443h12.911V14.879z"></path>
                                    </svg>
                                    <p>Store</p>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="picture-tab">
            <a href="https://mopa.org/visit/tours/" class="picture-tab-item"
                style="background-image:url(https://mopa.org/wp-content/themes/mopa/img/visit/1.jpg)">
                <div class="picture-tab-overlay">
                    <div class="title">
                        <h4>TOURS &amp; GROUPS</h4>
                    </div>
                </div>
            </a>
            <a href="https://mopa.org/visit/accessibility/" class="picture-tab-item"
                style="background-image:url(https://mopa.org/wp-content/themes/mopa/img/visit/2.jpg )">
                <div class="picture-tab-overlay">
                    <div class="title">
                        <h4>ACCESSIBILITY</h4>
                    </div>
                </div>
            </a>
            <a href="https://mopa.org/visit/theater/" class="picture-tab-item"
                style="background-image:url(https://mopa.org/wp-content/themes/mopa/img/visit/3.jpg )">
                <div class="picture-tab-overlay">
                    <div class="title">
                        <h4>THEATER</h4>
                    </div>
                </div>
            </a>
            <a href="https://mopa.org/visit/library/" class="picture-tab-item"
                style="background-image:url(https://mopa.org/wp-content/themes/mopa/img/visit/4.jpg)">
                <div class="picture-tab-overlay">
                    <div class="title">
                        <h4>LIBRARY</h4>
                    </div>
                </div>
            </a>
        </div>

        <div class="cta-big">
            <div class="container">
                <h3>
                    LENSTALK's mission is to inspire, educate and engage through the presentation and preservation
                    of photography, film and video.
                </h3>
                <div class="cta-big-btn-container">
                    <a href="https://mopa.org/mission" class="btn btn-default btn-lg">Learn more</a>
                    <a href="https://mopa.org/join/memberships" class="btn btn-default btn-lg">Become a member</a>
                </div>
            </div>
        </div>

        <div class="visit-info textured-bg amenities">
            <div class="container">

                <div class="amenities-tab tabs">
                    <a data-toggle="tab" href="#tab1" class="tab-item active">Parking at LENSTALK</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="dot"></span>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a data-toggle="tab" href="#tab3" class="tab-item">Things to Know</a>
                </div>

                <div class="tab-content">
                    <div id="tab1" class="row tab-pane fade active in">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="amenities-img">
                                    <img style="margin-top: 60px; width: 100%;" alt=""
                                        data-src="https://mopa.org/wp-content/uploads/2017/07/map-image.jpg"
                                        class="lazyload"
                                        src="https://mopa.org/wp-content/uploads/2017/07/map-image.jpg"><noscript><img
                                            style="margin-top: 60px; width: 100%;"
                                            src="https://mopa.org/wp-content/uploads/2017/07/map-image.jpg"
                                            alt=""></noscript>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p style="margin-top: 60px;">
                                    Parking lots are available along Space Theater Way and street parking is
                                    available
                                    along Park Blvd. Since parking may be difficult during peak times or during
                                    events,
                                    additional parking lots are located throughout Balboa Park. <br>
                                    <br>
                                    A free tram service is available from the parking lots to various points
                                    throughout
                                    Balboa Park from 8:30AM - 6:00PM, with extended hours during summer months.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="tab3" class="row tab-pane fade">
                        <div class="row">
                            <div class="col-sm-6">
                                <img style="margin-top: 60px; padding: 0 40px; width: 100%;" alt=""
                                    data-src="https://mopa.org/wp-content/uploads/2017/07/things-to-know.jpg"
                                    class="lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                        style="margin-top: 60px; padding: 0 40px; width: 100%;"
                                        src="https://mopa.org/wp-content/uploads/2017/07/things-to-know.jpg"
                                        alt=""></noscript>
                            </div>
                            <div class="col-sm-6">
                                <p style="margin-top: 60px">
                                    Service Animals. Therapy and service animals are welcome inside the Museum. Pets
                                    are
                                    not allowed.<br>
                                    <br>
                                    Pencil and Sketchbook. You are welcome to sketch in the museum. We do ask that
                                    you
                                    use pencils rather than pens. Pencils and clipboards are available for loan for
                                    your
                                    convenience at the front desk.<br>
                                    <br>
                                    Coat and Accessories Check: For your comfort, a Coat Check is available at the
                                    front
                                    desk to stow food, beverages, backpacks, oversized items, umbrellas and other
                                    objects not allowed in the galleries as space permits.<br>
                                    <br>
                                    The Whole Family. We want children to enjoy the galleries, and strollers are
                                    welcome
                                    throughout the museum. We invite them to talk, laugh and move around freely.
                                    However, running and other physical activity in which they can hurt themselves
                                    or
                                    damage the works of art are not permitted. Children must always be accompanied
                                    by an
                                    adult.<br>
                                    <br>
                                    The Museum of Photographic Arts recognizes that we sit on the ancestral homeland
                                    of
                                    the Kumeyaay Nation, past and present. The Museum extends its respect and
                                    gratitude
                                    to the Kumeyaay peoples who call these lands home.
                                </p>
                                <!--<ul style="margin-top: 60px;">
         <li><p>Service Animals. Therapy and service animals are welcome inside the Museum. Pets are not allowed.</p></li>
         <li><p>Pencil and Sketchbook. You are welcome to sketch in the museum. We do ask that you use pencils rather than pens. Pencils and clipboards are available for loan for your convenience at the front desk.</p></li>
         <li><p>Coat and Accessories Check: For your comfort, a Coat Check is available at the front desk to stow food, beverages, backpacks, oversized items, umbrellas and other objects not allowed in the galleries as space permits.</p></li>
         <li><p>The Whole Family. We want children to enjoy the galleries, and strollers are welcome throughout the museum. We invite them to talk, laugh and move around freely. However, running and other physical activity in which they can hurt themselves or damage the works of art are not permitted. Children must always be accompanied by an adult.</p></li>-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection