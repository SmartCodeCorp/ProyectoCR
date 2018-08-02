<?php

  class Mdl_Contacto extends CI_Model
  {

    private $id_contacto;
    private $nombre_contacto;
    private $asunto;
    private $email_contacto;
    private $mensaje;
    private $usuarios_id_usuario;



  function __construct($id_contacto=null, $nombre_contacto=null, $asunto=null, $email_contacto=null, $mensaje=null, $usuarios_id_usuario=null){
    $this->id_contacto = $id_contacto;
    $this->nombre_contacto = $nombre_contacto;
    $this->asunto = $asunto;
    $this->email_contacto = $email_contacto;
    $this->mensaje = $mensaje;
    $this->usuarios_id_usuario = $usuarios_id_usuario;


  }

  public function get_id_contacto(){
    return $this->id_contacto;
  }

  public function get_nombre_contacto(){
    return $this->nombre_contacto;
  }

  public function get_asunto(){
    return $this->asunto;
  }

  public function get_email_contacto(){
    return $this->email_contacto;
  }

  public function get_mensaje(){
    return $this->mensaje;
  }




  public function set_id_contacto($id_contacto){
    $this->id_contacto = $id_contacto;
  }

  public function set_nombre_contacto($nombre_contacto){
    $this->nombre_contacto = $nombre_contacto;
  }

  public function set_asunto($asunto){
    $this->asunto = $asunto;
  }

  public function set_email_contacto($email_contacto){
    $this->email_contacto = $email_contacto;
  }

  public function set_mensaje($mensaje){
    $this->mensaje = $mensaje;
  }





  public function agregar_contacto(){
    $this->db->set('id_contacto',null)
             ->set('nombre_contacto',$this->nombre_contacto)
             ->set('asunto',$this->asunto)
             ->set('email_contacto',$this->email_contacto)
             ->set('mensaje',$this->mensaje);


    $ins=$this->db->insert('contactos');
    if ($ins==true){

      ?>

      <script type="text/javascript" src="<?=base_url();?>FrontEnd/sweetalert2/dist/sweetalert2.min.js"></script>
      <script type="text/javascript" src="<?=base_url();?>FrontEnd/sweetalert2/dist/jquery-1.11.1.min.js"></script>
      <link rel="stylesheet" type="text/css" href="<?=base_url();?>FrontEnd/sweetalert2/dist/sweetalert2.css">


      <script>

      $(document).ready(function(){
        swal({
            title: 'Contacto',
            text: 'Contacto registrado',
            type: 'success'
        }).then(function(){
          window.location.href = '<?=base_url();?>index.php/MiControlador/index';


        });
      });

      </script>

    <?php
  }else{
    ?>

    <script>


    $(document).ready(function(){
          swaml({
            title: 'Contacto',
            text: 'Message',
            type: 'success'
          }).then(function(){
            window.location.href = '<?=base_url();?>index.php/MiControlador';
          });

    });


    </script>


<?php


  }



  }

}
?>
