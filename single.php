<?php get_header(); ?>
<main>
    <div class="single__container">
        <?php if (have_posts()) : the_post(); ?>
            <div class="article__header">
                <span class="single__cat"><?php the_category(', '); ?></span>
                <h1><?php the_title(); ?></h1>
                <ul class="flex__item tag__ul">
                    <li><?php the_time('Y.m.d'); ?></li>
                </ul>
            </div>
            <div class="article__eyecatch">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
                <?php endif; ?>
            </div>
            <div class="article__content">
                <?php the_content(); ?>
            </div>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>