<?php
    global $woocommerce;

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

    add_action('woocommerce_checkout_process', 'create_vip_order');
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

        $formAddress = sanitize_text_field($_POST['address']);
        $formInstallation = sanitize_text_field($_POST['installation']);
        $formAdditionalInformation = sanitize_text_field($_POST['additional-information']);
        $formDelivery = sanitize_text_field($_POST['delivery']);
        $formDeliveryAddress = sanitize_text_field($_POST['delivery-address']);
        $formDeliveryMail = sanitize_text_field($_POST['delivery-mail']);
        $formPayment = sanitize_text_field($_POST['payment']);
        $userId = get_current_user_id();

        $encodeProducts = stripslashes(html_entity_decode($_POST['textarea-products']));
        $products = json_decode($encodeProducts, true);

        // Проверяем массив ошибок, если не пустой, то передаем сообщение. Иначе отправляем письмо
        if ($errors) {
            wp_send_json_error($errors);

        } else {
            $address = array(
                'first_name' => $formFirst,
                'last_name' => $formLast,
                'company' => '',
                'email' => $formEmail,
                'phone' => $formPhone,
                'address_1' => $formAddress,
                'address_2' => '',
                'city' => '',
                'state' => '',
                'postcode' => '',
                'country' => ''
            );

            // Now we create the order
            $order = wc_create_order();
            // The add_product() function below is located in /plugins/woocommerce/includes/abstracts/abstract_wc_order.php
            foreach ($products as $key) {
                $order->add_product(get_product($key['ID']), $key['Count']); // This is an existing SIMPLE product
            }
            $order->set_address($address, 'billing');
            $order->calculate_totals();
            $order->update_status("Completed", 'Imported order', TRUE);

            // Добавляем остальные поля
            update_field('order_installation', $formInstallation, $order->get_id()); # Требуется установка
            update_field('order_additional_information', $formAdditionalInformation, $order->get_id()); # Дополнительная информация
            update_field('order_delivery', $formDelivery, $order->get_id()); # Сервис Доставки
            update_field('order_delivery_address', $formDeliveryAddress, $order->get_id()); # Новая почта (Адрес)
            update_field('order_delivery_mail', $formDeliveryMail, $order->get_id()); # Новая почта (Отделение, №)
            update_field('order_payment', $formPayment, $order->get_id()); # Способ Оплаты
            update_field('order_user_id', $userId, $order->get_id()); # Способ Оплаты

            // Отправляем сообщение об успешной отправке
            $message_success = 'Заказа успешно отправлен';

            // Отправляем сообщение на почту
            $to = get_option('admin_email');
            $subject = 'Новый заказ з сайта Tehcomfort';
            // текст письма
            $message = '<html>
                        <head>
                          <title>Новый заказ з сайта Tehcomfort</title>
                        </head>
                        <body>
                          <p>Новый заказ з сайта Tehcomfort</p>
                          <table>
                            <tr>
                              <th>ФИО</th>
                              <th>Телефон</th>
                              <th>Email</th>
                              <th>Адрес</th>
                              <th>Требуется установка</th>
                              <th>Дополнительная информация</th>
                              <th>Сервис доставки</th>
                              <th>Новая почта (Адрес)</th>
                              <th>Новая почта (Отделение, №)</th>
                              <th>Способ оплаты</th>
                            </tr>
                            <tr>
                              <td>' . $formFirst . ' ' . $formLast . '</td>
                              <td>' . $formPhone . '</td>
                              <td>' . $formEmail . '</td>
                              <td>' . $formAddress . '</td>
                              <td>' . $formInstallation . '</td>
                              <td>' . $formAdditionalInformation . '</td>
                              <td>' . $formDelivery . '</td>
                              <td>' . $formDeliveryAddress . '</td>
                              <td>' . $formDeliveryMail . '</td>
                              <td>' . $formPayment . '</td>
                            </tr>
                          </table>
                          <a href="https://techcomfort.com.ua/wp-admin/edit.php?post_type=shop_order" target="_blank">Перейти на страницу заказов</a>
                        </body>
                        </html>';
            // Для отправки HTML-письма должен быть установлен заголовок Content-type
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            mail($to, $subject, $message,  implode("\r\n", $headers));

            wp_send_json_success($message_success);
        }

        // Убиваем процесс ajax
        wp_die();

    }