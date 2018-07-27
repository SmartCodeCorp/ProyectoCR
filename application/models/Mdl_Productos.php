<?php
class Mdl_Productos extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	public function listarProductos(){
		$productos = $this->db->get('productos');
		return $productos->result();
	}

	public function buscarId($id){
		$this->db->where('id_producto', $id);
		$productos = $this->db->get('productos');
		foreach ($productos->result() as $producto) {
			$data[] = $producto;
		}
		if ($producto->unidades_stock) {
			$producto->unidades_stock = explode(',', $producto->unidades_stock);
		}
		return $producto;
	}

}
?>