@extends('layout')
@section('content')
    <div id="product-detail-page">
        <div class="nav-bg"></div>

        <div class="product-container">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-5/12 product-img">
                        <div class="wrapper">
                            <img class="mx-auto" src="/static/products/flooddetector.png" alt="">
                        </div>
                    </div>

                    <div class="w-full lg:w-7/12 product-details">
                        <h1 class="h2">Flood Detector</h1>
                        <h3 class="h4">B.One Flood Sensor alerts the connected Z-Wave Controller in times of Flood.</h3>
                        <a href="/static/products/manuals/B.One_Easy_UserManual.pdf" download class="std-btn">Download
                            Manual</a>


                        <div class="hidden">
                            <h4 class="highlight-heading">KEY BENEFITS</h4>
                            <div>
                                <ul>
                                    <li class="benefit point">
                                        <div class="flex">
                                            <span>1</span>.&nbsp;<span>B.One Eazy allows you to combine and control all your infrared remotes & Wi-Fi supported devices into one easy to use mobile application acting as a universal remote. </span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>2</span>.&nbsp;<span>Using B.One Voice Act smart home skills for Google Home and Alexa, you can automate complex tasks with simple voice commands. For example, say ‘Alexa, turn on the AC’ to power ON your AC.</span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>3</span>.&nbsp;<span>Schedule your activities as per your convenience on a daily basis through the B.One app, making your life simpler and smarter. For example, ‘Turn off AC at 11pm.’</span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>4</span>.&nbsp;<span>Control your B.One supported devices from anywhere in the world using your smartphone.</span>
                                        </div>
                                    </li>
                                    <li class="benefit point">
                                        <div class="flex"><span>5</span>.&nbsp;<span>Works with over 110+ devices and is compatible with remotes of most brands.</span>
                                        </div>
                                    </li>
                            </div>
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>

    <div class="tech-specs hidden">
        <div class="container">
            <div class="px-4 py-12">
                <h4 class="loud mb-6">TECHNICAL SPECIFICATIONS</h4>
                <div>
                    <ul>
                        <li class="point"><p>Built-in Sensor: Temperature and Illuminance</p></li>
                        <li class="point"><p>Supported Communication Method: Wi-Fi (2.4 GHz Only), I(Infrared)"</p>
                        </li>
                        <li class="point"><p>Effective Range/EffectiveDistance of Infrared Ray: 360
                                degrees/10meters</p></li>
                        <li class="point"><p>Smartphone: Android 4.2 or later / iOS 10.0 or later</p></li>
                        <li class="point"><p>Power Supply: 100V to 240V AC</p></li>
                        <li class="point"><p>Size: 85x85x22mm</p></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    @include('components.slider')
    @include('components.contactform')





@endsection