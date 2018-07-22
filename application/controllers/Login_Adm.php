<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Login_Adm extends CI_Controller{

  	function __construct(){
  		parent::__construct();
  		$this->load->Model('Mdl_Login');
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

  	public function logout(){
        $this->session->sess_destroy();
        $this->index();
    }
  }
?>