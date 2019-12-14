<template>
    <div>
        <div class="contact-form text-center">
            <div class="container">
                <h3>For a free assessment, share your contact details. <br/>One of our specialists will get in touch with you soon.</h3>
                <div class="form-container max-w-md mx-auto">
                    <form method="POST" action="/message">

                        <div class="form-item">
                            <label for="name">Full Name</label>
                            <input required id="name" name="name" type="text" placeholder="">
                        </div>

                        <div class="form-item">
                            <label for="phone">Phone number</label>
                            <input required id="phone" name="phone" type="number" placeholder="">
                        </div>

                        <div class="form-item">
                            <label for="email">Email</label>
                            <input required id="email" name="email" type="email" placeholder="">
                        </div>

                        <div class="form-item">
                            <label for="location">Location</label>
                            <input required id="location" name="location" type="text" placeholder="">
                        </div>

                        <label for="typeofbusiness">Type of Business</label>
                        <select required name="type" id="typeofbusiness">
                            <option value="">Homes</option>
                            <option value="">Real Estates</option>
                            <option value="">Retail</option>
                            <option value="">F &amp; B</option>
                            <option value="">Offices</option>
                            <option value="">Smart Cities</option>
                        </select>
                        <label for="message">Message</label>
                        <textarea required name="message" id="message" cols="30" rows="10"></textarea>
                        <button class="std-btn" type="submit">Submit</button>
                    </form>
                </div>

            </div>

        </div>

    </div>
</template>

<script>
    export default {
        mounted() {
        }
    }
</script>