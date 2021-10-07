<?php /* Template Name: Page - Home */ ?>
<?php get_header(); ?>
<?php
    wp_enqueue_script('home-js', get_stylesheet_directory_uri() . '/assets/js/home.js');
?>
<main class='home'>
    <section class='banner'>
        <div class='container'>
            <div class='banner-slider'>
                <div class='slider-top'>
                    <div class='swiper-container swiper-banner-top'>
                        <div class='swiper-wrapper'>
                            <?php
                                // Check rows exists.
                                if (have_rows('banner')):

                                    // Loop through rows.
                                    while (have_rows('banner')) : the_row();
                                        // Load sub field value.
                                        $image = get_sub_field('banner-image');
                                        ?>
                                        <div class='swiper-slide'>
                                            <img src='<?php echo $image['url'] ?>' alt='Кондиционер'>
                                        </div>
                                    <?php endwhile;
                                // No value.
                                else :
                                    // Do something...
                                endif;
                            ?>
                        </div>
                    </div>
                </div>
                <div class='slider-bottom'>
                    <div class='swiper-container swiper-banner'>
                        <div class='swiper-wrapper'>
                            <?php
                                // Check rows exists.
                                if (have_rows('banner')):

                                    // Loop through rows.
                                    while (have_rows('banner')) : the_row();
                                        // Load sub field value.
                                        $image = get_sub_field('banner-image');
                                        ?>
                                        <div class='swiper-slide'>
                                            <img src='<?php echo $image['url'] ?>' alt='Кондиционер'>
                                        </div>
                                    <?php endwhile;
                                // No value.
                                else :
                                    // Do something...
                                endif;
                            ?>
                        </div>
                        <div class='swiper-pagination'></div>
                    </div>
                    <div class='swiper-button-prev swiper-button-active'></div>
                </div>
            </div>
        </div>
    </section>
    <section id='recommended' class='products'>
        <div class='container'>
            <div class='products-buttons buttons-container-js'>
                <a href='#recommended' class='btn-contour active'>Рекомендуемые</a>
                <a href='#popular' class='btn-contour'>Популярные</a>
                <a href='#most-viewed' class='btn-contour'>Самые Просматриваемые</a>
            </div>
            <div class='products-slider'>
                <div class='swiper-container swiper-products'>
                    <div class='swiper-wrapper'>
                        <?php
                            // Check rows exists.
                            if (have_rows('list-of-conditioners')):

                                // Loop through rows.
                                while (have_rows('list-of-conditioners')) : the_row();
                                    // Load sub field value.
                                    $sub_value = get_sub_field('product_id');
                                    $_product = wc_get_product($sub_value);
                                    ?>
                                    <div class='swiper-slide'>
                                        <div class='products-item'>
                                            <a href='<?php echo home_url('/'); ?>product?uid=<?php echo $sub_value; ?>'
                                               class='item-image'>
                                                <?php echo $_product->get_image('500') ?>
                                            </a>
                                            <div class='item-description'>
                                                <div class='rating'>
                                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                         width="14.137"
                                                         height="13.608"
                                                         viewBox="0 0 14.137 13.608">
                                                        <path id="Контур_2" data-name="Контур 2"
                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                              transform="translate(0 -9.569)" fill="#ffdc96"/>
                                                    </svg>
                                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                         width="14.137"
                                                         height="13.608"
                                                         viewBox="0 0 14.137 13.608">
                                                        <path id="Контур_2" data-name="Контур 2"
                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                              transform="translate(0 -9.569)" fill="#ffdc96"/>
                                                    </svg>
                                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                         width="14.137"
                                                         height="13.608"
                                                         viewBox="0 0 14.137 13.608">
                                                        <path id="Контур_2" data-name="Контур 2"
                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                              transform="translate(0 -9.569)" fill="#ffdc96"/>
                                                    </svg>
                                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                         width="14.137"
                                                         height="13.608"
                                                         viewBox="0 0 14.137 13.608">
                                                        <path id="Контур_2" data-name="Контур 2"
                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                              transform="translate(0 -9.569)" fill="#ffdc96"/>
                                                    </svg>
                                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                         width="14.137"
                                                         height="13.608"
                                                         viewBox="0 0 14.137 13.608">
                                                        <path id="Контур_2" data-name="Контур 2"
                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                              transform="translate(0 -9.569)" fill="#ffdc96"/>
                                                    </svg>
                                                </div>
                                                <a href='<?php echo home_url('/'); ?>product?uid=<?php echo $sub_value; ?>'>
                                                    <?php echo $_product->get_title() ?>
                                                    <div class='description-icons'>
                                                        <!--                                                        <svg class='favorites' xmlns="http://www.w3.org/2000/svg"-->
                                                        <!--                                                             width="27"-->
                                                        <!--                                                             height="24.07" viewBox="0 0 27 24.07">-->
                                                        <!--                                                            <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"-->
                                                        <!--                                                               transform="translate(1 -0.465)">-->
                                                        <!--                                                                <path id="Контур_714" data-name="Контур 714"-->
                                                        <!--                                                                      d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"-->
                                                        <!--                                                                      fill="none" stroke="#6b92b0" stroke-width="2"/>-->
                                                        <!--                                                            </g>-->
                                                        <!--                                                        </svg>-->
                                                        <svg class='share' enable-background="new 0 0 512 512"
                                                             version="1.1"
                                                             viewBox="0 0 512 512"
                                                             xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z"/>
                                            </svg>
                                                    </div>
                                                </a>
                                                <span class='price'><?php echo number_format(wc_get_price_excluding_tax($_product), 0, '', ' ') ?> ₴</span>
                                                <div class='description-buttons'>
                                                    <a href='<?php echo home_url('/'); ?>product?uid=<?php echo $sub_value; ?>'
                                                       class='btn'>Купить</a>
                                                    <a data-quantity="1" data-product_id="<?php echo $sub_value; ?>"
                                                       href='<?php echo home_url('/'); ?>?add-to-cart=<?php echo $sub_value; ?>'
                                                       class='btn btn-second product_type_simple add_to_cart_button ajax_add_to_cart open-basket-js'>
                                                        В Корзину
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile;
                            // No value.
                            else :
                                // Do something...
                            endif;
                        ?>
                    </div>
                    <div class='swiper-pagination'></div>
                    <div class='swiper-button-prev'></div>
                    <div class='swiper-button-next'></div>
                </div>
            </div>
        </div>
    </section>
    <section id='popular' class='products bestsellers'>
        <div class='container'>
            <h2>ХИТЫ ПРОДАЖ</h2>
            <div class='products-slider'>
                <div class='swiper-container swiper-products'>
                    <div class='swiper-wrapper'>
                        <?php
                            // Check rows exists.
                            if (have_rows('pupular-list-of-conditioners')):

                                // Loop through rows.
                                while (have_rows('pupular-list-of-conditioners')) : the_row();
                                    // Load sub field value.
                                    $sub_value = get_sub_field('product_id');
                                    $_product = wc_get_product($sub_value);
                                    ?>
                                    <div class='swiper-slide'>
                                        <div class='products-item'>
                                            <span class='hit'>хит</span>
                                            <a href='<?php echo home_url('/'); ?>product?uid=<?php echo $sub_value; ?>'
                                               class='item-image'>
                                                <?php echo $_product->get_image('500') ?>
                                            </a>
                                            <div class='item-description'>
                                                <div class='rating'>
                                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                         width="14.137"
                                                         height="13.608"
                                                         viewBox="0 0 14.137 13.608">
                                                        <path id="Контур_2" data-name="Контур 2"
                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                              transform="translate(0 -9.569)" fill="#ffdc96"/>
                                                    </svg>
                                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                         width="14.137"
                                                         height="13.608"
                                                         viewBox="0 0 14.137 13.608">
                                                        <path id="Контур_2" data-name="Контур 2"
                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                              transform="translate(0 -9.569)" fill="#ffdc96"/>
                                                    </svg>
                                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                         width="14.137"
                                                         height="13.608"
                                                         viewBox="0 0 14.137 13.608">
                                                        <path id="Контур_2" data-name="Контур 2"
                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                              transform="translate(0 -9.569)" fill="#ffdc96"/>
                                                    </svg>
                                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                         width="14.137"
                                                         height="13.608"
                                                         viewBox="0 0 14.137 13.608">
                                                        <path id="Контур_2" data-name="Контур 2"
                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                              transform="translate(0 -9.569)" fill="#ffdc96"/>
                                                    </svg>
                                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                         width="14.137"
                                                         height="13.608"
                                                         viewBox="0 0 14.137 13.608">
                                                        <path id="Контур_2" data-name="Контур 2"
                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                              transform="translate(0 -9.569)" fill="#ffdc96"/>
                                                    </svg>
                                                </div>
                                                <a href='<?php echo home_url('/'); ?>product?uid=<?php echo $sub_value; ?>'>
                                                    <?php echo $_product->get_title() ?>
                                                    <div class='description-icons'>
                                                        <!--                                                        <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"-->
                                                        <!--                                                             height="24.07" viewBox="0 0 27 24.07">-->
                                                        <!--                                                            <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"-->
                                                        <!--                                                               transform="translate(1 -0.465)">-->
                                                        <!--                                                                <path id="Контур_714" data-name="Контур 714"-->
                                                        <!--                                                                      d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"-->
                                                        <!--                                                                      fill="none" stroke="#6b92b0" stroke-width="2"/>-->
                                                        <!--                                                            </g>-->
                                                        <!--                                                        </svg>-->
                                                        <svg class='share' enable-background="new 0 0 512 512"
                                                             version="1.1"
                                                             viewBox="0 0 512 512"
                                                             xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z"/>
                                            </svg>
                                                    </div>
                                                </a>
                                                <span class='price'><?php echo number_format(wc_get_price_excluding_tax($_product), 0, '', ' ') ?> ₴</span>
                                                <div class='description-buttons'>
                                                    <a href='<?php echo home_url('/'); ?>product?uid=<?php echo $sub_value; ?>'
                                                       class='btn'>Купить</a>
                                                    <a data-quantity="1" data-product_id="<?php echo $sub_value; ?>"
                                                       href='<?php echo home_url('/'); ?>?add-to-cart=<?php echo $sub_value; ?>'
                                                       class='btn btn-second product_type_simple add_to_cart_button ajax_add_to_cart open-basket-js'>В
                                                        Корзину</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile;
                            // No value.
                            else :
                                // Do something...
                            endif;
                        ?>
                    </div>
                    <div class='swiper-pagination'></div>
                    <div class='swiper-button-prev'></div>
                    <div class='swiper-button-next'></div>
                </div>
            </div>
        </div>
    </section>
    <section class='advantage'>
        <div class='container'>
            <h2>преимущество</h2>
            <div class='advantage-list'>
                <div class='advantage-item'>
                    <div class='item-image'>
                        <span>10</span>
                    </div>
                    <p>Опыт работы более 10 лет</p>
                </div>
                <div class='advantage-item'>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/guarantee.svg'
                             alt='Guarantee'>
                    </div>
                    <p>Гарантия</p>
                </div>
                <div class='advantage-item'>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/tools.svg' alt='Tools'>
                    </div>
                    <p>Сервис</p>
                </div>
            </div>
        </div>
    </section>
    <section id='most-viewed' class='products conditioners'>
        <div class='container'>
            <h2>Кондиционеры</h2>
            <div class='products-slider'>
                <div class='swiper-container swiper-products'>
                    <div class='swiper-wrapper'>
                        <?php
                            // Check rows exists.
                            if (have_rows('most-viewed-list-of-conditioners')):

                                // Loop through rows.
                                while (have_rows('most-viewed-list-of-conditioners')) : the_row();
                                    // Load sub field value.
                                    $sub_value = get_sub_field('product_id');
                                    $_product = wc_get_product($sub_value);
                                    ?>
                                    <div class='swiper-slide'>
                                        <div class='products-item'>
                                            <span class='discount d-none'>-2%</span>
                                            <a href='<?php echo home_url('/'); ?>product?uid=<?php echo $sub_value; ?>'
                                               class='item-image'>
                                                <?php echo $_product->get_image('500') ?>
                                            </a>
                                            <div class='item-description'>
                                                <div class='rating'>
                                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                         width="14.137"
                                                         height="13.608"
                                                         viewBox="0 0 14.137 13.608">
                                                        <path id="Контур_2" data-name="Контур 2"
                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                              transform="translate(0 -9.569)" fill="#ffdc96"/>
                                                    </svg>
                                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                         width="14.137"
                                                         height="13.608"
                                                         viewBox="0 0 14.137 13.608">
                                                        <path id="Контур_2" data-name="Контур 2"
                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                              transform="translate(0 -9.569)" fill="#ffdc96"/>
                                                    </svg>
                                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                         width="14.137"
                                                         height="13.608"
                                                         viewBox="0 0 14.137 13.608">
                                                        <path id="Контур_2" data-name="Контур 2"
                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                              transform="translate(0 -9.569)" fill="#ffdc96"/>
                                                    </svg>
                                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                         width="14.137"
                                                         height="13.608"
                                                         viewBox="0 0 14.137 13.608">
                                                        <path id="Контур_2" data-name="Контур 2"
                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                              transform="translate(0 -9.569)" fill="#ffdc96"/>
                                                    </svg>
                                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                         width="14.137"
                                                         height="13.608"
                                                         viewBox="0 0 14.137 13.608">
                                                        <path id="Контур_2" data-name="Контур 2"
                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                              transform="translate(0 -9.569)" fill="#ffdc96"/>
                                                    </svg>
                                                </div>
                                                <a href='<?php echo home_url('/'); ?>product?uid=<?php echo $sub_value; ?>'>
                                                    <?php echo $_product->get_title() ?>
                                                    <div class='description-icons'>
                                                        <!--                                                        <svg class='favorites' xmlns="http://www.w3.org/2000/svg"-->
                                                        <!--                                                             width="27"-->
                                                        <!--                                                             height="24.07" viewBox="0 0 27 24.07">-->
                                                        <!--                                                            <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"-->
                                                        <!--                                                               transform="translate(1 -0.465)">-->
                                                        <!--                                                                <path id="Контур_714" data-name="Контур 714"-->
                                                        <!--                                                                      d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"-->
                                                        <!--                                                                      fill="none" stroke="#6b92b0" stroke-width="2"/>-->
                                                        <!--                                                            </g>-->
                                                        <!--                                                        </svg>-->
                                                        <svg class='share' enable-background="new 0 0 512 512"
                                                             version="1.1"
                                                             viewBox="0 0 512 512"
                                                             xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z"/>
                                            </svg>
                                                    </div>
                                                </a>
                                                <span class='price'><?php echo number_format(wc_get_price_excluding_tax($_product), 0, '', ' ') ?> ₴</span>
                                                <div class='description-buttons'>
                                                    <a href='<?php echo home_url('/'); ?>product?uid=<?php echo $sub_value; ?>'
                                                       class='btn'>Купить</a>
                                                    <a data-quantity="1" data-product_id="<?php echo $sub_value; ?>"
                                                       href='<?php echo home_url('/'); ?>?add-to-cart=<?php echo $sub_value; ?>'
                                                       class='btn btn-second product_type_simple add_to_cart_button ajax_add_to_cart open-basket-js'>В
                                                        Корзину</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile;
                            // No value.
                            else :
                                // Do something...
                            endif;
                        ?>
                    </div>
                    <div class='swiper-pagination'></div>
                    <div class='swiper-button-prev'></div>
                    <div class='swiper-button-next'></div>
                </div>
            </div>
        </div>
    </section>
    <section class='reviews'>
        <div class='container'>
            <h2>ОТЗЫВЫ О МАГАЗИНЕ</h2>
        </div>
        <div class='reviews-slider'>
            <div class='reviews-slider-inner'>
                <div class='container'>
                    <!-- Swiper -->
                    <div class='swiper-container swiper-reviews'>
                        <div class='swiper-wrapper'>
                            <?php
                                // Check rows exists.
                                if (have_rows('store-reviews')):

                                    // Loop through rows.
                                    while (have_rows('store-reviews')) : the_row();
                                        // Load sub field value.
                                        $name = get_sub_field('store-reviews-name');
                                        $text = get_sub_field('store-reviews-text');
                                        ?>
                                        <div class='swiper-slide'>
                                            <div class='reviews-item'>
                                                <div class='item-title'>
                                                    <h3><?php echo $name ?></h3>
                                                    <div class='rating'>
                                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                             width="14.137"
                                                             height="13.608" viewBox="0 0 14.137 13.608">
                                                            <path id="Контур_2" data-name="Контур 2"
                                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                                        </svg>
                                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                             width="14.137"
                                                             height="13.608" viewBox="0 0 14.137 13.608">
                                                            <path id="Контур_2" data-name="Контур 2"
                                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                                        </svg>
                                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                             width="14.137"
                                                             height="13.608" viewBox="0 0 14.137 13.608">
                                                            <path id="Контур_2" data-name="Контур 2"
                                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                                        </svg>
                                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                             width="14.137"
                                                             height="13.608" viewBox="0 0 14.137 13.608">
                                                            <path id="Контур_2" data-name="Контур 2"
                                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                                        </svg>
                                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                             width="14.137"
                                                             height="13.608" viewBox="0 0 14.137 13.608">
                                                            <path id="Контур_2" data-name="Контур 2"
                                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <p><?php echo $text ?></p>
                                            </div>
                                        </div>
                                    <?php endwhile;
                                // No value.
                                else :
                                    // Do something...
                                endif;
                            ?>
                        </div>
                    </div>
                    <div class='swiper-pagination'></div>
                </div>
                <!-- Add Arrows -->
                <div class='swiper-button-next'></div>
                <div class='swiper-button-prev'></div>
            </div>
        </div>
        <!--            <a href='--><?php //echo home_url('/'); ?><!--reviews' class='btn'>Все отзывы</a>-->
        </div>
    </section>
    <section class='contact'>
        <div class='container'>
            <?php include get_template_directory() . '/components/_contact-info.php'; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
