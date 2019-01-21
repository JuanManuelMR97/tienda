<?php
    class Inicio_model extends CI_Model {
        
        function __construct() {
            parent::__construct();
            $this->load->database();
        }
        
        function get_productos_destacados() {
            $this->db->select('nombre, precio_venta, imagen');
            $this->db->from('producto');
            $this->db->where('destacado', TRUE);
            $query = $this->db->get();
            foreach ($query->result() as $row) {
                echo $row->nombre;
                echo $row->precio_venta;
                echo "<img src='" . $row->imagen . "' height='100' width='100'>";
            }
        }
    }
