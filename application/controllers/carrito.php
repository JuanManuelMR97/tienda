<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Carrito extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('cart');
        $this->load->helper('form');
        $this->load->model('Carrito_model');
    }

    public function index() {
        $this->load->view('carrito');
    }

    public function agregar_producto($id) {
        $producto = $this->Carrito_model->producto_selc($id);
        $cantidad = $this->input->post('cant');

        $carrito = $this->cart->contents();

        foreach ($carrito as $item) {
            if ($item['id'] == $id) {
                $item['qty'] += $cantidad;
            }
        }

        $data = array(
            'id' => $id,
            'qty' => $cantidad,
            'price' => $producto->precio_venta,
            'name' => $producto->nombre,
            'img' => $producto->imagen,
            'cod' => $producto->codigo
        );

        $this->cart->insert($data);
        redirect('Carrito');
    }

    public function eliminar_producto($rowid) {
        $producto = array(
            'rowid' => $rowid,
            'qty' => 0
        );

        $this->cart->update($producto);
        redirect('Carrito');
    }

    public function actualizar_carrito() {
        foreach ($this->cart->contents() as $item) {
            $item['qty'] = $this->input->post($item['rowid']);
        }
        $this->cart->update($item);
        redirect('Carrito');
    }

    public function eliminar_carrito() {
        $this->cart->destroy();
        redirect('Carrito');
    }

}
