<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Contacto extends CI_Controller
  {
  function __construct(){
     parent::__construct();
     $this->load->Model('Mdl_Usuarios');
     $this->load->library('session');
  }

  public function agregar_contacto(){
   	$nombre = $this->input->post('nombre');
   	$asunto = $this->input->post('asunto');
   	$email = $this->input->post('email');
   	$mensaje = $this->input->post('mensaje');

   	$this->form_validation->set_rules('nombre', 'Nombre' , 'trim|required');
    $this->form_validation->set_rules('asunto', 'Asunto' , 'trim|required');
    $this->form_validation->set_rules('email', 'Correo electronico' , 'trim|required');
    $this->form_validation->set_rules('mensaje', 'Mensaje' , 'trim|required');
    
    $this->form_validation->set_message('required' , 'El campo %s es obligatorio');
    $this->form_validation->set_message('trim', 'El campo %s debe contener su informacion');

    if ($this->form_validation->run()===FALSE)
    {
    	$this->vista_inicio();
    }else {
	    $this->Mdl_Contacto->agregar_contacto($nombre, $asunto, $email, $mensaje);
	    redirect('MiControlador/index/1');
    }
   }

   public function vista_inicio(){
      $this->load->view('FrontEnd/Template/header');
      $this->load->view('FrontEnd/index');
      $this->load->view('FrontEnd/Template/footer');
     }
     
}