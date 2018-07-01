<?php
class Mdl_Usuarios extends CI_Model{

  function __construct(){
    parent::__construct();

  }

  public function registro_usuario($nombre, $apellidos, $email, $password, $telefono, $calle, $numero_exterior, $numero_interior, $colonia, $referencia, $codigo_postal, $ciudad, $estado, $status, $privilegios){
    $data = array(
      'nombre_usuario' => $nombre,
      'apellidos' => $apellidos,
      'email' => $email,
      'password' => $password,
      'telefono' => $telefono,
      'calle' => $calle,
      'numero_exterior' => $numero_exterior,
      'numero_interior' => $numero_interior,
      'colonia' => $colonia,
      'referencia' => $referencia,
      'codigo_postal' => $codigo_postal,
      'ciudad' => $ciudad,
      'estado' => $estado,
      'status_usuario' => $status,
      'privilegios' => $privilegios,
      );
    $this->db->insert('usuarios', $data);
    //return $data->num_rows();
  }

  public function buscarUsuario($email){
      $data = array('email' => $email);
      $this->db->where($data);
      $user = $this->db->get('usuarios');
      return $user->result();
    }


}
?>


