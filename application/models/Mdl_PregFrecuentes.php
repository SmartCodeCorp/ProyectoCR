<?php
class Mdl_PregFrecuentes extends CI_Model
{

	private $id_pregunta;
	private $pregunta;
	private $respuesta;
	private $status_pregunta;

	function __construct($id_pregunta=null, $pregunta=null, $respuesta=null, $status_pregunta=null){
		$this->id_pregunta = $id_pregunta;
		$this->pregunta = $pregunta;
		$this->respuesta = $respuesta;
		$this->status_pregunta = $status_pregunta;
	}

	public function get_id_pregunta(){
		return $this->id_pregunta;
	}

	public function get_pregunta(){
		return $this->pregunta;
	}

	public function get_respuesta(){
		return $this->respuesta;
	}

	public function get_status_pregunta(){
		return $this->status_pregunta;
	}

	public function set_id_pregunta($id_pregunta){
		$this->id_pregunta = $id_pregunta;
	}

	public function set_pregunta($pregunta){
		$this->pregunta = $pregunta;
	}

	public function set_respuesta($respuesta){
		$this->respuesta = $respuesta;
	}

	public function set_status_pregunta($status_pregunta){
		$this->status_pregunta = $status_pregunta;
	}



	public function listarPreguntas(){
		$preguntas = $this->db->get('preguntasfrecuentes');
		return $preguntas->result();
	}

	public function agregarDuda(){

		$this->db->set('pregunta', $this->pregunta)
							 ->set('status_pregunta', $this->status_pregunta);

							 $this->db->insert('preguntasfrecuentes');
						


		//$data = array('pregunta'=>$pregunta, 'status_pregunta'=>$status);
		//$this->db->insert('preguntasfrecuentes', $data);

	}

}
?>
