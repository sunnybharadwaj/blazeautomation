@extends('layout')
@section('content')
    <div id="product-detail-page">
        <div class="nav-bg"></div>

        <div class="product-container">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-5/12 product-img">
                        <div class="wrapper">
                            <img class="mx-auto" src="/static/products/16amp.png" alt="">
                        </div>
                    </div>

                    <div class="w-full lg:w-7/12 product-details">
                        <h1 class="h2">16 Amp Smart Socket</h1>
                        <h3 class="h4">B.One Wi-Fi Smart Socket is used to control lights, devices and appliances and monitor their energy consumption from anywhere. Set schedules or ‘Actions’ with your smartphone using the B.One app.</h3>
                        <a href="/static/products/manuals/Smart_Socket_UserManual.pdf" download class="std-btn">Download
                            Manual</a>

                        <div>
                            <h4 class="highlight-heading">KEY BENEFITS</h4>
                            <div>
                                <ul>
                                    <li class="benefit point">
                                        <div class="flex">
                                            <span>1</span>.&nbsp;<span>CONTROL FROM ANYWHERE: Turn appliances on or off from anywhere with your smartphone using the B.One app (Compatible with Android & iOS)</span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>2</span>.&nbsp;<span>VOICE CONTROL: Works with Amazon Alexa, Google Assistant and supported devices for a hands free experience.</span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>3</span>.&nbsp;<span>SCHEDULES: Schedule the Smart Socket to automatically switch on and off appliances when away or set an action for controlling many devices with a single button.</span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>4</span>.&nbsp;<span>SAVE ENERGY: Prevent power-hungry devices from being left on longer than needed and based on your geo-location.</span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>5</span>.&nbsp;<span>AUTO-SHUTOFF: Protects your appliance by turning it off when high & low voltages are detected.</span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>6</span>.&nbsp;<span>ENERGY MONITORING: Know the actual and energy costs incurred in real time. Monitor current and historical power consumption of your appliance.</span>
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
                        <li class="point"><p>Load Current: 16A (Max)</p></li>
                        <li class="point"><p>Working & Storage temperature: Operating: 8°-50°C RH≤80%  Storage: -20°-70°C RH≤80%</p></li>
                        <li class="point"><p>Radio Technology: IEEE 802.11b/g/n</p></li>
                        <li class="point"><p>Size: 70 mm x 48 mm x 34 mm</p></li>
                        <li class="point"><p>For indoor use only</p></li>
                        <li class="point"><p>Requires a secured 2.4 gigahertz Wi-Fi network connection.</p></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    @include('components.slider')
    @include('components.contactform')
    </div>
@endsection