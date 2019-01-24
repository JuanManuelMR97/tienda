<?php

class Inicio_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function get_productos_destacados() {
        //$this->db->select('nombre, precio_venta, descripcion, imagen');
        //$this->db->from('producto');
        $this->db->where('destacado', TRUE);
        return $this->db->get('producto');
    }

}
