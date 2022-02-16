<?php /* Template Name: Page - Home */ ?>
<?php get_header(); ?>
<?php
    wp_enqueue_script('home-js', get_stylesheet_directory_uri() . '/assets/js/home.js');
?>

<!-- Отзывы -->
<?php
    $argsReviews = [
        'post_type' => 'reviews', # тип записи
        'post_status' => 'publish', # статус записи
        'posts_per_page' => -1,        # количество (-1 - все)
    ];

    $myPostReviews_Query = new WP_Query($argsReviews);
    $countProducts = [];
    if ($myPostReviews_Query->have_posts()) {
        while ($myPostReviews_Query->have_posts()) :
            $myPostReviews_Query->the_post();
            if (get_field('reviews_product') !== 'магазин') {
                $countProducts[get_field('reviews_product')][] = get_field('reviews_rating');
            }
        endwhile;
        wp_reset_postdata(); // "сброс"
    }
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
            <h2>Рекомендуемые</h2>
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
                                    $_product = get_product_by_sku($sub_value);
                                    ?>
                                    <div class='swiper-slide'>
                                        <div class='products-item'>
                                            <a href='<?php echo home_url('/'); ?>product?uid=<?php echo $_product->get_id(); ?>'
                                               class='item-image'>
                                                <?php echo $_product->get_image('500') ?>
                                            </a>
                                            <div class='item-description'>
                                                <?php
                                                    $starsArray = $countProducts[$_product->get_id()];
                                                    $showCountsReviews = true;
                                                    $sumReviews = 0;
                                                    if (count($starsArray) > 0) {
                                                        $sumReviews = round((array_sum($starsArray) / count($starsArray)));
                                                    }
                                                    include get_template_directory() . '/components/_rating.php'; ?>
                                                <a href='<?php echo home_url('/'); ?>product?uid=<?php echo $_product->get_id(); ?>'>
                                                    <?php echo $_product->get_title() ?>
                                                    <?php
                                                        $postId = $_product->get_id();
                                                        include get_template_directory() . '/components/_product-icons.php'; ?>
                                                </a>
                                                <span class='price'><?php echo number_format(wc_get_price_excluding_tax($_product), 0, '', ' ') ?> ₴</span>
                                                <div class='description-buttons'>
                                                    <a href='<?php echo home_url('/'); ?>product?uid=<?php echo $_product->get_id(); ?>'
                                                       class='btn'>Купить</a>
                                                    <a data-quantity="1"
                                                       data-product_id="<?php echo $_product->get_id(); ?>"
                                                       href='<?php echo home_url('/'); ?>?add-to-cart=<?php echo $_product->get_id(); ?>'
                                                       class='btn btn-second product_type_simple add_to_cart_button ajax_add_to_cart'>
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
                                    $_product = get_product_by_sku($sub_value);
                                    ?>
                                    <div class='swiper-slide'>
                                        <div class='products-item'>
                                            <span class='hit'>хит</span>
                                            <a href='<?php echo home_url('/'); ?>product?uid=<?php echo $_product->get_id(); ?>'
                                               class='item-image'>
                                                <?php echo $_product->get_image('500') ?>
                                            </a>
                                            <div class='item-description'>
                                                <?php
                                                    $starsArray = $countProducts[$_product->get_id()];
                                                    $showCountsReviews = true;
                                                    $sumReviews = 0;
                                                    if (count($starsArray) > 0) {
                                                        $sumReviews = round((array_sum($starsArray) / count($starsArray)));
                                                    }
                                                    include get_template_directory() . '/components/_rating.php'; ?>
                                                <a href='<?php echo home_url('/'); ?>product?uid=<?php echo $_product->get_id(); ?>'>
                                                    <?php echo $_product->get_title() ?>
                                                    <?php
                                                        $postId = $_product->get_id();
                                                        include get_template_directory() . '/components/_product-icons.php'; ?>
                                                </a>
                                                <span class='price'><?php echo number_format(wc_get_price_excluding_tax($_product), 0, '', ' ') ?> ₴</span>
                                                <div class='description-buttons'>
                                                    <a href='<?php echo home_url('/'); ?>product?uid=<?php echo $_product->get_id(); ?>'
                                                       class='btn'>Купить</a>
                                                    <a data-quantity="1"
                                                       data-product_id="<?php echo $_product->get_id(); ?>"
                                                       href='<?php echo home_url('/'); ?>?add-to-cart=<?php echo $_product->get_id(); ?>'
                                                       class='btn btn-second product_type_simple add_to_cart_button ajax_add_to_cart'>В
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
            <h2>Самые Просматриваемые</h2>
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
                                    $_product = get_product_by_sku($sub_value);
                                    ?>
                                    <div class='swiper-slide'>
                                        <div class='products-item'>
                                            <span class='discount d-none'>-2%</span>
                                            <a href='<?php echo home_url('/'); ?>product?uid=<?php echo $_product->get_id(); ?>'
                                               class='item-image'>
                                                <?php echo $_product->get_image('500') ?>
                                            </a>
                                            <div class='item-description'>
                                                <?php
                                                    $starsArray = $countProducts[$_product->get_id()];
                                                    $showCountsReviews = true;
                                                    $sumReviews = 0;
                                                    if (count($starsArray) > 0) {
                                                        $sumReviews = round((array_sum($starsArray) / count($starsArray)));
                                                    }
                                                    include get_template_directory() . '/components/_rating.php'; ?>
                                                <a href='<?php echo home_url('/'); ?>product?uid=<?php echo $_product->get_id(); ?>'>
                                                    <?php echo $_product->get_title() ?>
                                                    <?php
                                                        $postId = $_product->get_id();
                                                        include get_template_directory() . '/components/_product-icons.php'; ?>
                                                </a>
                                                <span class='price'><?php echo number_format(wc_get_price_excluding_tax($_product), 0, '', ' ') ?> ₴</span>
                                                <div class='description-buttons'>
                                                    <a href='<?php echo home_url('/'); ?>product?uid=<?php echo $_product->get_id(); ?>'
                                                       class='btn'>Купить</a>
                                                    <a data-quantity="1"
                                                       data-product_id="<?php echo $_product->get_id(); ?>"
                                                       href='<?php echo home_url('/'); ?>?add-to-cart=<?php echo $_product->get_id(); ?>'
                                                       class='btn btn-second product_type_simple add_to_cart_button ajax_add_to_cart'>В
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
                                                    <?php
                                                        $starsArray = $countProducts[$_product->get_id()];
                                                        $showCountsReviews = true;
                                                        $sumReviews = 0;
                                                        if (count($starsArray) > 0) {
                                                            $sumReviews = round((array_sum($starsArray) / count($starsArray)));
                                                        }
                                                        include get_template_directory() . '/components/_rating.php'; ?>
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
