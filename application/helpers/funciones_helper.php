<?php

defined('BASEPATH') OR exit('No direct script access allowed');

function dbresult_to_array($rs, $clave, $valor) {
    $res = [];
    foreach ($rs as $reg) {
        $res[$reg->{$clave}] = $reg->{$valor};
    }
    return $res;
}

function dbresult_to_array_null($rs, $clave, $valor, $default = '') {
    $res = ['' => $default];
    foreach ($rs as $reg) {
        $res[$reg->{$clave}] = $reg->{$valor};
    }
    return $res;
}

function get_categorias() {
    $ci = get_instance();
    $ci->db->select('id_categoria, nombre');
    $query = $ci->db->get('categoria');
    return $query->result();
}

function get_provincias() {
    $ci = get_instance();
    $ci->db->select('cod, nombre');
    $query = $ci->db->get('provincias');
    return $query->result();
}
