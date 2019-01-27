<?php

class Registro_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function insertar_usuario() {
        $datos = array(
            'dni' => $this->input->post('dni'),
            'nombre' => $this->input->post('nombre'),
            'apellidos' => $this->input->post('apellidos'),
            'direccion' => $this->input->post('direccion'),
            'codigo_postal' => $this->input->post('cp'),
            'provincia' => $this->input->post('provincia'),
            'email' => $this->input->post('email'),
            'nombre_usuario' => $this->input->post('nombre_usuario'),
            'contraseña' => $this->input->post('contraseña')
        );
        $this->db->insert('usuario', $datos);
    }

}
