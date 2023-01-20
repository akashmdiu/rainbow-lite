<?php

    add_action('wp_ajax_nopriv_rb_loadmore', 'rb_loadmore');
    add_action('wp_ajax_rb_loadmore', 'rb_loadmore');
    function rb_loadmore()
    {
        $paged = $_POST['page']+1;
        
        $query = new WP_Query(array(
            'post_type' => 'post',
            'paged' => $paged
        ));
        if ($query->have_posts()) :
            while ($query -> have_posts()) : $query -> the_post();?>
                <div class="col-md-6 grid-item">
                    <?php get_template_part('/template-parts/post-format/content', get_post_format()); ?>
                </div>
           <?php endwhile;
         endif;
         wp_reset_postdata(  );

        die();
    }

