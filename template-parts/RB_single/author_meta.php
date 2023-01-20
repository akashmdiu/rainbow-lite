<div class="rainbow-post-author row-justify-content-center">
    <div class="author-avater">
        <?php echo get_avatar(get_the_author_meta('ID'), 60); ?>
    </div>
    <div class="author-meta-data">

        <h4 class="author-name"> <a href="<?php echo esc_url(site_url() . '/author/' . get_the_author_meta('user_nicename')); ?>"> <?php the_author(); ?></a> <?php echo esc_html__(' ~ Posted- ' . get_the_date('M d, Y'), 'rainbow-lite'); ?></h4>

        <p class="author-bio"><?php echo esc_html__(get_comments_number() . ' Feedback', 'rainbow-lite'); ?></p>
    </div>
</div>