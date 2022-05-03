jQuery(document).ready(function ($) {
  // Поиск на сайте
  const loadForm = $('.load-form');
  const inputSearch = $(".search .input-search");

  inputSearch.focus(function () {
    loadForm.removeClass('d-none')
  });
  inputSearch.blur(function () {
    setTimeout(() => {
      loadForm.addClass('d-none');
      inputSearch.val("");
      loadForm.html("");
    }, 200)
  });

  inputSearch.keyup(function (event) {
    call_ajax(event); // call ajax
  });

  function call_ajax(event) { // ajax function initialization
    const loading = $('.button-search');
    loading.addClass('loading-search');
    const data = event.target.value; // get data while typing keywords in the box
    if (data) {
      $.ajax({
        type: 'POST',
        async: true,
        url: my_ajax_object.ajax_url, // ajax register function
        data: {
          'action': 'search_filters',
          'data': data
        },
        success: function (data) {
          loading.removeClass('loading-search');
          if (data) {
            loadForm.html(data); // show data when returning
          } else {
            let li = document.createElement("li")
            li.setAttribute('class', 'empty');
            li.innerHTML = 'Не найдено';
            loadForm.html(data);
            loadForm.append(li);
          }
        }
      });
    } else {
      loading.removeClass('loading-search');
      let li = document.createElement("li")
      li.setAttribute('class', 'empty');
      li.innerHTML = 'Введите название...';
      loadForm.html(data);
      loadForm.append(li);
    }
  }
});