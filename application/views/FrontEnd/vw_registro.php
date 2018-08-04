<!DOCTYPE html>
<html>
<head>
	<title>Registrate</title>
	<meta name=viewport content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="<?=base_url().'FrontEnd/Template/img/icons/logoR.ico';?>">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>FrontEnd/Login/css/home.css">

	<link rel="stylesheet" type="text/css" href="<?=base_url();?>dist/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>FrontEnd/Login/css/materialize.css">
	<!-- Carga asincronida media="none" onload="if(media!='all')media='all'"-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">




	<script type="text/javascript" async  src="<?=base_url();?>FrontEnd/Login/css/materialize.min.js"></script>
	<script src="<?=base_url();?>sweetalert2/dist/sweetalert-dev.js"></script>
	<link rel="stylesheet" type="text/css"  href="<?=base_url();?>FrontEnd/Login/css/animate.min.css">


	<link href="<?=base_url();?>FrontEnd/ketchup/css/jquery.ketchup.css" rel="stylesheet" media="screen" type="text/css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url();?>FrontEnd/ketchup/css/jquery.ketchup.css" />

	<script src="<?=base_url();?>FrontEnd/ketchup/js/jquery.js" type="text/javascript"></script>
	<script src="<?=base_url();?>FrontEnd/ketchup/js/jquery.ketchup.js" type="text/javascript"></script>
	<script src="<?=base_url();?>FrontEnd/ketchup/js/jquery.ketchup.validations.js" type="text/javascript"></script>
	<script src="<?=base_url();?>FrontEnd/ketchup/js/jquery.ketchup.helpers.js" type="text/javascript"></script>
	<script src="<?=base_url();?>FrontEnd/ketchup/js/scaffold.js" type="text/javascript"></script>

	<script type="text/javascript" src="<?=base_url();?>FrontEnd/ketchup/js/jquery-1.4.4.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>FrontEnd/ketchup/js/jquery.ketchup.all.min.js"></script>

</head>
<body>
	<noscript>
		<div class="container">
			<center class="animated pulse infinite">
				<h5><p>ATENCIÓN</p></h5>
				<font color="red"><h5 class="red-text"><p>La página que estás viendo requiere para su funcionamiento el uso de JavaScript.
					Si lo has deshabilitado intencionadamente, por favor vuelve a activarlo.</p></h5></font>
				</center>
			</div>
		</noscript>

	<div class="container">
		<div class="row">
			<div class="s12 m12 l12 center">
				<a href="<?=base_url().'index.php/MiControlador/index/1';?>"><h1>Casa Rocha</h1></a>
			</div>
			<div class="col s12 m12 l12">
				<br>
				<hr width="50%">
			</div>

			<?php
			          $error_msg=$this->session->flashdata('error_msg');
			          if($error_msg){?>
			            <script>
			              swal({
			      type: 'error',
			      title: 'Oops...',
			      text: 'Lo sentimos ese email ya esta registrado!'
			    })
			            </script>
			          <?php
			          }
			           ?>


			<!-- Registrar cuenta -->
			<div class="col s0 m0 l3"></div>
			<div class="col s12 m12 l6 "  id="signup ">
				<form class="default-behavior" method="post" action="<?=base_url();?>index.php/Login_User/registroUser" >
					<br><label><h4 align="center">Registra una cuenta nueva:</h4></label>
					<br><label>Nombre(s)</label>
					<input type="text" name="nombre" data-validate="validate(required, username, minlength(3), maxlength(50))"  id="nombre">
					<div class="col s6">
						<label>Apellidos</label>
						<input type="text" name="apellidos" data-validate="validate(required, minlength(3), maxlength(50))" id="apellidos">
					</div>
					<div class="col s6">
						<label>E-mail</label>
						<input  type="email" name="email" data-validate="validate(required, email)" id="email">
					</div>
					<div class="col s6 m6 l6">
						<label>Contraseña:</label>
						<input type="password" name="password" data-validate="validate(required, minlength(4), maxlength(30))" id="password">
					</div>
					<div class="col s6">
						<label>Telefono</label>
						<input  type="number" name="telefono" data-validate="validate(required, minlength(10) maxlength(15))" id="telefono">
					</div>
					<div class="col s6">

						<input  type="hidden" name="status" id="status" value="1">
					</div>
					<div class="col s6">

						<input  type="hidden" name="privilegios" id="privilegios" value="3">
					</div>
					<div class="center col s12 m12 l12">
						<br>
						<button class="btn waves-effect waves-light left" type="submit" name="enviar">Enviar
							<i class="material-icons right"></i>
						</button>

							<a type="button" class="btn waves-effect waves-light right" href="<?=base_url();?>index.php/MiControlador/index/1">Cancelar</a>



					</div>


				</form>
				<script type="text/javascript">
				$('.default-behavior').ketchup();
				</script>


				<p class="col s12 m12 l12 center"><h6 class="center">¿Ya tienes una cuenta? <a href="<?=base_url();?>index.php/MiControlador/iniciar_sesion">Iniciar sesión</a> </h6></p>
			</div>

			<!-- Fin registrar cuenta -->
		</div>
	</div>
</body>
</html>
