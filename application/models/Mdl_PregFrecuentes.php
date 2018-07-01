<?php
class Mdl_PregFrecuentes extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	public function listarPreguntas(){
		$preguntas = $this->db->get('preguntasfrecuentes');
		return $preguntas->result();
	}

}
?>