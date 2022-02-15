<div class='reviews'>
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

                <label for=''>
                    <span class='label'>Имя</span>
                    <input
                            required
                            name="form_first"
                            class="disabled form_first"
                            placeholder='Не указано'
                            type='text'
                            value='<?php if ($first_name) echo $first_name; ?>'>
                </label>
                <label for=''>
                    <span class='label'>Фамилия</span>
                    <input
                            required
                            name="form_last"
                            class="disabled form_last"
                            placeholder='Не указано'
                            type='text'
                            value='<?php if ($last_name) echo $last_name; ?>'>
                </label>
                <label for=''>
                    <span class='label'>Телефон</span>
                    <input
                            name="form_tel"
                            class="disabled form_tel"
                            placeholder='Не указано'
                            type='tel'
                            value='<?php if ($phone) echo $phone; ?>'>
                </label>
                <label for=''>
                    <span class='label'>Email</span>
                    <input
                            required
                            name="form_email"
                            class="disabled form_email"
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
                <button type="submit" id="form_submit_reviews" class='btn form_button'>Отправить</button>
            </form>
        <?php else : ?>
            <div class="not-registered">
                <h4>Чтобы оставить отзыв вам нужно зарегистрироваться</h4>
                <a href='<?php echo home_url('/'); ?>login' class='btn'>Войти в аккаунт</a>
            </div>
        <?php endif; ?>
    </div>
    <h2>Все Отзывы О Магазине</h2>
    <div class='reviews-list'>
        <?php
            $mypost_Query = new WP_Query(array(
                'post_type' => 'reviews', # тип записи
                'post_status' => 'publish', # статус записи
                'posts_per_page' => -1,        # количество (-1 - все)
            ));
            if ($mypost_Query->have_posts()) {
                while ($mypost_Query->have_posts()) {
                    $mypost_Query->the_post();; ?>
                    <div class='reviews-item'>
                        <div class='item-title'>
                            <h5><?php the_field('form_first'); ?><?php the_field('form_last'); ?></h5>
                            <div class='rating'>
                                <?php for ($r = 1; $r <= 5; $r++) { ?>
                                    <?php if (get_field('rejting') < $r) { ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                             viewBox="0 0 24 24">
                                            <path style="fill:#DADADA"
                                                  d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z" />
                                        </svg>
                                    <?php } else { ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                             viewBox="0 0 24 24">
                                            <path style="fill:#FFDC96"
                                                  d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z" />
                                        </svg>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                            <span class='data'><?php echo get_the_date('j.n.Y'); ?></span>
                        </div>
                        <div class='item-description'>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                <?php }
                wp_reset_postdata(); // "сброс"
            } else {
                echo '<p>Извините, пока нет отзывов...</p>';
            } ?>
    </div>
</div>