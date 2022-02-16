document.addEventListener("DOMContentLoaded", function () {

  const favorites = document.getElementsByClassName("favorites-js");
  const compare = document.getElementsByClassName("compare-js");


  // // Сравнение товаров
  // const comparisonClose = document.getElementsByClassName("comparison-close-js");
  // for (let i = 0; i < compare.length; i++) {
  //   compare[i].addEventListener("click", function (e) {
  //     e.preventDefault();
  //     this.classList.toggle("active");
  //     // updateCookie(this);
  //   });
  // }
  //
  // for (let i = 0; i < comparisonClose.length; i++) {
  //   comparisonClose[i].addEventListener('click', function () {
  //     // updateCookie(this);
  //     window.location.reload();
  //   });
  // }

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