<?php
class Mdl_Login extends CI_Model
{

	function __construct(){
		parent::__construct();

	}

	public function log_in($email, $password){
		$data = array(
			'email' => $email,
			'password' => $password);
		$this->db->where($data);
		$usuario = $this->db->get('usuarios');
		return $usuario->num_rows();
	}

	public function loginAdm($email, $password){
		$data = array(
			'email' => $email,
			'password' => $password);
		$this->db->where($data);
		$usuario = $this->db->get('usuarios');
		return $usuario->num_rows();
	}
}