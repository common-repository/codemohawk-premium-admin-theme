<?php

/*
Plugin Name: CodeMohawk Premium Admin Theme
Plugin URI: http://codemohawk.com.br
Description: Altere completamente a area admisnitrativa do seu WordPress, com cores e icones novos, tenha uma experiência premium com o CodeMohawk Premium Admin Theme.
Author: CodeMohawk
Version: 1.0
Author URI: http://codemohawk.com.br

*/

function codemohawkwp() {
	global $wp_version;
    if ( $wp_version == 4.6 ) {
	wp_enqueue_style('gridicons', plugins_url('css/gridicon.css', __FILE__));
    wp_enqueue_style('codemohawk-wp', plugins_url('css/codemohawk-wp.css', __FILE__));
    } if ( $wp_version == 4.7 ) {
	wp_enqueue_style('gridicons', plugins_url('css/gridicon.css', __FILE__));
    wp_enqueue_style('codemohawk-wp', plugins_url('css/codemohawk-wp-4.7.css', __FILE__));
    }
}

add_action('admin_enqueue_scripts', 'codemohawkwp');
add_action('login_enqueue_scripts', 'codemohawkwp');  

?>