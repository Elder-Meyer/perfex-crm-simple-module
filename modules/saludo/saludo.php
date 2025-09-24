<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
Module Name: Saludo
Description: Sample module SALUDO.
Version: 2.3.0
Requires at least: 2.3.*
*/

hooks()->add_action('admin_init', 'saludo_module_menu_item');
// hooks()->add_action('module_saludo_activate', 'saludo_install');

function saludo_module_menu_item()
{
    $CI = &get_instance();
    $CI->app_menu->add_sidebar_menu_item('saludo-menu-item', [
        'name'     => 'Saludo',
        'href'     => admin_url('saludo'),
        'position' => 20,
        'icon'     => 'fa-solid fa-face-laugh-squint fa-bounce',
    ]);
}

// function saludo_install()
// {
//     $CI = &get_instance();
//     if (!$CI->db->table_exists(db_prefix() . 'saludos')) {
//         $CI->db->query('CREATE TABLE `' . db_prefix() . 'saludos` (
//             `id` INT(11) NOT NULL AUTO_INCREMENT,
//             `mensaje` TEXT NOT NULL,
//             `created_at` DATETIME NOT NULL,
//             PRIMARY KEY (`id`)
//         ) ENGINE=InnoDB DEFAULT CHARSET=' . $CI->db->char_set . ';');
//     }
// }