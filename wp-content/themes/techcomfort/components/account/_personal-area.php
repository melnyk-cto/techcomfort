<?php
    global $last_name;
    global $first_name;
    global $patronymic;
    global $phone;
    global $user_email;
    global $address;
?>

<div id='info-profile' class='info-list personal-data active'>
    <h2>
        Личные данные
        <span class='edit edit-js'>
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/edit.svg' alt='edit'>
            <span>Редактировать</span>
        </span>
    </h2>
    <div class='info-item personal-data-item'>
        <h5>Личные данные</h5>
        <div class='item-description'>
            <div class='description-item'>
                <label>
                    <span>Фамилия</span>
                    <input placeholder='Не указано' type='text' value='<?php if ($last_name) echo $last_name; ?>'>
                </label>
                <p></p>
            </div>
            <div class='description-item'>
                <label>
                    <span>Имя</span>
                    <input placeholder='Не указано' type='text' value='<?php if ($first_name) echo $first_name; ?>'>
                </label>
            </div>
            <div class='description-item'>
                <label>
                    <span>Отчество</span>
                    <input placeholder='Не указано' type='text' value='<?php if ($patronymic) echo $patronymic; ?>'>
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
                    <input placeholder='Не указано' type='text' value='<?php if ($phone) echo $phone; ?>'>
                </label>
            </div>
            <div class='description-item'>
                <label>
                    <span>Электронная почта</span>
                    <input placeholder='Не указано' type='text' value='<?php if ($user_email) echo $user_email; ?>'>
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
                    <input placeholder='Не указано' type='text' value='<?php if ($address) echo $address; ?>'>
                </label>
            </div>
        </div>
    </div>
</div>