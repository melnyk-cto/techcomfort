<?php /* Template Name: Page - Home */ ?>
<?php get_header(); ?>
<?php
    wp_enqueue_script('home-js', get_stylesheet_directory_uri() . '/assets/js/home.js');
?>

<main class='home'>
    <section id='banner' class='banner'>
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
    <section id='anchor-recommended' class='products'>
        <div class='container'>
            <div class='products-buttons buttons-container-js'>
                <a href='#anchor-recommended' class='btn-contour active'>Рекомендуемые</a>
                <a href='#anchor-popular' class='btn-contour'>Популярные</a>
                <a href='#anchor-most-viewed' class='btn-contour'>Самые Просматриваемые</a>
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
                                                    $averageRating = round($_product->get_average_rating());
                                                    $ratingCount = $_product->get_rating_count();
                                                    $showCountsReviews = true;
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
    <section id='anchor-popular' class='products bestsellers'>
        <div class='container'>
            <h2>Популярные</h2>
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
                                                    $averageRating = round($_product->get_average_rating());
                                                    $ratingCount = $_product->get_rating_count();
                                                    $showCountsReviews = true;
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
    <section id='advantage' class='advantage'>
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
    <section id='anchor-most-viewed' class='products conditioners'>
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
                                                    $averageRating = round($_product->get_average_rating());
                                                    $ratingCount = $_product->get_rating_count();
                                                    $showCountsReviews = true;
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
    <?php
        $page_object = get_page_by_title('Отзывы');
        $page_id = $page_object->ID;
        $type = $page_id;

        $args = [
            'post_id' => $type,
            'number' => 10,
        ];
        if (get_comments($args)) { ?>
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
                                    <?php foreach (get_comments($args) as $comment) {
                                        $rating = get_comment_meta($comment->comment_ID, 'rating', true);
                                        if ($rating >= 5) { ?>
                                            <div class='swiper-slide'>
                                                <div class='reviews-item'>
                                                    <div class='item-title'>
                                                        <h3><?php echo $comment->comment_author ?></h3>
                                                        <?php
                                                            $averageRating = $rating;
                                                            $showCountsReviews = false;
                                                            include get_template_directory() . '/components/_rating.php'; ?>
                                                    </div>
                                                    <p><?php echo $comment->comment_content; ?></p>
                                                </div>
                                            </div>
                                        <?php }
                                    }
                                        wp_reset_postdata(); // "сброс" ?>
                                </div>
                            </div>
                            <div class='swiper-pagination'></div>
                            <!-- Add Arrows -->
                            <div class='swiper-button-next'></div>
                            <div class='swiper-button-prev'></div>
                        </div>
                    </div>
                </div>
                <a href='<?php echo home_url('/'); ?>reviews' class='btn'>Все отзывы</a>
            </section>
            <?php
        } ?>
    <section id='contact' class='contact'>
        <div class='container'>
            <?php include get_template_directory() . '/components/_contact-info.php'; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
