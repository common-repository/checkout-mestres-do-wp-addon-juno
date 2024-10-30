<?php
/**
Plugin Name: Checkout Mestres do WP Addon Juno
Plugin URI: http://www.mestresdowp.com.br/
Description: Personaliza os campos do Juno no Checkout Mestres do WP.
Version: 1.0
Author: Mestres do WP
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Text Domain: checkout-mwp-addon-juno
 */
 /*
	Copyright 2021  Mestres do WP  (email : contato@mestresdowp.com.br)
*/
define( 'CWMP_JUNO_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'CWMP_JUNO_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );


function cwmp_addon_juno_load_plugin_css() {
	if(is_checkout()){
    wp_enqueue_style(
        'cwmp-juno-addon-print-style', 
        CWMP_JUNO_PLUGIN_URL."assets/css/style.css", 
        array(), 
        '20130821',
    );
	
	}
}
add_action( 'wp_enqueue_scripts', 'cwmp_addon_juno_load_plugin_css',999 );
