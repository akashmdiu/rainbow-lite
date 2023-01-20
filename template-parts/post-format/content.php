<?php if (get_theme_mod('RB_blog_post_design_settings', 'design_01')) : 
    $post_design = get_theme_mod('RB_blog_post_design_settings', 'design_01');
    get_template_part('template-parts/post-layout/'.$post_design);
 endif; ?>
