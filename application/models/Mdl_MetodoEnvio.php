<?php
class Mdl_MetodoEnvio extends CI_Model{

  function __construct(){
    parent::__construct();

  }

  public function listarMetodoEnvio(){
  	$envios = $this->db->get('metodosenvio');
	return $envios->result();
  }

}
?>