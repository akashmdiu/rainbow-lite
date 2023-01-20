<?php
/*
 ==================
 Ajax Search
======================	 
*/
// add the ajax fetch js
add_action('wp_footer', 'ajax_fetch');
function ajax_fetch()
{
    ?>
    <script type="text/javascript">
        function fetch() {
            

            jQuery.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type: 'post',
                data: {
                    action: 'data_fetch',
                    keyword: jQuery('#keyword').val()
                },
                success: function(data) {
                    jQuery('#datafetch').html(data);
                }
            });

        }
    </script>

    <?php
    }

    // the ajax function
    add_action('wp_ajax_data_fetch', 'data_fetch');
    add_action('wp_ajax_nopriv_data_fetch', 'data_fetch');
    function data_fetch()
    {
        $the_query = new WP_Query(array('posts_per_page' => -1, 's' => esc_attr($_POST['keyword']), 'post_type' => array('page', 'post')));
        if ($the_query->have_posts()) :
            echo '<ul>';
            while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="search-item">
                <a href="<?php echo esc_url(post_permalink()); ?>">
                    <i class="fas fa-file-alt"></i>
                    <h1 class="post-title"><?php the_title(); ?></h1>
                    <p class="post-excerpt"><?php echo RB_excerpt(25); ?></p>
                </a>
            </li>

        <?php endwhile; ?>
<?php echo '</ul>';
        wp_reset_postdata();
    endif;

    die();
}

function RB_post_type_include($query)
{
    if ($query->is_main_query() && $query->is_search() && !is_admin()) {
        $query->set('post_type', array('post', 'page', 'custom_post_type'));
    }
}
add_action('pre_get_posts', 'RB_post_type_include');
