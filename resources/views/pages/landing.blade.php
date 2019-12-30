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

        @if($data->iso == 'IN')
            <div id="india-notification" class="notification">
                <div class="content">
                    <p class="mb-2">Looks like you're visiting from India. <br/></p>
                    <p><a class="primary-color" href="http://blazeautomation.in">Click here to go to <strong>blazeautomation.in</strong></a></p>
                    <div id="notification-close-btn" class="close-btn">
                        [x] Close
                    </div>
                </div>
            </div>
        @endif



    {{--<!--<div :v-if="this.data.iso === 'IN'">{{this.data.iso}}</div>-->--}}

        <section id="homes">
            <div class="container">
                <div class="desc">

                    <div class="desc max-w-5xl">

                        <!--<h3 class="h3 font-normal">-->
                        <!--B.One<sup>®</sup> ’s affordable home automation makes your life more convenient and your home safer.-->
                        <!--</h3>-->
                        <h2 class="h2 text-bold primary-color">Home Automation</h2>
                    </div>
                </div>
                <div class="page-text">

                </div>
                <div class="residences">

                    <div class="content-block">
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-7/12 text-content">
                                <div class="content">
                                    <h4>Residences</h4>
                                    <p>Home automation offers control over every important system within a residence, such as electricity, lighting, HVAC, curtains, entertainment and security, through a single, easy to use mobile app. B.One<sup class="r">®</sup>’s affordable home automation makes your life more convenient, and your home safer.</p>
                                    <a href="https://b1hub.com/" rel="noreferrer" target="_blank" class="std-btn component-btn component-btn">Know More</a>
                                </div>
                            </div>
                            <div class="w-full lg:w-5/12 image">
                                <img src="/static/residences.jpg" alt="">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="real-estate">
                    <div class="content-block">
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-7/12 text-content">
                                <div class="content">
                                    <h4>Real Estate Developers</h4>
                                    <p>Affordable automation and security within your reach. No pre-wiring required,
                                        complete
                                        wireless
                                        solution and easy installation.</p>
                                    <a href="/real-estate-developers" class="std-btn component-btn">Know More</a>
                                </div>
                            </div>
                            <div class="w-full lg:w-5/12 image">
                                <img src="/static/realestate.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="enterprises">
            <div class="container">
                <div class="desc">
                    <div class="max-w-5xl">
                        <h2 class="h2 primary-color">Enterprise Automation</h2>
                        <h3 class="h2 mb-24">Be Smart enables enterprises to achieve their Energy Management, Automation and Security goals through Artificial Intelligence and Machine Learning. It helps IoTize businesses such as retail and F&B outlets by delivering real time data about energy consumption, occupancy levels and security threats. Be Smart ensures an ROI in 6 months.
                        </h3>
                    </div>

                </div>
                <div class="fnb">
                    <div class="content-block">
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-7/12 text-content">
                                <div class="content">
                                    <h4 class="h4">Food and Beverages (F&B)</h4>
                                    <p>Automating your Food and Beverage enterprise with Be Smart helps in improving your
                                        performance and productivity while reducing the risk and keeping your customers
                                        happy. Be
                                        Smart solutions result in better profitability and efficiency.</p>
                                    <a href="/f-and-b" class="std-btn component-btn">Know More</a>
                                </div>
                            </div>
                            <div class="w-full lg:w-5/12 image">
                                <img src="/static/fnb.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="retail">
                    <div class="content-block">
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-7/12 text-content">
                                <div class="content">
                                    <h4>Retail</h4>
                                    <p>Automating your retail enterprise with Be Smart solutions helps in improving your
                                        profitability, productivity and security. Enhance customer experience by automating
                                        your
                                        retail outlet.</p>
                                    <a href="/retail" class="std-btn component-btn">Know More</a>
                                </div>
                            </div>
                            <div class="w-full lg:w-5/12 image">
                                <img src="/static/retail.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="offices">
            <div class="container">
                <h2 class="h2 primary-color">Office Automation</h2>

                <div class="content-block">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-7/12 text-content">
                            <div class="content">
                                <p>Automating your offices can make work-life easier. Temperature and lighting in offices have a demonstrable effect on your employees' well-being and productivity. Well-lit and well-designed environments enhance your brand's image and help you retain high-value employees.</p>
                                <p>Be Smart enables offices achieve their Energy Management, Automation and Security goals through Artificial Intelligence and Machine Learning. It helps IoTize offices and co-working spaces by delivering real time data about energy consumption, occupancy levels and security threats. Be Smart ensures an ROI within 6 months.</p>
                                <a href="/office" class="std-btn component-btn">
                                    <div class="text">Know More</div>
                                </a>
                            </div>
                        </div>
                        <div class="w-full lg:w-5/12 image">
                            <img src="/static/offices.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--<ContactFormComponent></ContactFormComponent>-->

        @include('components.slider')
        {{--<div v-if="india" id="india-notification" class="notification">--}}

            {{--<p>Looks like you're visiting from India.  <a class="primary-color" href="http://blazeautomation.in">Click here to go to <strong>blazeautomation.in</strong></a></p>--}}
            {{--<div class="close-btn" @click="india=!india">--}}
                {{--[x] Close--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<SliderComponent></SliderComponent>--}}
    </div>
@endsection