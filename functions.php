<?php
remove_filter('the_content', 'wpautop');     //записи
remove_filter('the_excerpt', 'wpautop');     //цитаты
remove_filter('comment_text', 'wpautop');    //комментарии
add_filter( 'wp_default_scripts', $af = static function( &$scripts) {
	if(!is_admin()) {
		$scripts->remove( 'jquery');
		$scripts->add( 'jquery', false, array( 'jquery-core' ), '1.12.4' );
	}
}, PHP_INT_MAX );
unset( $af );
wp_deregister_script( 'jquery_core' );
wp_deregister_script( 'jquery' );
add_action( 'wp_enqueue_scripts', 'style_head' );
add_action( 'wp_footer', 'script_footer' );
function style_head() {
	wp_enqueue_style( 'bootstrap_style', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style( 'font_awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
	//wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css', '', filemtime( get_stylesheet_directory() . '/style.css' ));
	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/assets/css/main.css', '', filemtime( get_stylesheet_directory() . '/assets/css/main.css' ));
	//wp_enqueue_style( 'main', get_stylesheet_uri() );
}
function script_footer() {
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js');
	wp_enqueue_script( 'bootstrap_script', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
	wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.js', '', filemtime( get_stylesheet_directory() . '/assets/js/app.js' ));
}

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails', array( 'post' ) );