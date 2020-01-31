@extends('layout')
@section('content')
    <div id="landing-page" class="page-wrapper">


        <h1 class="hidden">Blaze Automation - Smart Automation Systems</h1>
        <div>
            <div class="header">
                <div class="image-container">
                    <div class="overlay p-2">
                        <div class="header-text text-center">
                            <h1 class="h1">All Things. <span class="inline-block">Be One<sup class="r">®</sup></span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--@if($data->iso == 'IN')--}}
            {{--<div id="india-notification" class="notification">--}}
                {{--<div class="content">--}}
                    {{--<p class="mb-2">Looks like you're visiting from India. <br/></p>--}}
                    {{--<p><a class="primary-color" href="http://blazeautomation.in">Click here to go to <strong>blazeautomation.in</strong></a></p>--}}
                    {{--<div id="notification-close-btn" class="close-btn">--}}
                        {{--[x] Close--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--@endif--}}


        <section id="home-section-1" class="section-content home-automation content-section">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-1/2">
                        <div class="image">

                        </div>
                    </div>
                    <div class="text w-full lg:w-1/2">
                        <div class="content-wrapper">
                            <h2>HOMES</h2>
                            <div class="residences">
                                <h3 class="h4">Residences</h3>
                                <p>Home automation offers control over every important system within a residence, such as electricity, lighting, HVAC, curtains, entertainment and security, through a single, easy to use mobile app. B.One<sup class="r">®</sup>’s affordable home automation makes your life more convenient, and your home safer.</p>
                                <div class="btn-container">
                                    <a href="https://b1hub.com/" rel="noreferrer" target="_blank" class="std-btn component-btn component-btn">Know More</a>
                                </div>

                            </div>

                            <div class="real-estate">
                                <h3 class="h4">Real Estate Developers</h3>
                                <p>Affordable automation and security within your reach. No pre-wiring required,
                                    complete wireless solution and easy installation.</p>
                                <div class="btn-container">
                                    <a href="/real-estate-developers" class="std-btn component-btn">Know More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="home-section-2" class="section-content enterprises content-section">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-1/2">
                        <div class="image">

                        </div>
                    </div>
                    <div class="text w-full lg:w-1/2">
                        <div class="content-wrapper">
                            <h2>Enterprises</h2>
                            <div class="fnb">
                                <h3 class="h4">Food and Beverages (F&B)</h3>
                                <p>Automating your Food and Beverage enterprise with Be Smart helps in improving your
                                    performance and productivity while reducing the risk and keeping your customers
                                    happy. Be
                                    Smart solutions result in better profitability and efficiency.</p>
                                <div class="btn-container">
                                    <a href="/f-and-b" class="std-btn component-btn">Know More</a>
                                </div>

                            </div>

                            <div class="retail">
                                <h3 class="h4">Retail</h3>
                                <p>Automating your retail enterprise with Be Smart solutions helps in improving your
                                    profitability, productivity and security. Enhance customer experience by automating
                                    your
                                    retail outlet.</p>
                                <div class="btn-container">
                                    <a href="/retail" class="std-btn component-btn">Know More</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="home-section-3" class="section-content offices content-section">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-1/2">
                        <div class="image">

                        </div>
                    </div>
                    <div class="text w-full lg:w-1/2">
                        <div class="content-wrapper">
                            <div class="office">
                                <h2>Office Automation</h2>
                                <p>Automating your offices can make work-life easier. Temperature and lighting in offices have a demonstrable effect on your employees' well-being and productivity. Well-lit and well-designed environments enhance your brand's image and help you retain high-value employees.</p>
                                <p>Be Smart enables offices achieve their Energy Management, Automation and Security goals through Artificial Intelligence and Machine Learning. It helps IoTize offices and co-working spaces by delivering real time data about energy consumption, occupancy levels and security threats. Be Smart ensures an ROI within 6 months.</p>
                                <div class="btn-container">
                                    <a href="/office" class="std-btn component-btn">Know More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('components.slider')
    </div>
@endsection