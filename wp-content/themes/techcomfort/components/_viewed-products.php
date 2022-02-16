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
                                                if ($starsArray) {
                                                    if (count($starsArray) > 0) {
                                                        $sumReviews = round((array_sum($starsArray) / count($starsArray)));
                                                    }
                                                }
                                                include get_template_directory() . '/components/_rating.php'; ?>
                                            <a href='<?php echo home_url('/'); ?>product/?uid=<?php echo $product; ?>'>
                                                <?php echo $_product->get_title() ?>
                                                <?php
                                                    $postId = $_product->get_id();
                                                    include get_template_directory() . '/components/_product-icons.php'; ?>
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