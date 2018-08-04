<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Administradores extends CI_Controller
  {

  function __construct(){
     parent::__construct();
     $this->load->library('grocery_CRUD');
  }

  public function index(){

      $crud = new grocery_CRUD();
      $crud->set_table('usuarios');
      $crud->where('privilegios',2);
      $campos = array(
        'nombre_usuario' => 'Nombres(s)',
        'apellidos' => 'Apellido(s)',
        'email' => 'Correo electrónico',
        'password' => 'Contraseña',
        'telefono' => 'Teléfono',
        'status_usuario' => 'Estatus',
        'privilegios' => 'Privilegios'
      );

      $crud->required_fields('nombre_usuario', 'apellidos', 'email', 'password', 'telefono', 'status_usuario', 'privilegios');
      $crud->display_as($campos);

      $output = $crud->render();
      $this->load->view('BackEnd/Template/header');
      $this->load->view('BackEnd/vw_administradores', (array)$output);
      $this->load->view('BackEnd/Template/footer');
    }
  }
?>
