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

});
