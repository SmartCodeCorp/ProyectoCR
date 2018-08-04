<?php

  class Metodos_Pago extends CI_Controller
  {
    function __construct(){
      parent::__construct();
      $this->load->library('grocery_CRUD');
      $this->load->Model('Mdl_Direcciones');
      $this->load->Model('Mdl_MetodoPago');
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

    public function vistaPago($last_id){
      $data['direccion'] = $this->Mdl_Direcciones->buscarDireccion($last_id);
      $data['pagos'] = $this->Mdl_MetodoPago->listarMetodosPago();
      $this->load->view('FrontEnd/Template/header2');
      $this->load->view('FrontEnd/vw_pago', $data);
      $this->load->view('FrontEnd/Template/footer');
    }

    public function deposito(){
      $metodoSelec = $this->input->post('deposito');
      $direccion = $this->input->post('direccion');
      $idUsuario = $this->input->post('idUsuario');

      echo "El metodo es: " . $metodoSelec;
      echo "elid direccion es: " . $direccion;

    }

    public function paypal(){

    }

    public function tarjeta(){
      $titular = $this->input->post('titular');
      $numero = $this->input->post('numero');
      $mes_exp = $this->input->post('mes_expiracion');
      $anyo_exp = $this->input->post('anyo_expiracion');
      $codigo = $this->input->post('codigo');
      $last_id = $this->input->post('idDireccion');
      $idUsuario = $this->input->post('idUsuario');
      $metodo = $this->input->post('tarjeta');

      $this->form_validation->set_rules('titular', 'Nombre del titular' , 'trim|required|min_length[1]');
      $this->form_validation->set_rules('numero', 'Numero de tarjeta' , 'trim|required|min_length[16]|max_length[16]');
      $this->form_validation->set_rules('mes_expiracion', 'Mes de expiracion' , 'required');
      $this->form_validation->set_rules('anyo_expiracion', 'Año de expiracion' , 'required');
      $this->form_validation->set_rules('codigo', 'Código de seguridad' , 'trim|required|min_length[3]|max_length[3]');

      $this->form_validation->set_message('required', 'El campo %s es obligatorio');
      $this->form_validation->set_message('min_length[16]', 'El campo %s debe tener más de 1 caracteres');
      $this->form_validation->set_message('min_length[3]', 'El campo %s debe tener 3 caracteres');
      $this->form_validation->set_message('max_length[3]', 'El campo %s debe tener maximo 3 caracteres');
      $this->form_validation->set_message('max_length[16]', 'El campo %s debe tener maximo 16 caracteres');

      if ($this->form_validation->run() == true) {
          $this->Mdl_MetodoPago->agregarTarjeta($titular, $numero, $mes_exp, $anyo_exp, $codigo, $idUsuario);
          $this->session->set_flashdata('pagoTarjeta', 'Su tarjeta fue agregada con exito');
          redirect('Metodos_Pago/vistaCompra/'.$last_id.'/'.$metodo);
      }else{
        $this->vistaPago($last_id);
      }
    }

    public function vistaCompra($last_id, $metodo){
      $data['direccion'] = $this->Mdl_Direcciones->buscarDireccion($last_id);
      $data['metodo'] = $this->Mdl_MetodoPago->obtenerMetodoPago($metodo);
      $this->load->view('FrontEnd/Template/header2');
      $this->load->view('FrontEnd/vw_Compra', $data);
      $this->load->view('FrontEnd/Template/footer');
    }

  }

 ?>
