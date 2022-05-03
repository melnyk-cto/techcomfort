<?php global $product; ?>

<div class='products-item catalog-item'>
    <a id="id-<?php the_id(); ?>"
       href="<?php echo home_url('/'); ?>product?uid=<?php the_id(); ?>"
       title="<?php the_title(); ?>" class='item-image'>
        <?php if (has_post_thumbnail(get_the_ID())) echo get_the_post_thumbnail(get_the_ID(), 'shop_catalog'); else echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="product-image" />'; ?>
    </a>
    <div class='item-description'>
        <?php
            $averageRating = round($product->get_average_rating());
            $ratingCount = $product->get_rating_count();
            $showCountsReviews = true;
            include get_template_directory() . '/components/_rating.php'; ?>
        <div class="description-wrapper">
            <a href='<?php echo home_url('/'); ?>product/?uid=<?php the_id(); ?>'>
                <?php the_title(); ?>
            </a>
            <?php
                $postId = get_the_ID();
                include get_template_directory() . '/components/_product-icons.php'; ?>
        </div>
        <!-- Need for JS -->
        <ul class='characteristics-list'>
            <?php
                $attributes = $product->get_description();
                $explodes = explode(PHP_EOL, $attributes);
                foreach ($explodes as $explode) {
                    $explode = explode("|", $explode);
                    echo '<li class="characteristics-item"><p>' . $explode[1] . '</p><span>: ' . $explode[2] . '</span></li>';
                }
            ?>
        </ul>
        <span class='price'>
            <?php if ((int)$product->get_price() > 10) echo $product->get_price_html(); else echo "<span class='green'>Уточняйте цену</span>"; ?>
        </span>
        <div class='description-buttons'>
            <a href='<?php echo home_url('/'); ?>product/?uid=<?php the_id(); ?>'
               class='btn'>
                Купить
            </a>
            <a data-quantity="1" data-product-id="<?php the_id(); ?>"
               href='<?php echo home_url('/'); ?>?add-to-cart=<?php the_id(); ?>'
               class='btn btn-second add-product-to-cart'>
                В Корзину
            </a>
        </div>
    </div>
</div>