<div class='popup basket'>
    <div class='popup-inner basket-inner'>
        <div class='popup-title basket-title'>
            <h2>Корзина</h2>
            <div class='basket-close close'></div>
        </div>
        <div class='basket-list'>
            <!--            <h4 class='no-products'>Корзина пуста</h4>-->
            <?php
                global $woocommerce;
                $items = $woocommerce->cart->get_cart();

                foreach ($items as $item => $values) {
                    $_product = wc_get_product($values['data']->get_id());
                    $cart_item_remove_url = wc_get_cart_remove_url($item);
                    $price = $_product->get_regular_price();
                    $price_excl_tax = number_format(wc_get_price_excluding_tax($_product), 0, '', ' '); // price without VAT
                    echo "<div class='basket-item'>
                            <a data-product_id=" . $_product->get_id() . " class='item-close product-remove' href=" . $cart_item_remove_url . "></a>
                            <div class='item-image'>
                             " . $_product->get_image('180') . "
                            </div>
                            <div class='item-description'>
                                <h5>" . $_product->get_title() . "</h5>
                                <div class='quantity'>
                                    <button type='button' class='reduce'>-</button>
                                    <label>
                                        <input type='text' value=" . $values['quantity'] . " class='quantity-input'>
                                    </label>
                                    <button type='button' class='enlarge'>+</button>
                                </div>
                                <span>" . $price_excl_tax . " ₴</span>
                            </div>
                        </div>";
                }
            ?>
        </div>
        <div class='basket-bottom'>
            <div class='basket-bottom-description'>
                <p>Доставка:<span>0 UAH</span></p>
                <p>Сумма товара:<span><?php echo $woocommerce->cart->get_cart_total() ?></span>
                </p>
            </div>
            <a href='<?php echo home_url('/'); ?>ordering' class='btn'>Заказать</a>
        </div>
    </div>
</div>