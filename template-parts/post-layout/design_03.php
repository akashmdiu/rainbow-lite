<article class="post-card layout-3">
    <div <?php post_class(); ?>>
        <div class="post-content <?php if (!has_post_thumbnail()) { echo 'no-post-thumbnail'; } ?>">
            <?php 
                $RB_post_parts = get_theme_mod( 'RB_post_sortable_setting_03', array('RB_post_title', 'RB_post_meta', 'RB_post_excerpt', 'RB_post_footer') );
                foreach ( $RB_post_parts as $template_part ) {
                    get_template_part( 'template-parts/post-layout/post-sortable/design_04/' . $template_part );
                }
           ?>

        </div>
        
        <?php if (has_post_thumbnail()) : ?>
            <div class="post-image">

                <img src="<?php the_post_thumbnail_url( 'rainbow-lazy-load-image'); ?>" data-src="<?php the_post_thumbnail_url('layout-2-featured-image' ); ?> " class="lazy-img" alt=" <?php the_title(); ?>">

            </div>
        <?php endif; ?>
    </div>
</article>
