const mySwiper = new Swiper('.swiper-reviews', {
    // breakpoints: {
    //     768: {
    //         slidesPerView: 2,
    //     },
    //     1100: {
    //         slidesPerView: 2,
    //     }
    // },
    slidesPerView: 2,
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
    spaceBetween: 70,
    slidesPerView: 3,
    freeMode: true,
    loop: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
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
    thumbs: {
        swiper: swiperBanner
    },

});



