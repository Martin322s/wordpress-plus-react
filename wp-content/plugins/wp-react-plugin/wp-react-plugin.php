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

    public function add_menu() {
        add_menu_page(
            __('React Demo', 'wp-react-plugin'),
            __('React Demo', 'wp-react-plugin'),
            'manage_options',
            self::SLUG,
            [$this, 'render_page'],
            'dashicons-admin-site',
            65
        );
    }

    public function render_page() {
        echo '<div class="wrap"><h1>React Demo</h1><div id="wp-react-root"></div></div>';
    }

    
}

new WP_React_Plugin_Starter();