<!DOCTYPE html>
<html lang="en" xmlns:liviwire="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{ config('app.name') }}  | @yield('title') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Enabling leadership skills for personal and business growth" />
    <meta name="keywords" content="ngoma communications, leadership, business, personal, growth, change, consulting,  " />
    @include('app.component._favicon')
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/theme-colors/green.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/theme-colors/modal-video.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/app.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b8977c7e2a.js"></script>
    <link rel="shortcut icon" href="images/logo.png">
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '345083379773116');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=345083379773116&ev=PageView&noscript=1"  alt=""/>
    </noscript>
    <livewire:styles />
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
    @include('app.shared.header')
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ asset('frontend/js/scripts.min.js') }}"></script>
    <script src="{{ asset('frontend/js/modal-video.min.js') }}"></script>
    <script src="{{ asset('frontend/js/app.js') }}"></script>
    <livewire:scripts />
</body>
</html>
