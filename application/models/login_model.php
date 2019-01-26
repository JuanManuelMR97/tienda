<?php

class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function login($nombre_usuario, $contraseña) {
        $this->db->where('nombre_usuario', $nombre_usuario);
        $this->db->where('contraseña', $contraseña);
        $query = $this->db->get('usuario');

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return FALSE;
        }
    }

}
