<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Be Smart enables enterprises achieve their Energy Management, Automation and Security goals through Artificial Intelligence and Machine Learning. It helps IoTize businesses such as retail and F&B chains by delivering real time data about energy consumption, occupancy levels and security threats. Be Smart ensures an ROI within 6 months.">
    <meta name="keywords" content="Home Automation, Enterprise Automation, Office Automation, Wireless Automation, Energy wastage reduction, Food wastage reduction, Unplanned downtime reduction, Energy cost reduction, Smart Automation, Secure Automation, Security Monitoring, Theft Prevention, Smart security, Energy Management, Energy Saving, Load Monitoring, Load Optimization, Energy Optimization, Energy Monitoring, Real Time Usage Analysis, Energy Budget Control, Malfunction Detection, Malfunction alert, Preventive maintenance alert, Increased asset reliability, Smart Home Automation, Best Home Automation, Home Automation and Security System, Smart Automation and Security System, Best Automation System, Smart Enterprise Automation System, Smart Office Automation System, Wireless Automation and Control System, Reduce cost of energy consumption, Security Monitoring Solution, Theft Prevention Solution, Smart security for home, Smart security for enterprises, Smart security for offices, Energy Management Solution, Real Time Energy Saving, Real Time Load Monitoring, Real Time Load Optimization, Real Time Energy Optimization, Real Time Energy Monitoring, Real Time Usage Analysis, Malfunction Detection Solution, Malfunction alert system, Preventive maintenance alert solution">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <title>Blaze Automation</title>
</head>
<body>

@csrf
<div id="app" class="">
    @include('partials/header')
    <router-view></router-view>


    @if (session()->has('message'))

        <div id="success-msg">
            <div class="h-bar"></div>

            <div class="container">
                <h3 class="text-center">{{ session()->get('message') }}</h3>
            </div>

            <a href="#" class="form-success-close">
                <img src="{{url('/media/icons/icon_close.svg')}}" alt=""
                     class="image-fluid">
            </a>

        </div>
    @endif
    @include('partials/footer')
</div>



<script src="/js/jquery.min.js"></script>
<script src="{{asset('/js/app.js')}}"></script>
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
</body>
</html>