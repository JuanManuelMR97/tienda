<?php

class Inicio_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_productos_destacados() {
        $this->db->where('destacado', TRUE);
        return $this->db->get('producto');
    }

}
