<?php get_header(); ?>

<section class="main-content r-single-page" id="content">
    <div class="container">
        <div class="row">

            <?php do_action('RB_page_left_sidebar', get_theme_mod('RB_single_page_layout', '1')); ?>

            <?php do_action('RB_page_column', get_theme_mod('RB_single_page_layout', '1')); ?>

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="single-post-title">
                        <h1><?php the_title(); ?></h1>
                    </div>

                    <div class="rainbow-post-content">
                        <div <?php post_class('entry-content'); ?>>
                            <div class="single-post-content">
                                <?php
                                        $reverse_class = '';
                                        if (get_theme_mod('RB_author_meta_position', 'left') == 'right') :
                                            $reverse_class = 'rb-content-reverse rb-reverse-author-meta';
                                        endif;
                                        ?>
                                <div class="row mb-5 <?php echo esc_attr($reverse_class); ?>">
                                    <div class="col-md-6 col-lg-<?php if ($reverse_class) {
                                                                            echo esc_attr('5');
                                                                        } else {
                                                                            echo esc_attr('7');
                                                                        } ?>">
                                        <?php get_template_part('template-parts/RB_single/author_meta'); ?>
                                    </div>

                                    <div class="col-md-6 col-lg-<?php if ($reverse_class) {
                                                                            echo esc_attr('7');
                                                                        } else {
                                                                            echo esc_attr('5');
                                                                        } ?> row-justify-content-center">
                                        <?php get_template_part('template-parts/RB_single/content_share_meta'); ?>
                                    </div>
                                </div>

                                <div class="row RB_content">
                                    <div class="col-md-12">
                                        <?php if (get_post_format() === 'video') :
                                                    if (class_exists('acf')) :
                                                        echo '<div class="r-video-post">';
                                                        echo wp_oembed_get(get_field('r_video_post'));
                                                        echo '</div>';
                                                    endif;
                                                endif; ?>

                                        <?php if (has_post_thumbnail()) : ?>
                                            <div class="single-post-image <?php if (!is_active_sidebar('rainbow-sidebar') || $layout == '2') {
                                                                                            echo esc_attr('RB_fullwidth-image');
                                                                                        } ?>">
                                                <?php the_post_thumbnail(); ?>
                                            </div>
                                        <?php endif; ?>

                                        <?php
                                                the_content();
                                                wp_link_pages(array(
                                                    'before'      => '<div class="single-page-pagination"><div class="single-page-numbers"><span class="page-links-title">' . esc_html__('Pages : ', 'rainbow-lite') . '</span>',
                                                    'after'       => '</div></div>',
                                                    'separator'   => ' ',
                                                ));
                                                ?>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="r-post-category">
                                    <h6><?php echo esc_html__('Categories:', 'rainbow-lite'); ?></h6>
                                    <?php the_category(); ?>
                                </div>

                                <?php if (get_the_tags()) : ?>
                                    <div class="post-tags">
                                        <?php the_tags('Tags: ', '&nbsp&nbsp', ''); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="rainbow-comments-template">
                            <?php get_template_part('template-parts/comments-template'); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <?php do_action('RB_page_right_sidebar', get_theme_mod('RB_single_page_layout', '1')); ?>


    </div>
    </div>
</section>


<?php get_template_part('template-parts/RB_single/social-share-modal'); ?>

<?php get_footer(); ?>