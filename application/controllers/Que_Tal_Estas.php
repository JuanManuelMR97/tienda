<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Que_Tal_Estas extends CI_Controller {
    
	public function index()
	{
            //$this->load->helper('url_helper');
            echo "¿Que tal estas?<br>";
            echo anchor('Hola_Mundo/Menu','Menu');
	}
        
        public function CuentaNumeros($numero=10)
	{
            for($i=$numero-1; $i>=0; $i--) {
                echo $i . " ";
            }
	}
}