<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Contacto extends CI_Controller
  {
  function __construct(){
     parent::__construct();
     $this->load->Model('Mdl_Contacto');
     $this->load->library('session');
  }

  public function agregar(){

   	$nombre = $this->input->post('nombre_contacto');
   	$asunto = $this->input->post('asunto');
   	$email = $this->input->post('email_contacto');
   	$mensaje = $this->input->post('mensaje');

   	$this->form_validation->set_rules('nombre_contacto', 'nombre' , 'trim|required');
    $this->form_validation->set_rules('asunto', 'asunto' , 'trim|required');
    $this->form_validation->set_rules('email_contacto', 'correo electronico' , 'trim|required');
    $this->form_validation->set_rules('mensaje', 'mensaje' , 'trim|required');
    
    $this->form_validation->set_message('required' , 'El campo %s es obligatorio');
    $this->form_validation->set_message('trim', 'El campo %s debe contener su informacion');

    if ($this->form_validation->run()===FALSE)
    {
    	$this->vista_inicio();
    }else {
      $this->session->set_flashdata('success_msg', 'Se a enviado tu contacto.');
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