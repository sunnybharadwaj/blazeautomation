@extends('layout')
@section('content')
    <div>
        <div id="fnb-page" class="page-wrapper customer-page">
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


            <section id="fnb-1" class="section-content">
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
                                    <img src="/static/fnb/central_monitoring_station.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="fnb-2" class="section-content">
                <div class="container">
                    <div class="content-block">
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-7/12 text-content">
                                <div class="content">
                                    <h2>Customer Comfort</h2>
                                    <p>Adaptive Intelligence platform monitors store occupancy as well as outside and inside temperature in order to determine optimum temperature ensuring customer comfort.</p>
                                </div>
                            </div>
                            <div class="w-full lg:w-5/12 image">
                                <div class="max-w-xs mx-auto">
                                    <img src="/static/fnb/customer_comfort.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="fnb-3" class="section-content">
                <div class="container">
                    <div class="content-block">
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-7/12 text-content">
                                <div class="content">
                                    <h2>Food Refrigeration Monitoring and Regulatory Compliance</h2>
                                    <p>To reduce food wastage and maintain food safety, our Food Refrigeration Monitoring sensors track real-time functioning of all refrigeration units and graph temperature fluctuations over time and allow for adjustments to be made in order to stay compliant with storage condition standards.</p>
                                </div>
                            </div>
                            <div class="w-full lg:w-5/12 image">
                                <div class="max-w-xs mx-auto">
                                    <img src="/static/fnb/regulatorycompliance.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="fnb-4" class="section-content">
                <div class="container">
                    <div class="content-block">
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-7/12 text-content">
                                <div class="content">
                                    <h2>NILM (Non Intrusive Load Monitoring) for Load Detection and Optimization</h2>
                                    <p>Monitors running, standby and off loads in real-time. Through the power of AI (Artificial intelligence) and NILM,  Be Smart can help in preventive maintenance while achieving significant reduction in unplanned downtime and increase asset reliability by providing early detection and warning of issues, inefficiencies and errors. It sends an alert in case any equipment is malfunctioning or in need of preventive maintenance and/or servicing.</p>
                                </div>
                            </div>
                            <div class="w-full lg:w-5/12 image">
                                <div class="max-w-xs mx-auto">
                                    <img src="/static/fnb/nilm.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="fnb-5" class="section-content">
                <div class="container">
                    <div class="content-block">
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-7/12 text-content">
                                <div class="content">
                                    <h2>Safety and Security</h2>
                                    <p>By automating your enterprise using Be Smart solutions, you can know the exact time your outlet has been opened and closed, without having to depend entirely on the staff. Also, prevent theft with our security systems and reduce concerns related to cash register transactions. </p>
                                </div>
                            </div>
                            <div class="w-full lg:w-5/12 image">
                                <div class="max-w-xs mx-auto">
                                    <img src="/static/fnb/safety_security.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="fnb-6" class="section-content">
                <div class="container">
                    <div class="content-block">
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-7/12 text-content">
                                <div class="content">
                                    <h2>Energy Savings</h2>
                                    <p>Inefficient energy management is expensive. This reduces the loss of energy due to ‘leakage’ as well. An automated energy management system can optimize HVAC energy use without manager or staff involvement, reducing energy bills by 20%. </p>
                                </div>
                            </div>
                            <div class="w-full lg:w-5/12 image">
                                <div class="max-w-xs mx-auto">
                                    <img src="/static/fnb/energy_savings.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="clients " class="section-content">
                <div class="py-12">
                    <div class="container ">
                        <h3 class="loud text-center primary-color mb-12">Clients</h3>
                        <div class="max-w-xl mx-auto">
                            <img class="mx-auto" src="/static/fnb/clients.png" alt="">
                        </div>

                    </div>
                </div>
            </section>
            @include('components.contactform')
            @include('components.slider')
        </div>

    </div>
@endsection



