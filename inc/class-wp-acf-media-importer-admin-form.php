<?php

class WpACFMediaImporterForm {


	const ID = 'WP-ACF-media-importer-forms';

    public function init()
    {
        add_action('admin_menu', array($this, 'add_menu_page'), 20);
    }

    public function get_id()
    {
        return self::ID;
    }

    public function add_menu_page()
    {

        add_menu_page(
            esc_html__('Import ACF media related to the taxonomies'),
            esc_html__('Import ACF media'),
            'manage_options',
            $this->get_id(),
            array(&$this, 'load_view'),
            'dashicons-admin-page'
        );

        add_submenu_page(
            $this->get_id(),
            esc_html__('Submenu'),
            esc_html__('Submenu'),
            'manage_options',
            $this->get_id() . '_view1',
            array(&$this, 'load_view')
        );
    }

    function load_view()
    {}
}
