<?php
class Direcciones extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}

	public function index(){
		$crud = new grocery_CRUD();
		$crud->set_table('direcciones');
		//$crud->set_relation('categorias_id_categoria', 'categorias', 'titulo_categoria');
		//$crud->set_field_upload('imagen', 'assets/uploads/files');
		$output = $crud->render();
		$this->load->view('BackEnd/Template/header');
		$this->load->view('BackEnd/vw_direcciones', $output);
		$this->load->view('BackEnd/Template/footer');
	}
}
?>