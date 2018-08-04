<?php
class Mdl_MetodoPago extends CI_Model{

  function __construct(){
    parent::__construct();

  }

  public function listarMetodosPago(){
  	$pagos = $this->db->get('metodospago');
	return $pagos->result();
  }

  public function obtenerMetodoPago($metodo){
  	$this->db->where('id_metodo', $metodo);
    $sql = $this->db->get('metodospago');
    return $sql->result();
  }

  public function agregarTarjeta($titular, $numero, $mes_exp, $anyo_exp, $codigo, $idUsuario){
  	$data = array(
  		'nombre_titular' => $titular,
  		'numero_tarjeta' => $numero, 
  		'mes_expiracion' => $mes_exp, 
  		'anyo_expiracion' => $anyo_exp,
  		'codigo_seguridad' => $codigo,
  		'usuarios_id_usuario' => $idUsuario,    
  	);
  	$this->db->insert('tarjetas',$data);
  }

}
?>