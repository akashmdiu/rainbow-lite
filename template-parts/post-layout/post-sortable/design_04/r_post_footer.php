<div class="author-meta">
    <a class="author-img" href="<?php echo esc_url('/author/' . get_the_author_meta('user_nicename')); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php the_author(); ?>"><?php echo get_avatar(get_the_author_meta('ID'), 30); ?></a>

    <a href="<?php the_permalink(); ?>" class="readmore"><?php echo esc_html__('Readmore', 'rainbow-lite'); ?></a>
</div>