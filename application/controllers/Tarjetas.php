<?php
class Tarjetas extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}

	public function index(){
		$crud = new grocery_CRUD();
		$crud->set_table('tarjetas');
		
		$output = $crud->render();
		$this->load->view('BackEnd/Template/header');
		$this->load->view('BackEnd/vw_tarjetas', $output);
		$this->load->view('BackEnd/Template/footer');
	}
}
?>