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
            $argsFavorites = [
                'post_type' => 'product', # тип записи
                'stock' => 1,
                'orderby' => 'meta_value_num',
                'meta_query' => [
                    'relation' => 'AND',
                    [
                        'key' => 'favorite',
                        'value' => 'true',
                        'compare' => '='
                    ]
                ],
                'posts_per_page' => -1,        # количество (-1 - все)
            ];
            $favorites = new WP_Query($argsFavorites);
            if ($favorites->have_posts()) {
                while ($favorites->have_posts()) : $favorites->the_post();
                    global $product; ?>
                    <div class='products-item catalog-item'>
                        <a id="id-<?php the_id(); ?>"
                           href="<?php echo home_url('/'); ?>product?uid=<?php the_id(); ?>"
                           title="<?php the_title(); ?>" class='item-image'>
                            <?php if (has_post_thumbnail($favorites->post->ID)) echo get_the_post_thumbnail($favorites->post->ID, 'shop_catalog'); else echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="product-image" />'; ?>
                        </a>
                        <div class='item-description'>
                            <?php
                                $starsArray = $countProducts[$favorites->post->ID];
                                $showCountsReviews = true;
                                $sumReviews = 0;
                                if (count($starsArray) > 0) {
                                    $sumReviews = round((array_sum($starsArray) / count($starsArray)));
                                }
                                include get_template_directory() . '/components/_rating.php'; ?>
                            <a href='<?php echo home_url('/'); ?>product/?uid=<?php the_id(); ?>'>
                                <?php the_title(); ?>
                                <?php
                                    $postId = $favorites->post->ID;
                                    include get_template_directory() . '/components/_product-icons.php'; ?>
                            </a>
                            <span class='price'>
                                <?php if ((int)$product->get_price() > 10) echo $product->get_price_html(); else echo "<span class='green'>Уточняйте цену</span>"; ?>
                            </span>
                            <div class='description-buttons'>
                                <a href='<?php echo home_url('/'); ?>product/?uid=<?php the_id(); ?>'
                                   class='btn'>
                                    Купить
                                </a>
                                <a data-quantity="1" data-product_id="<?php the_id(); ?>"
                                   href='<?php echo home_url('/'); ?>?add-to-cart=<?php the_id(); ?>'
                                   class='btn btn-second product_type_simple add_to_cart_button ajax_add_to_cart'>
                                    В Корзину
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
            } else {
                echo '<h3 class="no-products">Нет товар по указанном фильтре</h3>';
            }
        ?>
    </div>
</div>