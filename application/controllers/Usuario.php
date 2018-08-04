<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Usuario extends CI_Controller
  {

  function __construct(){
     parent::__construct();
     $this->load->Model('Mdl_Usuarios');
     $this->load->library('session');
     $this->load->library('grocery_CRUD');
  }

  public function index(){

      $crud = new grocery_CRUD();
      $crud->set_table('usuarios');
      $crud->where('privilegios',3);
      $campos = array(
        'nombre_usuario' => 'Nombres(s)',
        'apellidos' => 'Apellido(s)',
        'email' => 'Correo electrónico',
        'password' => 'Contraseña',
        'telefono' => 'Telefono',
        'status_usuario' => 'Estatus',
        'privilegios' => 'Privilegios'
      );

      $crud->required_fields('nombre_usuario', 'apellidos', 'email', 'password', 'telefono', 'status_usuario', 'privilegios');
      $crud->display_as($campos);

      $output = $crud->render();
      $this->load->view('BackEnd/Template/header');
      $this->load->view('BackEnd/vw_usuarios', (array)$output);
      $this->load->view('BackEnd/Template/footer');
    }

   public function registro_usuario(){
     $nombre = $this->input->post('nombre');
     $apellidos = $this->input->post('apellidos');
     $email = $this->input->post('email');
     $password = $this->input->post('password');
     $telefono = $this->input->post('telefono');
     $status = $this->input->post('status');
     $privilegios = $this->input->post('privilegios');

     $this->form_validation->set_rules('nombre', 'Nombre' , 'trim|required');
     $this->form_validation->set_rules('apellidos', 'Apellidos' , 'trim|required');
     $this->form_validation->set_rules('email', 'Correo electronico' , 'trim|required');
     $this->form_validation->set_rules('password', 'Contraseña' , 'trim|required');
     $this->form_validation->set_rules('telefono', 'Telefono' , 'trim|required');
     $this->form_validation->set_message('required' , 'El campo %s es obligatorio');
     $this->form_validation->set_message('trim', 'El campo %s es obligatorio');

     if ($this->form_validation->run()===FALSE)
     {
        $this->vista_registrate();
     }else {
      $this->Mdl_Usuarios->registro_usuario($nombre, $apellidos, $email, $password, $telefono, $status, $privilegios);
      $this->session->set_userdata('email', $email, 'status_usuario', $status, 'privilegios', $privilegios, $correo);
        redirect('MiControlador/index/1');
       }
     }

    public function registro_admin(){
      $this->db->set('id_usuario',0)
            ->set('nombre_usuario',$this->name)
            ->set('apellidos',$this->apellidos)
            ->set('email',$this->email)
            ->set('password',$this->password)
            ->set('telefono',$this->telefono)
            ->set('status_usuario',$this->status)
            ->set('privilegios',$this->privilegios);
      $this->db->insert('usuarios');

    }

     public function vista_registrate(){
      $this->load->view('FrontEnd/Template/header');
      $this->load->view('FrontEnd/vw_registrate');
      $this->load->view('FrontEnd/Template/footer');
     }

   public function login(){
     $email = $this->input->post('email');
     $password = $this->input->post('password');

     $this->form_validation->set_rules('email', 'email' , 'trim|required');
     $this->form_validation->set_rules('password' , 'password' , 'trim|required');
    }

  }

  ?>
