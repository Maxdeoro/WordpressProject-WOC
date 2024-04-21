<?php
    add_action('wp_enqueue_scripts', 'childhood_styles');
    add_action('wp_enqueue_scripts', 'childhood_scripts');

    function childhood_styles() {
        wp_enqueue_style('childhood-style', get_stylesheet_uri());
        // additional styles
        // wp_enqueue_style('header-style', 
        //     get_template_directory_uri() . '/assets/styles/main.min.css');
        // wp_enqueue_style('animate-style', 
        //     get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');

    };

    function childhood_scripts() {
        wp_enqueue_script('childhood-script', get_template_directory_uri() . '/js/script.js', 
            array(), null, true);
    };
?>