<?php /* Template Name: Page - Catalog */ ?>
<?php get_header(); ?>
<?php
    wp_enqueue_style('nouislider-css', get_stylesheet_directory_uri() . '/assets/lib/nouislider.css');

    wp_enqueue_script('catalog-js', get_stylesheet_directory_uri() . '/assets/js/catalog.js');
    wp_enqueue_script('nouislider-js', get_stylesheet_directory_uri() . '/assets/lib/nouislider.js');
?>
<main class='catalog'>
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
    <section class='catalog-content'>
        <div class='container'>
            <div class='catalog-inner'>
                <div class='filter'>
                    <div class='filter-title'>
                        <h2>Фильтры</h2>
                        <div class='close close-filter'></div>
                    </div>
                    <form action=''>
                        <div class='price filter-item'>
                            <h5>Цена</h5>
                            <div class="style-2 wrapper m-b-50 p-l-r">
                                <div class='price-value'>
                                    <label>
                                        <input type="text" class="input-with-keypress-0 value">
                                    </label>
                                    <span></span>
                                    <label>
                                        <input type="text" class="input-with-keypress-1 value">
                                    </label>
                                    <button type='button' class='btn'>ок</button>
                                </div>
                                <div class="slider-keypress m-b-20"></div>
                            </div>
                        </div>
                        <div class='manufacturers filter-item'>
                            <h5>Производители</h5>
                            <label>
                                <input type='checkbox'>
                                ­С&H (104)
                            </label>
                        </div>
                        <div class='area filter-item'>
                            <h5>Рекомендованная площадь,м²</h5>
                            <label>
                                <input type='checkbox'>
                                18 - 22
                            </label>
                            <label>
                                <input type='checkbox'>
                                20 - 33
                            </label>
                            <label>
                                <input type='checkbox'>
                                23 - 33
                            </label>
                            <label>
                                <input type='checkbox'>
                                30 - 40
                            </label>
                            <label>
                                <input type='checkbox'>
                                31 - 41
                            </label>
                            <span class='more'>Показать все</span>
                        </div>
                        <div class='refrigerant filter-item'>
                            <h5>Тип хладагента</h5>
                            <label>
                                <input type='checkbox'>
                                410A (47)
                            </label>
                            <label>
                                <input type='checkbox'>
                                r-32 (57)
                            </label>
                        </div>
                        <div class='compressor filter-item'>
                            <h5>Тип компрессора</h5>
                            <label>
                                <input type='checkbox'>
                                Инверторный
                            </label>
                            <label>
                                <input type='checkbox'>
                                Обычный
                            </label>
                        </div>
                        <div class='heating filter-item'>
                            <h5>Работа на обогрев до С</h5>
                            <label>
                                <input type='checkbox'>
                                -7
                            </label>
                            <label>
                                <input type='checkbox'>
                                -10
                            </label>
                            <label>
                                <input type='checkbox'>
                                -15
                            </label>
                            <label>
                                <input type='checkbox'>
                                -18
                            </label>
                            <label>
                                <input type='checkbox'>
                                -20
                            </label>
                            <span class='more'>Показать все</span>
                        </div>
                        <div class='wi-fi filter-item'>
                            <h5>Wi-Fi</h5>
                            <label>
                                <input type='checkbox'>
                                Есть
                            </label>
                            <label>
                                <input type='checkbox'>
                                Нет
                            </label>
                            <label>
                                <input type='checkbox'>
                                Опционально
                            </label>
                        </div>
                        <div class='color filter-item'>
                            <h5>Цвет</h5>
                            <label>
                                <input type='checkbox'>
                                Белый
                            </label>
                            <label>
                                <input type='checkbox'>
                                Серебристый
                            </label>
                            <label>
                                <input type='checkbox'>
                                Металлик
                            </label>
                            <label>
                                <input type='checkbox'>
                                Титаниум
                            </label>
                            <label>
                                <input type='checkbox'>
                                Черный
                            </label>
                            <span class='more'>Показать все</span>
                        </div>
                        <div class='noise-level filter-item'>
                            <h5>Минимальный уровень шума внутреннего блока</h5>
                            <label>
                                <input type='checkbox'>
                                16-29 Дб
                            </label>
                            <label>
                                <input type='checkbox'>
                                33-44 дБ
                            </label>
                            <label>
                                <input type='checkbox'>
                                45-59 дБ
                            </label>
                            <label>
                                <input type='checkbox'>
                                60 дБ и более
                            </label>
                        </div>
                    </form>
                </div>
                <div class='catalog-list'>
                    <div class='catalog-list-title'>
                        <button type='button' class='btn btn-filter'>
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/filter.svg' alt='Фильтр'>
                            <span>Фильтр</span>
                        </button>
                        <div class='sorting'>
                            <p>Сортировка:</p>
                            <select>
                                <option value='по умолчанию'>по умолчанию</option>
                                <option>oт дешевых к дорогим</option>
                                <option>oт дорогих к дешевым</option>
                                <option>по рейтингу</option>
                                <option>популярное</option>
                            </select>
                        </div>
                        <div class='catalog-buttons'>
                            <button type='button' class='btn-grid grid-js active'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="28.001" height="27.998"
                                     viewBox="0 0 28.001 27.998">
                                    <path id="Объединение_10" data-name="Объединение 10"
                                          d="M15107.249-4136a2,2,0,0,1-2-2v-5a2,2,0,0,1,2-2h5a2,2,0,0,1,2,2v5a2,2,0,0,1-2,2Zm-10,0a2,2,0,0,1-2-2v-5a2,2,0,0,1,2-2h5a2,2,0,0,1,2,2v5a2,2,0,0,1-2,2Zm-9,0a2,2,0,0,1-2-2v-5a2,2,0,0,1,2-2h4a2,2,0,0,1,2,2v5a2,2,0,0,1-2,2Zm19-10a2,2,0,0,1-2-2v-4a2,2,0,0,1,2-2h5a2,2,0,0,1,2,2v4a2,2,0,0,1-2,2Zm-10,0a2,2,0,0,1-2-2v-4a2,2,0,0,1,2-2h5a2,2,0,0,1,2,2v4a2,2,0,0,1-2,2Zm-9,0a2,2,0,0,1-2-2v-4a2,2,0,0,1,2-2h4a2,2,0,0,1,2,2v4a2,2,0,0,1-2,2Zm19-9a2,2,0,0,1-2-2v-5a2,2,0,0,1,2-2h5a2,2,0,0,1,2,2v5a2,2,0,0,1-2,2Zm-10,0a2,2,0,0,1-2-2v-5a2,2,0,0,1,2-2h5a2,2,0,0,1,2,2v5a2,2,0,0,1-2,2Zm-9,0a2,2,0,0,1-2-2v-5a2,2,0,0,1,2-2h4a2,2,0,0,1,2,2v5a2,2,0,0,1-2,2Z"
                                          transform="translate(-15086.25 4163.999)" fill="#b2c5d4" />
                                </svg>
                            </button>
                            <button type='button' class='btn-list list-js'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="31.001" height="28"
                                     viewBox="0 0 31.001 28">
                                    <path id="Объединение_2" data-name="Объединение 2"
                                          d="M11412-269a2,2,0,0,1-2-2v-5a2,2,0,0,1,2-2h16a2,2,0,0,1,2,2v5a2,2,0,0,1-2,2Zm-11,0a2,2,0,0,1-2-2v-5a2,2,0,0,1,2-2h5a2,2,0,0,1,2,2v5a2,2,0,0,1-2,2Zm11-10a2,2,0,0,1-2-2v-4a2,2,0,0,1,2-2h16a2,2,0,0,1,2,2v4a2,2,0,0,1-2,2Zm-11,0a2,2,0,0,1-2-2v-4a2,2,0,0,1,2-2h5a2,2,0,0,1,2,2v4a2,2,0,0,1-2,2Zm11-9a2,2,0,0,1-2-2v-5a2,2,0,0,1,2-2h16a2,2,0,0,1,2,2v5a2,2,0,0,1-2,2Zm-11,0a2,2,0,0,1-2-2v-5a2,2,0,0,1,2-2h5a2,2,0,0,1,2,2v5a2,2,0,0,1-2,2Z"
                                          transform="translate(-11398.999 297.001)" fill="#6b92b0" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class='products'>
                        <div class='products-list '>
                            <div class='products-item catalog-item'>
                                <a href='<?php echo home_url( '/' ); ?>product-page' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-item.png' alt='Кондиционер'>
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
                                    <a href='<?php echo home_url( '/' ); ?>product-page'>
                                        C&H CH-S07GKP8
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
                                    </a>
                                    <p>
                                        Класс А, Система фильтров 7SKY, CH SMART-ION Filter (только для моделей
                                        XP7), ЕЕR -3,3 COP-3,7, тихий вн. блок 24 Дб, компактный Hi-tech дизайн,
                                        фильтр Eco-fresh
                                    </p>
                                    <span class='price'>8 760 UAH</span>
                                    <div class='description-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                                <div class='item-buttons'>
                                    <a href='#' class='btn'>Купить</a>
                                    <a href='#' class='btn btn-second'>В Корзину</a>
                                </div>
                            </div>
                            <div class='products-item catalog-item'>
                                <a href='<?php echo home_url( '/' ); ?>product-page' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-item.png' alt='Кондиционер'>
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
                                    <a href='<?php echo home_url( '/' ); ?>product-page'>
                                        C&H CH-S07GKP8
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
                                    </a>
                                    <p>
                                        Класс А, Система фильтров 7SKY, CH SMART-ION Filter (только для моделей
                                        XP7), ЕЕR -3,3 COP-3,7, тихий вн. блок 24 Дб, компактный Hi-tech дизайн,
                                        фильтр Eco-fresh
                                    </p>
                                    <span class='price'>8 760 UAH</span>
                                    <div class='description-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                                <div class='item-buttons'>
                                    <a href='#' class='btn'>Купить</a>
                                    <a href='#' class='btn btn-second'>В Корзину</a>
                                </div>
                            </div>
                            <div class='products-item catalog-item'>
                                <a href='<?php echo home_url( '/' ); ?>product-page' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-item.png' alt='Кондиционер'>
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
                                    <a href='<?php echo home_url( '/' ); ?>product-page'>
                                        C&H CH-S07GKP8
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
                                    </a>
                                    <p>
                                        Класс А, Система фильтров 7SKY, CH SMART-ION Filter (только для моделей
                                        XP7), ЕЕR -3,3 COP-3,7, тихий вн. блок 24 Дб, компактный Hi-tech дизайн,
                                        фильтр Eco-fresh
                                    </p>
                                    <span class='price'>8 760 UAH</span>
                                    <div class='description-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                                <div class='item-buttons'>
                                    <a href='#' class='btn'>Купить</a>
                                    <a href='#' class='btn btn-second'>В Корзину</a>
                                </div>
                            </div>
                            <div class='products-item catalog-item'>
                                <a href='<?php echo home_url( '/' ); ?>product-page' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-item.png' alt='Кондиционер'>
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
                                    <a href='<?php echo home_url( '/' ); ?>product-page'>
                                        C&H CH-S07GKP8
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
                                    </a>
                                    <p>
                                        Класс А, Система фильтров 7SKY, CH SMART-ION Filter (только для моделей
                                        XP7), ЕЕR -3,3 COP-3,7, тихий вн. блок 24 Дб, компактный Hi-tech дизайн,
                                        фильтр Eco-fresh
                                    </p>
                                    <span class='price'>8 760 UAH</span>
                                    <div class='description-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                                <div class='item-buttons'>
                                    <a href='#' class='btn'>Купить</a>
                                    <a href='#' class='btn btn-second'>В Корзину</a>
                                </div>
                            </div>
                            <div class='products-item catalog-item'>
                                <a href='<?php echo home_url( '/' ); ?>product-page' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-item.png' alt='Кондиционер'>
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
                                    <a href='<?php echo home_url( '/' ); ?>product-page'>
                                        C&H CH-S07GKP8
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
                                    </a>
                                    <p>
                                        Класс А, Система фильтров 7SKY, CH SMART-ION Filter (только для моделей
                                        XP7), ЕЕR -3,3 COP-3,7, тихий вн. блок 24 Дб, компактный Hi-tech дизайн,
                                        фильтр Eco-fresh
                                    </p>
                                    <span class='price'>8 760 UAH</span>
                                    <div class='description-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                                <div class='item-buttons'>
                                    <a href='#' class='btn'>Купить</a>
                                    <a href='#' class='btn btn-second'>В Корзину</a>
                                </div>
                            </div>
                            <div class='products-item catalog-item'>
                                <a href='<?php echo home_url( '/' ); ?>product-page' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-item.png' alt='Кондиционер'>
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
                                    <a href='<?php echo home_url( '/' ); ?>product-page'>
                                        C&H CH-S07GKP8
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
                                    </a>
                                    <p>
                                        Класс А, Система фильтров 7SKY, CH SMART-ION Filter (только для моделей
                                        XP7), ЕЕR -3,3 COP-3,7, тихий вн. блок 24 Дб, компактный Hi-tech дизайн,
                                        фильтр Eco-fresh
                                    </p>
                                    <span class='price'>8 760 UAH</span>
                                    <div class='description-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                                <div class='item-buttons'>
                                    <a href='#' class='btn'>Купить</a>
                                    <a href='#' class='btn btn-second'>В Корзину</a>
                                </div>
                            </div>
                            <div class='products-item catalog-item'>
                                <a href='<?php echo home_url( '/' ); ?>product-page' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-item.png' alt='Кондиционер'>
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
                                    <a href='<?php echo home_url( '/' ); ?>product-page'>
                                        C&H CH-S07GKP8
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
                                    </a>
                                    <p>
                                        Класс А, Система фильтров 7SKY, CH SMART-ION Filter (только для моделей
                                        XP7), ЕЕR -3,3 COP-3,7, тихий вн. блок 24 Дб, компактный Hi-tech дизайн,
                                        фильтр Eco-fresh
                                    </p>
                                    <span class='price'>8 760 UAH</span>
                                    <div class='description-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                                <div class='item-buttons'>
                                    <a href='#' class='btn'>Купить</a>
                                    <a href='#' class='btn btn-second'>В Корзину</a>
                                </div>
                            </div>
                            <div class='products-item catalog-item'>
                                <a href='<?php echo home_url( '/' ); ?>product-page' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-item.png' alt='Кондиционер'>
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
                                    <a href='<?php echo home_url( '/' ); ?>product-page'>
                                        C&H CH-S07GKP8
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
                                    </a>
                                    <p>
                                        Класс А, Система фильтров 7SKY, CH SMART-ION Filter (только для моделей
                                        XP7), ЕЕR -3,3 COP-3,7, тихий вн. блок 24 Дб, компактный Hi-tech дизайн,
                                        фильтр Eco-fresh
                                    </p>
                                    <span class='price'>8 760 UAH</span>
                                    <div class='description-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                                <div class='item-buttons'>
                                    <a href='#' class='btn'>Купить</a>
                                    <a href='#' class='btn btn-second'>В Корзину</a>
                                </div>
                            </div>
                            <div class='products-item catalog-item'>
                                <a href='<?php echo home_url( '/' ); ?>product-page' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-item.png' alt='Кондиционер'>
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
                                    <a href='<?php echo home_url( '/' ); ?>product-page'>
                                        C&H CH-S07GKP8
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
                                    </a>
                                    <p>
                                        Класс А, Система фильтров 7SKY, CH SMART-ION Filter (только для моделей
                                        XP7), ЕЕR -3,3 COP-3,7, тихий вн. блок 24 Дб, компактный Hi-tech дизайн,
                                        фильтр Eco-fresh
                                    </p>
                                    <span class='price'>8 760 UAH</span>
                                    <div class='description-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                                <div class='item-buttons'>
                                    <a href='#' class='btn'>Купить</a>
                                    <a href='#' class='btn btn-second'>В Корзину</a>
                                </div>
                            </div>
                            <div class='products-item catalog-item'>
                                <a href='<?php echo home_url( '/' ); ?>product-page' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-item.png' alt='Кондиционер'>
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
                                    <a href='<?php echo home_url( '/' ); ?>product-page'>
                                        C&H CH-S07GKP8
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
                                    </a>
                                    <p>
                                        Класс А, Система фильтров 7SKY, CH SMART-ION Filter (только для моделей
                                        XP7), ЕЕR -3,3 COP-3,7, тихий вн. блок 24 Дб, компактный Hi-tech дизайн,
                                        фильтр Eco-fresh
                                    </p>
                                    <span class='price'>8 760 UAH</span>
                                    <div class='description-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                                <div class='item-buttons'>
                                    <a href='#' class='btn'>Купить</a>
                                    <a href='#' class='btn btn-second'>В Корзину</a>
                                </div>
                            </div>
                            <div class='products-item catalog-item'>
                                <a href='<?php echo home_url( '/' ); ?>product-page' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-item.png' alt='Кондиционер'>
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
                                    <a href='<?php echo home_url( '/' ); ?>product-page'>
                                        C&H CH-S07GKP8
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
                                    </a>
                                    <p>
                                        Класс А, Система фильтров 7SKY, CH SMART-ION Filter (только для моделей
                                        XP7), ЕЕR -3,3 COP-3,7, тихий вн. блок 24 Дб, компактный Hi-tech дизайн,
                                        фильтр Eco-fresh
                                    </p>
                                    <span class='price'>8 760 UAH</span>
                                    <div class='description-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                                <div class='item-buttons'>
                                    <a href='#' class='btn'>Купить</a>
                                    <a href='#' class='btn btn-second'>В Корзину</a>
                                </div>
                            </div>
                            <div class='products-item catalog-item'>
                                <a href='<?php echo home_url( '/' ); ?>product-page' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-item.png' alt='Кондиционер'>
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
                                    <a href='<?php echo home_url( '/' ); ?>product-page'>
                                        C&H CH-S07GKP8
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
                                    </a>
                                    <p>
                                        Класс А, Система фильтров 7SKY, CH SMART-ION Filter (только для моделей
                                        XP7), ЕЕR -3,3 COP-3,7, тихий вн. блок 24 Дб, компактный Hi-tech дизайн,
                                        фильтр Eco-fresh
                                    </p>
                                    <span class='price'>8 760 UAH</span>
                                    <div class='description-buttons'>
                                        <a href='#' class='btn'>Купить</a>
                                        <a href='#' class='btn btn-second'>В Корзину</a>
                                    </div>
                                </div>
                                <div class='item-buttons'>
                                    <a href='#' class='btn'>Купить</a>
                                    <a href='#' class='btn btn-second'>В Корзину</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='products'>
                        <h2>Популярные Товары</h2>
                        <div class='products-slider'>
                            <div class='swiper-container swiper-products'>
                                <div class='swiper-wrapper'>
                                    <div class='swiper-slide'>
                                        <div class='products-item'>
                                            <a href='<?php echo home_url( '/' ); ?>product-page' class='item-image'>
                                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-item.png' alt='Кондиционер'>
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
                                                <a href='<?php echo home_url( '/' ); ?>product-page'>
                                                    C&H CH-S07GKP8
                                                    <svg class='favorites' xmlns="http://www.w3.org/2000/svg"
                                                         width="27"
                                                         height="24.07" viewBox="0 0 27 24.07">
                                                        <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                           transform="translate(1 -0.465)">
                                                            <path id="Контур_714" data-name="Контур 714"
                                                                  d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                                  fill="none" stroke="#6b92b0" stroke-width="2" />
                                                        </g>
                                                    </svg>
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
                                            <a href='<?php echo home_url( '/' ); ?>product-page' class='item-image'>
                                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-item.png' alt='Кондиционер'>
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
                                                <a href='<?php echo home_url( '/' ); ?>product-page'>
                                                    C&H CH-S07GKP8
                                                    <svg class='favorites' xmlns="http://www.w3.org/2000/svg"
                                                         width="27"
                                                         height="24.07" viewBox="0 0 27 24.07">
                                                        <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                           transform="translate(1 -0.465)">
                                                            <path id="Контур_714" data-name="Контур 714"
                                                                  d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                                  fill="none" stroke="#6b92b0" stroke-width="2" />
                                                        </g>
                                                    </svg>
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
                                            <a href='<?php echo home_url( '/' ); ?>product-page' class='item-image'>
                                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-item.png' alt='Кондиционер'>
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
                                                <a href='<?php echo home_url( '/' ); ?>product-page'>
                                                    C&H CH-S07GKP8
                                                    <svg class='favorites' xmlns="http://www.w3.org/2000/svg"
                                                         width="27"
                                                         height="24.07" viewBox="0 0 27 24.07">
                                                        <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                           transform="translate(1 -0.465)">
                                                            <path id="Контур_714" data-name="Контур 714"
                                                                  d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                                  fill="none" stroke="#6b92b0" stroke-width="2" />
                                                        </g>
                                                    </svg>
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
                                            <a href='<?php echo home_url( '/' ); ?>product-page' class='item-image'>
                                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-item.png' alt='Кондиционер'>
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
                                                <a href='<?php echo home_url( '/' ); ?>product-page'>
                                                    C&H CH-S07GKP8
                                                    <svg class='favorites' xmlns="http://www.w3.org/2000/svg"
                                                         width="27"
                                                         height="24.07" viewBox="0 0 27 24.07">
                                                        <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                           transform="translate(1 -0.465)">
                                                            <path id="Контур_714" data-name="Контур 714"
                                                                  d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                                  fill="none" stroke="#6b92b0" stroke-width="2" />
                                                        </g>
                                                    </svg>
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
                                            <a href='<?php echo home_url( '/' ); ?>product-page' class='item-image'>
                                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-item.png' alt='Кондиционер'>
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
                                                <a href='<?php echo home_url( '/' ); ?>product-page'>
                                                    C&H CH-S07GKP8
                                                    <svg class='favorites' xmlns="http://www.w3.org/2000/svg"
                                                         width="27"
                                                         height="24.07" viewBox="0 0 27 24.07">
                                                        <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                           transform="translate(1 -0.465)">
                                                            <path id="Контур_714" data-name="Контур 714"
                                                                  d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                                  fill="none" stroke="#6b92b0" stroke-width="2" />
                                                        </g>
                                                    </svg>
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
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
