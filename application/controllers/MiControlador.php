<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class MiControlador extends CI_Controller{

    public function __construct(){
      parent::__construct();
      $this->load->Model('Mdl_PregFrecuentes');
      $this->load->Model('Mdl_Productos');
      $this->load->Model('Mdl_Usuarios');
    }

    public function index($option=1){
      $this->load->view('FrontEnd/Template/header');

      $data['preguntas'] = $this->Mdl_PregFrecuentes->listarPreguntas();
      $data['productos'] = $this->Mdl_Productos->listarProductos();
      

      switch ($option) {
        case 1:$this->load->view('FrontEnd/index');
          break;
        case 2:$this->load->view('FrontEnd/vw_productos');
          break;
        case 3:$this->load->view('FrontEnd/vw_calentadores', $data);
          break;
        case 4:$this->load->view('FrontEnd/vw_lamparas', $data);
          break;
        case 5:$this->load->view('FrontEnd/vw_instalacion');
          break;
        case 6:$this->load->view('FrontEnd/vw_mantenimiento');
          break;
        case 7:$this->load->view('FrontEnd/vw_preguntas_frecuentes', $data);
          break;
        case 8:$this->load->view('FrontEnd/vw_filosofia');
          break;
        case 9:$this->load->view('FrontEnd/vw_galeria');
          break;
        case 10:$this->load->view('FrontEnd/vw_registrate');
          break;
        case 11:$this->load->view('FrontEnd/vw_confirmacion');
          break;
      }

      $this->load->view('FrontEnd/Template/footer');
    }

    public function confirmacion(){
      $this->load->view('FrontEnd/Template/header');
      $this->load->view('FrontEnd/vw_confirmacion');
      $this->load->view('FrontEnd/Template/footer');
    }

    public function iniciar_sesion(){
      $this->load->view('FrontEnd/vw_login');
    }

  }







 ?>
