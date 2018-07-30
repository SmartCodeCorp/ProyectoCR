<?php
class Producto extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->Model('Mdl_Productos');
		$this->load->library('cart');
	}

	public function agregarCalentador(){
		$id = $this->input->post('id');
		$producto = $this->Mdl_Productos->buscarId($id);
		$cantidad = 1;
		$carrito = $this->cart->contents();
			$insert = array(
			'id' => $id,
            'qty' => $cantidad,
            'price' => $producto->precio_unitario,
            'name' => $producto->nombre_producto);
        $this->cart->insert($insert);
        $uri = $this->input->post('uri');        
        $this->session->set_flashdata('agregado', 'El producto fue agregado correctamente');
        redirect('../index.php/MiControlador/index/3'.$uri, 'refresh');
	}

	public function agregarLampara(){
		$id = $this->input->post('id');
		$producto = $this->Mdl_Productos->buscarId($id);
		$cantidad = 1;
		$carrito = $this->cart->contents();
			$insert = array(
			'id' => $id,
            'qty' => $cantidad,
            'price' => $producto->precio_unitario,
            'name' => $producto->nombre_producto
        	);
        $this->cart->insert($insert);
        $uri = $this->input->post('uri');        
        $this->session->set_flashdata('agregado', 'El producto fue agregado correctamente');
        redirect('../index.php/MiControlador/index/4'.$uri, 'refresh');
		
	}

	public function carrito(){
		$this->load->view('FrontEnd/Template/header');
		$this->load->view('FrontEnd/vw_carrito');
		$this->load->view('FrontEnd/Template/footer');
	}

	public function vaciarCarrito(){
		$this->cart->destroy();
		$this->session->set_flashdata('Destruido', 'El carrito se elimino correctamente');
		redirect('../index.php/MiControlador/index/3', 'refresh');
	}

	public function actualizarCarrito(){
		$data = $this->input->post();
		$this->cart->update($data);
		redirect('carrito');
	}

	public function eliminarProducto($rowid){
        $producto = array(
            'rowid' => $rowid,
            'qty' => 0
        );
        $this->cart->update($producto);
        $this->session->set_flashdata('productoEliminado', 'El producto fue eliminado correctamente');
        redirect('../index.php/Producto/carrito', 'refresh');
    }

    public function mostrarCarrito(){
    	$data['contenido'] = 'carrito';
    	$data['title'] = 'Carrito de compras';
    	$this->load->view('FrontEnd/Template/header');
		$this->load->view('FrontEnd/vw_carrito', $data);
		$this->load->view('FrontEnd/Template/footer');
    }
}
?>