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
                                    $averageRating = round($_product->get_average_rating());
                                    $ratingCount = $_product->get_rating_count();
                                    $showCountsReviews = true;
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
                                    <a data-quantity="1" data-product-id="<?php echo $_product->get_id(); ?>"
                                       href='<?php echo home_url('/'); ?>?add-to-cart=<?php echo $_product->get_id(); ?>'
                                       class='btn btn-second add-product-to-cart'>
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