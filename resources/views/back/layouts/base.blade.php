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
		
		<link href="{{ asset('/backend/lib/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
		<link href="{{ asset('/backend/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
		<link href="{{ asset('/backend/lib/typicons.font/typicons.css')}}" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('/backend/dist/css/app.css') }}" />
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
		
		
		<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
		
		<title>Virtual Admin</title>
	</head>

	<body class="app">
		@include('back.layouts.header')
		
		<div class="content">
			@yield('content')
		</div>

		<script>
			ClassicEditor
				.create( document.querySelector( '#editor' ) )
				.catch( error => {
					console.error( error );
				} );

            // search start
            // $('#in_igdb_id').select2(
            //     placeholder: 'Pilih Game dari IGDB',
			// 	ajax: {
			// 		url: {{-- route('find-igdb') --}},
			// 		dataType: 'json',
			// 		processResults: function (games) {
			// 			return {
			// 				results:  $.map(games, function (game) {
			// 					return {
			// 						id: game.id
			// 						name: game.name,
			// 					}
			// 				})
			// 			};
			// 		},
			// 		cache: true
			// 	}
            // );
		</script>

		<!-- BEGIN: JS Assets-->
		<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=['your-google-map-api']&libraries=places"></script>
		<script src="{{ asset('/backend/dist/js/app.js') }}"></script>
		<!-- END: JS Assets-->
	</body>
</html>
