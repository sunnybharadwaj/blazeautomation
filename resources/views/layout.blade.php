<!doctype html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-N9M7NP4');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="Be Smart enables enterprises achieve their Energy Management, Automation and Security goals through Artificial Intelligence and Machine Learning. It helps IoTize your homes and businesses such as retail, F&B and other enterprises or chains by delivering real time data about your energy consumption, occupancy levels and security threats. Be Smart ensures a return on investment in under 6 months*.">
    <meta name="keywords" content="Home Automation, Enterprise Automation, Office Automation, Wireless Automation, Energy wastage reduction, Food wastage reduction, Unplanned downtime reduction, Energy cost reduction, Smart Automation, Secure Automation, Security Monitoring, Theft Prevention, Smart security, Energy Management, Energy Saving, Load Monitoring, Load Optimization, Energy Optimization, Energy Monitoring, Real Time Usage Analysis, Energy Budget Control, Malfunction Detection, Malfunction alert, Preventive maintenance alert, Increased asset reliability, Smart Home Automation, Best Home Automation, Home Automation and Security System, Smart Automation and Security System, Best Automation System, Smart Enterprise Automation System, Smart Office Automation System, Wireless Automation and Control System, Reduce cost of energy consumption, Security Monitoring Solution, Theft Prevention Solution, Smart security for home, Smart security for enterprises, Smart security for offices, Energy Management Solution, Real Time Energy Saving, Real Time Load Monitoring, Real Time Load Optimization, Real Time Energy Optimization, Real Time Energy Monitoring, Real Time Usage Analysis, Malfunction Detection Solution, Malfunction alert system, Preventive maintenance alert solution, Return on Investment">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <title>Blaze Automation</title>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N9M7NP4"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
@csrf
<div id="app" class="">
    @include('partials/header')
    @yield('content')

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



<script src="{{mix('/js/app.js')}}"></script>
<script>
    $('#notification-close-btn').click(function () {
        $('#india-notification').hide();
    });
</script>

<script src="https://www.google.com/recaptcha/api.js?render=6LeJ3dAUAAAAAE2c2SiFpQ1USjxA2GHmpUx1ETJt"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('6LeJ3dAUAAAAAE2c2SiFpQ1USjxA2GHmpUx1ETJt', {action: 'homepage'}).then(function(token) {
            console.log(token + " - grecaptcha executed");
        });
    });
</script>
{{--<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>--}}
</body>
</html>