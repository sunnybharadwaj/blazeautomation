<template>
    <div id="landing-page" class="page-wrapper">


        <h1 class="hidden">Blaze Automation - Smart Automation Systems</h1>
        <HeroComponent>
            <template slot="text">
            </template>
        </HeroComponent>

        <!--<div :v-if="this.data.iso === 'IN'">{{this.data.iso}}</div>-->

        <section id="homes">
            <div class="container">
                <div class="desc">
                    <h2 class="h1 primary-color">Home Automation</h2>
                    <div class="desc max-w-5xl">

                        <!--<h3 class="h3 font-normal">-->
                            <!--B.One<sup>®</sup> ’s affordable home automation makes your life more convenient and your home safer.-->
                        <!--</h3>-->

                    </div>
                </div>
                <div class="page-text">

                </div>
                <div class="residences">
                    <ContentComponent>
                        <template slot="text">
                            <h4>Residences</h4>
                            <p>Home automation offers control over every important system within a residence, such as electricity, lighting, HVAC, curtains, entertainment and security, through a single, easy to use mobile app. B.One<sup class="r">®</sup>’s affordable home automation makes your life more convenient, and your home safer.</p>
                            <a href="https://b1hub.com/" rel="noreferrer" target="_blank" class="std-btn">Know More</a>
                        </template>

                        <template slot="image">
                            <img src="/static/residences.jpg" alt="">
                        </template>
                    </ContentComponent>
                </div>
                <div class="real-estate">
                    <ContentComponent>
                        <template slot="text">
                            <h4>Real Estate Developers</h4>
                            <p>Affordable automation and security within your reach. No pre-wiring required,
                                complete
                                wireless
                                solution and easy installation.</p>
                            <a href="/real-estate-developers" class="std-btn">Know More</a>
                        </template>

                        <template slot="image">
                            <img src="/static/realestate.jpg" alt="">
                        </template>
                    </ContentComponent>
                </div>
            </div>
        </section>

        <section id="enterprises">
            <div class="container">
                <div class="desc">
                    <div class="max-w-4xl">
                        <h2 class="h1">Enterprise Automation</h2>
                        <h3 class="h2 mb-12">Be Smart enables enterprises to achieve their Energy Management, Automation and Security goals through Artificial Intelligence and Machine Learning. It helps IoTize businesses such as retail and F&B outlets by delivering real time data about energy consumption, occupancy levels and security threats. Be Smart ensures an ROI within 6 months.
                        </h3>
                    </div>

                </div>
                <div class="fnb">
                    <ContentComponent>
                        <template slot="text">
                            <h4 class="h4">Food and Beverages (F&B)</h4>
                            <p>Automating your Food and Beverage enterprise with Be Smart helps in improving your
                                performance and productivity while reducing the risk and keeping your customers
                                happy. Be
                                Smart solutions result in better profitability and efficiency.</p>
                            <a href="/f-and-b" class="std-btn">Know More</a>
                        </template>

                        <template slot="image">
                            <img src="/static/fnb.png" alt="">
                        </template>
                    </ContentComponent>
                </div>
                <div class="retail">
                    <ContentComponent>
                        <template slot="text">
                            <h4>Retail</h4>
                            <p>Automating your retail enterprise with Be Smart solutions helps in improving your
                                profitability, productivity and security. Enhance customer experience by automating
                                your
                                retail outlet.</p>
                            <a href="/retail" class="std-btn">Know More</a>
                        </template>

                        <template slot="image">
                            <img src="/static/retail.jpg" alt="">
                        </template>
                    </ContentComponent>
                </div>
            </div>
        </section>

        <section id="offices">
            <div class="container">

                        <h2 class="h1">Office Automation</h2>
                <ContentComponent>
                    <template slot="text">
                        <p>Automating your offices can make work-life easier. Temperature and lighting in offices have a demonstrable effect on your employees' well-being and productivity. Well-lit and well-designed environments enhance your brand's image and help you retain high-value employees.</p>
                        <p>Be Smart enables offices achieve their Energy Management, Automation and Security goals through Artificial Intelligence and Machine Learning. It helps IoTize offices and co-working spaces by delivering real time data about energy consumption, occupancy levels and security threats. Be Smart ensures an ROI within 6 months.</p>
                        <a href="/office" class="std-btn">
                            <div class="text">Know More</div>
                        </a>
                    </template>

                    <template slot="image">
                        <img src="/static/offices.jpg" alt="">
                    </template>
                </ContentComponent>
            </div>
        </section>
        <!--<ContactFormComponent></ContactFormComponent>-->

        <div v-if="india" id="india-notification">

            <p>Looks like you're visiting from India.  <a class="primary-color" href="http://blazeautomation.in">Click here to go to <strong>blazeautomation.in</strong></a></p>
            <div class="close-btn" @click="india=!india">
                [x] Close
            </div>
        </div>
        <SliderComponent></SliderComponent>
    </div>
</template>

<script>
    export default {

        mounted() {
            axios.get('/api/location')
                .then(response => {
                    this.data=response.data;
                    if(this.data.iso === "IN") {
                        this.india = true;
                    }
                });
        },
        data(){
            return {
                data: null,
                india: false
            }
        },
        computed: {
            thisProduct() {
                return this.getData(this.product);
            }
        }
    }
</script>