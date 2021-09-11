<?php /* Template Name: Page - Our Works */ ?>
<?php get_header(); ?>
<?php
wp_enqueue_script('salvatore-js', get_stylesheet_directory_uri() . '/assets/lib/salvatore.min.js');
?>
<main class='our-works'>
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
    <section class='gallery'>
        <div class='container'>
            <h2>НАШИ РАБОТЫ</h2>
            <div id='grid' data-columns class='clearfix'>
                <div class="gallery-item">
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-1.jpg'
                         alt='Кондиционер'>
                </div>
                <div class="gallery-item grid-item--width2">
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-2.jpg'
                         alt='Кондиционер'>
                </div>
                <div class="gallery-item">
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-3.jpg'
                         alt='Кондиционер'>
                </div>
                <div class="gallery-item">
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-4.jpg'
                         alt='Кондиционер'>
                </div>
                <div class="gallery-item grid-item--width2">
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-5.jpg'
                         alt='Кондиционер'>
                </div>
                <div class="gallery-item">
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-6.jpg'
                         alt='Кондиционер'>
                </div>
                <div class="gallery-item grid-item--width2">
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-7.jpg'
                         alt='Кондиционер'>
                </div>
                <div class="gallery-item">
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-8.jpg'
                         alt='Кондиционер'>
                </div>
                <div class="gallery-item">
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-9.jpg'
                         alt='Кондиционер'>
                </div>
                <div class="gallery-item grid-item--width2">
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-10.jpg'
                         alt='Кондиционер'>
                </div>
                <div class="gallery-item">
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-11.jpg'
                         alt='Кондиционер'>
                </div>
                <div class="gallery-item">
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-12.jpg'
                         alt='Кондиционер'>
                </div>
                <div class="gallery-item">
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-13.jpg'
                         alt='Кондиционер'>
                </div>
                <div class="gallery-item grid-item--width2">
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-14.jpg'
                         alt='Кондиционер'>
                </div>
                <div class="gallery-item">
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-15.jpg'
                         alt='Кондиционер'>
                </div>
                <div class="gallery-item">
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-16.jpg'
                         alt='Кондиционер'>
                </div>
                <div class="gallery-item">
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-17.jpg'
                         alt='Кондиционер'>
                </div>
                <div class="gallery-item">
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-18.jpg'
                         alt='Кондиционер'>
                </div>
                <div class="gallery-item grid-item--width2">
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-19.jpg'
                         alt='Кондиционер'>
                </div>
                <div class="gallery-item">
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-20.jpg'
                         alt='Кондиционер'>
                </div>
                <div class="gallery-item">
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-21.jpg'
                         alt='Кондиционер'>
                </div>
                <div class="gallery-item">
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-22.jpg'
                         alt='Кондиционер'>
                </div>
                <div class="gallery-item">
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-23.jpg'
                         alt='Кондиционер'>
                </div>
                <div class="gallery-item">
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-24.jpg'
                         alt='Кондиционер'>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>

<script src='../assets/lib/salvatore.min.js'></script>
