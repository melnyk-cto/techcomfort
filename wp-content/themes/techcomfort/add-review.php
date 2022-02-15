<?php
    add_action('wp_ajax_ajax_form_action_reviews', 'ajax_action_callback_reviews');
    add_action('wp_ajax_nopriv_ajax_form_action_reviews', 'ajax_action_callback_reviews');

    function ajax_action_callback_reviews() {
        // Если не прошла проверка nonce, то блокируем отправку
        if (!wp_verify_nonce($_POST['nonce'], 'ajax-form-nonce')) {
            wp_die('Данные отправлены с некорректного адреса');
        }

        $form_first = sanitize_text_field($_POST['form_first']);
        $form_last = sanitize_text_field($_POST['form_last']);
        $form_rating = sanitize_text_field($_POST['form_rating']);
        $form_tel = sanitize_text_field($_POST['form_tel']);
        $form_email = sanitize_text_field($_POST['form_email']);
        $form_message = sanitize_text_field($_POST['form_message']);

        $post_data = array(
            'post_author' => get_current_user_id(),
            'post_status' => 'publish', # Статус создаваемой записи.
            'post_type' => 'reviews',   # тип записи - «Отзывы»
            'post_title' => 'Отзыв от - ' . $form_first . ' ' . $form_last . ', Количество звезд - ' . $form_rating,  # заголовок отзыва
            'post_content' => $form_message,   # текст отзыва
   );

        // Вставляем запись в базу данных
        $post_id = wp_insert_post($post_data);

        // Добавляем остальные поля
        update_field('rejting', $form_rating, $post_id); # рейтинг
        update_field('form_first', $form_first, $post_id);      # имя
        update_field('form_last', $form_first, $post_id);      # имя
        update_field('form_tel', $form_tel, $post_id);      # телефон

        // Отправляем сообщение об успешной отправке
        $message_success = 'Ваш отзыв успешно добавлен';
        wp_send_json_success($message_success);
    }
