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
        <layout class="content-full v3">
            <div style="margin-top: -350px;" class="error-display grid-limit">
                <p class="error-title">Yeay..</p>
                <p class="error-subtitle">Akunmu sudah terdaftar</p>
                <p class="error-text">Cek <a class="highlight" href="">emailmu</a> untuk verifikasi</p>
            </div>
            <div style="margin-bottom:60px;" class="section-actions">
                <!-- BUTTON -->
                <a href="#" class="button blue">
                    Cek Email
                    <!-- BUTTON ORNAMENT -->
                    <div class="button-ornament">
                    <!-- ARROW ICON -->
                    <svg class="arrow-icon medium">
                        <use xlink:href="#svg-arrow-medium"></use>
                    </svg>
                    <!-- /ARROW ICON -->

                    <!-- CROSS ICON -->
                    <svg class="cross-icon small">
                        <use xlink:href="#svg-cross-small"></use>
                    </svg>
                    <!-- /CROSS ICON -->
                    </div>
                    <!-- /BUTTON ORNAMENT -->
                </a>
                <!-- /BUTTON -->
            </div>
        </layout>
        <script src="{{ asset('/frontend/assets/js/script.js') }}"></script>
        <script src="{{ asset('/frontend/assets/js/app.bundle.min.js') }}"></script>
    </body>

</html>