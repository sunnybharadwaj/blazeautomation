@extends('layout')
@section('content')
    <div id="product-detail-page">
        <div class="nav-bg"></div>

        <div class="product-container">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-5/12 product-img">
                        <div class="wrapper">
                            <img class="mx-auto" src="/static/products/b1edge.png" alt="">
                        </div>
                    </div>

                    <div class="w-full lg:w-7/12 product-details">
                        <h1 class="h2">B.One Edge</h1>
                        <h3 class="h4">B.One Edge incorporates a state-of-the-art parallel processing architecture with Hard Real Time Performance to make it the fastest and first of its kind Edge Computing IOT gateway in the market.</h3>
                        <a href="/static/products/manuals/B.One_Edge_UserManual.pdf" download class="std-btn">Download
                            Manual</a>

                        <div>
                            <h4 class="highlight-heading">KEY BENEFITS</h4>
                            <div>
                                <ul>
                                    <li class="benefit point">
                                        <div class="flex">
                                            <span>1</span>.&nbsp;<span>Edge is a multi-protocol gateway with Z-Wave, Zigbee, BLE, BT, Wi-Fi (Dual Band), LTE Cat 4 and Universal Infrared Remote Learner and Repeater.</span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>2</span>.&nbsp;<span>Delivers ultra low latency and high real-time experience in command execution and performance. Enables faster communication of real-time data from smart devices and published services.</span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>3</span>.&nbsp;<span>Sensors, devices and actuators driven data is computed and executed at the edge of the network reducing the reliability on low and intermittent connectivity to cloud services.</span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>4</span>.&nbsp;<span>Helps save bandwidth, storage, time and costs by limiting the data that needs to be transmitted to the cloud causing Network latencies.</span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>5</span>.&nbsp;<span>High value-Short term (smoke alerts, Intrusions etc.) data processed at real time (no dependency on Cloud latency) to help in emergency situations where the user requires immediate actions.</span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>6</span>.&nbsp;<span>User has the ability to keep their data secure and use the cloud when needed, ensuring privacy of all data generated at their homes. In addition, Military grade encryption at the “EDGE” ensures security of data against hacking.</span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>7</span>.&nbsp;<span>Ability to move analysis and Intelligence to the Edge of the network where the data is generated, enabling faster “call to actions”.</span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>8</span>.&nbsp;<span>Battery back up of upto two hours in case of power failure.</span>
                                        </div>
                                    </li>

                                    <li class="benefit point">
                                        <div class="flex"><span>9</span>.&nbsp;<span>LTE Sim card enabled (forward compatible with some 5G networks) to provide internet back up and redundancy in case of Wi-Fi failure.</span>
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
                        <li class="point"><p>Power supply: 5V DC, 3.0A</p></li>
                        <li class="point"><p>Operating conditions: 0~40°C, 0%~90% RH</p></li>
                        <li class="point"><p>Supported protocol: Wi-Fi, LTE, Z-Wave Plus, BT, BLE, Zigbee, and IR</p></li>
                        <li class="point"><p>Z-Wave radio frequency: 868.42MHz (EU) 908.42MHz (US) 921.42 MHz (ANZ)</p></li>
                        <li class="point"><p>Battery Backup: Up to 2 hours</p></li>
                        <li class="point"><p>On-board Sensors: Motion Sensor, Temperature Sensor, and Light Sensor</p></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @include('components.slider')
    @include('components.contactform')

</div>

@endsection