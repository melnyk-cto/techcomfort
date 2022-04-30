<?php
    add_action('wp_ajax_ajax_form_action_reviews', 'ajax_action_callback_reviews');
    add_action('wp_ajax_nopriv_ajax_form_action_reviews', 'ajax_action_callback_reviews');

    function ajax_action_callback_reviews() {
        // Если не прошла проверка nonce, то блокируем отправку
        if (!wp_verify_nonce($_POST['nonce'], 'ajax-form-nonce')) {
            wp_die('Данные отправлены с некорректного адреса');
        }

        // Добавление отзыва
        if ($_POST['type'] == 'add') {
            $form_first = sanitize_text_field($_POST['form_first']);
            $form_last = sanitize_text_field($_POST['form_last']);
            $form_rating = sanitize_text_field($_POST['form_rating']);
            $form_message = sanitize_text_field($_POST['form_message']);
            $form_advantages = sanitize_text_field($_POST['form_advantages']);
            $form_disadvantages = sanitize_text_field($_POST['form_disadvantages']);
            $form_tel = sanitize_text_field($_POST['form_tel']);
            $form_product = sanitize_text_field($_POST['form_product']);
            $form_email = sanitize_text_field($_POST['form_email']);


            $post_data_comment = array(
                'comment_post_ID' => $form_product,
                'comment_author' => $form_first . ' ' . $form_last,
                'comment_author_email' => $form_email,
                'comment_content' => $form_message,
                'comment_type' => 'review',
                'comment_parent' => 0,
                'comment_author_IP' => '',
                'comment_agent' => '',
                'user_id' => get_current_user_id(),
                'comment_date' => null,
                'comment_approved' => 0,
                'comment_field' => $form_tel,
            );

            $comment_id = wp_insert_comment($post_data_comment);

            // Добавляем остальные поля
            update_comment_meta($comment_id, 'phone', $form_tel);
            update_comment_meta($comment_id, 'advantages', $form_advantages);
            update_comment_meta($comment_id, 'disadvantages', $form_disadvantages);
            update_comment_meta($comment_id, 'rating', $form_rating);

            // Обновляем статус, что бы обновился рейтинг
            $update_comment = ['comment_ID' => $comment_id, 'comment_approved' => 1];
            wp_update_comment($update_comment);

            $message_success = 'Ваш отзыв успешно добавлен';
        }

        // Удаление отзыва
        if ($_POST['type'] == 'delete') {
            $id = sanitize_text_field($_POST['id']);
            wp_delete_comment($id, true);
            $message_success = 'Ваш отзыв успешно удален';
        }

        // Отправляем сообщение об успешной отправке
        wp_send_json_success($message_success);
    }
