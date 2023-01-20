<?php 
$reverse_class = '';
if(get_theme_mod('RB_readmore_position', 'right') == 'left'):
    $reverse_class = 'rb-content-reverse';
endif;
?>
<div class="author-meta <?php echo esc_attr($reverse_class); ?>">
    <a class="author-img" href="<?php echo esc_url(home_url().'/author/' . get_the_author_meta('user_nicename')); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php the_author(); ?>"><?php echo get_avatar(get_the_author_meta('ID'), 30); ?></a>

    <?php if(get_theme_mod('RB_readmore_toggle', '1')): ?>
        <a href="<?php the_permalink(); ?>" class="readmore"><?php echo esc_html(get_theme_mod('RB_read_more_label', 'Read More')); ?></a>
    <?php endif; ?> 
</div>