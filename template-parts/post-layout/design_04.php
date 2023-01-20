<article class="post-card layout-4">
    <div <?php post_class(); ?>>
        
            <div class="post-image">
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url( 'rainbow-lazy-load-image'); ?>" data-src="<?php the_post_thumbnail_url('rainbow-featured-image' ); ?> " class="lazy-img" alt=" <?php the_title(); ?>">
            <?php else: ?>
                    <img src="<?php echo esc_url( RB_IMG_URL.'/prev.png' ) ?>" alt="<?php the_title(); ?>">
             <?php endif; ?>

            </div>
        
        <div class="post-content <?php if (!has_post_thumbnail()) { echo 'no-post-thumbnail'; } ?>">
           
           <?php 
                $RB_post_parts = get_theme_mod( 'RB_post_sortable_setting_04', array('RB_post_title', 'RB_post_meta', 'RB_post_excerpt', 'RB_post_footer') );
                foreach ( $RB_post_parts as $template_part ) {
                    get_template_part( 'template-parts/post-layout/post-sortable/design_04/' . $template_part );
                }
           ?>
           
        </div>
    </div>
</article>