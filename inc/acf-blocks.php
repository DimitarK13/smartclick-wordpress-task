<?php

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

        acf_register_block_type(array(
            'name' => 'closing-cta',
            'title' => __('Block: Closing CTA'),
            'description' => __('Closing CTA Section'),
            'render_template' => '/blocks/closing-cta/closing-cta.php',
            'category' => 'custom',
            'icon' => 'admin-comments',
            'keywords' => array('closing', 'cta')
        ));
    }
}