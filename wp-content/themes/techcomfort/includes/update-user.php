<?php
    add_action('wp_ajax_ajax_form_action', 'ajax_action_callback');
    add_action('wp_ajax_nopriv_ajax_form_action', 'ajax_action_callback');

    function ajax_action_callback() {

        // Массив ошибок
        $errors = [];

        // Если не прошла проверка nonce, то блокируем отправку
        if (!wp_verify_nonce($_POST['nonce'], 'ajax-form-nonce')) {
            wp_die('Данные отправлены с некорректного адреса');
        }

        // Проверяем поле имени, если пустое, то пишем сообщение в массив ошибок
        if (empty($_POST['form_first']) || !isset($_POST['form_first'])) {
            $errors['first'] = 'Пожалуйста, введите ваше Имя.';
        } else {
            $form_first = sanitize_text_field($_POST['form_first']);
        }

        // Проверяем поле Фамилии, если пустое, то пишем сообщение в массив ошибок
        if (empty($_POST['form_last']) || !isset($_POST['form_last'])) {
            $errors['last'] = 'Пожалуйста, введите Фамилию.';
        } else {
            $form_last = sanitize_text_field($_POST['form_last']);
        }

        $form_patronymic = sanitize_text_field($_POST['form_patronymic']);
        $form_address = sanitize_text_field($_POST['form_address']);

        // Проверяем поле Телефона, если пустое, то пишем сообщение в массив ошибок
        if (empty($_POST['form_tel']) || !isset($_POST['form_tel'])) {
            $errors['tel'] = 'Пожалуйста, введите телефон.';
        } else {
            $form_tel = sanitize_text_field($_POST['form_tel']);
        }

        // Проверяем поле email, если пустое, то пишем сообщение в массив ошибок
        if (empty($_POST['form_email']) || !isset($_POST['form_email'])) {
            $errors['email'] = 'Пожалуйста, введите email.';
        } else {
            $form_email = sanitize_text_field($_POST['form_email']);
        }

        // Проверяем массив ошибок, если не пустой, то передаем сообщение. Иначе отправляем письмо
        if ($errors) {
            wp_send_json_error($errors);
        } else {
            $user_id = get_current_user_id();
            delete_user_meta($user_id, 'user_registration_patronymic');
            delete_user_meta($user_id, 'user_registration_address');
            delete_user_meta($user_id, 'user_registration_phone');
            add_user_meta($user_id, 'user_registration_patronymic', $form_patronymic, true);
            add_user_meta($user_id, 'user_registration_address', $form_address, true);
            add_user_meta($user_id, 'user_registration_phone', $form_tel, true);

            wp_update_user([
                'ID' => $user_id,
                'first_name' => $form_first,
                'last_name' => $form_last,
                'user_email' => $form_email,
            ]);

            // Отправляем сообщение об успешной отправке
            $message_success = 'Ваши данные успешно обновлены';
            wp_send_json_success($message_success);
        }

        // Убиваем процесс ajax
        wp_die();

    }
