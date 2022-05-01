<?php
    add_action('wp_ajax_ajax_form_action_update_filter', 'ajax_action_callback_update_filter');
    add_action('wp_ajax_nopriv_ajax_form_action_update_filter', 'ajax_action_callback_update_filter');

    function ajax_action_callback_update_filter() {
        // Если не прошла проверка nonce, то блокируем отправку
        if (!wp_verify_nonce($_POST['nonce'], 'ajax-form-nonce')) {
            wp_die('Данные отправлены с некорректного адреса');
        }

        $order = sanitize_text_field($_POST['order']);
        $meta_key = sanitize_text_field($_POST['meta-key']);
        $url = sanitize_text_field($_POST['url']);
        $page = sanitize_text_field($_POST['page']);
        $searchParams = sanitize_text_field($_POST['search-params']);
        $category = sanitize_text_field($_POST['category']);
        $searchParams = $_POST['search-params'];

        $args = [
            'post_type' => 'product',
            'stock' => 1,
            'posts_per_page' => 9,
            'paged' => $page,
            'orderby' => 'meta_value_num',
            'meta_key' => $meta_key,
            'order' => $order,
            'product_cat' => $category,
        ];

        $metaQuery = [];
        foreach ($searchParams as $key => $values) {
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

        $args['meta_query'] = [
            'relation' => 'AND',
            $metaQuery
        ];

        $the_query = new WP_Query($args);
        $response = '';
        $pagination = '';
        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) : $the_query->the_post();
                $response = include get_stylesheet_directory() . '/components/catalog/_catalog-item.php';
            endwhile;
            wp_reset_postdata(); // "сброс"

            $pagination = '<div class="pagination">' . paginate_links([
                    'base' => str_replace('pagination-page=custom', 'pagination-page=%#%', $url),
                    'current' => $page,
                    'total' => $the_query->max_num_pages
                ]) . '</div>';
        } else {
            $response .= '<h3 class="no-products">Нет товар по указанном фильтре</h3>';
            $pagination .= '';
        }
        echo $response;
        echo $pagination;
        exit;
    }
