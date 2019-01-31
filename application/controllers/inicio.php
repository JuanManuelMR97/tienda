<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Inicio_model');
    }

    public function index() {
        $result = $this->Inicio_model->get_productos_destacados();
        $result1 = $this->Inicio_model->get_categorias();
        $datos = array(
            'destacados' => $result,
            'categorias' => $result1
        );
        $this->load->view('inicio', $datos);
    }
    
    public function productos_tienda($categoria_id) {
        $result = $this->Inicio_model->get_productos_categorias($categoria_id);
        $result1 = $this->Inicio_model->get_categorias();
        $datos = array(
            'destacados' => $result,
            'categorias' => $result1
        );
        $this->load->view('inicio', $datos);
    }

}
