<div class='popup-title basket-title'>
    <h2>Корзина</h2>
    <div class='basket-close close'></div>
</div>
<div class='basket-list'>
    <?php
        global $woocommerce;
        $items = $woocommerce->cart->get_cart();

        if ($items) {
            foreach ($items as $item => $values) {
                $_product = wc_get_product($values['data']->get_id());
                $cart_item_remove_url = wc_get_cart_remove_url($item);
                $price = $_product->get_regular_price();
                $price_excl_tax = number_format(wc_get_price_excluding_tax($_product), 0, '', ' '); // price without VAT?>
                <div class='basket-item'>
                    <a data-product-id="<?php echo $_product->get_id(); ?>" class='item-close product-remove'></a>
                    <div class='item-image'><?php echo $_product->get_image('180'); ?></div>
                    <div class='item-description'>
                        <h5><?php echo $_product->get_title(); ?></h5>
                        <div class='quantity'>
                            <button data-product-quantity="<?php echo $values['quantity'] - 1; ?>"
                                    data-product-id="<?php echo $_product->get_id(); ?>"
                                    type='button'
                                    class='reduce'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/minus.svg'
                                     alt=''>
                            </button>
                            <label>
                                <input type='text'
                                       value="<?php echo $values['quantity']; ?>"
                                       class='quantity-input'
                                       disabled>
                            </label>
                            <button data-product-id="<?php echo $_product->get_id(); ?>"
                                    data-product-quantity="<?php echo $values['quantity'] + 1; ?>"
                                    type='button'
                                    class='enlarge'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/plus.svg'
                                     alt=''>
                            </button>
                        </div>
                        <span class='item-price'><?php echo $price_excl_tax; ?> ₴</span>
                    </div>
                </div>
                <script>
                  products.push({
                    ID: "<?php echo $_product->get_id(); ?>",
                    Count: "<?php echo $values['quantity']; ?>",
                    Name: "<?php echo $_product->get_title(); ?>",
                    Price: "<?php echo $price_excl_tax; ?>",
                    Link: "https://techcomfort.com.ua/product/?uid=<?php echo $_product->get_id(); ?>"
                  })
                </script>


                <script>
                  const item = document.getElementsByClassName('products-js')[0];
                  console.log(item,'item')
                  console.log(JSON.stringify(products),'products')
                  item.value = JSON.stringify(products);
                </script>
            <?php }
        } else {
            echo "<h4 class='no-products'>Корзина пуста</h4>";
        } ?>
</div>
<div class='basket-bottom'>
    <div class='basket-bottom-description'>
        <p>Сумма товара:<span class='total-info'><?php echo $woocommerce->cart->get_cart_total() ?></span></p>
    </div>
    <a href='<?php echo home_url('/'); ?>ordering' class='btn'>Заказать</a>
</div>

<script>
  jQuery('.open-basket-js .sub-label').text(<?php echo WC()->cart->get_cart_contents_count(); ?>)
</script>
