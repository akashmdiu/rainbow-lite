<article class="post-card ">
    <div <?php post_class(); ?>>
        <?php if (has_post_thumbnail()): ?>
            <div class="post-image">
                <?php the_post_thumbnail('post-card-image'); ?>
            </div>
        <?php endif; ?>
        <div class="post-content ">

             <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

            <?php get_template_part('template-parts/post-excerpt'); ?>
            
            <a href="<?php the_permalink(); ?>" class="readmore"><?php echo esc_html__('Readmore', 'rainbow-lite'); ?></a>
        </div>
    </div>
</article>