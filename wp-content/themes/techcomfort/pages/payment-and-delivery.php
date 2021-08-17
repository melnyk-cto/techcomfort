<?php /* Template Name: Page - Payment And Delivery */ ?>
<?php get_header(); ?>
<main class='payment-and-delivery'>
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
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-item.png' alt='Кондиционер'>
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
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-item.png' alt='Кондиционер'>
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
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-item.png' alt='Кондиционер'>
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
    <section class='payment'>
        <div class='container'>
            <h2>Оплата</h2>
            <div class='payment-and-delivery-list'>
                <div class='payment-and-delivery-item'>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/wallet.svg' alt='Wallet'>
                    </div>
                    <div class='item-description'>
                        <h4>Оплата наличными</h4>
                        <p>
                            Товар можно оплатить наличными в день его доставки по указанному адресу (по Киеву). Если
                            товар приобретается вместе с работами по установке, то расчет производится по факту монтажа
                            с представителем монтажной бригады
                        </p>
                    </div>
                </div>
                <div class='payment-and-delivery-item'>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/card.svg' alt='Card'>
                    </div>
                    <div class='item-description'>
                        <h4>Оплата картой</h4>
                        <p>
                            Оплата на карту Приват банка, Монобанка. (номер карты и сумма к уплате за покупку будет
                            выслана Вам СМС).
                        </p>
                    </div>
                </div>
                <div class='payment-and-delivery-item'>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/truck.svg' alt='Truck'>
                    </div>
                    <div class='item-description'>
                        <h4>Оплата при получении в службах доставки</h4>
                        <p>
                            Товар можно оплатить во время получения товара в отделениях службы доставки («Нова почта»,
                            «Деливери» и другие)
                        </p>
                    </div>
                </div>
                <div class='payment-and-delivery-item'>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/money.svg' alt='Money'>
                    </div>
                    <div class='item-description'>
                        <h4>Оплата по безналичному расчету (НДС)</h4>
                        <p>
                            Юридическим лицам можно оплатить заказ на расчетный счет с НДС. Производится 100%
                            предоплата.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class='delivery'>
        <div class='container'>
            <h2>Доставка</h2>
            <div class='payment-and-delivery-list'>
                <div class='payment-and-delivery-item'>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/building.svg' alt='building'>
                    </div>
                    <div class='item-description'>
                        <h4>Доставка курьером по Киеву</h4>
                        <p>
                            Доставка по Киеву бесплатно (до подъезда). Стоимость подъёма без лифта, при необходимости 20
                            грн. за этаж.
                        </p>
                    </div>
                </div>
                <div class='payment-and-delivery-item'>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/home.svg' alt='house'>
                    </div>
                    <div class='item-description'>
                        <h4>Доставка в пригород Киева</h4>
                        <p>
                            Оплата на карту Приват банка, Монобанка. (номер карты и сумма к уплате за покупку будет
                            выслана Вам СМС).
                        </p>
                    </div>
                </div>
                <div class='payment-and-delivery-item'>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/ukraine.svg' alt='Ukraine map'>
                    </div>
                    <div class='item-description'>
                        <h4>Доставка по Украине</h4>
                        <p>
                            Заказанный Вами товар может быть доставлен в любой населенный пункт Украины. Доставка
                            осуществляется службами доставки «Нова почта», «Деливери» и другие. Стоимость доставки
                            расчитывается по тарифам перевозчика
                        </p>
                    </div>
                </div>
            </div>
            <div class='delivery-description'>
                <div class='guarantee'>
                    <h3>Гарантия</h3>
                    <p>
                        На все товары распространяется гарантия, сроки гарантии зависят от сервисной политики
                        производителя
                        или импортёра в нашей стране.
                    </p>
                </div>
                <div class='purchase-returns
'>
                    <h3>Возврат товара</h3>
                    <p>
                        Согласно закона "О защите прав потребителей" возврат и обмен товара надлежащего качества
                        осуществляется в течение 14 дней с момента покупки, при условии наличия чека, неповрежденной
                        упаковки и сохранения внешнего вида.
                    </p>
                    <p>Покупатель оплачивает возврат товара за свой счет</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
