<?php

function devkick_save_options() {

    if (!current_user_can( 'publish_pages' )) {
        wp_die( 'You are not allowed, maybe change your role ;)');
    }
    check_admin_referer( 'devkick_nonce', 'devkick_options_check' );

    $opts = get_option( 'devkick_opts' );

    $opts['legend_01'] = sanitize_text_field($_POST['devkick_legend_01']);
    $opts['image_01_url'] = sanitize_text_field($_POST['devkick_image_url_01']);

    update_option( 'devkick_opts', $opts );
    if (empty($_POST['devkick_legend_01'])) {
        wp_redirect( admin_url( 'admin.php?page=devkick_theme_opts&status=2' ) );
        exit;
    } else {
        wp_redirect( admin_url( 'admin.php?page=devkick_theme_opts&status=1' ) );
        exit;
    }
}

?>