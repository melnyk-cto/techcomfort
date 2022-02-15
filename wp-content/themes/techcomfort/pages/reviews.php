<?php /* Template Name: Page - Reviews */ ?>
<?php get_header(); ?>
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
<main class='reviews-page'>
    <section class='content'>
        <div class='container'>
            <?php include get_template_directory() . '/components/_reviews-item.php'; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
