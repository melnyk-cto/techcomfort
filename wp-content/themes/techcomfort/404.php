<?php
    /** The template for displaying 404 pages (not found)*/
    get_header(); ?>
    <main>
        <div class='not-found'>
            <h2>Страница не найдена :-(</h2>
            <a href='<?php echo home_url('/'); ?>' class='btn'>Вернутся на главную страницу</a>
        </div>
    </main>
<?php get_footer();
