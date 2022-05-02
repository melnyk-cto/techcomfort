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
  const recommended = $('#recommended');
  const popular = $('#popular');
  const advantage = $('#advantage');
  const mostViewed = $('#most-viewed');
  const contact = $('#contact');

  // "Установка и монтаж" страница
  const servicesContent1 = $("#services-content-1");
  const servicesContent2 = $("#services-content-2");
  const servicesContent3 = $("#services-content-3");
  const servicesContent4 = $("#services-content-4");
  const servicesContent5 = $("#services-content-5");
  const servicesContent6 = $("#services-content-6");
  const installation = $("#installation");

  // animations for  "Каталог" страница
  const catalog = $('#catalog-content');
  setInterval(() => {
    if ($(".loading-page-js").hasClass("d-none")) {
      isVisible(catalog);
    }
  }, 1000);

  // animations on scroll
  $(window).on('load scroll', function () {
    // Header
    isVisible(header);

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
  });

});