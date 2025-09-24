<?php

/**
 * Ensures that the module init file can't be accessed directly, only within the application.
 */
defined('BASEPATH') or exit('No direct script access allowed');

/*
Module Name: Sample Perfex CRM Module
Description: Sample module description.
Version: 2.3.0
Requires at least: 2.3.*
*/

hooks()->add_action('admin_init', 'sample_module_menu_item_collapsible');
register_payment_gateway('example_gateway', 'sample_module');

function sample_module_menu_item_collapsible()
{
    $CI = &get_instance();

    $CI->app_menu->add_sidebar_menu_item('custom-menu-unique-id', [
        'name'     => 'Parent Item', // The name if the item
        'collapse' => true, // Indicates that this item will have submitems
        'position' => 10, // The menu position
        'icon'     => 'fa fa-question-circle', // Font awesome icon
    ]);

    
    $base_url = admin_url('sample_module');
    // The first paremeter is the parent menu ID/Slug
    $CI->app_menu->add_sidebar_children_item('custom-menu-unique-id', [
        'slug'     => 'child-to-custom-menu-item', // Required ID/slug UNIQUE for the child menu
        'name'     => 'Sub Menu', // The name if the item
        'href'     => $base_url, // URL of the item
        'position' => 5, // The menu position
        'icon'     => 'fa fa-exclamation', // Font awesome icon
    ]);
}

