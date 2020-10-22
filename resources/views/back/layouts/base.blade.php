<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<link href="{{ asset('/frontend/assets/img/brand/logovv.png')}}" rel="shortcut icon">
		<link rel="stylesheet" href="{{ asset('backend/dist/css/app.css') }}" />
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="author" content="Virtual Verbal">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="description" content="Virtual Verbal adalah portal berita Games, Event, dan E-Sport">
		<meta name="keywords" content="virtual verbal, vv, portal game news">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- <title>{{ \App\Helpers\Viverb::title() }}</title> -->
        <title>Virtual Admin</title>
	</head>
    <body class="app">
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="Virtual Verbal Admin" class="w-6" src="{{ asset('/frontend/assets/img/brand/logovv.png')}}">
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <ul class="border-t border-theme-24 py-5 hidden">
                <li>
                    <!-- <a href="{{ route('viverb-esport-be-dashboard') }}" class="menu"> -->
                    <a class="menu" href="">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Dashboard </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="folder"></i> </div>
                        <div class="menu__title"> Content <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <!-- <a href="{{ route('viverb-esport-be-content-index') }}" class="menu"> -->
                            <a class="menu" href="">
                                <div class="menu__icon"> <i data-feather="book-open"></i> </div>
                                <div class="menu__title"> Konten </div>
                            </a>
                        </li>
                        @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="archive"></i> </div>
                                <div class="menu__title"> Category <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <!-- <a href="{{ route('viverb-esport-be-category-article') }}" class="menu"> -->
                                    <a class="menu" href="">
                                        <div class="menu__icon"> <i data-feather="file-text"></i> </div>
                                        <div class="menu__title"> Article </div>
                                    </a>
                                </li>
                                <li>
                                    <!-- <a href="{{ route('viverb-esport-be-category-games') }}" class="menu"> -->
                                    <a class="menu" href="">
                                        <div class="menu__icon"> <i data-feather="play-circle"></i> </div>
                                        <div class="menu__title"> Games </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif
                        <li>
                            <!-- <a href="{{ route('viverb-esport-be-information') }}" class="menu"> -->
                            <a class="menu" href="">
                                <div class="menu__icon"> <i data-feather="hash"></i> </div>
                                <div class="menu__title"> Information </div>
                            </a>
                        </li>
                    </ul>
                </li>
                @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="users"></i> </div>
                        <div class="menu__title"> Users <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <!-- <a href="{{ route('viverb-esport-be-user-admin') }}" class="menu"> -->
                            <a class="menu" href="">
                                <div class="menu__icon"> <i data-feather="user"></i> </div>
                                <div class="menu__title"> Admin </div>
                            </a>
                        </li>
                        <li>
                            <!-- <a href="{{ route('viverb-esport-be-user-author') }}" class="menu"> -->
                            <a class="menu" href="">
                                <div class="menu__icon"> <i data-feather="user-plus"></i> </div>
                                <div class="menu__title"> Author </div>
                            </a>
                        </li>
                        <li>
                            <!-- <a href="{{ route('viverb-esport-be-user-guest') }}" class="menu"> -->
                            <a class="menu" href="">
                                <div class="menu__icon"> <i data-feather="user-x"></i> </div>
                                <div class="menu__title"> Guest </div>
                            </a>
                        </li>
                        <li>
                            <!-- <a href="{{ route('viverb-esport-be-sponsor') }}" class="menu"> -->
                            <a class="menu" href="">
                                <div class="menu__icon"> <i data-feather="user-check"></i> </div>
                                <div class="menu__title"> Sponsor </div>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                <li class="side-nav__devider my-6"></li>
                <li>
                    <!-- <a href="{{ route('forum') }}" class="menu"> -->
                    <a class="menu" href="">
                        <div class="menu__icon"> <i data-feather="message-square"></i> </div>
                        <div class="menu__title"> Forum </div>
                    </a>
                </li>
                @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                <li>
                    <!-- <a href="{{ route('viverb-esport-be-giftpoint-index') }}" class="menu"> -->
                    <a class="menu" href="">
                        <div class="menu__icon"> <i data-feather="gift"></i> </div>
                        <div class="menu__title"> Gift Point </div>
                    </a>
                </li>
                <li>
                    <!-- <a href="{{ route('viverb-esport-be-schedule-index') }}" class="menu"> -->
                    <a class="menu" href="">
                        <div class="menu__icon"> <i data-feather="calendar"></i> </div>
                        <div class="menu__title"> Jadwal </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="shopping-bag"></i> </div>
                        <div class="menu__title"> Shop <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <!-- <a href="{{ route('viverb-esport-be-shop-games') }}" class="menu"> -->
                            <a class="menu" href="">
                                <div class="menu__icon"> <i data-feather="play"></i> </div>
                                <div class="menu__title"> Games </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="side-nav__devider my-6"></li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="tool"></i> </div>
                        <div class="menu__title"> Configuration <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <!-- <a href="{{ route('viverb-esport-be-configuration') }}" class="menu"> -->
                            <a class="menu" href="">
                                <div class="menu__icon"> <i data-feather="settings"></i> </div>
                                <div class="menu__title"> Settings </div>
                            </a>
                        </li>
                        <li>
                            <!-- <a href="{{ route('viverb-esport-be-configuration') }}" class="menu"> -->
                            <a class="menu" href="">
                                <div class="menu__icon"> <i data-feather="monitor"></i> </div>
                                <div class="menu__title"> Frontpage </div>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                <li>
                    <!-- <a href="{{ route('viverb-esport-index') }}" class="menu"> -->
                    <a class="menu" href="">
                        <div class="menu__icon"> <i data-feather="maximize"></i> </div>
                        <div class="menu__title"> FrontPage </div>
                    </a>
                </li>
            </ul>
        </div>
		<div class="flex">
			<nav class="side-nav">
                <a href="" class="intro-x flex items-center pl-5 pt-4">
                    <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{{ asset('/frontend/assets/img/brand/logovv.png')}}">
                    <span class="hidden xl:block text-white text-lg ml-3"> Virtual <span class="font-medium">Verbal</span> </span>
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                    <!-- <li>
                        <a href="index.html" class="side-menu side-menu--active">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title"> Dashboard </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                            <div class="side-menu__title"> Menu Layout <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="index.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Side Menu </div>
                                </a>
                            </li>
                            <li>
                                <a href="simple-menu-dashboard.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Simple Menu </div>
                                </a>
                            </li>
                            <li>
                                <a href="top-menu-dashboard.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Top Menu </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="layout"></i> </div>
                            <div class="side-menu__title"> Pages <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Wizards <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-wizard-layout-1.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-wizard-layout-2.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-wizard-layout-3.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 3</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Blog <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-blog-layout-1.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-blog-layout-2.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-blog-layout-3.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 3</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Pricing <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-pricing-layout-1.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-pricing-layout-2.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Invoice <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-invoice-layout-1.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-invoice-layout-2.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> FAQ <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-faq-layout-1.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-faq-layout-2.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-faq-layout-3.html" class="side-menu">
                                            <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                            <div class="side-menu__title">Layout 3</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="login-login.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Login </div>
                                </a>
                            </li>
                            <li>
                                <a href="login-register.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Register </div>
                                </a>
                            </li>
                            <li>
                                <a href="main-error-page.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Error Page </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-update-profile.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Update profile </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-change-password.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Change Password </div>
                                </a>
                            </li>
                        </ul>
                    </li> -->
					
                    <li>
                        <!-- <a href="{{ route('viverb-esport-be-dashboard') }}" class="side-menu"> -->
                        <a class="side-menu" href="">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title"> Dashboard </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="folder"></i> </div>
                            <div class="side-menu__title"> Content <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a class="menu" href="">
                                    <div class="side-menu__icon"> <i data-feather="book-open"></i> </div>
                                    <div class="side-menu__title"> Konten </div>
                                </a>
                            </li>
                            @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                            <li>
                                <a href="javascript:;" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="archive"></i> </div>
                                    <div class="side-menu__title"> Category <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <!-- <a href="{{ route('viverb-esport-be-category-article') }}" class="side-menu"> -->
                                        <a class="side-menu" href="">
                                            <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                                            <div class="side-menu__title"> Article </div>
                                        </a>
                                    </li>
                                    <li>
                                        <!-- <a href="{{ route('viverb-esport-be-category-games') }}" class="side-menu"> -->
                                        <a class="side-menu" href="">
                                            <div class="side-menu__icon"> <i data-feather="play-circle"></i> </div>
                                            <div class="side-menu__title"> Games </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            @endif
                            <li>
                                <!-- <a href="{{ route('viverb-esport-be-information') }}" class="side-menu"> -->
                                <a class="side-menu" href="">
                                    <div class="side-menu__icon"> <i data-feather="hash"></i> </div>
                                    <div class="side-menu__title"> Information </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                            <div class="side-menu__title"> Users <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{ route('viverb-esport-be-user-admin') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="user"></i> </div>
                                    <div class="side-menu__title"> Admin </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('viverb-esport-be-user-author') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="user-plus"></i> </div>
                                    <div class="side-menu__title"> Author </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('viverb-esport-be-user-guest') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="user-x"></i> </div>
                                    <div class="side-menu__title"> Guest </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('viverb-esport-be-sponsor') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="user-check"></i> </div>
                                    <div class="side-menu__title"> Sponsor </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    <li class="side-nav__devider my-6"></li>
                    <li>
                        <a href="{{ route('forum') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="message-square"></i> </div>
                            <div class="side-menu__title"> Forum </div>
                        </a>
                    </li>
					@if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                    <li>
                        <a href="{{ route('viverb-esport-be-giftpoint-index') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="gift"></i> </div>
                            <div class="side-menu__title"> Gift Point </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('viverb-esport-be-schedule-index') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="calendar"></i> </div>
                            <div class="side-menu__title"> Jadwal </div>
                        </a>
                    </li>
					<li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="shopping-bag"></i> </div>
                            <div class="side-menu__title"> Shop <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{ route('viverb-esport-be-shop-games') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="play"></i> </div>
                                    <div class="side-menu__title"> Games </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="side-nav__devider my-6"></li>
					<li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="tool"></i> </div>
                            <div class="side-menu__title"> Configuration <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{ route('viverb-esport-be-configuration') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="settings"></i> </div>
                                    <div class="side-menu__title"> Settings </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('viverb-esport-be-configuration') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="monitor"></i> </div>
                                    <div class="side-menu__title"> Frontpage </div>
                                </a>
                            </li>
                        </ul>
                    </li>
					@endif
                    <li>
                        <a href="{{ route('viverb-esport-index') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="maximize"></i> </div>
                            <div class="side-menu__title"> FrontPage </div>
                        </a>
                    </li>

                </ul>
            </nav>
			<div class="content">
				<div class="top-bar">
                    <div class="-intro-x breadcrumb mr-auto hidden sm:flex">
                        <a href="{{ route('viverb-esport-be-dashboard') }}" class="">Home</a>
                        <i data-feather="chevron-right" class="breadcrumb__icon"></i>
                        @if(!empty($group))
                        <a href="" class="breadcrumb--active">{{ $group }}</a> 
                        @endif
                        <a href="" class="breadcrumb--active">{{ !empty($title) ? $title : '' }}</a> 
                    </div>
                    <!-- <div class="intro-x relative mr-3 sm:mr-6">
                        <div class="search hidden sm:block">
                            <input type="text" class="search__input input placeholder-theme-13" placeholder="Search...">
                            <i data-feather="search" class="search__icon"></i> 
                        </div>
                        <a class="notification sm:hidden" href=""> <i data-feather="search" class="notification__icon"></i> </a>
                        <div class="search-result">
                            <div class="search-result__content">
                                <div class="search-result__content__title">Pages</div>
                                <div class="mb-5">
                                    <a href="" class="flex items-center">
                                        <div class="w-8 h-8 bg-theme-18 text-theme-9 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="inbox"></i> </div>
                                        <div class="ml-3">Mail Settings</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 bg-theme-17 text-theme-11 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="users"></i> </div>
                                        <div class="ml-3">Users & Permissions</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 bg-theme-14 text-theme-10 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-feather="credit-card"></i> </div>
                                        <div class="ml-3">Transactions Report</div>
                                    </a>
                                </div>
                                <div class="search-result__content__title">Users</div>
                                <div class="mb-5">
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                                        </div>
                                        <div class="ml-3">Angelina Jolie</div>
                                        <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">angelinajolie@left4code.com</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                                        </div>
                                        <div class="ml-3">Johnny Depp</div>
                                        <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">johnnydepp@left4code.com</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-14.jpg">
                                        </div>
                                        <div class="ml-3">Russell Crowe</div>
                                        <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">russellcrowe@left4code.com</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                                        </div>
                                        <div class="ml-3">Al Pacino</div>
                                        <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">alpacino@left4code.com</div>
                                    </a>
                                </div>
                                <div class="search-result__content__title">Products</div>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-9.jpg">
                                    </div>
                                    <div class="ml-3">Samsung Galaxy S20 Ultra</div>
                                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Smartphone &amp; Tablet</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-12.jpg">
                                    </div>
                                    <div class="ml-3">Nike Tanjun</div>
                                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Sport &amp; Outdoor</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-10.jpg">
                                    </div>
                                    <div class="ml-3">Sony Master Series A9G</div>
                                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Electronic</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-7.jpg">
                                    </div>
                                    <div class="ml-3">Samsung Galaxy S20 Ultra</div>
                                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">Smartphone &amp; Tablet</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="intro-x dropdown relative mr-auto sm:mr-6">
                        <div class="dropdown-toggle notification notification--bullet cursor-pointer"> <i data-feather="bell" class="notification__icon"></i> </div>
                        <div class="notification-content dropdown-box mt-8 absolute top-0 left-0 sm:left-auto sm:right-0 z-20 -ml-10 sm:ml-0">
                            <div class="notification-content__box dropdown-box__content box">
                                <div class="notification-content__title">Notifications</div>
                                <div class="cursor-pointer relative flex items-center ">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Angelina Jolie</a> 
                                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a> 
                                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-14.jpg">
                                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Russell Crowe</a> 
                                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Al Pacino</a> 
                                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-5.jpg">
                                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Edward Norton</a> 
                                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="intro-x dropdown w-8 h-8 relative">
                        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                            <!-- <img alt="{{ Auth::user()->name }} Photo's" src="{{ Auth::user()->image == NULL ? asset('adminLTE/dist/img/avatar5.png') : '/'.Auth::user()->image }}"> -->
                            <img src="" alt="">
                        </div>
                        <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
                            <div class="dropdown-box__content box bg-theme-38 text-white">
                                <div class="p-4 border-b border-theme-40">
                                    <div class="font-medium">{{ Auth::user()->name }} - {{ Auth::user()->getRole->name }}</div>
                                    <div class="text-xs text-theme-41">{{ Auth::user()->email }}</div>
                                </div>
                                <div class="p-2">
                                    <a href="{{ route('viverb-esport-be-profile') }}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                                </div>
                                <div class="p-2 border-t border-theme-40">
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"
                                        class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md">
                                        <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				@yield('subcontent')
			</div>
			<!-- END: Content -->
		</div>

        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="{{ asset('backend/dist/js/app.js') }}"></script>

        <script>
        $.widget.bridge('uibutton', $.ui.button);
        </script>



	</body>
</html>
