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

// UnderStrap's includes directory.
$understrap_inc_dir = 'inc';

// Array of files to include.
$understrap_includes = array(
	'/acf-blocks.php',        // ACF Blocks
);

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once get_theme_file_path( $understrap_inc_dir . $file );
}