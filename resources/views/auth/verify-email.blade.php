<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="{{ asset('/frontend/assets/img/brand/logovv.png')}}">
        
        <link rel="stylesheet" href="{{ asset('/frontend/assets/css/style.min.css')}}">
        <link rel="stylesheet" href="{{ asset('/frontend/assets/font-awesome/css/all.css')}}">
    </head>
    <body>
        <form class="d-inline" style="display: flex; justify-content: center; margin: 25%;" method="POST" action="{{ route('verification.send') }}">
            @csrf
            <div class="layout-item padded centered">
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
            </div>
        </form>
    </body>
</html>
