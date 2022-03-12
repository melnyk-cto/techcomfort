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


<div class='products'>
    <div class='products-list '>
        <?php
            $userID = get_user_meta(get_current_user_id());
            $favorites = $userID['favorite'];
            if ($favorites) {
                if (count($favorites) > 0) {
                    foreach ($favorites as $value) {
                        $_product = wc_get_product($value); ?>
                        <div class='products-item catalog-item favorite-item'>
                            <a id="id-<?php echo $_product->get_id(); ?>"
                               href="<?php echo home_url('/'); ?>product?uid=<?php echo $_product->get_id(); ?>"
                               title="<?php echo $_product->get_title(); ?>" class='item-image'>
                                <?php if (has_post_thumbnail($_product->get_id())) echo get_the_post_thumbnail($_product->get_id(), 'shop_catalog'); else echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="product-image" />'; ?>
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
                                <div class='description-wrapper'>
                                    <a href='<?php echo home_url('/'); ?>product/?uid=<?php echo $_product->get_id(); ?>'>
                                        <?php echo $_product->get_title(); ?>
                                    </a>
                                    <?php
                                        $postId = $_product->get_id();
                                        include get_template_directory() . '/components/_product-icons.php'; ?>
                                </div>
                                <span class='price'>
                                <?php if ((int)$_product->get_price() > 10) echo $_product->get_price_html(); else echo "<span class='green'>Уточняйте цену</span>"; ?>
                            </span>
                                <div class='description-buttons'>
                                    <a href='<?php echo home_url('/'); ?>product/?uid=<?php echo $_product->get_id(); ?>'
                                       class='btn'>
                                        Купить
                                    </a>
                                    <a data-quantity="1" data-product_id="<?php echo $_product->get_id(); ?>"
                                       href='<?php echo home_url('/'); ?>?add-to-cart=<?php echo $_product->get_id(); ?>'
                                       class='btn btn-second product_type_simple add_to_cart_button ajax_add_to_cart'>
                                        В Корзину
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } else {
                    echo '<h3>Список желаний пуст</h3>'; ?>
                <?php }
            } else echo '<h3>Список желаний пуст</h3>'; ?>
    </div>
</div>