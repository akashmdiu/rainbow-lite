<?php
$RB_social_share = '';
if (class_exists('RB_core')) {
    $RB_social_share = 'RB_post_share';
}

$RB_content_meta_buttons = get_theme_mod('RB_single_page_meta', array('RB_post_share', 'RB_post_feedback', 'RB_post_print'));
?>
<ul class="content-settings-btn list-inline">
    <?php
    if (is_array($RB_content_meta_buttons)) {
        foreach ($RB_content_meta_buttons as $template_part) {
            get_template_part('template-parts/RB_single/meta_buttons/' . $template_part);
        }
    }
    ?>
</ul>