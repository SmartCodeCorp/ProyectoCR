<?php
if(!$this->session->has_userdata('email', 'status_usuario', 'privilegios')){
    redirect('MiControlador/index/10');
}
    
    if (isset($_SESSION['email'])) {
        //asignar a variable
        $email = $_SESSION['email'];
        //asegurar que no tenga "", <, > o &
        $email = htmlspecialchars($email);       

        //usarla donde quieras
        
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<section class="banner-area relative about-banner" id="home">
		<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row d-flex align-items-center justify-content-center">
					<div class="about-content col-lg-12">
						<h1 class="text-white">Ya eres parte de nosotros</h1>
					</div>
				</div>
		    </div>
	</section>
	<section class="container">
		<div class="row">
			<div class="col-xs-12 col-lg-3">
		</div>
		<div class="col-xs-12 col-lg-6">
			<div class="alert alert-warning alert-dismissible" role="alert">
        	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span>
        	</button>
      		<h4>¡¡EN HORA BUENA!! YA ERES PARTE DE: <strong>CASA ROCHA</strong></h4>
      		<h4><?php echo "<p>¡Hola $email!</p>"; ?></h4>
    		</div>
    		<script>
    			swal({
				  title: 'REGISTRO EXITOSO',
				  type: 'success',
				  html:
				    'Puedes <strong>imprimir</strong> tu info dando click, ',
				  showCloseButton: true,
				  showCancelButton: true,
				  focusConfirm: false,
				  confirmButtonText:
				    '<a href=""><i class="fa fa-print"></i></a> ¡Imprimir!',
				  confirmButtonAriaLabel: 'Thumbs up, great!',
				})
    		</script>
    		<a href="<?=base_url().'index.php/pdfs/generar/'.$email;?>">
    			<button type="submit">Generar reporte</button>
    		</a>
		</div>
		<div class="col-xs-12 col-lg-3">
		</div>
		</div>
		
	</section>
	

</body>
</html>