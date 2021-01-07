<!doctype html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">

     <!-- rtl style -->
     @if(LaravelLocalization::getCurrentLocale() ==='ar')

     <link rel="stylesheet" href="{{ asset('assets/css/ar/bootstrap.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/ar/rtl.css') }}">

     @else
      <!-- ltr style -->
     <link rel="shortcut icon" href="{{asset('assets/img/dev.png')}}" type="image/x-icon">
     <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">

     @endif



    @yield('my-styles')
    <title>@yield('title')</title>
</head>

@if(LaravelLocalization::getCurrentLocale() ==='ar')
 <body dir="rtl">
@else
<body dir="ltr">
@endif
