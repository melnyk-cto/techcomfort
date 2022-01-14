<?php /* Template Name: Page - Comparison */ ?>
<?php get_header(); ?>
<main class='comparison'>
    <section class='comparison-content'>
        <div class='container'>
            <h2>Сравнение</h2>
            <div class='comparison-inner'>
                <?php
                    $cookie = $_COOKIE['compareArray'];
                    if ($cookie) {
                        $compareProducts = explode(',', $cookie);
                        foreach ($compareProducts as $i => $product) {

                            $_product = wc_get_product($product);
                            if ($_product) { ?>
                                <div class='comparison-product'>
                                    <div class='product-item'>
                                        <div class='item-image'>
                                            <?php echo $_product->get_image('1000') ?>
                                        </div>
                                        <div class='item-description'>
                                            <h3><?php echo $_product->get_title() ?></h3>
                                            <div class='description-info'>
                                                <span class='price'>
                                                 <?php if ((int)$_product->get_price() > 10) echo $_product->get_price_html(); else echo "<span class='green'>Уточняйте цену</span>"; ?>
                                                </span>
                                            </div>
                                            <a data-quantity="1"
                                               data-product_id="<?php echo $_product; ?>"
                                               href='<?php echo home_url('/'); ?>?add-to-cart=<?php echo $_product; ?>'
                                               class='btn product_type_simple add_to_cart_button ajax_add_to_cart'>
                                                В Корзину
                                            </a>
                                        </div>
                                    </div>
                                    <div class='product-characteristics'>
                                        <ul>
                                            <?php $attributes = $_product->get_description();
                                                $explodes = explode(PHP_EOL, $attributes);
                                                foreach ($explodes as $explode) {
                                                    $explode = explode("|", $explode);
                                                    echo '<li><h5>' . $explode[1] . '</h5><p> ' . $explode[2] . '</p></li>';
                                                }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php }
                        }
                    } ?>
                <div class='comparison-characteristics product-characteristics'>
                    <ul>
                        <li>
                            <h5>Тип кондиционера</h5>
                            <p>
                                настенный
                                <span>настенный</span>
                            </p>
                        </li>
                        <li>
                            <h5>Производитель</h5>
                            <p>
                                C&H
                                <span>C&H</span>
                            </p>
                        </li>
                        <li>
                            <h5>Модель</h5>
                            <p>
                                C&H CH-S07XP7
                                <span>C&H CH-S07XP7</span>
                            </p>
                        </li>
                        <li>
                            <h5>Серия</h5>
                            <p>
                                AIR MASTER PLUS
                                <span>AIR MASTER PLUS</span>
                            </p>
                        </li>
                        <li>
                            <h5>Рекомендованная площадь помещения,м²</h5>
                            <p>
                                20
                                <span>20</span>
                            </p>
                        </li>
                        <li>
                            <h5>Тип хладагента</h5>
                            <p>
                                410А
                                <span>410А</span>
                            </p>
                        </li>
                        <li>
                            <h5>Холодопроизводительность (кВт)</h5>
                            <p>
                                2.26
                                <span>2.26</span>
                            </p>
                        </li>
                        <li>
                            <h5>Теплопроизводительность (кВт)</h5>
                            <p>
                                2.43
                                <span>2.43</span>
                            </p>
                        </li>
                        <li>
                            <h5>Потребляемая мощность (кВт)</h5>
                            <p>
                                0.69
                                <span>0.69</span>
                            </p>
                        </li>
                        <li>
                            <h5>EER/COP</h5>
                            <p>
                                3,28/3,68
                                <span>3,28/3,68</span>
                            </p>
                        </li>
                        <li>
                            <h5>SEER(CLASS)/SCOP (CLASS)</h5>
                            <p>
                                A
                                <span>A</span>
                            </p>
                        </li>
                        <li>
                            <h5>Цвет</h5>
                            <p>
                                белый
                                <span>белый</span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
