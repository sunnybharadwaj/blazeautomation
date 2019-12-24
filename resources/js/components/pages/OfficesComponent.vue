<template>
    <div>
        <div id="offices-page" class="page-wrapper customer-page">
            <HeroComponent>
                <template slot="text">
                    <div class="text-container">
                        <h1 class="h1">IoTize your Office Space</h1><span class="icon"><img src="/static/b1.png" alt=""></span>
                        <h2>Guaranteed ROI in 6 months</h2>
                    </div>
                </template>
            </HeroComponent>

            <section>
                <div class="container">
                    <ContentComponent>
                        <template slot="text">
                            <h2>Employee Comfort</h2>
                            <p>Employees’ productivity can get affected if the temperature in the office is too hot or
                                too cold. Ensure employee comfort by using our solutions to control the temperature.</p>
                            <p>Adaptive Intelligence monitors office occupancy as well as outside and inside temperature
                                in order to determine optimum temperature ensuring employee comfort.</p>

                        </template>

                        <template slot="image">
                            <div class="max-w-xs mx-auto">
                                <img src="/static/offices/employee_comfort.png" alt="">
                            </div>
                        </template>
                    </ContentComponent>
                </div>
            </section>
            <section>
                <div class="container">
                    <ContentComponent>
                        <template slot="text">
                            <h2>Conference Room Automation</h2>
                            <p>Conference rooms play an important role in any office be it for internal meetings with
                                team members or external meetings with stakeholders, customers, etc. Automating your
                                conference room gives you one touch control over lighting, air conditioning, projectors
                                and much more, increasing efficiency while reducing energy costs. </p>

                        </template>

                        <template slot="image">
                            <div class="max-w-xs mx-auto">
                                <img src="/static/offices/conference_room.png" alt="">
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
                            <p>Using our sensors, building security can be monitored from anywhere in the world. Be
                                notified anytime there is any kind of security breach or concern even in the event of a
                                power outage using 4G SIM and 4 hour built-in battery.</p>

                        </template>

                        <template slot="image">
                            <div class="max-w-xs mx-auto">
                                <img src="/static/offices/safety_security.png" alt="">
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
                            <p>Automate your rooms, cafeterias and much more. Our cloud connected energy meter helps
                                control and optimize energy usage, cutting energy costs by 20%. </p>

                        </template>
                        <template slot="image">
                            <div class="max-w-xs mx-auto">
                                <img src="/static/offices/energy_savings.png" alt="">
                            </div>
                        </template>

                    </ContentComponent>
                </div>
            </section>
            <section id="clients ">
                <div class="py-12">
                    <div class="container ">
                        <div class="max-w-xl mx-auto">
                            <img class="mx-auto" src="/static/offices/clients.png" alt="">
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
