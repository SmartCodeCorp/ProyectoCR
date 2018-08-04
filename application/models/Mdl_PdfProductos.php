<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_PdfProductos extends CI_Model{

 	function getUsuarios(){
   		$this->db->from('productos');
   		$this->db->order_by("nombre_producto");
   		$query = $this->db->get();
   		return $query->result();
 	}
}
