<?php

function RB_inline_style()
{
    wp_enqueue_style(
        'stylesheet',
        RB_THEME_URI . '/style.css'
    );

    // Author customaizer options Start
    $RB_author_header_bg = get_theme_mod('primary_color', '#080c21');
    $RB_author_bg_overlay = '';
    if(get_theme_mod('author_banner_bg_settings',  'image') == 'image'){
        if(!empty(RB_get_archive_header_image('author_page_banner_bg_image'))){
            $RB_author_header_bg = RB_get_archive_header_image('author_page_banner_bg_image');
            $RB_author_bg_overlay = get_theme_mod('author_page_banner_bg_overlay', '#080c21');
        }
    }
    else{
        $RB_author_bg_overlay = get_theme_mod('author_page_banner_bg_color', '#080c21');
    }

    $RB_author_banner_padding = '85';
    if(!empty(get_theme_mod('RB_banner_padding'))){
        $RB_author_banner_padding = get_theme_mod('RB_banner_padding');
    }
    // Author customaizer options End

    // Category customaizer options Start
    $RB_category_header_bg = get_theme_mod('primary_color', '#080c21');
    $RB_category_bg_overlay = '';
    if(get_theme_mod('category_banner_bg_settings', 'image') == 'image'){
        if(!empty(RB_get_archive_header_image('category_page_banner_bg_image'))){
            $RB_category_header_bg = RB_get_archive_header_image('category_page_banner_bg_image');
            $RB_category_bg_overlay = get_theme_mod('category_page_banner_bg_overlay', '#080c21');
        }
    }
    else{
        $RB_category_bg_overlay = get_theme_mod('category_page_banner_bg_color', '#080c21');
    }

    $RB_category_banner_padding = '85';
    if(!empty(get_theme_mod('RB_cat_banner_padding'))){
        $RB_category_banner_padding = get_theme_mod('RB_cat_banner_padding');
    }
     // Category customaizer options End


    // Tag customaizer options Start
    $RB_tag_header_bg = get_theme_mod('primary_color', '#080c21');
    $RB_tag_bg_overlay = '';
    if(get_theme_mod('tag_banner_bg_settings', 'image') == 'image'){
        if(!empty(RB_get_archive_header_image('tag_page_banner_bg_image'))){
            $RB_tag_header_bg = RB_get_archive_header_image('tag_page_banner_bg_image');
            $RB_tag_bg_overlay = get_theme_mod('tag_page_banner_bg_overlay', '#080c21');
        }
    }
    else{
        $RB_tag_bg_overlay = get_theme_mod('tag_page_banner_bg_color', '#080c21');
    }

    $RB_tag_banner_padding = '85';
    if(!empty(get_theme_mod('RB_tag_banner_padding'))){
        $RB_tag_banner_padding = get_theme_mod('RB_tag_banner_padding');
    }
     // Tag customaizer options End


     // Archive customaizer options Start
    $RB_archive_header_bg = get_theme_mod('primary_color', '#080c21');
    $RB_archive_bg_overlay = '';
    if(get_theme_mod('archive_banner_bg_settings', 'image') == 'image'){
        if(!empty(RB_get_archive_header_image('archive_page_banner_bg_image'))){
            $RB_archive_header_bg = RB_get_archive_header_image('archive_page_banner_bg_image');
            $RB_archive_bg_overlay = get_theme_mod('archive_page_banner_bg_overlay', '#080c21');
        }
    }
    else{
        $RB_archive_bg_overlay = get_theme_mod('archive_page_banner_bg_color', '#080c21');
    }

    $RB_archive_banner_padding = '85';
    if(!empty(get_theme_mod('RB_archive_banner_padding'))){
        $RB_archive_banner_padding = get_theme_mod('RB_archive_banner_padding');
    }
    // Archive customaizer options End

    // Search customaizer options Start
    $RB_search_header_bg = get_theme_mod('primary_color', '#080c21');
    $RB_search_bg_overlay = '';
    if(get_theme_mod('search_banner_bg_settings', 'image') == 'image'){
        if(!empty(RB_get_archive_header_image('search_page_banner_bg_image'))){
            $RB_search_header_bg = RB_get_archive_header_image('search_page_banner_bg_image');
            $RB_search_bg_overlay = get_theme_mod('search_page_banner_bg_overlay', '#080c21');
        }
    }
    else{
        $RB_search_bg_overlay = get_theme_mod('search_page_banner_bg_color', '#080c21');
    }

    $RB_search_banner_padding = '85';
    if(!empty(get_theme_mod('RB_search_banner_padding'))){
        $RB_search_banner_padding = get_theme_mod('RB_search_banner_padding');
    }
    // Search customaizer options End


    $custom_css = '
    :root, [data-theme="default"] {
        --rb-primary-color: ' . esc_attr(get_theme_mod('RB_primary_color', '#080c21')) . ' ;
        --rb-secondary-color: ' . esc_attr(get_theme_mod('RB_secondary_color', '#4dac4d')) . ';
        --rb-text-color:' . esc_attr(get_theme_mod('RB_text_color', '#51535f')) . ';
        }


        .archive .cover-img{
            background: url(' .esc_url($RB_archive_header_bg).');
        }
        .archive .page-title .overlay{
            background-color: '.esc_attr($RB_archive_bg_overlay).';
        }
        .archive .section-padding{
            padding: '.esc_attr($RB_archive_banner_padding).'px 0;
        }

        .author.archive .cover-img{
            background: url(' .esc_url($RB_author_header_bg).');
        }
        .author.archive .page-title .overlay{
            background-color: '.esc_attr($RB_author_bg_overlay).';
        }
        .author.archive .section-padding{
            padding: '.esc_attr($RB_author_banner_padding).'px 0;
        }

        .category.archive .cover-img{
            background: url(' .esc_url($RB_category_header_bg).');
        }
        .category.archive .page-title .overlay{
            background-color: '.esc_attr($RB_category_bg_overlay).';
        }
        .category.archive .section-padding{
            padding: '.esc_attr($RB_category_banner_padding).'px 0;
        }

        .tag.archive .cover-img{
            background: url(' .esc_url($RB_tag_header_bg).');
        }
        .tag.archive .page-title .overlay{
            background-color: '.esc_attr($RB_tag_bg_overlay).';
        }
        .tag.archive .section-padding{
            padding: '.esc_attr($RB_tag_banner_padding).'px 0;
        }

        .search .cover-img{
            background: url(' .esc_url($RB_search_header_bg).');
        }
        .search .page-title .overlay{
            background-color: '.esc_attr($RB_search_bg_overlay).';
        }
        .search .section-padding{
            padding: '.esc_attr($RB_search_banner_padding).'px 0;
        }

    ';

    wp_add_inline_style('stylesheet', $custom_css);
}
add_action('wp_enqueue_scripts', 'RB_inline_style');
