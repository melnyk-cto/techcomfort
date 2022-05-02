jQuery(document).ready(function ($) {
  $('body').css('opacity', '1');

  const isVisible = (selector) => {
    if (selector.visible(true)) {
      selector.addClass('animation');
    } else {
      selector.removeClass('animation');
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

  // on load
  isVisible(header);
  isVisible(banner);
  isVisible(recommended);
  isVisible(popular);
  isVisible(advantage);
  isVisible(mostViewed);
  isVisible(contact);
  isVisible(footer);

  $(window).scroll(function () {
    isVisible(header);
    isVisible(banner);
    isVisible(recommended);
    isVisible(popular);
    isVisible(advantage);
    isVisible(mostViewed);
    isVisible(contact);
    isVisible(footer);
  });

});