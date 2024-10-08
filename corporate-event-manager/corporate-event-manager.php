<?php
/**
 * Plugin Name: Corporate Event Manager by Junaid
 * Plugin URI: https://github.com/JunaidS111
 * Description: A plugin for managing corporate-level events.
 * Version: 1.0.0
 * Author: Junaid Shaikh 
 * Author URI: https://junaids111.github.io/
 * Text Domain: corporate-event-manager
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly for test mode
}

if(!defined('ABSPATH')){
    //exit; 
}

// Load plugin files
require_once plugin_dir_path(__FILE__) . 'includes/event-cpt.php';
require_once plugin_dir_path(__FILE__) . 'includes/event-functions.php';
require_once plugin_dir_path(__FILE__) . 'includes/event-db.php';
//require_once plugin_dir_path(__FILE__) . 'includes/event-privacy.php';
//require_once plugin_dir_path(__FILE__) . 'includes/event-desk.php';
//require_once plugin_dir_path(__FILE__) . 'includes/event-manage.php';

// Activation and Deactivation Hooks
function cem_activate() {
    // Trigger functions on activation of the plugin.
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'cem_activate'); //activate the plugin

function cem_deactivate() {
    // Clean up on deactivation of the plugin.
    flush_rewrite_rules(); // Once deactivate all data clear
}
register_deactivation_hook(__FILE__, 'cem_deactivate');
