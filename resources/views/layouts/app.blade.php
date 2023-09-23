<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ruboux Admin</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="public/assets/images/favicon.png"/>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="{{asset('public/dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css')}}" type="text/css">
    <!-- Bootstrap Docs -->
    <link rel="stylesheet" href="{{asset('public/dist/css/bootstrap-docs.css')}}" type="text/css">

        <!-- Slick -->
    <link rel="stylesheet" href="{{asset('public/dist/libs/slick/slick.css')}}" type="text/css">

    <!-- Main style file -->
    <link rel="stylesheet" href="{{asset('public/dist/css/app.min.css')}}" type="text/css">

</head>
<body>
<div id="app">
    <div class="preloader">
        <!-- <img src="https://vetra.laborasyon.com/assets/images/logo.svg" alt="logo"> -->
        <div class="preloader-icon"></div>
    </div>
        <div class="content py-5">
            @yield('content')
        </div>
    </div>
    <!-- Bundle scripts -->
<script src="{{asset('public/dist/libs/bundle.js')}}"></script>

<!-- Apex chart -->
<script src="{{asset('public/dist/libs/charts/apex/apexcharts.min.js')}}"></script>

<!-- Slick -->
<script src="{{asset('public/dist/libs/slick/slick.min.js')}}"></script>

<!-- Examples -->
<!-- <script src="{{asset('public/dist/js/examples/dashboard.js')}}"></script> -->

<!-- Main Javascript file -->
<script src="{{asset('public/dist/js/app.min.js')}}"></script>
</body>
</html>
