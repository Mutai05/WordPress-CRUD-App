<?php
/**
 * Plugin Name: Event CRUD Plugin
 * Description: A simple CRUD plugin for managing events.
 * Version: 1.0.0
 * Author: Your Name
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

// Activation and Deactivation hooks (For creating/removing database table on activation/deactivation)

// Include necessary files
include_once(plugin_dir_path(__FILE__) . '/includes/event-functions.php');
include_once(plugin_dir_path(__FILE__) . '/includes/event-admin.php');
include_once(plugin_dir_path(__FILE__) . '/includes/event-shortcodes.php');