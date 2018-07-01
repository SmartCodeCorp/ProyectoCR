<?php
class Mdl_Productos extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	public function listarProductos(){
		$productos = $this->db->get('productos');
		return $productos->result();
	}

}
?>