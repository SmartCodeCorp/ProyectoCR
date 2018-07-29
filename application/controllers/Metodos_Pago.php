<?php

  class Metodos_Pago extends CI_Controller
  {
    function __construct(){
      parent::__construct();
      $this->load->library('grocery_CRUD');
    }

    public function index(){
      $crud = new grocery_CRUD();
      $crud->set_table('metodospago');
      $campos = array(
        'nombre_metodo' => 'Metodo',
        'descripcion_metodo' => 'Descripción',
        'status_metodo' => 'Estatus'
      );
      $crud->required_fields('nombre_metodo', 'descripcion_metodo', 'status_metodo');
      $crud->display_as($campos);

      $output = $crud->render();
      $this->load->view('BackEnd/Template/header');
      $this->load->view('BackEnd/vw_metodospago', (array)$output);
      $this->load->view('BackEnd/Template/footer');

    }
  }

 ?>
