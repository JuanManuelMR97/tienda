<?php

class Inicio_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_productos_destacados() {
        $this->db->where('destacado', TRUE);
        return $this->db->get('producto');
    }

    public function get_categorias() {
        $this->db->select('id_categoria, nombre');
        return $this->db->get('categoria');
    }

    public function get_productos_categorias($categoria) {
        $this->db->where('categoria_id', $categoria);
        return $this->db->get('producto');
    }

}
