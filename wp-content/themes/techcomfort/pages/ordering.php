<?php /* Template Name: Page - Ordering */ ?>
<?php get_header(); ?>
<main class='ordering'>
    <div class='popup basket'>
        <div class='popup-inner basket-inner'>
            <div class='popup-title basket-title'>
                <h2>Корзина</h2>
                <div class='basket-close close'></div>
            </div>
            <div class='basket-list'>
                <h4 class='no-products'>Корзина пуста</h4>
                <div class='basket-item'>
                    <div class='item-close'></div>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-1.jpg'
                             alt='Кондиционер'>
                    </div>
                    <div class='item-description'>
                        <h5>C&H CH-S07GKP8</h5>
                        <div class='quantity'>
                            <button type='button' class='reduce'>-</button>
                            <label>
                                <input type='text' value='1' class='quantity-input'>
                            </label>
                            <button type='button' class='enlarge'>+</button>
                        </div>
                        <span>66 500 UAH</span>
                    </div>
                </div>
                <div class='basket-item'>
                    <div class='item-close'></div>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-2.jpg'
                             alt='Кондиционер'>
                    </div>
                    <div class='item-description'>
                        <h5>C&H CH-S07GKP8</h5>
                        <div class='quantity'>
                            <button type='button' class='reduce'>-</button>
                            <label>
                                <input type='text' value='1' class='quantity-input'>
                            </label>
                            <button type='button' class='enlarge'>+</button>
                        </div>
                        <span>66 500 UAH</span>
                    </div>
                </div>
                <div class='basket-item'>
                    <div class='item-close'></div>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-3.jpg'
                             alt='Кондиционер'>
                    </div>
                    <div class='item-description'>
                        <h5>C&H CH-S07GKP8</h5>
                        <div class='quantity'>
                            <button type='button' class='reduce'>-</button>
                            <label>
                                <input type='text' value='1' class='quantity-input'>
                            </label>
                            <button type='button' class='enlarge'>+</button>
                        </div>
                        <span>66 500 UAH</span>
                    </div>
                </div>
            </div>
            <div class='basket-bottom'>
                <div class='basket-bottom-description'>
                    <p>
                        Доставка:
                        <span>0 UAH</span>
                    </p>
                    <p>
                        Сумма товара:
                        <span>66 500 UAH</span>
                    </p>
                </div>
                <a href='#' class='btn'>Заказать</a>
            </div>
        </div>
    </div>
    <div class='popup login'>
        <div class='popup-inner login-inner'>
            <div class='popup-title login-title'>
                <h2>Вход</h2>
                <div class='login-close close'></div>
            </div>
            <div class='popup-content login-content'>
                <form action=''>
                    <label for=''>
                        <span>Эл. почта или телефон</span>
                        <input type='tel'>
                    </label>
                    <label for=''>
                        <span>Пароль</span>
                        <input type='password'>
                    </label>
                    <div class='checkbox'>
                        <label>
                            <input type='checkbox'>
                            Запомнить меня
                        </label>
                        <a href='#' class='forgot-password'>Напомнить пароль</a>
                    </div>
                    <a href='#' class='btn'>Войти</a>
                    <p class='register-now'>Зарегистрироваться</p>
                </form>
            </div>
        </div>
    </div>
    <div class='popup registration'>
        <div class='popup-inner registration-inner'>
            <div class='popup-title registration-title'>
                <h2>Регистрация</h2>
                <div class='registration-close close'></div>
            </div>
            <div class='popup-content registration-content'>
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
                        <span>Номер телефона</span>
                        <input type='tel'>
                    </label>
                    <label>
                        <span>Эл. почта</span>
                        <input type='email'>
                    </label>
                    <label>
                        <span>Пароль</span>
                        <input type='password'>
                    </label>
                    <label>
                        <span>Повторите пароль</span>
                        <input type='password'>
                    </label>
                    <div class='checkbox'>
                        <label>
                            <input type='checkbox'>
                            Регистрируясь, вы соглашаетесь с пользовательским соглашением
                        </label>
                    </div>
                    <a href='#' class='btn'>Зарегистрировать</a>
                    <p class='registered'>Я уже зарегистрирован</p>
                </form>
            </div>
        </div>
    </div>
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
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-4.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <div class='item-description'>
                                <div class='description-title'>
                                    <h5>C&H CH-S07GKP8</h5>
                                    <p>1 шт</p>
                                </div>
                                <span>66 500 UAH</span>
                            </div>
                        </div>
                    </div>
                    <p class='price'>
                        Сума товара:
                        <span>66 500 UAH</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
