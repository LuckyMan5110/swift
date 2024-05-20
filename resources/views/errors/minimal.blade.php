<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="SWIFT DOCS PRO" />
    <meta name="author" content="" />
    <title>SWIFT DOCS PRO</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/image/favicon.ico') }}" />


    <!-- DASHBOARD CSS -->
    <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet">

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <!-- Custom CSS-->
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet">

</head>
<body class="app sidebar-mini rtl overflow-hidden">
    
    @yield('content')

    <!-- jquery 3.5.1-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Core theme JS-->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

</body>
</html>