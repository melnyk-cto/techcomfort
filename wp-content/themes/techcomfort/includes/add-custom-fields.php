<?php
    // добавляем стили
    function admin_stylesheet() {
        wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/assets/css/style-admin.css');
    }

    add_action('admin_head', 'admin_stylesheet');

    // Добавляем новый метабокс на страницу редактирования комментария
    add_action('add_meta_boxes_comment', 'extend_comment_add_meta_box');
    function extend_comment_add_meta_box() {
        add_meta_box('title', __('Дополнительные поля'), 'extend_comment_meta_box', 'comment', 'normal', 'high');
    }

    // Отображаем наши поля
    function extend_comment_meta_box($comment) {
        $phone = get_comment_meta($comment->comment_ID, 'phone', true);
        $advantages = get_comment_meta($comment->comment_ID, 'advantages', true);
        $disadvantages = get_comment_meta($comment->comment_ID, 'disadvantages', true);

        wp_nonce_field('extend_comment_update', 'extend_comment_update', false); ?>
        <div class='comment-fields'>
            <div class='comment-field'>
                <label class='comment-label-full'>
                    <span><?php _e('Телефон'); ?></span>
                    <input type="text" name="phone" value="<?php echo esc_attr($phone); ?>" class="widefat" />
                </label>
            </div>
            <div class='comment-field'>
                <label class='comment-label-half'>
                    <span><?php _e('Достоинства'); ?></span>
                    <input type="text" name="advantages" value="<?php echo esc_attr($advantages); ?>" class="widefat" />
                </label>
                <label class='comment-label-half'>
                    <span><?php _e('Недостатки'); ?></span>
                    <input type="text" name="disadvantages" value="<?php echo esc_attr($disadvantages); ?>"
                           class="widefat" />
                </label>
            </div>
        </div>
    <?php }


    //    Сохранение мета полей в админке
    add_action('edit_comment', 'extend_comment_edit_meta_data');
    function extend_comment_edit_meta_data($comment_id) {
        if (!isset($_POST['extend_comment_update']) || !wp_verify_nonce($_POST['extend_comment_update'], 'extend_comment_update'))
            return;

        if (!empty($_POST['phone'])) {
            $phone = sanitize_text_field($_POST['phone']);
            update_comment_meta($comment_id, 'phone', $phone);
        } else
            delete_comment_meta($comment_id, 'phone');

        if (!empty($_POST['advantages'])) {
            $advantages = sanitize_text_field($_POST['advantages']);
            update_comment_meta($comment_id, 'advantages', $advantages);
        } else
            delete_comment_meta($comment_id, 'advantages');

        if (!empty($_POST['disadvantages'])) {
            $disadvantages = intval($_POST['disadvantages']);
            update_comment_meta($comment_id, 'disadvantages', $disadvantages);
        } else
            delete_comment_meta($comment_id, 'disadvantages');
    }