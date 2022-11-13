<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="js">
<head>
    <meta charset="utf-8">
    <meta name="author" content="scott tresor">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Une partie d'administration pour la gestion d'un">
    <link rel="shortcut icon" href="{{ asset('frontend/images/icon.png') }}">
    <title>Ngoma-Communication | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('backend/css/app.css') }}">
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    @yield('styles')
    <livewire:styles />
</head>

<body class="nk-body bg-lighter npc-default has-sidebar no-touch nk-nio-theme ui-bordered light-mode">
<div class="nk-app-root">
    <div class="nk-main">
        @include('admin.component.sidebar')
        <div class="nk-wrap">
            @include('admin.component.header')
            <div class="nk-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            @include('admin.shared._footer')
        </div>
    </div>
</div>
<script src="{{ asset('backend/js/bundle.js') }}" data-turbolinks-track="true"></script>
<script src="{{ asset('backend/js/scripts.js') }}" data-turbolinks-track="true"></script>
<script src="{{ asset('backend/js/app.js') }}" data-turbolinks-track="true"></script>
<livewire:scripts />
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<x-livewire-alert::scripts />
@include('sweetalert::alert')
@yield('scripts')
</body>

</html>
