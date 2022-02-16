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

<?php $cookie = $_COOKIE['viewedProducts'];
if ($cookie) {
    $viewedProducts = explode(',', $cookie); ?>
    <div class='products'>
        <h2>Просмотренные товары</h2>
        <div class='products-slider'>
            <div class='swiper-container swiper-products'>
                <div class='swiper-wrapper'>
                    <?php foreach ($viewedProducts as $i => $product) {
                        $_product = wc_get_product($product);
                        if ($_product) { ?>
                            <div class='swiper-slide'>
                                <div class='products-item catalog-item'>
                                    <a href='<?php echo home_url('/'); ?>product/?uid=<?php echo $product; ?>'
                                       class='item-image'>
                                        <?php echo $_product->get_image('1000') ?>
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
                                        <a href='<?php echo home_url('/'); ?>product/?uid=<?php echo $product; ?>'>
                                            <?php echo $_product->get_title() ?>
                                            <div class='description-icons'>
                                                <svg class='favorites'
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     width="27"
                                                     height="24.07" viewBox="0 0 27 24.07">
                                                    <g id="Сгруппировать_2766"
                                                       data-name="Сгруппировать 2766"
                                                       transform="translate(1 -0.465)">
                                                        <path id="Контур_714"
                                                              data-name="Контур 714"
                                                              d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                              fill="none" stroke="#6b92b0"
                                                              stroke-width="2" />
                                                    </g>
                                                </svg>
                                                <svg class='share'
                                                     enable-background="new 0 0 512 512"
                                                     version="1.1"
                                                     viewBox="0 0 512 512"
                                                     xml:space="preserve"
                                                     xmlns="http://www.w3.org/2000/svg">
                                            <path fill='#B2C5D4'
                                                  d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z" />
                                        </svg>
                                            </div>
                                        </a>
                                        <span class='price'><?php echo $_product->get_price_html(); ?></span>
                                        <div class='description-buttons'>
                                            <a href='<?php echo home_url('/'); ?>product/?uid=<?php echo $product; ?>'
                                               class='btn'>Купить</a>
                                            <a data-quantity="1"
                                               data-product_id="<?php echo $product; ?>"
                                               href='<?php echo home_url('/'); ?>?add-to-cart=<?php echo $product; ?>'
                                               class='btn btn-second product_type_simple add_to_cart_button ajax_add_to_cart'>
                                                В Корзину
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
                <div class='swiper-pagination'></div>
                <div class='swiper-button-prev'></div>
                <div class='swiper-button-next'></div>
            </div>
        </div>
    </div>
<?php } ?>