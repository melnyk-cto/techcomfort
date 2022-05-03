<?php
    add_action('wp_ajax_ajax_form_action_add_to_cart', 'ajax_action_add_to_cart');
    add_action('wp_ajax_nopriv_ajax_form_action_add_to_cart', 'ajax_action_add_to_cart');

    function ajax_action_add_to_cart() {
        // Если не прошла проверка nonce, то блокируем отправку
        if (!wp_verify_nonce($_POST['nonce'], 'ajax-form-nonce')) {
            wp_die('Данные отправлены с некорректного адреса');
        }
        $product_id = sanitize_text_field($_POST['product_id']);
        $type = sanitize_text_field($_POST['type']);
        $quantity = sanitize_text_field($_POST['quantity']);


        $product_cart_id = WC()->cart->generate_cart_id($product_id);
        $cart_item_key = WC()->cart->find_product_in_cart($product_cart_id);

        // Изменение количества продукта в корзине
        if ($type === 'quantity') {
            if ($quantity === '0') {
                if ($cart_item_key) WC()->cart->remove_cart_item($cart_item_key);
            } else {
                WC()->cart->set_quantity($cart_item_key, $quantity);
            }
        }

        // Добавление продукта в корзину
        if ($type === 'increase') {
            WC()->cart->add_to_cart($product_id);
        }

        // Удаление полностью продукта из корзины
        if ($type === 'remove') {
            if ($cart_item_key) WC()->cart->remove_cart_item($cart_item_key);
        }

        // получение корзины
        include get_stylesheet_directory() . '/components/_basket.php';
        exit;
    }
