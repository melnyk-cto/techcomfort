<?php /* Template Name: Page - Registration */ ?>
<?php get_header(); ?>
<main>
    <?php if (!is_user_logged_in()) : ?>
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
    <?php else : ?>
        <script>
          window.location.href = '/my-account'
        </script>
    <?php endif; ?>
</main>
<?php get_footer(); ?>

