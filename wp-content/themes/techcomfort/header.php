<?php global $woocommerce; ?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta charset='UTF-8'>
    <meta name='viewport'
          content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <!-- <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">-->
    <meta name="theme-color" content="#b2c5d4">
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title><?php the_title_attribute(); ?></title>
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
                    <?php include get_template_directory() . '/components/_header-menu.php'; ?>
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
                <div class='header-action'>
                    <?php if (is_user_logged_in()) { ?>
                        <a class='header-item header-profile' href='<?php echo home_url('/'); ?>my-account'>
                            <div class='count-image'>
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
                                    <g id="Группа_масок_381" data-name="Группа масок 381"
                                       transform="translate(-113 -369)"
                                       clip-path="url(#clip-path)">
                                        <g id="user" transform="translate(113 369)">
                                            <g id="Сгруппировать_2994" data-name="Сгруппировать 2994">
                                                <path id="Контур_860" data-name="Контур 860"
                                                      d="M17.925,13.575a10.46,10.46,0,0,0-3.99-2.5,6.07,6.07,0,1,0-6.869,0A10.517,10.517,0,0,0,0,21H1.641a8.859,8.859,0,0,1,17.719,0H21A10.432,10.432,0,0,0,17.925,13.575ZM10.5,10.5a4.43,4.43,0,1,1,4.43-4.43A4.435,4.435,0,0,1,10.5,10.5Z" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <p>Мой Профиль</p>
                        </a>
                        <a href='<?php echo home_url('/'); ?>comparison' class='header-item header-comparison'>
                            <div class='count-image'>
                                <?php
                                    $userID = get_user_meta(get_current_user_id());
                                    $compare = $userID['compare'];
                                    if ($compare) { ?>
                                        <span class='sub-label'><?php echo count($compare) ?></span>
                                    <?php } ?>
                                <svg id="Сгруппировать_2793" data-name="Сгруппировать 2793"
                                     xmlns="http://www.w3.org/2000/svg"
                                     width="31.918" height="24.554" viewBox="0 0 31.918 24.554">
                                    <path id="Контур_724" data-name="Контур 724"
                                          d="M31.461,67.082,27.419,58.54h1.687a.7.7,0,1,0,0-1.406H18.947a3.058,3.058,0,0,0-5.976,0H2.812a.7.7,0,1,0,0,1.406H4.5L.457,67.082A.7.7,0,0,0,0,67.715a5.554,5.554,0,0,0,5.554,5.554h.035a5.7,5.7,0,0,0,5.624-5.589.6.6,0,0,0-.492-.6L6.679,58.54h6.292a3.093,3.093,0,0,0,2.285,2.144V73.832a4.781,4.781,0,0,0-4.148,4.781.668.668,0,0,0,.667.669h8.332a.668.668,0,0,0,.7-.632c0-.012,0-.024,0-.036a4.781,4.781,0,0,0-4.148-4.781V60.685a3.093,3.093,0,0,0,2.285-2.144h6.292L21.2,67.082a.633.633,0,0,0-.492.633,5.554,5.554,0,0,0,5.554,5.554h.035a5.66,5.66,0,0,0,5.624-5.554A.738.738,0,0,0,31.461,67.082ZM5.589,71.863h0a4.148,4.148,0,0,1-4.113-3.48H9.737A4.289,4.289,0,0,1,5.589,71.863Zm3.55-4.886h-7.1l3.55-7.628Zm10.194,10.9H12.585a3.621,3.621,0,0,1,3.375-2.742A3.621,3.621,0,0,1,19.334,77.874ZM15.959,59.349A1.652,1.652,0,1,1,17.611,57.7,1.652,1.652,0,0,1,15.959,59.349Zm10.37,0,3.55,7.628h-7.1Zm-.035,12.514a4.148,4.148,0,0,1-4.113-3.48h8.261A4.289,4.289,0,0,1,26.294,71.863Z"
                                          transform="translate(0 -54.727)" />
                                </svg>
                            </div>
                            <p>Сравнение</p>
                        </a>
                        <a href='<?php echo home_url('/'); ?>my-account#favorites' class='header-item header-favorites'>
                            <div class='count-image'>
                                <?php
                                    $userID = get_user_meta(get_current_user_id());
                                    $favorite = $userID['favorite'];
                                    if ($favorite) { ?>
                                        <span class='sub-label'><?php echo count($favorite) ?></span>
                                    <?php } ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="26.93" height="23.95"
                                     viewBox="0 0 26.93 23.95">
                                    <path id="Контур_723" data-name="Контур 723"
                                          d="M18.675,1.465a6.021,6.021,0,0,0-3.76,1.3,8.566,8.566,0,0,0-2.2,2.646,8.565,8.565,0,0,0-2.2-2.646,6.021,6.021,0,0,0-3.76-1.3C2.9,1.465,0,4.615,0,8.792c0,4.513,3.623,7.6,9.108,12.274.931.794,1.987,1.693,3.084,2.653a.795.795,0,0,0,1.046,0c1.1-.96,2.153-1.859,3.085-2.654C21.807,16.392,25.43,13.3,25.43,8.792,25.43,4.615,22.526,1.465,18.675,1.465Z"
                                          transform="translate(0.75 -0.715)" fill="none" stroke="#000"
                                          stroke-width="1.5" />
                                </svg>
                            </div>
                            <p>Избранные</p>
                        </a>

                    <?php } else { ?>
                        <a class='header-item header-profile' href='<?php echo home_url('/'); ?>login'>
                            <div class='count-image'>
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
                                    <g id="Группа_масок_381" data-name="Группа масок 381"
                                       transform="translate(-113 -369)"
                                       clip-path="url(#clip-path)">
                                        <g id="user" transform="translate(113 369)">
                                            <g id="Сгруппировать_2994" data-name="Сгруппировать 2994">
                                                <path id="Контур_860" data-name="Контур 860"
                                                      d="M17.925,13.575a10.46,10.46,0,0,0-3.99-2.5,6.07,6.07,0,1,0-6.869,0A10.517,10.517,0,0,0,0,21H1.641a8.859,8.859,0,0,1,17.719,0H21A10.432,10.432,0,0,0,17.925,13.575ZM10.5,10.5a4.43,4.43,0,1,1,4.43-4.43A4.435,4.435,0,0,1,10.5,10.5Z" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <p>Войти</p>
                        </a>
                    <?php } ?>
                    <div class='header-item header-basket open-basket-js'>
                        <div class='count-image'>
                            <span class='sub-label'><?php echo $woocommerce->cart->get_cart_contents_count(); ?></span>
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
                    <?php if (is_user_logged_in()) { ?>
                        <a href='<?php echo home_url('/'); ?>comparison' class='header-item header-comparison'>
                            <div class='count-image'>
                                <?php
                                    $userID = get_user_meta(get_current_user_id());
                                    $compare = $userID['compare'];
                                    if ($compare) { ?>
                                        <span class='sub-label'><?php echo count($compare) ?></span>
                                    <?php } ?>
                                <svg id="Сгруппировать_2793" data-name="Сгруппировать 2793"
                                     xmlns="http://www.w3.org/2000/svg"
                                     width="31.918" height="24.554" viewBox="0 0 31.918 24.554">
                                    <path id="Контур_724" data-name="Контур 724"
                                          d="M31.461,67.082,27.419,58.54h1.687a.7.7,0,1,0,0-1.406H18.947a3.058,3.058,0,0,0-5.976,0H2.812a.7.7,0,1,0,0,1.406H4.5L.457,67.082A.7.7,0,0,0,0,67.715a5.554,5.554,0,0,0,5.554,5.554h.035a5.7,5.7,0,0,0,5.624-5.589.6.6,0,0,0-.492-.6L6.679,58.54h6.292a3.093,3.093,0,0,0,2.285,2.144V73.832a4.781,4.781,0,0,0-4.148,4.781.668.668,0,0,0,.667.669h8.332a.668.668,0,0,0,.7-.632c0-.012,0-.024,0-.036a4.781,4.781,0,0,0-4.148-4.781V60.685a3.093,3.093,0,0,0,2.285-2.144h6.292L21.2,67.082a.633.633,0,0,0-.492.633,5.554,5.554,0,0,0,5.554,5.554h.035a5.66,5.66,0,0,0,5.624-5.554A.738.738,0,0,0,31.461,67.082ZM5.589,71.863h0a4.148,4.148,0,0,1-4.113-3.48H9.737A4.289,4.289,0,0,1,5.589,71.863Zm3.55-4.886h-7.1l3.55-7.628Zm10.194,10.9H12.585a3.621,3.621,0,0,1,3.375-2.742A3.621,3.621,0,0,1,19.334,77.874ZM15.959,59.349A1.652,1.652,0,1,1,17.611,57.7,1.652,1.652,0,0,1,15.959,59.349Zm10.37,0,3.55,7.628h-7.1Zm-.035,12.514a4.148,4.148,0,0,1-4.113-3.48h8.261A4.289,4.289,0,0,1,26.294,71.863Z"
                                          transform="translate(0 -54.727)" />
                                </svg>
                            </div>
                            <p>Сравнение</p>
                        </a>
                        <a href='<?php echo home_url('/'); ?>my-account#favorites' class='header-item header-favorites'>
                            <div class='count-image'>
                                <?php
                                    $userID = get_user_meta(get_current_user_id());
                                    $favorite = $userID['favorite'];
                                    if ($favorite) { ?>
                                        <span class='sub-label'><?php echo count($favorite) ?></span>
                                    <?php } ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="26.93" height="23.95"
                                     viewBox="0 0 26.93 23.95">
                                    <path id="Контур_723" data-name="Контур 723"
                                          d="M18.675,1.465a6.021,6.021,0,0,0-3.76,1.3,8.566,8.566,0,0,0-2.2,2.646,8.565,8.565,0,0,0-2.2-2.646,6.021,6.021,0,0,0-3.76-1.3C2.9,1.465,0,4.615,0,8.792c0,4.513,3.623,7.6,9.108,12.274.931.794,1.987,1.693,3.084,2.653a.795.795,0,0,0,1.046,0c1.1-.96,2.153-1.859,3.085-2.654C21.807,16.392,25.43,13.3,25.43,8.792,25.43,4.615,22.526,1.465,18.675,1.465Z"
                                          transform="translate(0.75 -0.715)" fill="none" stroke="#000"
                                          stroke-width="1.5" />
                                </svg>
                            </div>
                            <p>Избранные</p>
                        </a>
                    <?php } ?>
                    <div class='header-item header-basket open-basket-js'>
                        <div class='count-image'>
                            <span class='sub-label'><?php echo $woocommerce->cart->get_cart_contents_count(); ?></span>
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
                <div id='header-catalog-js' class='header-catalog'></div>
                <div class='header-menu'>
                    <div class='header-actions'></div>
                    <?php include get_template_directory() . '/components/_header-menu.php'; ?>
                    <div class='menu-item'>
                        <div class='call'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18.081" height="18.081"
                                 viewBox="0 0 18.081 18.081">
                                <path id="Контур_135" data-name="Контур 135"
                                      d="M16.63,11.868a10.266,10.266,0,0,1-3.224-.514,1.474,1.474,0,0,0-1.433.3L9.94,13.191a11.235,11.235,0,0,1-5.051-5.05l1.49-1.98a1.461,1.461,0,0,0,.36-1.481,10.281,10.281,0,0,1-.515-3.229A1.452,1.452,0,0,0,4.771,0H1.451A1.453,1.453,0,0,0,0,1.451a16.649,16.649,0,0,0,16.63,16.63,1.453,1.453,0,0,0,1.451-1.451V13.319A1.453,1.453,0,0,0,16.63,11.868Z" />
                            </svg>
                            <a href='tel:<?php echo get_field('phone_1', 'option') ?>'><?php echo get_field('phone_1', 'option') ?></a>
                            <a href='tel:<?php echo get_field('phone_2', 'option') ?>'><?php echo get_field('phone_2', 'option') ?></a>
                        </div>
                        <div class='socials'>
                            <div class='socials-images'>
                                <a href='#' class='socials-image'>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class='notification d-none'>
    Не удалось отправить
</div>
<?php include get_template_directory() . '/components/_basket.php'; ?>
