document.addEventListener("DOMContentLoaded", function () {

  const categoryItem = document.getElementsByClassName("category-item");
  const infoList = document.getElementsByClassName("info-list");

  // Переключение табов
  for (let i = 0; i < categoryItem.length; i++) {
    categoryItem[i].addEventListener('click', () => {
      for (let k = 0; k < categoryItem.length; k++) {
        categoryItem[k].classList.remove('active');
        infoList[k].classList.remove('active');
      }
      categoryItem[i].classList.add('active');
      infoList[i].classList.add('active');
    });
  }

  // open order history
  const arrow = document.querySelectorAll(".arrow");

  for (let i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", function () {
      this.classList.toggle("active");
      if (this.classList.contains("active")) {
        this.parentElement.classList.add("active")
      } else {
        this.parentElement.classList.remove("active")
      }
    })
  }


  // Удаление из списка желаний
  const favoritesButton = document.getElementsByClassName('favorites-js');
  const inner = document.getElementsByClassName('products-list')[0];
  for (let i = 0; i < favoritesButton.length; i++) {
    favoritesButton[i].addEventListener('click', function () {
      this.closest('.favorite-item').remove();
      if (!inner.querySelector('.products-item')) {
        const p = document.createElement('h3');
        p.innerHTML = 'Список желаний пуст'
        inner.appendChild(p);
      }
    })
  }

  // Открыть соответствующую вкладку
  const hash = window.location.hash;
  if (hash === '#ordering') {
    categoryItem[1].classList.add('active');
    infoList[1].classList.add('active');
  } else if (hash === '#favorites') {
    categoryItem[2].classList.add('active');
    infoList[2].classList.add('active');
  } else if (hash === '#viewed') {
    categoryItem[3].classList.add('active');
    infoList[3].classList.add('active');
  } else if (hash === '#reviews') {
    categoryItem[4].classList.add('active');
    infoList[4].classList.add('active');
  } else {
    categoryItem[0].classList.add('active');
    infoList[0].classList.add('active');
  }
});

// Personal info
jQuery(document).ready(function ($) {
  jQuery('.edit-js').click(function () {
    jQuery(this).addClass('d-none');
    jQuery('#form_submit').removeClass('d-none');
    jQuery('.cancel-js').removeClass('d-none');
    jQuery('.personal-data').addClass('edited');
  });

  jQuery('.cancel-js').click(function () {
    jQuery(this).addClass('d-none');
    jQuery('#form_submit').addClass('d-none');
    jQuery('.edit-js').removeClass('d-none');
    jQuery('.personal-data').removeClass('edited');

    // Сбрасываем значения полей
    $('#form-personal')[0].reset();
    $('#form-personal input, #form-personal textarea').removeClass('error');
    $('.notification').remove();
  });


  const form = $('#form-personal');
  // Сбрасываем значения полей
  $('#form-personal input, #form-personal textarea').on('blur', function () {
    $('#form-personal input, #form-personal textarea').removeClass('error');
    $('.notification').remove();
    $('#form_submit').val('Отправить');
  });

  // Отправка значений полей
  const options = {
    url: ajax_form_object.url,
    data: {
      action: 'ajax_form_action',
      nonce: ajax_form_object.nonce
    },
    type: 'POST',
    dataType: 'json',
    beforeSubmit: function () {
      // При отправке формы меняем надпись на кнопке
      $('#form_submit').html('Отправляем...');
    },
    success: function (request) {
      if (request.success === true) {
        // Если все поля заполнены, отправляем данные и меняем надпись на кнопке
        form.before('<div class="notification notification_accept">' + request.data + '</div>').slideDown();
        $('#form_submit').html('Отправить');
        jQuery('#form_submit').addClass('d-none');
        jQuery('.cancel-js').addClass('d-none');
        jQuery('.edit-js').removeClass('d-none');
        jQuery('.personal-data').removeClass('edited');

      } else {
        // Если поля не заполнены, выводим сообщения и меняем надпись на кнопке
        $.each(request.data, function (key, val) {
          const name = $('.form_' + key);
          name.addClass('error');
          name.after('<div class="notification notification_warning notification_warning_' + key + '">' + val + '</div>');
        });
        $('#form_submit').html('Отправить');
        form.before('<div class="notification notification_error">Не удалось отправить, исправьте ошибки</div>').slideDown();
      }
    },
    error: function () {
      $('#form_submit').html('Отправить');
      form.before('<div class="notification notification_error">Не удалось отправить, исправьте ошибки</div>').slideDown();
    }
  };
  // Отправка формы
  form.ajaxForm(options);
});