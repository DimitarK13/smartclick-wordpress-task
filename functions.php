<?php 

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('styles', get_stylesheet_directory_uri() . '/assets/styles/styles.css');

    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/assets/scripts/index.js');
});

add_action('after_setup_theme', function() {
    add_theme_support('title-tag');
});

register_nav_menus(
    array(
        'primary-nav' => 'Primary Menu',
        'footer-nav-one' => 'Footer Nav One',
        'footer-nav-two' => 'Footer Nav Two'
    )
);

add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );

add_theme_support( 'custom-logo' );

add_action('acf/init', 'my_acf_blocks');

function my_acf_blocks() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name' => 'hero',
            'title' => __('Block: Hero Section'),
            'description' => __('Custom Hero Section'),
            'render_template' => '/blocks/hero/hero.php',
            'category' => 'custom',
            'icon' => 'admin-comments',
            'keywords' => array('hero')
        ));
    }
}