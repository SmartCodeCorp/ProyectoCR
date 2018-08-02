<?php

  defined('BASEPATH') OR exit('No direct script access allowed');


    class Login_User extends CI_Controller{

      function __construct(){
        parent::__construct();
        $this->load->Model('Mdl_LoginUser');
        $this->load->Model('Mdl_Usuarios');

      }

      public function index(){
        $this->load->view('FrontEnd/vw_login');
      }

      public function login(){
        $user_login = array(
          'email' =>  $this->input->post('email'),
          'password' => $this->input->post('password')  
        );

        $data = $this->Mdl_LoginUser->loginUser($user_login['email'], $user_login['password']);
        if ($data) {
          $this->session->set_userdata('id_usuario',$data['id_usuario']);
          $this->session->set_userdata('nombre_usuario',$data['nombre_usuario']);
          $this->session->set_userdata('apellidos',$data['apellidos']);
          $this->session->set_userdata('email',$data['email']);
          $this->session->set_userdata('password',$data['password']);
          $this->session->set_userdata('telefono',$data['telefono']);
          $this->session->set_userdata('status_usuario',$data['status_usuario']);
          $this->session->set_userdata('privilegios',$data['privilegios']);
          redirect('MiControlador');
        }else{
            $this->index();
        }
         
      }

      public function loginCart(){
        $user_login = array(
          'email' =>  $this->input->post('email'),
          'password' => $this->input->post('password')  
        );

        $data = $this->Mdl_LoginUser->loginUser($user_login['email'], $user_login['password']);
        if ($data) {
          $this->session->set_userdata('id_usuario',$data['id_usuario']);
          $this->session->set_userdata('nombre_usuario',$data['nombre_usuario']);
          $this->session->set_userdata('apellidos',$data['apellidos']);
          $this->session->set_userdata('email',$data['email']);
          $this->session->set_userdata('password',$data['password']);
          $this->session->set_userdata('telefono',$data['telefono']);
          $this->session->set_userdata('status_usuario',$data['status_usuario']);
          $this->session->set_userdata('privilegios',$data['privilegios']);
          //echo $data['id_usuario'];
          redirect('Producto/vistaDireccion');
        }else{
            $this->vistaLogin();
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
                redirect('Login_User');
        }else{
          $this->session->set_flashdata('error_msg', 'Ya existe el correo que ingresaste');
                redirect('Login_User/frmAddUser');
        }

      }

      public function vistaLogin(){
        $this->session->set_flashdata('procesada', 'Se proceso la compra');
        $this->load->view('FrontEnd/vw_login');
      }

      public function salir(){
        $this->session->sess_destroy();
        redirect('MiControlador/index/1');
      }

    }

 ?>
