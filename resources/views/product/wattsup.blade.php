@extends('layout')
@section('content')
    <div id="product-detail-page">
        <div class="nav-bg"></div>

        <div class="product-container">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-5/12 product-img">
                        <div class="wrapper">
                            <img class="mx-auto" src="/static/products/wattsup.png" alt="">
                        </div>
                    </div>

                    <div class="w-full lg:w-7/12 product-details">
                        <h1 class="h2">WattsUP Energy Meter</h1>
                        <h3 class="h4">B.One WattsUP- A Smart Meter to help you know how much electricity your Office / Home is using in real-time with 99% accuracy.</h3>
                        <a href="/static/products/manuals/B.One_Easy_UserManual.pdf" download class="std-btn">Download
                            Manual</a>


                        <div>
                            <h4 class="highlight-heading">KEY BENEFITS</h4>
                            <div>
                                <ul>
                                    <li class="benefit point">
                                        <div class="flex">
                                            <span>1</span>.&nbsp;<span>Budgeting and monitoring of energy loads.</span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>2</span>.&nbsp;<span>Real-time data on Running, Off and Stand By loads of all appliances.</span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>3</span>.&nbsp;<span>AI enabled NILM for load detection, optimisation and preventive maintenance of appliances.</span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>4</span>.&nbsp;<span>Data on consumption and generation of alternate power such as solar, battery back up and diesel generators.</span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>5</span>.&nbsp;<span>Monitoring of the elderly by tracking usage patterns of lights and appliances.</span>
                                        </div>
                                    </li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>

    <div class="tech-specs">
        <div class="container">
            <div class="px-4 py-12">
                <h4 class="loud mb-6">TECHNICAL SPECIFICATIONS</h4>
                <div>
                    <ul>
                        <li class="point"><p>Operating Voltage & Frequency: 180~260V AC 50Hz</p></li>
                        <li class="point"><p>Load Current: 60A (Max)</p></li>
                        <li class="point"><p>Working & Storage temperature: Operating: 8°-50°C RH≤80%  Storage: -20°-70°C RH≤80%</p></li>
                        <li class="point"><p>Radio Technology: IEEE 802.11b/g/n</p></li>
                        <li class="point"><p>Wireless Type: WiFi 2.4G 1T1R</p></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    @include('components.slider')
    @include('components.contactform')
@endsection