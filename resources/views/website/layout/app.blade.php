<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="APEX GPS Tracker">

        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('website/images/fav.png') }}">

        <title>@yield('title', 'Welcome to APEX GPS Tracker')</title>

        <!-- Plugin CSS -->
        <link rel="stylesheet" href="{{ asset('website/css/plugins/fontawesome.css') }}">
        <link rel="stylesheet" href="{{ asset('website/css/plugins/swiper.css') }}">
        <link rel="stylesheet" href="{{ asset('website/css/plugins/metismenu.css') }}">
        <link rel="stylesheet" href="{{ asset('website/css/plugins/magnifying-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('website/css/plugins/odometer.css') }}">
        <link rel="stylesheet" href="{{ asset('website/css/vendor/bootstrap.min.css') }}">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link
            href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
            rel="stylesheet">

        <!-- Hero image preload -->
        <link rel="preload" as="image" href="{{ asset('website/images/banner/21.webp') }}">

        <!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
    </head>

</head>

<body class="business-partner">

    @include('website.components.common.header')

    @yield('content')

    @include('website.components.common.footer')
    @include('website.components.common.sidebar')

    <!-- jQuery MUST load first (NO defer) -->
    <script src="{{ asset('website/js/plugins/jquery.js') }}"></script>

    <!-- Plugins -->
    <script defer src="{{ asset('website/js/plugins/odometer.js') }}"></script>
    <script defer src="{{ asset('website/js/plugins/jquery-appear.js') }}"></script>
    <script defer src="{{ asset('website/js/plugins/gsap.js') }}"></script>
    <script defer src="{{ asset('website/js/plugins/split-text.js') }}"></script>
    <script defer src="{{ asset('website/js/plugins/scroll-trigger.js') }}"></script>
    <script defer src="{{ asset('website/js/plugins/smooth-scroll.js') }}"></script>
    <script defer src="{{ asset('website/js/plugins/metismenu.js') }}"></script>
    <script defer src="{{ asset('website/js/plugins/popup.js') }}"></script>

    <!-- Vendor -->
    <script defer src="{{ asset('website/js/vendor/bootstrap.min.js') }}"></script>
    <script defer src="{{ asset('website/js/plugins/swiper.js') }}"></script>

    <!-- Custom -->
    <script defer src="{{ asset('website/js/plugins/contact.form.js') }}"></script>
    <script defer src="{{ asset('website/js/main.js') }}"></script>

</body>


</html>