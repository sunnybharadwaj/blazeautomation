@extends('layout')
@section('content')
    <div id="product-detail-page">
        <div class="nav-bg"></div>

        <div class="product-container">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-5/12 product-img">
                        <div class="wrapper">
                            <img class="mx-auto" src="/static/products/motionsensor.png" alt="">
                        </div>
                    </div>

                    <div class="w-full lg:w-7/12 product-details">
                        <h1 class="h2">Motion Sensor</h1>
                        <h3 class="h4">B.One Motion sensor is a Z-Wave based ultra low power consuming P.I.R motion detector. It communicates with an associated Z-Wave Controller / Gateway whenever there is a human motion in its vicinity.</h3>
                        <a href="/static/products/manuals/B.One_Easy_UserManual.pdf" download class="std-btn">Download
                            Manual</a>


                        <div v-if="thisProduct.benefits.length">
                            <h4 class="highlight-heading">KEY BENEFITS</h4>
                            <div>
                                <ul>
                                    <li class="benefit point">
                                        <div class="flex">
                                            <span>1</span>.&nbsp;Z-Wave plus certified for wide compatibility ( 500 series )<span></span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>2</span>.&nbsp;Supports S2 protected mode with AES-128 bit encryption.<span></span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>3</span>.&nbsp;Upon tampering or detection of vibration / shock, the sensor reports to the connected Controller / Gateway automatically.<span></span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>4</span>.&nbsp;Battery lasts for up to 1 year when operated for 10 times per day.<span></span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>5</span>.&nbsp;Motion Sensor can even alert Controller / Gateway of low battery status.<span></span>
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
                        <li class="point"><p>Power supply: 1xCR123A,3V or USB</p></li>
                        <li class="point"><p>Storage environment: -40~70°C, 0%~90% RH</p></li>
                        <li class="point"><p>Operating Temperature: 0~40°C</p></li>
                        <li class="point"><p>Radio protocol: Z-Wave Plus</p></li>
                        <li class="point"><p>Radio frequency: 908.42MHz(US) 868.42MHz(EU) 921.42MHz(AU)</p></li>
                        <li class="point"><p>Range: More than 100m outdoors about 30m indoors</p></li>
                        <li class="point"><p>Dimensions: 50mm( ∅ )</p></li>
                        <li class="point"><p>Working current: About 55mA</p></li>
                        <li class="point"><p>Standby current: About 20uA</p></li>
                        <li class="point"><p>Recommended installation height: 2m~4m</p></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    @include('components.slider')
    @include('components.contactform')

    </div>


@endsection