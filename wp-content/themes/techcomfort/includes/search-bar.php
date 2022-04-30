<?php
    //---------------create js ajax for search
    function my_enqueue() {
        wp_register_script('loadajax-js', get_template_directory_uri() . '/assets/js/main.js', array(), 1, 1);
        wp_enqueue_script('loadajax-js');
        wp_localize_script('loadajax-js', 'my_ajax_object',
            array('ajax_url' => admin_url('admin-ajax.php')));
    }

    add_action('wp_enqueue_scripts', 'my_enqueue');

    // Ajax handling
    add_action('wp_ajax_search_filters', 'search_filters');
    add_action('wp_ajax_nopriv_search_filters', 'search_filters');

    function search_filters() {
        if (isset($_POST['data'])) {

            $data = $_POST['data']; // receive data from client
            $getposts = new WP_query();
            $getposts->query('post_type=product&post_status=publish&showposts=10&s=' . $data);
            global $wp_query;
            $wp_query->in_the_loop = true;
            while ($getposts->have_posts()) : $getposts->the_post();
                echo '<li><a href="' . home_url('/') . 'product/?uid=' . get_the_ID() . '">' . get_the_post_thumbnail() . get_the_title() . '</a></li>';
            endwhile;
            wp_reset_postdata();
            die();
        } else {
            echo '<li>Не найдено</li>';
        }
    }
