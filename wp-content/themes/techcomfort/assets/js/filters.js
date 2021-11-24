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
    const priceBtn = document.querySelector(".filler-price-js");
    const input0 = document.querySelector(".input-with-keypress-0");
    const input1 = document.querySelector(".input-with-keypress-1");

    priceBtn.addEventListener('click', function () {
        setTimeout(() => {
            url.searchParams.set('from', input0.value);
            url.searchParams.set('to', input1.value);
            window.location.href = url;
        }, 500)
    });


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
            url.searchParams.set(this.getAttribute('data-key'), this.getAttribute('data-value'));
            window.location.href = url;
        });
    }
});