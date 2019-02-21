<?php

class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /**
     * Devuelve la fila con los datos del usuario introducido en el caso de que 
     * exista su registro en la base de datos, de lo contrario devolverá un 
     * valor falso
     * @param string $nombre_usuario
     * @param string $contraseña
     * @return object/boolean
     */
    public function login_ok($nombre_usuario, $contraseña) {
        $this->db->where('nombre_usuario', $nombre_usuario);
        $this->db->where('contraseña', sha1($contraseña));
        $query = $this->db->get('usuario');

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return FALSE;
        }
    }

}
