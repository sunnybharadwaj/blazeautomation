@extends('layout')
@section('content')
    <div id="product-detail-page">
        <div class="nav-bg"></div>

        <div class="product-container">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-5/12 product-img">
                        <div class="wrapper">
                            <img class="mx-auto" src="/static/products/b1easy.png" alt="">
                        </div>
                    </div>

                    <div class="w-full lg:w-7/12 product-details">
                        <h1 class="h2">B.One Eazy</h1>
                        <h3 class="h4">The revolutionary automation device that will make your life smarter than ever before. Now get used to enjoying complete control over all the IR devices and Wi-Fi enabled smart devices at your home/business.</h3>
                        <a href="/static/products/manuals/B.One_Easy_UserManual.pdf" download class="std-btn">Download Manual</a>


                        <div v-if="thisProduct.benefits.length">
                            <h4 class="highlight-heading">KEY BENEFITS</h4>
                            <div>
                                <ul>
                                    <li class="benefit point" >
                                        <div class="flex">
                                            <span>1</span>.&nbsp;&nbsp;<span>B.One Eazy allows you to combine and control all your infrared remotes & Wi-Fi supported devices into one easy to use mobile application acting as a universal remote. </span>
                                            <span>2</span>. <span>Using B.One Voice Act smart home skills for Google Home and Alexa, you can automate complex tasks with simple voice commands. For example, say ‘Alexa, turn on the AC’ to power ON your AC.</span>
                                            <span>3</span>. <span>Schedule your activities as per your convenience on a daily basis through the B.One app, making your life simpler and smarter. For example, ‘Turn off AC at 11pm.’</span>
                                            <span>4</span>. <span>Control your B.One supported devices from anywhere in the world using your smartphone.</span>
                                            <span>5</span>. <span>Works with over 110+ devices and is compatible with remotes of most brands.</span>
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
                <div >
                    <h4 class="loud mb-6">TECHNICAL SPECIFICATIONS</h4>
                    <div>
                        <ul>
                            <li class="point"><p>"Built-in Sensor: Temperature and Illuminance"</p></li>
                            <li class="point"><p>"Supported Communication Method: Wi-Fi (2.4 GHz Only), IR(Infrared)"</p></li>
                            <li class="point"><p>"Effective Range/Effective Distance of Infrared Ray: 360 degrees/10meters"</p></li>
                            <li class="point"><p>"Smartphone: Android 4.2 or later / iOS 10.0 or later"</p></li>
                            <li class="point"><p>"Power Supply: 100V to 240V AC"</p></li>
                            <li class="point"><p>"Size: 85x85x22mm"</p></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        @include('components.slider')
        @include('components.contactform')

        {{--<SliderComponent></SliderComponent>--}}
        {{--<ContactFormComponent></ContactFormComponent>--}}

    </div>


@endsection