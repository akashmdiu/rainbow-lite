<?php if (get_theme_mod('RB_choose_preloader', 'loader_01') == 'loader_01') : ?>
    <div class="r-preloader loader-1">
        <img src="<?php echo esc_url(RB_IMG_URL . '/preloader.gif'); ?>" alt="<?php esc_attr__('preloader', 'rainbow-lite');?>">
    </div>
<?php elseif (get_theme_mod('RB_choose_preloader', 'loader_02') == 'loader_02') : ?>
    <div class="r-preloader loader-2">
        <div class="spinner">
            <i></i>
            <i></i>
            <i></i>
            <i></i>
            <i></i>
            <i></i>
            <i></i>
        </div>
    </div>
<?php endif; ?>

