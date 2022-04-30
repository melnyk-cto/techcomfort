<?php /* Template Name: Page - Catalog */ ?>
<?php get_header();

    wp_enqueue_style('nouislider-css', get_stylesheet_directory_uri() . '/assets/lib/nouislider.css');

    wp_enqueue_script('filters-js', get_stylesheet_directory_uri() . '/assets/js/filters.js');
    wp_enqueue_script('catalog-js', get_stylesheet_directory_uri() . '/assets/js/catalog.js');
    wp_enqueue_script('nouislider-js', get_stylesheet_directory_uri() . '/assets/lib/nouislider.js');
?>

<!-- Get Products -->
<?php
    $metaQuery = [];
    foreach ($_GET as $key => $values) {
        if (isset($key)) {
            // Фильтрация по цене
            if ($key === 'Цена') {
                $explodeValue = explode(".", $values);
                array_push($metaQuery, ['key' => '_price', 'value' => array($explodeValue[0], $explodeValue[1]), 'type' => 'numeric', 'compare' => 'BETWEEN']);
            } else if (
                // Фильтрация по диапазону значений
                $key === str_replace(' ', '_', 'Макс_ к-во подключаемых внутренних блоков') ||
                $key === str_replace(' ', '_', 'Расход воздуха, м3/ч') ||
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
                if ($key === str_replace(' ', '_', 'Макс_ к-во подключаемых внутренних блоков')) {
                    array_push($metaQuery, ['key' => "Макс._к-во_подключаемых_внутренних_блоков", 'value' => [$explodeValue[0], $explodeValue[1] - 1], 'type' => 'numeric', 'compare' => 'BETWEEN',]);
                } else {
                    array_push($metaQuery, ['key' => $key, 'value' => [$explodeValue[0], $explodeValue[1] - 1], 'type' => 'numeric', 'compare' => 'BETWEEN',]);
                }
            } else if (
                // Фильтрация по точному названию
                $key === str_replace(' ', '_', 'Площадь комнаты №3(м2)') ||
                $key === str_replace(' ', '_', 'Площадь комнаты №2(м2)') ||
                $key === str_replace(' ', '_', 'Площадь комнаты №1(м2)') ||
                $key === str_replace(' ', '_', 'Количество комнат') ||
                $key === str_replace(' ', '_', 'Общая площадь помещений (м2)') ||
                $key === str_replace(' ', '_', 'Монтаж') ||
                $key === str_replace(' ', '_', 'Тип нагрева') ||
                $key === str_replace(' ', '_', 'Тип охлаждения') ||
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

    //    $args['meta_query'] = [
    //        'relation' => 'AND',
    //        $metaQuery
    //    ];

?>

<div class="loading">
    <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/loading.svg' alt=''>
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
                                    <option data-meta-key='_wc_review_count' data-order='desc' value='default' selected>
                                        По умолчанию
                                    </option>
                                    <option data-meta-key='_price' data-order='asc' value="price">
                                        От дешевых к дорогим
                                    </option>
                                    <option data-meta-key='_price' data-order='desc' value="price-desc">
                                        От дорогих к дешевым
                                    </option>
                                    <option data-meta-key='_wc_review_count' data-order='desc' value="popularity">
                                        Популярные
                                    </option>
                                    <option data-meta-key='_wc_average_rating' data-order='desc' value="rating">
                                        По рейтингу
                                    </option>
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
                        <!-- Товары -->
                        <div class='products-list'></div>
                    </div>
                    <?php include get_template_directory() . '/components/_viewed-products.php'; ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
