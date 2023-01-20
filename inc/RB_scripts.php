<?php
function RB_scripts()
{
    //Google Fonts
    // wp_enqueue_style('font-1', '//fonts.googleapis.com/css2?family=Karla:wght@200;300;400;500;700&display=swap');
    // wp_enqueue_style('font-2', '//fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap');
    wp_enqueue_style('font-1', '//fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    wp_enqueue_style('font-2', '//fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    

    //====================ALL CSS FILE HERE=====================================//

    wp_enqueue_style('bootstrap', RB_CSS_URL . '/bootstrap.min.css', array(), '5.0.0', 'all');

    wp_enqueue_style('fontawesome', RB_CSS_URL . '/fontawesome.min.css', array(), '5.15.1', 'all');

    wp_enqueue_style('aos', RB_CSS_URL . '/aos.css', array(), '1.0.0', 'all');

    wp_enqueue_style('flashy', RB_CSS_URL . '/flashy.min.css', array(), '1.0.0', 'all');

    wp_enqueue_style('flashy-effect', RB_CSS_URL . '/flashy.effect.css', array(), '1.0.0', 'all');

    wp_enqueue_style('theme', RB_CSS_URL . '/theme.css', array(), rand(64654, 9647987949), 'all');

    wp_enqueue_style('rainbow-style', get_stylesheet_uri());


    //-- ====================ALL JS FILE HERE===================================== -//

    wp_enqueue_script('bootstrap', RB_JS_URL . '/bootstrap.bundle.min.js', array('jquery'), '5.0.0', true);

    wp_enqueue_script('fontawesome', RB_JS_URL . '/fontawesome.min.js', array('jquery'), '5.15.1', true);

    wp_enqueue_script('masonry', RB_JS_URL . '/masonry.pkgd.min.js', array('jquery'), 'v3.0.6', true);

    wp_enqueue_script('imagesloaded', RB_JS_URL . '/imagesloaded.pkgd.min.js', array('jquery'), 'v3.0.6', true);

    wp_enqueue_script('aos', RB_JS_URL . '/aos.js', array('jquery'), '1.0.0', true);

    wp_enqueue_script('supposition', RB_JS_URL . '/supposition.js', array('jquery'), '1.0', true);

    wp_enqueue_script('flashy', RB_JS_URL . '/jquery.flashy.min.js', array('jquery'), '1.0', true);

    wp_enqueue_script('custom', RB_JS_URL . '/custom.js', array('jquery'), rand(654, 646469), true);

    wp_enqueue_script('fslightbox', RB_JS_URL . '/fslightbox.js', array('jquery'), rand(654, 646469), true);

    wp_enqueue_script('rainbow-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.min.js', array(), rand(654, 646469), true);

    if (is_singular()) wp_enqueue_script("comment-reply");
}
add_action('wp_enqueue_scripts', 'RB_scripts');

function RB_admin_style()
{
    wp_enqueue_style('admin-style', RB_CSS_URL . '/admin.css');
}
add_action('admin_enqueue_scripts', 'RB_admin_style');
