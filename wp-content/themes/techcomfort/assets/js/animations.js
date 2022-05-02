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

  // "Home" page
  const banner = $('#banner');
  const recommended = $('#recommended');
  const popular = $('#popular');
  const advantage = $('#advantage');
  const mostViewed = $('#most-viewed');
  const contact = $('#contact');

  // animations for  "Catalog" page
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

    // "Home" page
    isVisible(banner);
    isVisible(recommended);
    isVisible(popular);
    isVisible(advantage);
    isVisible(mostViewed);
    isVisible(contact);

    // Footer
    isVisible(footer);
  });

});