<div class='products'>
    <?php $cookie = $_COOKIE['viewedProducts'];
        if ($cookie) {
            $viewedProducts = explode(',', $cookie); ?>
            <div class='products-list '>
                <?php foreach ($viewedProducts as $i => $product) {
                    $_product = wc_get_product($product);
                    if ($_product) { ?>
                        <div class='products-item catalog-item'>
                            <a href='<?php echo home_url('/'); ?>product/?uid=<?php echo $product; ?>'
                               class='item-image'>
                                <?php echo $_product->get_image('1000') ?>
                            </a>
                            <div class='item-description'>
                                <?php
                                    $averageRating = round($_product->get_average_rating());
                                    $ratingCount = $_product->get_rating_count();
                                    $showCountsReviews = true;
                                    include get_template_directory() . '/components/_rating.php'; ?>
                                <a href='<?php echo home_url('/'); ?>product/?uid=<?php echo $product; ?>'>
                                    <?php echo $_product->get_title() ?>
                                </a>
                                <span class='price'>
                                    <?php if ((int)$_product->get_price() > 10) echo $_product->get_price_html(); else echo "<span class='green'>Уточняйте цену</span>"; ?>
                                </span>
                                <div class='description-buttons'>
                                    <a href='<?php echo home_url('/'); ?>product/?uid=<?php echo $product; ?>'
                                       class='btn'>Купить</a>
                                    <a data-quantity="1"
                                       data-product-id="<?php echo $product; ?>"
                                       href='<?php echo home_url('/'); ?>?add-to-cart=<?php echo $product; ?>'
                                       class='btn btn-second add-product-to-cart'>
                                        В Корзину
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php }
                } ?>
            </div>
        <?php } ?>

</div>