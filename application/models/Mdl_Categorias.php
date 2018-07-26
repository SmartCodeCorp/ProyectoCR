<?php
class Mdl_Categorias extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	public function listarCategorias(){
		$categorias = $this->db->get('categorias');
		return $categorias->result();
	}

}
?>
