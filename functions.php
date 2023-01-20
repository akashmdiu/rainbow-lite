<?php
if (!defined('RB_THEME_URI')) {
    define('RB_THEME_URI', get_template_directory_uri());
}

define('RB_THEME_DIR', get_template_directory());
define('RB_CSS_URL', get_template_directory_uri() . '/assets/css');
define('RB_JS_URL', get_template_directory_uri() . '/assets/js');
define('RB_IMG_URL', RB_THEME_URI . '/assets/images');
define('RB_INC_DIR', RB_THEME_DIR . '/inc');
define('RB_THEME', true);

if (!function_exists('RB_setup')) {
    function RB_setup()
    {
        /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        /*
    	 * Make theme available for translation.
    	 * Translations can be filed in the /languages/ directory.
    	 * If you're building a theme based on Laundry, use a find and replace
    	 * to change 'laundry' to the name of your theme in all the template files.
    	 */
        load_theme_textdomain('rainbow', get_template_directory() . '/languages');

        // Set the default content width.
        $GLOBALS['content_width'] = 900;

        //Support Automatic Feed Links 
        add_theme_support('automatic-feed-links');

        //Support Post-Thumbnails
        add_theme_support('post-thumbnails');

        //Support Titile Tag
        add_theme_support('title-tag');

        //Add Image Size
        add_image_size('rainbow-featured-image', 1366, 780, false);
        add_image_size('layout-1-featured-image', 220, 280, false);
        add_image_size('layout-2-featured-image', 365, 300, true);
        add_image_size('rainbow-lazy-load-image', 30, 20, false);

        // Load regular editor styles into the new block-based editor.
        add_theme_support('editor-styles');

        //enqueue editor style
        add_editor_style('style-editor.css');
 
        // Load default block styles.
         add_theme_support('wp-block-styles');

        add_editor_style('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

        // Load default block styles.
        add_theme_support('wp-block-styles');

        // Add support for responsive embeds.
        add_theme_support('responsive-embeds');

        //Custom Logo
        add_theme_support('custom-logo');

        //Custom Header
        add_theme_support('custom-header');

        //Custom Background
        add_theme_support("custom-background");

        //Support post format
        add_theme_support('post-formats', array('link', 'quote', 'video', 'audio'));

        
    }
}
add_action('after_setup_theme', 'RB_setup');

include_once('inc/RB_scripts.php');
include_once('inc/ajax.php');
include_once('inc/tgm/class-tgm-plugin-activation.php');
include_once('inc/tgm/recommended-plugins.php');
include_once('inc/functions/RB_footer_layout.php');
include_once('inc/RB_inline_css.php');
include_once('inc/RB_ajax_search.php');

if (class_exists('kirki')) :
    include_once('inc/customizer/class-customizer.php');
    include_once('inc/customizer/theme-options.php');
endif;


//Rainbow nav menus
function RB_nav_menus()
{
    register_nav_menus(array(
        'primary_menu' =>  esc_html__('Primary Menu', 'rainbow'),
        'footer_menu' =>  esc_html__('Footer Menu', 'rainbow'),
    ));
}
add_action('init', 'RB_nav_menus');


//Rainbow add additional class
if (!function_exists('RB_add_additional_class_on_li')) {
    function RB_add_additional_class_on_li($classes, $item, $args)
    {
        if (isset($args->add_li_class)) {
            $classes[] = $args->add_li_class;
        }
        return $classes;
    }
}
add_filter('nav_menu_css_class', 'RB_add_additional_class_on_li', 1, 3);

//Rainbow Sidebar
function RB_sidebar()
{
    register_sidebar(array(
        'name' => esc_html__('Rainbow Sidebar', 'rainbow'),
        'id'  => 'rainbow-sidebar',
        'description' =>  esc_html__('Rainbow sidebar', 'rainbow'),
        'before_title' => '<h5 class="sidebar-title heading-5">',
        'after_title' => '</h5>',
        'before_widget' => '<div id="%1$s" class="sidebar-widget widget %2$s">',
        'after_widget' => '</div>'
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer One', 'rainbow'),
        'id'  => 'footer1',
        'description' =>  esc_html__('Use this sidebar for footer one.', 'rainbow'),
        'before_title' => '<h5 class="footer-title heading-5">',
        'after_title' => '</h5>',
        'before_widget' => '<div id="%1$s" class="footer-widget sidebar-widget mb-60 widget %2$s">',
        'after_widget' => '</div>'
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer Two', 'rainbow'),
        'id'  => 'footer2',
        'description' =>  esc_html__('Use this sidebar for footer two.', 'rainbow'),
        'before_title' => '<h5 class="footer-title heading-5">',
        'after_title' => '</h5>',
        'before_widget' => '<div id="%1$s" class="footer-widget sidebar-widget mb-60 widget %2$s">',
        'after_widget' => '</div>'
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer Three', 'rainbow'),
        'id'  => 'footer3',
        'description' =>  esc_html__('Use this sidebar for footer three.', 'rainbow'),
        'before_title' => '<h5 class="footer-title heading-5">',
        'after_title' => '</h5>',
        'before_widget' => '<div id="%1$s" class="footer-widget sidebar-widget mb-60 widget %2$s">',
        'after_widget' => '</div>'
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer Four', 'rainbow'),
        'id'  => 'footer4',
        'description' =>  esc_html__('Use this sidebar for footer four.', 'rainbow'),
        'before_title' => '<h5 class="footer-title heading-5">',
        'after_title' => '</h5>',
        'before_widget' => '<div id="%1$s" class="footer-widget sidebar-widget mb-60 widget %2$s">',
        'after_widget' => '</div>'
    ));
}
add_action('widgets_init', 'RB_sidebar');

//Rainbow Excerpt
if (!function_exists('RB_excerpt')) {
    function RB_excerpt($limits = 25)
    {
        $RB_post_indicator = '';
        if (get_theme_mod('RB_excerpt_indicator_toggle') == '1') :
            $RB_post_indicator = get_theme_mod('RB_post_excerpt_indicator', ' ');
        endif;
        $limits = $limits + 1;
        $content = strip_tags(get_the_content());
        $make_index = explode(' ', $content, $limits);
        if (count($make_index) <= $limits) {
            array_pop($make_index);
        }
        $RB_excerpt = implode(' ', $make_index);
        $RB_excerpt = $RB_excerpt . " " . $RB_post_indicator;

        return $RB_excerpt;
    }
}

if (!function_exists('RB_add_span')) {
    function RB_add_span($links)
    {
        $links = str_replace('</a> (', '</a> <span class="cat-count">', $links);
        $links = str_replace(')', '</span>', $links);
        return $links;
    }
}
add_filter('wp_list_categories', 'RB_add_span');


if (!function_exists('RB_add_span_in_archive')) {
    function RB_add_span_in_archive($links)
    {
        $links = str_replace('</a>&nbsp;(', '</a><span class="archive-count">', $links);
        $links = str_replace(')</li>', '</span></li>', $links);
        return $links;
    }
}
add_filter('get_archives_link', 'RB_add_span_in_archive');

//Rainbow search form
if (!function_exists('RB_search_form')) {
    function RB_search_form($form)
    {
        $form = '<form method="get" action="' . home_url('/') . '">
                    <div class="input-group">
                    <input type="search" name="s" value="' . get_search_query() . '" class="form-control" placeholder="Search">
                    <div class="input-group-prepend">
                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                    </div>
                    </div>
                </form>';
        return $form;
    }
}
add_filter('get_search_form', 'RB_search_form');


// Comments Layout
if (!function_exists('RB_comments')) {
    function RB_comments($comment, $args, $depth)
    { ?>
        <li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">

            <div class="rainbow-comment">

                <div class="author-img">
                    <?php echo get_avatar($comment, $args['avatar_size']); ?>
                </div>

                <div class="comment-meta">
                    <h6 class="author">
                        <?php echo get_comment_author_link(); ?>
                        <span class="date"><?php echo esc_html(' ~ ' . RB_comments_time()); ?></span>
                    </h6>

                    <?php if ($comment->comment_approved == '0') : ?>
                        <em><i class="icon-info-sign"></i> <?php esc_html_e('Comment awaiting approval', 'rainbow-lite'); ?></em>
                        <br />
                    <?php endif; ?>
                    <div class="comment-text">
                        <?php comment_text(); ?>
                    </div>
                    <div class="comments-footer">
                        <span class="reply-link">
                            <?php comment_reply_link(array_merge($args, array('reply_text' => esc_html__(' Reply', 'rainbow'), 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment->comment_ID); ?>
                        </span>
                        <?php edit_comment_link(__('Edit Comment', 'rainbow'), '<span><i class="far fa-edit"></i>', '</span>'); ?>
                    </div>
                </div>
            </div>
        </li>

<?php
    }
}

//Rainbow comments time
function RB_comments_time()
{
    return sprintf(esc_html__('%s ago', '%s = human-readable time difference', 'rainbow'), human_time_diff(get_comment_time('U'), current_time('timestamp')));
}

//jQuery notice
function RB_jquery_migrate_notice()
{
    $m = $GLOBALS['wp_scripts']->registered['jquery-migrate'];
    $m->extra['before'][] = 'temp_jm_logconsole = window.console.log; window.console.log=null;';
    $m->extra['after'][] = 'window.console.log=temp_jm_logconsole;';
}
add_action('init', 'RB_jquery_migrate_notice', 5);



if (!function_exists('RB_author_posts_count')) {
    function RB_author_posts_count()
    {
        $count_author_post = count_user_posts(get_the_author_meta('ID'));
        if ($count_author_post < 2) {
            printf($count_author_post . esc_html__(' post', 'rainbow'));
        } else {
            printf($count_author_post . esc_html__(' posts', 'rainbow'));
        }
    }
}

if (!function_exists('RB_posts_count')) {
    function RB_posts_count()
    {
        $count_author_post = count_user_posts(get_the_author_meta('ID'));
        return $count_author_post;
    }
}
add_shortcode('count', 'RB_posts_count');


function RB_current_user_posts_count()
{
    $count_author_post = count_user_posts(get_current_user_id());
    if ($count_author_post < 2) {
        printf($count_author_post . esc_html__(' post', 'rainbow'));
    } else {
        printf($count_author_post . esc_html__(' posts', 'rainbow'));
    }
}

function RB_get_categories()
{
    if (is_array(get_theme_mod('RB_display_post_category'))) {
        $RB_cats = get_theme_mod('RB_display_post_category');
        $RB_cat_array = array();
        foreach ($RB_cats as $RB_cat) {
            $RB_cat_id = get_cat_ID($RB_cat);
            $RB_cat_array[] = $RB_cat_id;
        }
        return $RB_cat_array;
    }
    return;
}

function RB_posts_url()
{
    return home_url() . '/wp-admin/edit.php';
}
function RB_dashboard_url()
{
    return home_url() . '/wp-admin/';
}
function RB_admin_profile_url()
{
    return home_url() . '/wp-admin/profile.php';
}
function RB_logout_url()
{
    return home_url() . '/wp-login.php?loggedout=true';
}
function RB_settings_url()
{
    return home_url() . '/wp-admin/options-general.php';
}

if (!function_exists('RB_get_archive_header_image')) {
    function RB_get_archive_header_image($archive_page_banner_bg_image = 'archive_page_banner_bg_image')
    {
        $RB_image_url = '';
        if (!empty(get_theme_mod($archive_page_banner_bg_image))) {
            $RB_image_url = get_theme_mod($archive_page_banner_bg_image);
        } else {
            $RB_image_url = get_header_image();
        }
        return $RB_image_url;
    }
}

if (!function_exists('search_result_count')) {
    function search_result_count()
    {
        global $wp_query;
        return $wp_query->found_posts;
    }
}
add_shortcode('search_count', 'search_result_count');

if (!function_exists('RB_get_search_query')) {
    function RB_get_search_query()
    {
        $RB_search_query = get_search_query();
        return $RB_search_query;
    }
}
add_shortcode('search_query', 'RB_get_search_query');


function RB_tag_cloud()
{
    $tags = get_tags();
    $args = array(
        'smallest'                  => 10,
        'largest'                   => 22,
        'unit'                      => 'px',
        'number'                    => 10,
        'format'                    => 'flat',
        'separator'                 => " ",
        'orderby'                   => 'count',
        'order'                     => 'DESC',
        'show_count'                => 1,
        'echo'                      => false
    );

    $tag_string = wp_generate_tag_cloud($tags, $args);

    return $tag_string;
}
add_shortcode('RB_popular_tags', 'RB_tag_cloud');
add_filter('widget_text', 'do_shortcode');


function RB_set_post_views($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);

    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

function RB_track_post_views($post_id)
{
    if (!is_single()) return;

    if (empty($post_id)) {
        global $post;
        $post_id = $post->ID;
    }

    RB_set_post_views($post_id);
}

add_action('wp_head', 'RB_track_post_views');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);



function RB_merlin_import_files()
{
    return array(
        array(
            'import_file_name'           => 'Demo Import',
            'import_file_url'            => esc_url(get_template_directory_uri() . '/inc/demo-content/demo-content.xml'),
            'import_widget_file_url'     => 'https://raw.githubusercontent.com/akashmdiu/political-demo-content/master/demo-widget.wie',
            'import_customizer_file_url' => 'https://raw.githubusercontent.com/akashmdiu/political-demo-content/master/demo-customization.dat',

            'import_preview_image_url'   => 'https://github.com/akashmdiu/political-demo-content/blob/master/demo.png',
            'import_notice'              => __('A special note for this import.', 'your-textdomain'),
            'preview_url'                => 'wp-applin.themeix.com',
        ),
    );
}
add_filter('merlin_import_files', 'RB_merlin_import_files');

function RB_welcome_page()
{
    if (is_admin() && isset($_GET['activated'])) {
        wp_redirect('themes.php?page=getting-started');
    }
}
RB_welcome_page();


include_once('inc/hooks.php');

