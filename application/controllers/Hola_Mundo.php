<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hola_Mundo extends CI_Controller {
    
	public function index()
	{
            //$this->load->helper('url_helper');
            echo "Hola Mundo<br>";
            echo anchor('Hola_Mundo/Menu','Menu');
	}
	
	public function HolaMundo()
	{
	    echo "Hola Mundo";
	}
	
	public function Menu()
	{
            //$this->load->helper('url_helper');
	    echo anchor('Hola_Mundo/HolaMundo','Hola Mundo') . "<br>";
	    echo anchor('Hola_Mundo/AdiosMundo','Adios Mundo') . "<br>";
            echo anchor('Que_Tal_Estas','Controlador "Que Tal Estas"') . "<br>";
            echo anchor('Que_Tal_Estas/CuentaNumeros/5','Números menores que 5') . "<br>";
            echo anchor('Que_Tal_Estas/CuentaNumeros/10','Números menores que 10') . "<br>";
            echo anchor('Que_Tal_Estas/CuentaNumeros/100','Números menores que 100');
	}
	
	public function AdiosMundo()
	{
	    echo "Adios Mundo";
	}
}