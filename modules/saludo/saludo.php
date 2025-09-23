<?php

use Cocur\Slugify\Bridge\ZF2\Module;

defined('BASEPATH') or exit('No direct script access allowed');

/*
Module Name: Saludo
Description: Sample module SALUDO.
Version: 2.3.0
Requires at least: 2.3.*
*/
hooks()->add_action('admin_init', 'saludo_module_init');
hooks()->add_action('admin_init', 'saludo_module_menu_item');

function saludo_module_init() { 
    return [
        'name' => [
            'en' => 'Saludo Module',
            'es' => 'Módulo de Saludo en español'
        ],
        'description' => [
            'en' => 'A simple greeting module.',
            'es' => 'Un módulo simple de saludo.'
        ],
        'version' => '1.0.0',
        'author' => 'Tu Nombre'
    ];
 
}

function saludo_module_menu_item() {
    $CI = &get_instance();
    $CI->app_menu->add_sidebar_menu_item('saludo-menu-item', [
        'name'     => 'Saludo',
        'href'     => admin_url('saludo'),
        'position' => 20,
        'icon'     => 'fa-solid fa-face-laugh-squint fa-bounce',
    ]);
}