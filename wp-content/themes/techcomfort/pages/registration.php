<?php /* Template Name: Page - Registration */ ?>
<?php get_header(); ?>
<main>
    <div class='registration  registration-page'>
        <div class='registration-inner'>
            <div class='registration-title'>
                <h2><?php the_title(); ?></h2>
            </div>
            <div class='registration-content'>
                <?php the_content(); ?>
                <a href='<?php echo home_url('/'); ?>login' class='already'>Я уже зарегистрирован</a>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>

