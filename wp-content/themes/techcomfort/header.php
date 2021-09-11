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
    <title>Главная</title>
    <!-- Start Of Social Graph Protocol Meta Data -->
    <meta property="og:locale" content="en_US" />
    <!-- <meta property="og:url" content="http://example.com/"/>-->
    <meta property="og:type" content="website" />
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
                    <ul class='menu-list'>
                        <li class='menu-item'>
                            <a href='<?php echo home_url('/'); ?>'>Главная</a>
                        </li>
                        <li class='menu-item'>
                            <a href='<?php echo home_url('/'); ?>catalog'>Каталог</a>
                        </li>
                        <li class='menu-item'>
                            <a href='<?php echo home_url('/'); ?>installation-and-assembly'>Установка и монтаж</a>
                        </li>
                        <li class='menu-item'>
                            <a href='<?php echo home_url('/'); ?>services'>Сервис</a>
                        </li>
                        <li class='menu-item'>
                            <a href='<?php echo home_url('/'); ?>payment-and-delivery'>Оплата и доствка</a>
                        </li>
                        <li class='menu-item'>
                            <a href='<?php echo home_url('/'); ?>our-works'>Наши роботы</a>
                        </li>
                        <li class='menu-item'>
                            <a href='<?php echo home_url('/'); ?>reviews'>Отзывы</a>
                        </li>
                        <li class='menu-item'>
                            <a href='<?php echo home_url('/'); ?>blog'>Блог</a>
                        </li>
                        <li class='menu-item'>
                            <a href='<?php echo home_url('/'); ?>contacts'>Контакты</a>
                        </li>
                    </ul>
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
                                  transform="translate(0.234)" fill="#6b92b0" />
                        </svg>
                        <p>г. Киев</p>
                    </div>
                    <div class='call'>
                        <a href='tel:38(097) 107 25 25'>38(097) 107 25 25</a>
                        <a href='tel:38(097) 125 95 95'>38(097) 125 95 95</a>
                    </div>
                    <div class='socials'>
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
                    <select name='' id='' class='language'>
                        <option value=''>Ru</option>
                        <option value=''>En</option>
                        <option value=''>Un</option>
                    </select>
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
                                  transform="translate(1 -0.003)" fill="#fff" />
                        </g>
                    </svg>
                    <p>Каталог Товаров</p>
                    <div class='catalog-submenu'>
                        <a href='product-page' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-3.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Настенные кондиционеры</p>
                        </a>
                        <a href='product-page' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-4.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Готовые решения мультисистем</p>
                        </a>
                        <a href='product-page' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-5.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Мультисплит-системы</p>
                        </a>
                        <a href='product-page' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-6.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Напольно-потолочные кондиционеры</p>
                        </a>
                        <a href='product-page' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-7.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Кассетные кондиционеры</p>
                        </a>
                        <a href='product-page' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-8.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Канальные кондиционеры</p>
                        </a>
                        <a href='product-page' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-9.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Колонные кондиционеры</p>
                        </a>
                        <a href='product-page' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-10.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Мобильные кондиционеры</p>
                        </a>
                        <a href='product-page' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-11.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Компрессорно-конденсаторный блок (ККБ)</p>
                        </a>
                    </div>
                </div>
                <div class='header-action'>
                    <a class='header-profile'>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21"
                             height="21" viewBox="0 0 21 21">
                            <defs>
                                <clipPath id="clip-path">
                                    <rect id="Прямоугольник_2160" data-name="Прямоугольник 2160" width="21" height="21"
                                          transform="translate(113 369)" stroke="#707070" stroke-width="1" />
                                </clipPath>
                            </defs>
                            <g id="Группа_масок_381" data-name="Группа масок 381" transform="translate(-113 -369)"
                               clip-path="url(#clip-path)">
                                <g id="user" transform="translate(113 369)">
                                    <g id="Сгруппировать_2994" data-name="Сгруппировать 2994">
                                        <path id="Контур_860" data-name="Контур 860"
                                              d="M17.925,13.575a10.46,10.46,0,0,0-3.99-2.5,6.07,6.07,0,1,0-6.869,0A10.517,10.517,0,0,0,0,21H1.641a8.859,8.859,0,0,1,17.719,0H21A10.432,10.432,0,0,0,17.925,13.575ZM10.5,10.5a4.43,4.43,0,1,1,4.43-4.43A4.435,4.435,0,0,1,10.5,10.5Z" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <p>Мой Профиль</p>
                    </a>
                    <a href='<?php echo home_url('/'); ?>comparison' class='header-comparison'>
                        <svg id="Сгруппировать_2793" data-name="Сгруппировать 2793" xmlns="http://www.w3.org/2000/svg"
                             width="31.918" height="24.554" viewBox="0 0 31.918 24.554">
                            <path id="Контур_724" data-name="Контур 724"
                                  d="M31.461,67.082,27.419,58.54h1.687a.7.7,0,1,0,0-1.406H18.947a3.058,3.058,0,0,0-5.976,0H2.812a.7.7,0,1,0,0,1.406H4.5L.457,67.082A.7.7,0,0,0,0,67.715a5.554,5.554,0,0,0,5.554,5.554h.035a5.7,5.7,0,0,0,5.624-5.589.6.6,0,0,0-.492-.6L6.679,58.54h6.292a3.093,3.093,0,0,0,2.285,2.144V73.832a4.781,4.781,0,0,0-4.148,4.781.668.668,0,0,0,.667.669h8.332a.668.668,0,0,0,.7-.632c0-.012,0-.024,0-.036a4.781,4.781,0,0,0-4.148-4.781V60.685a3.093,3.093,0,0,0,2.285-2.144h6.292L21.2,67.082a.633.633,0,0,0-.492.633,5.554,5.554,0,0,0,5.554,5.554h.035a5.66,5.66,0,0,0,5.624-5.554A.738.738,0,0,0,31.461,67.082ZM5.589,71.863h0a4.148,4.148,0,0,1-4.113-3.48H9.737A4.289,4.289,0,0,1,5.589,71.863Zm3.55-4.886h-7.1l3.55-7.628Zm10.194,10.9H12.585a3.621,3.621,0,0,1,3.375-2.742A3.621,3.621,0,0,1,19.334,77.874ZM15.959,59.349A1.652,1.652,0,1,1,17.611,57.7,1.652,1.652,0,0,1,15.959,59.349Zm10.37,0,3.55,7.628h-7.1Zm-.035,12.514a4.148,4.148,0,0,1-4.113-3.48h8.261A4.289,4.289,0,0,1,26.294,71.863Z"
                                  transform="translate(0 -54.727)" />
                        </svg>
                        <p>Сравнение</p>
                    </a>
                    <a href='<?php echo home_url('/'); ?>personal-area' class='header-favorites'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="26.93" height="23.95" viewBox="0 0 26.93 23.95">
                            <path id="Контур_723" data-name="Контур 723"
                                  d="M18.675,1.465a6.021,6.021,0,0,0-3.76,1.3,8.566,8.566,0,0,0-2.2,2.646,8.565,8.565,0,0,0-2.2-2.646,6.021,6.021,0,0,0-3.76-1.3C2.9,1.465,0,4.615,0,8.792c0,4.513,3.623,7.6,9.108,12.274.931.794,1.987,1.693,3.084,2.653a.795.795,0,0,0,1.046,0c1.1-.96,2.153-1.859,3.085-2.654C21.807,16.392,25.43,13.3,25.43,8.792,25.43,4.615,22.526,1.465,18.675,1.465Z"
                                  transform="translate(0.75 -0.715)" fill="none" stroke="#000" stroke-width="1.5" />
                        </svg>
                        <p>Избранные</p>
                    </a>
                    <div class='header-basket'>
                        <div class='basket-image'>
                            <svg id="shopping-cart-empty-side-view" xmlns="http://www.w3.org/2000/svg" width="33"
                                 height="31.058" viewBox="0 0 33 31.058">
                                <path id="Контур_100" data-name="Контур 100"
                                      d="M32.81,7.012a1.058,1.058,0,0,0-.823-.452l-20.47-.882a1.059,1.059,0,0,0-.091,2.116l19.084.823L26.757,20.324h-16.7L7.042,3.9A1.059,1.059,0,0,0,6.387,3.1L1.446,1.162A1.059,1.059,0,1,0,.672,3.133L5.065,4.859l3.07,16.715a1.059,1.059,0,0,0,1.042.867h.509l-1.163,3.23a.882.882,0,0,0,.83,1.181h.816a3.176,3.176,0,1,0,4.722,0h6.925a3.176,3.176,0,1,0,4.722,0h.992a.882.882,0,1,0,0-1.765H10.609l.953-2.647H27.529a1.058,1.058,0,0,0,1.008-.736L32.949,7.941A1.057,1.057,0,0,0,32.81,7.012ZM12.53,30.382a1.412,1.412,0,1,1,1.412-1.412A1.413,1.413,0,0,1,12.53,30.382Zm11.647,0a1.412,1.412,0,1,1,1.412-1.412A1.413,1.413,0,0,1,24.176,30.382Z"
                                      transform="translate(0 -1.089)" />
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
                    <div class='header-basket'>
                        <div class='basket-image'>
                            <svg id="shopping-cart-empty-side-view" xmlns="http://www.w3.org/2000/svg" width="33"
                                 height="31.058" viewBox="0 0 33 31.058">
                                <path id="Контур_100" data-name="Контур 100"
                                      d="M32.81,7.012a1.058,1.058,0,0,0-.823-.452l-20.47-.882a1.059,1.059,0,0,0-.091,2.116l19.084.823L26.757,20.324h-16.7L7.042,3.9A1.059,1.059,0,0,0,6.387,3.1L1.446,1.162A1.059,1.059,0,1,0,.672,3.133L5.065,4.859l3.07,16.715a1.059,1.059,0,0,0,1.042.867h.509l-1.163,3.23a.882.882,0,0,0,.83,1.181h.816a3.176,3.176,0,1,0,4.722,0h6.925a3.176,3.176,0,1,0,4.722,0h.992a.882.882,0,1,0,0-1.765H10.609l.953-2.647H27.529a1.058,1.058,0,0,0,1.008-.736L32.949,7.941A1.057,1.057,0,0,0,32.81,7.012ZM12.53,30.382a1.412,1.412,0,1,1,1.412-1.412A1.413,1.413,0,0,1,12.53,30.382Zm11.647,0a1.412,1.412,0,1,1,1.412-1.412A1.413,1.413,0,0,1,24.176,30.382Z"
                                      transform="translate(0 -1.089)" />
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
                                  transform="translate(1 -0.003)" fill="#fff" />
                        </g>
                    </svg>
                    <p>Каталог Товаров</p>
                    <div id='catalog-submenu-js' class='catalog-submenu'>
                        <a href='product-page' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-12.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Настенные кондиционеры</p>
                        </a>
                        <a href='product-page' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-13.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Готовые решения мультисистем</p>
                        </a>
                        <a href='product-page' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-14.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Мультисплит-системы</p>
                        </a>
                        <a href='product-page' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-15.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Напольно-потолочные кондиционеры</p>
                        </a>
                        <a href='product-page' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-16.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Кассетные кондиционеры</p>
                        </a>
                        <a href='product-page' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-17.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Канальные кондиционеры</p>
                        </a>
                        <a href='product-page' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-18.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Колонные кондиционеры</p>
                        </a>
                        <a href='product-page' class='submenu-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-1.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <p>Мобильные кондиционеры</p>
                        </a>
                        <a href='product-page' class='submenu-item'>
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
                        <a href='<?php echo home_url('/'); ?>personal-area' class='header-item header-profile'>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="21"
                                 height="21" viewBox="0 0 21 21">
                                <defs>
                                    <clipPath id="clip-path">
                                        <rect id="Прямоугольник_2160" data-name="Прямоугольник 2160" width="21"
                                              height="21"
                                              transform="translate(113 369)" stroke="#707070" stroke-width="1" />
                                    </clipPath>
                                </defs>
                                <g id="Группа_масок_381" data-name="Группа масок 381" transform="translate(-113 -369)"
                                   clip-path="url(#clip-path)">
                                    <g id="user" transform="translate(113 369)">
                                        <g id="Сгруппировать_2994" data-name="Сгруппировать 2994">
                                            <path id="Контур_860" data-name="Контур 860"
                                                  d="M17.925,13.575a10.46,10.46,0,0,0-3.99-2.5,6.07,6.07,0,1,0-6.869,0A10.517,10.517,0,0,0,0,21H1.641a8.859,8.859,0,0,1,17.719,0H21A10.432,10.432,0,0,0,17.925,13.575ZM10.5,10.5a4.43,4.43,0,1,1,4.43-4.43A4.435,4.435,0,0,1,10.5,10.5Z" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <p>Мой Профиль</p>
                        </a>
                        <a href='<?php echo home_url('/'); ?>personal-area' class='header-item header-ordering'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24.657" height="32.443"
                                 viewBox="0 0 24.657 32.443">
                                <g id="shopping-list" transform="translate(0.65 0.65)">
                                    <g id="Сгруппировать_2825" data-name="Сгруппировать 2825"
                                       transform="translate(5.839)">
                                        <g id="Сгруппировать_2824" data-name="Сгруппировать 2824">
                                            <path id="Контур_759" data-name="Контур 759"
                                                  d="M20.081,1.946H17.967a2.92,2.92,0,0,0-5.507,0H10.348a.974.974,0,0,0-.973.973V6.813a.974.974,0,0,0,.973.973h9.732a.974.974,0,0,0,.973-.973V2.92A.974.974,0,0,0,20.081,1.946Z"
                                                  transform="translate(-9.375)" fill="none" stroke="#6b92b0"
                                                  stroke-width="1.3" />
                                        </g>
                                    </g>
                                    <g id="Сгруппировать_2827" data-name="Сгруппировать 2827"
                                       transform="translate(0 3.893)">
                                        <g id="Сгруппировать_2826" data-name="Сгруппировать 2826">
                                            <path id="Контур_760" data-name="Контур 760"
                                                  d="M25.161,3.75H23.215V6.67a2.923,2.923,0,0,1-2.92,2.92H10.563a2.923,2.923,0,0,1-2.92-2.92V3.75H5.7A1.95,1.95,0,0,0,3.75,5.7V29.054A1.925,1.925,0,0,0,5.7,31H25.161a1.925,1.925,0,0,0,1.946-1.946V5.7A1.925,1.925,0,0,0,25.161,3.75ZM15.145,20.984l-3.893,3.893a.977.977,0,0,1-1.378,0L7.927,22.93A.973.973,0,1,1,9.3,21.554l1.259,1.257,3.2-3.2a.974.974,0,0,1,1.378,1.376Zm0-7.786-3.893,3.893a.977.977,0,0,1-1.378,0L7.927,15.145A.973.973,0,0,1,9.3,13.768l1.259,1.257,3.2-3.2A.974.974,0,0,1,15.145,13.2Zm7.1,10.016H18.348a.973.973,0,0,1,0-1.946h3.893a.973.973,0,1,1,0,1.946Zm0-7.786H18.348a.973.973,0,0,1,0-1.946h3.893a.973.973,0,1,1,0,1.946Z"
                                                  transform="translate(-3.75 -3.75)" fill="none" stroke="#6b92b0"
                                                  stroke-width="1.3" />
                                            <path id="Контур_766" data-name="Контур 766"
                                                  d="M-.654.329H1.43L3.518,3.271H1.162Z"
                                                  transform="translate(4.414 9.993)" fill="#6b92b0" />
                                            <path id="Контур_767" data-name="Контур 767"
                                                  d="M-.654.329H1.43L-3.023,5.217l-1.037-1.1Z"
                                                  transform="translate(10.414 7.993)"
                                                  fill="#6b92b0" />
                                            <path id="Контур_768" data-name="Контур 768"
                                                  d="M-.654.329.771-.3,3.518,3.271H1.162Z"
                                                  transform="translate(4.414 17.993)" fill="#6b92b0" />
                                            <path id="Контур_769" data-name="Контур 769"
                                                  d="M.072-.187,1.43.329-3.023,5.217l-1.037-1.1Z"
                                                  transform="translate(10.414 15.993)" fill="#6b92b0" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <p>Мои заказы</p>
                        </a>
                        <a href='<?php echo home_url('/'); ?>comparison' class='header-item header-comparison'>
                            <svg id="Сгруппировать_2793" data-name="Сгруппировать 2793"
                                 xmlns="http://www.w3.org/2000/svg"
                                 width="31.918" height="24.554" viewBox="0 0 31.918 24.554">
                                <path id="Контур_724" data-name="Контур 724"
                                      d="M31.461,67.082,27.419,58.54h1.687a.7.7,0,1,0,0-1.406H18.947a3.058,3.058,0,0,0-5.976,0H2.812a.7.7,0,1,0,0,1.406H4.5L.457,67.082A.7.7,0,0,0,0,67.715a5.554,5.554,0,0,0,5.554,5.554h.035a5.7,5.7,0,0,0,5.624-5.589.6.6,0,0,0-.492-.6L6.679,58.54h6.292a3.093,3.093,0,0,0,2.285,2.144V73.832a4.781,4.781,0,0,0-4.148,4.781.668.668,0,0,0,.667.669h8.332a.668.668,0,0,0,.7-.632c0-.012,0-.024,0-.036a4.781,4.781,0,0,0-4.148-4.781V60.685a3.093,3.093,0,0,0,2.285-2.144h6.292L21.2,67.082a.633.633,0,0,0-.492.633,5.554,5.554,0,0,0,5.554,5.554h.035a5.66,5.66,0,0,0,5.624-5.554A.738.738,0,0,0,31.461,67.082ZM5.589,71.863h0a4.148,4.148,0,0,1-4.113-3.48H9.737A4.289,4.289,0,0,1,5.589,71.863Zm3.55-4.886h-7.1l3.55-7.628Zm10.194,10.9H12.585a3.621,3.621,0,0,1,3.375-2.742A3.621,3.621,0,0,1,19.334,77.874ZM15.959,59.349A1.652,1.652,0,1,1,17.611,57.7,1.652,1.652,0,0,1,15.959,59.349Zm10.37,0,3.55,7.628h-7.1Zm-.035,12.514a4.148,4.148,0,0,1-4.113-3.48h8.261A4.289,4.289,0,0,1,26.294,71.863Z"
                                      transform="translate(0 -54.727)" />
                            </svg>
                            <p>Сравнение</p>
                        </a>
                        <a href='<?php echo home_url('/'); ?>personal-area' class='header-item header-favorites'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="26.93" height="23.95"
                                 viewBox="0 0 26.93 23.95">
                                <path id="Контур_723" data-name="Контур 723"
                                      d="M18.675,1.465a6.021,6.021,0,0,0-3.76,1.3,8.566,8.566,0,0,0-2.2,2.646,8.565,8.565,0,0,0-2.2-2.646,6.021,6.021,0,0,0-3.76-1.3C2.9,1.465,0,4.615,0,8.792c0,4.513,3.623,7.6,9.108,12.274.931.794,1.987,1.693,3.084,2.653a.795.795,0,0,0,1.046,0c1.1-.96,2.153-1.859,3.085-2.654C21.807,16.392,25.43,13.3,25.43,8.792,25.43,4.615,22.526,1.465,18.675,1.465Z"
                                      transform="translate(0.75 -0.715)" fill="none" stroke="#6B92B0"
                                      stroke-width="1.5" />
                            </svg>
                            <p>Избранные</p>
                        </a>
                        <a href='<?php echo home_url('/'); ?>personal-area' class='header-item header-viewed'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30.555" height="18" viewBox="0 0 30.555 18">
                                <g id="visibility" transform="translate(0.282 -6)">
                                    <g id="Сгруппировать_2813" data-name="Сгруппировать 2813">
                                        <g id="Сгруппировать_2812" data-name="Сгруппировать 2812">
                                            <path id="Контур_755" data-name="Контур 755"
                                                  d="M29.889,14.645C29.653,14.3,23.975,6.25,15,6.25,7.3,6.25.436,14.255.147,14.6a.627.627,0,0,0,0,.807C.436,15.745,7.3,23.75,15,23.75S29.564,15.745,29.853,15.4A.625.625,0,0,0,29.889,14.645ZM15,22.5C8.826,22.5,2.956,16.613,1.465,15,2.954,13.386,8.817,7.5,15,7.5c7.224,0,12.323,5.879,13.568,7.466C27.13,16.528,21.226,22.5,15,22.5Z"
                                                  fill="#6b92b0" stroke="#6b92b0" stroke-width="0.5" />
                                        </g>
                                    </g>
                                    <g id="Сгруппировать_2815" data-name="Сгруппировать 2815">
                                        <g id="Сгруппировать_2814" data-name="Сгруппировать 2814">
                                            <path id="Контур_756" data-name="Контур 756"
                                                  d="M15,10a5,5,0,1,0,5,5A5.005,5.005,0,0,0,15,10Zm0,8.75A3.75,3.75,0,1,1,18.75,15,3.755,3.755,0,0,1,15,18.75Z"
                                                  fill="#6b92b0" stroke="#6b92b0" stroke-width="0.5" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <p>Просмотренные товары</p>
                        </a>
                        <a href='<?php echo home_url('/'); ?>personal-area' class='header-item header-reviews'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="26.419" height="24.716"
                                 viewBox="0 0 26.419 24.716">
                                <g id="Сгруппировать_2829" data-name="Сгруппировать 2829"
                                   transform="translate(-1.791 -5.284)">
                                    <g id="Сгруппировать_2828" data-name="Сгруппировать 2828">
                                        <path id="Контур_761" data-name="Контур 761"
                                              d="M28.209,16.732a2.645,2.645,0,0,0-2.642-2.642H18.527a15.294,15.294,0,0,0,.876-5.13,3.681,3.681,0,0,0-3.677-3.677H15a.881.881,0,0,0-.881.881c0,2.036-.793,5.712-2.233,7.152l-.056.056a9.742,9.742,0,0,1-2.995,1.935v-.336a.881.881,0,0,0-.881-.881H2.671a.881.881,0,0,0-.881.881V29.119A.881.881,0,0,0,2.671,30H7.955a.881.881,0,0,0,.881-.881V28.58A20.534,20.534,0,0,0,16.1,30h5.948A2.642,2.642,0,0,0,24.5,26.385a2.642,2.642,0,0,0,1.761-3.522,2.647,2.647,0,0,0,1.947-2.549,2.712,2.712,0,0,0-.688-1.8A2.632,2.632,0,0,0,28.209,16.732Zm-21.135,0V28.239H3.552V15.851H7.074Zm18.493,4.462H20.284a.881.881,0,1,0,0,1.761h3.522a.881.881,0,1,1,0,1.761H20.284a.881.881,0,1,0,0,1.761h1.761a.881.881,0,1,1,0,1.761H16.1a20.332,20.332,0,0,1-7.261-1.515V17.276a13.554,13.554,0,0,0,4.3-2.714C14.694,13,15.638,9.222,15.84,7.049a1.918,1.918,0,0,1,1.8,1.912c0,1.369-.533,4.417-1.5,5.387a.881.881,0,0,0,.623,1.5h8.806a.881.881,0,0,1,0,1.761H20.284a.881.881,0,1,0,0,1.761h5.284a.935.935,0,0,1,.881.939A.882.882,0,0,1,25.567,21.194Z"
                                              fill="#6b92b0" />
                                    </g>
                                </g>
                            </svg>
                            <p>Мои отзывы</p>
                        </a>
                    </div>
                    <nav class='menu'>
                        <ul>
                            <li>
                                <a class='menu-item header-item' href='<?php echo home_url('/'); ?>'>Главная</a>
                            </li>
                            <li>
                                <a class='menu-item header-item' href='<?php echo home_url('/'); ?>catalog'>Каталог</a>
                            </li>
                            <li>
                                <a class='menu-item header-item'
                                   href='<?php echo home_url('/'); ?>installation-and-assembly'>Установка и
                                    монтаж</a>
                            </li>
                            <li>
                                <a class='menu-item header-item' href='<?php echo home_url('/'); ?>services'>Сервис</a>
                            </li>
                            <li>
                                <a class='menu-item header-item'
                                   href='<?php echo home_url('/'); ?>payment-and-delivery'>Оплата и
                                    доствка</a>
                            </li>
                            <li>
                                <a class='menu-item header-item' href='<?php echo home_url('/'); ?>our-works'>Наши
                                    роботы</a>
                            </li>
                            <li>
                                <a class='menu-item header-item' href='<?php echo home_url('/'); ?>reviews'>Отзывы</a>
                            </li>
                            <li>
                                <a class='menu-item header-item' href='<?php echo home_url('/'); ?>blog'>Блог</a>
                            </li>
                            <li>
                                <a class='menu-item header-item'
                                   href='<?php echo home_url('/'); ?>contacts'>Контакты</a>
                            </li>
                        </ul>
                    </nav>
                    <div class='header-item'>
                        <div class='call'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18.081" height="18.081"
                                 viewBox="0 0 18.081 18.081">
                                <path id="Контур_135" data-name="Контур 135"
                                      d="M16.63,11.868a10.266,10.266,0,0,1-3.224-.514,1.474,1.474,0,0,0-1.433.3L9.94,13.191a11.235,11.235,0,0,1-5.051-5.05l1.49-1.98a1.461,1.461,0,0,0,.36-1.481,10.281,10.281,0,0,1-.515-3.229A1.452,1.452,0,0,0,4.771,0H1.451A1.453,1.453,0,0,0,0,1.451a16.649,16.649,0,0,0,16.63,16.63,1.453,1.453,0,0,0,1.451-1.451V13.319A1.453,1.453,0,0,0,16.63,11.868Z" />
                            </svg>
                            <a href='tel:38(097) 107 25 25'>38(097) 107 25 25</a>
                            <a href='tel:38(097) 125 95 95'>38(097) 125 95 95</a>
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
