<?php
class Mdl_Contactos extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	public function listarContactos(){
		$contactos = $this->db->get('contactos');
		return $contactos->result();
	}

}
?>
