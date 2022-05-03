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
  const basket = document.querySelector(".basket");
  const headerBasket = document.getElementsByClassName("open-basket-js");
  const noProducts = document.querySelector(".no-products");
  const itemClose = document.getElementsByClassName("item-close");
  const headerCatalog = document.getElementById("header-catalog-js");
  const catalogSubmenu = document.getElementById("catalog-submenu-js");
  const minusBtn = document.getElementsByClassName("reduce");
  const plusBtn = document.getElementsByClassName("enlarge");

  // Плавная прокрутка
  const anchors = document.querySelectorAll('a[href*="#anchor-"]')
  for (let anchor of anchors) {
    anchor.addEventListener('click', function (e) {
      e.preventDefault()
      const blockID = anchor.getAttribute('href').substr(1)
      document.getElementById(blockID).scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      })
    })
  }

  // Burger menu
  burger.addEventListener("click", function () {
    headerMobilesBottom.classList.add("show");
  });

  // Show Sub Menu
  for (let i = 0; i < menuItem.length; i++) {
    menuItem[i].addEventListener('click', function (e) {
      this.classList.toggle('show');
      e.stopPropagation();
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
});
