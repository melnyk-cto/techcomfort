<?php
    global $title;
    global $addNewReviews;
    global $idUser;
    global $deleteAction;
    global $type;

    // Нужно, что бы обязательно была создана страница з названием "Отзывы"
    $page_object = get_page_by_title('Отзывы');
    $page_id = $page_object->ID;
?>
<?php
    // Обработка полей формы
    wp_enqueue_script('jquery-form');

    // Подключаем скрипты формы
    wp_enqueue_script('ajax-form-reviews', get_theme_file_uri('/assets/js/reviews.js'), array('jquery'), 1.0, true);
    wp_localize_script('ajax-form-reviews', 'ajax_form_object', array(
        'url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('ajax-form-nonce'),
    ));
?>
<div class='reviews'>
    <?php if ($addNewReviews) { ?>
        <div class='reviews-inner'>
            <?php if (is_user_logged_in()) : ?>
                <?php
                $first_name = ucfirst(get_user_meta(get_current_user_id(), 'first_name', true));
                $last_name = ucfirst(get_user_meta(get_current_user_id(), 'last_name', true));
                $phone = ucfirst(get_user_meta(get_current_user_id(), 'user_registration_phone', true));
                $user_info = get_userdata(get_current_user_id());
                $user_email = $user_info->user_email; ?>
                <form id="form-reviews" class="form reviews-form">
                    <h3>Добавление отзыва</h3>
                    <p class='info'>Изменить данные можно на странице - "Мой Профиль"</p>
                    <label class='disabled'>
                        <span class='label'>Имя</span>
                        <input
                                required
                                name="form_first"
                                class="form_first"
                                placeholder='Не указано'
                                type='text'
                                value='<?php if ($first_name) echo $first_name; ?>'>
                    </label>
                    <label class='disabled'>
                        <span class='label'>Фамилия</span>
                        <input
                                required
                                name="form_last"
                                class="form_last"
                                placeholder='Не указано'
                                type='text'
                                value='<?php if ($last_name) echo $last_name; ?>'>
                    </label>
                    <label class='disabled'>
                        <span class='label'>Телефон</span>
                        <input
                                name="form_tel"
                                class="form_tel"
                                placeholder='Не указано'
                                type='tel'
                                value='<?php if ($phone) echo $phone; ?>'>
                    </label>
                    <label class='disabled'>
                        <span class='label'>Email</span>
                        <input
                                required
                                name="form_email"
                                class="form_email"
                                placeholder=''
                                type='email'
                                value='<?php if ($user_email) echo $user_email; ?>'>
                    </label>
                    <label class='textarea'>
                        <span class='label'>Текст сообщения</span>
                        <textarea required
                                  name="form_message"
                                  class="form_message"
                                  placeholder='Введите ваш отзыв...'></textarea>
                    </label>
                    <?php if ($type !== $page_id) { ?>
                        <label class='textarea'>
                            <span class='label'>Достоинства</span>
                            <textarea required
                                      name="form_advantages"
                                      class="form_advantages"
                                      placeholder='Введите достоинства...'></textarea>
                        </label>
                        <label class='textarea'>
                            <span class='label'>Недостатки</span>
                            <textarea required
                                      name="form_disadvantages"
                                      class="form_disadvantages"
                                      placeholder='Введите недостатки...'></textarea>
                        </label>
                    <?php } ?>
                    <div class='appraisal'>
                        <p>Оценка:</p>
                        <div class="rating__group rating">
                            <input class="rating__star" type="radio" name="form_rating" value="1"
                                   aria-label="Ужасно">
                            <input class="rating__star" type="radio" name="form_rating" value="2"
                                   aria-label="Сносно">
                            <input class="rating__star" type="radio" name="form_rating" value="3"
                                   aria-label="Нормально">
                            <input class="rating__star" type="radio" name="form_rating" value="4"
                                   aria-label="Хорошо">
                            <input class="rating__star" type="radio" name="form_rating" value="5"
                                   aria-label="Отлично" checked>
                        </div>
                    </div>
                    <label class='d-none'>
                        <input name="form_product" type='text' value='<?php echo $type; ?>'>
                    </label>
                    <button type="submit" id="form_submit_reviews" class='btn form_button'>Отправить</button>
                </form>
            <?php else : ?>
                <div class="not-registered">
                    <h4>Чтобы оставить отзыв вам нужно зарегистрироваться</h4>
                    <a href='<?php echo home_url('/'); ?>login' class='btn'>Войти в аккаунт</a>
                </div>
            <?php endif; ?>
        </div>
    <?php } ?>
    <div class='reviews-list'>
        <h2><?php echo $title ?></h2>
        <?php
            $args = ['post_id' => $type];

            // Показываем отзывы конкретного пользователя
            if ($idUser) {
                $args['user_id'] = $idUser;
            }

            if (get_comments($args)) {
                foreach (get_comments($args) as $comment) {
                    $_product = wc_get_product($comment->comment_post_ID);

                    $phone = get_comment_meta($comment->comment_ID, 'phone', true);
                    $advantages = get_comment_meta($comment->comment_ID, 'advantages', true);
                    $disadvantages = get_comment_meta($comment->comment_ID, 'disadvantages', true);
                    $rating = get_comment_meta($comment->comment_ID, 'rating', true); ?>
                    <div class='reviews-item'>
                        <div class='item-title'>
                            <h5>
                                <?php if ($idUser) {
                                    if ($page_id === intval($comment->comment_post_ID)) {
                                        echo 'Отзыв о магазине';
                                    } else {
                                        $_product = wc_get_product($comment->comment_post_ID);
                                        if ($_product) {
                                            echo $_product->get_title();
                                        }
                                    }
                                } else {
                                    echo $comment->comment_author;
                                } ?>
                            </h5>
                            <?php
                                $averageRating = $rating;
                                include get_template_directory() . '/components/_rating.php'; ?>
                            <span class='data'>
                                <?php echo date("j.n.Y", strtotime($comment->comment_date)) ?>
                            </span>
                        </div>
                        <div class='item-description'>
                            <div>
                                <p><?php echo $comment->comment_content; ?></p>
                                <?php if ($advantages) { ?>
                                    <p class='reviews-title'>Достоинства</p>
                                    <p>• <?php echo $advantages; ?></p>
                                <?php } ?>
                                <?php if ($disadvantages) { ?>
                                    <p class='reviews-title'>Недостатки</p>
                                    <p>• <?php echo $disadvantages; ?></p>
                                <?php } ?>
                            </div>
                            <?php if ($deleteAction) { ?>
                                <div class='actions'>
                                    <img data-id='<?php echo $comment->comment_ID ?>'
                                         class='delete-review-js'
                                         title='Удалить'
                                         src='<?php echo get_template_directory_uri() ?>/assets/images/icons/delete.svg'
                                         alt='edit'>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php }
            } else {
                echo '<p>Извините, пока нет отзывов...</p>';
            }
            wp_reset_postdata(); // "сброс"
        ?>
    </div>
</div>