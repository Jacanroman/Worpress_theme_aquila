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
    //wp_enqueue_style('main-css', get_template_directory_uri().'/main.css',['stylesheet'], filemtime(get_template_directory().'/style.css'),'all');
    //la funcion anterior carga el main.css pero con dependencia
    //del stylesheet por lo que primero se cargara stylesheet y
    //despues se cargara main-css
    //tambien da un numero de version con filemtime y para que screen en este caso 'all'
    wp_enqueue_style('stylesheet', get_stylesheet_uri(),[],filemtime(get_template_directory().'/style.css'),'all');

}

add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');

 ?>