const swiperProduct = new Swiper('.swiper-product', {
    // Optional parameters
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    breakpoints: {
        768: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        1151: {
            slidesPerView: 4,
            spaceBetween: 15,
        }
    },
});

const swiperProductTop = new Swiper('.swiper-product-top', {
    // Optional parameters
    slidesPerView: 1,
    centeredSlides: true,
    spaceBetween: 10,
    thumbs: {
        swiper: swiperProduct
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


