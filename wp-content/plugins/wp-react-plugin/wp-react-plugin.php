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

    public function enqueue_admin_assets($hook) {
        if ($hook !== 'toplevel_page_' . self::SLUG) return;

        $base = plugin_dir_url(__FILE__);
        $path = plugin_dir_path(__FILE__);

        $js  = $base . 'build/index.js';
        $css = $base . 'build/index.css';

        $ver_js  = file_exists($path.'build/index.js')  ? filemtime($path.'build/index.js')  : '1.0.0';
        $ver_css = file_exists($path.'build/index.css') ? filemtime($path.'build/index.css') : '1.0.0';

        wp_enqueue_style('wp-react-plugin', $css, [], $ver_css);
        wp_enqueue_script('wp-react-plugin', $js, ['wp-element'], $ver_js, true);

        wp_localize_script('wp-react-plugin', 'WP_REACT_PLUGIN', [
            'restUrl' => esc_url_raw( rest_url() ),
            'nonce'   => wp_create_nonce('wp_rest')
        ]);
    }
}

new WP_React_Plugin_Starter();