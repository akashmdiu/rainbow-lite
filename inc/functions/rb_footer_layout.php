<?php

if (!function_exists('get_RB_footer1_layout')) {
    function get_RB_footer1_layout()
    {
        $RB_layout = '8';
        $RB_layout = get_theme_mod('RB_footer_layout', '8');

        if ($RB_layout == '1') {
            return '4';
        } else if ($RB_layout == '2') {
            return '3';
        } else if ($RB_layout == '3') {
            return '4';
        } else if ($RB_layout == '4') {
            return '3';
        } else if ($RB_layout == '5') {
            return '6';
        } else if ($RB_layout == '6') {
            return '4';
        } else if ($RB_layout == '7') {
            return '4';
        } else if ($RB_layout == '8') {
            return '3';
        } else {
            return '3';
        }
    }
}

if (!function_exists('get_RB_footer2_layout')) {
    function get_RB_footer2_layout()
    {
        $RB_layout = '8';
        $RB_layout = get_theme_mod('RB_footer_layout', '8');

        if ($RB_layout == '1') {
            return '4';
        } else if ($RB_layout == '2') {
            return '3';
        } else if ($RB_layout == '3') {
            return '2';
        } else if ($RB_layout == '4') {
            return '3';
        } else if ($RB_layout == '5') {
            return '6';
        } else if ($RB_layout == '6') {
            return '2';
        } else if ($RB_layout == '7') {
            return '3';
        } else if ($RB_layout == '8') {
            return '2';
        } else {
            return '2';
        }
    }
}
if (!function_exists('get_RB_footer3_layout')) {
    function get_RB_footer3_layout()
    {
        $RB_layout = '8';
        $RB_layout = get_theme_mod('RB_footer_layout', '8');

        if ($RB_layout == '1') {
            return '4';
        } else if ($RB_layout == '2') {
            return '3';
        } else if ($RB_layout == '3') {
            return '3';
        } else if ($RB_layout == '4') {
            return '2';
        } else if ($RB_layout == '5') {
            return '6';
        } else if ($RB_layout == '6') {
            return '4';
        } else if ($RB_layout == '7') {
            return '2';
        } else if ($RB_layout == '8') {
            return '4';
        } else {
            return '4';
        }
    }
}
if (!function_exists('get_RB_footer4_layout')) {
    function get_RB_footer4_layout()
    {
        $RB_layout = '8';
        $RB_layout = get_theme_mod('RB_footer_layout', '8');

        if ($RB_layout == '1') {
            return '4';
        } else if ($RB_layout == '2') {
            return '3';
        } else if ($RB_layout == '3') {
            return '3';
        } else if ($RB_layout == '4') {
            return '4';
        } else if ($RB_layout == '5') {
            return '6';
        } else if ($RB_layout == '6') {
            return '2';
        } else if ($RB_layout == '7') {
            return '3';
        } else if ($RB_layout == '8') {
            return '3';
        } else {
            return '3';
        }
    }
}
