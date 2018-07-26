
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Login_Adm extends CI_Controller{

  	function __construct(){
  		parent::__construct();
  		$this->load->Model('Mdl_Login');
  		$this->load->Model('Mdl_Usuarios');
  	}

  	public function index(){
  		$this->load->view('BackEnd/vw_loginAdm');
  	}

  	public function login(){
	  	$email = $this->input->post('email');
	    $password = $this->input->post('password');

	    $entrar = $this->Mdl_Login->loginAdm($email, $password);
	    	if ($entrar == 0) {
	    		$this->index();
	      	}else{
	      		$this->session->set_userdata('email', $email);
	        	redirect('Administrador');
	      }
  	}

  	public function frmAddAdmin(){
  		$this->load->view('BackEnd/vw_registroAdm');
  	}

  	public function registroAdm(){
  		$this->Mdl_Login->set_nombre($this->input->post('nombre'));
  		$this->Mdl_Login->set_apellidos($this->input->post('apellidos'));
  		$this->Mdl_Login->set_email($this->input->post('email'));
  		$this->Mdl_Login->set_password($this->input->post('password'));
  		$this->Mdl_Login->set_telefono($this->input->post('telefono'));
  		$this->Mdl_Login->set_status($this->input->post('status'));
  		$this->Mdl_Login->set_privilegios($this->input->post('privilegios'));

      $email_check = $this->Mdl_Login->buscarEmail($this->Mdl_Login->get_email());

      if($email_check){
      	$this->Mdl_Login->registro_admin();
      	$this->session->set_flashdata('success_msg', 'Registro exitoso. Ahora inicia session en tu cuenta.');
      		redirect('Login_Adm');
		}else{
			$this->session->set_flashdata('error_msg', 'Error,Ya existe ese correo electrónico');
			redirect('Login_Adm/frmAddAdmin');

		}
    }

  	public function logout(){
        $this->session->sess_destroy();
        $this->index();
    }
  }
?>
