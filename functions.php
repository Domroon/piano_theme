<?php

    function piano_theme_register_styles(){
        $version = wp_get_theme()->get( 'Version' );
        wp_enqueue_style('piano_theme-bootstrap', get_template_directory_uri()."/bootstrap.css", array(), '5.0.0-beta3', 'all');
        wp_enqueue_style('piano_theme-style', get_template_directory_uri()."/style.css", array(), $version, 'all');
        wp_enqueue_style('piano_theme-font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css", array(), '5.15.3', 'all');
    }

    add_action( 'wp_enqueue_scripts', 'piano_theme_register_styles')

?>