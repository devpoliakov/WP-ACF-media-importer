<?php

/*
Plugin Name: WP ACF media importer
Description: Helps import media in ACF related to the taxonomies.
Author: Yurii Poliakov
Version: 1.0.1
Author URI: http://devpoliakov.com/
*/


require plugin_dir_path( __FILE__ ) . 'inc/class-wp-acf-media-importer-admin-form.php';
function run_ct_wp_admin_form() {
    $plugin = new WpACFMediaImporterForm();
    $plugin->init();
}
run_ct_wp_admin_form();