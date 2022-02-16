<?php
    add_action('wp_ajax_ajax_form_action_compare_favorite', 'ajax_action_callback_compare_favorite');
    add_action('wp_ajax_nopriv_ajax_form_action_compare_favorite', 'ajax_action_callback_compare_favorite');

    function ajax_action_callback_compare_favorite() {
        // Если не прошла проверка nonce, то блокируем отправку
        if (!wp_verify_nonce($_POST['nonce'], 'ajax-form-nonce')) {
            wp_die('Данные отправлены с некорректного адреса');
        }

        $form_type = sanitize_text_field($_POST['valueType']);
        $form_id = sanitize_text_field($_POST['id']);
        $userID = get_user_meta(get_current_user_id());

        // Нажатие на кнопку Избранное или Сравнение
        if ($form_type === 'favorites') {
            if (in_array($form_id, $userID['favorite'])) {
                delete_user_meta(get_current_user_id(), 'favorite', $form_id);
            } else {
                add_user_meta(get_current_user_id(), 'favorite', $form_id);
            }
        } elseif ($form_type === 'compare') {
            if (in_array($form_id, $userID['compare'])) {
                delete_user_meta(get_current_user_id(), 'compare', $form_id);
            } else {
                add_user_meta(get_current_user_id(), 'compare', $form_id);
            }
        }


        // Отправляем сообщение об успешной отправке
        $message_success = 'Ваш compare-favorite успешно обновлен';
        wp_send_json_success($message_success);
    }
