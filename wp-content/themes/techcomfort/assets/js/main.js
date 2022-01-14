document.addEventListener("DOMContentLoaded", function () {

  const header = document.querySelector(".header");
  const headerMenu = document.querySelector(".header-menu");
  const headerMobilesBottom = document.querySelector(".header-mobiles-bottom");
  const swiperProducts = document.querySelector(".swiper-products");
  const burger = document.querySelector(".burger");
  const menuItem = document.getElementsByClassName("sub-item-js");
  const disableLink = document.getElementsByClassName("disable-link-js");
  const headerClose = document.querySelector(".header-close-js");
  const basketClose = document.querySelectorAll(".basket-close");
  const loginClose = document.querySelector(".login-close");
  const registrationClose = document.querySelector(".registration-close");
  const basket = document.querySelector(".basket");
  const headerBasket = document.getElementsByClassName("open-basket-js");
  const noProducts = document.querySelector(".no-products");
  const itemClose = document.getElementsByClassName("item-close");
  const headerCatalog = document.getElementById("header-catalog-js");
  const catalogSubmenu = document.getElementById("catalog-submenu-js");
  const minusBtn = document.getElementsByClassName("reduce");
  const plusBtn = document.getElementsByClassName("enlarge");
  const favorites = document.getElementsByClassName("favorites-js");
  const headerProfile = document.querySelector(".header-profile");
  const login = document.querySelector(".login");
  const registration = document.querySelector(".registration");
  const registerNow = document.querySelector(".register-now");
  const registered = document.querySelector(".registered");

  // Burger menu
  burger.addEventListener("click", function () {
    headerMobilesBottom.classList.add("show");
  });

  // Show Sub Menu
  for (let i = 0; i < menuItem.length; i++) {
    menuItem[i].addEventListener('click', function () {
      this.classList.toggle('show');
      this.querySelector('a').preventDefault();
    });
  }

  // Disable link for Header Sub Menu
  for (let i = 0; i < disableLink.length; i++) {
    disableLink[i].addEventListener('click', function (e) {
      e.preventDefault();
    });
  }

  //close header mobiles
  headerClose.addEventListener("click", function () {
    headerMobilesBottom.classList.remove("show");
  });

  // reload page
  const ajaxAddToCart = document.getElementsByClassName('ajax_add_to_cart');
  for (let i = 0; i < ajaxAddToCart.length; i++) {
    ajaxAddToCart[i].addEventListener('click', function () {
      window.location.href = "#basket";
      setTimeout(() => {
        location.reload();
      }, 1000)
    });
    if (window.location.hash === '#basket') {
      basket.classList.add('show')
    }
  }

  //basket show
  for (let i = 0; i < headerBasket.length; i++) {
    headerBasket[i].addEventListener("click", function () {
      window.location.hash = '#basket';
      basket.classList.add("show");
    });
  }

  //basket close
  for (let i = 0; i < basketClose.length; i++) {
    basketClose[i].addEventListener("click", function () {
      window.location.hash = '';
      basket.classList.remove("show")
    });
  }

  // basket item close
  // for (let i = 0; i < itemClose.length; i++) {
  //     itemClose[i].addEventListener("click", function () {
  //         this.parentElement.remove();
  //         if (itemClose.length <= 0) {
  //             noProducts.style.display = "block";
  //             noProducts.parentElement.style.flexDirection = "row"
  //         }
  //     });
  // }

  //login show
  if (headerProfile) {
    headerProfile.addEventListener("click", function () {
      login.classList.add("show")
    });
  }

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
    catalogSubmenu.classList.toggle("show");
    if (catalogSubmenu.classList.contains("show")) {
      headerMenu.style.display = "none";
    } else {
      headerMenu.style.display = "block"
    }
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

  // button active
  const btnContour = document.querySelectorAll(".btn-contour");
  const buttonsContainer = document.querySelector(".buttons-container-js");
  if (buttonsContainer) {
    buttonsContainer.addEventListener("click", (event) => {
      const elem = event.target.closest('.btn-contour');
      if (!elem) {
        return;
      }

      btnContour.forEach((item) => {
        if (item.classList.contains('active')) {
          item.classList.remove('active');
        }
      });

      elem.classList.add('active');
    });
  }

  if (swiperProducts) {
    const mySwiperProducts = new Swiper('.swiper-products', {
      slidesPerView: 1,
      spaceBetween: 15,
      breakpoints: {
        556: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 3,
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
  }

  window.addEventListener('scroll', function () {
    if (window.pageYOffset > 163) {
      header.classList.add("fixed")
    } else {
      header.classList.remove("fixed")
    }
  });


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

  // Сравнение товаров
  const compare = document.getElementsByClassName("compare-js");
  for (let i = 0; i < compare.length; i++) {
    compare[i].addEventListener("click", function (e) {
      e.preventDefault();
      this.classList.toggle("active");
      let compareArray = [];
      const dataId = this.getAttribute('data-id');
      if (getCookie('compareArray')) {
        compareArray = getCookie('compareArray').split(',');
        if (compareArray.includes(dataId)) {
          // удаление элемента если он уже сушествует
          const index = compareArray.indexOf(dataId);
          if (index > -1) compareArray.splice(index, 1);
          compareArray.indexOf(dataId)
        } else {
          compareArray.push(dataId);
        }
      } else {
        compareArray.push(dataId);
      }
      setCookie('compareArray', compareArray)
    })
  }
});