<?php /* Template Name: Page - Contacts */ ?>
<?php get_header(); ?>
<main class='contacts'>
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
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-item.png' alt=Кондиционер''>
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
    <section class='contact'>
        <div class='container'>
            <div class='contact-inner'>
                <div class='contact-form'>
                    <h2>Обратная связь</h2>
                    <form action=''>
                        <label for=''>
                            <span>Имя</span>
                            <input type='text'>
                        </label>
                        <label for=''>
                            <span>Фамилия</span>
                            <input type='text'>
                        </label>
                        <label for=''>
                            <span>Телефон</span>
                            <input type='tel'>
                        </label>
                        <label for=''>
                            <span>Email</span>
                            <input type='email'>
                        </label>
                        <label class='textarea'>
                            <span>Текст сообщения</span>
                            <textarea name=''></textarea>
                        </label>
                        <button type='submit' class='btn'>отправить</button>
                    </form>
                </div>
                <div class='contact-info'>
                    <div class='info-title'>
                        <h3>Свяжитесь с нами</h3>
                        <p>Пн-Вс, 9:00 - 21:00</p>
                    </div>
                    <a href='mailto:techcomfort@meta.ua' class='email'>
                        <svg id="mail" xmlns="http://www.w3.org/2000/svg" width="20.128" height="14.153"
                             viewBox="0 0 20.128 14.153">
                            <g id="Сгруппировать_653" data-name="Сгруппировать 653" transform="translate(13.846 1.011)">
                                <g id="Сгруппировать_652" data-name="Сгруппировать 652">
                                    <path id="Контур_157" data-name="Контур 157"
                                          d="M19.863,3.973l-6.1,6.065,6.1,6.065a1.749,1.749,0,0,0,.177-.758V4.731A1.749,1.749,0,0,0,19.863,3.973Z"
                                          transform="translate(-13.758 -3.973)" fill="#6b92b0" />
                                </g>
                            </g>
                            <g id="Сгруппировать_655" data-name="Сгруппировать 655" transform="translate(1.011)">
                                <g id="Сгруппировать_654" data-name="Сгруппировать 654">
                                    <path id="Контур_158" data-name="Контур 158"
                                          d="M18.353,2.969H1.763A1.749,1.749,0,0,0,1,3.146l7.8,7.763a1.771,1.771,0,0,0,2.5,0l7.8-7.763A1.749,1.749,0,0,0,18.353,2.969Z"
                                          transform="translate(-1.005 -2.969)" fill="#6b92b0" />
                                </g>
                            </g>
                            <g id="Сгруппировать_657" data-name="Сгруппировать 657" transform="translate(0 1.011)">
                                <g id="Сгруппировать_656" data-name="Сгруппировать 656">
                                    <path id="Контур_159" data-name="Контур 159"
                                          d="M.177,3.973A1.749,1.749,0,0,0,0,4.731V15.346a1.748,1.748,0,0,0,.177.758l6.1-6.065Z"
                                          transform="translate(0 -3.973)" fill="#6b92b0" />
                                </g>
                            </g>
                            <g id="Сгруппировать_659" data-name="Сгруппировать 659" transform="translate(1.011 7.91)">
                                <g id="Сгруппировать_658" data-name="Сгруппировать 658">
                                    <path id="Контур_160" data-name="Контур 160"
                                          d="M13.006,10.829l-.864.864a2.952,2.952,0,0,1-4.169,0l-.864-.864L1,16.894a1.749,1.749,0,0,0,.758.177h16.59a1.749,1.749,0,0,0,.758-.177Z"
                                          transform="translate(-1.005 -10.829)" fill="#6b92b0" />
                                </g>
                            </g>
                        </svg>
                        techcomfort@meta.ua
                    </a>
                    <div class='call'>
                        <svg id="call_2_" data-name="call (2)" xmlns="http://www.w3.org/2000/svg" width="17.336"
                             height="17.336" viewBox="0 0 17.336 17.336">
                            <g id="Сгруппировать_605" data-name="Сгруппировать 605">
                                <path id="Контур_117" data-name="Контур 117"
                                      d="M15.945,11.379a9.843,9.843,0,0,1-3.091-.492,1.413,1.413,0,0,0-1.374.29L9.53,12.648A10.772,10.772,0,0,1,4.687,7.806l1.428-1.9a1.4,1.4,0,0,0,.345-1.42,9.858,9.858,0,0,1-.494-3.1A1.393,1.393,0,0,0,4.575,0H1.391A1.393,1.393,0,0,0,0,1.391,15.963,15.963,0,0,0,15.945,17.336a1.393,1.393,0,0,0,1.391-1.391V12.77A1.393,1.393,0,0,0,15.945,11.379Z"
                                      fill="#6b92b0" />
                            </g>
                        </svg>
                        <div class='call-description'>
                            <a href='tel:38(097) 107 25 25'>38(097) 107 25 25</a>
                            <a href='tel:38(097) 125 95 95'>38(097) 125 95 95</a>
                        </div>
                    </div>
                    <div class='address'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14.016" height="20.162"
                             viewBox="0 0 14.016 20.162">
                            <path id="placeholder_3_" data-name="placeholder (3)"
                                  d="M6.774,0A7.016,7.016,0,0,0-.234,7.008c0,4.857,7.015,13.154,7.015,13.154s7-8.535,7-13.154A7.016,7.016,0,0,0,6.774,0ZM8.888,9.06a2.99,2.99,0,1,1,0-4.229A2.981,2.981,0,0,1,8.888,9.06Zm0,0"
                                  transform="translate(0.234)" fill="#6b92b0" />
                        </svg>
                        <p>г. Киев</p>
                    </div>
                    <div class='socials'>
                        <div class='socials-images'>
                            <a href='#' class='socials-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/viber.svg' alt='Viber'>
                            </a>
                            <a href='#' class='socials-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/whatsapp.svg' alt='WhatsApp'>
                            </a>
                            <a href='#' class='socials-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/telegram.svg' alt='Telegram'>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class='map'>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57421.60429499244!2d30.493298419638002!3d50.502534269503194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf4ee15a4505%3A0x764931d2170146fe!2z0JrQuNC10LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1624028360228!5m2!1sru!2sua"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
</main>
<?php get_footer(); ?>
