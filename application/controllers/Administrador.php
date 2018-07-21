<?php
defined('BASEPATH') OR exit('No direct script access allowed');


 class Administrador extends CI_Controller{

   public function __construct(){
     parent::__construct();


   }

  public function index($option=1) {
    $this->load->view('BackEnd/Template/header');

    switch ($option){
      case 1:
      $this->load->view('BackEnd/vw_index');
        break;
      case 2:
      $this->load->view('BackEnd/vw_productos');
        break;
      case 3:
      $this->load->view('BackEnd/vw_usuarios');
        break;
    }

    $this->load->view('BackEnd/Template/footer');
  }


 }
