document.addEventListener("DOMContentLoaded", function () {
  const url = new URL(window.location.href);

  // Выбранные фильтры
  const selectedFilters = document.getElementsByClassName('selected-filters')[0];
  const selectedFilter = document.getElementsByClassName('selected-filter-wrapper-js')[0];
  const selected = document.getElementsByClassName('selected-filter');
  const clear = document.getElementsByClassName('clear-filters-js')[0];

  const params = url.search.split('&');

  // Показываем выбранные фильтры
  for (let i = 0; i < params.length; i++) {
    const name = params[i].split('=');
    if (decodeURI(name[0]) !== '?category' && decodeURI(name[0]) !== 'type') {
      const div = document.createElement('div');
      div.innerHTML = decodeURI(name[0]
        .replaceAll('_', ' ')
        .replaceAll('%2C', ',')
        .replaceAll('%2F', '/'));
      div.className = 'selected-filter';
      div.setAttribute('data-name', decodeURI(name[0].replaceAll('%2C', ',')));
      selectedFilter.appendChild(div)
    }
  }

  // Удаляем выбранный фильтр
  for (let i = 0; i < selected.length; i++) {
    selected[i].addEventListener('click', function () {
      this.getAttribute('data-name');
      url.searchParams.delete(this.getAttribute('data-name'));
      // window.location.href = url;
    });
  }

  // Очистка параметров фильтрации
  clear.addEventListener('click', function (e) {
    e.preventDefault();
    const category = url.searchParams.get('category');
    // window.location.href = `${window.location.pathname}/?category=${category}`
  });

  // Скрываем фильтры если ничего не выбрано
  if (selected.length <= 0) {
    selectedFilters.classList.add('d-none');
    clear.classList.add('d-none');
  } else {
    selectedFilters.classList.remove('d-none');
    clear.classList.remove('d-none');
  }

  // Сортировка
  const sorting = document.getElementById('sorting');
  sorting.addEventListener('change', function () {
    // setTimeout(() => {
    url.searchParams.set('type', this.value);
    // window.location.href = url;
    // }, 500)
  })

  // Фильтрация по цене при изменении ползунка
  const priceBtn = document.getElementsByClassName("filler-price-js");
  const input0 = document.getElementsByClassName("input-with-keypress-0");
  const input1 = document.getElementsByClassName("input-with-keypress-1");

  for (let i = 0; i < priceBtn.length; i++) {
    priceBtn[i].addEventListener('click', function () {
      // setTimeout(() => {
      // url.searchParams.set(this.getAttribute('data-name'), `${input0[i].value}.${input1[i].value}`);
      // window.location.href = url;
      // }, 500)
    });
  }


  // Фильтрация по цене при загрузке страницы
  if (url.searchParams.get('type')) {
    // sorting.value = url.searchParams.get('type');
  } else {
    // sorting.value = 'default';
  }


  //  Фильтрация по значению
  const filter = document.getElementsByClassName('filter-label-js');
  for (let i = 0; i < filter.length; i++) {
    filter[i].addEventListener('click', function () {
      //  Удаляем значение фильтрации если это значение было выбрано ранее
      // if (url.searchParams.get(this.getAttribute('data-key')) === this.getAttribute('data-value')) {
      //   url.searchParams.delete(this.getAttribute('data-key'));
      // } else {
      //   url.searchParams.set(this.getAttribute('data-key'), this.getAttribute('data-value'));
      // }
    });
  }

  //  Фильтрация по значению


});

jQuery(document).ready(function ($) {
  $('.filter-label-js').on('click', function () {
    const element = $(this);

    const options = {
      url: ajax_form_object.url,
      data: {
        action: 'ajax_form_action_update_filter',
        nonce: ajax_form_object.nonce,
        category: '',
        key: '',
        value: '',
      },
      type: 'POST',
      dataType: 'html',
      success: function (res) {
        // const pathname = window.location.pathname;
        // const key = element.attr('data-key');
        // const value = element.attr('data-value');
        // window.history.pushState('', '', `${window.location.pathname}`);
        $('.products-list').html(res);

        new Noty({type: 'success', theme: 'relax', text: "Обновлено", timeout: 3000}).show();
      },
      error: function () {
        new Noty({type: 'error', theme: 'relax', text: 'Не удалось обновить', timeout: 3000}).show();
      }
    }

    // Отправка формы
    jQuery.ajax(options);
  });

});