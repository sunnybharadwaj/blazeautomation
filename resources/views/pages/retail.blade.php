@extends('layout')
@section('content')
    <div id="retail-page" class="page-wrapper customer-page">
        <div class="header">
            <div class="image-container">
                <div class="overlay p-2">
                    <div class="header-text text-center">
                        <div class="text-container">
                            <h1 class="h1">IoTize your Enterprise</h1><span class="icon"><img src="/static/b1.png" alt=""></span>
                            <h2>Guaranteed ROI in 6 months</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>








        <section id="retail-1" class="section-content">
            <div class="container">
                <div class="content-block">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-7/12 text-content">
                            <div class="content">
                                <h2>Central Monitoring and Controlling Station</h2>
                                <p>Centralized Dashboard to monitor energy, security and occupancy of all your outlets on one screen. Real time monitoring, reporting and analysis of performance & usage vs preset budget. Dashboards can be customized to suit your business requirements.</p>
                            </div>
                        </div>
                        <div class="w-full lg:w-5/12 image">
                            <div class="max-w-xs mx-auto">
                                <img src="/static/retail/central_monitoring_station.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="retail-2" class="section-content">
            <div class="container">
                <div class="content-block">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-7/12 text-content">
                            <div class="content">
                                <h2>Customer Comfort</h2>
                                <p>Be Smart Adaptive Intelligence monitors store occupancy as well as outside and inside temperature in order to determine optimum temperature ensuring customer comfort. </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-5/12 image">
                            <div class="max-w-xs mx-auto">
                                <img src="/static/retail/customer_comfort.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="retail-3" class="section-content">
            <div class="container">
                <div class="content-block">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-7/12 text-content">
                            <div class="content">
                                <h2>Safety and Security</h2>
                                <p>Prevent theft by monitoring and  getting real time alerts when there is any breach of security. </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-5/12 image">
                            <div class="max-w-xs mx-auto">
                                <img src="/static/retail/safety_security.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="retail-4" class="section-content">
            <div class="container">
                <div class="content-block">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-7/12 text-content">
                            <div class="content">
                                <h2>Energy Savings</h2>
                                <p>Be Smart  monitors energy consumption in real-time and pushes a notification in case the budget is exceeded. Cloud connected energy meter helps control and optimize energy usage, reducing energy costs by 20%.</p>
                            </div>
                        </div>
                        <div class="w-full lg:w-5/12 image">
                            <div class="max-w-xs mx-auto">
                                <img src="/static/retail/energy_savings.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="clients ">
            <div class="py-12">
                <h3 class="loud text-center primary-color mb-12">Clients</h3>
                <div class="container ">
                    <div class="max-w-xl mx-auto">
                        <img class="mx-auto" src="/static/retail/clients.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        @include('components.contactform')
        @include('components.slider')
    </div>
@endsection