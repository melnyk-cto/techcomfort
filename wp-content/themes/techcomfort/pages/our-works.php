<?php /* Template Name: Page - Our Works */ ?>
<?php get_header(); ?>
<?php
    wp_enqueue_script('salvatore-js', get_stylesheet_directory_uri() . '/assets/lib/salvatore.min.js');
    wp_enqueue_script('our-works-js', get_stylesheet_directory_uri() . '/assets/js/our-works.js');
?>
    <main class='our-works'>
        <section class='gallery'>
            <div class='container'>
                <h2>НАШИ РАБОТЫ</h2>
                <div id='grid' data-columns class='clearfix'>
                    <?php
                        $images = get_field('our-works-gallery');
                        if ($images): ?>
                            <?php foreach ($images as $image): ?>
                                <div class="gallery-item">
                                    <img src='<?php echo esc_url($image['url']); ?>'
                                         alt="<?php echo esc_attr($image['alt']); ?>">
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>