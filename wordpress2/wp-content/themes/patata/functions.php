<?php

register_nav_menu('header_menu', 'Viršutinis meniu - header');
register_nav_menu('menu_menu', 'Valgiaraščio meniu');
register_nav_menu('footer_menu', 'Apatinis meniu - footer');

if (is_page_template('page-templates/page-pageContacts.php')) {
    include_once 'page-templates/page-pageContacts.php';
}
if (is_page_template('templates/page-pageGallery.php')) {
    include_once 'page-templates/page-pageGallery.php';
}
if (is_page_template('templates/page-pageLunch.php')) {
    include_once 'page-templates/page-pageLunch.php';
}
if (is_page_template('templates/page-pageMenu.php')) {
    include_once 'page-templates/page-pageMenu.php';
}

// kai wp sukuriama Page struktūra sukuriamas permalink ir php gali patikrinti šį Page su funkcija

// customizer_function valdo Customize kairės pusės funkcijas
function customizer_function($wp_customize){

    // 0 Customizer kairės panelės meniu punktas 'Footerio nustatymai'
    $wp_customize->add_section('footer_settings', array(
        'title' => 'Footerio nustatymai',
        'priority' => 50
    ));

    // 1 Footer text 'Footerio tekstas'
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

    // 2 Footer BG color 'Footerio spalva'
    $wp_customize->add_setting('footer_color', array(
        'default' => 'Lorem Ipsum',
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

    // 3 Footer logo 'Footerio logotipas'
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
//
}

function customizer_function_dienos_petus($wp_customize){

    // 0 Customizer kairės panelės meniu punktas 'Dienos pietų nustatymai'
    $wp_customize->add_section('dienos_pietus', array(
        'title' => 'Dienos pietų nustatymai',
        'priority' => 10
    ));

    // 1-0 pavadinimas
    $wp_customize->add_setting('text_title', array(
        'default' => 'Dienos pietūs',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'text_title',
        array(
            'label' => 'Pavadinimas',
            'section' => 'dienos_pietus',
            'settings' => 'text_title'
        )));

    // 1-1 sriuba
    $wp_customize->add_setting('patiekalas_pirmas', array(
        'default' => 'Sriuba',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'patiekalas_pirmas',
        array(
            'label' => 'Pirmas patiekalas',
            'section' => 'dienos_pietus',
            'settings' => 'patiekalas_pirmas'
        )));

    // 1-2 antras patiekalas
    $wp_customize->add_setting('patiekalas_antras', array(
        'default' => 'Antras patiekalas',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'patiekalas_antras',
        array(
            'label' => 'Antras patiekalas',
            'section' => 'dienos_pietus',
            'settings' => 'patiekalas_antras'
        )));

    // 1-3 pastabos
    $wp_customize->add_setting('dienos_pietu_pastabos', array(
        'default' => '-',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'dienos_pietu_pastabos',
        array(
            'label' => 'Pastabos',
            'section' => 'dienos_pietus',
            'settings' => 'dienos_pietu_pastabos'
        )));


    // 2-1 img sriuba
    $wp_customize->add_setting('img_patiekalas_pirmas', array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'img_patiekalas_pirmas',
        array(
            'label' => 'Pasirinkite pirmo patiekalo paveikslėlį',
            'section' => 'dienos_pietus',
            'settings' => 'img_patiekalas_pirmas'
        )));


    // 2-1 img sriuba
    $wp_customize->add_setting('img_patiekalas_antras', array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'img_patiekalas_antras',
        array(
            'label' => 'Pasirinkite antro patiekalo paveikslėlį',
            'section' => 'dienos_pietus',
            'settings' => 'img_patiekalas_antras'
        )));

    // 3 Fono spalva
    $wp_customize->add_setting('background_colorM', array(
        'default' => '#ffe93d',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'background_colorM',
        array(
            'label' => 'Fono spalva',
            'section' => 'dienos_pietus',
            'settings' => 'background_colorM'
        )));
}

// automatiškai iškviečia funkciją customizer_function()
add_action('customize_register', 'customizer_function');

// dienos pietų meniu konfigūravimo įtraukimas į 'customize'
add_action('customize_register', 'customizer_function_dienos_petus');

?>