require('./bootstrap');
import router from './routes'

import SliderComponent from './components/partials/sliderComponent';
Vue.component('SliderComponent', SliderComponent);

import ContentComponent from './components/partials/contentBlock';
Vue.component('ContentComponent', ContentComponent);

new Vue({
    el:'#app',
    router
});



$(window).scroll(function() {
    let scroll = $(window).scrollTop();
    let Nav = $('nav');
    if (scroll >= 1) {
        Nav.addClass('scrolled');
    } else if (scroll === 0) {
        Nav.removeClass('scrolled');
    }
});

$(document).ready(function() {
    var mySwiper = new Swiper ('.slider-container', {
        slidesPerView: 4,
        spaceBetween: 30,

        autoplay: 2000,
        speed: 800,
        autoplayDisableOnInteraction: false,
        // Optional parameters
        // direction: 'vertical',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
});
