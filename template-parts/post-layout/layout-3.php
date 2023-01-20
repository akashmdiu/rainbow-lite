<article class="post-card layout-3">
    <div <?php post_class(); ?>>
        <div class="post-content <?php if (!has_post_thumbnail()) { echo 'no-post-thumbnail'; } ?>">
            
           
            <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

            <div class="post-meta">
                <ul class="meta-data">
                    <li class="list-inline-item date"><i class="fas fa-calendar"></i><?php the_time(get_option('date_format'));; ?></li>
                    <?php if (get_the_category( )) : ?>
                        <li class="category list-inline-item"><i class="fas fa-folder"></i><?php the_category(', '); ?></li>
                    <?php endif; ?>
                </ul>
            </div>

            <p class="post-excerpt"><?php echo rainbow_excerpt(); ?></p>

            <div class="author-meta">
                <a class="author-img" href="<?php echo esc_url('/author/'.get_the_author_meta( 'user_nicename')); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php the_author(); ?>"><?php echo get_avatar(get_the_author_meta('ID'), 30); ?></a>
                <a href="<?php the_permalink(); ?>" class="readmore"><?php echo esc_html__('Readmore', 'rainbow-lite'); ?></a>
            </div>
        </div>
        
        <?php if (has_post_thumbnail()) : ?>
            <div class="post-image">

                <img src="<?php the_post_thumbnail_url( 'rainbow-lazy-load-image'); ?>" data-src="<?php the_post_thumbnail_url('layout-2-featured-image' ); ?> " class="lazy-img" alt=" <?php the_title(); ?>">

            </div>
        <?php endif; ?>
    </div>
</article>
