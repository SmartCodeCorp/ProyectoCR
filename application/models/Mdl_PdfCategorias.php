<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_PdfCategorias extends CI_Model{

 	function getCategorias(){
   		$this->db->from('categorias');
   		$this->db->order_by("titulo_categoria");
   		$query = $this->db->get();
   		return $query->result();
 	}
}
