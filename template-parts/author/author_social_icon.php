<?php if (get_the_author_meta('facebook') || get_the_author_meta('twitter') || get_the_author_meta('instagram')) : ?>
    <ul class="author-social-accounts list-inline">
        <li class="list-inline-item"><a href="<?php echo esc_url(get_the_author_meta('facebook')); ?>" class="facebook"><i class="fab fa-facebook-f"></i></a></li>

        <li class="list-inline-item"><a href="<?php echo esc_url(get_the_author_meta('twitter')); ?>" class="twitter"><i class="fab fa-twitter"></i></a></li>

        <li class="list-inline-item"><a href="<?php echo esc_url(get_the_author_meta('instagram')); ?>" class="instagram"><i class="fab fa-instagram"></i></a></li>
    </ul>
<?php endif; ?>