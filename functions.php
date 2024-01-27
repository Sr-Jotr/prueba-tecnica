<?php 
function estilos (){
    wp_enqueue_style( 'mis-estilos', get_stylesheet_uri() );
    wp_enqueue_style( 'mis-estilos-home', get_template_directory_uri() . '/css/my-custom.css' );

    wp_enqueue_style( 'bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2'); 
};
add_action('wp_enqueue_scripts', 'estilos');

function scripts (){
    wp_enqueue_script( 'mis-scripts', get_template_directory_uri() .'/js/script.js', array(), '1.0', true );
    wp_enqueue_script( 'fontawesome-js', 'https://kit.fontawesome.com/25ddb157f3.js', array(), false, false );
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js', array('jquery'), false, true );
    wp_enqueue_script( 'popper-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', array(), false, true );
};
add_action('wp_enqueue_scripts', 'scripts');

function registrar_menus() {
    register_nav_menus(array( 'menu-principal' => 'El Menú Principal', ));
}
add_action('init', 'registrar_menus');

?>