<?php
class Mdl_Usuarios extends CI_Model{

  function __construct(){
    parent::__construct();

  }

  public function registro_usuario($nombre, $apellidos, $email, $password, $telefono, $status, $privilegios){
    $data = array(
      'nombre_usuario' => $nombre,
      'apellidos' => $apellidos,
      'email' => $email,
      'password' => $password,
      'telefono' => $telefono,
      'status_usuario' => $status,
      'privilegios' => $privilegios,
      );
    $this->db->insert('usuarios', $data);
  }

}
?>


