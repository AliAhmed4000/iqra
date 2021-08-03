<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Professional Translation Services </title>

    <meta name="description" content="Document, website, user manuals translation services at excellent value by qualified native speaker translators.">
    <meta name="keywords" content="Localization, document translation services, professional translation services, Website translation, Legal translation, medical translation, marketing translation, technical translation, translation company, translation services, translation agency, language translation services, professional language translation services">
    <meta name="author" content="IQRA TRANSLATION">

    <link rel="shortcut icon" type="image/x-icon" href="">
    <link rel="stylesheet" href="{{asset('/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/slicknav.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/owl.carousel-2.3.4.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/fontawesome-free-5.12.0.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap-4.3.1.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/default.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/responsive.css')}}">
    <link href="{{asset('/assets/css/flag-icon.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/assets/css/custom.css')}}">
   
    <script src="{{asset('/assets/js/jquery-3.4.1.min.js')}}"></script>

</head>
<body>

    @include('includes.header')
    

    @yield('content')
   
    
    @include('includes.footer')


   <script src="{{asset('/assets/js/popper.min.js')}}"></script>
   <script src="{{asset('/assets/js/bootstrap-4.3.1.min.js')}}"></script>
   <script src="{{asset('/assets/js/vendor/owl.carousel-2.3.4.min.js')}}"></script>
   <script src="{{asset('/assets/js/vendor/owl.carousel2.thumbs.min.js')}}"></script>
   <script src="{{asset('/assets/js/vendor/waypoints-4.0.1.min.js')}}"></script>
   <script src="{{asset('/assets/js/vendor/slicknav.min.js')}}"></script>
   <script src="{{asset('/assets/js/vendor/jquery.scrollUp.min.js')}}"></script>
   <script src="{{asset('/assets/js/vendor/magnific-popup.min.js')}}"></script>

   <script src="{{asset('/assets/js/main.js')}}"></script>
   <script src="{{asset('/assets/js/custom.js')}}"></script>

</body>
</html>
