<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <title>Edenia</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/apple-touch-icon.png') }}/">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('/site.webmanifest')}}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <meta property="og:image:height" content="459">
    <meta property="og:image:width" content="877">
    <meta property="og:title" content="Edenia">
    <meta property="og:description" content="Les potagers collectifs connect&eacute;s">
    <meta property="og:url" content="http://www.edenia.be">
    <meta property="og:image" content="{{asset('/social/og-image.jpg')}}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    @if(!Request::is('site'))

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @endif
    @yield('styleSite')
    @yield('styleApp')
</head>
<body class="@yield('homeBody')">
        @yield('header')
        @yield('content')
</body>
<!-- Scripts -->
@if(!Request::is('login'))
<script src="{{ asset('js/app.js') }}" defer></script>
@endif
@yield('bingmap_script')
@yield('scripts')
</html>
