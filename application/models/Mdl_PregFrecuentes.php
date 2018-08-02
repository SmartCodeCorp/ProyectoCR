<?php
class Mdl_PregFrecuentes extends CI_Model
{

	function __construct(){
		parent::__construct();
	}

	public function listarPreguntas(){
		$preguntas = $this->db->get('preguntasfrecuentes');
		return $preguntas->result();
	}

	public function agregarDuda($pregunta, $status){

		$data = array('pregunta'=>$pregunta, 'status_pregunta'=>$status);
		$ins=$this->db->insert('preguntasfrecuentes', $data);

		if ($ins==true) {

      ?>
      <script type="text/javascript" src="<?=base_url();?>FrontEnd/sweetalert2/dist/sweetalert2.min.js"></script>
      <script type="text/javascript" src="<?=base_url();?>FrontEnd/sweetalert2/dist/jquery-1.11.1.min.js"></script>
      <link rel="stylesheet" type="text/css" href="<?=base_url();?>FrontEnd/sweetalert2/dist/sweetalert2.css">

      <script>

      $(document).ready(function(){
        swal({
          title: 'Preguntas Frecuentes',
          text: 'Pregunta registrada',
          type: 'success'
        }).then(function(){
          window.location.href = '<?=base_url();?>index.php/MiControlador/index/7';

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

}
?>
