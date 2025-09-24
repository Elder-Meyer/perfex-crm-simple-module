<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saludo extends AdminController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('saludo_model');
    }

    public function index()
    {
        if ($this->input->post()) {
            $mensaje = $this->input->post('mensaje');
            $this->saludo_model->guardar_saludo($mensaje);
            set_alert('success', 'Saludo guardado con éxito');
            redirect(admin_url('saludo'));
        }

        $data['title'] = _l('Saludo');
        $data['saludos'] = $this->saludo_model->get_saludos();
        $this->load->view('admin/saludo/index', $data);
    }
}