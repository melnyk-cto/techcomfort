document.addEventListener("DOMContentLoaded", function () {
  const url = new URL(window.location.href);

  // Выбранные фильтры
  const selectedFilters = document.getElementsByClassName('selected-filters')[0];
  const selectedFilter = document.getElementsByClassName('selected-filter-wrapper-js')[0];
  const selected = document.getElementsByClassName('selected-filter');
  const clear = document.getElementsByClassName('clear-filters-js')[0];

  const params = url.search.split('&');
  // Скрываем фильтры если ничего не выбрано
  if (params.length <= 1) {
    selectedFilters.classList.add('d-none');
    clear.classList.add('d-none');
  } else {
    selectedFilters.classList.remove('d-none');
    clear.classList.remove('d-none');
  }

  // Показываем выбранные фильтры
  for (let i = 0; i < params.length; i++) {
    const name = params[i].split('=');
    if (decodeURI(name[0]) !== '?category' && decodeURI(name[0]) !== 'type') {
      const div = document.createElement('div');
      div.innerHTML = decodeURI(name[0].replaceAll('_', ' ').replaceAll('%2C', ','));
      div.className = 'selected-filter';
      div.setAttribute('data-name', decodeURI(name[0].replaceAll('%2C', ',')));
      selectedFilter.appendChild(div)
    }
  }
  // Удаляем выбраный фильтр
  for (let i = 0; i < selected.length; i++) {
    selected[i].addEventListener('click', function () {
      this.getAttribute('data-name');
      url.searchParams.delete(this.getAttribute('data-name'));
      window.location.href = url;
    });
  }

  // Очистка параметров фильтрации
  clear.addEventListener('click', function (e) {
    e.preventDefault();
    const category = url.searchParams.get('category');
    window.location.href = `${window.location.pathname}/?category=${category}`
  });

  // Сортировка
  const sorting = document.getElementById('sorting');
  sorting.addEventListener('change', function () {
    setTimeout(() => {
      url.searchParams.set('type', this.value);
      window.location.href = url;
    }, 500)
  })

  // Фильтрация по цене при изменении ползунка
  const priceBtn = document.getElementsByClassName("filler-price-js");
  const input0 = document.getElementsByClassName("input-with-keypress-0");
  const input1 = document.getElementsByClassName("input-with-keypress-1");

  for (let i = 0; i < priceBtn.length; i++) {
    priceBtn[i].addEventListener('click', function () {
      setTimeout(() => {
        url.searchParams.set(this.getAttribute('data-name'), `${input0[i].value}.${input1[i].value}`);
        window.location.href = url;
      }, 500)
    });
  }


  // Фильтрация по цене при загрузке страницы
  if (url.searchParams.get('type')) {
    sorting.value = url.searchParams.get('type');
  } else {
    sorting.value = 'default';
  }


  //  Фильтрация по значению
  const filter = document.getElementsByClassName('filter-label-js');
  for (let i = 0; i < filter.length; i++) {
    filter[i].addEventListener('click', function () {
      //  Удаляем значение фильтрации если это значение было выбрано ранее
      if (url.searchParams.get(this.getAttribute('data-key')) === this.getAttribute('data-value')) {
        url.searchParams.delete(this.getAttribute('data-key'));
      } else {
        url.searchParams.set(this.getAttribute('data-key'), this.getAttribute('data-value'));
      }
      window.location.href = url;
    });
  }
});