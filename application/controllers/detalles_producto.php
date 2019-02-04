<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Detalles_producto extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Detalles_producto_model');
    }

    public function index() {
        $this->load->view('detalles_producto');
    }

    public function get_zapatilla($id) {
        $result = $this->Detalles_producto_model->get_producto($id);
        $datos = array(
            'producto' => $result
        );
        $this->load->view('detalles_producto', $datos);
    }

}
