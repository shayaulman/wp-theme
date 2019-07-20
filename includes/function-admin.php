<?php

/*

@package shayeulman
    ===================
        ADMIN PAGE
    ===================
*/

function shaye_ulman_admin_page() {

    //main page
    add_menu_page( 'Shayeulman Theme Options', 'shayeulman', 'manage_options', 'shayeulman_theme', 'shayeulman_theme_create_page', 'dashicons-tickets', 110 );

    // Sub Pages
    add_submenu_page( 'shayeulman_theme', 'Shayeulman Theme Options', 'General', 'manage_options', 'shayeulman_theme', 'shayeulman_theme_create_page' );

    // Sub Pages
    add_submenu_page( 'shayeulman_theme', 'Shayeulman CSS Options', 'Custom CSS', 'manage_options', 'shayeulman_theme_css', 'shayeulman_theme_create_page' );

    //activate custom settings
    add_action( 'admin_init', 'shayeulman_custom_settings' );
}

// Hook
add_action( 'admin_menu', 'shaye_ulman_admin_page' );



//functions 
function shayeulman_custom_settings() {
    register_setting( 'shayeulman-settings-group', 'first_name' );
    register_setting( 'shayeulman-settings-group', 'last_name' );
    register_setting( 'shayeulman-settings-group', 'user_description' );
    register_setting( 'shayeulman-settings-group', 'twitter_handler', 'shayeulman_sanitize_twitter_handler' );
    register_setting( 'shayeulman-settings-group', 'facebook_handler' );
    register_setting( 'shayeulman-settings-group', 'gplus_handler' );


    add_settings_section( 'shayeulman-sidebar-options', 'Sidebar Options', 'shayeulman_sidebar_options', 'shayeulman_theme' );

    add_settings_field( 'sidebar_name', 'Full Name', 'shayeulman_sidebar_name', 'shayeulman_theme', 'shayeulman-sidebar-options' );
    add_settings_field( 'sidebar_description', 'Description', 'shayeulman_sidebar_description', 'shayeulman_theme', 'shayeulman-sidebar-options' );
    add_settings_field( 'sidebar-twitter', 'Twitter Handler', 'shayeulman_sidebar_twitter', 'shayeulman_theme', 'shayeulman-sidebar-options' );
    add_settings_field( 'sidebar-facebook', 'Facebook Handler', 'shayeulman_sidebar_facebook', 'shayeulman_theme', 'shayeulman-sidebar-options' );
    add_settings_field( 'sidebar-gplus', 'Google+ Handler', 'shayeulman_sidebar_gplus', 'shayeulman_theme', 'shayeulman-sidebar-options' );

}

function shayeulman_sidebar_options() {
    echo '<p>WOW this is awesome!<?p>';
}

function shayeulman_sidebar_name() {
    $firstName = get_option( 'first_name' );
    $lastName = esc_attr( get_option( 'last_name' ) );
    echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name"/>
         <input type="text" name="last_name" value="'.$lastName.'" placeholder="Last Name"/>'; 
}

function shayeulman_sidebar_description() {
    $description = esc_attr( get_option( 'user_description' ) );
    echo '<input type="text" name="user_description" value="'.$description.'" placeholder="Description"/>
        <p class="description">Write something good...</p>';
}

function shayeulman_sidebar_twitter() {
    $twitter = esc_attr( get_option( 'twitter_handler' ) );
    echo '<input type="text" name="twitter_handler" value="'.$twitter.'" placeholder="Twitter Handler"/>
        <p class="description">Input your Twitter username without the @ character.</p>';
}

function shayeulman_sidebar_facebook() {
    $facebook = esc_attr( get_option( 'facebook_handler' ) );
    echo '<input type="text" name="facebook_handler" value="'.$facebook.'" placeholder="Facebook Handler"/>';
}

function shayeulman_sidebar_gplus() {
    $gplus = esc_attr( get_option( 'gplus_handler' ) );
    echo '<input type="text" name="gplus_handler" value="'.$gplus.'" placeholder="Google+ Handler"/>';
}

// Sanitization settings
function shayeulman_sanitize_twitter_handler( $input ) {
    $output = sanitize_text_field( $input );
    $output = str_replace('@', '', $output);
    return $output;
}


function shayeulman_theme_create_page() {
    require_once( get_template_directory() .  '/includes/templates/shayeulman-admin.php' );
}

function shayeulman_theme_setting_page() {
    echo '<h1>Sunset Custom CSS</h1>';
}