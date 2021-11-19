<!DOCTYPE html>
<html lang="en" style="scroll-padding-top: 82px;">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    @stack('styles')
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/frontend/vendor/aos/aos.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">  --}}
    <link href="{{ asset('assets/frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    {{-- <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assets/frontend/css/sbi-styles.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/theme.scss.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/frontend.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/frontend/js/html2canvas.js') }}"></script>
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" media="all" />
    <link href="//cdn.shopify.com/s/files/1/1723/6189/t/4/assets/font.css?v=15251384122107553042" rel="stylesheet" type="text/css" media="all" />

    <style>
        .sub-nav-back-mobile-membership {
            padding: 20px 15px;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-family: 'maax', sans-serif;
            font-weight: 700;
            color: #4f4f4f;
        }

        .footer .footer-links-container>ul>li a {
            color: #fff;
        }

        .footer .navbar .navbar-nav>li>a {
            color: #fff;
        }

        .footer .footer-links-container>ul>li a:hover,
        .footer .footer-links-container>ul>li a:focus {
            color: #6b6b6b;
        }

        .footer .navbar .navbar-nav>li>a:hover,
        .footer .navbar .navbar-nav>li>a:focus {
            color: #6b6b6b;
        }

        .footer .terms-container>ul>li {
            color: #fff;
        }

        .footer-email::-webkit-input-placeholder {
            color: #fff !important;
        }

        .content .tile .img-overlay .contents.resources .colored-title {
            margin: .5em .25em;
        }

        .category-titles {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
    </style>
</head>
<body class="archive post-type-archive post-type-archive-exhibit tribe-js hfeed has-mtsnb" data-nav-state="expanded"
data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="0">

    <!--Header Start -->
    @include('layouts.frontend.partials.header')
    <!--Header End -->

    

    <!--Main Start -->
    @yield('main-section')
    <!--main End -->

    <!--Footer Start -->
    @include('layouts.frontend.partials.footer')
    <!--Footer End -->

 

    <script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function name() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("nav-sub").style.marginTop = "116px";
                document.getElementById("main-nav").style.marginTop = "0";
            } else {
                document.getElementById("nav-sub").style.marginTop = "-100px";
                document.getElementById("main-nav").style.marginTop = "-130px";
            }
            prevScrollpos = currentScrollPos;
        }

    </script>
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jqueryui.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/navigation.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('assets/frontend/js/navigationMobile.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/frontend.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    @stack('scripts')

    <script>
        $(document).ready(function () {
            $(".navbar-toggle").click(function () {
                $("#main-nav-mobile").css("display", "block");
            });
            $(".btn-close").click(function () {
                $("#main-nav-mobile").css("display", "none");
            });
            $(".main-nav-search").click(function () {
                $(".main-nav-search-form").css("display", "block");
                $("#mopa-main-menu").css("display", "none");
            });
            if($(window).innerWidth() <= 1199) {
                $(".input-group-btn").click(function () {
                $("#mopa-main-menu").css("display", "none");
                    });
                } else {
                    $(".btn-close").click(function () {
                        $(".main-nav-search-form").css("display", "none");
                        $("#mopa-main-menu").css("display", "block");
                    });
                }
        });
    </script>
    @stack('body-scripts')
</body>
</html>


