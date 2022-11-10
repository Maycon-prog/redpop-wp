<?php
function load_scripts()
{
    wp_enqueue_style(
        'style',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css'),
    );
    wp_enqueue_style(
        'bootstrap-icons',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css',
        array(),
        filemtime(get_template_directory() . '/style.css'),
        'all'
    );

    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css',
        array(),
        null,
        'all'
    );

    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js',
        array(),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'load_scripts');
