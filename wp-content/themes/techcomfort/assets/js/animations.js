jQuery(document).ready(function ($) {
  $('body').css('opacity', '1');

  $.fn.isInViewport = function () {
    const elementTop = $(this).offset().top;
    const elementBottom = elementTop + $(this).outerHeight();
    const viewportTop = $(window).scrollTop();
    const viewportBottom = viewportTop + $(window).height();
    return elementBottom > viewportTop && elementTop < viewportBottom;
  };

  const isVisible = (selector) => {
    if (selector.length >= 1) {
      if (selector.isInViewport()) {
        selector.addClass('animation');
      } else {
        selector.removeClass('animation');
      }
    }
  }

  // Header
  const header = $('#header');

  // Footer
  const footer = $('#footer');

  // "Главная" страница
  const banner = $('#banner');
  const recommended = $('#anchor-recommended');
  const popular = $('#anchor-popular');
  const advantage = $('#advantage');
  const mostViewed = $('#anchor-most-viewed');
  const contact = $('#contact');

  // "Установка и монтаж" страница
  const servicesContent1 = $("#services-content-1");
  const servicesContent2 = $("#services-content-2");
  const servicesContent3 = $("#services-content-3");
  const servicesContent4 = $("#services-content-4");
  const servicesContent5 = $("#services-content-5");
  const servicesContent6 = $("#services-content-6");
  const installation = $("#installation");

  // "Сервис" страница
  const servicesList = $("#services-list");
  const servicesDescription = $("#services-description");

  // "Наши работы" страница
  const galleryItem = $(".gallery-item");

  // "Оплата и доставка" страница
  const payment = $("#payment");
  const delivery = $("#delivery");

  // "Отзывы" страница
  const reviewsInner = $(".reviews-page .reviews-inner");
  const reviewsList = $(".reviews-page .reviews-list");

  // "Контакты" страница
  const contactForm = $(".contacts .contact-form");
  const contactInfo = $(".contacts .contact-info");
  const map = $(".contacts .map");

  // animations for  "Каталог" страница
  const catalog = $('#catalog-content');
  setInterval(() => {
    if ($(".loading-page-js").hasClass("d-none")) {
      isVisible(catalog);
    }
  }, 1000);

  const runAnimations = () => {
    // Header
    isVisible(header);

    // "Контакты" страница
    isVisible(contactForm);
    isVisible(contactInfo);
    isVisible(map);

    // "Отзывы" страница
    isVisible(reviewsInner);
    isVisible(reviewsList);

    // "Оплата и доставка" страница
    isVisible(payment);
    isVisible(delivery);

    // "Наши работы" страница
    for (let i = 0; i < galleryItem.length; i++) {
      isVisible(galleryItem.eq(i));
    }

    // "Сервис" страница
    isVisible(servicesList);
    isVisible(servicesDescription);

    // "Главная" page
    isVisible(banner);
    isVisible(recommended);
    isVisible(popular);
    isVisible(advantage);
    isVisible(mostViewed);
    isVisible(contact);

    // "Установка и монтаж" страница
    isVisible(servicesContent1);
    isVisible(servicesContent2);
    isVisible(servicesContent3);
    isVisible(servicesContent4);
    isVisible(servicesContent5);
    isVisible(servicesContent6);
    isVisible(installation);

    // Footer
    isVisible(footer);
  }
  runAnimations();

  // animations on scroll
  $(window).on('scroll', function () {
    runAnimations();
  });

});