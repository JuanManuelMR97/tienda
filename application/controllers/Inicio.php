<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function index() {
        $this->load->model('Inicio_model');
        $result = $this->Inicio_model->get_productos_destacados();
        $datos = array(
            'destacados' => $result
        );
        $this->load->view('plantilla_inicio', $datos);
    }

}
