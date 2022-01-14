<?php /* Template Name: Page - Ordering */ ?>
<?php get_header(); ?>
<?php global $woocommerce; ?>
<script>
    const products = [];
</script>
<main class='ordering'>
    <section class='contact'>
        <div class='container'>
            <h2>Оформление заказа</h2>
            <div class='contact-inner'>
                <div class='contact-form'>
                    <?php echo do_shortcode('[contact-form-7 id="10731" title="Оформление заказа"]') ?>
                </div>
                <div class='ordering-basket'>
                    <div class='ordering-basket-item'>
                        <div class='item-title'>
                            <h2>Корзина</h2>
                        </div>
                        <?php
                            $items = $woocommerce->cart->get_cart();
                            $count = 0;
                            foreach ($items as $item => $values) {
                                $count++;
                                $_product = wc_get_product($values['data']->get_id());
                                $cart_item_remove_url = wc_get_cart_remove_url($item);
                                $price = $_product->get_regular_price();
                                $price_excl_tax = number_format(wc_get_price_excluding_tax($_product), 0, '', ' '); // price without VAT
                                echo " <div class='item-inner'>
                            <div class='item-image'>
                                 " . $_product->get_image('180') . "
                            </div>
                            <div class='item-description'>
                                <div class='description-title'>
                                    <h5>" . $_product->get_title() . "</h5>
                                    <script>                                    
                                     products.push({Номер:`$count` ,Название: `" . $_product->get_title() . "`, Цена: `" . $price_excl_tax . "`,  Ссылка: `https://techcomfort.com.ua/product/?uid=" . $_product->get_id() . "`})
                                    </script>
                                </div>
                                <span class='price-product'>" . $price_excl_tax . " ₴</span>
                            </div>
                        </div>";
                            }
                        ?>
                    </div>
                    <p class='price'>
                        Сума товара:
                        <span><?php echo $woocommerce->cart->get_cart_total() ?></span>
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>

<script>
    const item = document.getElementsByClassName('products-js')[0];
    item.value = JSON.stringify(products);
</script>
