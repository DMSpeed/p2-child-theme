<?php


/*----------------------------------*/
/* Load CSS Files
/*----------------------------------*/	
if(!function_exists('load_theme_styles'))
{
function load_theme_styles()
{	
if (!is_admin()) {

$cssURL = get_template_directory_uri().'/css/';
$fontURL = 'http://fonts.googleapis.com/css?family=Roboto+Condensed:400italic,400,700';

// Registering New Styles	
wp_register_style('googleFont', $fontURL);	
wp_register_style('style', $cssURL.'/style.css', 'googleFont', '1.0', 'screen');
wp_register_style('print', $cssURL.'/print.css', 'googleFont', '1.0', 'print');

// Enqueing Styles
wp_enqueue_style('googleFont');	
wp_enqueue_style('style');
wp_enqueue_style('print');

}
}
}
add_action('wp_enqueue_style', 'load_theme_styles');

/*
Add another menu to the theme 
*/

function p2_add_secondary_menu() {

	register_nav_menus( array(
		'secondary' => __( 'Secondary Menu', 'p2' ),
	) );

}
add_filter( 'after_setup_theme', 'p2_add_secondary_menu' );

/* redirect users to front page after login */
function redirect_to_front_page() {
global $redirect_to;
if (!isset($_GET['redirect_to'])) {
$redirect_to = get_option('siteurl');
}
}
add_action('login_form', 'redirect_to_front_page');

?>