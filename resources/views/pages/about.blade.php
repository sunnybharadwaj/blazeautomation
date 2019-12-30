@extends('layout')
@section('content')
    <div id="about-page">
        <div class="nav-bg">

        </div>

        <div id="intro">
            <div class="intro-bg bg-gray-200">
                <div class="container text-center">
                    <div class="max-w-3xl mx-auto lg:px-12 py-12">
                        <h2 class="mb-3 primary-color">About Us</h2>
                        <p class="p">Blaze Automation is an IoT ( Internet of Things ) company with its offices in New Jersey, USA and Hyderabad, India. Blaze has been building Home Automation and Security products for last 8 years. Blaze has invested the last three years in research and development of B.One<sup class="r">®</sup> Hub and AI based IoT analytics platform, B.One Hub is a truly intelligent device that is powerful, intuitive, easy-to-use and future ready. B.One<sup class="r">®</sup> is a Smart Intelligent Home Automation and Security System that makes your lives more efficient and secure.</p>
                    </div>
                </div>

            </div>

        </div>

        <section>
            <div class="team-list mt-8">
                <div class="container">
                    <div class="team-member">
                        <div class="flex flex-wrap">
                            <div class="image w-full md:w-4/12">
                                <img class="mx-auto" src="/static/team/arjun_valluri.jpg" alt="">
                            </div>
                            <div class="text w-full md:w-8/12">
                                <div class="heading">
                                    <h3>Arjun Valluri</h3>
                                    <h4 class="loud highlight">Chairman</h4>
                                </div>
                                <div class="Description">
                                    <div class="max-w-xl">
                                        <p>Arjun is the Chairman of Blaze Automation and leads the vision and ideation
                                            efforts. As a successful serial entrepreneur Arjun has received various awards
                                            for his business accomplishments and has made significant investments in Green
                                            Energy and Technology sectors.</p>
                                        <p>He was the Co-Founder, Chairman, President and Chief Executive Officer of
                                            Intelligroup ,Inc (acquired by NTT Data). Throughout the years, Arjun has
                                            received multiple NJ Fast 50 awards, Var Business 500 Awards, NJ Entrepreneur of
                                            the Year awards, and the NJ Ernst &amp; Young Entrepreneur of the Year in
                                            2001.</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="team-member">
                        <div class="flex flex-wrap">
                            <div class="image w-full md:w-4/12">
                                <img class="mx-auto" src="/static/team/dr_dave_irvine.jpg" alt="">
                            </div>
                            <div class="text w-full md:w-8/12">
                                <div class="heading">
                                    <h3>Dr. Dave Irvine Halliday</h3>
                                    <h4 class="loud highlight">Director</h4>
                                </div>
                                <div class="Description">
                                    <div class="max-w-xl">
                                        <p>Dr. Dave MSM, PEng, Professor Emeritus, University of Calgary is a Director at Blaze Automation. He is the founder ofthe NGO: “Light Up The World (LUTW)” (1997). LUTW has facilitated affordable Solid State Lighting systems in 53 countries. He is the Founder for “Visionary Lighting & Energy (VLE) and has worked on Projects with Univ. of Calgary & Mount Royal University (Canada).</p>
                                        <p>Dave is an expert in Power Electronics, Solar Photovoltaic Systems and in designing LED Lighting Systems. In recognition of Dr. Dave’s services to humanity he received over two dozen awards including – Rolex Laureate 2002, Tech Museum Laureate 2002, Saatchi and Saatchi Laureate 2003, Meritorious Service Medal (MSM), Gov. of Canada (2005), Honorary Doctorate, Aberdeen University, Scotland (2006), K. Y. LoMedal of the Engineering Institute of Canada (2008).</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="team-member">
                        <div class="flex flex-wrap">
                            <div class="image w-full md:w-4/12">
                                <img class="mx-auto" src="/static/team/sridhar_ponugupati.jpg" alt="">
                            </div>
                            <div class="text w-full md:w-8/12">
                                <div class="heading">
                                    <h3>Sridhar Ponugupati</h3>
                                    <h4 class="loud highlight">Chief Executive Officer</h4>
                                </div>
                                <div class="Description">
                                    <div class="max-w-xl">
                                        <p>Sridhar is the CEO of Blaze Automation and spearheads strategy, operations, design and development efforts. Sridhar has years of experience in designing and building, Industrial Embedded Security and Automation systems. He was also responsible for Design and Implementation of Security Systems for several Banks and key Government agencies.</p>
                                        <p>Over the years Sridhar has received various awards from IEEE’s Best circuit designer of the year award, Faraday Memorial award for the design of Solid state Lighting System for the developing world. Stood one among the TOP 20 in Windows Embedded Students Challenge conducted by Microsoft.</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="team-member">
                        <div class="flex flex-wrap">
                            <div class="image w-full md:w-4/12">
                                <img class="mx-auto" src="/static/team/sarada_akkineni.jpg" alt="">
                            </div>
                            <div class="text w-full md:w-8/12">
                                <div class="heading">
                                    <h3>Sarada Akkineni</h3>
                                    <h4 class="loud highlight">Chairman</h4>
                                </div>
                                <div class="Description">
                                    <div class="max-w-xl">
                                        <p>Sarada is Technical Director at Blaze Automation and brings over 10 years of management experience from flagship telecom companies. Sarada Akkineni is currently responsible for managing software design and development of Blaze Home Automation products.</p>
                                        <p>Her experience spans a range of technologies including Broadband Networking, Asynchronous Transfer Mode Switches, High speed Routers and VoIP Systems. During her career she has held management positions at Lucent Technologies and Net2Phone, and started her career as a software engineer at Cisco Systems. She interned as a network engineer at Bell Labs. Sarada is a Graduate from University of Illinois, Urbana Champaign.</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        @include('components.contactform')
        @include('components.slider')
    </div>
@endsection