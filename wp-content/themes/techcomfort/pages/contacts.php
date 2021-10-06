<?php /* Template Name: Page - Contacts */ ?>
<?php get_header(); ?>
<main class='contacts'>
    <section class='contact'>
        <div class='container'>
          <?php include get_template_directory() . '/components/_contact-info.php'; ?>
        </div>
    </section>
    <section class='map'>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57421.60429499244!2d30.493298419638002!3d50.502534269503194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf4ee15a4505%3A0x764931d2170146fe!2z0JrQuNC10LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1624028360228!5m2!1sru!2sua"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
</main>
<?php get_footer(); ?>
