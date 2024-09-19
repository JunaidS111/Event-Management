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
    exit; // Exit if accessed directly
}

if(!defined('ABSPATH')){
    //exit; //It will exit full process directly
}

// Load plugin files
require_once plugin_dir_path(__FILE__) . 'includes/event-cpt.php';
require_once plugin_dir_path(__FILE__) . 'includes/event-functions.php';
require_once plugin_dir_path(__FILE__) . 'includes/event-db.php';
require_once plugin_dir_path(__FILE__) . 'includes/event-privacy.php';

// Activation and Deactivation Hooks
function cem_activate() {
    // Trigger functions on activation of the plugin.
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'cem_activate');

function cem_deactivate() {
    // Clean up on deactivation of the plugin.
    flush_rewrite_rules();
}
register_deactivation_hook(__FILE__, 'cem_deactivate');
