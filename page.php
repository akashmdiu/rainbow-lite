<?php get_header(); ?>

<section class="hero-section cover-img section-padding single-page-title" style="background-image: url(<?php the_post_thumbnail_url(); ?>); ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cover-content text-center">
                    <h1 class="post-title"> <?php the_title(); ?> </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</section>

<section class="main-content" id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rainbow-post-content">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div <?php post_class('entry-content'); ?>>
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="single-post-image">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if (get_the_content()) : ?>
                                    <div class="single-post-content">
                                        <?php
                                                the_content();
                                                wp_link_pages(array(
                                                    'before'      => '<div class="single-page-pagination"><div class="single-page-numbers"><span class="page-links-title">' . esc_html__('Pages : ', 'doxylite') . '</span>',
                                                    'after'       => '</div></div>',
                                                    'separator'   => ' ',
                                                ));
                                            ?>
                                    </div>
                                <?php endif; ?>
                            </div>                           

                            <div class="rainbow-comments-template">
                                <?php get_template_part('template-parts/comments-template', 'comments-template'); ?>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            
        </div>
    </div>
</section>

<?php get_footer(); ?>