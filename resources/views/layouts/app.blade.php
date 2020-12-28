<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Sistem Informasi Akademik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Sistem Informasi Akademik" name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- third party css -->
    <link href="{{ url('assets/css/vendor/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- App css -->
    <link href="{{ url('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/css/app-creative.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{ url('assets/css/app-creative-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style" />

    <style>
        body[data-layout=topnav] .container-fluid,
        body[data-layout=topnav] .container-lg,
        body[data-layout=topnav] .container-md,
        body[data-layout=topnav] .container-sm,
        body[data-layout=topnav] .container-xl {
            max-width: 100%;
        }

    </style>
    @stack('css-plugin')
    @stack('css')

</head>

<body class="loading" data-layout="topnav"
    data-layout-config='{"layoutBoxed":false,"darkMode":false,"showRightSidebarOnStart": true}'>

    <!-- Begin page -->
    <div class="wrapper">
        <div class="content-page">
            <div class="content">

                @include('layouts.components.navbar')
                @yield('content')
            </div>
        </div>
    </div>
    <!-- END wrapper -->
    @include('layouts.components.footer')
    <!-- bundle -->
    <script src="{{ url('assets/js/vendor.min.js') }}"></script>
    <script src="{{ url('assets/js/app.min.js') }}"></script>

    <!-- third party js -->
    <script src="{{ url('assets/js/vendor/apexcharts.min.js') }}"></script>
    <script src="{{ url('assets/js/vendor/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ url('assets/js/vendor/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="{{ url('assets/js/pages/demo.dashboard.js') }}"></script>
    <!-- end demo js-->

    @stack('js-plugin')
    @stack('script')
</body>

</html>
