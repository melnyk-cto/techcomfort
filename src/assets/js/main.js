const close = document.getElementsByClassName("close")[0];
const basket = document.getElementsByClassName("basket")[0];
const headerBasket = document.getElementsByClassName("header-basket")[0];
const itemClose = document.getElementsByClassName("item-close");

headerBasket.addEventListener("click", function () {
    basket.style.opacity = "1";
    basket.style.visibility = "visible";
});

close.addEventListener("click", function () {
    basket.style.opacity = "0";
    basket.style.visibility = "hidden"
});

// basket item close
const noProducts = document.getElementsByClassName("no-products")[0];
for (let i = 0; i < itemClose.length; i++) {
    itemClose[i].addEventListener("click", function () {
        this.parentElement.remove();
        if (itemClose.length <= 0) {
            noProducts.style.display = "block";
            noProducts.parentElement.style.flexDirection = "row"
        }
    });
}

// quantity
const minusBtn = document.getElementsByClassName("reduce");
const plusBtn = document.getElementsByClassName("enlarge");
for (let i = 0; i < minusBtn.length; i++) {
    let input = plusBtn[i].parentElement.querySelector(".quantity-input");
    plusBtn[i].addEventListener("click", function () {
        input.value = +input.value + 1
    });
    minusBtn[i].addEventListener("click", function () {
        if (input.value <= 0) {
            input.value = 0
        } else {
            input.value = +input.value - 1
        }
    });
}

//favorites
const favorites = document.getElementsByClassName("favorites");
for (let i = 0; i < favorites.length; i++) {
    favorites[i].addEventListener("click", function (e) {
        e.preventDefault();
        this.classList.toggle("active")
    })
}

const mySwiperProducts = new Swiper('.swiper-products', {
    slidesPerView: 1,
    breakpoints: {
        768: {
            slidesPerView: 2,
        },
        1100: {
            slidesPerView: 4,
        }
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
