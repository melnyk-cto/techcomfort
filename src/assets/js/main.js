const burger = document.getElementsByClassName("burger")[0];
const headerMobilesBottom = document.getElementsByClassName("header-mobiles-bottom")[0];
const headerClose = document.getElementsByClassName("header-close-js")[0];
const basketClose = document.querySelectorAll(".basket-close");
const loginClose = document.querySelector(".login-close");
const registrationClose = document.querySelector(".registration-close");
const basket = document.querySelector(".basket");
const headerBasket = document.getElementsByClassName("header-basket");
const noProducts = document.getElementsByClassName("no-products")[0];
const itemClose = document.getElementsByClassName("item-close");
const headerCatalog = document.getElementById("header-catalog-js");
const catalogSubmenu = document.getElementById("catalog-submenu-js");
const minusBtn = document.getElementsByClassName("reduce");
const plusBtn = document.getElementsByClassName("enlarge");
const favorites = document.getElementsByClassName("favorites");
const headerProfile = document.querySelector(".header-profile");
const login = document.querySelector(".login");
const registration = document.querySelector(".registration");
const registerNow = document.querySelector(".register-now");
const registered = document.querySelector(".registered");

// Burger menu
burger.addEventListener("click", function () {
    headerMobilesBottom.style.visibility = "visible";
    headerMobilesBottom.style.opacity = "1";
});

//basket show
for (let i = 0; i < headerBasket.length; i++) {
    headerBasket[i].addEventListener("click", function () {
        basket.classList.add("show")
    });
}

//basket close
for (let i = 0; i < basketClose.length; i++) {
    basketClose[i].addEventListener("click", function () {
        basket.classList.remove("show")
    });
}

// basket item close
for (let i = 0; i < itemClose.length; i++) {
    itemClose[i].addEventListener("click", function () {
        this.parentElement.remove();
        if (itemClose.length <= 0) {
            noProducts.style.display = "block";
            noProducts.parentElement.style.flexDirection = "row"
        }
    });
}

//close header mobiles
headerClose.addEventListener("click", function () {
    headerMobilesBottom.style.visibility = "hidden";
    headerMobilesBottom.style.opacity = "0";
});

//login show
headerProfile.addEventListener("click", function () {
    login.classList.add("show")
});

//login hidden
loginClose.addEventListener("click", function () {
    login.classList.remove("show")
});

//registration show
registerNow.addEventListener("click", function () {
    login.classList.remove("show");
    registration.classList.add("show")
});

//registration hidden
registrationClose.addEventListener("click", function () {
    registration.classList.remove("show")
});
registered.addEventListener("click", function () {
    registration.classList.remove("show");
    login.classList.add("show")
});

//header catalog
headerCatalog.addEventListener("click", function () {
    catalogSubmenu.classList.toggle("show")
});

// quantity
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
            slidesPerView: 3,
        },
        1151: {
            slidesPerView: 4,
        }
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
