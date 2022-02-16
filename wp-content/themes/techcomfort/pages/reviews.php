<?php /* Template Name: Page - Reviews */ ?>
<?php get_header(); ?>

<main class='reviews-page'>
    <section class='content'>
        <div class='container'>
            <?php
                $isAdvantages = false;
                $isDisadvantages = false;
                $title = 'ВСЕ ОТЗЫВЫ О МАГАЗИНЕ';
                $addNewReviews = true;
                $idGlobal =  'магазин';
                include get_template_directory() . '/components/_reviews-item.php'; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
