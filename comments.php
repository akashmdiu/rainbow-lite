<?php
if (!post_password_required()) { ?>
    <ul class="comments-list">
        <?php
            wp_list_comments(array(
                'avatar_size'    => 60,
                'style'            => 'ul',
                'callback'        => 'RB_comments',
                'type'            => 'all'
            ));

            ?>
    </ul>
<?php
}
?>

<div class="comment-pagination <?php if (empty(get_comments_number())) {
                                    echo 'minus-comment-spacing';
                                } ?>">
    <?php
        paginate_comments_links(array(
            'prev_text' => esc_html__('«', 'rainbow'),
            'next_text' => esc_html__('»', 'rainbow'),
            'mid_size'  => 3
        ));
    ?>

</div>

<?php

$comments_args = array(
    'label_submit' => esc_html__('Add Feedback', 'rainbow'),
    'title_reply' => esc_html__('Leave a Feedback', 'rainbow'),
    'comment_notes_after' => '',
    'class_submit' => 'submit_class',
    'fields' => array(
        'author' => '<div class="row"> <div class="col-md-6"><input type="text" class="form-control" name="author" placeholder="' . esc_attr__('Your Name*', 'rainbow') . '" required /></div>',
        'email' => '<div class="col-md-6"><input class="form-control" placeholder="' . esc_attr__('Your Email*', 'rainbow') . '" name="email" type="email" required></div></div> ',
    ),
    'comment_field' => '<textarea placeholder="' . esc_attr__('Type Feedback', 'rainbow') . '" class="form-control" id="comment" name="comment" ></textarea>',
    'id_form'           => 'commentform',
    'class_form'      => 'comment-form',
    'id_submit'         => 'submit',
    'class_submit'   => 'btn-style2 btn btn-gradient',
    'title_reply_to'    => esc_html__('Leave a Reply to %s', 'rainbow'),
    'cancel_reply_link' => esc_html__('Cancel Reply', 'rainbow'),
    'format'            => 'xhtml',

);
comment_form($comments_args);
?>