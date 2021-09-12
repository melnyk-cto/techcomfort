<?php /* Template Name: Page - Product */ ?>
<?php get_header(); ?>
<?php
wp_enqueue_script('product-page-js', get_stylesheet_directory_uri() . '/assets/js/product-page.js');
?>
<main class='product-page'>
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
    <section class='product-info'>
        <div class='container'>
            <h2>кондиционер­ C&H CH-S07GKP8</h2>
            <div class='product-info-inner'>
                <div class='product-info-slider'>
                    <div class='swiper-top'>
                        <div class='swiper-container swiper-product-top'>
                            <div class='swiper-wrapper'>
                                <div class='swiper-slide'>
                                    <div class='slider-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-4.jpg'
                                             alt='Кондиционер'>
                                    </div>
                                </div>
                                <div class='swiper-slide'>
                                    <div class='slider-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-5.jpg'
                                             alt='Кондиционер'>
                                    </div>
                                </div>
                                <div class='swiper-slide'>
                                    <div class='slider-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-6.jpg'
                                             alt='Кондиционер'>
                                    </div>
                                </div>
                                <div class='swiper-slide'>
                                    <div class='slider-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-7.jpg'
                                             alt='Кондиционер'>
                                    </div>
                                </div>
                                <div class='swiper-slide'>
                                    <div class='slider-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-8.jpg'
                                             alt='Кондиционер'>
                                    </div>
                                </div>
                            </div>
                            <div class='swiper-pagination'></div>
                        </div>
                    </div>
                    <div class='swiper-bottom'>
                        <div class='swiper-container swiper-product'>
                            <div class='swiper-wrapper'>
                                <div class='swiper-slide'>
                                    <div class='slider-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-4.jpg'
                                             alt='Кондиционер'>
                                    </div>
                                </div>
                                <div class='swiper-slide'>
                                    <div class='slider-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-5.jpg'
                                             alt='Кондиционер'>
                                    </div>
                                </div>
                                <div class='swiper-slide'>
                                    <div class='slider-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-6.jpg'
                                             alt='Кондиционер'>
                                    </div>
                                </div>
                                <div class='swiper-slide'>
                                    <div class='slider-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-7.jpg'
                                             alt='Кондиционер'>
                                    </div>
                                </div>
                                <div class='swiper-slide'>
                                    <div class='slider-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-8.jpg'
                                             alt='Кондиционер'>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='swiper-button-prev'></div>
                        <div class='swiper-button-next'></div>
                    </div>
                </div>
                <div class='product-info-description'>
                    <div class='description-info'>
                        <p>Код Товара: 0000</p>
                        <p>Производитель: ­С&H (104)</p>
                    </div>
                    <div class='area'>
                        <h5>Площадь, М²</h5>
                        <ul class='area-list'>
                            <li>18-22 М²</li>
                            <li>20-30 М²</li>
                            <li>23-33 М²</li>
                            <li>30­40 М²</li>
                            <li>31-41 М²</li>
                        </ul>
                    </div>
                    <div class='quantity'>
                        <h5>Количество</h5>
                        <div class='quantity-buttons'>
                            <button type='button' class='reduce'>-</button>
                            <label>
                                <input type='text' value='1' class='quantity-input'>
                            </label>
                            <button type='button' class='enlarge'>+</button>
                        </div>
                    </div>
                    <div class='buy'>
                        <p class='price'>
                            Цена:
                            <span>7 870 UAH</span>
                        </p>
                        <a href='#' class='btn'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="25.411" viewBox="0 0 27 25.411">
                                <path id="Контур_72" data-name="Контур 72"
                                      d="M26.844,5.935a.866.866,0,0,0-.673-.37L9.422,4.843a.866.866,0,0,0-.074,1.731l15.614.673-3.07,9.579H8.23L5.762,3.387a.866.866,0,0,0-.535-.65L1.183,1.149A.866.866,0,0,0,.55,2.761L4.144,4.174,6.656,17.849a.867.867,0,0,0,.852.71h.417L6.973,21.2a.722.722,0,0,0,.679.966H8.32a2.6,2.6,0,1,0,3.863,0h5.666a2.6,2.6,0,1,0,3.863,0h.812a.722.722,0,1,0,0-1.444H8.68l.78-2.166H22.524a.866.866,0,0,0,.825-.6l3.61-11.262A.864.864,0,0,0,26.844,5.935ZM10.252,25.056A1.155,1.155,0,1,1,11.407,23.9,1.156,1.156,0,0,1,10.252,25.056Zm9.529,0A1.155,1.155,0,1,1,20.936,23.9,1.156,1.156,0,0,1,19.781,25.056Z"
                                      transform="translate(0 -1.089)" fill="#fff" />
                            </svg>

                            купить
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class='general-information'>
        <div class='container'>
            <div class='general-information-inner'>
                <div class='tabs buttons-container-js'>
                    <a href='#description' class='btn btn-contour active'>Описание</a>
                    <a href='#characteristics' class='btn btn-contour'>Характеристики</a>
                    <a href='#reviews' class='btn btn-contour'>Отзывы</a>
                </div>
                <div id='description' class='description'>
                    <h5>Описание</h5>
                    <p>
                        Класс А, Система фильтров 7SKY, CH SMART-ION Filter (только для моделей XP7), ЕЕR -3,3 COP-3,7,
                        тихий вн. блок 24 Дб, компактный Hi-tech дизайн, фильтр Eco-fresh
                    </p>
                </div>
                <div id='characteristics' class='characteristics'>
                    <h5>характеристики</h5>
                    <ul class='characteristics-list'>
                        <li class='characteristics-item'>
                            <p>Тип кондиционера</p>
                            <span>настенный</span>
                        </li>
                        <li class='characteristics-item'>
                            <p>Производитель</p>
                            <span>C&H</span>
                        </li>
                        <li class='characteristics-item'>
                            <p>Модель</p>
                            <span>C&H CH-S07XP7</span>
                        </li>
                        <li class='characteristics-item'>
                            <p>Серия</p>
                            <span>AIR MASTER PLUS</span>
                        </li>
                        <li class='characteristics-item'>
                            <p>Рекомендованная площадь помещения,м²</p>
                            <span>20</span>
                        </li>
                        <li class='characteristics-item'>
                            <p>Тип хладагента</p>
                            <span>410А</span>
                        </li>
                        <li class='characteristics-item'>
                            <p>Холодопроизводительность (кВт)</p>
                            <span>2.26</span>
                        </li>
                        <li class='characteristics-item'>
                            <p>Теплопроизводительность (кВт)</p>
                            <span>2.43</span>
                        </li>
                        <li class='characteristics-item'>
                            <p>Потребляемая мощность (кВт)</p>
                            <span>0.69</span>
                        </li>
                        <li class='characteristics-item'>
                            <p>EER/COP</p>
                            <span>3,28/3,68</span>
                        </li>
                        <li class='characteristics-item'>
                            <p>SEER(CLASS)/SCOP (CLASS)</p>
                            <span> A</span>
                        </li>
                        <li class='characteristics-item'>
                            <p>Цвет</p>
                            <span>белый</span>
                        </li>
                        <li class='characteristics-item'>
                            <p>Минимальный уровень шума внутреннего блока</p>
                            <span>33-44 Дб</span>
                        </li>
                    </ul>
                </div>
                <div id='reviews' class='reviews'>
                    <h5>Отзывы</h5>
                    <form action=''>
                        <label>
                            <span>Имя</span>
                            <input type='text'>
                        </label>
                        <label class='textarea'>
                            <span>Отзывы</span>
                            <textarea></textarea>
                        </label>
                        <label class='textarea'>
                            <span>Достоинства</span>
                            <textarea></textarea>
                        </label>
                        <label class='textarea'>
                            <span>Недостатки</span>
                            <textarea></textarea>
                        </label>
                        <div class='rating'>
                            <p>Оценка:</p>
                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                 height="13.608"
                                 viewBox="0 0 14.137 13.608">
                                <path id="Контур_2" data-name="Контур 2"
                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                            </svg>
                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                 height="13.608"
                                 viewBox="0 0 14.137 13.608">
                                <path id="Контур_2" data-name="Контур 2"
                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                            </svg>
                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                 height="13.608"
                                 viewBox="0 0 14.137 13.608">
                                <path id="Контур_2" data-name="Контур 2"
                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                            </svg>
                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                 height="13.608"
                                 viewBox="0 0 14.137 13.608">
                                <path id="Контур_2" data-name="Контур 2"
                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                            </svg>
                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                 height="13.608"
                                 viewBox="0 0 14.137 13.608">
                                <path id="Контур_2" data-name="Контур 2"
                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                      transform="translate(0 -9.569)" fill="#ffdc96" />
                            </svg>
                        </div>
                        <button class='btn'>Отправить отзыв</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class='products'>
        <div class='container'>
            <h2>другие кондиционеры для этой площади помещения</h2>
            <div class='products-slider'>
                <div class='swiper-container swiper-products'>
                    <div class='swiper-wrapper'>
                        <div class='swiper-slide'>
                            <div class='products-item'>
                                <a href='<?php echo home_url('/'); ?>product-page' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-15.jpg'
                                         alt='Кондиционер'>
                                </a>
                                <div class='item-description'>
                                    <div class='rating'>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                             width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96" />
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                             width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96" />
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                             width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96" />
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                             width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96" />
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                             width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96" />
                                        </svg>
                                    </div>
                                    <a href='<?php echo home_url('/'); ?>product-page'>
                                        C&H CH-S07GKP8
                                        <div class='description-icons'>
                                            <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                 height="24.07"
                                                 viewBox="0 0 27 24.07">
                                                <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                   transform="translate(1 -0.465)">
                                                    <path id="Контур_714" data-name="Контур 714"
                                                          d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                          fill="none" stroke="#6b92b0" stroke-width="2" />
                                                </g>
                                            </svg>
                                            <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                 viewBox="0 0 512 512"
                                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z" />
                                            </svg>
                                        </div>
                                    </a>
                                    <span class='price'>8 760 UAH</span>
                                    <div class='description-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='swiper-slide'>
                            <div class='products-item'>
                                <a href='<?php echo home_url('/'); ?>product-page' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-16.jpg'
                                         alt='Кондиционер'>
                                </a>
                                <div class='item-description'>
                                    <div class='rating'>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                             width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96" />
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                             width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96" />
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                             width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96" />
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                             width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96" />
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                             width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96" />
                                        </svg>
                                    </div>
                                    <a href='<?php echo home_url('/'); ?>product-page'>
                                        C&H CH-S07GKP8
                                        <div class='description-icons'>
                                            <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                 height="24.07"
                                                 viewBox="0 0 27 24.07">
                                                <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                   transform="translate(1 -0.465)">
                                                    <path id="Контур_714" data-name="Контур 714"
                                                          d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                          fill="none" stroke="#6b92b0" stroke-width="2" />
                                                </g>
                                            </svg>
                                            <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                 viewBox="0 0 512 512"
                                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z" />
                                            </svg>
                                        </div>
                                    </a>
                                    <span class='price'>8 760 UAH</span>
                                    <div class='description-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='swiper-slide'>
                            <div class='products-item'>
                                <a href='<?php echo home_url('/'); ?>product-page' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-18.jpg'
                                         alt='Кондиционер'>
                                </a>
                                <div class='item-description'>
                                    <div class='rating'>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                             width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96" />
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                             width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96" />
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                             width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96" />
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                             width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96" />
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                             width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96" />
                                        </svg>
                                    </div>
                                    <a href='<?php echo home_url('/'); ?>product-page'>
                                        C&H CH-S07GKP8
                                        <div class='description-icons'>
                                            <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                 height="24.07"
                                                 viewBox="0 0 27 24.07">
                                                <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                   transform="translate(1 -0.465)">
                                                    <path id="Контур_714" data-name="Контур 714"
                                                          d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                          fill="none" stroke="#6b92b0" stroke-width="2" />
                                                </g>
                                            </svg>
                                            <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                 viewBox="0 0 512 512"
                                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z" />
                                            </svg>
                                        </div>
                                    </a>
                                    <span class='price'>8 760 UAH</span>
                                    <div class='description-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='swiper-slide'>
                            <div class='products-item'>
                                <a href='<?php echo home_url('/'); ?>product-page' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-19.jpg'
                                         alt='Кондиционер'>
                                </a>
                                <div class='item-description'>
                                    <div class='rating'>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                             width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96" />
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                             width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96" />
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                             width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96" />
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                             width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96" />
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                             width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96" />
                                        </svg>
                                    </div>
                                    <a href='<?php echo home_url('/'); ?>product-page'>
                                        C&H CH-S07GKP8
                                        <div class='description-icons'>
                                            <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                 height="24.07"
                                                 viewBox="0 0 27 24.07">
                                                <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                   transform="translate(1 -0.465)">
                                                    <path id="Контур_714" data-name="Контур 714"
                                                          d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                          fill="none" stroke="#6b92b0" stroke-width="2" />
                                                </g>
                                            </svg>
                                            <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                 viewBox="0 0 512 512"
                                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z" />
                                            </svg>
                                        </div>
                                    </a>
                                    <span class='price'>8 760 UAH</span>
                                    <div class='description-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='swiper-slide'>
                            <div class='products-item'>
                                <a href='<?php echo home_url('/'); ?>product-page' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-20.jpg'
                                         alt='Кондиционер'>
                                </a>
                                <div class='item-description'>
                                    <div class='rating'>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                             width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96" />
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                             width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96" />
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                             width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96" />
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                             width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96" />
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                             width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96" />
                                        </svg>
                                    </div>
                                    <a href='<?php echo home_url('/'); ?>product-page'>
                                        C&H CH-S07GKP8
                                        <div class='description-icons'>
                                            <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                 height="24.07"
                                                 viewBox="0 0 27 24.07">
                                                <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                   transform="translate(1 -0.465)">
                                                    <path id="Контур_714" data-name="Контур 714"
                                                          d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                          fill="none" stroke="#6b92b0" stroke-width="2" />
                                                </g>
                                            </svg>
                                            <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                 viewBox="0 0 512 512"
                                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z" />
                                            </svg>
                                        </div>
                                    </a>
                                    <span class='price'>8 760 UAH</span>
                                    <div class='description-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='swiper-pagination'></div>
                    <div class='swiper-button-prev'></div>
                    <div class='swiper-button-next'></div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
