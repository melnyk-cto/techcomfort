document.addEventListener("DOMContentLoaded", function () {

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


    const attributes = `Главная группа фильтров|Тип работы|Холод-тепло
                        Главная группа фильтров|Холодопроизводительность (кВт)|2.56
                        Главная группа фильтров|Теплопроизводительность (кВт)|2.66
                        Главная группа фильтров|Напряжение, частота, Фазы (В, Гц, ф)|220-240501
                        Главная группа фильтров|Тип хладагента|R-410A
                        Главная группа фильтров|Рекомендованная площадь помещения|20-30 м2`;
    const arrayAttributes = attributes.split('\n');
    const singleAttribute = [];
    arrayAttributes.map(item => singleAttribute.push([item.split('|')]));
    console.log(singleAttribute, 'singleAttribute');

});
