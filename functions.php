<?php 

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('styles', get_stylesheet_directory_uri() . '/assets/styles/styles.css');

    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/assets/scripts/index.js');
})

?>