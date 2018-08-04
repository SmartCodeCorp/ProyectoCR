<?php
class Mdl_Productos extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	public function listarProductos(){
		$productos = $this->db->get('productos');
		return $productos->result();
	}

	public function NuevosProductos(){
		$this->db->order_by('id_producto','DESC');
		$this->db->Limit('3');
		$newproducts = $this->db->get('productos');
		return $newproducts->result();
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
