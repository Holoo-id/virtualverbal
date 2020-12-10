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
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                appId      : '209835257289966',
                cookie     : true,
                xfbml      : true,
                version    : 'v9.0'
                });
                FB.AppEvents.logPageView();   
            };
            (function(d, s, id){
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {return;}
                js = d.createElement(s); js.id = id;
                js.src = "https://connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <!-- // <div id="fb-root"></div>
         <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v9.0" nonce="WMSHG28e"></script> -->
        
        @include('front.layouts.header')
        @yield('content')
        @include('front.layouts.footer')

        <script src="{{ asset('/frontend/assets/js/script.js') }}"></script>
        <script src="{{ asset('/frontend/assets/js/app.bundle.min.js') }}"></script>
        <script src="{{asset('/frontend/assets/js/jquery-3.5.1.min.js')}}"></script>
        <script>
            $(document).ready(function(){ 
             // Auth Error Start
                var error_txt;
                @if ($errors->any())
                    $('#forValidationFail').css('opacity','1');
                    $('#forValidationFail').css('visibility','visible');
                    @foreach($errors->all() as $error)
                        error_txt = document.createElement("p");
                        error_txt.className += "text-tag red";
                        @if ($error == "These credentials do not match our records.")
                            $('#popup-login').css('opacity','1');
                            $('#popup-login').css('visibility','visible');
                            $('#popup-login').css('translate','(0px, 0px)');                                  
                            error_txt.innerHTML = "Email atau Password anda salah!";
                            $('#login-form').before(error_txt);
                        @elseif($error == "The email must be a valid email address.")
                            $('#popup-register').css('opacity','1');
                            $('#popup-register').css('visibility','visible');
                            $('#popup-register').css('translate','(0px, 0px)');                                  
                            error_txt.innerHTML = "Email yang anda masukkan tidak valid.";
                            $('#register-form').before(error_txt);
                        @elseif($error == "The email has already been taken.")
                            $('#popup-register').css('opacity','1');
                            $('#popup-register').css('visibility','visible');
                            $('#popup-register').css('translate','(0px, 0px)');                                  
                            error_txt.innerHTML = "Email telah terpakai!";
                            $('#register-form').before(error_txt);
                        @elseif($error == "The password confirmation does not match.")
                            $('#popup-register').css('opacity','1');
                            $('#popup-register').css('visibility','visible');
                            $('#popup-register').css('translate','(0px, 0px)');                                  
                            error_txt.innerHTML = "Password yang anda masukkan tidak cocok.";
                            $('#register-form').before(error_txt);
                        @else
                            error_txt.innerHTML = "{{$errors}}";
                            $('.live-news-widget-wrap').before(error_txt);
                        @endif
                    @endforeach
                @endif
                $("#forValidationFail").click(function(){
                    $('#forValidationFail').css('opacity','0');
                    $('#forValidationFail').css('visibility','hidden');
                    $('#popup-login').css('translate','(0px, 100px)');
                    $('#popup-login').css('opacity','0');
                    $('#popup-login').css('visibility','hidden');
                    $('#popup-register').css('translate','(0px, 100px)');
                    $('#popup-register').css('opacity','0');
                    $('#popup-register').css('visibility','hidden');
                });
             // Auth Error Finish

             // Button Disabled saat input kosong Start 
                function validateLoginButton() {
                var buttonLoginDisabled = $('#login_email').val().trim() === '' || $('#login_pwd').val().trim() === '';
                    $('#login_btn').prop('disabled', buttonLoginDisabled);
                    if (buttonLoginDisabled) {
                        $('#login_btn').addClass('disabled');
                    }
                    else{
                        $('#login_btn').removeClass('disabled');
                    }
                }
                $('#login_email').on('keyup', validateLoginButton);
                $('#login_pwd').on('keyup', validateLoginButton);

                function validateRegisterButton() {
                var buttonRegisterDisabled = $('#register_email').val().trim() === '' || $('#register_pwd').val().trim() === '' || $('#register_pwd_repeat').val().trim() === '';
                    $('#register_btn').prop('disabled', buttonRegisterDisabled);
                    if (buttonRegisterDisabled) {
                        $('#register_btn').addClass('disabled');
                    }
                    else{
                        $('#register_btn').removeClass('disabled');
                    }
                }
                $('#register_email').on('keyup', validateRegisterButton);
                $('#register_pwd').on('keyup', validateRegisterButton);
                $('#register_pwd_repeat').on('keyup', validateRegisterButton);
             // Button Disabled saat input kosong Finish

            });
        </script>
    </body>

</html>