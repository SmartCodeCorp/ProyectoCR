<?php
class Mdl_Direcciones extends CI_Model{

  function __construct(){
    parent::__construct();

  }

  public function agregarDireccion($calle, $numeroExt, $numeroInt, $codigoPostal, $colonia, $ciudad, $estado, $referencia){
    $data = array(
      'calle' => $calle,
      'numero_exterior' => $numeroExt,
      'numero_interior' => $numeroInt,
      'colonia' => $colonia,
      'referencia' => $referencia,
      'codigo_postal' => $codigoPostal,
      'ciudad' => $ciudad,
      'estado' => $estado,
      );
    $this->db->insert('direcciones', $data);
    return $this->db->insert_id();
  }

  public function agregarDireccionUser($last_id, $idUsuario){
    $data = array(
      'direcciones_id_direccion' => $last_id, 
      'usuarios_id_usuario' => $idUsuario,
    );
    $this->db->insert('detalle_usuarios', $data);
  }

  public function buscarDireccion($last_id){
    $this->db->where('id_direccion', $last_id);
    $sql = $this->db->get('direcciones');
    return $sql->result();
  }

}
?>