<template>
    <div id="real-estate-page" class="page-wrapper customer-page">
        <HeroComponent>
            <template slot="text">
                <div class="text-container">
                    <h1>Affordable Wireless Automation & Security</h1>
                </div>
            </template>
        </HeroComponent>
   <HeroComponent>
       <template slot="text">

       </template>
   </HeroComponent>



        <section>
            <div class="container">
                <ContentComponent>
                    <template slot="text">
                        <h2>Central Monitoring and Controlling Station for communities</h2>
                        <p>Centralized Dashboard to monitor energy, security and occupancy of all your outlets on one screen. Real time monitoring, reporting and analysis of performance & usage vs preset budget. Dashboards can be customized to suit your business requirements.</p>
                    </template>

                    <template slot="image">
                        <div class="max-w-xs mx-auto">
                        <img src="/static/realestate/central_monitoring_station.png" alt="">
                        </div>
                    </template>
                </ContentComponent>
            </div>
        </section>

        <section>
            <div class="container">
                <ContentComponent>
                    <template slot="text">
                        <h2>Easy Installation</h2>
                        <p>Easy, wireless installation that takes less than 3 hours. Works even in the event of a power outage using LTE and a 4 hour built-in power backup, making the entire process hassle free. </p>
                    </template>

                    <template slot="image">
                        <div class="max-w-xs mx-auto">
                        <img src="/static/realestate/easy_installation.png" alt="">
                        </div>
                    </template>
                </ContentComponent>
            </div>
        </section>

        <section>
            <div class="container">
                <ContentComponent>
                    <template slot="text">
                        <h2>Safety and Security</h2>
                        <p>Artificial intelligence can be used to automate threat detection and perhaps more proactively alert us if something looks suspicious. No matter where you are, get real time alerts when there is any breach of security, ensuring maximum safety.</p>
                    </template>

                    <template slot="image">
                        <div class="max-w-xs mx-auto">
                        <img src="/static/realestate/safety_security.png" alt="">
                        </div>
                    </template>
                </ContentComponent>
            </div>
        </section>

        <section>
            <div class="container">
                <ContentComponent>
                    <template slot="text">
                        <h2>Energy Savings</h2>
                        <p>Energy savings leading to monetary savings, through planned use of connected appliances. Nearly 20% savings in electrical usage over time.</p>

                    </template>

                    <template slot="image">
                        <div class="max-w-xs mx-auto">
                            <img src="/static/realestate/energy_savings.png" alt="">
                        </div>

                    </template>
                </ContentComponent>
            </div>
        </section>

        <SliderComponent></SliderComponent>
        <ContactFormComponent></ContactFormComponent>
    </div>
</template>

<script>
    export default {
        mounted() {
        }
    }
</script>

