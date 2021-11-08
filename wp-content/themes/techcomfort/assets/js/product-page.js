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
                slidesPerView: 3,
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


    // Description for product page
    const characteristicsParent = document.getElementById('characteristics-list');
    const arrayAttributes = descriptionProduct.split('\n');
    const singleAttribute = [];
    arrayAttributes.map(item => singleAttribute.push([item.split('|')]));
    for (let i = 0; i < singleAttribute.length; i++) {
        let li = document.createElement("li")
        let p = document.createElement("p")
        let span = document.createElement("span")
        characteristicsParent.append(li);
        li.setAttribute('class', 'characteristics-item');
        li.append(p);
        li.children[0].innerHTML = singleAttribute[i][0][1];
        li.append(span);
        li.children[1].innerHTML = singleAttribute[i][0][2];
    }

    // Просмотренные товары (сохранение в localStorage)
    // возвращает куки с указанным name, или undefined, если ничего не найдено
    function getCookie(name) {
        let matches = document.cookie.match(new RegExp(
            "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
        ));
        return matches ? decodeURIComponent(matches[1]) : undefined;
    }

    function setCookie(name, value, options = {}) {
        options = {
            path: '/',
            // при необходимости добавьте другие значения по умолчанию
            ...options
        };

        if (options.expires instanceof Date) {
            options.expires = options.expires.toUTCString();
        }

        let updatedCookie = escape(name) + "=" + escape(value);

        for (let optionKey in options) {
            updatedCookie += "; " + optionKey;
            let optionValue = options[optionKey];
            if (optionValue !== true) {
                updatedCookie += "=" + optionValue;
            }
        }

        console.log(updatedCookie, 'updatedCookie')
        document.cookie = updatedCookie;
    }


    // Добавление в cookie товаров которые посещал пользователь
    const url = new URL(window.location.href);
    const name = 'viewedProducts';
    let data = getCookie(name);
    if (data) {
        if (!data.includes(url.searchParams.get('uid'))) {
            let value = [...data.split(',')];
            value.push(url.searchParams.get('uid'));
            setCookie(name, value.slice(value.length - 10)) // показывать только 10 последних елементов
        }
    } else {
        let value = [];
        value.push(url.searchParams.get('uid'));
        setCookie(name, value)
    }
});
