import Vue from 'vue';
import axios from 'axios';
import VueRouter from 'vue-router';
import Vuelidate from 'vuelidate'

Vue.use(Vuelidate);
Vue.use(VueRouter);

window.Vue = Vue;
window.axios = axios;
window.$ = window.jQuery = require('jquery');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}