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