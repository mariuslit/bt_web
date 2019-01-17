<?php
register_nav_menu('header_menu', 'Navigacijos meniu višutinis');
//get_the_title($post);
register_nav_menu('footer_menu', 'Apatinis meniu');

add_theme_support('post-thumbnails');

// kai wp sukuriama Page struktūra sukuriamas permalink ir php gali patikrinti šį Page su funkcija

// customizer_function valdo Customize kairės pusės funkcijas
function customizer_function($wp_customize){

    // Customizer kairės panelės meniu punktas 'Footerio nustatymai'
    $wp_customize->add_section('footer_settings', array(
        'title' => 'Footerio nustatymai',
        'priority' => 50
    ));

    // Footer text 'Footerio tekstas'
    $wp_customize->add_setting('footer_text', array(
        'default' => 'Lorem Ipsum',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'footer_text',
        array(
            'label' => 'Footerio tekstas',
            'section' => 'footer_settings',
            'settings' => 'footer_text'
    )));

    // Footer BG color 'Footerio spalva'
    $wp_customize->add_setting('footer_color', array(
        'default' => '#000000',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'footer_color',
        array(
            'label' => 'Footerio spalva',
            'section' => 'footer_settings',
            'settings' => 'footer_color'
    )));

    // Footer logo 'Footerio logotipas'
    $wp_customize->add_setting('footer_logo', array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'footer_logo',
        array(
            'label' => 'Footerio logotipas',
            'section' => 'footer_settings',
            'settings' => 'footer_logo'
    )));


};

// automatiškai iškviečia funkciją customizer_function()
add_action('customize_register', 'customizer_function');
?>