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
      $data['newproducts'] = $this->Mdl_Productos->NuevosProductos();



      switch ($option) {
      case 1:
              $config  = array(
                  'start_day' => 'monday',
                  'month_type' => 'long',
                  'day_type' => 'long'
                    );
              $config ['template']='
              {table_open}<table border="1" cellpadding="4" cellspacing="5" >{/table_open}
              {table_close}</table>{/table_close}
              ';
                $this->load->library('calendar', $config);
                $data['titulo']='Libreria Calendar';
                $data['contenido']='Calendario';

              $this->load->view('FrontEnd/index', $data);
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

        case 11:$this->load->view('FrontEnd/vw_login');
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
    public function registrar(){
        $this->load->view('FrontEnd/vw_registro');
    }



  }







 ?>
