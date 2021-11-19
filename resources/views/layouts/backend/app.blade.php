<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="#">
    <meta name="author" content="#">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/backend/images/favicon.ico') }}">

    <!-- App title -->
    <title>@yield('title')</title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ asset('assets/backend/plugins/morris/morris.css') }}">

    <!-- Switchery css -->
    <link href="{{ asset('assets/backend/plugins/switchery/switchery.min.css') }}" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App CSS -->
    <link href="{{ asset('assets/backend/css/style.css') }}" rel="stylesheet" type="text/css" />

    <!-- Modernizr js -->
    <script src="{{ asset('assets/backend/js/modernizr.min.js') }}"></script>
    
</head>
<body class="fixed-left">
    
    <!-- Begin page -->
    <div id="wrapper">

        @include('layouts.backend.partials.header')

        @include('layouts.backend.partials.left-sidebar')

        @yield('main-section')

        @include('layouts.backend.partials.right-sidebar')

        @include('layouts.backend.partials.footer')

    </div>
    <!-- END wrapper -->

    <script>
        var resizefunc = [];
    </script>
    <!-- jQuery  -->
    <script src="{{ asset('assets/backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/detect.js') }}"></script>
    <script src="{{ asset('assets/backend/js/fastclick.js') }}"></script>
    <script src="{{ asset('assets/backend/js/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('assets/backend/js/waves.js') }}"></script>
    <script src="{{ asset('assets/backend/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('assets/backend/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/switchery/switchery.min.js') }}"></script>

    <!--Morris Chart-->
    <script src="{{ asset('assets/backend/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/raphael/raphael.min.js') }}"></script>

    <!-- Counter Up  -->
    <script src="{{ asset('assets/backend/plugins/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/counterup/jquery.counterup.js') }}"></script>

    <!-- Page specific js -->
    <script src="{{ asset('assets/backend/pages/jquery.dashboard.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/backend/js/jquery.core.js') }}"></script>
    <script src="{{ asset('assets/backend/js/jquery.app.js') }}"></script>
</body>
</html>