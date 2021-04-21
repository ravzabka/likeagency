<?php

function likeagency_files() {
  
  
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;1,100;1,200;1,300;1,400;1,600;1,700&display=swap');
 
  
  if (strstr($_SERVER['SERVER_NAME'], 'likeagency.local')) {
    wp_enqueue_script('main-likeagency-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
  } else {
    wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.ebe48359c9ee7fc2e40d.js'), NULL, '1.0', true);
    wp_enqueue_script('main-likeagency-js', get_theme_file_uri('/bundled-assets/scripts.7495feb8d113108ce5fa.js'), NULL, '1.0', true);
    wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.7495feb8d113108ce5fa.css'));
  }

  
}

add_action('wp_enqueue_scripts', 'likeagency_files');

function likeagency_features() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', ['aside', 'gallery','link','image','quote', 'status','video','audio','chat'] );
	add_theme_support( 'html5' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'customize-selective-refresh-widgets' );

}

add_action('after_setup_theme', 'likeagency_features');


add_filter('acf/settings/save_json', 'my_acf_json_save_point');
 
function my_acf_json_save_point( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/acf-json';
    
    
    // return
    return $path;
    
}

add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function my_acf_json_load_point( $paths ) {
    
    // remove original path (optional)
    unset($paths[0]);
    
    
    // append path
    $paths[] = get_stylesheet_directory() . '/acf-json';
    
    
    // return
    return $paths;
    
}











