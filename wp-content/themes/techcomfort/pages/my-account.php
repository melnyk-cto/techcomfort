<?php /* Template Name: Page - My Account */ ?>
<?php get_header(); ?>
<?php
    // Обработка полей формы
    wp_enqueue_script('jquery-form');

    // Подключаем скрипты формы
    wp_enqueue_script('ajax-form', get_theme_file_uri('/assets/js/my-account.js'), array('jquery'), 1.0, true);
    wp_localize_script('ajax-form', 'ajax_form_object', array(
        'url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('ajax-form-nonce'),
    ));
?>
    <main class='my-account'>
        <?php if (is_user_logged_in()) : ?>
            <?php
            $first_name = ucfirst(get_user_meta(get_current_user_id(), 'first_name', true));
            $last_name = ucfirst(get_user_meta(get_current_user_id(), 'last_name', true));
            $patronymic = ucfirst(get_user_meta(get_current_user_id(), 'user_registration_patronymic', true));
            $phone = ucfirst(get_user_meta(get_current_user_id(), 'user_registration_phone', true));
            $address = ucfirst(get_user_meta(get_current_user_id(), 'user_registration_address', true));
            $user_info = get_userdata(get_current_user_id());
            $user_email = $user_info->user_email; ?>
            <section class='personal-information'>
                <div class='container'>
                    <div class='personal-information-inner'>
                        <?php include get_template_directory() . '/components/account/_tabs.php'; ?>
                        <div class='info'>
                            <?php include get_template_directory() . '/components/account/_personal-area.php'; ?>
                            <div class='info-list ordering'>
                                <h2>Мои заказы</h2>
                                <?php include get_template_directory() . '/components/account/_ordering.php'; ?>
                            </div>
                            <div class='info-list favorites '>
                                <h2>Список желаний</h2>
                                <?php include get_template_directory() . '/components/account/_favorites.php'; ?>
                            </div>
                            <div class='info-list viewed-products '>
                                <h2>Просмотренные товары</h2>
                                <?php include get_template_directory() . '/components/account/_products-viewed.php'; ?>
                            </div>
                            <div class='info-list reviews '>
                                <?php
                                    $title = 'МОИ ОТЗЫВЫ';
                                    $addNewReviews = false;
                                    $showCountsReviews = false;
                                    $deleteAction = true;
                                    $idUser = get_current_user_id();
                                    include get_template_directory() . '/components/_reviews-item.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php else : ?>
            <script>
              window.location.href = '/login'
            </script>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>