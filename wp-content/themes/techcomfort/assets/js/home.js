document.addEventListener("DOMContentLoaded", function () {

    const mySwiper = new Swiper('.swiper-reviews', {
        slidesPerView: 1,
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1200: {
                slidesPerView: 3,
            },
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    const swiperBanner = new Swiper('.swiper-banner', {
        spaceBetween: 15,
        slidesPerView: 3,
        freeMode: true,
        watchSlidesProgress: true,
        breakpoints: {
            768: {
                spaceBetween: 25,
            },
            1151: {
                spaceBetween: 70,
            }
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    const swiperBannerTop = new Swiper('.swiper-banner-top', {
        // Optional parameters
        slidesPerView: 1,
        centeredSlides: true,
        spaceBetween: 10,
        autoplay: true,
        speed: 500,
        effect: 'coverflow',
        loop: true,
        thumbs: {
            swiper: swiperBanner,
        },
    });

});