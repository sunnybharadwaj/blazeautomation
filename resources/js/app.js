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