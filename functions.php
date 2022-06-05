<?php

/**
 * Gutenberg style editor
 */
add_action('wp_enqueue_scripts', 'tiadotdev_enqueue_theme_scripts');
function tiadotdev_enqueue_theme_scripts() {
    wp_enqueue_script( 'theme-editor', get_template_directory_uri() . '/assets/js/editor.js', array( 'wp-blocks', 'wp-dom' ), filemtime( get_template_directory() . '/assets/js/editor.js' ), true );
}
