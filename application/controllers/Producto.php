<?php
class Producto extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->Model('Mdl_Productos');
	}

	public function agregarProducto(){
		$id = $this->input->post('id');
		$producto = $this->Mdl_Productos->buscarId($id);
		$cantidad = 1;
		$carrito = $this->cart->contents();
		foreach ($carrito as $item) {
			$insert = array(
			'id' => $id,
            'qty' => $cantidad,
            'price' => $producto->precio_unitario,
            'name' => $producto->nombre_producto);
        $this->cart->insert($insert);
        $uri = $this->input->post('uri');        
        //$this->session->set_flashdata('agregado', 'El producto fue agregado correctamente');
        redirect('../index.php/MiControlador/index/3'.$uri, 'refresh');
		}
	}
}
?>