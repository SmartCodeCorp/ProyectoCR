<?php

class Metodos_Envio extends CI_Controller
{
  function __construct(){
    parent::__construct();
    $this->load->library('grocery_CRUD');
  }


  public function index(){
    $crud = new grocery_CRUD();
    $crud->set_table('metodosenvio');
    $campos = array(
        'nombre_paqueteria' => 'Paqueteria',
        'numero_contacto' => 'Número de Contacto',
        'home_page' => 'Página oficial'
      );
    $crud->required_fields('nombre_paqueteria', 'numero_contacto', 'home_page');
    $crud->display_as($campos);

    $output = $crud->render();
    $this->load->view('BackEnd/Template/header');
    $this->load->view('BackEnd/vw_metodosenvio', (array)$output);
    $this->load->view('BackEnd/Template/footer');
  }
}


 ?>
