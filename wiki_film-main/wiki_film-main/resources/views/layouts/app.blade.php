<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'WIKI FILM') }}</title>
        <!-- Library / Plugin Css Build -->
        <link rel="stylesheet" href="{{ asset('assets/css/core/libs.min.css') }}" />
        <!-- font-awesome css -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}" />
        <!-- Iconly css -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/iconly/css/style.css') }}" />
        <!-- Animate css -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/animate.min.css') }}" />
        <!-- Streamit Design System Css -->
        <link rel="stylesheet" href="{{ asset('assets/css/streamit.min848f.css?v=5.2.1') }}" />
        <!-- Custom Css -->
        <link rel="stylesheet" href="{{ asset('assets/css/custom.min848f.css?v=5.2.1') }}" />
        <!-- Rtl Css -->
        <link rel="stylesheet" href="{{ asset('assets/css/rtl.min848f.css?v=5.2.1') }}" />
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300&amp;display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="  ">
        <span class="screen-darken"></span>
        <!-- loader Start -->
        <!-- loader Start -->
        <div class="loader simple-loader">
            <div class="loader-body">
                <img src="assets/images/loader.gif" alt="loader" class="img-fluid " width="300">
            </div>
        </div>
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="main-content">
                @yield('content')
            </main>
            
        </div>
            <!-- Library Bundle Script -->
            <script src="{{ asset('assets/js/core/libs.min.js') }}"></script>
            <!-- Lodash Utility -->
            <script src="{{ asset('assets/vendor/lodash/lodash.min.js') }}"></script>
            <!-- External Library Bundle Script -->
            <script src="{{ asset('assets/js/core/external.min.js') }}"></script>
            <!-- countdown Script -->
            <script src="{{ asset('assets/js/plugins/countdown.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/fslightbox.js') }}" defer></script>
            <script src="{{ asset('assets/vendor/swiperSlider/swiper.min.js') }}"></script>
            <script src="{{ asset('assets/js/utility.js') }}"></script>
            <script src="{{ asset('assets/js/setting.js') }}"></script>
            <script src="{{ asset('assets/js/setting-init.js') }}" defer></script>
            <script src="{{ asset('assets/js/streamit.js') }}" defer></script>
            <script src="{{ asset('assets/js/swiper.js') }}" defer></script>
    </body>
</html>
