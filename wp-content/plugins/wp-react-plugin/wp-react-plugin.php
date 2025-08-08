<?php
/**
 * Plugin Name: WP React Plugin (Starter)
 * Description: Демонстративна admin страница с React (Vite build).
 * Version: 1.0.0
 * Text Domain: wp-react-plugin
 */

if (!defined('ABSPATH')) { exit; }

class WP_React_Plugin_Starter {
    const SLUG = 'wp-react-plugin';

    public function __construct() {
        add_action('admin_menu', [$this, 'add_menu']);
        add_action('admin_enqueue_scripts', [$this, 'enqueue_admin_assets']);
    }

    
}

new WP_React_Plugin_Starter();