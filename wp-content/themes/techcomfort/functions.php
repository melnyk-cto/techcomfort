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

    add_theme_support( 'menus' );

    function init_navigation() {
        register_nav_menus(
            array(
                'main_menu' => esc_html__('Главное меню', 'orion'),
            )
        );
    }
    add_action('init', 'init_navigation');