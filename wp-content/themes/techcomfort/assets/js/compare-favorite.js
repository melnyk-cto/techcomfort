jQuery(document).ready(function () {

  // Отправка значений полей
  jQuery('.submit-icon-js').on('click', function (e) {
    e.preventDefault();

    const dataName = jQuery(this).attr('data-name');
    const userID = jQuery(this).attr('data-userID');
    const notification = jQuery('.notification');


    // проверяем тип
    let type;
    if (dataName === 'compare') {
      type = 'compare';
    } else if (dataName === 'favorites') {
      type = 'favorites';
    }

    //   Удаление из избранного
    if (jQuery(this).hasClass('compare-close-js')) {
      jQuery(this).closest('.product-item').addClass('d-none');
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
        if (request.success === true) {
          // Удача
          console.log('Отправлено')
        } else {
          // Если поля не заполнены, выводим сообщения и меняем надпись на кнопке
          console.log('Не отправлено')
        }
      },
      error: function () {
        console.error('Не удалось отправить, исправьте ошибки')
      }
    };

    if (userID) {
      // добавляем класс "active"
      jQuery(this).toggleClass("active");

      // Отправка формы
      jQuery.ajax(options);
    } else {
      // Показываем notification
      notification.attr('data-type', 'error');
      notification.text('Вам нужно зарегестрироватся!');
      notification.removeClass('d-none');
      setTimeout(() => {
        notification.addClass('d-none');
      }, 3000)
    }
  })

});