<article class="search-block">
    <a href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
        <?php else : ?>
            <img src="<?php echo esc_url(RB_IMG_URL . '/prev.png') ?>" alt="<?php the_title(); ?>">
        <?php endif; ?>
    </a>
    <div class="search-block-content">
        <h6>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h6>
    </div>
</article>