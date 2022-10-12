<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngoma-communication | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('backend/css/dashlite.css') }}" data-turbolinks-track="true">
    <meta name="turbolinks-cache-control" content="no-cache">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap"
        rel="stylesheet">
</head>
<body class="nk-body bg-white npc-default pg-auth">
    <div class="nk-app-root">
        <div class="nk-main">
            <div class="nk-wrap nk-wrap-nosidebar">
                <div class="nk-content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('backend/js/bundle.js') }}" data-turbolinks-track="true"></script>
    <script src="{{ asset('backend/js/scripts.js') }}" data-turbolinks-track="true"></script>
</body>
</html>
