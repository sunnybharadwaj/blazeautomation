<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <title>Blaze Automation</title>
</head>
<body>

@csrf
<div id="app" class="">
    @include('partials/header')
    <router-view></router-view>
    @include('partials/footer')
</div>

<script src="/js/jquery.min.js"></script>
<script src="{{asset('/js/app.js')}}"></script>
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
</body>
</html>