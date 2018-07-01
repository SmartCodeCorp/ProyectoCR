<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Usuario extends CI_Controller
  {
  function __construct(){
     parent::__construct();
     $this->load->Model('Mdl_Usuarios');
     $this->load->library('session');
  }

   public function registro_usuario(){
     $nombre = $this->input->post('nombre');
     $apellidos = $this->input->post('apellidos');
     $email = $this->input->post('email');
     $password = $this->input->post('password');
     $telefono = $this->input->post('telefono');
     $calle = $this->input->post('calle');
     $numero_exterior = $this->input->post('num_ext');
     $numero_interior = $this->input->post('num_int');
     $colonia = $this->input->post('colonia');
     $referencia = $this->input->post('referencia');
     $codigo_postal = $this->input->post('cpostal');
     $ciudad = $this->input->post('ciudad');
     $estado = $this->input->post('estado');
     $status = $this->input->post('status');
     $privilegios = $this->input->post('privilegios');

     /*$this->form_validation->set_rules('nombre', 'Nombre' , 'trim|required');
     $this->form_validation->set_rules('apellidos', 'Apelidos' , 'trim|required');
     $this->form_validation->set_rules('email', 'Email' , 'trim|required');
     $this->form_validation->set_rules('password', 'Password' , 'trim|required');
     $this->form_validation->set_rules('telefono', 'Telefono' , 'trim|required');
     $this->form_validation->set_rules('calle', 'Calle' , 'trim|required');
     $this->form_validation->set_rules('numero_exterior', 'Numero_exterior' , 'trim|required');
     $this->form_validation->set_rules('numero_interior', 'Numero_interior' , 'trim|required');
     $this->form_validation->set_rules('colonia', 'Colonia' , 'trim|required');
     $this->form_validation->set_rules('referencia', 'Referencia' , 'trim|required');
     $this->form_validation->set_rules('codigo_postal', 'Codigo_postal' , 'trim|required');
     $this->form_validation->set_rules('ciudad', 'Ciudad' , 'trim|required');
     $this->form_validation->set_rules('estado', 'Estado' , 'trim|required');
     $this->form_validation->set_rules('status_usuario', 'Status' , 'trim|required');
     $this->form_validation->set_rules('privilegios', 'Privilegios' , 'trim|required');

     $this->form_validation->set_message('required' , 'El campo %s es obligatorio');
     $this->form_validation->set_message('trim', 'El campo %s es obligatorio');

     if ($this->form_validation->run()===FALSE)
     {
       $this->load->view('FrontEnd/Login/vw_registro');
     }else {*/

    $this->Mdl_Usuarios->registro_usuario($nombre, $apellidos, $email, $password, $telefono, $calle, $numero_exterior, $numero_interior,$colonia, $referencia, $codigo_postal, $ciudad, $estado, $status, $privilegios);
     
     //if ($valor == 0) { redirect('MiControlador/index/10');
     //}else{
      $this->session->set_userdata('email', $email, 'status_usuario', $status, 'privilegios', $privilegios, $correo);

        redirect('MiControlador/index/11');
     //}
       
       }

    public function buscarUsuario(){
        //echo $email;
        //$res = $this->Mdl_Usuarios->buscarUsuario($email);
        //redirect('Usuario/listarUsuarios');
    }
  
   public function login()
   {
     $email = $this->input->post('email');
     $password = $this->input->post('password');

     $this->form_validation->set_rules('email', 'email' , 'trim|required');
     $this->form_validation->set_rules('password' , 'password' , 'trim|required');

     $this->form_validation->set_message('required'. 'El campo %s es obligatorio');
     $this->form_validation->set_message('required' , 'El campo %s es obligatorio');

     if($this->form_validation->run()===FALSE)
     {
       $this->load->view('FrontEnd/Login/vw_login');
     }else {
       $mostrar = $this->Mdl_Usuario->validarLog($email, $password);

       if($mostrar == 0){
         $u['validar']= 0;
         $this->load->view('FrontEnd/index', $u);
       }else
         {
           $valid = $this->Mdl_Usuario->login($password);
           $usuario = array(
             'id_usuario'=> $valid->id_usuario,
             'nombre_usuario'=> $valid->nombre_usuario,
             'apellidos'=> $valid->apellidos,
             'email' => $valid->email,
             'password' => $valid->password,
             'telefono' => $valid->telefono,
             'calle' => $valid->calle,
             'numero_exterior' => $valid->numero_exterior,
             'numero_interior' => $valid->numero_interior,
             'colonia' => $valid->colonia,
             'referencia' => $valid->referencia,
             'codigo_postal' => $valid->codigo_postal,
             'ciudad' => $valid->ciudad,
             'estado' => $valid->estado,
             'status_usuario' => $valid->status_usuario,
             'privilegios' => $valid->privilegios
           );

           $this->session->set_userdata($usuario);
           redirect('MiControlador/index/1');
         }
       }
     }



   public function logout(){
     $this->session->sess_destroy();
     redirect('MiControlador/index/1');
   }


 }
