<?php /* Template Name: Page - Ordering */ ?>
<?php get_header(); ?>
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
                    <form action=''>
                        <label>
                            <span>Имя</span>
                            <input type='text'>
                        </label>
                        <label>
                            <span>Фамилия</span>
                            <input type='text'>
                        </label>
                        <label>
                            <span>Телефон</span>
                            <input type='tel'>
                        </label>
                        <label>
                            <span>Email</span>
                            <input type='email'>
                        </label>
                        <label class='address'>
                            <span>Адрес</span>
                            <textarea></textarea>
                        </label>
                        <div class='installation-required'>
                            <h5>Требуется установка</h5>
                            <label>
                                <input name='installation' type="radio" checked>
                                Да
                            </label>
                            <label>
                                <input name='installation' type="radio">
                                Нет
                            </label>
                            <label class='textarea'>
                                <span>Дополнительная информация</span>
                                <textarea></textarea>
                            </label>
                        </div>
                        <div class='delivery-service'>
                            <h5>Сервис доставки</h5>
                            <div class='delivery-service-item'>
                                <label class='courier'>
                                    <input name='delivery' type='radio'>
                                    Курьер
                                </label>
                                <p>доставка по Киеву бесплатно</p>
                            </div>
                            <div class='delivery-service-item'>
                                <label class='new-mail'>
                                    <input name='delivery' type='radio'>
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
                                    <input name='delivery' type='radio' checked>
                                    Другой вариант доставки
                                </label>
                            </div>
                        </div>
                        <div class='payment-method'>
                            <h5>способ оплаты</h5>
                            <label>
                                <input name='payment' type='radio'>
                                Оплата наличными
                            </label>
                            <label>
                                <input name='payment' type='radio' checked>
                                Оплата картой
                            </label>
                            <label>
                                <input name='payment' type='radio'>
                                Оплата при получении в службах доставки
                            </label>
                            <label>
                                <input name='payment' type='radio'>
                                Оплата по безналичному расчету (НДС)
                            </label>
                        </div>
                        <button type='submit' class='btn'>создать Заказ</button>
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
                                <span class="price-product">????? UAH</span>
                            </div>
                        </div>
                    </div>
                    <p class='price'>
                        Сума товара:
                        <span>????? UAH</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
