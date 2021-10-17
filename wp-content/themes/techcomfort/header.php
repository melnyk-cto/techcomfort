<?php global $woocommerce; ?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta charset='UTF-8'>
    <meta name='viewport'
          content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <!-- <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">-->
    <meta name="theme-color" content="#e4a11b">
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title><?php wp_title(''); ?></title>
    <!-- Start Of Social Graph Protocol Meta Data -->
    <meta property="og:locale" content="en_US"/>
    <!-- <meta property="og:url" content="http://example.com/"/>-->
    <meta property="og:type" content="website"/>
    <!-- <meta property="og:title" content="Name Website"/>-->
    <!-- End Of Social Graph Protocol Meta Data -->
    <?php wp_head(); ?>
</head>
<body>
<header id="header" class='header <?php if (is_page_template('pages/home.php')) echo "transparent"; ?>'>
    <div class='header-top'>
        <div class='container'>
            <div class='header-top-inner'>
                <nav class='header-menu'>
                    <?php $args = array(
                        'theme_location' => 'main_menu',
                        'menu_class' => 'menu-list',
                        'container' => '',
                        'menu_id' => 'menu-slick',
                    );
                        wp_nav_menu($args); ?>
                </nav>
            </div>
        </div>
    </div>
    <div class='header-center'>
        <div class='container'>
            <div class='header-center-inner'>
                <a href='<?php echo home_url('/'); ?>' class='logo'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/logo.svg' alt='logo'>
                </a>
                <div class='header-center-content'>
                    <div class='address'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14.016" height="20.162"
                             viewBox="0 0 14.016 20.162">
                            <path id="placeholder_3_" data-name="placeholder (3)"
                                  d="M6.774,0A7.016,7.016,0,0,0-.234,7.008c0,4.857,7.015,13.154,7.015,13.154s7-8.535,7-13.154A7.016,7.016,0,0,0,6.774,0ZM8.888,9.06a2.99,2.99,0,1,1,0-4.229A2.981,2.981,0,0,1,8.888,9.06Zm0,0"
                                  transform="translate(0.234)" fill="#6b92b0"/>
                        </svg>
                        <p><?php echo get_field('city', 'option') ?></p>
                    </div>
                    <div class='call'>
                        <a href='tel:<?php echo get_field('phone_1', 'option') ?>'><?php echo get_field('phone_1', 'option') ?></a>
                        <a href='tel:<?php echo get_field('phone_2', 'option') ?>'><?php echo get_field('phone_2', 'option') ?></a>
                    </div>
                    <div class='socials'>
                        <a href='https://t.me/' class='socials-image'>
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/telegram.svg'
                                 alt='Telegram'>
                        </a>
                        <a href='#' class='socials-image'>
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/viber.svg'
                                 alt='Viber'>
                        </a>
                        <a href='#' class='socials-image'>
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/whatsapp.svg'
                                 alt='WhatsApp'>
                        </a>
                    </div>
                    <!--                    <select name='' id='' class='language'>-->
                    <!--                        <option value=''>Ru</option>-->
                    <!--                        <option value=''>En</option>-->
                    <!--                        <option value=''>Un</option>-->
                    <!--                    </select>-->
                </div>
            </div>
        </div>
    </div>
    <div class='header-bottom'>
        <div class='container'>
            <div class='header-bottom-inner'>
                <div class='header-catalog'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="19.999" height="20" viewBox="0 0 19.999 20">
                        <g id="Сгруппировать_2553" data-name="Сгруппировать 2553" transform="translate(-1 0.003)">
                            <path id="Объединение_3" data-name="Объединение 3"
                                  d="M15.116,20a1,1,0,0,1-1-1V15.117a1,1,0,0,1,1-1H19a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1ZM8.058,20a1,1,0,0,1-1-1V15.118a1,1,0,0,1,1-1h3.882a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1ZM1,20a1,1,0,0,1-1-1V15.117a1,1,0,0,1,1-1H4.882a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1Zm14.117-7.059a1,1,0,0,1-1-1V8.059a1,1,0,0,1,1-1H19a1,1,0,0,1,1,1v3.883a1,1,0,0,1-1,1Zm-7.059,0a1,1,0,0,1-1-1V8.059a1,1,0,0,1,1-1H11.94a1,1,0,0,1,1,1v3.882a1,1,0,0,1-1,1ZM1,12.941a1,1,0,0,1-1-1V8.059a1,1,0,0,1,1-1H4.882a1,1,0,0,1,1,1v3.883a1,1,0,0,1-1,1ZM15.116,5.882a1,1,0,0,1-1-1V1a1,1,0,0,1,1-1H19a1,1,0,0,1,1,1V4.883a1,1,0,0,1-1,1Zm-7.058,0a1,1,0,0,1-1-1V1a1,1,0,0,1,1-1H11.94a1,1,0,0,1,1,1V4.883a1,1,0,0,1-1,1ZM1,5.882a1,1,0,0,1-1-1V1A1,1,0,0,1,1,0H4.882a1,1,0,0,1,1,1V4.883a1,1,0,0,1-1,1Z"
                                  transform="translate(1 -0.003)" fill="#fff"/>
                        </g>
                    </svg>
                    <p>Каталог Товаров</p>
                    <div class='catalog-submenu d-none'>
                        <a href='<?php echo home_url('/'); ?>product' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-3.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Настенные кондиционеры</p>
                        </a>
                        <a href='<?php echo home_url('/'); ?>product' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-4.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Готовые решения мультисистем</p>
                        </a>
                        <a href='<?php echo home_url('/'); ?>product' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-5.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Мультисплит-системы</p>
                        </a>
                        <a href='<?php echo home_url('/'); ?>product' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-6.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Напольно-потолочные кондиционеры</p>
                        </a>
                        <a href='<?php echo home_url('/'); ?>product' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-7.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Кассетные кондиционеры</p>
                        </a>
                        <a href='<?php echo home_url('/'); ?>product' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-8.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Канальные кондиционеры</p>
                        </a>
                        <a href='<?php echo home_url('/'); ?>product' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-9.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Колонные кондиционеры</p>
                        </a>
                        <a href='<?php echo home_url('/'); ?>product' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-10.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Мобильные кондиционеры</p>
                        </a>
                        <a href='<?php echo home_url('/'); ?>product' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-11.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Компрессорно-конденсаторный блок (ККБ)</p>
                        </a>
                    </div>
                </div>
                <div class='header-action'>
                    <!--                    <a class='header-profile'>-->
                    <!--                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21"-->
                    <!--                             height="21" viewBox="0 0 21 21">-->
                    <!--                            <defs>-->
                    <!--                                <clipPath id="clip-path">-->
                    <!--                                    <rect id="Прямоугольник_2160" data-name="Прямоугольник 2160" width="21" height="21"-->
                    <!--                                          transform="translate(113 369)" stroke="#707070" stroke-width="1" />-->
                    <!--                                </clipPath>-->
                    <!--                            </defs>-->
                    <!--                            <g id="Группа_масок_381" data-name="Группа масок 381" transform="translate(-113 -369)"-->
                    <!--                               clip-path="url(#clip-path)">-->
                    <!--                                <g id="user" transform="translate(113 369)">-->
                    <!--                                    <g id="Сгруппировать_2994" data-name="Сгруппировать 2994">-->
                    <!--                                        <path id="Контур_860" data-name="Контур 860"-->
                    <!--                                              d="M17.925,13.575a10.46,10.46,0,0,0-3.99-2.5,6.07,6.07,0,1,0-6.869,0A10.517,10.517,0,0,0,0,21H1.641a8.859,8.859,0,0,1,17.719,0H21A10.432,10.432,0,0,0,17.925,13.575ZM10.5,10.5a4.43,4.43,0,1,1,4.43-4.43A4.435,4.435,0,0,1,10.5,10.5Z" />-->
                    <!--                                    </g>-->
                    <!--                                </g>-->
                    <!--                            </g>-->
                    <!--                        </svg>-->
                    <!--                        <p>Мой Профиль</p>-->
                    <!--                    </a>-->
                    <a href='<?php echo home_url('/'); ?>comparison' class='header-comparison'>
                        <svg id="Сгруппировать_2793" data-name="Сгруппировать 2793" xmlns="http://www.w3.org/2000/svg"
                             width="31.918" height="24.554" viewBox="0 0 31.918 24.554">
                            <path id="Контур_724" data-name="Контур 724"
                                  d="M31.461,67.082,27.419,58.54h1.687a.7.7,0,1,0,0-1.406H18.947a3.058,3.058,0,0,0-5.976,0H2.812a.7.7,0,1,0,0,1.406H4.5L.457,67.082A.7.7,0,0,0,0,67.715a5.554,5.554,0,0,0,5.554,5.554h.035a5.7,5.7,0,0,0,5.624-5.589.6.6,0,0,0-.492-.6L6.679,58.54h6.292a3.093,3.093,0,0,0,2.285,2.144V73.832a4.781,4.781,0,0,0-4.148,4.781.668.668,0,0,0,.667.669h8.332a.668.668,0,0,0,.7-.632c0-.012,0-.024,0-.036a4.781,4.781,0,0,0-4.148-4.781V60.685a3.093,3.093,0,0,0,2.285-2.144h6.292L21.2,67.082a.633.633,0,0,0-.492.633,5.554,5.554,0,0,0,5.554,5.554h.035a5.66,5.66,0,0,0,5.624-5.554A.738.738,0,0,0,31.461,67.082ZM5.589,71.863h0a4.148,4.148,0,0,1-4.113-3.48H9.737A4.289,4.289,0,0,1,5.589,71.863Zm3.55-4.886h-7.1l3.55-7.628Zm10.194,10.9H12.585a3.621,3.621,0,0,1,3.375-2.742A3.621,3.621,0,0,1,19.334,77.874ZM15.959,59.349A1.652,1.652,0,1,1,17.611,57.7,1.652,1.652,0,0,1,15.959,59.349Zm10.37,0,3.55,7.628h-7.1Zm-.035,12.514a4.148,4.148,0,0,1-4.113-3.48h8.261A4.289,4.289,0,0,1,26.294,71.863Z"
                                  transform="translate(0 -54.727)"/>
                        </svg>
                        <p>Сравнение</p>
                    </a>
                    <!--                    <a href='-->
                    <?php //echo home_url('/'); ?><!--personal-area' class='header-favorites'>-->
                    <!--                        <svg xmlns="http://www.w3.org/2000/svg" width="26.93" height="23.95" viewBox="0 0 26.93 23.95">-->
                    <!--                            <path id="Контур_723" data-name="Контур 723"-->
                    <!--                                  d="M18.675,1.465a6.021,6.021,0,0,0-3.76,1.3,8.566,8.566,0,0,0-2.2,2.646,8.565,8.565,0,0,0-2.2-2.646,6.021,6.021,0,0,0-3.76-1.3C2.9,1.465,0,4.615,0,8.792c0,4.513,3.623,7.6,9.108,12.274.931.794,1.987,1.693,3.084,2.653a.795.795,0,0,0,1.046,0c1.1-.96,2.153-1.859,3.085-2.654C21.807,16.392,25.43,13.3,25.43,8.792,25.43,4.615,22.526,1.465,18.675,1.465Z"-->
                    <!--                                  transform="translate(0.75 -0.715)" fill="none" stroke="#000" stroke-width="1.5"/>-->
                    <!--                        </svg>-->
                    <!--                        <p>Избранные</p>-->
                    <!--                    </a>-->
                    <div class='header-basket open-basket-js'>
                        <div class='basket-image'>
                            <span><?php echo $woocommerce->cart->get_cart_contents_count(); ?></span>
                            <svg id="shopping-cart-empty-side-view" xmlns="http://www.w3.org/2000/svg" width="33"
                                 height="31.058" viewBox="0 0 33 31.058">
                                <path id="Контур_100" data-name="Контур 100"
                                      d="M32.81,7.012a1.058,1.058,0,0,0-.823-.452l-20.47-.882a1.059,1.059,0,0,0-.091,2.116l19.084.823L26.757,20.324h-16.7L7.042,3.9A1.059,1.059,0,0,0,6.387,3.1L1.446,1.162A1.059,1.059,0,1,0,.672,3.133L5.065,4.859l3.07,16.715a1.059,1.059,0,0,0,1.042.867h.509l-1.163,3.23a.882.882,0,0,0,.83,1.181h.816a3.176,3.176,0,1,0,4.722,0h6.925a3.176,3.176,0,1,0,4.722,0h.992a.882.882,0,1,0,0-1.765H10.609l.953-2.647H27.529a1.058,1.058,0,0,0,1.008-.736L32.949,7.941A1.057,1.057,0,0,0,32.81,7.012ZM12.53,30.382a1.412,1.412,0,1,1,1.412-1.412A1.413,1.413,0,0,1,12.53,30.382Zm11.647,0a1.412,1.412,0,1,1,1.412-1.412A1.413,1.413,0,0,1,24.176,30.382Z"
                                      transform="translate(0 -1.089)"/>
                            </svg>
                        </div>
                        <p>Товары</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='header-mobiles'>
        <div class='header-mobiles-top'>
            <div class='container'>
                <div class='top-inner'>
                    <div class='burger'>
                        <span></span>
                    </div>
                    <a href='<?php echo home_url('/'); ?>' class='logo'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/logo.svg' alt='logo'>
                    </a>
                    <div class='header-basket open-basket-js'>
                        <div class='basket-image'>
                            <span><?php echo $woocommerce->cart->get_cart_contents_count(); ?></span>
                            <svg id="shopping-cart-empty-side-view" xmlns="http://www.w3.org/2000/svg" width="33"
                                 height="31.058" viewBox="0 0 33 31.058">
                                <path id="Контур_100" data-name="Контур 100"
                                      d="M32.81,7.012a1.058,1.058,0,0,0-.823-.452l-20.47-.882a1.059,1.059,0,0,0-.091,2.116l19.084.823L26.757,20.324h-16.7L7.042,3.9A1.059,1.059,0,0,0,6.387,3.1L1.446,1.162A1.059,1.059,0,1,0,.672,3.133L5.065,4.859l3.07,16.715a1.059,1.059,0,0,0,1.042.867h.509l-1.163,3.23a.882.882,0,0,0,.83,1.181h.816a3.176,3.176,0,1,0,4.722,0h6.925a3.176,3.176,0,1,0,4.722,0h.992a.882.882,0,1,0,0-1.765H10.609l.953-2.647H27.529a1.058,1.058,0,0,0,1.008-.736L32.949,7.941A1.057,1.057,0,0,0,32.81,7.012ZM12.53,30.382a1.412,1.412,0,1,1,1.412-1.412A1.413,1.413,0,0,1,12.53,30.382Zm11.647,0a1.412,1.412,0,1,1,1.412-1.412A1.413,1.413,0,0,1,24.176,30.382Z"
                                      transform="translate(0 -1.089)"/>
                            </svg>
                        </div>
                        <p>Товары</p>
                    </div>
                </div>
            </div>
        </div>
        <div class='header-mobiles-bottom'>
            <div class='bottom-inner'>
                <div class='close header-close-js'></div>
                <div id='header-catalog-js' class='header-catalog'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="19.999" height="20" viewBox="0 0 19.999 20">
                        <g id="Сгруппировать_2553" data-name="Сгруппировать 2553" transform="translate(-1 0.003)">
                            <path id="Объединение_3" data-name="Объединение 3"
                                  d="M15.116,20a1,1,0,0,1-1-1V15.117a1,1,0,0,1,1-1H19a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1ZM8.058,20a1,1,0,0,1-1-1V15.118a1,1,0,0,1,1-1h3.882a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1ZM1,20a1,1,0,0,1-1-1V15.117a1,1,0,0,1,1-1H4.882a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1Zm14.117-7.059a1,1,0,0,1-1-1V8.059a1,1,0,0,1,1-1H19a1,1,0,0,1,1,1v3.883a1,1,0,0,1-1,1Zm-7.059,0a1,1,0,0,1-1-1V8.059a1,1,0,0,1,1-1H11.94a1,1,0,0,1,1,1v3.882a1,1,0,0,1-1,1ZM1,12.941a1,1,0,0,1-1-1V8.059a1,1,0,0,1,1-1H4.882a1,1,0,0,1,1,1v3.883a1,1,0,0,1-1,1ZM15.116,5.882a1,1,0,0,1-1-1V1a1,1,0,0,1,1-1H19a1,1,0,0,1,1,1V4.883a1,1,0,0,1-1,1Zm-7.058,0a1,1,0,0,1-1-1V1a1,1,0,0,1,1-1H11.94a1,1,0,0,1,1,1V4.883a1,1,0,0,1-1,1ZM1,5.882a1,1,0,0,1-1-1V1A1,1,0,0,1,1,0H4.882a1,1,0,0,1,1,1V4.883a1,1,0,0,1-1,1Z"
                                  transform="translate(1 -0.003)" fill="#fff"/>
                        </g>
                    </svg>
                    <p>Каталог Товаров</p>
                    <div id='catalog-submenu-js' class='catalog-submenu'>
                        <a href='<?php echo home_url('/'); ?>product' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-12.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Настенные кондиционеры</p>
                        </a>
                        <a href='<?php echo home_url('/'); ?>product' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-13.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Готовые решения мультисистем</p>
                        </a>
                        <a href='<?php echo home_url('/'); ?>product' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-14.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Мультисплит-системы</p>
                        </a>
                        <a href='<?php echo home_url('/'); ?>product' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-15.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Напольно-потолочные кондиционеры</p>
                        </a>
                        <a href='<?php echo home_url('/'); ?>product' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-16.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Кассетные кондиционеры</p>
                        </a>
                        <a href='<?php echo home_url('/'); ?>product' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-17.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Канальные кондиционеры</p>
                        </a>
                        <a href='<?php echo home_url('/'); ?>product' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-18.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Колонные кондиционеры</p>
                        </a>
                        <a href='<?php echo home_url('/'); ?>product' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-1.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Мобильные кондиционеры</p>
                        </a>
                        <a href='<?php echo home_url('/'); ?>product' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-2.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Компрессорно-конденсаторный блок (ККБ)</p>
                        </a>
                    </div>
                </div>
                <div class='header-menu'>
                    <div class='header-actions'>
                    </div>
                    <?php $args = array(
                        'theme_location' => 'main_menu',
                        'menu_class' => 'menu',
                        'container' => '',
                        'menu_id' => 'menu-slick',
                    );
                        wp_nav_menu($args); ?>
                    <div class='menu-item'>
                        <div class='call'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18.081" height="18.081"
                                 viewBox="0 0 18.081 18.081">
                                <path id="Контур_135" data-name="Контур 135"
                                      d="M16.63,11.868a10.266,10.266,0,0,1-3.224-.514,1.474,1.474,0,0,0-1.433.3L9.94,13.191a11.235,11.235,0,0,1-5.051-5.05l1.49-1.98a1.461,1.461,0,0,0,.36-1.481,10.281,10.281,0,0,1-.515-3.229A1.452,1.452,0,0,0,4.771,0H1.451A1.453,1.453,0,0,0,0,1.451a16.649,16.649,0,0,0,16.63,16.63,1.453,1.453,0,0,0,1.451-1.451V13.319A1.453,1.453,0,0,0,16.63,11.868Z"/>
                            </svg>
                            <a href='tel:<?php echo get_field('phone_1', 'option') ?>'><?php echo get_field('phone_1', 'option') ?></a>
                            <a href='tel:<?php echo get_field('phone_2', 'option') ?>'><?php echo get_field('phone_2', 'option') ?></a>
                        </div>
                        <div class='socials'>
                            <div class='socials-images'>
                                <a href='#' class='socials-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/viber.svg'
                                         alt='Viber'>
                                </a>
                                <a href='#' class='socials-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/whatsapp.svg'
                                         alt='WhatsApp'>
                                </a>
                                <a href='#' class='socials-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/telegram.svg'
                                         alt='Telegram'>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class='popup basket'>
    <div class='popup-inner basket-inner'>
        <div class='popup-title basket-title'>
            <h2>Корзина</h2>
            <div class='basket-close close'></div>
        </div>
        <div class='basket-list'>
            <!--            <h4 class='no-products'>Корзина пуста</h4>-->
            <?php
                global $woocommerce;
                $items = $woocommerce->cart->get_cart();

                foreach ($items as $item => $values) {
                    $_product = wc_get_product($values['data']->get_id());
                    $cart_item_remove_url = wc_get_cart_remove_url($item);
                    $price = $_product->get_regular_price();
                    $price_excl_tax = number_format(wc_get_price_excluding_tax($_product), 0, '', ' '); // price without VAT
                    echo "<div class='basket-item'>
                            <a data-product_id=" . $_product->get_id() . " class='item-close product-remove' href=" . $cart_item_remove_url . "></a>
                            <div class='item-image'>
                             " . $_product->get_image('180') . "
                            </div>
                            <div class='item-description'>
                                <h5>" . $_product->get_title() . "</h5>
                                <div class='quantity'>
                                    <button type='button' class='reduce'>-</button>
                                    <label>
                                        <input type='text' value=" . $values['quantity'] . " class='quantity-input'>
                                    </label>
                                    <button type='button' class='enlarge'>+</button>
                                </div>
                                <span>" . $price_excl_tax . " ₴</span>
                            </div>
                        </div>";
                }
            ?>
        </div>
        <div class='basket-bottom'>
            <div class='basket-bottom-description'>
                <p>Доставка:<span>0 UAH</span></p>
                <p>Сумма товара:<span><?php echo $woocommerce->cart->get_cart_total() ?></span>
                </p>
            </div>
            <a href='<?php echo home_url( '/' ); ?>ordering' class='btn'>Заказать</a>
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
