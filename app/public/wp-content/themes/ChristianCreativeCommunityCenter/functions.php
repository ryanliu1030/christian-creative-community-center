<?php

    function christianCreativeCommunityCenter_register_styles() {
        $version = wp_get_theme()->get( 'Version' );

        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), $version, 'all' );
    }


    add_action( 'wp_enqueue_scripts', 'christianCreativeCommunityCenter_register_styles' );


    function christianCreativeCommunityCenter_register_scripts() {
        $version = wp_get_theme()->get( 'Version' );

        wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/main.js', array(), $version, true );
    }
?>