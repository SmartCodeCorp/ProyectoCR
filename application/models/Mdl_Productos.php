<?php
class Mdl_Productos extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	public function listarProductos(){
		$productos = $this->db->get('productos');
		return $productos->result();
	}

	public function NuevosProductos(){
		$this->db->order_by('id_producto','DESC');
		$this->db->Limit('3');
		$newproducts = $this->db->get('productos');
		return $newproducts->result();
	}



}
?>
