const swiperProduct = new Swiper('.swiper-product', {
    // Optional parameters
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
});

const swiperProductTop = new Swiper('.swiper-product-top', {
    // Optional parameters
    slidesPerView: 1,
    centeredSlides: true,
    spaceBetween: 10,
    thumbs: {
        swiper: swiperProduct
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});


