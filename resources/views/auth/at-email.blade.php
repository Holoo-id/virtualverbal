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
        <img class="mb-4" src="{{ asset('/frontend/assets/img/brand/logoputihvv.png') }}" alt="">
        <div class="content">
            <div class="font-extrabold mt-4">Hai, example@mail.com</div>
            <div class="mt-4">Selamat datang di Virtual Verbal. Bersama Dicoding mari menjadi developer yang lebih baik.</div>
            <div class="mt-4">Ayo tingkatkan kemampuan membuat aplikasi atau game dengan belajar di Academy. Tugas Academy Anda akan diulas oleh Top
            Developer.</div>
            <div class="mt-4">Uji kemampuan membuat aplikasi atau game dengan mengikuti Challenge. Perluas wawasan dan jaringan
                melalui Events.</div>
            <div class="mt-4">Sebelum memulai perjalanan di atas, mohon untuk memverifikasi akun email Anda.</div>
            <div class="mt-4"><a href="" class="text-theme-1 block font-normal">Verifikasi Akun Anda</a></div>
            <div class="mt-4">Atau salin link berikut: <a href="" class="text-theme-1 block font-normal">https://www.dicoding.com/usermailverification/379679/f6523f6942a39bf84f116a22bb6de7d54b0384f6</a></div>
            <div class="mt-4">Selamat bergabung dan berkarya!</div>
            <div class="mt-4">Virtual Verbal.</div>
            <div class="mt-4">PS. Dengan menyelesaikan Kelas di Akademi, memenangkan Challenge dan menghadiri Event, Anda dapat memperoleh point.
            Point ini dapat Anda tukarkan dengan beragam hadiah yang ada di katalog Reward kami.</div>
        </div>

        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=['your-google-map-api']&libraries=places"></script>
		<script src="{{ asset('/backend/dist/js/app.js') }}"></script>
	</body>
</html>
