<?php get_header(); ?>

<section class="hero-section cover-img section-padding page-title" style="background-image: url(<?php header_image(); ?>); ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cover-content text-center">
                    <h1 class="site-title"> <?php bloginfo('name'); ?> </h1>
                    <p class="subtitle"><?php bloginfo('description') ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</section>


<section class="main-content" id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-7">
                <div class="row " id="grid">
                    <?php $RB_post_col = get_theme_mod('RB_post_col', '12'); ?>

                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                        
                            <div class="col-lg-<?php echo esc_attr($RB_post_col); ?> col-md-12 grid-item">
                                <?php get_template_part('/template-parts/post-format/content', get_post_format()); ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif;
                    wp_reset_postdata(); ?>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <?php get_template_part('template-parts/pagination'); ?>
                    </div>
                    
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>




<?php get_footer(); ?>