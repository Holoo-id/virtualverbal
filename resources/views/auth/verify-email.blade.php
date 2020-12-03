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
        
        <link rel="stylesheet" href="{{ asset('/frontend/assets/css/style.min.css')}}">
        <link rel="stylesheet" href="{{ asset('/frontend/assets/font-awesome/css/all.css')}}">

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
        <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
            @csrf
                <button type="submit" class="button big blue">
                    {{ __('click here to request another') }}
                    <div class="button-ornament">
                        <svg class="arrow-icon medium">
                            <use xlink:href="#svg-arrow-medium"></use>
                        </svg>
                        <svg class="cross-icon small">
                            <use xlink:href="#svg-cross-small"></use>
                        </svg>
                    </div>
                </button>
            <button type="submit"
                    class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>
    </layout>
