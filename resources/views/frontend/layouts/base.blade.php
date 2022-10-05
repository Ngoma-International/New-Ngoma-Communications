<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="beshleyua" />
    <title>{{ config('app.name') }}| @yield('title')</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/theme-colors/green.css') }}" />
</head>
<body>
    <div class="page">
        <div class="preloader">
            <div class="centrize full-width">
                <div class="vertical-center">
                    <div class="spinner">
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                    </div>
                </div>
            </div>
        </div>

        @include('frontend.shared.header')
        <div class="container">
            @yield('content')
        </div>

        <div class="lines-grid">
            <div class="row">
                <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
                <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3">
                    <div class="lines">
                        <div class="line-1"></div>
                        <div class="line-2" style="animation-delay: 10s;"></div>
                    </div>
                </div>
                <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3">
                    <div class="lines">
                        <div class="line-1"></div>
                    </div>
                </div>
                <div class="col col-m-0 col-t-0 col-d-0 col-d-lg-3">
                    <div class="lines">
                        <div class="line-1"></div>
                        <div class="line-2" style="animation-delay: 0s;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/scripts.min.js') }}"></script>
</body>
</html>
