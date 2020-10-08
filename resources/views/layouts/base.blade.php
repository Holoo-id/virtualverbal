<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="icon" href="{{ asset('/frontend/assets/assets/img/brand/logovv.png')}}">
        <link rel="stylesheet" href="{{ asset('/frontend/assets/css/style.min.css')}}">
        <link rel="stylesheet" href="{{ asset('/frontend/assets/font-awesome/css/all.css')}}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="author" content="Virtual Verbal">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Virtual Verbal adalah portal berita Games, Event, dan E-Sport">
        <meta name="keywords" content="virtual verbal, vv, portal game news">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Virtual Verbal - Situs Media Informasi dan Berita Tentang Games, E-Sports, Teknologi, maupun Pop Culture.</title>
    </head>

    <body>
        @include('layouts.header')
        @yield('content')

        <script src="{{ asset('/frontend/assets/js/script.js') }}"></script>
        <script src="{{ asset('/frontend/assets/js/app.bundle.min.js') }}"></script>
    </body>

</html>