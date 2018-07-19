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
     $status = $this->input->post('status');
     $privilegios = $this->input->post('privilegios');

     $this->form_validation->set_rules('nombre', 'Nombre' , 'trim|required');
     $this->form_validation->set_rules('apellidos', 'Apellidos' , 'trim|required');
     $this->form_validation->set_rules('email', 'Correo electronico' , 'trim|required');
     $this->form_validation->set_rules('password', 'Contraseña' , 'trim|required');
     $this->form_validation->set_rules('telefono', 'Telefono' , 'trim|required');
     $this->form_validation->set_message('required' , 'El campo %s es obligatorio');
     $this->form_validation->set_message('trim', 'El campo %s es obligatorio');

     if ($this->form_validation->run()===FALSE)
     {
        $this->vista_registrate();
     }else {
      $this->Mdl_Usuarios->registro_usuario($nombre, $apellidos, $email, $password, $telefono, $status, $privilegios);
      $this->session->set_userdata('email', $email, 'status_usuario', $status, 'privilegios', $privilegios, $correo);
        redirect('MiControlador/index/1');
       }
     }

     public function vista_registrate(){
      $this->load->view('FrontEnd/Template/header');
      $this->load->view('FrontEnd/vw_registrate');
      $this->load->view('FrontEnd/Template/footer');
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
