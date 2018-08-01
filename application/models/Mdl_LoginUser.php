<?php

  class Mdl_LoginUser extends CI_Model
  {
    private $id_usuario;
    private $nombre;
    private $apellidos;
    private $email;
    private $password;
    private $telefono;
    private $status;
    private $privilegios;


    function __construct($id_usuario=null, $nombre=null, $apellidos=null, $email=null, $password=null, $telefono=null, $status=null, $privilegios=null){
      $this->id_usuario = $id_usuario;
      $this->nombre = $nombre;
      $this->apellidos = $apellidos;
      $this->email = $email;
      $this->password = $password;
      $this->telefono = $telefono;
      $this->status = $status;
      $this->privilegios = $privilegios;

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

public function loginUser($email, $password){
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

    public function registro_user(){
      $this->db->set('id_usuario',null)
               ->set('nombre_usuario',$this->nombre)
               ->set('apellidos',$this->apellidos)
               ->set('email',$this->email)
               ->set('password',$this->password)
               ->set('telefono',$this->telefono)
               ->set('status_usuario',$this->status)
               ->set('privilegios',$this->privilegios);
      $ins=$this->db->insert('usuarios');
      if ($ins==true) {

      ?>
      <script type="text/javascript" src="<?=base_url();?>FrontEnd/sweetalert2/dist/sweetalert2.min.js"></script>
      <script type="text/javascript" src="<?=base_url();?>FrontEnd/sweetalert2/dist/jquery-1.11.1.min.js"></script>
      <link rel="stylesheet" type="text/css" href="<?=base_url();?>FrontEnd/sweetalert2/dist/sweetalert2.css">

      <script>

      $(document).ready(function(){
        swal({
          title: 'Usuarios',
          text: 'usuario registrado',
          type: 'success'
        }).then(function(){
          window.location.href = '<?=base_url();?>index.php/MiControlador/iniciar_sesion';

        });
      });
</script>

<?php
}else{
?>
<script>
 $(document).ready(function(){
             swal({
                 title: 'Wow!',
                 text: 'Message!',
                 type: 'success'
             }).then(function() {
                 window.location.href = '<?=base_url();?>MiControlador/index.php/Login';
             });
         });
 </script>
 <?php
}

    }

    public function email_check($email){
      $this->db->select('*');
      $this->db->from('usuarios');
      $this->db->where('email', $email);
      $query=$this->db->get();

        if($query->num_rows()>0){
          return false;
        }else{
          return true;
        }
    }
  }



 ?>
