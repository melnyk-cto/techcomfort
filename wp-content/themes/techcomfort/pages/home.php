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
                            <div class='swiper-slide'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/banner-image1.jpg'
                                     alt='Кондиционер'>
                            </div>
                            <!--                            <div class='swiper-slide'>-->
                            <!--                                <img src='-->
                            <?php //echo get_template_directory_uri() ?><!--/assets/images/banner-image2.jpg'-->
                            <!--                                     alt='Кондиционер'>-->
                            <!--                            </div>-->
                            <!--                            <div class='swiper-slide'>-->
                            <!--                                <img src='-->
                            <?php //echo get_template_directory_uri() ?><!--/assets/images/banner-image.jpg'-->
                            <!--                                     alt='Кондиционер'>-->
                            <!--                            </div>-->
                            <!--                            <div class='swiper-slide'>-->
                            <!--                                <img src='-->
                            <?php //echo get_template_directory_uri() ?><!--/assets/images/banner-image.jpg'-->
                            <!--                                     alt='Кондиционер'>-->
                            <!--                            </div>-->
                        </div>
                    </div>
                </div>
                <!--                <div class='slider-bottom'>-->
                <!--                    <div class='swiper-container swiper-banner'>-->
                <!--                        <div class='swiper-wrapper'>-->
                <!--                            <div class='swiper-slide'>-->
                <!--                                <img src='-->
                <?php //echo get_template_directory_uri() ?><!--/assets/images/banner-image.jpg'-->
                <!--                                     alt='Кондиционер'>-->
                <!--                            </div>-->
                <!--                            <div class='swiper-slide'>-->
                <!--                                <img src='-->
                <?php //echo get_template_directory_uri() ?><!--/assets/images/banner-image.jpg'-->
                <!--                                     alt='Кондиционер'>-->
                <!--                            </div>-->
                <!--                            <div class='swiper-slide'>-->
                <!--                                <img src='-->
                <?php //echo get_template_directory_uri() ?><!--/assets/images/banner-image.jpg'-->
                <!--                                     alt='Кондиционер'>-->
                <!--                            </div>-->
                <!--                            <div class='swiper-slide'>-->
                <!--                                <img src='-->
                <?php //echo get_template_directory_uri() ?><!--/assets/images/banner-image.jpg'-->
                <!--                                     alt='Кондиционер'>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                        <div class='swiper-pagination'></div>-->
                <!--                    </div>-->
                <!--                    <div class='swiper-button-prev swiper-button-active'></div>-->
                <!--                </div>-->
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
                        <div class='swiper-slide'>
                            <div class='products-item'>
                                <a href='<?php echo home_url('/'); ?>product' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-5.jpg'
                                         alt='Кондиционер'>
                                </a>
                                <div class='item-description'>
                                    <div class='rating'>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                    </div>
                                    <a href='<?php echo home_url('/'); ?>product'>
                                        C&H CH-S07GKP8
                                        <div class='description-icons'>
                                            <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                 height="24.07" viewBox="0 0 27 24.07">
                                                <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                   transform="translate(1 -0.465)">
                                                    <path id="Контур_714" data-name="Контур 714"
                                                          d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                          fill="none" stroke="#6b92b0" stroke-width="2"/>
                                                </g>
                                            </svg>
                                            <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                 viewBox="0 0 512 512"
                                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z"/>
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
                                <a href='<?php echo home_url('/'); ?>product' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-6.jpg'
                                         alt='Кондиционер'>
                                </a>
                                <div class='item-description'>
                                    <div class='rating'>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                    </div>
                                    <a href='<?php echo home_url('/'); ?>product'>
                                        C&H CH-S07GKP8
                                        <div class='description-icons'>
                                            <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                 height="24.07" viewBox="0 0 27 24.07">
                                                <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                   transform="translate(1 -0.465)">
                                                    <path id="Контур_714" data-name="Контур 714"
                                                          d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                          fill="none" stroke="#6b92b0" stroke-width="2"/>
                                                </g>
                                            </svg>
                                            <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                 viewBox="0 0 512 512"
                                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z"/>
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
                                <a href='<?php echo home_url('/'); ?>product' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-7.jpg'
                                         alt='Кондиционер'>
                                </a>
                                <div class='item-description'>
                                    <div class='rating'>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                    </div>
                                    <a href='<?php echo home_url('/'); ?>product'>
                                        C&H CH-S07GKP8
                                        <div class='description-icons'>
                                            <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                 height="24.07" viewBox="0 0 27 24.07">
                                                <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                   transform="translate(1 -0.465)">
                                                    <path id="Контур_714" data-name="Контур 714"
                                                          d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                          fill="none" stroke="#6b92b0" stroke-width="2"/>
                                                </g>
                                            </svg>
                                            <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                 viewBox="0 0 512 512"
                                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z"/>
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
                                <a href='<?php echo home_url('/'); ?>product' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-8.jpg'
                                         alt='Кондиционер'>
                                </a>
                                <div class='item-description'>
                                    <div class='rating'>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                    </div>
                                    <a href='<?php echo home_url('/'); ?>product'>
                                        C&H CH-S07GKP8
                                        <div class='description-icons'>
                                            <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                 height="24.07" viewBox="0 0 27 24.07">
                                                <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                   transform="translate(1 -0.465)">
                                                    <path id="Контур_714" data-name="Контур 714"
                                                          d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                          fill="none" stroke="#6b92b0" stroke-width="2"/>
                                                </g>
                                            </svg>
                                            <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                 viewBox="0 0 512 512"
                                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z"/>
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
                                <a href='<?php echo home_url('/'); ?>product' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-9.jpg'
                                         alt='Кондиционер'>
                                </a>
                                <div class='item-description'>
                                    <div class='rating'>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                    </div>
                                    <a href='<?php echo home_url('/'); ?>product'>
                                        C&H CH-S07GKP8
                                        <div class='description-icons'>
                                            <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                 height="24.07" viewBox="0 0 27 24.07">
                                                <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                   transform="translate(1 -0.465)">
                                                    <path id="Контур_714" data-name="Контур 714"
                                                          d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                          fill="none" stroke="#6b92b0" stroke-width="2"/>
                                                </g>
                                            </svg>
                                            <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                 viewBox="0 0 512 512"
                                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z"/>
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
    <section id='popular' class='products bestsellers'>
        <div class='container'>
            <h2>ХИТЫ ПРОДАЖ</h2>
            <div class='products-slider'>
                <div class='swiper-container swiper-products'>
                    <div class='swiper-wrapper'>
                        <div class='swiper-slide'>
                            <div class='products-item'>
                                <span class='hit'>хит</span>
                                <a href='<?php echo home_url('/'); ?>product' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-10.jpg'
                                         alt='Кондиционер'>
                                </a>
                                <div class='item-description'>
                                    <div class='rating'>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                    </div>
                                    <a href='<?php echo home_url('/'); ?>product'>
                                        C&H CH-S07GKP8
                                        <div class='description-icons'>
                                            <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                 height="24.07" viewBox="0 0 27 24.07">
                                                <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                   transform="translate(1 -0.465)">
                                                    <path id="Контур_714" data-name="Контур 714"
                                                          d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                          fill="none" stroke="#6b92b0" stroke-width="2"/>
                                                </g>
                                            </svg>
                                            <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                 viewBox="0 0 512 512"
                                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z"/>
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
                                <span class='hit'>хит</span>
                                <a href='<?php echo home_url('/'); ?>product' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-11.jpg'
                                         alt='Кондиционер'>
                                </a>
                                <div class='item-description'>
                                    <div class='rating'>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                    </div>
                                    <a href='<?php echo home_url('/'); ?>product'>
                                        C&H CH-S07GKP8
                                        <div class='description-icons'>
                                            <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                 height="24.07" viewBox="0 0 27 24.07">
                                                <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                   transform="translate(1 -0.465)">
                                                    <path id="Контур_714" data-name="Контур 714"
                                                          d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                          fill="none" stroke="#6b92b0" stroke-width="2"/>
                                                </g>
                                            </svg>
                                            <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                 viewBox="0 0 512 512"
                                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z"/>
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
                                <span class='hit'>хит</span>
                                <a href='<?php echo home_url('/'); ?>product' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-12.jpg'
                                         alt='Кондиционер'>
                                </a>
                                <div class='item-description'>
                                    <div class='rating'>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                    </div>
                                    <a href='<?php echo home_url('/'); ?>product'>
                                        C&H CH-S07GKP8
                                        <div class='description-icons'>
                                            <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                 height="24.07" viewBox="0 0 27 24.07">
                                                <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                   transform="translate(1 -0.465)">
                                                    <path id="Контур_714" data-name="Контур 714"
                                                          d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                          fill="none" stroke="#6b92b0" stroke-width="2"/>
                                                </g>
                                            </svg>
                                            <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                 viewBox="0 0 512 512"
                                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z"/>
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
                                <span class='hit'>хит</span>
                                <a href='<?php echo home_url('/'); ?>product' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-13.jpg'
                                         alt='Кондиционер'>
                                </a>
                                <div class='item-description'>
                                    <div class='rating'>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                    </div>
                                    <a href='<?php echo home_url('/'); ?>product'>
                                        C&H CH-S07GKP8
                                        <div class='description-icons'>
                                            <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                 height="24.07" viewBox="0 0 27 24.07">
                                                <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                   transform="translate(1 -0.465)">
                                                    <path id="Контур_714" data-name="Контур 714"
                                                          d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                          fill="none" stroke="#6b92b0" stroke-width="2"/>
                                                </g>
                                            </svg>
                                            <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                 viewBox="0 0 512 512"
                                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z"/>
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
                                <span class='hit'>хит</span>
                                <a href='<?php echo home_url('/'); ?>product' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-15.jpg'
                                         alt='Кондиционер'>
                                </a>
                                <div class='item-description'>
                                    <div class='rating'>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                    </div>
                                    <a href='<?php echo home_url('/'); ?>product'>
                                        C&H CH-S07GKP8
                                        <div class='description-icons'>
                                            <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                 height="24.07" viewBox="0 0 27 24.07">
                                                <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                   transform="translate(1 -0.465)">
                                                    <path id="Контур_714" data-name="Контур 714"
                                                          d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                          fill="none" stroke="#6b92b0" stroke-width="2"/>
                                                </g>
                                            </svg>
                                            <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                 viewBox="0 0 512 512"
                                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z"/>
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
                        <div class='swiper-slide'>
                            <div class='products-item'>
                                <span class='discount'>-2%</span>
                                <a href='<?php echo home_url('/'); ?>product' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-15.jpg'
                                         alt='Кондиционер'>
                                </a>
                                <div class='item-description'>
                                    <div class='rating'>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                    </div>
                                    <a href='<?php echo home_url('/'); ?>product'>
                                        C&H CH-S07GKP8
                                        <div class='description-icons'>
                                            <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                 height="24.07" viewBox="0 0 27 24.07">
                                                <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                   transform="translate(1 -0.465)">
                                                    <path id="Контур_714" data-name="Контур 714"
                                                          d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                          fill="none" stroke="#6b92b0" stroke-width="2"/>
                                                </g>
                                            </svg>
                                            <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                 viewBox="0 0 512 512"
                                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z"/>
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
                                <span class='discount'>-2%</span>
                                <a href='<?php echo home_url('/'); ?>product' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-18.jpg'
                                         alt='Кондиционер'>
                                </a>
                                <div class='item-description'>
                                    <div class='rating'>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                    </div>
                                    <a href='<?php echo home_url('/'); ?>product'>
                                        C&H CH-S07GKP8
                                        <div class='description-icons'>
                                            <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                 height="24.07" viewBox="0 0 27 24.07">
                                                <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                   transform="translate(1 -0.465)">
                                                    <path id="Контур_714" data-name="Контур 714"
                                                          d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                          fill="none" stroke="#6b92b0" stroke-width="2"/>
                                                </g>
                                            </svg>
                                            <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                 viewBox="0 0 512 512"
                                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z"/>
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
                                <a href='<?php echo home_url('/'); ?>product' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-19.jpg'
                                         alt='Кондиционер'>
                                </a>
                                <div class='item-description'>
                                    <div class='rating'>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                    </div>
                                    <a href='<?php echo home_url('/'); ?>product'>
                                        C&H CH-S07GKP8
                                        <div class='description-icons'>
                                            <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                 height="24.07" viewBox="0 0 27 24.07">
                                                <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                   transform="translate(1 -0.465)">
                                                    <path id="Контур_714" data-name="Контур 714"
                                                          d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                          fill="none" stroke="#6b92b0" stroke-width="2"/>
                                                </g>
                                            </svg>
                                            <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                 viewBox="0 0 512 512"
                                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z"/>
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
                                <a href='<?php echo home_url('/'); ?>product' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-20.jpg'
                                         alt='Кондиционер'>
                                </a>
                                <div class='item-description'>
                                    <div class='rating'>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                    </div>
                                    <a href='<?php echo home_url('/'); ?>product'>
                                        C&H CH-S07GKP8
                                        <div class='description-icons'>
                                            <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                 height="24.07" viewBox="0 0 27 24.07">
                                                <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                   transform="translate(1 -0.465)">
                                                    <path id="Контур_714" data-name="Контур 714"
                                                          d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                          fill="none" stroke="#6b92b0" stroke-width="2"/>
                                                </g>
                                            </svg>
                                            <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                 viewBox="0 0 512 512"
                                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z"/>
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
                                <a href='<?php echo home_url('/'); ?>product' class='item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/product-gallery-21.jpg'
                                         alt='Кондиционер'>
                                </a>
                                <div class='item-description'>
                                    <div class='rating'>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                        <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                             height="13.608"
                                             viewBox="0 0 14.137 13.608">
                                            <path id="Контур_2" data-name="Контур 2"
                                                  d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                  transform="translate(0 -9.569)" fill="#ffdc96"/>
                                        </svg>
                                    </div>
                                    <a href='<?php echo home_url('/'); ?>product'>
                                        C&H CH-S07GKP8
                                        <div class='description-icons'>
                                            <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"
                                                 height="24.07" viewBox="0 0 27 24.07">
                                                <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"
                                                   transform="translate(1 -0.465)">
                                                    <path id="Контур_714" data-name="Контур 714"
                                                          d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                          fill="none" stroke="#6b92b0" stroke-width="2"/>
                                                </g>
                                            </svg>
                                            <svg class='share' enable-background="new 0 0 512 512" version="1.1"
                                                 viewBox="0 0 512 512"
                                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                <path fill='#B2C5D4'
                                                      d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z"/>
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
                            <div class='swiper-slide'>
                                <div class='reviews-item'>
                                    <div class='item-title'>
                                        <h3>Артем</h3>
                                        <div class='rating'>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                                 height="13.608" viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96"/>
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                                 height="13.608" viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96"/>
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                                 height="13.608" viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96"/>
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                                 height="13.608" viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96"/>
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                                 height="13.608" viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <p>
                                        Добрый день! Благодаря вашему специалисту по недвижимости Яне мы приобрели ту
                                        недвижимость, о которой мечтали. За короткое время Яне удалось понять наши
                                        пожелания, решить сопутствующие проблемы и найти именно то, что мы хотели. Яна
                                        очень
                                        грамотный, опытный и ответственный специалист. Было видно, что она искренне
                                        хочет
                                        нам помочь. Очень доброжелательная, коммуникабельная и выдержанная. Умеет, не
                                        оказывая давления, донести свою точку зрения. Большое спасибо за сотрудничество!
                                    </p>
                                </div>
                            </div>
                            <div class='swiper-slide'>
                                <div class='reviews-item'>
                                    <div class='item-title'>
                                        <h3>Артем</h3>
                                        <div class='rating'>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                                 height="13.608" viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96"/>
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                                 height="13.608" viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96"/>
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                                 height="13.608" viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96"/>
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                                 height="13.608" viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96"/>
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                                 height="13.608" viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <p>
                                        Добрый день! Благодаря вашему специалисту по недвижимости Яне мы приобрели ту
                                        недвижимость, о которой мечтали. За короткое время Яне удалось понять наши
                                        пожелания, решить сопутствующие проблемы и найти именно то, что мы хотели. Яна
                                        очень
                                        грамотный, опытный и ответственный специалист. Было видно, что она искренне
                                        хочет
                                        нам помочь. Очень доброжелательная, коммуникабельная и выдержанная. Умеет, не
                                        оказывая давления, донести свою точку зрения. Большое спасибо за сотрудничество!
                                    </p>
                                </div>
                            </div>
                            <div class='swiper-slide'>
                                <div class='reviews-item'>
                                    <div class='item-title'>
                                        <h3>Артем</h3>
                                        <div class='rating'>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                                 height="13.608" viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96"/>
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                                 height="13.608" viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96"/>
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                                 height="13.608" viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96"/>
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                                 height="13.608" viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96"/>
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                                 height="13.608" viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <p>
                                        Добрый день! Благодаря вашему специалисту по недвижимости Яне мы приобрели ту
                                        недвижимость, о которой мечтали. За короткое время Яне удалось понять наши
                                        пожелания, решить сопутствующие проблемы и найти именно то, что мы хотели. Яна
                                        очень
                                        грамотный, опытный и ответственный специалист. Было видно, что она искренне
                                        хочет
                                        нам помочь. Очень доброжелательная, коммуникабельная и выдержанная. Умеет, не
                                        оказывая давления, донести свою точку зрения. Большое спасибо за сотрудничество!
                                    </p>
                                </div>
                            </div>
                            <div class='swiper-slide'>
                                <div class='reviews-item'>
                                    <div class='item-title'>
                                        <h3>Артем</h3>
                                        <div class='rating'>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                                 height="13.608" viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96"/>
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                                 height="13.608" viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96"/>
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                                 height="13.608" viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96"/>
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                                 height="13.608" viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96"/>
                                            </svg>
                                            <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg" width="14.137"
                                                 height="13.608" viewBox="0 0 14.137 13.608">
                                                <path id="Контур_2" data-name="Контур 2"
                                                      d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                      transform="translate(0 -9.569)" fill="#ffdc96"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <p>
                                        Добрый день! Благодаря вашему специалисту по недвижимости Яне мы приобрели ту
                                        недвижимость, о которой мечтали. За короткое время Яне удалось понять наши
                                        пожелания, решить сопутствующие проблемы и найти именно то, что мы хотели. Яна
                                        очень
                                        грамотный, опытный и ответственный специалист. Было видно, что она искренне
                                        хочет
                                        нам помочь. Очень доброжелательная, коммуникабельная и выдержанная. Умеет, не
                                        оказывая давления, донести свою точку зрения. Большое спасибо за сотрудничество!
                                    </p>
                                </div>
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
            <div class='contact-inner'>
                <div class='contact-form'>
                    <h2>Контакты</h2>
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
                                          transform="translate(-13.758 -3.973)" fill="#6b92b0"/>
                                </g>
                            </g>
                            <g id="Сгруппировать_655" data-name="Сгруппировать 655" transform="translate(1.011)">
                                <g id="Сгруппировать_654" data-name="Сгруппировать 654">
                                    <path id="Контур_158" data-name="Контур 158"
                                          d="M18.353,2.969H1.763A1.749,1.749,0,0,0,1,3.146l7.8,7.763a1.771,1.771,0,0,0,2.5,0l7.8-7.763A1.749,1.749,0,0,0,18.353,2.969Z"
                                          transform="translate(-1.005 -2.969)" fill="#6b92b0"/>
                                </g>
                            </g>
                            <g id="Сгруппировать_657" data-name="Сгруппировать 657" transform="translate(0 1.011)">
                                <g id="Сгруппировать_656" data-name="Сгруппировать 656">
                                    <path id="Контур_159" data-name="Контур 159"
                                          d="M.177,3.973A1.749,1.749,0,0,0,0,4.731V15.346a1.748,1.748,0,0,0,.177.758l6.1-6.065Z"
                                          transform="translate(0 -3.973)" fill="#6b92b0"/>
                                </g>
                            </g>
                            <g id="Сгруппировать_659" data-name="Сгруппировать 659" transform="translate(1.011 7.91)">
                                <g id="Сгруппировать_658" data-name="Сгруппировать 658">
                                    <path id="Контур_160" data-name="Контур 160"
                                          d="M13.006,10.829l-.864.864a2.952,2.952,0,0,1-4.169,0l-.864-.864L1,16.894a1.749,1.749,0,0,0,.758.177h16.59a1.749,1.749,0,0,0,.758-.177Z"
                                          transform="translate(-1.005 -10.829)" fill="#6b92b0"/>
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
                                      fill="#6b92b0"/>
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
                                  transform="translate(0.234)" fill="#6b92b0"/>
                        </svg>
                        <p>г. Киев</p>
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
    </section>
</main>
<?php get_footer(); ?>
