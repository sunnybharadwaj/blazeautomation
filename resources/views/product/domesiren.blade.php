@extends('layout')
@section('content')
    <div id="product-detail-page">
        <div class="nav-bg"></div>

        <div class="product-container">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-5/12 product-img">
                        <div class="wrapper">
                            <img class="mx-auto" src="/static/products/siren.png" alt="">
                        </div>
                    </div>

                    <div class="w-full lg:w-7/12 product-details">
                        <h1 class="h2">Dome Siren</h1>
                        <h3 class="h4">B.One’s Z-Wave based wireless dome siren with strobe light helps alert owners in
                            case of a security breach or a safety concern.</h3>
                        <a href="/static/products/manuals/Siren_UserManual.pdf" download class="std-btn">Download
                            Manual</a>


                        <div v-if="thisProduct.benefits.length">
                            <h4 class="highlight-heading">KEY BENEFITS</h4>
                            <div>
                                <ul>
                                    <li class="benefit point">
                                        <div class="flex">
                                            <span>1</span>.&nbsp;<span>Z-Wave plus certified for wide compatibility ( 500 series )</span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>2</span>.&nbsp;<span>Supports S2 protected mode with AES-128 bit encryption.</span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>3</span>.&nbsp;<span>Provides visual alerts via strobe lite.</span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>4</span>.&nbsp;<span>B.One dome siren also acts as a Z-Wave signal repeater.</span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex">
                                            <span>5</span>.&nbsp;<span>Supports OTA firmware updates.</span>
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
                            <li class="point"><p>Power supply: AC110-240V</p></li>
                            <li class="point"><p>Operating Temperature: -10°C ~ 50°C</p></li>
                            <li class="point"><p>Humidity: ≤ 95% RH</p></li>
                            <li class="point"><p>Radio protocol: Z-Wave Plus</p></li>
                            <li class="point"><p>Radio frequency: 908.42MHz(US) 868.42MHz(EU) 921.42MHz(AU)</p></li>
                            <li class="point"><p>Range: More than 100m outdoors about 30m indoors</p></li>
                            <li class="point"><p>Decibel: 110db</p></li>
                            <li class="point"><p>Dimensions: ( ∅ )80mm x 32mm (plug not included)</p></li>
                            <li class="point"><p>Working current: About 55mA</p></li>
                            <li class="point"><p>Battery Backup: Up to 4 hours</p></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        @include('components.slider')
        @include('components.contactform')

    </div>



@endsection