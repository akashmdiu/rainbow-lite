<?php get_header(); ?>

<?php
    $RB_author_img_width = '3';
    $RB_author_content_width = '9';
    if(!empty(get_theme_mod('author_img_width', '3'))){
        $RB_author_img_width = get_theme_mod('author_img_width', '3');
        $RB_author_content_width = 12 - $RB_author_img_width;
    }
?>

<section class="hero-section banner-section cover-img section-padding page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-9 mx-auto">
                <div class="row">
                    <div class="col-md-<?php echo esc_attr($RB_author_img_width); ?>">
                        <div class="author-img">
                            <?php echo get_avatar(get_the_author_meta('ID'), 345); ?>
                        </div>
                    </div>
                    <div class="col-md-<?php echo esc_attr($RB_author_content_width); ?> row-justify-content-center">
                        <div class="cover-content">
                            <?php 
                                $RB_author_parts = get_theme_mod('RB_author_meta', array('published_text', 'author_name', 'author_bio', 'author_social_icon'));

                                if(is_array($RB_author_parts)){
                                    foreach($RB_author_parts as $RB_parts){
                                       echo get_template_part('template-parts/author/'. $RB_parts);
                                    }
                                }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="overlay"></div>
</section>

<section class="main-content">
    <div class="container">
        <div class="row">
            <?php do_action('RB_page_left_sidebar', get_theme_mod('RB_author_page_layout', '1')); ?>
                <?php do_action('RB_page_column', get_theme_mod('RB_author_page_layout', '1')); ?>
                    <div class="row" id="grid">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <div class="col-lg-6 col-md-12 grid-item">
                                    <?php get_template_part('template-parts/post-format/content', get_post_format()); ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <?php get_template_part('template-parts/pagination'); ?>
                        </div>
                    </div>
                </div>
            <?php do_action('RB_page_right_sidebar', get_theme_mod('RB_author_page_layout', '1')); ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>