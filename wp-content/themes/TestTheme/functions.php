<?php

function customLinks () {
  wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main_js.js');
}

add_action('wp_enqueue_scripts', 'customLinks');
add_theme_support( 'post-thumbnails' ); 



add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
}
?>