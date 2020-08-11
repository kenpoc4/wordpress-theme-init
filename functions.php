<?php

// <!-- Registro de: Hojas CSS, librerias y scripts  -->
function kmir_styles_scripts(){
    // Registro de Hoja de estilos CSS
    wp_enqueue_style('style', get_stylesheet_uri(), array( 'normalize', 'kmir_style' ), '2.0.0');

    // Registro de fuentes


    // Registro de archivo JS 'normalize', 'kmir_style'), '1.0.0'
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts',  'kmir_styles_scripts');