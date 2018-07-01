<?php
defined('BASEPATH') OR exit('No direct script access allowed');


 class Administrador extends CI_Controller{

   public function __construct(){
     parent::__construct();     

   }

  public function index() {
    $this->load->view('BackEnd/Template/header');
    $this->load->view('BackEnd/vw_index');
    $this->load->view('BackEnd/Template/footer');
  }


 }
