<?php
/**
 * Plugin Name:     Vite WP Plugin
 * Plugin URI:      https://plugins.wp-cli.org/demo-plugin
 * Description:     This is a wp-cli demo plugin
 * Author:          wp-cli
 * Author URI:      https://wp-cli.org
 * Text Domain:     wpcli-demo-plugin
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Vite_WP_Plugin
 */

// Your code starts here.

 
 
add_action( 'admin_menu', 'vite_wp_register' );

function vite_wp_register()
{
    add_menu_page(
        'Vite WP',     // page title
        'Vite WP',     // menu title
        'manage_options',   // capability
        'vite-wp',     // menu slug
        'vite_wp_render' // callback function
    );
}
function vite_wp_render()
{ 

    print '<div id="app"></div>';
    print ' <script type="module" src="http://localhost:5173/src/main.js"></script>';
   
    
   

 
}