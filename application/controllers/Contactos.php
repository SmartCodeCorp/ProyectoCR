<?php
class Contactos extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}

	public function index(){
		$crud = new grocery_CRUD();
		$crud->set_table('contactos');
		$campos = array(
			'nombre_contacto' => 'Remitente',
			'asunto' => 'Asunto',
			'email_contacto' => 'Correo electrónico',
			'mensaje' => 'Mensaje'
		);
		$crud->required_fields('nombre_contacto', 'asunto', 'email_contacto', 'mensaje');
		$crud->display_as($campos);
		
		$output = $crud->render();
		$this->load->view('BackEnd/Template/header');
		$this->load->view('BackEnd/vw_productos', (array)$output);
		$this->load->view('BackEnd/Template/footer');
	}
}
?>
