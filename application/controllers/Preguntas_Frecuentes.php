<?php
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

			$this->form_validation->set_rules('pregunta','pregunta', 'required|min_length[5]|max_length[100]|trim');
			
			$this->form_validation->set_message('required', 'El campo es %s es obligatorio');
			$this->form_validation->set_message('min_length', 'El campo %s debe tener más de 5 letras');
			$this->form_validation->set_message('max_length', 'El campo %s debe tener menos de 100 letras');
			$this->form_validation->set_message('trim', 'El campo %s debe tener información');

			if($this->form_validation->run()===false){ //Si la validación es correcta
				
				redirect('MiControlador/index/7');
                
             }else{

             	$this->session->set_flashdata('success_msg', 'Registro exitoso. Ahora inicia session en tu cuenta.');
                $this->Mdl_PregFrecuentes->agregarDuda($pregunta,$status);
             	redirect('MiControlador/index/7');
             }

    }

}
?>
