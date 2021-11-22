@extends('layouts.frontend.app')
@section('nev_sub')

@endsection

@section('main-section')
<div id="page" class="site">
    <div id="content" class="site-content" style="margin-top: 141.567px;">
        <div class="container-fluid">
            <div class="hero md">
                <div class="hero-img-overlay"
                    style="background-image:url('https://mopa.org/wp-content/uploads/2017/09/member-cta.jpg')">
                </div>

                <div class="hero-overlay">
                    <div class="hero-content text-center">
                        <h1 class="infinite">Contact</h1>
                        <!-- There is a subtitle to display -->
                        <br>
                        <h4>Get in touch with us</h4>
                        <!-- There is a button to display. Text and link must have a value -->
                    </div>
                </div><!-- end .hero-overlay-->
                <div class="hero-info">
                    <a href="#" class="info store-hours"><span class="hidden-sm hidden-xs">Closed Now</span> <span
                            class="status"><span class="hidden-sm hidden-xs">· </span>Open later 10AM - 5PM</span></a>
                    <a href="#" class="info admission hidden-xs">
                        Admission: Pay what you wish
                        <svg style="margin-bottom: -3px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px"
                            viewBox="0 0 29.643 29.641" enable-background="new 0 0 29.643 29.641" xml:space="preserve">
                            <g>
                                <rect x="13.223" y="12.985" fill="#fff" width="3.18" height="8.953"></rect>
                                <path fill="#fff" d="M14.813,7.705c-1.004,0-1.791,0.804-1.791,1.81c0,1.022,0.787,1.826,1.81,1.826
    c1.005,0,1.791-0.804,1.791-1.826C16.622,8.508,15.818,7.705,14.813,7.705z"></path>
                                <path fill="#fff" d="M14.822,0C6.648,0,0,6.649,0,14.821s6.648,14.82,14.822,14.82c8.172,0,14.82-6.648,14.82-14.82
    S22.994,0,14.822,0z M14.822,26.641C8.303,26.641,3,21.338,3,14.821S8.303,3,14.822,3c6.518,0,11.82,5.303,11.82,11.82
    S21.34,26.641,14.822,26.641z"></path>
                            </g>
                        </svg>
                    </a>
                </div>

            </div>
        </div>



        <div class="textured-bg">
            <div class="container">
                <div class="nav-margin"></div>
                <div class="hours-info">
                    <div class="row">
                        <div class="flex">
                            <div class="col-md-4">
                                <div class="hours-content">
                                    <div class="hours-info-details gradient-bg">
                                        <h4>Contact Info</h4>
                                        <p><a href="tel:+16192387559">619.238.7559</a><br>
                                            Fax: 619.238.8777<br>
                                            <a href="mailto:info@mopa.org">info@mopa.org</a>
                                        </p>
                                        <hr>
                                        <h6>Office Hours</h6>
                                        <p>Mon – Thurs: 10am – 5pm<br>
                                            Friday: 10am – 6pm</p>
                                        <hr>
                                        <h6>Visit Us</h6>
                                        <p>1649 El Prado<br>
                                            San Diego, CA 92101</p>
                                    </div>
                                    <script
                                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCl_j9zcb0GpjuZngXBQzEpNV3NC5gpSi8"></script>
                                    <div class="mapouter" style="height: 300px;">
                                        <div class="overlay"></div>
                                        <div class="gmap_canvas">
                                            <iframe id="gmap_canvas" scrolling="no" marginheight="0" marginwidth="0"
                                                data-src="https://maps.google.com/maps?q=Museum%20of%20Photographic%20Arts%2C%201649%20El%20Prado%2C%20San%20Diego%2C%20CA%2092101%2C%20United%20States&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                                                class=" lazyloaded"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                width="100%" height="100%" frameborder="0"></iframe>
                                        </div>
                                        <style>
                                            .mapouter {
                                                overflow: hidden;
                                                height: 100%;
                                                width: 100%;
                                            }

                                            .gmap_canvas {
                                                background: none !important;
                                                height: 100%;
                                                width: 100%;
                                            }
                                        </style>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8" style="display: flex; flex-direction: row;">
                                <div class="contact-form" style="flex: 1;">
                                    <div class="at-above-post-page addthis_tool" data-url="https://mopa.org/contact/">
                                    </div>
                                    <div class="row"><br>
                                        <div class="col-sm-4">
                                            <p></p>
                                            <h6>Membership</h6>
                                            <p><strong>Membership</strong><br>
                                                <a href="mailto:member@mopa.org">member@mopa.org</a>
                                            </p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p></p>
                                            <h6>Rentals</h6>
                                            <p><strong>Melissa Pfieffer</strong><br>
                                                <a href="mailto:events@mopa.org">events@mopa.org</a>
                                            </p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p></p>
                                            <h6>Press Inquiries</h6>
                                            <p><strong>Arturo Garcia</strong><br>
                                                <a href="mailto:pr@mopa.org">pr@mopa.org</a>
                                            </p>
                                        </div><br>
                                    </div>
                                    <p></p>
                                    <center><a href="https://mopa.org/staff/" target="_self"
                                            class="btn btn-default btn-lg">Staff Directory</a></center>&nbsp;<p></p>
                                    <p>&nbsp;</p>
                                    <p></p>
                                    <center></center><br>
                                    <div role="form" class="wpcf7" id="wpcf7-f972-p32-o1" dir="ltr" lang="en-US">
                                        <div class="screen-reader-response">
                                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                                            <ul></ul>
                                        </div>
                                        <form action="/contact/#wpcf7-f972-p32-o1" method="post" class="wpcf7-form init"
                                            novalidate="novalidate" data-status="init">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <span class="wpcf7-form-control-wrap contact-name"><input
                                                                type="text" name="contact-name" value="" size="40"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                aria-required="true" aria-invalid="false"
                                                                placeholder="Name*"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <span class="wpcf7-form-control-wrap contact-email"><input
                                                                type="email" name="contact-email" value="" size="40"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control"
                                                                aria-required="true" aria-invalid="false"
                                                                placeholder="Email address*"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <span class="wpcf7-form-control-wrap contact-phone"><input
                                                                type="tel" name="contact-phone" value="" size="40"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel form-control"
                                                                aria-invalid="false" placeholder="Phone Number"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <span class="wpcf7-form-control-wrap contact-message"><textarea
                                                                name="contact-message" cols="40" rows="4"
                                                                class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control"
                                                                aria-required="true" aria-invalid="false"
                                                                placeholder="Brief Message*"></textarea></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="submit" value="Send"
                                                            class="wpcf7-form-control wpcf7-submit btn btn-default btn-lg"><span
                                                            class="ajax-loader"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                                        </form>
                                    </div>
                                    <p></p>
                                    <div class="at-below-post-page addthis_tool" data-url="https://mopa.org/contact/">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
@endsection