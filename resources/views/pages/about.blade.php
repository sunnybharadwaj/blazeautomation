@extends('layout')
@section('content')
    <div id="about-page">
        <div class="nav-bg">

        </div>

        <div id="intro">
            <div class="intro-bg bg-gray-200">
                <div class="container text-center">
                    <div class="max-w-4xl mx-auto lg:px-12 py-12">
                        <h2 class="mb-3 primary-color">About Us</h2>
                        <h4 class="font-normal">Blaze Automation Solutions Pvt. Ltd. is the distributor for Blaze Automation Inc. in India. For information about Blaze Automation Inc., please visit
                            <a class="std-link" href="https://www.blazeautomation.com/about-us">www.blazeautomation.com/about-us</a></h4>
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
                                <div class="heading">
                                    <h3>BHEEMUDU</h3>
                                    <h4 class="loud highlight">MANAGING DIRECTOR</h4>
                                </div>
                            </div>
                            <div class="text w-full md:w-8/12">

                                <div class="Description">
                                    <div class="max-w-xl">
                                        <p>Bheemudu is the managing Director of Blaze Automation India business and leads the vision and mission of the company. He is a successful entrepreneur and runs Spark group of companies.</p>
                                        <p>Bhemudu is an Electrical Engineer from BITS Pilani and has put in 25 years of experience in the Power Sector, Engineering, Textile Industry and Real Estate. Started Spark Insulators pvt Ltd about 10 years back and his ambitious plans and strategies led to diversification into Power Sector in India and abroad. Prior to this, he worked with “Tecumseh products India Ltd, Rane Group and TI Diamond Chain Ltd – Murugappa Group.</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="team-member">
                        <div class="flex flex-wrap">
                            <div class="image w-full md:w-4/12">
                                <div class="heading">
                                    <h3>SOBHAN</h3>
                                    <h4 class="loud highlight">CHIEF EXECUTIVE OFFICER</h4>
                                </div>
                            </div>
                            <div class="text w-full md:w-8/12">
                                <div class="Description">
                                    <div class="max-w-xl">
                                        <p>Sobhan is the CEO of Blaze Automation India Business and spearheads Strategy, Alliances & Partnerships Operations and IT services.</p>
                                        <p>Sobhan has rich domain and IT experience and an expert in business process transformation. He has led several business process transformation projects for some of the renowned MNCs. Besides he is being a certified Lean manufacturing consultant and he also has very strong exposure to industry best practices and systems.</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="team-member">
                        <div class="flex flex-wrap">
                            <div class="image w-full md:w-4/12">
                                <div class="heading">
                                    <h3>AJIT</h3>
                                    <h4 class="loud highlight">MARKETING & <br/>SALES DIRECTOR</h4>
                                </div>
                            </div>
                            <div class="text w-full md:w-8/12 mx-auto">
                                <div class="Description">
                                    <div class="max-w-xl">
                                        <p>Ajit is Marketing & Sales director. He has over 24 years of experience in Education, IT, and Office Automation sector. Ajit has worked extensively across different functional areas spanning across Sales and marketing.</p>
                                        <p>Prior to this, he was working at CL Educate Ltd as (President and Member of Management Council & Nominee Director, Accendre Management Services). He has also worked with SSI Education, Dalal Street Journal Group and IFIM in various capacities.</p>
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