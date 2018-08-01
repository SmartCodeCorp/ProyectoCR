<?php

  defined('BASEPATH') OR exit('No direct script access allowed');


    class Login_User extends CI_Controller{

      function __construct(){
        parent::__construct();
        $this->load->Model('Mdl_LoginUser');
        $this->load->Model('Mdl_Usuarios');
        $this->load->library('session');

      }

      public function index(){
        $this->load->view('FrontEnd/vw_login');
      }

      public function login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $entrar = $this->Mdl_LoginUser->loginUser($email, $password);
          if($entrar == 0){
            $this->index();

          }else{
            $this->session->set_userdata('email', $email);
            redirect('MiControlador');
          }
      }

      public function frmAddUser(){
        $this->load->view('FrontEnd/vw_registro');
      }


      public function registroUser(){

        $this->Mdl_LoginUser->set_nombre($this->input->post('nombre'));
        $this->Mdl_LoginUser->set_apellidos($this->input->post('apellidos'));
        $this->Mdl_LoginUser->set_email($this->input->post('email'));
        $this->Mdl_LoginUser->set_password($this->input->post('password'));
        $this->Mdl_LoginUser->set_telefono($this->input->post('telefono'));
        $this->Mdl_LoginUser->set_status($this->input->post('status'));
        $this->Mdl_LoginUser->set_privilegios($this->input->post('privilegios'));

        $email_check = $this->Mdl_LoginUser->buscarEmail($this->Mdl_LoginUser->get_email());

        if($email_check){
          $this->Mdl_LoginUser->registro_user();
          $this->session->set_flashdata('success_msg', 'Registro exitoso');
                //redirect('Login_User');

        }else{
          $this->session->set_flashdata('error_msg', 'Ya existe el correo que ingresaste');
              redirect('Login_User/frmAddUser');
        }




      }


    }



 ?>
