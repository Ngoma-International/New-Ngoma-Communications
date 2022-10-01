<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name') }} | @yield('title')</title>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <link rel="stylesheet" type="text/css" href="assets/icon/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bower_components/chartist/dist/chartist.css" type="text/css" media="all">
    <link href="assets/css/svg-weather.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    @yield('styles')
</head>

<body class="sidebar-mini fixed">
    <div class="wrapper">
        @include('backend.shared.header')
        @include('backend.shared.sidebar')
        <div class="content-wrapper">
            <div class="container-fluid">
               @yield('content')
            </div>
        </div>
    </div>

<script src="../bower_components/Jquery/dist/jquery.min.js"></script>
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<script src="../bower_components/tether/dist/js/tether.min.js"></script>
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="../bower_components/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
<script src="../bower_components/classie/classie.js"></script>
<script src="assets/plugins/notification/js/bootstrap-growl.min.js"></script>
<script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.js"></script>
<script src="../bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="assets/plugins/countdown/js/jquery.counterup.js"></script>
<script src="assets/plugins/charts/echarts/js/echarts-all.js"></script>
<script src="../../../code.highcharts.com/highcharts.html"></script>
<script src="../../../code.highcharts.com/modules/exporting.html"></script>
<script src="../../../code.highcharts.com/highcharts-3d.html"></script>
<script type="text/javascript" src="assets/js/main.min.js"></script>
<script type="text/javascript" src="assets/pages/dashboard.js"></script>
<script type="text/javascript" src="assets/pages/elements.js"></script>
<script src="assets/js/menu.min.js"></script>
</body>
</html>
