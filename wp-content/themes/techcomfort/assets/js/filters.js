jQuery(document).ready(function ($) {
  const containerProducts = $('.products-list');
  const containerFilter = $('.filter-item');
  const clearFilterButton = $('.clear-filters-js');

  const rangeSliderOnLoad = () => {
    const keypressAll = $('.slider-keypress');
    const rangeSlider = $('.filler-range-js');
    const input0All = $('.input-with-keypress-0');
    const input1All = $('.input-with-keypress-1');
    for (let i = 0; i < keypressAll.length; i++) {

      // При обновлении страницы показывать текущее значение фильтра
      const from = parseInt(input0All[i].getAttribute('data-value-from'));
      const to = parseInt(input1All[i].getAttribute('data-value-to'));
      let startFrom;
      let startTo;

      const url = new URL(window.location.href);
      let searchParams = url.searchParams.get(rangeSlider[i].getAttribute('data-key'));
      if (searchParams) {
        const range = searchParams.split('.');
        startFrom = parseInt(range[0]);
        startTo = parseInt(range[1]);
      } else {
        startFrom = from;
        startTo = to;
      }

      noUiSlider.create(keypressAll[i], {
        start: [startFrom, startTo],
        connect: true,
        step: 1,
        range: {
          min: [from],
          max: [to]
        },
        format: {
          to: (v) => parseFloat(v).toFixed(0),
          from: (v) => parseFloat(v).toFixed(0)
        }
      });
      const inputs = [input0All[i], input1All[i]];
      keypressAll[i].noUiSlider.on("update", function (values, handle) {
        inputs[handle].value = (values[handle]);
      });
    }
  };
  rangeSliderOnLoad();

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
      containerProducts.html(res);
      containerProducts.removeClass('loading-products');
      containerFilter.removeClass('loading-products');
      clearFilterButton.removeClass('loading-products');

      const catalog = $('.catalog');
      const loadingPage = $('.loading-page-js');
      catalog.css('opacity', '1');
      loadingPage.addClass('d-none');
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
      clearFilterButton.addClass('d-none');
    } else {
      $('.selected-filters').removeClass('d-none');
      clearFilterButton.removeClass('d-none');
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
        div.setAttribute('data-key', decodeURI(name[0].replaceAll('%2C', ',')));
        wrapper.append(div);
        isHiddenClearSection();
      }
    }

    // Удаляем выбранный фильтр
    $('.selected-filter').on('click', function () {
      containerProducts.addClass('loading-products');
      containerFilter.addClass('loading-products');
      clearFilterButton.addClass('loading-products');

      const url = new URL(window.location.href);
      const name = $(this).attr('data-key');

      // удаляем выбранное значение
      const button = $(`.filter-button-js[data-key="${name}"]`);

      let type = 'text';
      if (button.hasClass('filler-range-js')) {
        type = 'range';
      }

      // удаляем значение для слайдера
      if (type === 'range') {
        const parents = button.closest('.filter-item');
        const input0 = parents.find('.input-with-keypress-0');
        const input1 = parents.find('.input-with-keypress-1');
        const keypress = parents.find('.slider-keypress');
        const from = input0.attr('data-value-from');
        const to = input1.attr('data-value-to');
        input0.val(from);
        input1.val(to);
        keypress[0].noUiSlider.set([from, to]);
      }
      if (type === 'text') {
        button.find('input').prop('checked', false);
      }

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
  clearFilterButton.on('click', function (e) {
    e.preventDefault();
    containerProducts.addClass('loading-products');
    containerFilter.addClass('loading-products');
    clearFilterButton.addClass('loading-products');

    const url = new URL(window.location.href);
    const urlOrder = url.searchParams.get('order');
    const urlMetaKey = url.searchParams.get('meta-key');
    const urlCategory = url.searchParams.get('category');

    url.search = '';

    url.searchParams.set('category', urlCategory);
    url.searchParams.set('order', urlOrder);
    url.searchParams.set('meta-key', urlMetaKey);

    // очистка секции фильтрации
    const wrapper = $('.selected-filter-wrapper-js');
    wrapper.children().remove();

    // очистка input фильтрации
    const buttonText = $(`.filter-label-js`);
    buttonText.find('input').prop('checked', false);

    // очистка range фильтрации
    const buttonRange = $(`.filler-range-js`);
    const parents = buttonRange.closest('.filter-item');
    const input0 = parents.find('.input-with-keypress-0');
    const input1 = parents.find('.input-with-keypress-1');
    const keypress = parents.find('.slider-keypress');
    for (let i = 0; i < keypress.length; i++) {
      const from = input0[i].getAttribute('data-value-from');
      const to = input1[i].getAttribute('data-value-to');
      input0[i].value = from;
      input1[i].value = to;
      keypress[i].noUiSlider.set([from, to]);
    }

    // проверка на наличе элементов
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
      containerProducts.addClass('loading-products');
      containerFilter.addClass('loading-products');
      clearFilterButton.addClass('loading-products');

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
  }
  filterAnSortOnLoad();

  // Фильтрация для чекбокса
  $('.filter-label-js').on('click', function () {
    containerProducts.addClass('loading-products');
    containerFilter.addClass('loading-products');
    clearFilterButton.addClass('loading-products');

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
    isHiddenClearSection();
  });

  // Фильтрация по цене при изменении ползунка
  $('.filler-range-js').on('click', function () {
    containerProducts.addClass('loading-products');
    containerFilter.addClass('loading-products');
    clearFilterButton.addClass('loading-products');

    const name = $(this).attr('data-key');
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