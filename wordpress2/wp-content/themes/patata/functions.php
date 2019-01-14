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

?>