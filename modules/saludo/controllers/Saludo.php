<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saludo extends AdminController  // Nota: AdminController, no Admin_controller (es singular en Perfex)
{
    public function __construct()
    {
        parent::__construct();
        // Aquí puedes cargar modelos si los necesitas, ej: $this->load->model('Saludo_model');
    }

    public function index()
    {
        // Título de la página (aparece en el header del admin)
        $data['title'] = 'Titulo de saludo';  // _l() es para traducciones, pero por ahora usa un string simple

        // Carga la vista con datos (opcional)
        $data['mensaje'] = '¡Hola, mundo! Este es tu primer módulo en Perfex CRM. 😊';

        // Carga la vista principal
        $this->load->view('admin/saludo/index', $data);
    }
}