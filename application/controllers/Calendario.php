<?php
class Calendario extends CI_Controller
{
	function __construct(){
		parent::__construct();
		
	}

	public function index(){
		$this->load->view('BackEnd/Template/header');
		$this->load->view('BackEnd/vw_calendario');
		$this->load->view('BackEnd/Template/footer');
	}
}
?>