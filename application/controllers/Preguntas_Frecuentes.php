<?php

	defined('BASEPATH') OR exit('No direct script access allowed');


		class Preguntas_Frecuentes extends CI_Controller
			{

					function __construct(){
					parent::__construct();
					$this->load->library('grocery_CRUD', 'form_validation');
					$this->load->Model('Mdl_PregFrecuentes');
		}

	public function index(){
		$crud = new grocery_CRUD();
		$crud->set_table('preguntasfrecuentes');
		$campos = array(
			'status_pregunta' => 'Estatus'
		);
		$crud->required_fields('status_pregunta', 'Estatus');
		$crud->display_as($campos);

		$output = $crud->render();
		$this->load->view('BackEnd/Template/header');
		$this->load->view('BackEnd/vw_preguntasfrecuentes', (array)$output);
		$this->load->view('BackEnd/Template/footer');

	}

	public function agregarDuda(){

			$pregunta = $this->input->post('pregunta');
			$status= $this->input->post('status');

			$this->Mdl_PregFrecuentes->agregarDuda($pregunta,$status);

    }

}
?>
