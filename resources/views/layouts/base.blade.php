<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="icon" href="{{ asset('/frontend/assets/img/brand/logovv.png')}}">
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
    <style>
        .banner-slider .slider-item-1 {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url("{{ asset('/frontend/assets/img/posts/01.jpg')}}") no-repeat center;
            background-size: cover
        }
        .banner-slider .slider-item-2 {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url("{{ asset('/frontend/assets/img/posts/02.jpg')}}") no-repeat center;
            background-size: cover
        }
        .banner-slider .slider-item-3 {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url("{{ asset('/frontend/assets/img/posts/03.jpg')}}") no-repeat center;
            background-size: cover
        }
        .banner-slider .slider-item-4 {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url("{{ asset('/frontend/assets/img/posts/04.jpg')}}") no-repeat center;
            background-size: cover
        }
    </style>

    <body>
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')

        <script src="{{ asset('/frontend/assets/js/script.js') }}"></script>
        <script src="{{ asset('/frontend/assets/js/app.bundle.min.js') }}"></script>
    </body>

</html>