<?php
register_nav_menu('header_menu', 'Navigacijos meniu');
register_nav_menu('footer_menu', 'Apatinis meniu');
add_theme_support('post-thumbnails');

function customizer_function($wp_customize) {
    $wp_customize->add_section('footer_settings', array(
        'title' => 'Footerio nustatymai',
        'priority' => 30
    ));
    
    // Footer text
    $wp_customize->add_setting('footer_text', array(
        'default' => 'Lorem ipsum',
        'transport' => 'refresh'
    ));
    
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, 
        'footer_text', 
        array(
            'label' => 'Footerio tekstas',
            'section' => 'footer_settings',
            'settings' => 'footer_text',
            'type' => 'textarea'
        )));
    
    // Footer BG color
    $wp_customize->add_setting('footer_color', array(
        'default' => '#5c6bc0',
        'transport' => 'refresh'
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize, 
        'footer_color', 
        array(
            'label' => 'Footerio spalva',
            'section' => 'footer_settings',
            'settings' => 'footer_color',
        )));
    
    // Footer logo
    $wp_customize->add_setting('footer_logo', array(
        'transport' => 'refresh'
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize, 
        'footer_logo', 
        array(
            'label' => 'Footerio logotipas',
            'section' => 'footer_settings',
            'settings' => 'footer_logo'
        )));
}

add_action('customize_register', 'customizer_function');
?>
