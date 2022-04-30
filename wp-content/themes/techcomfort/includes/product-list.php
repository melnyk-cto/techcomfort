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

        $args = [
            'post_type' => 'product',
            'stock' => 1,
            'posts_per_page' => 9,
            'paged' => $page,
            'orderby' => 'meta_value_num',
            'meta_key' => $meta_key,
            'order' => $order,
            'product_cat' => "настенные-кондиционеры",
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
