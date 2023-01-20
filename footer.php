<!-- ========================= footer start ========================= -->
<footer class="footer-section section-padding">

    <div class="container">
        <?php if (is_active_sidebar('footer1') || is_active_sidebar('footer2') || is_active_sidebar('footer3') || is_active_sidebar('footer4')) : ?>
            <div class="row rainbow-sidebar">
                <div class="col-lg-<?php echo esc_html(get_RB_footer1_layout()); ?> col-md-6">
                    <?php if (is_active_sidebar('footer1')) :
                            dynamic_sidebar('footer1');
                        endif; ?>
                </div>
                <div class="col-lg-<?php echo esc_html(get_RB_footer2_layout()); ?> col-md-6">
                    <?php if (is_active_sidebar('footer2')) :
                            dynamic_sidebar('footer2');
                        endif; ?>
                </div>
                <div class="col-lg-<?php echo esc_html(get_RB_footer3_layout()); ?> col-md-6">
                    <?php if (is_active_sidebar('footer3')) :
                            dynamic_sidebar('footer3');
                        endif; ?>
                </div>
                <div class="col-lg-<?php echo esc_html(get_RB_footer4_layout()); ?> col-md-6">
                    <?php if (is_active_sidebar('footer4')) :
                            dynamic_sidebar('footer4');
                        endif; ?>

                </div>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-md-12">
                <div class="copyright-area text-center">
                    <p><?php echo esc_html__('Copyright©', 'rainbow-lite'); ?> <?php echo esc_html(date("Y")); ?>
    <?php do_action('display_akash_name'); ?> <?php echo esc_html__(' All rights to reserved ', 'rainbow-lite'); ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ========================= footer end ========================= -->

<!-- ========================= scroll-top ========================= -->
<?php if (get_theme_mod('back_to_top', 1)) : ?>
   
    <a href="#" class="scroll-top btn-gradient">
        <i class="fas fa-angle-double-up "></i>
    </a>
<?php endif; ?>

<?php wp_footer(); ?>

</body>

</html>