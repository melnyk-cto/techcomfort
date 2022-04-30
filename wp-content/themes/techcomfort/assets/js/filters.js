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
  const url = new URL(window.location.href);

  // Select для сортировки
  const sorting = $('#sorting');
  const catalog = $('.catalog');
  const loading = $('.loading');

  const urlOrder = url.searchParams.get('order');
  const urlMetaKey = url.searchParams.get('meta-key');
  const urlPage = url.searchParams.get('pagination-page');

  // Фильтрация по цене при загрузке страницы
  if (urlOrder === 'desc' && urlMetaKey === '_wc_review_count') {
    sorting.val('default');
  } else if (urlOrder === 'asc' && urlMetaKey === '_price') {
    sorting.val('price');
  } else if (urlOrder === 'desc' && urlMetaKey === '_price') {
    sorting.val('price-desc');
  } else if (urlOrder === 'desc' && urlMetaKey === '_wc_review_count') {
    sorting.val('popularity');
  } else if (urlOrder === 'desc' && urlMetaKey === '_wc_average_rating') {
    sorting.val('rating');
  }

  // Текущая страница
  let page = 1;
  if (urlPage) page = urlPage;
  url.searchParams.delete('pagination-page');
  // нужно для корректной пагинации
  const newUrlDecoded = decodeURIComponent(window.location.pathname + `?pagination-page=custom&${url.searchParams}`);

  let data = {
    'action': 'ajax_form_action_update_filter',
    'nonce': ajax_form_object.nonce,
    'order': sorting.find(":selected").attr('data-order'),
    'meta-key': sorting.find(":selected").attr('data-meta-key'),
    'url': newUrlDecoded,
    'page': page,
  };

  const options = {
    url: ajax_form_object.url,
    type: 'POST',
    dataType: 'html',
    success: function (res) {
      $('.products-list').html(res);
      catalog.css('opacity', '1');
      loading.addClass('d-none');
      new Noty({type: 'success', theme: 'relax', text: "Обновлено", timeout: 3000}).show();
    },
    error: function () {
      new Noty({type: 'error', theme: 'relax', text: 'Не удалось обновить', timeout: 3000}).show();
    }
  }
  jQuery.ajax({...options, data: data});

  sorting.on('change', function () {
    const order = sorting.find(":selected").attr('data-order');
    const metaKey = sorting.find(":selected").attr('data-meta-key');

    const url = new URL(window.location.href);
    url.searchParams.set('order', order);
    url.searchParams.set('meta-key', metaKey);
    url.searchParams.delete('pagination-page');
    const newUrl = window.location.pathname + `?${url.searchParams}`;
    window.history.pushState({path: newUrl}, '', newUrl);

    // нужно для корректной пагинации
    const newUrlDecoded = decodeURIComponent(window.location.pathname + `?pagination-page=custom&${url.searchParams}`);

    data = {...data, 'order': order, 'meta-key': metaKey, 'url': newUrlDecoded, 'page': 1}
    jQuery.ajax({...options, data: data});
  });


  $('.filter-label-js').on('click', function () {
    const options = {
      url: ajax_form_object.url,
      data: {
        action: 'ajax_form_action_update_filter',
        nonce: ajax_form_object.nonce,
        sorting: '',
        category: '',
        key: '',
        value: '',
      },
      type: 'POST',
      dataType: 'html',
      success: function (res) {
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