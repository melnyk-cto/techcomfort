<?php /* Template Name: Page - Ordering */ ?>
<?php get_header(); ?>
<?php
    global $woocommerce;
    wp_enqueue_script('ordering-form', get_stylesheet_directory_uri() . '/assets/js/ordering-form.js');
?>
<?php
    $_product = wc_get_product($_GET["uid"]);
?>
<script>
    // Description for product page
    const descriptionProduct = `<?php echo $_product->get_description() ?>`;
</script>
<main class='ordering'>
    <section class='contact'>
        <div class='container'>
            <h2>Оформление заказа</h2>
            <div class='contact-inner'>
                <div class='contact-form'>
                    <form id="orderForm" action=''>
                        <label>
                            <span>Имя</span>
                            <input required name="First Name" type='text'>
                        </label>
                        <label>
                            <span>Фамилия</span>
                            <input required name="Second Name" type='text'>
                        </label>
                        <label>
                            <span>Телефон</span>
                            <input required name="Mobile Number" type='tel'>
                        </label>
                        <label>
                            <span>Email</span>
                            <input required name="Email address" type='email'>
                        </label>
                        <label class='address'>
                            <span>Адрес</span>
                            <textarea required name="Address"></textarea>
                        </label>
                        <div class='installation-required'>
                            <h5>Требуется установка</h5>
                            <label>
                                <input required value="Да" name='Installation' type="radio" checked>
                                Да
                            </label>
                            <label>
                                <input value="Нет" name='Installation' type="radio">
                                Нет
                            </label>
                            <label class='textarea'>
                                <span>Дополнительная информация</span>
                                <textarea name="Additional"></textarea>
                            </label>
                        </div>
                        <div class='delivery-service'>
                            <h5>Сервис доставки</h5>
                            <div class='delivery-service-item'>
                                <label class='courier'>
                                    <input value="Курьер" name='Delivery' type='radio'>
                                    Курьер
                                </label>
                                <p>доставка по Киеву бесплатно</p>
                            </div>
                            <div class='delivery-service-item'>
                                <label class='new-mail'>
                                    <input value="Новая почта (по тарифу перевозчика)" name='Delivery' type='radio'>
                                    Новая почта ( по тарифу перевозчика )
                                </label>
                                <label>
                                    <span>Адрес</span>
                                    <input type='text'>
                                </label>
                                <label>
                                    <span>Отделение</span>
                                    <input type='text'>
                                </label>
                            </div>
                            <div class='delivery-service-item'>
                                <label>
                                    <input value="Другой вариант доставки" name='Delivery' type='radio' checked>
                                    Другой вариант доставки
                                </label>
                            </div>
                        </div>
                        <div class='payment-method'>
                            <h5>способ оплаты</h5>
                            <label>
                                <input value="Оплата наличными" name='Payment' type='radio'>
                                Оплата наличными
                            </label>
                            <label>
                                <input value="Оплата картой" name='Payment' type='radio' checked>
                                Оплата картой
                            </label>
                            <label>
                                <input value="Оплата при получении в службах доставки" name='Payment' type='radio'>
                                Оплата при получении в службах доставки
                            </label>
                            <label>
                                <input value="Оплата по безналичному расчету (НДС)" name='Payment' type='radio'>
                                Оплата по безналичному расчету (НДС)
                            </label>
                        </div>
                        <button type='submit' id="submit" class='btn'>Создать Заказ</button>
                    </form>
                </div>
                <div class='ordering-basket'>
                    <div class='ordering-basket-item'>
                        <div class='item-title'>
                            <h2>Корзина</h2>
                        </div>
                        <div class='item-inner'>
                            <div class='item-image'>
                                <?php echo $_product->get_image('thumbnail') ?>
                            </div>
                            <div class='item-description'>
                                <div class='description-title'>
                                    <h5><?php echo $_product->get_title() ?></h5>
                                    <p>1 шт</p>
                                </div>
                                <span class="price-product"><?php echo $_product->get_price() ?> ₴</span>
                            </div>
                        </div>
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
