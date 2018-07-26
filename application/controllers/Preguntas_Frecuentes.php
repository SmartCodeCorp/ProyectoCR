<?php
class Preguntas_Frecuentes extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}

	public function index(){
		$crud = new grocery_CRUD();
		$crud->set_table('preguntasfrecuentes');
		$output = $crud->render();
		$this->load->view('BackEnd/Template/header');
		$this->load->view('BackEnd/vw_preguntasfrecuentes', $output);
		$this->load->view('BackEnd/Template/footer');
	}
}
?>
