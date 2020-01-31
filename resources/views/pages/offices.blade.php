@extends('layout')
@section('content')
    <div id="offices-page" class="page-wrapper customer-page">
        <div class="header">
            <div class="image-container">
                <div class="overlay p-2">
                    <div class="header-text text-center">
                        <div class="text-container">
                            <h1 class="h1">IoTize your Office with </h1>
                            <span class="icon">
                            <img src="/static/b1.png" alt="">
                        </span>
                            <h2>Guaranteed ROI in 6 months</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <section id="offices-1" class="section-content">
            <div class="container">
                <div class="content-block">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-7/12 text-content">
                            <div class="content">
                                <h2>Employee Comfort</h2>
                                <p>Employees’ productivity can get affected if the temperature in the office is too hot
                                    or
                                    too cold. Ensure employee comfort by using our solutions to control the
                                    temperature.</p>
                                <p>Adaptive Intelligence monitors office occupancy as well as outside and inside
                                    temperature
                                    in order to determine optimum temperature ensuring employee comfort.</p>
                            </div>
                        </div>
                        <div class="w-full lg:w-5/12 image">
                            <div class="max-w-xs mx-auto">
                                <img src="/static/offices/employee_comfort.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="offices-2" class="section-content">
            <div class="container">
                <div class="content-block">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-7/12 text-content">
                            <div class="content">
                                <h2>Conference Room Automation</h2>
                                <p>Conference rooms play an important role in any office be it for internal meetings
                                    with
                                    team members or external meetings with stakeholders, customers, etc. Automating your
                                    conference room gives you one touch control over lighting, air conditioning,
                                    projectors
                                    and much more, increasing efficiency while reducing energy costs. </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-5/12 image">
                            <div class="max-w-xs mx-auto">
                                <img src="/static/offices/conference_room.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="offices-3" class="section-content">
            <div class="container">
                <div class="content-block">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-7/12 text-content">
                            <div class="content">
                                <h2>Safety and Security</h2>
                                <p>Using our sensors, building security can be monitored from anywhere in the world. Be
                                    notified anytime there is any kind of security breach or concern even in the event
                                    of a
                                    power outage using 4G SIM and 4 hour built-in battery.</p>
                            </div>
                        </div>
                        <div class="w-full lg:w-5/12 image">
                            <div class="max-w-xs mx-auto">
                                <img src="/static/offices/safety_security.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="offices-4" class="section-content">
            <div class="container">
                <div class="content-block">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-7/12 text-content">
                            <div class="content">
                                <h2>Energy Savings</h2>
                                <p>Automate your rooms, cafeterias and much more. Our cloud connected energy meter helps
                                    control and optimize energy usage, cutting energy costs by 20%. </p>
                            </div>
                        </div>
                        <div class="w-full lg:w-5/12 image">
                            <div class="max-w-xs mx-auto">
                                <img src="/static/offices/energy_savings.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="clients ">
            <div class="py-12">
                <h3 class="loud text-center primary-color mb-4">Clients</h3>
                <div class="container ">
                    <div class="max-w-xl mx-auto">
                        <img class="mx-auto" src="/static/offices/clients.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        @include('components.contactform')
        @include('components.slider')
    </div>

@endsection