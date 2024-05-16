<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Arox contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <link rel="icon" href="{{ asset('assets/images/brand/favicon.png') }}" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/brand/favicon.png') }}"/>
    <title>Arox</title>

    <!-- DASHBOARD CSS -->
    <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet">

    <!-- COLOR-THEMES CSS -->
    <link href="{{ asset('assets/css/color-themes.css') }}" rel="stylesheet"/>

    <!-- Sidemenu css -->
    <link href="{{ asset('assets/plugins/side-menu/full-sidemenu.css') }}" rel="stylesheet" />

    <!-- Sidebar Accordions css -->
    <link href="{{ asset('assets/plugins/sidemenu-responsive-tabs/css/easy-responsive-tabs.css') }}" rel="stylesheet">

    <!-- Perfect scroll bar css-->
    <link href="{{ asset('assets/plugins/pscrollbar/perfect-scrollbar.css') }}" rel="stylesheet" />

    <!-- SINGLE-PAGE CSS -->
    <link href="{{ asset('assets/plugins/single-page/css/main.css') }}" rel="stylesheet" type="text/css">

    <!--C3.JS CHARTS PLUGIN -->
    <link href="{{ asset('assets/plugins/charts-c3/c3-chart.css') }}" rel="stylesheet"/>

    <!-- CUSTOM SCROLL BAR CSS-->
    <link href="{{ asset('assets/plugins/mcustomscrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet"/>

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet"/>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body class="app sidebar-mini rtl">
    
    @yield('content')

    <!-- JQUERY SCRIPTS -->
    <script src="{{ asset('assets/js/vendors/jquery-3.2.1.min.js') }}"></script>

    <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{ asset('assets/js/vendors/bootstrap.bundle.min.js') }}"></script>

    <!-- SPARKLINE -->
    <script src="{{ asset('assets/js/vendors/jquery.sparkline.min.js') }}"></script>

    <!-- CHART-CIRCLE -->
    <script src="{{ asset('assets/js/vendors/circle-progress.min.js') }}"></script>

    <!-- RATING STAR -->
    <script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>

    <!-- INPUT MASK PLUGIN-->
    <script src="{{ asset('assets/plugins/input-mask/jquery.mask.min.js') }}"></script>

    <!-- CUSTOM SCROLL BAR JS-->
    <script src="{{ asset('assets/plugins/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>

    <!-- Left CUSTOM JS-->
    <script src="{{ asset('assets/js/left-custom.js') }}"></script>

    <!-- CUSTOM JS-->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script src="{{ asset('js/app.js') }}"></script>



</body>
</html>