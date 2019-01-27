<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Inicio_model');
    }

    public function index() {
        $result = $this->Inicio_model->get_productos_destacados();
        $datos = array(
            'destacados' => $result
        );
        $this->load->view('inicio', $datos);
    }

}
