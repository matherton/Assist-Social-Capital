<?php

/* Enquire parent and child styles: parent before child Enterprise Child Theme*/

function enterprise_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'enterprise_child_enqueue_styles' );

function enterprise_child_enqueue_child() {
	wp_enqueue_style( 'child-style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'enterprise_child_enqueue_child', 11 );


/*function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );*/
?>