<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Configuration files --}}
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <meta name="msapplication-config" content="{{ asset('msapplication-config.xml') }}">

    {{-- Hide Safari User Interface Components & Change status bar color --}}
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#1e2a78">

    @include('layouts.head-icons')
    @include('layouts.opengraph-tags')

    <title>Фертилайф & Фертивита</title>

    {{-- Bundled stlyes --}}
    @vite('resources/css/app.css')
    @vite('resources/css/media.css')
</head>

<body>
    @include('layouts.header')

    <main class="main">
        @yield('main')
    </main>

    @include('layouts.footer')

    {{-- Bundled script --}}
    @vite('resources/js/app.js')
</body>

</html>
