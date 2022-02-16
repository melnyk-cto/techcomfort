<?php
    add_action('wp_ajax_ajax_form_action_compare_favorite', 'ajax_action_callback_compare_favorite');
    add_action('wp_ajax_nopriv_ajax_form_action_compare_favorite', 'ajax_action_callback_compare_favorite');

    function ajax_action_callback_compare_favorite() {
        // Если не прошла проверка nonce, то блокируем отправку
        if (!wp_verify_nonce($_POST['nonce'], 'ajax-form-nonce')) {
            wp_die('Данные отправлены с некорректного адреса');
        }

        $form_favorite = sanitize_text_field($_POST['favorite']);
        $form_compare = sanitize_text_field($_POST['compare']);
        $form_id = sanitize_text_field($_POST['id']);


        // Добавляем остальные поля
        update_post_meta($form_id, "compare", $form_compare);
        update_post_meta($form_id, "favorite", $form_favorite);

        // Отправляем сообщение об успешной отправке
        $message_success = 'Ваш compare-favorite успешно обновлен';
        wp_send_json_success($message_success);
    }
