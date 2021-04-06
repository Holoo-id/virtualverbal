<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        {!! SEOMeta::generate() !!}
        {!! OpenGraph::generate() !!}
        {!! Twitter::generate() !!}
        {!! JsonLdMulti::generate() !!}

        <!-- Facebook -->
        <meta property="fb:app_id" content="{{ config('services.facebook.client_id') }}" />

		<link rel="icon" href="{{ asset('/frontend/assets/img/brand/logovv.png')}}">
        
        <link rel="stylesheet" href="{{ asset('/frontend/assets/css/style.min.css')}}">
        <link rel="stylesheet" href="{{ asset('/frontend/assets/font-awesome/css/all.css')}}">
    </head>

    <body>
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                appId      : {{ config('services.facebook.client_id') }},
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
                js.src = "https://connect.facebook.net/id_ID/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <!-- // <div id="fb-root"></div>
         <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v9.0" nonce="WMSHG28e"></script> -->
        
        @include('front.layouts.header')
        @yield('content')
        @include('front.layouts.footer')
        
        {{-- Script untuk live news marquee Start --}}
            <script>
                function getDataSlide(){
                    let data = [];
                    @foreach($live_news as $live_data)
                        data.push(
                            {
                                title:'<a class="link">{{ $live_data->judul }} : </a>',
                                content:'{{ $live_data->sub_judul }}',
                                separator:'<span class="separator"><span class="separator-bar">/</span><span class="separator-bar">/</span></span>'
                            },
                        );          
                    @endforeach
                    return data
                }
            </script>
        {{-- Script untuk live news marquee Finish --}}
        
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        <script src="https://www.line-website.com/social-plugins/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
        <script src="{{ asset('/frontend/assets/js/app.bundle.min.js') }}"></script>
        <script src="{{ asset('/frontend/assets/js/jquery-3.5.1.min.js')}}"></script>
        <script>
            $(document).ready(function(){ 
             // Auth Error Start
                var error_txt;
                $("#forValidationFail").click(function(){
                    $('#forValidationFail').css('opacity','0');
                    $('#forValidationFail').css('visibility','hidden');
                    $('#popup-login-fail').css('translate','(0px, 100px)');
                    $('#popup-login-fail').css('opacity','0');
                    $('#popup-login-fail').css('visibility','hidden');
                    $('#popup-register-fail').css('translate','(0px, 100px)');
                    $('#popup-register-fail').css('opacity','0');
                    $('#popup-register-fail').css('visibility','hidden');
                });
                @if ($errors->any())
                    $('#forValidationFail').css('opacity','1');
                    $('#forValidationFail').css('visibility','visible');
                    @foreach($errors->all() as $error)
                        error_div = document.createElement("div");
                        error_div.className += "information-box error";
                        error_div.id = "error-log";
                        error_div.innerHTML = "<div class='information-box-icon'><svg class='cross-cb-icon'><use xlink:href='#svg-cross-cb-small'></use></svg></div>";
                        error_txt = document.createElement("p");
                        error_txt.className += "information-box-message";
                        @if ($error == "Email atau Password anda salah!")
                            $('#popup-login-fail').css('opacity','1');
                            $('#popup-login-fail').css('visibility','visible');
                            $('#popup-login-fail').css('translate','(0px, 0px)');
                            error_txt.innerHTML = "{{$error}}";
                            $('#login-form').before(error_div);
                            $('#error-log').append(error_txt);
                            @break
                        @elseif($error == "The password must be at least 8 characters and contain at least one number.")
                            $('#popup-register-fail').css('opacity','1');
                            $('#popup-register-fail').css('visibility','visible');
                            $('#popup-register-fail').css('translate','(0px, 0px)');                                  
                            error_txt.innerHTML = "Password minimal memiliki satu angka";
                            $('#register-form').before(error_div);
                            $('#error-log').append(error_txt);
                            $('#error-log-03').show();
                            @break
                        @elseif($error == "The password must be at least 8 characters.")
                            $('#popup-register-fail').css('opacity','1');
                            $('#popup-register-fail').css('visibility','visible');
                            $('#popup-register-fail').css('translate','(0px, 0px)');                                  
                            error_txt.innerHTML = "Password minimal delapan karakter";
                            $('#register-form').before(error_div);
                            $('#error-log').append(error_txt);
                            $('#error-log-04').show();
                            @break
                        @else
                            $('#popup-register-fail').css('opacity','1');
                            $('#popup-register-fail').css('visibility','visible');
                            $('#popup-register-fail').css('translate','(0px, 0px)');
                            error_txt.innerHTML = "{{$error}}";
                            $('#register-form').before(error_div);
                            $('#error-log').append(error_txt);
                                @if($error == "password yang anda masukkan tidak sama.")
                                $('#error-log-05').show();
                                @else
                                $('#error-log-02').show();
                                @endif
                            @break
                        @endif
                    @endforeach
                    // document.getElementById("error-log").appendChild(error_txt);
                @endif
             // Auth Error Finish

             // Button Disabled Start 
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

                function validateLoginButtonFail() {
                    var buttonLoginDisabled = $('#login_email_fail').val().trim() === '' || $('#login_pwd_fail').val().trim() === '';
                    $('#login_btn_fail').prop('disabled', buttonLoginDisabled);
                    if (buttonLoginDisabled) {
                        $('#login_btn_fail').addClass('disabled');
                    }
                    else{
                        $('#login_btn_fail').removeClass('disabled');
                    }
                }
                $('#login_email_fail').on('keyup', validateLoginButtonFail);
                $('#login_pwd_fail').on('keyup', validateLoginButtonFail);

                function validateRegisterButton() {
                    var buttonRegisterDisabled = $('#register_email').val().trim() === '' || 
                                                 $('#register_pwd').val().length < 8 || 
                                                 $('#register_pwd_repeat').val().length < 8;
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

                function validateRegisterButtonFail() {
                    var buttonRegisterDisabled = $('#register_email_fail').val().trim() === '' || 
                                                 $('#register_pwd_fail').val().length < 8 || 
                                                 $('#register_pwd_repeat_fail').val().length < 8;
                    $('#register_btn_fail').prop('disabled', buttonRegisterDisabled);
                    if (buttonRegisterDisabled) {
                        $('#register_btn_fail').addClass('disabled');
                    }
                    else{
                        $('#register_btn_fail').removeClass('disabled');
                    }
                }
                $('#register_email_fail').on('keyup', validateRegisterButtonFail);
                $('#register_pwd_fail').on('keyup', validateRegisterButtonFail);
                $('#register_pwd_repeat_fail').on('keyup', validateRegisterButtonFail);
             // Button Disabled Finish

            });
            //autoload search result
            function loadMore(page) {
                $.ajax({
                    url: '?page=' + page,
                    type: 'get',
                    beforeSend: function() {
                        $(".load-more-wrap").show();
                    }
                })
                .done(function(data) {
                    if (data.html == " ") {
                        $(".load-more-wrap").html("No more records found");
                        return;
                    }
                    $(".load-more-wrap").hide();
                    $("#post-data").append(data.html);
                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    alert("Server not responding");
                });
            }
            var page = 1;
            $(window).scroll(function() {
                if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
                    page++;
                    loadMore(page);
                }
            });

        </script>
    </body>

</html>