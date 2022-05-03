jQuery(document).ready(function ($) {
  const containerProducts = $('.products-list');
  const productsItem = $('.products-item');
  const basketContainer = $('.basket-container');
  const basket = $('#basket');
  const body = $('body');

  // Открытие корзины
  body.on("click", ".open-basket-js", function () {
    basket.addClass("show");
  });

  // Закрытие корзины
  body.on("click", ".basket-close", function () {
    basket.removeClass("show");
  });

  const options = {
    url: ajax_form_object.url,
    type: 'POST',
    dataType: 'html',
    success: function (res) {
      containerProducts.removeClass('loading-products');
      productsItem.removeClass('loading-products');
      basketContainer.removeClass('loading-products');

      basketContainer.html(res);
    },
    error: function () {
      new Noty({type: 'error', theme: 'relax', text: 'Не удалось получить корзину', timeout: 3000}).show();
    }
  }

  let data = {'action': 'ajax_form_action_add_to_cart', 'nonce': ajax_form_object.nonce};

  // Отправка формы
  jQuery.ajax({...options, data: data});


  body.on('click', '.add-product-to-cart', function (e) {
    containerProducts.addClass('loading-products');
    productsItem.addClass('loading-products');

    e.preventDefault();
    const productId = $(this).attr('data-product-id');

    // Обновление данных
    let data = {
      'action': 'ajax_form_action_add_to_cart',
      'nonce': ajax_form_object.nonce,
      'product_id': productId,
      'type': 'increase'
    };

    // Отправка формы
    jQuery.ajax({...options, data: data});
  });


  const changeQuantity = (productId, type, quantity) => {
    basketContainer.addClass('loading-products');

    // Обновление данных
    let data = {
      'action': 'ajax_form_action_add_to_cart',
      'nonce': ajax_form_object.nonce,
      'product_id': productId,
    };

    // Отправка формы
    jQuery.ajax({...options, data: {...data, "type": type, "quantity": quantity}});
  }

  // Изменение количества продуктов
  body.on("click", '.enlarge', function () {
    const productId = $(this).attr('data-product-id');
    const quantity = $(this).attr('data-product-quantity');
    const type = 'quantity';

    changeQuantity(productId, type, quantity);
  });
  body.on("click", '.reduce', function () {
    const productId = $(this).attr('data-product-id');
    const quantity = $(this).attr('data-product-quantity');
    const type = 'quantity';

    changeQuantity(productId, type, quantity);
  });

  // Удаление продукта из корзины
  body.on("click", ".item-close", function () {
    const productId = $(this).attr('data-product-id');
    const type = 'remove';

    changeQuantity(productId, type);
  });
});