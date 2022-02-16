document.addEventListener("DOMContentLoaded", function () {
console.log(111)
  //   Удаление из избранного
  const compareButton = document.getElementsByClassName('compare-close-js');
  for (let i = 0; i < compareButton.length; i++) {
    compareButton[i].addEventListener('click', function () {
      this.closest('.product-item').classList.add('d-none');
    })
  }

});


jQuery(document).ready(function () {
  // Отправка значений полей
  jQuery('.submit-icon-js').on('click', function (e) {
    e.preventDefault();

    // добавляем класс "active"
    jQuery(this).toggleClass("active")

    let type;
    if (jQuery(this).attr('data-name') === 'compare') {
      type = 'compare';
    } else if (jQuery(this).attr('data-name') === 'favorites') {
      type = 'favorites';
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
    // Отправка формы
    jQuery.ajax(options);
  })

});