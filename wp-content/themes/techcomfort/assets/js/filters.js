document.addEventListener("DOMContentLoaded", function () {
  const url = new URL(window.location.href);


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