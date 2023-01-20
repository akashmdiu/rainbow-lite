<?php
function RB_RB_page_column($layout)
{
    ?>
    <div class="col-lg-<?php if ($layout == '3' && class_exists('kirki')) {
                                echo '9 col-md-7';
                            } elseif (!is_active_sidebar('rainbow-sidebar') || $layout == '2') {
                                echo apply_filters('archive_page_column', '12 col-md-12') . 'col-sm-12 mx-auto';
                            } else {
                                echo '9 col-md-7';
                            } ?>">

    <?php
    }
    add_action('RB_page_column', 'RB_RB_page_column');

    function RB_RB_page_left_sidebar($layout)
    {
        if (class_exists('kirki')) :
            if ($layout == '3') {
                get_sidebar();
            }
        endif;
    }
    add_action('RB_page_left_sidebar', 'RB_RB_page_left_sidebar');

    function RB_RB_page_right_sidebar($layout)
    {
        if (class_exists('kirki')) :
            if ($layout == '1' || $layout == '0') :
                get_sidebar();
            endif;
        else :
            get_sidebar();
        endif;
    }
    add_action('RB_page_right_sidebar', 'RB_RB_page_right_sidebar');

    function RB_RB_page_column_width($column)
    {
        $column = '9 col-md-9';
        return $column;
    }

    if (is_singular()) {
        add_filter('archive_page_column', 'RB_page_column_width');
    }

    function RB_pagination_mid_size($size)
    {
        return 4;
    }
    add_filter('RB_pagination_mid_size', 'RB_pagination_mid_size');
