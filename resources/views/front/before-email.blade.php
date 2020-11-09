@extends('front.layouts.base')

@section('content')
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
@endsection