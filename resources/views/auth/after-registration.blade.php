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

		<title>One more step..</title>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
		<!-- vendor css -->
		<link href="{{ asset('/backend/lib/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
		<link href="{{ asset('/backend/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
		<link href="{{ asset('/backend/lib/typicons.font/typicons.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('/frontend/assets/css/style.min.css')}}">
        <link rel="stylesheet" href="{{ asset('/frontend/assets/font-awesome/css/all.css')}}">
		<link rel="stylesheet" href="{{ asset('/backend/dist/css/app.css') }}" />

	</head>
    <body class="login">
        <style>
            .button.disabled {
                color: #8b8b8b;
                background-color: #363636;
                pointer-events: none
            }
            .button.disabled .arrow-icon {
                display: none
            }
            .button.disabled .cross-icon {
                display: block
            }
            .button.disabled:hover {
                background-color: #363636
            }
            .button.disabled:hover .button-ornament {
                background-color: #777
            }
        </style>
        <div class="content">
            <div class="container sm:px-10">
                <div class="block xl:grid grid-cols-2 gap-4">
                    <!-- BEGIN: Register Info -->
                    <div class="hidden xl:flex flex-col min-h-screen">
                        <a href="" class="-intro-x flex items-center pt-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="w-40" src="{{ asset('/frontend/assets/img/brand/logoputihvv.png')}}">
                        </a>
                        <div class="my-auto">
                            <img alt="Midone Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{{ asset('/backend/dist/images/illustration.svg')}}">
                            <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                                Satu langkah lagi untuk 
                                <br>
                                mendaftarkan akunmu.
                            </div>
                            <div class="-intro-x mt-5 text-lg text-white">Kenapa user harus daftar?</div>
                        </div>
                    </div>
                    <!-- END: Register Info -->
                    <!-- BEGIN: Register Form -->
                    <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                        <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                            <!-- <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                                Sign Up
                            </h2> -->
                            <!-- <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place</div> -->
                            <div class="intro-x mt-8">
                                    @if ($errors->any())
                                        <p class="text-tag important red">    
                                        @foreach ($errors->all() as $error)
                                            @if ($error == "The username has already been taken.")
                                                Username sudah terpakai!
                                            @elseif($error == "The image must be a file of type: image\/jpeg, image\/png.")
                                                Mohon gunakan file image dengan format jpeg atau png saja! 
                                            @else
                                                {{$error}}
                                            @endif
                                        @endforeach
                                        </p>
                                        <br>
                                    @endif
                                <form data-single="true" data-file-types="image/jpeg|image/png|image/jpg" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" class="intro-x login__input input input--lg border border-gray-300 block" placeholder="Username" name="username" id="register_username" required>
                                    <input type="file" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Your Photo" name="image" id="register_image" accept="image/*">
                                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                                    <button type="submit" class="button fb full disabled" id="register_btn" disabled>Submit</button>
                                </div>    
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- END: Register Form -->
                </div>
            </div>
        </div>

        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="{{ asset('/backend/dist/js/app.js') }}"></script>
        <script src="{{asset('/frontend/assets/js/jquery-3.5.1.min.js')}}"></script>
        <script>
            $(document).ready(function(){ 
                function validateRegisterButton(){
                    var buttonRegisDisabled = $('#register_username').val().trim() === '' || $('#register_image').get(0).files.length === 0;
                    $('#register_btn').prop('disabled', buttonRegisDisabled);
                    if (buttonRegisDisabled) {
                        $('#register_btn').addClass('disabled');
                    }
                    else{
                        $('#register_btn').removeClass('disabled');
                    }
                }
                $('#register_username').on('keyup', validateRegisterButton);
                $('#register_image').on('mouseenter', validateRegisterButton);
                $('#register_image').on('mouseleave', validateRegisterButton);
                $('#register_image').on('change', validateRegisterButton);
            });
        </script>
	</body>
</html>