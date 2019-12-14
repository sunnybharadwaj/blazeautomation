<template>
    <div id="landing-page" class="page-wrapper">


        <h1 class="hidden">Blaze Automation - Smart Automation Systems</h1>
        <HeroComponent>
            <template slot="text">
            </template>
        </HeroComponent>

        <section id="homes">
            <div class="container">
                <div class="desc">
                    <h2 class="h1 primary-color">Home Automation</h2>
                    <div class="desc font-bold max-w-5xl">
                        <h3 class="h2">
                            B.One®’s affordable home automation makes your life more convenient and your home safer.
                        </h3>

                    </div>
                </div>
                <div class="page-text">

                </div>
                <div class="residences">
                    <ContentComponent>
                        <template slot="text">
                            <h3>Residences</h3>
                            <p>Home automation offers control over every important system within a residence, such
                                as
                                electricity, lighting, HVAC, curtains, entertainment and security through a single,
                                easy to
                                use
                                mobile app.</p>
                            <a href="https://b1hub.com/" target="_blank" class="std-btn">Learn more</a>
                        </template>

                        <template slot="image">
                            <img src="/static/residences.png" alt="">
                        </template>
                    </ContentComponent>
                </div>
                <div class="real-estate">
                    <ContentComponent>
                        <template slot="text">
                            <h3>Real Estate Developers</h3>
                            <p>Affordable automation and security within your reach. No pre-wiring required,
                                complete
                                wireless
                                solution and easy installation.</p>
                            <a href="/real-estate-developers" class="std-btn">Learn more</a>
                        </template>

                        <template slot="image">
                            <img src="/static/realestate.png" alt="">
                        </template>
                    </ContentComponent>
                </div>
            </div>
        </section>

        <section id="enterprises">
            <div class="container">
                <div class="desc">
                    <div class="max-w-4xl">
                        <h2 class="h1">Enterprises</h2>
                        <h3 class="h2 mb-12">Be Smart platform enables enterprises achieve their Energy Management, Automation and
                            Security
                            goals
                            through Artificial Intelligence and Machine Learning. It delivers real time data about
                            energy
                            consumption, occupancy levels and security threats. This platform ensures an ROI of 6 months.</h3>
                    </div>

                </div>
                <div class="fnb">
                    <ContentComponent>
                        <template slot="text">
                            <h4 class="h3">Food and Beverages (F&B)</h4>
                            <p>Automating your Food and Beverage enterprise with Be Smart helps in improving your
                                performance and productivity while reducing the risk and keeping your customers
                                happy. Be
                                Smart solutions result in better profitability and efficiency.</p>
                            <router-link to="/f-and-b" class="std-btn">Learn more</router-link>
                        </template>

                        <template slot="image">
                            <img src="/static/fnb.png" alt="">
                        </template>
                    </ContentComponent>
                </div>
                <div class="retail">
                    <ContentComponent>
                        <template slot="text">
                            <h3>Retail</h3>
                            <p>Automating your retail enterprise with Be Smart solutions helps in improving your
                                profitability, productivity and security. Enhance customer experience by automating
                                your
                                retail outlet.</p>
                            <a href="/retail" class="std-btn">Learn more</a>
                        </template>

                        <template slot="image">
                            <img src="/static/retail.png" alt="">
                        </template>
                    </ContentComponent>
                </div>
            </div>
        </section>

        <section id="offices">
            <div class="container">

                        <h2 class="h1">Offices</h2>
                <ContentComponent>
                    <template slot="text">
                        <p>Automating your offices can make life easier. Temperature and lighting in offices has a
                            demonstrable effect on your employees’ well-being and productivity. Well-lit and
                            well-designed
                            environments enhance your brand’s image and help you retain high-value employees.</p>
                        <p>Land Security goals through Artificial Intelligence and Machine Learning. It helps IoTize
                            offices
                            and co-working spaces by delivering real time data about energy consumption, occupancy
                            levels
                            and security threats. Be Smart ensures an ROI of 6 months. </p>
                        <a href="/office" class="std-btn">
                            <div class="text">Learn more</div>
                        </a>
                    </template>

                    <template slot="image">
                        <img src="/static/offices.png" alt="">
                    </template>
                </ContentComponent>
            </div>
        </section>

        <SliderComponent></SliderComponent>
    </div>
</template>

<script>
    export default {
        mounted() {
        }
    }
</script>