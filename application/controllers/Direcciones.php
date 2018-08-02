<?php
class Direcciones extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->library('grocery_CRUD');
		$this->load->Model('Mdl_Direcciones');
	}

	public function index(){
		$crud = new grocery_CRUD();
		$crud->set_table('direcciones');
		
		$output = $crud->render();
		$this->load->view('BackEnd/Template/header');
		$this->load->view('BackEnd/vw_direcciones', $output);
		$this->load->view('BackEnd/Template/footer');
	}

	public function agregarDireccion(){
		$calle = $this->input->post('calle');
		$numeroExt = $this->input->post('numeroExt');
		$numeroInt = $this->input->post('numeroInt');
		$codigoPostal = $this->input->post('codigoPostal');
		$colonia = $this->input->post('colonia');
		$ciudad = $this->input->post('ciudad');
		$estado = $this->input->post('estado');
		$referencia = $this->input->post('referencia');

		$idUsuario = $this->input->post('idUsuario');

		$this->form_validation->set_rules('calle', 'Calle' , 'trim|required|min_length[1]');
		$this->form_validation->set_rules('numeroExt', 'NumeroExterior' , 'trim|required');
		$this->form_validation->set_rules('codigoPostal', 'CodigoPostal' , 'trim|required|min_length[1]');
		$this->form_validation->set_rules('colonia', 'Colonia' , 'trim|required|min_length[1]');
		$this->form_validation->set_rules('ciudad', 'Ciudad' , 'trim|required|min_length[1]');
		$this->form_validation->set_rules('estado', 'Estado' , 'trim|required|min_length[1]');
		$this->form_validation->set_rules('referencia', 'Referencia' , 'trim|required|min_length[3]');

		$this->form_validation->set_message('required', 'El campo %s es obligatorio');
	    $this->form_validation->set_message('min_length', 'El campo %s debe tener más de 3 caracteres');

	    if ($this->form_validation->run() == true) {
	    	
	    	$last_id = $this->Mdl_Direcciones->agregarDireccion($calle, $numeroExt, $numeroInt, $codigoPostal, $colonia, $ciudad, $estado, $referencia);
	    	$this->Mdl_Direcciones->agregarDireccionUser($last_id, $idUsuario);
	    	//echo "Ultimo id: " . $last_id;
	    	$this->session->set_flashdata('direccionAgregada', 'La direccion fue agregada con exito');
	    	redirect('Direcciones/vistaPago/'.$last_id);
	    }else{
	    	$this->vistaDireccion();
	    }
	}

	public function vistaDireccion(){
    	$this->load->view('FrontEnd/Template/header');
		$this->load->view('FrontEnd/vw_direccion');
		$this->load->view('FrontEnd/Template/footer');
    }

    public function vistaPago($last_id){
	    $data['direccion'] = $this->Mdl_Direcciones->buscarDireccion($last_id);
    	$this->load->view('FrontEnd/Template/header');
		$this->load->view('FrontEnd/vw_pago', $data);
		$this->load->view('FrontEnd/Template/footer');
    }
}
?>