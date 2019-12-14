<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
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
</body>
</html>