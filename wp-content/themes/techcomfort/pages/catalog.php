<?php /* Template Name: Page - Catalog */ ?>
<?php get_header(); ?>
<?php
    wp_enqueue_style('nouislider-css', get_stylesheet_directory_uri() . '/assets/lib/nouislider.css');

    wp_enqueue_script('filters-js', get_stylesheet_directory_uri() . '/assets/js/filters.js');
    wp_enqueue_script('catalog-js', get_stylesheet_directory_uri() . '/assets/js/catalog.js');
    wp_enqueue_script('nouislider-js', get_stylesheet_directory_uri() . '/assets/lib/nouislider.js');
?>


<?php
    $args = array(
        'post_type' => 'product',
        'stock' => 1,
        'orderby' => 'meta_value_num',
        'meta_key' => '_price',
        'order' => $_GET['type'],
        'product_cat' => $_GET['category'],
    );

?>
<div class="loading">
    <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/loading.svg'
         alt=''>
</div>
<main class='catalog'>
    <section class='catalog-content'>
        <div class='container'>
            <?php $category = get_term_by('slug', $_GET['category'], 'product_cat'); ?>
            <h2 class="category-name"> <?php echo $category->name ?></h2>
            <div class='catalog-inner'>
                <div class='filter'>
                    <div class='filter-title'>
                        <h2>Фильтры</h2>
                        <div class='close close-filter'></div>
                    </div>
                    <form action=''>
                        <div class='price filter-item'>
                            <h5>Цена</h5>
                            <div class="style-2 wrapper m-b-50 p-l-r">
                                <div class='price-value'>
                                    <label>
                                        <input id="price-from" type="text" class="input-with-keypress-0 value">
                                    </label>
                                    <span></span>
                                    <label>
                                        <input type="text" class="input-with-keypress-1 value">
                                    </label>
                                    <button type='button' class='btn filler-price-js'>ок</button>
                                </div>
                                <div class="slider-keypress m-b-20"></div>
                            </div>
                        </div>
                        <?php
                            $metaQuery = [];
                            foreach ($_GET as $key => $values) {
                                if (isset($key)) {
                                    if ($key === 'from') {
                                        array_push($metaQuery, [
                                            'key' => '_price',
                                            'value' => $values,
                                            'compare' => '>=',
                                            'type' => 'numeric',
                                        ]);
                                    } else if ($key === 'to') {
                                        array_push($metaQuery, [
                                            'key' => '_price',
                                            'value' => $values,
                                            'compare' => '<=',
                                            'type' => 'numeric',
                                        ]);
                                    } else if ($key !== 'category' && $key !== 'type') {
                                        array_push($metaQuery, [
                                            'key' => $key,
                                            'value' => $values,
                                            'compare' => 'LIKE',
                                        ]);
                                    }
                                }
                            }
                            $args['meta_query'] = array(
                                'relation' => 'AND',
                                $metaQuery
                            );
                        ?>
                        <?php
                            $args['posts_per_page'] = -1;
                            $loop = new WP_Query($args);

                            $attributeArray = array();
                            while ($loop->have_posts()) :
                                $loop->the_post();
                                global $product;
                                $attributes = $product->get_description();
                                // Возвращает массив строк, полученных разбиением строки string с использованием separator в качестве разделителя
                                $explodes = explode(PHP_EOL, $attributes);
                                foreach ($explodes as $explode) {
                                    // Возвращает массив строк, полученных разбиением строки string с использованием separator в качестве разделителя
                                    $explode = explode("|", $explode);
                                    if (!empty($explode[2])) {
                                        $attributeArray[$explode[1]][] = mb_strtolower($explode[2]);
                                    }
                                }
                                ?>
                            <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                        <?php foreach ($attributeArray as $key => $values) {
                            echo "<div class='filter-item" . (!empty($compareValues) ? ' hide' : '') . "'>" . "<h5>$key</h5><div class='filter-labels'>";
                            // Убирает повторяющиеся значения из массива
                            $values_unique = array_unique($values);
                            foreach ($values_unique as $value) {
                                $formatKey = str_replace(' ', '_', $key);
                                $compareValues = array_intersect_assoc($_GET, array($formatKey => $value));
                                echo "<label class='filter-label-js' data-key=" . $formatKey . " data-value='$value'><input type='checkbox'";
                                if (!empty($compareValues)) echo " checked>";
                                if (empty($compareValues)) echo " >";
                                echo $value . "</label>";
                            }
                            echo "</div><span class='more show-all-js'>Показать все</span></div>";
                        }
                        ?>


                    </form>
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
                                          transform="translate(-15086.25 4163.999)" fill="#b2c5d4"/>
                                </svg>
                            </button>
                            <button type='button' class='btn-list list-js'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="31.001" height="28"
                                     viewBox="0 0 31.001 28">
                                    <path id="Объединение_2" data-name="Объединение 2"
                                          d="M11412-269a2,2,0,0,1-2-2v-5a2,2,0,0,1,2-2h16a2,2,0,0,1,2,2v5a2,2,0,0,1-2,2Zm-11,0a2,2,0,0,1-2-2v-5a2,2,0,0,1,2-2h5a2,2,0,0,1,2,2v5a2,2,0,0,1-2,2Zm11-10a2,2,0,0,1-2-2v-4a2,2,0,0,1,2-2h16a2,2,0,0,1,2,2v4a2,2,0,0,1-2,2Zm-11,0a2,2,0,0,1-2-2v-4a2,2,0,0,1,2-2h5a2,2,0,0,1,2,2v4a2,2,0,0,1-2,2Zm11-9a2,2,0,0,1-2-2v-5a2,2,0,0,1,2-2h16a2,2,0,0,1,2,2v5a2,2,0,0,1-2,2Zm-11,0a2,2,0,0,1-2-2v-5a2,2,0,0,1,2-2h5a2,2,0,0,1,2,2v5a2,2,0,0,1-2,2Z"
                                          transform="translate(-11398.999 297.001)" fill="#6b92b0"/>
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
                                                              transform="translate(0 -9.569)" fill="#ffdc96"/>
                                                    </svg>
                                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                         width="14.137"
                                                         height="13.608"
                                                         viewBox="0 0 14.137 13.608">
                                                        <path id="Контур_2" data-name="Контур 2"
                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                              transform="translate(0 -9.569)" fill="#ffdc96"/>
                                                    </svg>
                                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                         width="14.137"
                                                         height="13.608"
                                                         viewBox="0 0 14.137 13.608">
                                                        <path id="Контур_2" data-name="Контур 2"
                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                              transform="translate(0 -9.569)" fill="#ffdc96"/>
                                                    </svg>
                                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                         width="14.137"
                                                         height="13.608"
                                                         viewBox="0 0 14.137 13.608">
                                                        <path id="Контур_2" data-name="Контур 2"
                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                              transform="translate(0 -9.569)" fill="#ffdc96"/>
                                                    </svg>
                                                    <svg id="Сгруппировать" xmlns="http://www.w3.org/2000/svg"
                                                         width="14.137"
                                                         height="13.608"
                                                         viewBox="0 0 14.137 13.608">
                                                        <path id="Контур_2" data-name="Контур 2"
                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                              transform="translate(0 -9.569)" fill="#ffdc96"/>
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
                                                  d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z"/>
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
                                    echo '<h3 class="no-products">Нет товар по указаном фильтре</h3>';
                                }
                            ?>
                            <?php wp_reset_query(); ?>
                            <div class="pagination">
                                <?php echo paginate_links(array(
                                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                                    'format' => '?paged=%#%',
                                    'current' => max(1, get_query_var('paged')),
                                    'total' => $cquery->max_num_pages
                                ));; ?>
                            </div>
                        </div>
                    </div>
                    <?php $cookie = $_COOKIE['viewedProducts'];
                        if ($cookie) {
                            $viewedProducts = explode(',', $_COOKIE['viewedProducts']); ?>
                            <div class='products'>
                                <h2>Просмотренные товары</h2>
                                <div class='products-slider'>
                                    <div class='swiper-container swiper-products'>
                                        <div class='swiper-wrapper'>
                                            <?php foreach ($viewedProducts as $i => $product) {
                                                $_product = wc_get_product($product);
                                                if ($_product) { ?>
                                                    <div class='swiper-slide'>
                                                        <div class='products-item catalog-item'>
                                                            <a href='<?php echo home_url('/'); ?>product/?uid=<?php echo $product; ?>'
                                                               class='item-image'>
                                                                <?php echo $_product->get_image('1000') ?>
                                                            </a>
                                                            <div class='item-description'>
                                                                <div class='rating'>
                                                                    <svg id="Сгруппировать"
                                                                         xmlns="http://www.w3.org/2000/svg"
                                                                         width="14.137"
                                                                         height="13.608"
                                                                         viewBox="0 0 14.137 13.608">
                                                                        <path id="Контур_2" data-name="Контур 2"
                                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                                              transform="translate(0 -9.569)"
                                                                              fill="#ffdc96"/>
                                                                    </svg>
                                                                    <svg id="Сгруппировать"
                                                                         xmlns="http://www.w3.org/2000/svg"
                                                                         width="14.137"
                                                                         height="13.608"
                                                                         viewBox="0 0 14.137 13.608">
                                                                        <path id="Контур_2" data-name="Контур 2"
                                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                                              transform="translate(0 -9.569)"
                                                                              fill="#ffdc96"/>
                                                                    </svg>
                                                                    <svg id="Сгруппировать"
                                                                         xmlns="http://www.w3.org/2000/svg"
                                                                         width="14.137"
                                                                         height="13.608"
                                                                         viewBox="0 0 14.137 13.608">
                                                                        <path id="Контур_2" data-name="Контур 2"
                                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                                              transform="translate(0 -9.569)"
                                                                              fill="#ffdc96"/>
                                                                    </svg>
                                                                    <svg id="Сгруппировать"
                                                                         xmlns="http://www.w3.org/2000/svg"
                                                                         width="14.137"
                                                                         height="13.608"
                                                                         viewBox="0 0 14.137 13.608">
                                                                        <path id="Контур_2" data-name="Контур 2"
                                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                                              transform="translate(0 -9.569)"
                                                                              fill="#ffdc96"/>
                                                                    </svg>
                                                                    <svg id="Сгруппировать"
                                                                         xmlns="http://www.w3.org/2000/svg"
                                                                         width="14.137"
                                                                         height="13.608"
                                                                         viewBox="0 0 14.137 13.608">
                                                                        <path id="Контур_2" data-name="Контур 2"
                                                                              d="M14.137,14.767,9,14.429,7.065,9.569l-1.934,4.86L0,14.767l3.935,3.342L2.644,23.177l4.421-2.795,4.421,2.795L10.2,18.108Z"
                                                                              transform="translate(0 -9.569)"
                                                                              fill="#ffdc96"/>
                                                                    </svg>
                                                                </div>
                                                                <a href='<?php echo home_url('/'); ?>product/?uid=<?php echo $product; ?>'>
                                                                    <?php echo $_product->get_title() ?>
                                                                    <div class='description-icons'>
                                                                        <svg class='favorites'
                                                                             xmlns="http://www.w3.org/2000/svg"
                                                                             width="27"
                                                                             height="24.07" viewBox="0 0 27 24.07">
                                                                            <g id="Сгруппировать_2766"
                                                                               data-name="Сгруппировать 2766"
                                                                               transform="translate(1 -0.465)">
                                                                                <path id="Контур_714"
                                                                                      data-name="Контур 714"
                                                                                      d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                                                                                      fill="none" stroke="#6b92b0"
                                                                                      stroke-width="2"/>
                                                                            </g>
                                                                        </svg>
                                                                        <svg class='share'
                                                                             enable-background="new 0 0 512 512"
                                                                             version="1.1"
                                                                             viewBox="0 0 512 512"
                                                                             xml:space="preserve"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill='#B2C5D4'
                                                  d="m406 332c-29.636 0-55.969 14.402-72.378 36.571l-141.27-72.195c2.37-8.052 3.648-16.567 3.648-25.376 0-11.931-2.339-23.324-6.574-33.753l148.06-88.958c16.52 19.39 41.104 31.711 68.514 31.711 49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90c0 11.47 2.161 22.443 6.09 32.54l-148.43 89.18c-16.508-18.818-40.719-30.72-67.66-30.72-49.626 0-90 40.374-90 90s40.374 90 90 90c30.122 0 56.832-14.876 73.177-37.666l140.86 71.985c-2.623 8.434-4.037 17.395-4.037 26.681 0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90zm0-302c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60zm-300 301c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60zm300 151c-33.084 0-60-26.916-60-60s26.916-60 60-60 60 26.916 60 60-26.916 60-60 60z"/>
                                        </svg>
                                                                    </div>
                                                                </a>
                                                                <span class='price'><?php echo $_product->get_price_html(); ?></span>
                                                                <div class='description-buttons'>
                                                                    <a href='<?php echo home_url('/'); ?>product/?uid=<?php echo $product; ?>'
                                                                       class='btn'>Купить</a>
                                                                    <a data-quantity="1"
                                                                       data-product_id="<?php echo $product; ?>"
                                                                       href='<?php echo home_url('/'); ?>?add-to-cart=<?php echo $product; ?>'
                                                                       class='btn btn-second product_type_simple add_to_cart_button ajax_add_to_cart'>
                                                                        В Корзину
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }
                                            } ?>
                                        </div>
                                        <div class='swiper-pagination'></div>
                                        <div class='swiper-button-prev'></div>
                                        <div class='swiper-button-next'></div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
