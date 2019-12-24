<template>
    <div>
        <div class="nav-bg"></div>

        <div class="cards">
            <div class="text-center loud">Press Releases & Updates</div>
            <div class="container">
                <div class="flex flex-wrap">
                    <div class=" w-full md:w-1/2 lg:w-1/3" v-for="news in data">
                        <div class="news-card text-center">

                            <div class="logo">
                                <img  :src="'/storage/' + news.imagepath" alt="">
                            </div>
                            <div class="headline">
                                <p class="font-bold">{{news.headline}}</p>
                            </div>
                            <div class="link">
                                <a :href="news.url" class="std-btn">Visit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="header" class="py-24">
            <div class="container text-center">
                <h1 class="highlight mb-6">News</h1>
                <div class="max-w-4xl mx-auto">
                    <h4 class="mb-3">Get in touch with us at <a href="support@blazeautomation.com" class="highlight"
                                                                target="_blank">support@blazeautomation.com</a> for more
                        info, or to speak with a member of our team.</h4>
                    <a href="https://www.dropbox.com/sh/65cltm2k84l8wlh/AABjXIXJ4WSN63-5qB9Yj8Jfa?dl=0" target="_blank"
                       class="std-btn">Download Press Kit</a>
                    <a href="/contact-us" class="std-btn">Contact Us</a>
                </div>
            </div>
        </section>
        <ContactFormComponent></ContactFormComponent>
        <SliderComponent></SliderComponent>
    </div>
</template>

<script>
    export default {
        mounted() {
            axios.get('/api/press')
                .then(response => {
                    this.data = response.data;
                    console.log(response.data);
                });
        },
        data() {
            return {
                data: null
            }
        }
    }
</script>