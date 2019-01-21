<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Inicio extends CI_Controller {
        
        public function index() {
            $this->load->model('Inicio_model');
            $this->Inicio_model->get_productos_destacados();
            /*$datos = array(
                'nombre' => nombre,
                'precio_venta' => precio_venta,
                'imagen' => imagen
            );
            $this->load->view('inicio', $datos);*/
            $this->load->view('inicio');
        }
    }