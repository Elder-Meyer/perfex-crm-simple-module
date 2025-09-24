<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saludo_model extends App_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function guardar_saludo($mensaje)
    {
        $data = [
            'mensaje' => $mensaje,
            'created_at' => date('Y-m-d H:i:s'),
        ];
        $this->db->insert(db_prefix() . 'saludos', $data);
        return $this->db->insert_id();
    }

    public function get_saludos()
    {
        return $this->db->get(db_prefix() . 'saludos')->result_array();
    }
}