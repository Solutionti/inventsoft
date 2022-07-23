<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventarios extends CI_Controller {

    public function __construct() {
		parent:: __construct();
		$this->load->model("Inventarios_model");
		
	}

    public function createProductos() {
        $categoria = $this->input->post("categoria");
        $nombre = $this->input->post("nombre");
        $codigo = $this->input->post("codigo");
        $codigo_barras = $this->input->post("codigo_barras");
        $medida = $this->input->post("medida");
        $cantidad = $this->input->post("cantidad");
        $precio = $this->input->post("precio");
        $precio_proveedor = $this->input->post("precio_proveedor");
        $moneda = $this->input->post("moneda");
        $descripcion = $this->input->post("descripcion");

        $data = [
          "categoria" => $categoria,
          "nombre" => $nombre,
          "codigo" => $codigo,
          "codigo_barras" => $codigo_barras,
          "medida" => $medida,
          "cantidad" => $cantidad,
          "precio" => $precio,
          "precio_proveedor" => $precio_proveedor,
          "moneda" => $moneda,
          "descripcion" => $descripcion
        ];
        $this->Inventarios_model->createProductos($data);
    }

    public function getStock($id) {
      $stock = $this->Inventarios_model->getStock($id);

      echo json_encode($stock);
    }

    public function crearEntrada() {
      $cantidad = $this->input->post("cantidad");
      $total = $this->input->post("total");
      $producto = $this->input->post("producto");
      $seccion = $this->input->post("seccion");
      $motivo = $this->input->post("motivo");
      $comentarios = $this->input->post("comentarios");

      $data = [
        "cantidad" => $cantidad,
        "producto" => $producto,
        "seccion" => $seccion,
        "motivo" => $motivo,
        "comentarios" => $comentarios,
        "total" => $total
      ];
      $this->Inventarios_model->crearEntrada($data);
      $this->Inventarios_model->actualizarStock($total, $producto);
    }

    public function crearSalida() {
        $cantidad = $this->input->post("cantidad");
        $total = $this->input->post("total");
        $producto = $this->input->post("producto");
        $seccion = $this->input->post("seccion");
        $motivo = $this->input->post("motivo");
        $comentarios = $this->input->post("comentarios");

        $data = [
            "cantidad" => $cantidad,
            "producto" => $producto,
            "seccion" => $seccion,
            "motivo" => $motivo,
            "comentarios" => $comentarios,
            "total" => $total
        ];
        $this->Inventarios_model->crearSalida($data);
        $this->Inventarios_model->actualizarStock($total, $producto);
        
    }
}