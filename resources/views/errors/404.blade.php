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

    <body>
        <div class="layout-content-full v3">
            <div class="error-display grid-limit">
                <figure class="error-img liquid">
                    <img src="{{ asset('/frontend/assets/img/other/error-img.png')}}" alt="error-img">
                </figure>
                <p class="error-title">Error 404</p>
                <p class="error-subtitle">Halaman tidak ditemukan</p>
            </div>
        </div>

        <script src="{{ asset('/frontend/assets/js/script.js') }}"></script>
        <script src="{{ asset('/frontend/assets/js/app.bundle.min.js') }}"></script>
    </body>

</html>