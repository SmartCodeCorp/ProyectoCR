<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Login extends CI_Controller{

    function __construct(){
      parent::__construct();
      $this->load->Model('Mdl_Login');
    }

    public function index(){
      $this->load->view('FrontEnd/vw_login');
    }

    public function log_in(){
      $email = $this->input->post('email');
      $password = $this->input->post('password');

      $entrar = $this->Mdl_Login->log_in($email, $password);
      if ($entrar == 0) {
        redirect('Login');
      }else{
        redirect('MiControlador/index/1');
      }
      
    }
  
  }

 ?>