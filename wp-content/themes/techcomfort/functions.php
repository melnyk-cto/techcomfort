<?php
    add_action('wp_enqueue_scripts', 'my_scripts');
    function my_scripts() {
        wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/assets/css/main.css');
        wp_enqueue_style('swiper-css', get_stylesheet_directory_uri() . '/assets/lib/swiper.css');

        wp_enqueue_script('swiper-js', get_stylesheet_directory_uri() . '/assets/lib/swiper.js');
        wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/assets/js/main.js');
    }

    //    register_nav_menus(array(
    //        'top'    => 'Верхнее меню',    //Название месторасположения меню в шаблоне
    //    ));

    //     ACF
    if (function_exists('acf_add_options_page')) {
        // Register options page.
        $parent = acf_add_options_page(array(
            'page_title' => __('Основная информация на сайте'),
            'menu_title' => __('General Sections'),
        ));
    }

    add_theme_support('woocommerce');

    add_theme_support('menus');

    function init_navigation() {
        register_nav_menus(
            array(
                'main_menu' => esc_html__('Главное меню', 'orion'),
            )
        );
    }

    add_action('init', 'init_navigation');


    function get_product_by_sku( $sku ) {
        global $wpdb;
        $product_id = $wpdb->get_var( $wpdb->prepare( "SELECT post_id FROM $wpdb->postmeta WHERE meta_key='_sku' AND meta_value='%s' LIMIT 1", $sku ) );
        if ( $product_id ) return new WC_Product( $product_id );
        return null;
    }

    // Добавление Custom Attributes
//    $args = array('post_type' => 'product', 'posts_per_page' => -1);
//    $loop = new WP_Query($args);
//    while ($loop->have_posts()) : $loop->the_post();
//        if (!empty($loop->post->post_content)) {
//            $attributes = $loop->post->post_content;
//            $explodes = explode(PHP_EOL, $attributes);
//            foreach ($explodes as $explode) {
//                $explode = explode("|", $explode);
//                update_post_meta($loop->post->ID, str_replace(' ', '_', $explode[1]), $explode[2]);
//            }
//        }
//    endwhile;

    ini_set('memory_limit', '500M');