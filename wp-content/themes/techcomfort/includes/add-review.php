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

            $post_data = array(
                'post_author' => get_current_user_id(),  # нужно для фильтрации в личном кабинете
                'post_status' => 'publish', # Статус создаваемой записи.
                'post_type' => 'reviews',   # тип записи - «Отзывы»
                'post_title' => $form_first . ' ' . $form_last . ' (' . $form_product . '), звезд - ' . $form_rating,   # заголовок отзыва
                'post_content' => $form_message,   # текст отзыва
            );

            // Вставляем запись в базу данных
            $post_id = wp_insert_post($post_data);

            // Добавляем остальные поля
            update_field('reviews_first-name', $form_first, $post_id);      # имя
            update_field('reviews_last-name', $form_last, $post_id);      # фамилия
            update_field('reviews_rating', $form_rating, $post_id);      # рейтинг
            update_field('reviews_advantages', $form_advantages, $post_id);      # достоинства
            update_field('reviews_disadvantages', $form_disadvantages, $post_id);      # недостатки
            update_field('reviews_tel', $form_tel, $post_id);      # телефон
            update_field('reviews_product', $form_product, $post_id);      # телефон
            $message_success = 'Ваш отзыв успешно добавлен';
        }

        // Удаление отзыва
        if ($_POST['type'] == 'delete') {
            $id = sanitize_text_field($_POST['id']);
            $reviewsArgs = ['post_type' => 'reviews', 'nopaging' => true];
            $reviews = new WP_Query ($reviewsArgs);
            wp_delete_post($id, true);
            $message_success = 'Ваш отзыв успешно удален';
        }

        // Отправляем сообщение об успешной отправке
        wp_send_json_success($message_success);
    }
