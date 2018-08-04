<?php
class Productos extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}

	public function index(){
		$crud = new grocery_CRUD();
		$crud->set_table('productos');
		$crud->set_relation('categorias_id_categoria', 'categorias', 'titulo_categoria');
		$campos = array(
			'clave_producto' => 'Clave',
			'imagen' => 'Imagen',
			'nombre_producto' => 'Nombre',
			'descripcion_producto' => 'Descripción',
			'precio_unitario' => 'Precio Unitario',
			'unidades_stock' => 'Stock',
			'categorias_id_categoria' => 'Categoría'
		);
		$crud->required_fields('clave_producto', 'imagen', 'nombre_producto', 'descripcion_producto', 'precio_unitario', 'unidades_stock', 'categorias_id_categoria');
		$crud->display_as($campos);
		$crud->set_field_upload('imagen', 'assets/uploads/files');

		$output = $crud->render();
		$this->load->view('BackEnd/Template/header');
		$this->load->view('BackEnd/vw_productos', (array)$output);
		$this->load->view('BackEnd/Template/footer');
	}

}
?>
