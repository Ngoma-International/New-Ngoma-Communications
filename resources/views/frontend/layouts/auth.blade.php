<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name') }} | @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/icon/flag-icons/css/flag-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/bower_components/Waves/dist/waves.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/color/color-1.min.css') }}" id="color"/>
</head>
<body>
<section class="login p-fixed d-flex text-center">
    <div class="container-fluid">
        @yield('content')
    </div>
</section>

<script src="{{ asset('admin/bower_components/Jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('admin/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('admin/bower_components/tether/dist/js/tether.min.js') }}"></script>
<script src="{{ asset('admin/bower_components/Waves/dist/waves.min.js') }}"></script>
<script src="{{ asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/pages/elements.js') }}"></script>
</body>
</html>
