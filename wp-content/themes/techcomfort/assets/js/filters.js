jQuery(document).ready(function ($) {

  const updateUrl = (url) => {
    url.searchParams.delete('pagination-page');
    const newUrl = window.location.pathname + `?${url.searchParams}`;
    window.history.pushState({path: newUrl}, '', newUrl);

    // нужно для корректной пагинации
    const newUrlDecoded = decodeURIComponent(window.location.pathname + `?pagination-page=custom&${url.searchParams}`);

    const params = Object.fromEntries(new URLSearchParams(url.search));
    return {newUrlDecoded, params}
  }

  let data = {'action': 'ajax_form_action_update_filter', 'nonce': ajax_form_object.nonce};

  const options = {
    url: ajax_form_object.url,
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

  // Скрываем фильтры если ничего не выбрано
  const isHiddenClearSection = () => {
    const selected = $('.selected-filter');

    if (selected.length <= 0) {
      $('.selected-filters').addClass('d-none');
      $('.clear-filters-js').addClass('d-none');
    } else {
      $('.selected-filters').removeClass('d-none');
      $('.clear-filters-js').removeClass('d-none');
    }
  }
  isHiddenClearSection();

  const clearSection = () => {
    const wrapper = $('.selected-filter-wrapper-js');
    wrapper.children().remove()

    // Показываем выбранные фильтры
    const url = new URL(window.location.href);
    const searchParams = url.search.split('&');
    for (let i = 0; i < searchParams.length; i++) {
      const name = searchParams[i].split('=');
      if (
        decodeURI(name[0]) !== '?pagination-page' &&
        decodeURI(name[0]) !== 'category' &&
        decodeURI(name[0]) !== '?category' &&
        decodeURI(name[0]) !== 'order' &&
        decodeURI(name[0]) !== 'meta-key' &&
        decodeURI(name[0]) !== 'meta-key'
      ) {
        const div = document.createElement('div');
        div.innerHTML = decodeURI(name[0]
          .replaceAll('_', ' ')
          .replaceAll('%2C', ',')
          .replaceAll('%2F', '/'));
        div.className = 'selected-filter';
        div.setAttribute('data-name', decodeURI(name[0].replaceAll('%2C', ',')));
        wrapper.append(div);
        isHiddenClearSection();
      }
    }

    // Удаляем выбранный фильтр
    $('.selected-filter').on('click', function () {
      const url = new URL(window.location.href);
      const name = $(this).attr('data-name');
      $(this).remove();
      url.searchParams.delete(name);
      isHiddenClearSection();

      // Обновление данных
      const {newUrlDecoded, params} = updateUrl(url);
      data = {...data, 'url': newUrlDecoded, 'page': 1, 'search-params': params}

      // Отправка формы
      jQuery.ajax({...options, data: data});
    });
  }
  clearSection();


  // Очистка параметров фильтрации
  $('.clear-filters-js').on('click', function (e) {
    e.preventDefault();
    const url = new URL(window.location.href);
    const urlOrder = url.searchParams.get('order');
    const urlMetaKey = url.searchParams.get('meta-key');
    const urlCategory = url.searchParams.get('category');
    url.search = '';
    url.searchParams.set('category', urlCategory);
    url.searchParams.set('order', urlOrder);
    url.searchParams.set('meta-key', urlMetaKey);

    const wrapper = $('.selected-filter-wrapper-js');
    wrapper.children().remove();
    isHiddenClearSection();

    // Обновление данных
    const {newUrlDecoded, params} = updateUrl(url);
    data = {...data, 'url': newUrlDecoded, 'page': 1, 'search-params': params}

    // Отправка формы
    jQuery.ajax({...options, data: data});
  });

  const filterAnSortOnLoad = () => {
    const url = new URL(window.location.href);

    // Select для сортировки
    const sorting = $('#sorting');

    // query параметры url
    const urlOrder = url.searchParams.get('order');
    const urlMetaKey = url.searchParams.get('meta-key');
    const urlPage = url.searchParams.get('pagination-page');
    const urlCategory = url.searchParams.get('category');

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

    // Обновление данных
    const {newUrlDecoded, params} = updateUrl(url);
    data = {
      ...data,
      'category': urlCategory,
      'order': sorting.find(":selected").attr('data-order'),
      'meta-key': sorting.find(":selected").attr('data-meta-key'),
      'url': newUrlDecoded,
      'page': page,
      'search-params': params,
    }

    // Отправка формы
    jQuery.ajax({...options, data: data});

    // Сортировка
    sorting.on('change', function () {
      const order = sorting.find(":selected").attr('data-order');
      const metaKey = sorting.find(":selected").attr('data-meta-key');

      // изменения ссылки без перезагрузки
      const url = new URL(window.location.href);
      url.searchParams.set('order', order);
      url.searchParams.set('meta-key', metaKey);

      // Обновление данных
      const {newUrlDecoded, params} = updateUrl(url);
      data = {...data, 'order': order, 'meta-key': metaKey, 'url': newUrlDecoded, 'page': 1, 'search-params': params}

      // Отправка формы
      jQuery.ajax({...options, data: data});
    });

    const catalog = $('.catalog');
    const loading = $('.loading');
    catalog.css('opacity', '1');
    loading.addClass('d-none');
  }
  filterAnSortOnLoad();

  // Фильтрация для чекбокса
  $('.filter-label-js').on('click', function () {
    // Добавление и удаление чекбокса
    if ($(this).children('input').prop('checked')) {
      $(this).children('input').prop('checked', false);
    } else {
      $(this).parent().find('input').prop('checked', false);
      $(this).children('input').prop('checked', true);
    }

    const key = $(this).attr('data-key');
    const value = $(this).attr('data-value');

    const url = new URL(window.location.href);
    //  Удаляем значение фильтрации если это значение было выбрано ранее
    if (url.searchParams.get(key) === value) {
      url.searchParams.delete(key);
    } else {
      url.searchParams.set(key, value);
    }

    // Обновление данных
    const {newUrlDecoded, params} = updateUrl(url);
    data = {...data, 'url': newUrlDecoded, 'page': 1, 'search-params': params}

    // Отправка формы
    jQuery.ajax({...options, data: data});

    clearSection();
  });


  // Фильтрация по цене при изменении ползунка
  $('.filler-range-js').on('click', function () {
    const name = $(this).attr('data-name');
    const value0 = $(this).parent().find('.input-with-keypress-0').val();
    const value1 = $(this).parent().find('.input-with-keypress-1').val();

    const url = new URL(window.location.href);
    url.searchParams.delete('pagination-page');
    url.searchParams.set(name, `${value0}.${value1}`);

    // Обновление данных
    const {newUrlDecoded, params} = updateUrl(url);
    data = {...data, 'url': newUrlDecoded, 'page': 1, 'search-params': params}

    // Отправка формы
    jQuery.ajax({...options, data: data});

    clearSection();
  });
});