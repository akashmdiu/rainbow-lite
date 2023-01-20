<p class="post-excerpt">
    <?php
        if (class_exists('kirki')) {
            $RB_excerpt_limit = get_theme_mod('RB_post_excerpt_limit', '30');
        }
        if (!empty($RB_excerpt_limit)) {
            $RB_limit = $RB_excerpt_limit;
        } else {
            $RB_limit = 30;
        }

        if (has_excerpt()) {
            echo wp_kses_post(get_the_excerpt());
        } else {
            echo esc_textarea(RB_excerpt($RB_limit));
        }
    ?>
</p>