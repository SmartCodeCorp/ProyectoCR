<?php
class Categorias extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}

	public function index(){
		$crud = new grocery_CRUD();
		$crud->set_table('categorias');
		$campos = array(
			'titulo_categoria' => 'Categoria',
			'descripcion_categoria' => 'Descripcion'
		);
		$crud->required_fields('titulo_categoria', 'descripcion_categoria');
		$crud->display_as($campos);
		
		$output = $crud->render();
		$this->load->view('BackEnd/Template/header');
		$this->load->view('BackEnd/vw_productos', (array)$output);
		$this->load->view('BackEnd/Template/footer');
	}
}
?>