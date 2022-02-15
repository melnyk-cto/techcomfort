<?php
    add_action('wp_enqueue_scripts', 'my_scripts');
    function my_scripts() {
        wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/assets/css/main.css');
        wp_enqueue_style('swiper-css', get_stylesheet_directory_uri() . '/assets/lib/swiper.css');

        wp_enqueue_script('swiper-js', get_stylesheet_directory_uri() . '/assets/lib/swiper.js');
        wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/assets/js/main.js');
        wp_enqueue_script("jquery");
    }

    //    register_nav_menus(array(
    //        'top'    => 'Верхнее меню',    //Название месторасположения меню в шаблоне
    //    ));

    //     ACF
    if (function_exists('acf_add_options_page')) {
        // Register options page.
        $parent = acf_add_options_page(array('page_title' => __('Основная информация на сайте'), 'menu_title' => __('General Sections'),));
    }

    add_theme_support('woocommerce');

    add_theme_support('menus');

    function init_navigation() {
        register_nav_menus(array('main_menu' => esc_html__('Главное меню', 'orion'),));
    }

    add_action('init', 'init_navigation');


    function get_product_by_sku($sku) {
        global $wpdb;
        $product_id = $wpdb->get_var($wpdb->prepare("SELECT post_id FROM $wpdb->postmeta WHERE meta_key='_sku' AND meta_value='%s' LIMIT 1", $sku));
        if ($product_id) return new WC_Product($product_id);
        return null;
    }

    // Добавление Custom Attributes
    register_taxonomy('product_cat', array('product'), array());
    function saveAttributes($attributes, $post, $globalAttributes, $filtersName) {
        // Сохранение атрибутов для продукта в качестве мета ключей
        foreach ($attributes as $attribute) {
            $attributeArray = explode("|", $attribute);
            $attributeWithoutSymbols = str_replace(':', '', $attributeArray[1]);
            foreach ($filtersName as $name) {
                if ($attributeWithoutSymbols === $name) {
                    if ($name === "Размеры внутреннего блока, (мм) Ш/В/Г" || $name === "Размеры наружного блока, (мм) Ш/В/Г") {
                        if ($name === "Размеры внутреннего блока, (мм) Ш/В/Г") {
                            $type = 'внутреннего';
                        } else {
                            $type = 'наружного';
                        }
                        // Нужно разделить три значения 000x000x000 на три отдельных числа
                        $haystack = $attributeArray[2];
                        $needle = 'х';
                        $pos = strripos($haystack, $needle);
                        if ($pos === false) {
                            $needle = 'x';
                            $pos = strripos($haystack, $needle);
                            if ($pos === false) {
                                $needle = 'X';
                                $pos = strripos($haystack, $needle);
                                if ($pos === false) {
                                    $explodeValue = explode("-", $attributeArray[2]);
                                } else {
                                    $explodeValue = explode("X", $attributeArray[2]);
                                }
                            } else {
                                $explodeValue = explode("x", $attributeArray[2]);
                            }
                        } else {
                            $explodeValue = explode("х", $attributeArray[2]);
                        }

                        if (strlen($explodeValue[0]) <= 4 && strlen($explodeValue[1]) <= 4 && strlen($explodeValue[2]) <= 4) {
                            array_push($globalAttributes, ['Размеры ' . $type . ' блока, Ш (мм)', $explodeValue[0]]);
                            array_push($globalAttributes, ['Размеры ' . $type . ' блока, В (мм)', $explodeValue[1]]);
                            array_push($globalAttributes, ['Размеры ' . $type . ' блока, Г (мм)', $explodeValue[2]]);
                            update_post_meta($post->ID, (str_replace(' ', '_', 'Размеры ' . $type . ' блока, Ш (мм)')), $explodeValue[0]);
                            update_post_meta($post->ID, (str_replace(' ', '_', 'Размеры ' . $type . ' блока, В (мм)')), $explodeValue[1]);
                            update_post_meta($post->ID, (str_replace(' ', '_', 'Размеры ' . $type . ' блока, Г (мм)')), $explodeValue[2]);
                        } else {
                            array_push($globalAttributes, ['Размеры ' . $type . ' блока, Ш (мм)', 0]);
                            array_push($globalAttributes, ['Размеры ' . $type . ' блока, В (мм)', 0]);
                            array_push($globalAttributes, ['Размеры ' . $type . ' блока, Г (мм)', 0]);
                            update_post_meta($post->ID, (str_replace(' ', '_', 'Размеры ' . $type . ' блока, Ш (мм)')), 0);
                            update_post_meta($post->ID, (str_replace(' ', '_', 'Размеры ' . $type . ' блока, В (мм)')), 0);
                            update_post_meta($post->ID, (str_replace(' ', '_', 'Размеры ' . $type . ' блока, Г (мм)')), 0);

                        }
                    } else {
                        array_push($globalAttributes, [$attributeWithoutSymbols, $attributeArray[2]]);
                        update_post_meta($post->ID, (str_replace(' ', '_', $attributeWithoutSymbols)), $attributeArray[2]);
                    }
                }
            }
        }
        // Get Tags
        array_push($globalAttributes, ['Производитель', $post->post_excerpt]);
        update_post_meta($post->ID, 'Производитель', $post->post_excerpt);

        // Сохранение атрибутов для фильтрации
        update_post_meta($post->ID, '_global_attributes', $globalAttributes);
    }

    function createAttributes() {
        $args = array('post_type' => 'product', 'posts_per_page' => -1);
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();
            $removedGroup = [];
            if (!empty($loop->post->post_content)) {
                $attributes = $loop->post->post_content;
                // Возвращает массив строк, полученных разбиением строки string с использованием separator в качестве разделителя.
                $separatedBySpaceAttributes = explode(PHP_EOL, $attributes);


                // Get category
                $terms = get_the_terms($loop->post->ID, 'product_cat');
                if (is_array($terms) && !empty($terms)) {
                    foreach ($terms as $term) {

                        // Берем родительскую категорию
                        $parentCategoryId = $term->parent;
                        $parentProductCat = get_term_by('term_taxonomy_id', $parentCategoryId, 'product_cat');
                        $parentCategoryNAme = $parentProductCat->name;
                        $globalAttributes = [];

                        // Определяем какие атрибуты показывать в зависимости от категории
                        if ($parentCategoryNAme === 'Уценка') {
                            $filtersName = ['Тип работы', 'Рекомендованная площадь помещения', 'Тип хладагента', 'Работа на обогрев до, градусов C', 'Цвет', 'Тип компрессора'];
                            saveAttributes($separatedBySpaceAttributes, $loop->post, $globalAttributes, $filtersName);
                        } elseif ($parentCategoryNAme === 'Расходные материалы') {
                            $filtersName = ['Тип товара'];
                            saveAttributes($separatedBySpaceAttributes, $loop->post, $globalAttributes, $filtersName);
                        } elseif ($parentCategoryNAme === 'Кулеры воды') {
                            $filtersName = ['Тип охлаждения', 'Тип нагрева', 'Тип товара', 'Цвет'];
                            saveAttributes($separatedBySpaceAttributes, $loop->post, $globalAttributes, $filtersName);
                        } elseif ($parentCategoryNAme === 'Микроклимат') {
                            $filtersName = ['Рекомендованная площадь ', 'Цвет', 'Тип товара'];
                            saveAttributes($separatedBySpaceAttributes, $loop->post, $globalAttributes, $filtersName);
                        } elseif ($parentCategoryNAme === 'Вентиляторы вытяжные') {
                            $filtersName = ['Размер патрубка(мм.)', 'Воздухообмен(м3/ч)', 'Монтаж', 'Цвет'];
                            saveAttributes($separatedBySpaceAttributes, $loop->post, $globalAttributes, $filtersName);
                        } elseif ($parentCategoryNAme === 'Приточно-вытяжные установки') {
                            $filtersName = ['Расход воздуха, м3/ч'];
                            saveAttributes($separatedBySpaceAttributes, $loop->post, $globalAttributes, $filtersName);
                        } elseif ($parentCategoryNAme === 'Отопительная техника' || $parentCategoryNAme === 'Мультизональные VRF, VRV системы') {
                            $filtersName = ['Цвет'];
                            saveAttributes($separatedBySpaceAttributes, $loop->post, $globalAttributes, $filtersName);
                        } elseif ($parentCategoryNAme === 'Кондиционеры') {
                            $filtersName = ['Тип работы', 'Холодопроизводительность (кВт)', 'Теплопроизводительность (кВт)',
                                'Напряжение, частота, Фазы (В, Гц, ф)', 'Тип хладагента', 'Рекомендованная площадь помещения',
                                'Размеры внутреннего блока, (мм) Ш/В/Г', 'Размеры наружного блока, (мм) Ш/В/Г', 'Цвет',
                                'Тип компрессора', 'Работа на обогрев до, градусов C', 'Уровень шума, дБ',
                                'Минимальный уровень шума внутреннего блока, (ДБ)', 'Макс. к-во подключаемых внутренних блоков',
                                'Общая площадь помещений (м2)', 'Количество комнат', 'Площадь комнаты №1(м2)', 'Площадь комнаты №2(м2)',
                                'Площадь комнаты №3(м2)', 'Уровень звукового давления, дБА'];
                            saveAttributes($separatedBySpaceAttributes, $loop->post, $globalAttributes, $filtersName);
                        }
                    }
                }
            }
        endwhile;
    }

    // createAttributes();


    //  Обновление информации в аккаунте пользователя
    require_once get_stylesheet_directory() . '/includes/update-user.php';

    /** Новый тип записи - «Отзывы» **/
    add_action('init', 'register_post_type_reviews');
    function register_post_type_reviews() {
        register_post_type('reviews', array(
            'label' => null,
            'labels' => [
                'name' => 'Отзывы',
                'singular_name' => 'Отзыв',
                'add_new' => 'Добавить отзыв',
                'add_new_item' => 'Добавление отзыва',
                'edit_item' => 'Редактирование отзыва',
                'new_item' => 'Новый отзыв',
                'view_item' => 'Смотреть отзыв',
                'search_items' => 'Искать отзывы',
                'not_found' => 'Не найдено',
                'not_found_in_trash' => 'Не найдено в корзине',
                'menu_name' => 'Отзывы',
            ],
            'description' => 'Отзывы',
            'exclude_from_search' => false,
            'public' => true,
            'capability_type' => 'page',
            'hierarchical' => false,
            'show_in_menu' => null,
            'show_in_rest' => null,
            'rest_base' => null,
            'menu_position' => null,
            'menu_icon' => 'dashicons-format-status',
            'supports' => [
                'title',
                'editor',
            ],
            'has_archive' => false,
            'rewrite' => true,
            'query_var' => true,
        ));
    }

    /** Уведомления о новых неопубликованных отзывах **/
    add_action('admin_menu', 'add_user_menu_bubble');
    function add_user_menu_bubble() {
        global $menu;

        $count = wp_count_posts('reviews')->pending; # на утверждении
        if ($count) {
            foreach ($menu as $key => $value) {
                if ($menu[$key][2] == 'edit.php?post_type=reviews') {
                    $menu[$key][0] .= '<span class="awaiting-mod"><span class="pending-count">' . $count . '</span></span>';
                    break;
                }
            }
        }
    }

    //  Обновление информации в аккаунте пользователя
    require_once get_stylesheet_directory() . '/includes/add-review.php';