<?php
    global $last_name;
    global $first_name;
    global $patronymic;
    global $phone;
    global $user_email;
    global $address; ?>

<div id='info-profile' class='info-list personal-data'>
    <form id="form-personal" class="form">
        <h2>
            Личные данные
            <div class='title-right'>
                <span class='edit log-out'>
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/logout.svg' alt='edit'>
            <span>
                <?php echo wp_kses_post(apply_filters('user_registration_logged_in_message', sprintf(__('<a href="%s">Выйти с аккаунта</a>', 'user-registration'), ur_logout_url()))); ?>
            </span>
            </span>
                <span class='edit edit-js'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/edit.svg' alt='edit'>
                    <span>Редактировать</span>
                </span>
                <span class='edit cancel-js d-none'>
                    Отменить
                </span>
                <button type="submit" id="form_submit" class='edit save-js form_button d-none'>
                    Сохранить
                </button>
            </div>
        </h2>
        <div class='info-item personal-data-item'>
            <h5>Личные данные</h5>
            <div class='item-description'>
                <div class='description-item'>
                    <label>
                        <span>Фамилия</span>
                        <input
                                required
                                name="form_first"
                                class="form_first"
                                placeholder='Не указано'
                                type='text'
                                value='<?php if ($first_name) echo $first_name; ?>'>
                    </label>
                    <p></p>
                </div>
                <div class='description-item'>
                    <label>
                        <span>Имя</span>
                        <input
                                required
                                name="form_last"
                                class="form_last"
                                placeholder='Не указано'
                                type='text'
                                value='<?php if ($last_name) echo $last_name; ?>'>
                    </label>
                </div>
                <div class='description-item'>
                    <label>
                        <span>Отчество</span>
                        <input
                                name="form_patronymic"
                                class="form_patronymic"
                                placeholder='Не указано'
                                type='text'
                                value='<?php if ($patronymic) echo $patronymic; ?>'>
                    </label>
                </div>
            </div>
        </div>
        <div class='info-item personal-data-item'>
            <h5>Контакты</h5>
            <div class='item-description'>
                <div class='description-item'>
                    <label>
                        <span>Телефон</span>
                        <input
                                required
                                name="form_tel"
                                class="form_tel"
                                placeholder='Не указано'
                                type='tel'
                                value='<?php if ($phone) echo $phone; ?>'>
                    </label>
                </div>
                <div class='description-item'>
                    <label>
                        <span>Электронная почта</span>
                        <input
                                required
                                name="form_email"
                                class="form_email"
                                placeholder='Не указано'
                                type='email'
                                value='<?php if ($user_email) echo $user_email; ?>'>
                    </label>
                </div>
            </div>
        </div>
        <div class='info-item personal-data-item'>
            <h5>Адрес доставки</h5>
            <div class='item-description'>
                <div class='description-item'>
                    <label>
                        <span>Адрес</span>
                        <input
                                name="form_address"
                                class="form_address"
                                placeholder='Не указано'
                                type='text'
                                value='<?php if ($address) echo $address; ?>'>
                    </label>
                </div>
            </div>
        </div>
    </form>
</div>