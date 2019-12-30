@extends('layout')
@section('content')
    <div>
        <div class="nav-bg"></div>

        <div class="cards">
            <div class="text-center loud py-8">Press Releases & Updates</div>
            <div class="news-wrapper container">
                <div class="flex flex-wrap">
                    @foreach($data as $news)

                    <div class="w-full md:w-1/2 lg:w-1/3">
                        <div class="press-card">
                            <div class=" rounded overflow-hidden shadow-lg">
                                <div class="top ">
                                    <div class="image-wrapper">
                                        <img class="w-full" src="/storage/{{$news->imagepath}}" alt="{{$news->headline}}">
                                    </div>
                                </div>
                                <div class="bottom ">
                                    <div class="headline px-6 py-4">
                                        <p class="font-bold text-center">{{$news->headline}}</p>
                                    </div>
                                    <div class="link text-center">
                                        <a href="{{$news->url}}" target="_blank" class="std-link ">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <section id="header" class="py-24">
            <div class="container text-center">
                <!--<h1 class="highlight mb-6">News</h1>-->
                <div class="max-w-4xl mx-auto">
                    {{--<h4 class="mb-3">Get in touch with us at <a href="support@blazeautomation.com" class="highlight"--}}
                                                                {{--target="_blank">support@blazeautomation.com</a> for more--}}
                        {{--info, or to speak with a member of our team.</h4>--}}
                    <a href="https://www.dropbox.com/sh/65cltm2k84l8wlh/AABjXIXJ4WSN63-5qB9Yj8Jfa?dl=0" target="_blank"
                       class="std-btn">Download Press Kit</a>
                    <a href="/contact-us" class="std-btn">Contact Us</a>
                </div>
            </div>
        </section>
        @include('components.contactform')
        @include('components.slider')
    </div>

@endsection