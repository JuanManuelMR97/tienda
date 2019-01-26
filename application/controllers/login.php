<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index() {
        if ($this->session->userdata('login')) {
            redirect('Inicio');
        } else {
            $this->load->view('login');
        }
    }

    public function login() {
        $nombre_usuario = $this->input->post('nombre_usuario');
        $contraseña = $this->input->post('contraseña');
        $conectado = $this->Login_model->login($nombre_usuario, $contraseña);

        if ($conectado) {
            $datos = array(
                'login' => TRUE,
                'id_usuario' => $conectado->id_usuario,
                'nombre_usuario' => $conectado->nombre_usuario
            );
            $this->session->set_userdata($datos);
            $this->index();
        } else {
            redirect('Login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        $this->index();
    }

}
