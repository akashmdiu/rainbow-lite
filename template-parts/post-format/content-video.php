<?php 
$video_src = '';
if(get_field('r_video_post')):
    $video_src = get_field('r_video_post');
endif;

$reverse_class = '';
if(get_theme_mod('RB_readmore_position', 'right') == 'left'):
    $reverse_class = 'rb-content-reverse';
endif;

?>

<article class="post-card r-video">
    <div <?php post_class(); ?>>

        <div class="post-image">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
            <?php else : ?>
                <img src="<?php echo esc_url(RB_IMG_URL . '/prev.png') ?>" alt="<?php the_title(); ?>" />
            <?php endif; ?>
        </div>
        <div class="r-overlay">
            <div class="play-icon">
                
                <a class="lightbox-btn video-play-button r-play-btn" data-flashy-type="video" href="<?php echo esc_url($video_src); ?>"><i class="fas fa-play"></i></a>
            </div>

            <div class="post-content">

                <div class="post-meta">
                    <ul class="meta-data">
                        <?php if (get_the_category()) : ?>
                            <li class="category list-inline-item"><?php the_category(' ', '', ''); ?></li>
                        <?php endif; ?>
                    </ul>
                </div>
                <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

                <div class="author-meta <?php echo esc_attr($reverse_class); ?>">
                    <a class="author-img" href="<?php echo esc_url(home_url().'/author/' . get_the_author_meta('user_nicename')); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php the_author(); ?>"><?php echo get_avatar(get_the_author_meta('ID'), 30); ?></a>

                    <a href="<?php the_permalink(); ?>" class="readmore"><?php echo esc_html__('Readmore', 'rainbow-lite'); ?></a>
                </div>
            </div>
        </div>
    </div>
</article>