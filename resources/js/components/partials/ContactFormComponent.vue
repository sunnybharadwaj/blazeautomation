<template>
    <section>
        <div class="ui form">
            <div class="fields">
                <div class="field">
                    <label>First name</label>
                    <input type="text" placeholder="First Name">
                </div>
                <div class="field">
                    <label>Middle name</label>
                    <input type="text" placeholder="Middle Name">
                </div>
                <div class="field">
                    <label>Last name</label>
                    <input type="text" placeholder="Last Name">
                </div>
            </div>
        </div>
        <div class="contact-form text-center">
            <div class="py-20">
                <div class="container">

                    <div class="loud highlight mb-6">CONTACT US</div>
                    <h3>For a free assessment, share your contact details. <br/>One of our specialists will get in touch
                        with you soon.</h3>
                    <div class="mb-12"></div>
                    <div class="form-container max-w-md mx-auto">
                        <form method="POST" action="/message">
                            <input type="hidden" name="_token" :value="csrf" />
                            <div class="form-item">
                                <label for="name">Full Name</label>
                                <input required v-model="name" id="name" name="name" type="text" placeholder="">
                            </div>


                            <div class="form-item">
                                <label for="phone">Phone number</label>
                                <input required   v-model="phone" id="phone" name="phone" type="number" placeholder="">
                            </div>

                            <div class="form-item">
                                <label for="email">Email</label>
                                <input required   v-model="email" id="email" name="email" type="email" placeholder="">
                            </div>

                            <div class="form-item">
                                <label for="location">Location</label>
                                <input required   v-model="location" id="location" name="location" type="text" placeholder="">
                            </div>

                            <label for="businesstype">Type of Business</label>
                            <select required   v-model="businesstype" name="businesstype" id="businesstype">
                                <option value="Homes" selected>Homes</option>
                                <option value="Real Estates">Real Estates</option>
                                <option value="Retail">Retail</option>
                                <option value="F & B">F &amp; B</option>
                                <option value="Offices">Offices</option>
                                <option value="Smart Cities">Smart Cities</option>
                            </select>

                            <label for="message">Message</label>
                            <textarea required   v-model="message" name="message" id="message" cols="30" rows="10"></textarea>
                            <button class="std-btn" type="submit">Submit</button>
                        </form>
                    </div>

                </div>
            </div>


        </div>

    </section>
</template>

<script>
    // window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token()]); ?>
    export default {
        mounted() {
            console.log(this.csrf);
        },
        data: () => ({
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            name: '',
            phone: '',
            email: '',
            location: '',
            businesstype: '',
            message: '',
        }),
        computed: {
            form_data : function(){
                return {
                    name: this.name,
                    phone: this.phone,
                    email: this.email,
                    location: this.location,
                    businesstype: this.businesstype,
                    message: this.message,
                }
            },
        },
        methods: {
            formSubmit() {
                console.log("HEY");
                console.log(this.form_data);
                axios.post('/message', {
                    data: this.form_data
                })
            }
        }

    }
</script>