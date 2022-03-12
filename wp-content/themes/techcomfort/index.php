<?php get_header(); ?>
<?php
    global $post;
    $post_slug = $post->post_name; ?>
    <main>
        <section class='<?php echo $post_slug ?>'>
            <div class='container'>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h2> <?php the_title(); ?></h2>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
        </section>
    </main>
<?php get_footer(); ?>