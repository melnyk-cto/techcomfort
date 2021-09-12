<?php /* Template Name: Page - Blog */ ?>
<?php get_header(); ?>
<main class='blog'>
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
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-4.jpg'
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
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-8.jpg'
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
    <section class='blog-content'>
        <div class='container'>
            <div class='blog-list'>
                <div class='blog-item'>
                    <div class='item-description'>
                        <h2>Как подобрать кондиционер</h2>
                        <p>
                            Функционал современных кондиционеров не ограничивается только охлаждением. Существующие
                            модели этого климатического оборудования могут нагревать, очищать и осушать, а также
                            вентилировать имеющийся в помещении воздух. Широкие функциональные возможности и большое
                            количество настроек кондиционеров с одной стороны расширяют возможности потребителя, но
                            с другой усложняют выбор подходящей модели. Группы кондиционеров:
                        </p>
                        <ul>
                            <li>1. бытовые кондиционеры</li>
                            <li>2. полупромышленные кондиционеры</li>
                            <li>3. системы промышленной вентиляции и кондиционирования воздуха</li>
                        </ul>
                        <span class='more'>Подробнее</span>
                    </div>
                    <div class='item-image'><img
                                src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-8.jpg'
                                alt='Кондиционер'></div>
                </div>
                <div class='blog-item'>
                    <div class='item-image'><img
                                src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-13.jpg'
                                alt='Кондиционер'></div>
                    <div class='item-description'>
                        <h2>Как подобрать кондиционер</h2>
                        <p>
                            Функционал современных кондиционеров не ограничивается только охлаждением. Существующие
                            модели этого климатического оборудования могут нагревать, очищать и осушать, а также
                            вентилировать имеющийся в помещении воздух. Широкие функциональные возможности и большое
                            количество настроек кондиционеров с одной стороны расширяют возможности потребителя, но
                            с другой усложняют выбор подходящей модели.
                        </p>
                        <p>Группы кондиционеров:</p>
                        <ul>
                            <li>1. бытовые кондиционеры</li>
                            <li>2. полупромышленные кондиционеры</li>
                            <li>3. системы промышленной вентиляции и кондиционирования воздуха</li>
                        </ul>
                        <span class='more'>Подробнее</span>
                    </div>
                </div>
                <div class='blog-item'>
                    <div class='item-description'>
                        <h2>Как подобрать кондиционер</h2>
                        <p>
                            Функционал современных кондиционеров не ограничивается только охлаждением. Существующие
                            модели этого климатического оборудования могут нагревать, очищать и осушать, а также
                            вентилировать имеющийся в помещении воздух. Широкие функциональные возможности и большое
                            количество настроек кондиционеров с одной стороны расширяют возможности потребителя, но
                            с другой усложняют выбор подходящей модели.
                        </p>
                        <p>Группы кондиционеров:</p>
                        <ul>
                            <li>1. бытовые кондиционеры</li>
                            <li>2. полупромышленные кондиционеры</li>
                            <li>3. системы промышленной вентиляции и кондиционирования воздуха</li>
                        </ul>
                        <span class='more'>Подробнее</span>
                    </div>
                    <div class='item-image'><img
                                src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-18.jpg'
                                alt='Кондиционер'></div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>

