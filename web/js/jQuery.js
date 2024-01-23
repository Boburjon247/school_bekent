$(document).ready(function () {
    'use strict';
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 0,
        centeredSlides: true,
        autoplay: {
            delay: 10000,
            disableOnInteraction: false
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
    });

    // owl-carusel section 2
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            800: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    });
    // uzbekmap
    // const uzbekmap = document.querySelectorAll('.mapdiv path');
    // const titleHover = document.querySelector('.titleHover');
    // uzbekmap.forEach((element,index)=>{
    //     element.addEventListener('mouseover',(e)=>{
    //         let maptitle = element.getAttribute('name');
    //         titleHover.innerHTML = maptitle
    //     });
    //     element.classList.remove('active');
    // });
    // $('.mapdiv').hover(function () {
    //     $('.titleHover').text("Fargʻona");
    //     $('.fargona').addClass('active');
    // })

    // register
    $('.user').on('click', () => {
        $('.registration_wrap').toggle('slow');
        $('.registration_wrap').css('display', 'flex');
        $('body').css('overflow', 'hidden');
    });
    // exit register btn
    $('.regist_close').on('click', () => {
        $('.registration_wrap').toggle('fast');
        $('body').css('overflow', 'auto');
    });

    // register eyes btn
    (function ($) {
        $.regis_check = function () {
            if ($('.eyes i').hasClass('fa-eye-slash')) {
                $('.password_login_reg').attr('type', 'text');
                $('.eyes i').removeClass('fa-eye-slash');
                $('.eyes i').addClass('fa-eye');
            }
            else {
                $('.password_login_reg').attr('type', 'password');
                $('.eyes i').removeClass('fa-eye');
                $('.eyes i').addClass('fa-eye-slash');
            }
        }
    })(jQuery)

    $('.eyes i').on('click', () => {
        if ($('.password_login_reg').val() != '') {
            jQuery.regis_check();
        }
    });

    // navbar top animation
    $(window).on('scroll', () => {
        if ($(this).scrollTop() > 550) {
            $('.headerTop').addClass('active');
            $('.uplink').addClass('active');
        }
        else {
            $('.headerTop').removeClass('active');
            $('.uplink').removeClass('active');

        }
    });
    // hamburger accordion
    $(function () {
        $("#accordion_hamburger").accordion({
            collapsible: true
        });
    });
    // hamburger btn
    $('.hamburgerBtn').on('click', () => {
        $('.hamburger_hide').toggle('slow');
        $('body').css('overflow', 'hidden');
    });
    $('.hamburger_exit').on('click', () => {
        $('.hamburger_hide').toggle('slow');
        $('body').css('overflow', 'auto');
    });

    // video play
    $(".btn_play").on("click", function () {
        $('.section3_cart_img_show').toggle('fast');
        $('.section3_cart_img_show').css('display', 'flex');
    });
    $('.section3_cart_img_hide').on('click', () => {
        $('.section3_cart_img_show').toggle('fast');
    });


    const langItem = document.querySelectorAll('.langItem');
    const langAbout = document.querySelector('.langAbout');
    langItem.forEach((element, index) => {
        element.addEventListener('click', (e) => {
            langAbout.innerHTML = ' ';
            localStorage.setItem('lang', element.textContent);
            langAbout.innerHTML = localStorage.getItem('lang');
        });
    });
    if (localStorage.getItem('lang')) {
        langAbout.innerHTML = localStorage.getItem('lang');
    }


});
