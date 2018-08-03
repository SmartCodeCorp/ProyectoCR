<?php
class Mdl_MetodoPago extends CI_Model{

  function __construct(){
    parent::__construct();

  }

  public function listarMetodoPago(){
  	$pagos = $this->db->get('metodospago');
	return $pagos->result();
  }

}
?>