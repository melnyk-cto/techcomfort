<?php /* Template Name: Page - Comparison */ ?>
<?php get_header(); ?>
<main class='comparison'>
    <section class='comparison-content'>
        <div class='container'>
            <h2>Сравнение</h2>
            <div class='comparison-inner'>
                <?php $cookie = $_COOKIE['compareArray'];
                    if ($cookie) {
                        $compareProducts = explode(',', $cookie); ?>
                        <div class='comparison-product'>
                            <?php foreach ($compareProducts as $i => $product) {
                                $_product = wc_get_product($product);
                                if ($_product) { ?>
                                    <div class='product-item'>
                                        <img data-id='<?php echo $_product->get_id() ?>'
                                             class="close comparison-close-js"
                                             src="<?php echo get_template_directory_uri() ?>/assets/images/icons/close.svg"
                                             alt="">
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
                                <?php }
                            } ?>
                        </div>
                        <div class='product-characteristics'>
                            <ul>
                                <?php
                                    $titles = [
                                        'Расход воздуха, м3/ч', 'Размер патрубка(мм.)', 'Воздухообмен(м3/ч)', 'Монтаж', 'Тип нагрева', 'Тип охлаждения', 'Тип товара', 'Тип работы', 'Холодопроизводительность (кВт)', 'Теплопроизводительность (кВт)',
                                        'Напряжение, частота, Фазы (В, Гц, ф)', 'Тип хладагента', 'Рекомендованная площадь помещения',
                                        'Размеры внутреннего блока, (мм) Ш/В/Г', 'Размеры наружного блока, (мм) Ш/В/Г', 'Цвет',
                                        'Тип компрессора', 'Работа на обогрев до, градусов C', 'Уровень шума, дБ',
                                        'Минимальный уровень шума внутреннего блока, (ДБ)', 'Макс. к-во подключаемых внутренних блоков',
                                        'Общая площадь помещений (м2)', 'Количество комнат', 'Площадь комнаты №1(м2)', 'Площадь комнаты №2(м2)',
                                        'Площадь комнаты №3(м2)', 'Уровень звукового давления, дБА'
                                    ];

                                    foreach ($titles as $title) {
                                        include get_template_directory() . '/components/comparison/_characteristics-item.php';
                                    }
                                ?>
                            </ul>
                        </div>
                    <?php } else echo '<h3>Нет товаров для сравнения</h3>' ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
