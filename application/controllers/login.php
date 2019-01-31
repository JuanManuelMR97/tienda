<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('funciones_helper', 'form'));
        $this->load->library('form_validation');
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
        $this->form_validation->set_rules('user_name', 'Nombre de usuario', 'required');
        $this->form_validation->set_rules('password', 'Contraseña', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $nombre_usuario = $this->input->post('user_name');
            $contraseña = $this->input->post('password');
            $conectado = $this->Login_model->login_ok($nombre_usuario, $contraseña);

            if ($conectado) {
                $datos = array(
                    'login' => TRUE,
                    'id_usuario' => $conectado->id_usuario,
                    'nombre_usuario' => $conectado->nombre_usuario
                );
                $this->session->set_userdata($datos);
                $this->index();
            }
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        $this->index();
    }

}
