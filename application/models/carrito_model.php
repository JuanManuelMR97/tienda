<?php

class Carrito_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function producto_selc($id) {
        $this->db->where('id_producto', $id);
        $productos = $this->db->get('producto');
        foreach ($productos->result() as $producto) {
            $data[] = $producto;
        }
        return $producto;
    }

}
