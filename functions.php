 <?php

    function add_theme_scripts(){

        wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css',false,'1.1','all');

        wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css',false,'1.1','all');
    
    
        wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), 2.1, true);
    
        wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array(), 1.1, true);

        wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.1.js', array(), 1.1, true);

    }


add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

?>