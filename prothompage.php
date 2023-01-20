<?php
/**
Template Name: Front Page
*/

get_header(); ?>


<section class="featured-section carousel slide" id="carouselControls" data-bs-ride="carousel">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="rainbow-carousel">
                    <?php
                        $query = new WP_Query(array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'post__not_in' => get_option("sticky_posts")
                        ));

                    ?>
                    <?php if ($query->have_posts()) :  $x = 1; ?>
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <article class="featured-article carousel-item <?php if ($x == 1) { echo 'active'; $x = 0; } ?>">
                                <div class="row row-justify-content-center">
                                    <div class="col-md-7">                                    
                                        <div class="featured-thumbnail">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <img src="<?php the_post_thumbnail_url( 'rainbow-lazy-load-image'); ?>" data-src="<?php the_post_thumbnail_url('rainbow-featured-image' ); ?> " class="lazy-img" alt=" <?php the_title(); ?>"> 
                                                <?php else: ?>
                                                    <img class="left" src="<?php echo esc_url(RB_IMG_URL . '/prev.png'); ?>">
                                                <?php endif; ?>
                                            </a>
                                        </div>                                   
                                    </div>
                                    <div class="col-md-5">
                                        <div class="featured-content">
                                            <a class="featured-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            <?php if(!empty(RB_excerpt())): ?>
                                                <p class="post-excerpt"><?php echo RB_excerpt(45); ?></p>
                                            <?php endif; ?>

                                        </div>
                                        <div class="featured-author">
                                            <div class="author-img">
                                                <a class="author-img" href="<?php echo esc_url(home_url().'/author/' . get_the_author_meta('user_nicename')); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php the_author(); ?>"><?php echo get_avatar(get_the_author_meta('ID'), 50); ?></a>
                                            </div>
                                            <div class="author-meta">
                                                <h6><?php the_author(); ?></h6>
                                                <?php if(get_the_author_meta('designation')): ?>
                                                <p><?php echo get_the_author_meta('designation'); ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <!-- <div class="featured-meta-data">
                                            <ul class="featured-social list-inline">
                                                <li class="list-inline-item"><i class="far fa-eye fa-2x"></i></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)" onClick="return rudr_favorite(this);"><i class="far fa-heart fa-2x"></i></a></li>
                                                <li class="list-inline-item"><i class="far fa-envelope fa-2x"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-share fa-2x"></i></li>
                                            </ul>
                                        </div> -->
                                    </div>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="rainbow-carousel-navigation">
                        <a data-bs-slide="prev" href="#carouselControls" class="nav-left "><i class="fas fa-arrow-left"></i></a>

                        <a data-bs-slide="next" href="#carouselControls" class="nav-right "><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-7">
                
                <div class="row " id="grid">
                    <?php
                
                        $RB_post_type = 'post';
                        $RB_display_post_category = '';
                        $RB_post_per_page = '';
                        $RB_post_order_by = '';
                        $RB_post_order = '';
                        
                        if(class_exists('kirki')):
                            $RB_post_type = get_theme_mod('RB_post_type_query', 'post');
                            $RB_display_post_category = get_theme_mod('RB_display_post_category');
                            $RB_post_per_page = get_theme_mod('RB_post_per_page', '-1');
                            $RB_post_order_by = get_theme_mod('RB_post_order_by');
                            $RB_post_order = get_theme_mod('RB_post_order');
                        endif;

                        $query = new WP_Query(array(
                            'post_type' => $RB_post_type,
                            'posts_per_page' => $RB_post_per_page,
                            'category__in' => RB_get_categories(),
                            'orderby' => $RB_post_order_by,
                            'order' => $RB_post_order, 
                            'post__not_in' => get_option("sticky_posts")
                        ));

                    ?>
                    <?php if ($query->have_posts()) : ?>
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <div class="col-lg-6 col-md-12 grid-item">
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