<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open();  ?>
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'rainbow-lite'); ?></a>
    <?php get_template_part('template-parts/search-modal'); ?>


    <?php
    if (get_theme_mod('RB_preloader_settings', '0' == '1')) :
        get_template_part('template-parts/preloader');
    endif;
    ?>

    <!-- ========================= header start ========================= -->
    <header class="header navbar-area">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">

                        <?php if (has_custom_logo()) : ?>
                            <div class="logo"><?php echo get_custom_logo(); ?></div>
                        <?php endif; ?>

                        <?php if (!empty(get_bloginfo('name')) && display_header_text()) : ?>
                            <div class="site-identity">
                                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                                <p class="site-description"><?php echo esc_html(get_bloginfo('description', 'display')); ?></p>
                            </div>
                        <?php endif; ?>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="rainbow-primary-menu mx-auto collapse navbar-collapse" id="navbarSupportedContent">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary_menu',
                                'menu_class' => 'navbar-nav mx-auto',
                                'menu_id' => 'nav',
                                'container' => 'ul',
                                'add_li_class' => 'nav-item',
                                'fallback_cb' => 'fallback_menu'
                            ));
                            ?>

                        </div> <!-- navbar collapse -->
                        <ul class="right-options">
                            <li class="rainbow-search list-inline-item">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#rainbowSearchModal" class="search"><i class="fas fa-search"></i></a>
                            </li>
                            <li class="rainbow-accounts list-inline-item">
                                <?php if (!is_user_logged_in()) :  ?>
                                    <a class="r-user-info" href="<?php echo esc_url(home_url() . '/login'); ?> " class="login"><i class="fas fa-user"></i></a>
                                    <?php get_template_part('template-parts/non-user-info'); ?>

                                <?php else : ?>
                                    <a href="#" class="r-user-info"><img src="<?php echo esc_url(get_avatar_url(get_current_user_id())); ?>" alt="<?php echo esc_attr(get_the_author_meta('display_name', get_current_user_id())); ?>"></a>

                                    <?php get_template_part('template-parts/admin-info'); ?>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->

    </header>
    <!-- ========================= header end ========================= -->