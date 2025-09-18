<?php

use Cocur\Slugify\Bridge\ZF2\Module;

defined('BASEPATH') or exit('No direct script access allowed');

/*
Module Name: Saludo
Description: Sample module SALUDO.
Version: 2.3.0
Requires at least: 2.3.*
*/

class Saludo extends Module {
    public $version = '1.0.0';
    
    public function info() {
        return [
            'name' => [
                'en' => 'Saludo Module',
                'es' => 'Módulo de Saludo'
            ],
            'description' => [
                'en' => 'A simple greeting module.',
                'es' => 'Un módulo simple de saludo.'
            ],
            'version' => $this->version,
            'author' => 'Tu Nombre'
        ];
    }
    
    public function install() {
        return true; // Lógica para instalación (crear tablas, etc.)
    }
    
    public function uninstall() {
        return true; // Lógica para desinstalación
    }
    
}