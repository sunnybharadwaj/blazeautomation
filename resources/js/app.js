require('./bootstrap');
import router from './routes'

import ContactFormComponent from './components/partials/ContactFormComponent';
Vue.component('ContactFormComponent', ContactFormComponent);

import SliderComponent from './components/partials/sliderComponent';
Vue.component('SliderComponent', SliderComponent);

import ContentComponent from './components/partials/contentBlock';
Vue.component('ContentComponent', ContentComponent);

import HeroComponent from './components/partials/HeroComponent';
Vue.component('HeroComponent', HeroComponent);


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
    var mySwiper = new Swiper ('.swiper-container', {
        slidesPerView: 1,

        autoplay: {
            delay: 3000,
        },
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
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 0,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 0,
            },
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });

    $('#mobile-menu-btn').click(function(){
        $('.mobile-nav-container').show();
    });

    $('#mobile-menu-close').click(function() {
        $('.mobile-nav-container').hide();
    });
});
