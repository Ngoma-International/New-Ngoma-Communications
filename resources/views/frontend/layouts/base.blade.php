<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns:livewire="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="beshleyua" />
    <title>{{ config('app.name') }}| @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
    <livewire:styles />
</head>
<body>
    <div id="canvas">
        <div id="box_wrapper">
            @include('frontend.shared.header')
            @yield('content')
            @include('frontend.shared.footer')
        </div>
    </div>
    <script src="{{ asset('assets/js/compressed.js') }}"></script>
    <script src="{{ asset('frontend/js/app.js') }}"></script>
    <livewire:scripts />
</body>
</html>
