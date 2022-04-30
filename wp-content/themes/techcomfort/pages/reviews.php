<?php /* Template Name: Page - Reviews */ ?>
<?php get_header(); ?>

<main class='reviews-page'>
    <section class='content'>
        <div class='container'>
            <?php
                $title = 'ВСЕ ОТЗЫВЫ О МАГАЗИНЕ';
                $addNewReviews = true;
                $page_object = get_page_by_title('Отзывы');
                $page_id = $page_object->ID;
                $type = $page_id;
                include get_template_directory() . '/components/_reviews-item.php'; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
