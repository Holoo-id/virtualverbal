<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="{{ asset('/frontend/assets/img/brand/logovv.png')}}">

		<!-- Twitter -->
		<meta name="twitter:site" content="@virtualverbal">
		<meta name="twitter:creator" content="@virtualverbal">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="Virtual Verbal">
		<meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
		<meta name="twitter:image" content="http://themepixels.me/azia/img/azia-social.png">

		<!-- Facebook -->
		<meta property="og:url" content="https://www.facebook.com/virtualverbal">
		<meta property="og:title" content="Virtual Verbal">
		<meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

		<meta property="og:image" content="http://themepixels.me/azia/img/azia-social.png">
		<meta property="og:image:secure_url" content="http://themepixels.me/azia/img/azia-social.png">
		<meta property="og:image:type" content="image/png">
		<meta property="og:image:width" content="1200">
		<meta property="og:image:height" content="600">

		<!-- Meta -->
		<meta name="author" content="Virtual Verbal">
		<meta name="description" content="Virtual Verbal adalah portal berita Games, Event, dan E-Sport">
		<meta name="keywords" content="virtual verbal, vv, portal game news">
        
        <link rel="stylesheet" href="{{ asset('/frontend/assets/css/style.min.css')}}">
        <link rel="stylesheet" href="{{ asset('/frontend/assets/font-awesome/css/all.css')}}">
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
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v9.0" nonce="WMSHG28e"></script>
        
        @include('front.layouts.header')
        @yield('content')
        @include('front.layouts.footer')

        <script src="{{ asset('/frontend/assets/js/script.js') }}"></script>
        <script src="{{ asset('/frontend/assets/js/app.bundle.min.js') }}"></script>
        <script src="{{asset('/frontend/assets/js/jquery-3.5.1.min.js')}}"></script>
    </body>

</html>