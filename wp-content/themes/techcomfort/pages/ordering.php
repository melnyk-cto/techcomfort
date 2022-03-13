<?php /* Template Name: Page - Ordering */ ?>
<?php get_header(); ?>
<?php global $woocommerce; ?>
<script>
  const products = [];
</script>
<?php
    $first_name = ucfirst(get_user_meta(get_current_user_id(), 'first_name', true));
    $last_name = ucfirst(get_user_meta(get_current_user_id(), 'last_name', true));
    $phone = ucfirst(get_user_meta(get_current_user_id(), 'user_registration_phone', true));
    $address = ucfirst(get_user_meta(get_current_user_id(), 'user_registration_address', true));
    $user_info = get_userdata(get_current_user_id());
    $user_email = $user_info->user_email; ?>
<main class='ordering'>
    <section class='contact'>
        <div class='container'>
            <h2>Оформление заказа</h2>
            <div class='contact-inner'>
                <div class='contact-form'>
                    <form action='' id='order-form'>
                        <textarea class='products-js' name='textarea-products'></textarea>
                        <label>
                            <span class="label">Имя*</span>
                            <input type='text' name='form-first' value='<?php if ($first_name) echo $first_name; ?>'>
                        </label>
                        <label>
                            <span class="label">Фамилия*</span>
                            <input type='text' name='form-last' value='<?php if ($last_name) echo $last_name; ?>'>
                        </label>
                        <label>
                            <span class="label">Телефон*</span>
                            <input type='tel' name='form-phone' value='<?php if ($phone) echo $phone; ?>'>
                        </label>
                        <label>
                            <span class="label">Email*</span>
                            <input type='email' name='form-email' value='<?php if ($user_email) echo $user_email; ?>'>
                        </label>
                        <label class='address'>
                            <span class="label">Адрес</span>
                            <textarea name='address' value='<?php if ($address) echo $address; ?>'></textarea>
                        </label>
                        <div class='installation-required'>
                            <h5>Требуется установка</h5>
                            <label>
                                <input required value="Да" name='installation' type="radio" checked>
                                Да
                            </label>
                            <label>
                                <input value="Нет" name='installation' type="radio">
                                Нет
                            </label>
                            <label class='textarea'>
                                <span class='label'>Дополнительная информация</span>
                                <textarea name="additional-information"></textarea>
                            </label>
                        </div>
                        <div class='delivery-service'>
                            <h5>Сервис доставки</h5>
                            <div class='delivery-service-item'>
                                <label class='courier'>
                                    <input value="Курьер" name='delivery' type='radio'>
                                    Курьер
                                </label>
                                <p>доставка по Киеву бесплатно</p>
                            </div>
                            <div class='delivery-service-item'>
                                <label class='new-mail'>
                                    <input value="Новая почта (по тарифу перевозчика)" name='delivery' type='radio'>
                                    Новая почта ( по тарифу перевозчика )
                                </label>
                                <label>
                                    <span class='label'>Адрес</span>
                                    <input type='text' class='address-mail' name='delivery-address'>
                                </label>
                                <label>
                                    <span class='label'>Отделение, №</span>
                                    <input type='text' name='delivery-mail'>
                                </label>
                            </div>
                            <div class='delivery-service-item'>
                                <label>
                                    <input value="Другой вариант доставки" name='delivery' type='radio' checked>
                                    Другой вариант доставки
                                </label>
                            </div>
                        </div>
                        <div class='payment-method'>
                            <h5>Способ оплаты</h5>
                            <label>
                                <input value="Оплата наличными" name='payment' type='radio' checked>
                                Оплата наличными
                            </label>
                            <label>
                                <input value="Оплата картой" name='payment' type='radio'>
                                Оплата картой
                            </label>
                            <label>
                                <input value="Оплата при получении в службах доставки" name='payment' type='radio'>
                                Оплата при получении в службах доставки
                            </label>
                            <label>
                                <input value="Оплата по безналичному расчету (НДС)" name='payment' type='radio'>
                                Оплата по безналичному расчету (НДС)
                            </label>
                        </div>
                        <button type='submit' id="order-form-submit" class='btn'>Создать Заказ</button>
                    </form>
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
                                $price_excl_tax = number_format(wc_get_price_excluding_tax($_product) * $values['quantity'], 0, '', ' '); // price without VAT
                                ?>
                                <div class='item-inner'>
                                    <div class='item-image'>
                                        <?php echo $_product->get_image('180') ?>
                                    </div>
                                    <div class='item-description'>
                                        <div class='description-title'>
                                            <h5><?php echo $_product->get_title() ?></h5>
                                        </div>
                                        <span class='quantity-product'><?php echo $values['quantity']; ?></span>
                                        <span class='price-product'><?php echo $price_excl_tax; ?> ₴</span>
                                    </div>
                                </div>
                                <script>
                                  products.push({
                                    ID: "<?php echo $_product->get_id(); ?>",
                                    Count: "<?php echo $values['quantity']; ?>",
                                    Number: <?php echo $count?>,
                                    Name: "<?php echo $_product->get_title(); ?>",
                                    Price: "<?php echo $price_excl_tax; ?>",
                                    Link: "https://techcomfort.com.ua/product/?uid=<?php echo $_product->get_id(); ?>"
                                  })
                                </script>
                            <?php } ?>
                        <?php if ($count === 0) { ?>
                            <div class='item-inner'>
                                <h3>Корзина пустая</h3>
                            </div>
                        <?php } ?>
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
