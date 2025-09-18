<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saludo_model extends CI_Model {
    public function get_mensaje() {
        return '¡Hola, Perfex!';
    }
}