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
            <h2 class='ordering-title'>Оформление заказа</h2>
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
                    <div class='basket-container'></div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>