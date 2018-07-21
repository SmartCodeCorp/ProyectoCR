<?php
class Mdl_Contacto extends CI_Model{

  function __construct(){
    parent::__construct();

  }

  public function agregar_contacto($nombre, $asunto, $email, $mensaje){
    $data = array(
      'nombre_contacto' => $nombre,
      'asunto' => $asunto,
      'email_contacto' => $email,
      'mensaje' => $mensaje,
      );
    $this->db->insert('contactos', $data);
  }

}
?>