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

		<title>Virtual Admin</title>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
		<!-- vendor css -->
		<link href="{{ asset('/backend/lib/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
		<link href="{{ asset('/backend/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
		<link href="{{ asset('/backend/lib/typicons.font/typicons.css')}}" rel="stylesheet">

		<link rel="stylesheet" href="{{ asset('/backend/dist/css/app.css') }}" />

	</head>

	<body class="app">
		<div class="container">
            <!-- BEGIN: Error Page -->
            <div class="error-page flex flex-col lg:flex-row items-center justify-center h-screen text-center lg:text-left">
                <div class="-intro-x lg:mr-20">
                    <img alt="Midone Tailwind HTML Admin Template" class="h-48 lg:h-auto" src="{{ asset('/backend/dist/images/error-illustration.svg') }}">
                </div>
                <div class="text-white mt-10 lg:mt-0">
                    <div class="intro-x text-6xl font-medium">Error 401</div>
                    <div class="intro-x text-xl lg:text-3xl font-medium">Oops. This page has gone missing.</div>
                    <!-- <div class="intro-x text-lg mt-3">You may have mistyped the address or the page may have moved.</div> -->
                </div>
            </div>
            <!-- END: Error Page -->
        </div>

		<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=['your-google-map-api']&libraries=places"></script>
		<script src="{{ asset('/backend/dist/js/app.js') }}"></script>
		<!-- END: JS Assets-->
	</body>
</html>
