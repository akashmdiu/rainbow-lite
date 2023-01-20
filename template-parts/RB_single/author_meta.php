<div class="rainbow-post-author row-justify-content-center">
    <div class="author-avater">
        <?php echo get_avatar(get_the_author_meta('ID'), 60); ?>
    </div>
    <div class="author-meta-data">

        <h4 class="author-name">
            <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                <?php the_author(); ?>
            </a>
            <?php
            $date_string = sprintf(esc_html__(' ~ Posted on %s', 'rainbow-lite'), get_the_date('M d, Y'));
            echo $date_string;
            ?>
        </h4>


        <p class="author-bio">
            <?php
            $num_comments = get_comments_number();
            $post_text = _n('%d Feedback', '%d Feedbacks', $num_comments, 'rainbow-lite');
            $comments_text = sprintf($post_text, $num_comments);
            echo esc_html($comments_text);
            ?>
        </p>


    </div>
</div>