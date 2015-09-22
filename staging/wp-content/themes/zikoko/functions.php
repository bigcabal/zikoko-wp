<?php

add_action( 'wp_enqueue_scripts', 'tc_enqueue_styles' );
function tc_enqueue_styles() {
    wp_enqueue_style( 'simplemag-style', get_template_directory_uri() . '/style.css' );

}