<?php

function montheme_supports (){
    add_theme_support('title-tag');
}

function montheme_register_assets (){
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', ['bundle'], null, true );
    wp_deregister_script('jquery');
    wp_register_script('bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

function montheme_title_separator($title){
    return '|';
}

function montheme_document_title_parts($title){
   unset($title["tagline"]);
    $title['demo'] ='salut';
   return $title;
}

add_action('after_setup_theme', 'montheme_supports');  
add_action('wp_enqueue_scripts', 'montheme_register_assets');  
add_filter('document_title_separator', 'montheme_title_separator');
add_filter('document_title_parts', 'montheme_document_title_parts');