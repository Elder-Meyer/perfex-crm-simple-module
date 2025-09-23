<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saludo extends AdminController {
    public function __construct() {
        parent::__construct();
        $this->load->model('saludo_model');
    }
    
    public function index() {
        $data['title'] = 'Módulo de Saludo'; // Título estático en español
        $data['mensaje'] = $this->saludo_model->get_mensaje();
        $this->load->view('saludo/admin/saludo/vista', $data);
    }
}