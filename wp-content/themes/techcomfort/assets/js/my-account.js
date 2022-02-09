document.addEventListener("DOMContentLoaded", function () {

  const categoryItem = document.querySelectorAll(".category-item");
  const infoList = document.querySelectorAll(".info-list");
  const categories = document.querySelector('.category');

  categories.addEventListener('click', (event) => {
    const elem = event.target.closest('.category-item');
    if (!elem) {
      return;
    }
    const sectionId = elem.dataset.sectionId;

    categoryItem.forEach((item) => {
      if (item.classList.contains('active')) {
        item.classList.remove('active');
      }
    });

    infoList.forEach((elem) => {
      if (elem.classList.contains('active')) {
        elem.classList.remove('active');
      }
    });

    elem.classList.add('active');
    document.getElementById(sectionId).classList.add('active');
  });

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

  // clear wishlist
  const clearBtn = document.getElementsByClassName("clear-all")[0];
  const wishesEmpty = document.getElementsByClassName("empty")[0];
  // const wishesItem = document.getElementsByClassName("wishes-item")[0];
  const wishesProducts = document.getElementsByClassName("products")[0];

  clearBtn.addEventListener("click", function () {
    this.classList.toggle("active");
    if (this.classList.contains("active")) {
      this.parentElement.style.justifyContent = "center";
      wishesEmpty.classList.add("active");
      wishesProducts.classList.add("hidden");
      // wishesItem.classList.add("hidden")
    } else {
      wishesEmpty.classList.remove("active");
      wishesProducts.classList.remove("hidden");
      // wishesItem.classList.remove("hidden")
    }
  });

});

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
    $('#form')[0].reset();
    $('#form input, #form textarea').removeClass('error');
    $('.notification').remove();
  });


  const form = $('#form');
  // Сбрасываем значения полей
  $('#form input, #form textarea').on('blur', function () {
    $('#form input, #form textarea').removeClass('error');
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