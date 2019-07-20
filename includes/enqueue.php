<?php

/*

@package shayeulman
    ===================
        ADMIN ENQUEUE FUNCTIONS
    ===================
*/

function shayeulman_load_admin_scripts( $hook ) {
    if ('toplevel_page_shayeulman_theme' != $hook) { return; }

    wp_register_style( 'shayeulman_admin', get_template_directory_uri() . '/css/shayeulman.css', array(), '0.0.1' );
    wp_enqueue_style( 'shayeulman_admin' );
}

add_action( 'admin_enqueue_scripts',  'shayeulman_load_admin_scripts' );  


