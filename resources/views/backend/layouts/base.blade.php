<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name') }} | @yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="icon" href="" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/icon/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/icon/icofont/css/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/icon/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/bower_components/chartist/dist/chartist.css') }}" type="text/css" media="all">
    <link href="{{ asset('admin/assets/css/svg-weather.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/plugins/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/font-awesome.min.css') }}">
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

    <script src="{{ asset('admin/bower_components/Jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/tether/dist/js/tether.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('admin/bower_components/jquery.nicescroll/dist/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/classie/classie.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/notification/js/bootstrap-growl.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/jquery-sparkline/dist/jquery.sparkline.js') }}"></script>
    <script src="{{ asset('admin/bower_components/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/countdown/js/jquery.counterup.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/charts/echarts/js/echarts-all.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/js/main.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/pages/dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/pages/elements.js') }}"></script>
    <script src="{{ asset('admin/assets/js/menu.min.js') }}"></script>

    <script src="{{ asset('admin/bower_components/Waves/dist/waves.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('admin/bower_components/jquery.nicescroll/dist/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/classie/classie.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/notification/js/bootstrap-growl.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/data-table/js/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/data-table/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/data-table/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/assets/pages/data-table.js') }}"></script>
</body>
</html>
