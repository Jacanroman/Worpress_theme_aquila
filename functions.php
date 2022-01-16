<?php

/**
 * Theme Functions
 * 
 * @package Aquila
 */

 /*
echo '<pre>';
print_r(get_stylesheet_uri());
wp_die();
*/

function aquila_enqueue_scripts(){
    /*
    wp_enqueue_style('main-css', get_template_directory_uri().'/main.css',['stylesheet'], filemtime(get_template_directory().'/style.css'),'all');
    la funcion anterior carga el main.css pero con dependencia
    del stylesheet por lo que primero se cargara stylesheet y
    despues se cargara main-css
    tambien da un numero de version con filemtime y para que screen en este caso 'all'
    wp_enqueue_style('stylesheet', get_stylesheet_uri(),[],filemtime(get_template_directory().'/style.css'),'all');

    para incluir script
    wp_enqueue_script('main-js', get_template_directory_uri().'/assets/main.js',[],filemtime(get_template_directory().'/assets/main.js'), true);

    para hace lo anterior es mejor hacer primero el registro y luegos el enqueue
    wp_register_style('style-css', get_stylesheet_uri(),[],filemtime(get_template_directory().'/style.css'),'all');

    if(is_archive()){
        wp_enqueue_style('style-css');
    }
    */

    //esta es la mejor manera de hacerlo primero register y despues enqueue

    wp_register_style('style-css', get_stylesheet_uri(),[],filemtime(get_template_directory().'/style.css'),'all');
    wp_register_script('main-js', get_template_directory_uri().'/assets/main.js',[],filemtime(get_template_directory().'/assets/main.js'), true);

    wp_enqueue_style('style-css');
    wp_enqueue_script('main-js');
}

add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');

 ?>