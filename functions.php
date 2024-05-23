<?php

/*
	Enqueue Styles & Scripts
*/

function esa_enqueue_child_styles_and_scripts() {

    $dir = get_stylesheet_directory_uri();
    wp_enqueue_style( 'sea-part-150-styles', $dir . '/public/css/main.css', '', false );
    wp_enqueue_script('sea-part-150-scripts', $dir . '/src/js/main.js', array(), false, true );

}
add_action( 'wp_enqueue_scripts', 'esa_enqueue_child_styles_and_scripts', 99 );


add_filter("script_loader_tag", "add_module_to_my_script", 10, 3);
function add_module_to_my_script($tag, $handle, $src) {
    if ('sea-part-150-scripts' === $handle) {
        $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
    }
    return $tag;
}