<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Usuario extends CI_Controller
  {
    function __construct(){
      parent::__construct();
      $this->load->library('grocery_CRUD');
    }

    public function index(){
      $crud = new grocery_CRUD();
      $crud->set_table('usuarios');
      $output = $crud->render();
      $this->load->view('BackEnd/Template/header');
      $this->load->view('BackEnd/vw_usuarios', $output);
      $this->load->view('BackEnd/Template/footer');

    }
  }

  ?>
