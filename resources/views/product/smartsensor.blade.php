@extends('layout')
@section('content')
    <div id="product-detail-page">
        <div class="nav-bg"></div>

        <div class="product-container">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-5/12 product-img">
                        <div class="wrapper">
                            <img class="mx-auto" src="/static/products/smartsensor.png" alt="">
                        </div>
                    </div>

                    <div class="w-full lg:w-7/12 product-details">
                        <h1 class="h2">Smart Sensor</h1>
                        <h3 class="h4">B.One Smart Sensor senses the opening and closing of any door / window to which it is fixed.</h3>
                        <a href="/static/products/manuals/Smart_Sensor_UserManual.pdf" download class="std-btn">Download
                            Manual</a>


                        <div v-if="thisProduct.benefits.length">
                            <h4 class="highlight-heading">KEY BENEFITS</h4>
                            <div>
                                <ul>
                                    <li class="benefit point">
                                        <div class="flex">
                                            <span>1</span>.&nbsp;Z-Wave Plus certified for wide compatibility (500 series of products). <span></span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>2</span>.&nbsp;B.One Door Sensor improves your security system. Monitoring your entrances 24/7, this sensor can detect when a door or window has been opened. If your connected alarm is armed, the sensor will alert your smart phone immediately.<span></span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>3</span>.&nbsp;Easy Installation. Use double-sided tape to stick this sensor on windows or doors, Can be easily moved from place to place as needed.<span></span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>4</span>.&nbsp;The sensor has a in-built tamper switch. The sensor sends notifications to the connected controller/gateway if tampered with. <span></span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>5</span>.&nbsp;Get real time alerts to your smart device when a door or window is opened or closed. <span></span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>6</span>.&nbsp;Batteries used in the door sensor last upto 1 year. The sensor notifies the user when the battery is low. <span></span>
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
                        <li class="point"><p>Power supply: Two AAA 1.5V Batteries</p></li>
                        <li class="point"><p>Storage environment: -10~50°C, 0%~90% RH</p></li>
                        <li class="point"><p>Operating Temperature: 0~40°C</p></li>
                        <li class="point"><p>Radio protocol: Z-Wave Plus</p></li>
                        <li class="point"><p>Radio frequency: 908.42MHz(US) 868.42MHz(EU) 921.42MHz(AU)</p></li>
                        <li class="point"><p>Range: More than 100m outdoors about 30m indoors</p></li>
                        <li class="point"><p>Dimensions: 50mm( ∅ )</p></li>
                        <li class="point"><p>Dimensions: Sensor body: 75 x 28 x 18mm, Magnet: 75 x 12 x 18mm</p></li>
                        <li class="point"><p>Working current: About 60mA</p></li>
                        <li class="point"><p>Standby current: About 30uA</p></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    @include('components.slider')
    @include('components.contactform')


</div>


@endsection