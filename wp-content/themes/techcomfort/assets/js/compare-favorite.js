jQuery(document).ready(function () {

  // Отправка значений полей
  jQuery('body').on('click', '.submit-icon-js', function (e) {
    e.preventDefault();
    const productsItem = jQuery(this).parents('.products-item');
    productsItem.addClass('loading-products');

    const dataName = jQuery(this).attr('data-name');
    const userID = jQuery(this).attr('data-userID');

    // проверяем тип
    let type;
    if (dataName === 'compare') {
      type = 'compare';
    } else if (dataName === 'favorites') {
      type = 'favorites';
    }

    //   Удаление из избранного
    if (jQuery(this).hasClass('compare-close-js')) {
      const inner = jQuery(this).closest('.comparison-inner');
      jQuery(this).closest('.product-item').fadeOut("slow", function () {
        jQuery(this).remove();
        if (jQuery('.product-item').length === 0) inner.html(`<h3>Нет товаров для сравнения</h3>`)
      })
    }

    const options = {
      url: ajax_form_object.url,
      data: {
        action: 'ajax_form_action_compare_favorite',
        nonce: ajax_form_object.nonce,
        valueType: type,
        id: jQuery(this).attr('data-id'),
      },
      type: 'POST',
      dataType: 'json',
      beforeSubmit: function () {
        // При отправке формы меняем надпись на кнопке
      },
      success: function (request) {
        productsItem.removeClass('loading-products');

        // Удаление из списка желаний в личном кабинете
        if (productsItem.hasClass('favorite-item')) {
          const parent = productsItem.parent();
          productsItem.remove();
          if (jQuery('.products-item.favorite-item').length <= 0) parent.append(`<h3>Список желаний пуст</h3>`)
        }

        if (request.success === true) {
          // Удача
          console.log('Отправлено');

          // обновление значения в хедере
          const {data: {info: {compare = null, favorite = null} = {}} = {}} = request;
          const compareSelector = jQuery('.compare-count-js');
          const favoriteSelector = jQuery('.favorite-count-js');

          const addCount = (selector, count) => {
            if (count) {
              selector.removeClass('d-none');
            } else {
              selector.addClass('d-none');
            }
            selector.html(count);
          }

          addCount(compareSelector, compare)
          addCount(favoriteSelector, favorite)

          new Noty({
            type: 'success',
            theme: 'relax',
            text: `Обновлено!`,
            timeout: 3000
          }).show();


        } else {
          // Если поля не заполнены, выводим сообщения и меняем надпись на кнопке
          console.log('Не отправлено')
        }
      },
      error: function () {
        productsItem.removeClass('loading-products');
        console.error('Не удалось отправить, исправьте ошибки')
      }
    };

    if (userID) {
      // добавляем класс "active"
      jQuery(this).toggleClass("active");

      // Отправка формы
      jQuery.ajax(options);
    } else {
      productsItem.removeClass('loading-products');

      // Показываем notification
      new Noty({
        type: 'error',
        theme: 'relax',
        text: "Вам нужно зарегистрироваться!",
        timeout: 3000
      }).show();
    }
  })

});