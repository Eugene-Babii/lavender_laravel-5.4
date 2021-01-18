<!DOCTYPE html>
<html class="h-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <title>{{ config('app.name', 'Lavender') }}</title> -->
    <title>Лаванда в Запорожье</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <!-- <link href="../../public/css/app.css" rel="stylesheet"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="antialiased d-flex flex-column h-100">


    <!-- Header -->
    <h1 class="site-heading text-center text-primary d-none d-lg-block py-1">
        <span class="site-heading-lower lobster">Лаванда в Запорожье</span>
    </h1>

    <!-- Navigation -->
    @include('layouts.nav')

    <!-- Content -->
    <main class="main">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layouts.footer')

</body>

</html>