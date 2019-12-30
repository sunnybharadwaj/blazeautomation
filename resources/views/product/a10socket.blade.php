@extends('layout')
@section('content')
    <div id="product-detail-page">
        <div class="nav-bg"></div>

        <div class="product-container">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-5/12 product-img">
                        <div class="wrapper">
                            <img class="mx-auto" :src="thisProduct.imagepath" alt="">
                        </div>
                    </div>

                    <div class="w-full lg:w-7/12 product-details">
                        <h1 class="h2">{{thisProduct.name}}</h1>
                        <h3 class="h4">{{thisProduct.desc}}</h3>
                        <div v-if="!thisProduct.desc">
                            <h3 class="h4">Product details coming soon. </h3>
                        </div>

                        <div v-if="thisProduct.manualpath">
                            <a :href="thisProduct.manualpath" download class="std-btn">Download Manual</a>
                        </div>

                        <div v-if="thisProduct.benefits.length">
                            <h4 class="highlight-heading">KEY BENEFITS</h4>
                            <div v-for="(benefit,key) in thisProduct.benefits">
                                <ul>
                                    <li class="benefit point" >
                                        <div class="flex">
                                            <span>{{key+1}}</span>.&nbsp;&nbsp;<span>{{benefit}}</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>



                </div>

            </div>
        </div>

        <div class="tech-specs" v-if="thisProduct.tech.length">
            <div class="container">
                <div >
                    <h4 class="loud mb-6">TECHNICAL SPECIFICATIONS</h4>
                    <div v-for="tech in thisProduct.tech">
                        <ul>
                            <li class="point"><p>{{tech}}</p></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>


        <SliderComponent></SliderComponent>
        <ContactFormComponent></ContactFormComponent>

    </div>
    @include('components.contactform')
    @include('components.slider')
@endsection