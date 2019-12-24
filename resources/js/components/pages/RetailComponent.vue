<template>
    <div>
        <div id="retail-page" class="page-wrapper customer-page">
            <HeroComponent>
                <template slot="text">
                    <div class="text-container">
                        <h1 class="h1">IoTize your Enterprise</h1><span class="icon"><img src="/static/b1.png" alt=""></span>
                        <h2>Guaranteed ROI in 6 months</h2>
                    </div>
                </template>
            </HeroComponent>



            <section>
                <div class="container">
                    <ContentComponent>
                        <template slot="text">
                            <h2>Central Monitoring and Controlling Station</h2>
                            <p>Centralized Dashboard to monitor energy, security and occupancy of all your outlets on one screen. Real time monitoring, reporting and analysis of performance & usage vs preset budget. Dashboards can be customized to suit your business requirements.</p>
                        </template>

                        <template slot="image">
                            <div class="max-w-xs mx-auto">
                                <img src="/static/retail/central_monitoring_station.png" alt="">
                            </div>
                        </template>
                    </ContentComponent>
                </div>
            </section>

            <section>
                <div class="container">
                    <ContentComponent>
                        <template slot="text">
                            <h2>Customer Comfort</h2>
                            <p>Be Smart Adaptive Intelligence monitors store occupancy as well as outside and inside temperature in order to determine optimum temperature ensuring customer comfort. </p>
                        </template>

                        <template slot="image">
                            <div class="max-w-xs mx-auto">
                                <img src="/static/retail/customer_comfort.png" alt="">
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
                            <p>Prevent theft by monitoring and  getting real time alerts when there is any breach of security. </p>
                        </template>

                        <template slot="image">
                            <div class="max-w-xs mx-auto">
                                <img src="/static/retail/safety_security.png" alt="">
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
                            <p>Be Smart  monitors energy consumption in real-time and pushes a notification in case the budget is exceeded. Cloud connected energy meter helps control and optimize energy usage, reducing energy costs by 20%.</p>

                        </template>

                        <template slot="image">
                            <div class="max-w-xs mx-auto">
                                <img src="/static/retail/energy_savings.png" alt="">
                            </div>

                        </template>
                    </ContentComponent>
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
            <ContactFormComponent></ContactFormComponent>
            <SliderComponent></SliderComponent>
        </div>

    </div>
</template>

<script>
    export default {
        mounted() {
        }
    }
</script>
