require('./bootstrap');
import Swiper from 'swiper';

require('semantic-ui-transition/transition.min');
require('semantic-ui-form/form.min');
require('semantic-ui-dropdown/dropdown.min');


$(document).ready(function () {

    var pageSections = $('.page-wrapper section.section-content');

    for (var i = 0; i < pageSections.length; i++) {
        var currentElem = $(pageSections[i])[0];
        new Waypoint({
            element: currentElem,
            offset: '90%',
            handler: function () {
                var currentElemId = $(this.element).attr('id');
                if (!$(this.element).hasClass('move-this-item')) {
                    $(this.element).addClass('move-this-item');
                    $('#' + currentElemId + '.move-this-item')
                        .transition({
                            animation: 'fade in down',
                            duration: 1200
                        });
                }
            }
        });
    }


    $(window).scroll(function () {
        let scroll = $(window).scrollTop();
        let Nav = $('nav');
        if (scroll >= 1) {
            Nav.addClass('scrolled');
        } else if (scroll === 0) {
            Nav.removeClass('scrolled');
        }
    });


    var mySwiper = new Swiper('.swiper-container', {
        slidesPerView: 1,

        autoplay: {
            delay: 3000,
        },
        speed: 800,
        autoplayDisableOnInteraction: false,
        // Optional parameters
        // direction: 'vertical',
        loop: true,

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 0,
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 0,
            }
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });

    $('#mobile-menu-btn').click(function () {
        $('.mobile-nav-container').show();
    });

    $('#mobile-menu-close').click(function () {
        $('.mobile-nav-container').hide();
    });

});
