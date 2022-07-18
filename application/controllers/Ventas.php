<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas extends CI_Controller {

    public function __construct() {
	  parent:: __construct();
	  //$this->load->model("Ventas_model");
	  $this->load->model("Inventarios_model");	
	}

    public function getProductoVenta() {
      $codigo = $this->input->post("codigo_barras");
      $producto = $this->Inventarios_model->getProductoVenta($codigo);
    
      if($producto){
        echo json_encode($producto);
      }
      else {
        echo "error";
      }
    }

}