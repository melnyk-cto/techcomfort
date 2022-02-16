<?php /* Template Name: Page - Catalog */ ?>
<?php get_header();

    wp_enqueue_style('nouislider-css', get_stylesheet_directory_uri() . '/assets/lib/nouislider.css');

    wp_enqueue_script('filters-js', get_stylesheet_directory_uri() . '/assets/js/filters.js');
    wp_enqueue_script('catalog-js', get_stylesheet_directory_uri() . '/assets/js/catalog.js');
    wp_enqueue_script('nouislider-js', get_stylesheet_directory_uri() . '/assets/lib/nouislider.js');
?>

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

<!-- Get Products -->
<?php
    $args = array(
        'post_type' => 'product',
        'stock' => 1,
        'orderby' => 'meta_value_num',
        'order' => $_GET['type'],
        'product_cat' => $_GET['category'],
    );

    // Значения сортировки по умолчанию
    if ($_GET['type']) {
        $args['order'] = $_GET['type'];
    } else {
        $args['order'] = 'ASC';
    }

    $metaQuery = [];
    foreach ($_GET as $key => $values) {
        if (isset($key)) {
            // Фильтрация по цене
            if ($key === 'Цена') {
                $explodeValue = explode(".", $values);
                array_push($metaQuery, ['key' => '_price', 'value' => array($explodeValue[0], $explodeValue[1]), 'type' => 'numeric', 'compare' => 'BETWEEN']);

                // Фильтрация по диапазону значений
            } else if (
                $key === str_replace(' ', '_', 'Холодопроизводительность (кВт)') ||
                $key === str_replace(' ', '_', 'Теплопроизводительность (кВт)') ||
                $key === str_replace(' ', '_', 'Размеры внутреннего блока, Ш (мм)') ||
                $key === str_replace(' ', '_', 'Размеры внутреннего блока, В (мм)') ||
                $key === str_replace(' ', '_', 'Размеры внутреннего блока, Г (мм)') ||
                $key === str_replace(' ', '_', 'Размеры наружного блока, Ш (мм)') ||
                $key === str_replace(' ', '_', 'Размеры наружного блока, В (мм)') ||
                $key === str_replace(' ', '_', 'Размеры наружного блока, Г (мм)') ||
                $key === str_replace(' ', '_', 'Минимальный уровень шума внутреннего блока, (ДБ)')
            ) {
                $explodeValue = explode(".", $values);
                array_push($metaQuery, ['key' => $key, 'value' => [$explodeValue[0], $explodeValue[1] - 1], 'type' => 'numeric', 'compare' => 'BETWEEN',]);
                // Фильтрация по точному названию
            } else if (
                $key === str_replace(' ', '_', 'Тип работы') ||
                $key === str_replace(' ', '_', 'Напряжение, частота, Фазы (В, Гц, ф)') ||
                $key === str_replace(' ', '_', 'Тип хладагента') ||
                $key === str_replace(' ', '_', 'Рекомендованная площадь помещения') ||
                $key === 'Цвет' ||
                $key === str_replace(' ', '_', 'Тип компрессора') ||
                $key === str_replace(' ', '_', 'Работа на обогрев до, градусов C') ||
                $key === str_replace(' ', '_', 'Уровень шума, дБ') ||
                $key === str_replace(' ', '_', 'Уровень звукового давления, дБА') ||
                $key === str_replace(' ', '_', 'Тип товара') ||
                $key === str_replace(' ', '_', 'Воздухообмен(м3/ч)') ||
                $key === str_replace(' ', '_', 'Размер патрубка(мм.)') ||
                $key === 'Производитель'
            ) {
                array_push($metaQuery, ['key' => $key, 'value' => str_replace('_', ' ', $values), 'compare' => '=',]);
            }
        }
    }

    $args['meta_query'] = [
        'relation' => 'AND',
        $metaQuery
    ];

    $args['posts_per_page'] = -1;
?>

<div class="loading">
    <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/loading.svg'
         alt=''>
</div>
<main class='catalog'>
    <section class='catalog-content'>
        <div class='container'>
            <!-- TODO: need delete -->
            <a href='?update_attributes=true' class="btn d-none">Update Attributes</a>
            <?php if (isset($_GET['update_attributes'])) {
                createAttributes();
            } ?>
            <?php $category = get_term_by('slug', $_GET['category'], 'product_cat'); ?>
            <h2 class="category-name"> <?php echo $category->name ?></h2>
            <div class='catalog-inner'>
                <?php include get_template_directory() . '/components/catalog/_filters.php'; ?>
                <div class='catalog-list'>
                    <div class='catalog-list-title'>
                        <button type='button' class='btn btn-filter'>
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/filter.svg'
                                 alt='Фильтр'>
                            <span>Фильтр</span>
                        </button>
                        <div class='sorting'>
                            <p>Сортировка:</p>
                            <label>
                                <select id="sorting">
                                    <option value='default'>По умолчанию</option>
                                    <option value="asc">От дешевых к дорогим</option>
                                    <option value="desc">От дорогих к дешевым</option>
                                    <option value="popularity">Популярные</option>
                                </select>
                            </label>
                        </div>
                        <div class='catalog-buttons'>
                            <button type='button' class='btn-grid grid-js active'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="28.001" height="27.998"
                                     viewBox="0 0 28.001 27.998">
                                    <path id="Объединение_10" data-name="Объединение 10"
                                          d="M15107.249-4136a2,2,0,0,1-2-2v-5a2,2,0,0,1,2-2h5a2,2,0,0,1,2,2v5a2,2,0,0,1-2,2Zm-10,0a2,2,0,0,1-2-2v-5a2,2,0,0,1,2-2h5a2,2,0,0,1,2,2v5a2,2,0,0,1-2,2Zm-9,0a2,2,0,0,1-2-2v-5a2,2,0,0,1,2-2h4a2,2,0,0,1,2,2v5a2,2,0,0,1-2,2Zm19-10a2,2,0,0,1-2-2v-4a2,2,0,0,1,2-2h5a2,2,0,0,1,2,2v4a2,2,0,0,1-2,2Zm-10,0a2,2,0,0,1-2-2v-4a2,2,0,0,1,2-2h5a2,2,0,0,1,2,2v4a2,2,0,0,1-2,2Zm-9,0a2,2,0,0,1-2-2v-4a2,2,0,0,1,2-2h4a2,2,0,0,1,2,2v4a2,2,0,0,1-2,2Zm19-9a2,2,0,0,1-2-2v-5a2,2,0,0,1,2-2h5a2,2,0,0,1,2,2v5a2,2,0,0,1-2,2Zm-10,0a2,2,0,0,1-2-2v-5a2,2,0,0,1,2-2h5a2,2,0,0,1,2,2v5a2,2,0,0,1-2,2Zm-9,0a2,2,0,0,1-2-2v-5a2,2,0,0,1,2-2h4a2,2,0,0,1,2,2v5a2,2,0,0,1-2,2Z"
                                          transform="translate(-15086.25 4163.999)" fill="#b2c5d4" />
                                </svg>
                            </button>
                            <button type='button' class='btn-list list-js'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="31.001" height="28"
                                     viewBox="0 0 31.001 28">
                                    <path id="Объединение_2" data-name="Объединение 2"
                                          d="M11412-269a2,2,0,0,1-2-2v-5a2,2,0,0,1,2-2h16a2,2,0,0,1,2,2v5a2,2,0,0,1-2,2Zm-11,0a2,2,0,0,1-2-2v-5a2,2,0,0,1,2-2h5a2,2,0,0,1,2,2v5a2,2,0,0,1-2,2Zm11-10a2,2,0,0,1-2-2v-4a2,2,0,0,1,2-2h16a2,2,0,0,1,2,2v4a2,2,0,0,1-2,2Zm-11,0a2,2,0,0,1-2-2v-4a2,2,0,0,1,2-2h5a2,2,0,0,1,2,2v4a2,2,0,0,1-2,2Zm11-9a2,2,0,0,1-2-2v-5a2,2,0,0,1,2-2h16a2,2,0,0,1,2,2v5a2,2,0,0,1-2,2Zm-11,0a2,2,0,0,1-2-2v-5a2,2,0,0,1,2-2h5a2,2,0,0,1,2,2v5a2,2,0,0,1-2,2Z"
                                          transform="translate(-11398.999 297.001)" fill="#6b92b0" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class='products'>
                        <div class='products-list'>
                            <?php
                                $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                                $args['posts_per_page'] = 48;
                                $args['paged'] = $paged;

                                // The Query
                                $cquery = new WP_Query($args);
                                $big = 999999999; // need an unlikely integer

                                $loop = new WP_Query($args);

                                if ($loop->have_posts()) {
                                    while ($loop->have_posts()) : $loop->the_post();
                                        global $product; ?>
                                        <div class='products-item catalog-item'>
                                            <a id="id-<?php the_id(); ?>"
                                               href="<?php echo home_url('/'); ?>product?uid=<?php the_id(); ?>"
                                               title="<?php the_title(); ?>" class='item-image'>
                                                <?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="product-image" />'; ?>
                                            </a>
                                            <div class='item-description'>
                                                <?php
                                                    $starsArray = $countProducts[$loop->post->ID];
                                                    $showCountsReviews = true;
                                                    $sumReviews = 0;
                                                    if ($starsArray) {
                                                        if (count($starsArray) > 0) {
                                                            $sumReviews = round((array_sum($starsArray) / count($starsArray)));
                                                        }
                                                    }
                                                    include get_template_directory() . '/components/_rating.php'; ?>
                                                <div class="description-wrapper">
                                                    <a href='<?php echo home_url('/'); ?>product/?uid=<?php the_id(); ?>'>
                                                        <?php the_title(); ?>
                                                    </a>
                                                    <?php
                                                        $postId = $loop->post->ID;
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
                            <?php wp_reset_query(); ?>
                            <div class="pagination">
                                <?php echo paginate_links(array('base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))), 'format' => '?paged=%#%', 'current' => max(1, get_query_var('paged')), 'total' => $cquery->max_num_pages));; ?>
                            </div>
                        </div>
                    </div>
                    <?php include get_template_directory() . '/components/_viewed-products.php'; ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
