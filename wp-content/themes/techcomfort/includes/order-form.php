<?php
    // create js ajax for search
    function order_form_enqueue() {
        // Обработка полей формы
        wp_enqueue_script('jquery-form');
        wp_enqueue_script('ajax-order-form', get_theme_file_uri('/assets/js/order-form.js'), array('jquery'), 1.0, true);
        wp_localize_script('ajax-order-form', 'ajax_form_object', array(
            'url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('ajax-form-nonce'),
        ));
    }

    add_action('wp_enqueue_scripts', 'order_form_enqueue');

    // Ajax handling
    add_action('wp_ajax_ajax_form_action_order_form', 'ajax_action_callback_order_form');
    add_action('wp_ajax_nopriv_ajax_form_action_order_form', 'ajax_action_callback_order_form');

    function ajax_action_callback_order_form() {
        // Массив ошибок
        $errors = [];

        // Если не прошла проверка nonce, то блокируем отправку
        if (!wp_verify_nonce($_POST['nonce'], 'ajax-form-nonce')) {
            wp_die('Данные отправлены с некорректного адреса');
        }

        // Проверяем поле email, если пустое, то пишем сообщение в массив ошибок
        if (empty($_POST['form-first']) || !isset($_POST['form-first'])) {
            $errors['form-first'] = 'Пожалуйста, введите Имя';
        } else {
            $formFirst = sanitize_text_field($_POST['form-first']);
        }

        if (empty($_POST['form-last']) || !isset($_POST['form-last'])) {
            $errors['form-last'] = 'Пожалуйста, введите Фамилию';
        } else {
            $formLast = sanitize_text_field($_POST['form-last']);
        }

        if (empty($_POST['form-phone']) || !isset($_POST['form-phone'])) {
            $errors['form-phone'] = 'Пожалуйста, введите Телефон';
        } else {
            $formPhone = sanitize_text_field($_POST['form-phone']);
        }

        if (empty($_POST['form-email']) || !isset($_POST['form-email'])) {
            $errors['form-email'] = 'Пожалуйста, введите Email';
        } else {
            $formEmail = sanitize_text_field($_POST['form-email']);
        }

        // Проверяем массив ошибок, если не пустой, то передаем сообщение. Иначе отправляем письмо
        if ($errors) {
            wp_send_json_error($errors);

        } else {
            // Отправляем сообщение об успешной отправке
            $message_success = 'Заказа успешно отправлен';

            wp_send_json_success($message_success);
        }

        // Убиваем процесс ajax
        wp_die();

    }