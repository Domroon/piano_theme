<?php

    function piano_theme_register_styles(){
        wp_enqueue_style('piano_theme-bootstrap', get_template_directory_uri()."/bootstrap.css", array(), '1.0', 'all');
        wp_enqueue_style('piano_theme-font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css", array(), '1.0', 'all');
        wp_enqueue_style('piano_theme-style', get_template_directory_uri()."/style.css", array(), '1.0', 'all');
    }

    add_action( 'wp_enqueue_scripts', 'piano_theme_register_styles')

?>