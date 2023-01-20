<article class="post-card layout-4">
    <div <?php post_class(); ?>>
        
            <div class="post-image">
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url( 'rainbow-lazy-load-image'); ?>" data-src="<?php the_post_thumbnail_url('rainbow-featured-image' ); ?> " class="lazy-img" alt=" <?php the_title(); ?>">
            <?php else: ?>
                    <img src="<?php echo esc_url( RAINBOW_IMG_URL.'/prev.png' ) ?>" alt="<?php the_title(); ?>">
             <?php endif; ?>

            </div>
        
        <div class="post-content <?php if (!has_post_thumbnail()) { echo 'no-post-thumbnail'; } ?>">
           
           <?php 
                $r_post_parts = get_theme_mod( 'r_post_sortable_setting_04', array('r_post_title', 'r_post_meta', 'r_post_excerpt', 'r_post_footer') );
                foreach ( $r_post_parts as $template_part ) {
                    get_template_part( 'template-parts/post-layout/post-sortable/design_04/' . $template_part );
                }
           ?>
           
        </div>
    </div>
</article>