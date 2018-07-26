<?php
class Mdl_PregFrecuentes extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	public function listarPreguntas(){
		$preguntas = $this->db->get('preguntasfrecuentes');
		return $preguntas->result();
	}

	public function agregarDuda($pregunta, $status){

		$data = array('pregunta'=>$pregunta, 'status_pregunta'=>$status);
		$this->db->insert('preguntasfrecuentes', $data);

	}

}
?>