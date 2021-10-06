<?php
    /**
     * The template for displaying the footer
     *
     * Contains the opening of the #site-footer div and all content after.
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package WordPress
     * @subpackage Twenty_Twenty
     * @since 1.0.0
     */

?>
<footer class='footer'>
    <div class='footer-center'>
        <div class='container'>
            <div class='footer-center-inner'>
                <a href='#' class='footer-logo'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/logo.svg' alt='logo'>
                </a>
                <div class='footer-menu'>
                    <h5>Меню</h5>
                    <div class='footer-menu-lists'>
                        <ul>
                            <li>
                                <a href='<?php echo home_url( '/' ); ?>'>Главная</a>
                            </li>
                            <li>
                                <a href='<?php echo home_url( '/' ); ?>catalog'>Каталог</a>
                            </li>
                            <li>
                                <a href='<?php echo home_url( '/' ); ?>installation-and-assembly'>Установка и монтаж</a>
                            </li>
                            <li>
                                <a href='<?php echo home_url( '/' ); ?>services'>Сервис</a>
                            </li>
                            <li>
                                <a href='<?php echo home_url( '/' ); ?>payment-and-delivery'>Оплата и Доставка</a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a href='<?php echo home_url( '/' ); ?>our-works'>Наши работы</a>
                            </li>
<!--                            <li>-->
<!--                                <a href='--><?php //echo home_url( '/' ); ?><!--reviews'>Отзывы</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href='--><?php //echo home_url( '/' ); ?><!--blog'>Блог</a>-->
<!--                            </li>-->
                            <li>
                                <a href='<?php echo home_url( '/' ); ?>contacts'>Контакти</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class='footer-info'>
                    <div class='footer-contact'>
                        <h5>Контакти</h5>
                        <a href='mailto:techcomfort@meta.ua' class='email'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="14.063" viewBox="0 0 20 14.063">
                                <g id="mail" transform="translate(0 -2.969)">
                                    <g id="Сгруппировать_618" data-name="Сгруппировать 618">
                                        <g id="Сгруппировать_617" data-name="Сгруппировать 617">
                                            <path id="Контур_136" data-name="Контур 136"
                                                  d="M19.824,3.973,13.758,10l6.066,6.027A1.738,1.738,0,0,0,20,15.273V4.727A1.737,1.737,0,0,0,19.824,3.973Z" />
                                        </g>
                                    </g>
                                    <g id="Сгруппировать_620" data-name="Сгруппировать 620">
                                        <g id="Сгруппировать_619" data-name="Сгруппировать 619">
                                            <path id="Контур_137" data-name="Контур 137"
                                                  d="M18.242,2.969H1.758A1.737,1.737,0,0,0,1,3.145l7.752,7.713a1.759,1.759,0,0,0,2.486,0L19,3.145A1.737,1.737,0,0,0,18.242,2.969Z" />
                                        </g>
                                    </g>
                                    <g id="Сгруппировать_622" data-name="Сгруппировать 622">
                                        <g id="Сгруппировать_621" data-name="Сгруппировать 621">
                                            <path id="Контур_138" data-name="Контур 138"
                                                  d="M.176,3.973A1.737,1.737,0,0,0,0,4.727V15.273a1.737,1.737,0,0,0,.176.753L6.242,10Z" />
                                        </g>
                                    </g>
                                    <g id="Сгруппировать_624" data-name="Сгруппировать 624">
                                        <g id="Сгруппировать_623" data-name="Сгруппировать 623">
                                            <path id="Контур_139" data-name="Контур 139"
                                                  d="M12.93,10.829l-.858.858a2.933,2.933,0,0,1-4.143,0l-.858-.858L1,16.855a1.737,1.737,0,0,0,.753.176H18.242A1.737,1.737,0,0,0,19,16.855Z" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            techcomfort@meta.ua
                        </a>
                        <div class='call'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18.081" height="18.081"
                                 viewBox="0 0 18.081 18.081">
                                <path id="Контур_135" data-name="Контур 135"
                                      d="M16.63,11.868a10.266,10.266,0,0,1-3.224-.514,1.474,1.474,0,0,0-1.433.3L9.94,13.191a11.235,11.235,0,0,1-5.051-5.05l1.49-1.98a1.461,1.461,0,0,0,.36-1.481,10.281,10.281,0,0,1-.515-3.229A1.452,1.452,0,0,0,4.771,0H1.451A1.453,1.453,0,0,0,0,1.451a16.649,16.649,0,0,0,16.63,16.63,1.453,1.453,0,0,0,1.451-1.451V13.319A1.453,1.453,0,0,0,16.63,11.868Z" />
                            </svg>
                            <div class='call-description'>
                                <a href='tel:38(097) 107 25 25'>38(097) 107 25 25</a>
                                <a href='tel:38(097) 125 95 95'>38(097) 125 95 95</a>
                            </div>
                        </div>
                        <div class='address'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="13.904" height="20" viewBox="0 0 13.904 20">
                                <path id="placeholder_3_" data-name="placeholder (3)"
                                      d="M6.757,0A6.96,6.96,0,0,0-.2,6.952C-.2,11.77,6.763,20,6.763,20s6.945-8.467,6.945-13.048A6.96,6.96,0,0,0,6.757,0Zm2.1,8.987a2.966,2.966,0,1,1,0-4.195A2.957,2.957,0,0,1,8.854,8.987Zm0,0"
                                      transform="translate(0.195)" />
                            </svg>
                            <p>г. Киев</p>
                        </div>
                    </div>
                    <div class='socials'>
                        <h5>Соц. сети</h5>
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
    </div>
    <div class='footer-bottom'>
        <div class='container'>
            <p>Copyright © Baseline 2021 All rights reserved.</p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
