<?php

class Detalles_producto_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_producto($id) {
        $this->db->where('id_producto', $id);
        $query = $this->db->get('producto');
        return $query->result();
    }

}
