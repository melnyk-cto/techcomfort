jQuery(document).ready(function ($) {
  const submitButton = $('#order-form-submit');
  const form = $('#order-form');
  const basket = JSON.parse($('textarea[name="textarea-products"]').val());

  // Сбрасываем значения полей
  $('#order-form input, #order-form textarea').on('blur', function () {
    $('#order-form input, #order-form textarea').removeClass('error');
    $('.notification').remove();
    submitButton.val('Создать Заказ');
  });

  const options = {
    type: "POST",
    url: ajax_form_object.url,
    data: {
      action: 'ajax_form_action_order_form',
      nonce: ajax_form_object.nonce,
    },
    beforeSubmit: function () {
      submitButton.html('Отправляем...');
    },
    success: function (request) {
      if (request.success === true) {
        // Если все поля заполнены, отправляем данные и меняем надпись на кнопке
        form.after('<div class="notification notification_accept">' + request.data + '</div>').slideDown();
        submitButton.html('Заказ отправлен');
        form.addClass('d-none');
      } else {
        // Если поля не заполнены, выводим сообщения и меняем надпись на кнопке
        // Если поля не заполнены, выводим сообщения и меняем надпись на кнопке
        $.each(request.data, function (key, val) {
          const name = $('[name="' + key + '"]');
          name.addClass('error');
          name.after('<div class="notification notification_warning notification_warning_' + key + '">' + val + '</div>');
        });
        form.after('<div class="notification notification_error">Не удалось отправить, исправьте ошибки</div>').slideDown();
        submitButton.html('Создать Заказ');
      }
    },
    error: function (error) {
      form.after('<div class="notification notification_error">Не удалось отправить, исправьте ошибки</div>').slideDown();
      submitButton.html('Создать Заказ');
    }
  };

  if (basket.length === 0) {
    form.addClass('d-none');
    form.after('<div class="notification notification_error">Добавте товаров в корзину</div>').slideDown();
  } else {
    form.ajaxForm(options);
  }
});
