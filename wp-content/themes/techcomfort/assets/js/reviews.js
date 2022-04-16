jQuery(document).ready(function ($) {

  // Отправка значений полей
  const form = jQuery('#form-reviews');
  // Сбрасываем значения полей
  jQuery('#form-reviews input, #form-reviews textarea').on('blur', function () {
    jQuery('#form-reviews input, #form-reviews textarea').removeClass('error');
    jQuery('.notification').remove();
    jQuery('#form_submit_reviews').val('Отправить');
  });

  const options = {
    url: ajax_form_object.url,
    data: {
      type: 'add',
      action: 'ajax_form_action_reviews',
      nonce: ajax_form_object.nonce
    },
    type: 'POST',
    dataType: 'json',
    beforeSubmit: function () {
      // При отправке формы меняем надпись на кнопке
      $('#form_submit_reviews').html('Отправляем...');
    },
    success: function (request) {
      if (request.success === true) {
        console.log(request, 'request')
        // Если все поля заполнены, отправляем данные и меняем надпись на кнопке
        form.before('<div class="notification notification_accept">' + request.data + '</div>').slideDown();
        $('#form_submit_reviews').html('Отзыв Отправлено');
        jQuery('#form-reviews').addClass('d-none');
      } else {
        // Если поля не заполнены, выводим сообщения и меняем надпись на кнопке
        $.each(request.data, function (key, val) {
          const name = $('.form_' + key);
          name.addClass('error');
          name.after('<div class="notification notification_warning notification_warning_' + key + '">' + val + '</div>');
        });
        $('#form_submit_reviews').html('Отправить');
        form.before('<div class="notification notification_error">Не удалось отправить, исправьте ошибки</div>').slideDown();
      }
    },
    error: function () {
      $('#form_submit_reviews').html('Отправить');
      form.before('<div class="notification notification_error">Не удалось отправить, исправьте ошибки</div>').slideDown();
    }
  };
  // Отправка формы
  form.ajaxForm(options);

  // Удаление отзыва
  $('.delete-review-js').on('click', function () {
    const element = $(this);
    const options = {
      url: ajax_form_object.url,
      data: {
        type: 'delete',
        action: 'ajax_form_action_reviews',
        nonce: ajax_form_object.nonce,
        id: element.attr('data-id'),
      },
      type: 'POST',
      dataType: 'json',
      success: function ({data}) {
        element.closest('.reviews-item').addClass('d-none');
        new Noty({type: 'success', theme: 'relax', text: data, timeout: 3000}).show();
      },
      error: function () {
        new Noty({type: 'error', theme: 'relax', text: 'Не удалось удалить', timeout: 3000}).show();
      }
    }
    // Отправка формы
    jQuery.ajax(options);
  });
});