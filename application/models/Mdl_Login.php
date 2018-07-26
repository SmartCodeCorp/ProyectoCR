<?php
class Mdl_Login extends CI_Model
{
	private $id_usuario;
	private $nombre;
	private $apellidos;
	private $email;
	private $password;
	private $telefono;
	private $status;
	private $privilegios;

	function __construct(){
		parent::__construct();
	}

	public function get_id_usuario(){
    	return $this->id_usuario;
  	}

  	public function get_nombre(){
    	return $this->nombre;
  	}

  	public function get_apellidos(){
    	return $this->apellidos;
  	}

	public function get_email(){
    	return $this->email;
  	}

  	public function get_password(){
    	return $this->password;
  	}

  	public function get_telefono(){
    	return $this->telefono;
  	}

  	public function get_status(){
    	return $this->status;
  	}

  	public function get_privilegios(){
    	return $this->privilegios;
  	}

	public function set_nombre($nombre){
    	$this->nombre = $nombre;
    }

    public function set_apellidos($apellidos){
    	$this->apellidos = $apellidos;
    }

	public function set_email($email){
    	$this->email = $email;
    }

    public function set_password($password){
    	$this->password = $password;
    }

    public function set_telefono($telefono){
    	$this->telefono = $telefono;
    }

    public function set_status($status){
    	$this->status = $status;
    }

    public function set_privilegios($privilegios){
    	$this->privilegios = $privilegios;
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

	public function buscarEmail($email){
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('email',$email);
		$query=$this->db->get();
		if($query->num_rows()>0){
		    return false;
		  }else{
		    return true;
		  }
	}

	public function buscarNombre($email){
		$this->db->select('nombre_usuario');
		$this->db->from('usuarios');
		$this->db->where('email',$email);
		$query=$this->db->get();
		return $query->num_rows();
	}

	public function registro_admin(){
      $this->db->set('id_usuario',0)
                ->set('nombre_usuario',$this->nombre)
                ->set('apellidos',$this->apellidos)
                ->set('email',$this->email)
                ->set('password',$this->password)
                ->set('telefono',$this->telefono)
                ->set('status_usuario',$this->status)
                ->set('privilegios',$this->privilegios);
    $this->db->insert('usuarios');
  }
}