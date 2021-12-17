<?php /* Template Name: Page - Catalog */ ?>
<?php get_header();

    wp_enqueue_style('nouislider-css', get_stylesheet_directory_uri() . '/assets/lib/nouislider.css');

    wp_enqueue_script('filters-js', get_stylesheet_directory_uri() . '/assets/js/filters.js');
    wp_enqueue_script('catalog-js', get_stylesheet_directory_uri() . '/assets/js/catalog.js');
    wp_enqueue_script('nouislider-js', get_stylesheet_directory_uri() . '/assets/lib/nouislider.js');

    $args = array('post_type' => 'product', 'stock' => 1, 'orderby' => 'meta_value_num', 'order' => $_GET['type'], 'product_cat' => $_GET['category'],);

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
                <div class='filter'>
                    <div class='close close-filter'></div>
                    <?php
                        $metaQuery = [];
                        foreach ($_GET as $key => $values) {
                            if (isset($key)) {
                                var_dump($key);
                                // Фильтрация по цене
                                if ($key === 'price') {
                                    $explodeValue = explode(".", $values);
                                    array_push($metaQuery, ['key' => '_price', 'value' => array($explodeValue[0], $explodeValue[1]), 'type' => 'numeric', 'compare' => 'BETWEEN',]);

                                    // Фильтрация по диапазону значений
                                } else if (
                                    $key ===  str_replace(' ', '_', 'Холодопроизводительность (кВт)') ||
                                    $key ===  str_replace(' ', '_', 'Теплопроизводительность (кВт)')  ||
                                    $key ===  str_replace(' ', '_', 'Размеры внутреннего блока, Ш (мм)') ||
                                    $key ===  str_replace(' ', '_', 'Размеры внутреннего блока, В (мм)') ||
                                    $key === str_replace(' ', '_', 'Размеры внутреннего блока, Г (мм)') ||
                                    $key ===  str_replace(' ', '_', 'Минимальный уровень шума внутреннего блока, (ДБ)')
                                ) {
                                    $explodeValue = explode(".", $values);
                                    array_push($metaQuery, ['key' => $key, 'value' => [$explodeValue[0], $explodeValue[1] - 1], 'type' => 'numeric', 'compare' => 'BETWEEN',]);
                                    // Фильтрация по точному названию
                                } else if (
                                    $key === str_replace(' ', '_', 'Тип работы') ||
                                    $key === str_replace(' ', '_', 'Напряжение, частота, Фазы (В, Гц, ф)') ||
                                    $key ===  str_replace(' ', '_', 'Тип хладагента') ||
                                    $key === str_replace(' ', '_', 'Рекомендованная площадь помещения') ||
                                    $key === str_replace(' ', '_', 'Цвет') ||
                                    $key === str_replace(' ', '_', 'Тип компрессора') ||
                                    $key === str_replace(' ', '_', 'Работа на обогрев до, градусов C')
                                ) {
                                    array_push($metaQuery, ['key' => $key, 'value' => $values, 'compare' => 'LIKE',]);
                                }
                            }
                        };

                        $args['meta_query'] = array('relation' => 'AND', $metaQuery,);

                        $args['posts_per_page'] = -1;
                        $loop = new WP_Query($args);

                        $attributeArray = array();
                        while ($loop->have_posts()) :
                            $loop->the_post();
                            global $product;
                            $attributes = get_post_meta($loop->post->ID, '_global_attributes', true);
                            if (is_array($attributes)) {
                                foreach ($attributes as $attribute) {
                                    if (!empty($attribute[1])) {
                                        $formatKey = trim(preg_replace('/\s\s+/', '', str_replace("\n", "", $attribute[1])));
                                        $attributeArray[$attribute[0]][] = mb_strtolower($formatKey);
                                    }
                                }
                            } ?>
                        <?php endwhile; ?>
                    <?php wp_reset_query();
                        // Фильтрация по цене
                        $slider = false;
                        $key = 'Цена';
                        $maxValue = 500000;
                        $name = 'price';
                        include get_template_directory() . '/components/catalog/_filter-item-range.php'; ?>
                    <?php foreach ($attributeArray as $key => $values) {
                        $maxValue = round(max($values));
                        // Фильтрация по диапазону значений
                        if ($key === 'Холодопроизводительность (кВт)' ||
                            $key === 'Теплопроизводительность (кВт)' ||
                            $key === 'Размеры внутреннего блока, Ш (мм)' ||
                            $key === 'Размеры внутреннего блока, В (мм)' ||
                            $key === 'Размеры внутреннего блока, Г (мм)' ||
                            $key === 'Минимальный уровень шума внутреннего блока, (ДБ)'
                        )
                        {
                            $name = $key;
                            include get_template_directory() . '/components/catalog/_filter-item-range.php'; ?>
                        <!-- Фильтрация по точному названию -->
                        <?php } else {
                            // Убирает повторяющиеся значения из массива
                            $values_unique = (array_unique($values));
                            asort($values_unique);
                            include get_template_directory() . '/components/catalog/_filter-item-text.php'; ?>
                        <?php }
                    } ?>
                </div>
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
                                                <div class='rating'>
                                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                         width="14.137"
                                                         height="13.608"
                                                         viewBox="0 0 14.137 13.608">
                                                        <path id="Контур_2" data-name="Контур 2"
                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                              transform="translate(0 -9.569)" fill="#ffdc96" />
                                                    </svg>
                                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                         width="14.137"
                                                         height="13.608"
                                                         viewBox="0 0 14.137 13.608">
                                                        <path id="Контур_2" data-name="Контур 2"
                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                              transform="translate(0 -9.569)" fill="#ffdc96" />
                                                    </svg>
                                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                         width="14.137"
                                                         height="13.608"
                                                         viewBox="0 0 14.137 13.608">
                                                        <path id="Контур_2" data-name="Контур 2"
                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                              transform="translate(0 -9.569)" fill="#ffdc96" />
                                                    </svg>
                                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                         width="14.137"
                                                         height="13.608"
                                                         viewBox="0 0 14.137 13.608">
                                                        <path id="Контур_2" data-name="Контур 2"
                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                              transform="translate(0 -9.569)" fill="#ffdc96" />
                                                    </svg>
                                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                         width="14.137"
                                                         height="13.608"
                                                         viewBox="0 0 14.137 13.608">
                                                        <path id="Контур_2" data-name="Контур 2"
                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                              transform="translate(0 -9.569)" fill="#ffdc96" />
                                                    </svg>
                                                </div>
                                                <div class="description-wrapper">
                                                    <a href='<?php echo home_url('/'); ?>product/?uid=<?php the_id(); ?>'>
                                                        <?php the_title(); ?>
                                                    </a>
                                                    <div class='description-icons'>
                                                        <!--                                                <svg class='favorites' xmlns="http://www.w3.org/2000/svg" width="27"-->
                                                        <!--                                                     height="24.07"-->
                                                        <!--                                                     viewBox="0 0 27 24.07">-->
                                                        <!--                                                    <g id="Сгруппировать_2766" data-name="Сгруппировать 2766"-->
                                                        <!--                                                       transform="translate(1 -0.465)">-->
                                                        <!--                                                        <path id="Контур_714" data-name="Контур 714"-->
                                                        <!--                                                              d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"-->
                                                        <!--                                                              fill="none" stroke="#6b92b0" stroke-width="2"/>-->
                                                        <!--                                                    </g>-->
                                                        <!--                                                </svg>-->
                                                        <a href="javascript: void(0)"
                                                           onClick="window.open('https://twitter.com/intent/tweet?text=ТАЙТЛ_СТРАНИЦЫ. ОПИСАНИЕ. СССЫЛКА','sharer','status=0,toolbar=0,width=650,height=500');">
                                                            <svg class='share' enable-background="new 0 0 512 512"
                                                                 version="1.1"
                                                                 viewBox="0 0 512 512"
                                                                 xml:space="preserve"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                            <path fill='#B2C5D4'
                                                  d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z" />
                                            </svg>
                                                        </a>
                                                    </div>
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
                                                       class='btn'>Купить</a>
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
