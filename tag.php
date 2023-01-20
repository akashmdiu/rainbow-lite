<?php get_header(); ?>

<?php get_template_part('template-parts/archive-title'); ?>

<section class="main-content">
    <div class="container">
        <div class="row">
            <?php do_action('RB_page_left_sidebar', get_theme_mod('RB_tag_page_layout', '1')); ?>
                <?php do_action('RB_page_column', get_theme_mod('RB_tag_page_layout', '1')); ?>
                <div class="row" id="grid">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="col-lg-6 col-md-12 grid-item">
                                <?php get_template_part('template-parts/post-format/content', get_post_format()); ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; wp_reset_postdata(  ); ?>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <?php get_template_part('template-parts/pagination'); ?>
                    </div>
                </div>
            </div>
            <?php do_action('RB_page_right_sidebar', get_theme_mod('RB_tag_page_layout', '1')); ?>
        </div>
</section>




<?php get_footer(); ?>