<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("Patologia_model");
		$this->load->model("Laboratorio_model");
		$this->load->model("Lineatiempo_model");
		$this->load->model("Inventarios_model");
		$this->load->model("Usuarios_model");
	}

    public function index() {
        $this->load->view("login_clientes");
    }

	public function inicio(){
		
		$this->load->view("clientes/inicio");
	}
	
	public function laboratorio() {
		$administradores = $this->Usuarios_model->getAdministtradores();
		$data = [
		  "administrador" => $administradores,
		];
	  $this->load->view("clientes/laboratorio", $data);
	}

	public function patologia() {
		$productos = $this->Inventarios_model->getProductos();
		$categorias = $this->Inventarios_model->getCategorias();
        $data = [
            "producto" => $productos,
			"categoria" => $categorias
        ];
		$this->load->view("clientes/patologia", $data);
	}

	public function ecografias() {
	  $this->load->view("clientes/ecografias");
	}

	public function gastos() {
		$this->load->view("clientes/gastos");
	  }

	  public function ventas() {
		$this->load->view("clientes/ventas");
	  }
}