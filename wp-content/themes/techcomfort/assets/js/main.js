document.addEventListener("DOMContentLoaded", function () {

  const header = document.querySelector(".header");
  const headerMenu = document.querySelector(".header-menu");
  const headerMobilesBottom = document.querySelector(".header-mobiles-bottom");
  const swiperProducts = document.querySelector(".swiper-products");
  const burger = document.querySelector(".burger");
  const menuItem = document.getElementsByClassName("sub-item-js");
  const disableLink = document.getElementsByClassName("disable-link-js");
  const headerClose = document.querySelector(".header-close-js");
  const headerCatalog = document.getElementById("header-catalog-js");
  const catalogSubmenu = document.getElementById("catalog-submenu-js");

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

  //header catalog
  headerCatalog.addEventListener("click", function () {
    catalogSubmenu.classList.toggle("show");
    if (catalogSubmenu.classList.contains("show")) {
      headerMenu.style.display = "none";
    } else {
      headerMenu.style.display = "block"
    }
  });

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
