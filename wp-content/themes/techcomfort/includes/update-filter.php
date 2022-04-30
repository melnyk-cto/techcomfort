<?php
    add_action('wp_ajax_ajax_form_action_update_filter', 'ajax_action_callback_update_filter');
    add_action('wp_ajax_nopriv_ajax_form_action_update_filter', 'ajax_action_callback_update_filter');

    function ajax_action_callback_update_filter() {
        // Если не прошла проверка nonce, то блокируем отправку
        if (!wp_verify_nonce($_POST['nonce'], 'ajax-form-nonce')) {
            wp_die('Данные отправлены с некорректного адреса');
        }

        $args = array(
            'post_type' => 'product',
            'stock' => 1,
            'orderby' => 'meta_value_num',
            // 'order' => "asc",
            // 'product_cat' => "настенные-кондиционеры",
        );
        $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
        $args['posts_per_page'] = 48;

        // The Query
        $pQuery = new WP_Query($args);
        $big = 999999999; // need an unlikely integer

        $loop = new WP_Query($args);
        $response = '';


        if ($loop->have_posts()) {
            while ($loop->have_posts()) : $loop->the_post();
                $response = include get_stylesheet_directory() . '/components/catalog/_catalog-item.php';
            endwhile;
        } else {
            $response .= '<h3 class="no-products">Нет товар по указанном фильтре</h3>';
        }

        echo $response;
        exit;
    }
