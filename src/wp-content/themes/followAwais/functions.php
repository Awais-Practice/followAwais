<?php
function followawais_theme_support(){
    // Adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');

}
add_action('after_setup_theme','followawais_theme_support');


function followawais_menus(){
   $locations = array(
       'primary' => "Desktop Primary Left Sidebar",
       'footer' => "Footer menu Items"
   );
   register_nav_menus($locations);

}
add_action('init','followawais_menus');




function followawais_register_styles(){
    $version =wp_get_theme()-> get('Version');
    wp_enqueue_style('followawais-style', get_template_directory_uri()."/style.css",array('followawais-bootstrap'), $version,'all');

    wp_enqueue_style('followawais-font-awesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css",array(),'5.13.0','all');
    wp_enqueue_style('followawais-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css",array(),'4.4.1','all');
}


add_action('wp_enqueue_scripts','followawais_register_styles');
function followawais_register_scripts(){

    wp_enqueue_script('followawais-jquery',"https://code.jquery.com/jquery-3.4.1.slim.min.js",array(),'3.4.1'); 
     wp_enqueue_script('followawais-popper',"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js",array(),'1.16.0');  

    wp_enqueue_script('followawais-bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js",array(),'4.4.1');  

  wp_enqueue_script('followawais-main', get_template_directory_uri()."assets/js/main.js",array(), '1.0','all');
   
}
add_action('wp_enqueue_scripts','followawais_register_scripts');


?>