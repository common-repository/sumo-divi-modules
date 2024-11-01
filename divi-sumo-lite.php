<?php
/*
Plugin Name: Divi Sumo Lite
Plugin URI:  https://divisumo.com/
Description:  Ultimate Divi Toolkit
Version: 1.0.6
Author:      divisumo
Author URI:  https://www.divisumo.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: cwp-ds
Domain Path: /languages

DiviSumo-lite is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

DiviSumo-lite is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with DiviSumo-lite. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

if ( ! function_exists( 'cwp_ds_fs' ) ) {
    // Create a helper function for easy SDK access.
    function cwp_ds_fs() {
        global $cwp_ds_fs;
        if ( ! isset( $cwp_ds_fs ) ) {
            // Include Freemius SDK.
            require_once dirname(__FILE__) . '/freemius/start.php';
            $cwp_ds_fs = fs_dynamic_init( array(
                'id'                  => '5036',
                'slug'                => 'sumo-divi-modules',
                'premium_slug'        => 'cwp-divi-sumo',
                'type'                => 'plugin',
                'public_key'          => 'pk_b19a0f41f66fdc35fca014c29c2b4',
                'is_premium'          =>  false,
                'premium_suffix'      => '',
                // If your plugin is a serviceware, set this option to false.
                'has_premium_version' => true,
                'has_addons'          => false,
                'has_paid_plans'      => true,
                'has_affiliation'     => 'selected',
                'menu'                => array(
                    'slug'           => 'cwp-divi-sumo',
                    'support'        => false,
                ),
                'is_live'          => true,
            ));
        }
        return $cwp_ds_fs;
    }
    // Init Freemius.
    cwp_ds_fs();
    // Signal that SDK was initiated.
    do_action( 'cwp_ds_fs_loaded' );
}


if ( ! function_exists( 'cwpds_lite_initialize_extension' ) ):
/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
function cwpds_lite_initialize_extension() {
    if (! class_exists("CWP_DiviBundle")) {
      require_once plugin_dir_path( __FILE__ ) . 'includes/Sumo.php';
    }
}

add_action( 'divi_extensions_init', 'cwpds_lite_initialize_extension' );
endif;

// enqueue admin page

if (file_exists(plugin_dir_path(__FILE__) . '/admin/sumo-admin-page.php')) {
    require_once plugin_dir_path(__FILE__) . '/admin/sumo-admin-page.php';
}
add_action('admin_enqueue_scripts', 'ds_lite_admin_styles');
function ds_lite_admin_styles()
{
    wp_enqueue_style(
        'ds_admin_page',
        plugin_dir_url(__FILE__) . '/admin/admin-styles.css',
        false,
        '1.0.0'
    );
}

// if ( is_dir( plugin_dir_path(__FILE__) . 'test-sdk' ) ) {
//     require_once plugin_dir_path(__FILE__) . 'test-sdk/sdk.php';
//  }

// Check if premium plugin is activated then automatically lite versition deactivate
// if (!function_exists('activate_plugin')) {
// 	require_once ABSPATH . 'wp-admin/includes/plugin.php';	
// }

// if ( is_plugin_active( 'cwp-divi-sumo/divi-sumo.php' ) ):
// 	deactivate_plugins('divi-sumo-lite/divi-sumo-lite.php');
// endif;

