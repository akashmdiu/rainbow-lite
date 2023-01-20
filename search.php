<?php get_header(); ?>

<section class="hero-section cover-img section-padding page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cover-content text-center">
                    <h1 class="post-title"> 
                        <?php echo esc_html(str_replace('[search_query]', do_shortcode( '[search_query]'), get_theme_mod('RB_search_title_text_settings'))); ?>
                    </h1>
                    <h3 class="subtitle">
                        <?php echo esc_html(str_replace('[search_count]', do_shortcode( '[search_count]'), get_theme_mod('RB_result_found_text_settings'))); ?>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</section>

<section class="main-content">
    <div class="container">
        <div class="row">
            <?php $layout = '';
                if (class_exists('kirki')) :
                $layout = get_theme_mod('RB_search_page_layout', '1');
                if ($layout == '3') {
                    get_sidebar();
                }
            endif; ?>
            <div class="col-lg-<?php if ($layout == '3' && class_exists('kirki')) {
                                 echo '9 col-md-7';
                              } elseif (!is_active_sidebar('rainbow-sidebar') || $layout == '2') {
                                 echo '12 col-md-12';
                              } else {
                                 echo '9 col-md-7';
                              } ?>">
                <div class="row" id="grid">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="col-lg-6 col-md-12 grid-item">
                                <?php get_template_part('/template-parts/post-format/content', get_post_format()); ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="posts-pagination text-center">
                            <?php the_posts_pagination(array(
                                'mid_size'  => 2,
                                'prev_text' => esc_html__('«', 'rainbow'),
                                'next_text' => esc_html__('»', 'rainbow'),
                                'screen_reader_text' => ' '
                            )); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (class_exists('kirki')) :
                if ($layout == '1' || $layout == '0') :
                    get_sidebar();
                endif;
            else :
                get_sidebar();
            endif; ?>
        </div>
    </div>
</section>




<?php get_footer(); ?>