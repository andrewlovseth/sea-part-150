<?php

/*
	Enqueue Styles & Scripts
*/

function esa_enqueue_child_styles_and_scripts() {

    $dir = get_stylesheet_directory_uri();
    wp_enqueue_style( 'sea-part-150-styles', $dir . '/public/css/main.css', '', false );

    $fslightbox_version = filemtime(get_stylesheet_directory() . '/src/js/fslightbox.js');
    wp_enqueue_script('isotope-scripts', 'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js', array(), false, true );
    wp_enqueue_script( 'fslightbox-js', get_stylesheet_directory_uri() . '/src/js/fslightbox.js', array(), $fslightbox_version, true );

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


function trimWWW($url) {
    // Check if the URL starts with "www."
    if (substr($url, 0, 4) === 'www.') {
        // Remove "www." from the beginning of the URL
        return substr($url, 4);
    }
    // Return the original URL if it doesn't start with "www."
    return $url;
}


function formatBytes($bytes) {
    if ($bytes > 0) {
        $i = floor(log($bytes) / log(1024));
        $sizes = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
        return sprintf('%.02F', round($bytes / pow(1024, $i),1)) * 1 . ' ' . @$sizes[$i];
    } else {
        return 0;
    }
}