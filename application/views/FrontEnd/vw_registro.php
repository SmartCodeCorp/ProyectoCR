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
	<script type="text/javascript" async src="<?=base_url();?>js/validacionessignup.js"></script>
	<script type="text/javascript" async src="<?=base_url();?>js/jquery.js"></script>


	<script type="text/javascript" async  src="<?=base_url();?>FrontEnd/Login/css/materialize.min.js"></script>
	<script src="<?=base_url();?>sweetalert2/dist/sweetalert-dev.js"></script>
	<link rel="stylesheet" type="text/css"  href="<?=base_url();?>FrontEnd/Login/css/animate.min.css">

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
				<a href="index.php"><h1>Casa Rocha</h1></a>
			</div>
			<div class="col s12 m12 l12">
				<br>
				<hr width="50%">
			</div>


<?php

							if (isset($_GET['error'])) {
								echo '<center><h4 class="red-text">Datos no validos</h4></center>';
							}
							if (isset($_GET['comp'])) {
								echo '<center><h4 class="red-text">Inicie sesión para continuar</h4></center>';
								?>
								<input type="hidden" name="ver" value="comp">
								<?php
							}

                                                        if(isset($_GET['existe'])){
                                                                echo'<center>ya hay una cuenta con ese correo</center>';
                                                        }

							?>

			<!-- Registrar cuenta -->
			<div class="col s0 m0 l3"></div>
			<div class="col s12 m12 l6 "  id="signup ">
				<form name="signup" method="post" action="<?=base_url();?>index.php/MiControlador/iniciar_sesion" onsubmit="return validar();">
					<br><label><h4 align="center">Registra una cuenta nueva:</h4></label>
					<br><label>Nombre(s)</label>
					<input type="text" name="nombre" id="nombre">
					<div class="col s6">
						<label>Apellidos</label>
						<input type="text" name="apellidos" id="apellidos">
					</div>
					<div class="col s6">
						<label>E-mail</label>
						<input  type="text" name="email" id="email">
					</div>
					<div class="col s6 m6 l6">
						<label>Contraseña:</label>
						<input type="password" name="password" id="password" size="30" >
					</div>
					<div class="col s6">
						<label>Telefono</label>
						<input  type="number" name="telefono" id="telefono">
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
							<i class="material-icons right">send</i>
						</button>

							<a type="button" class="btn waves-effect waves-light right" href="<?=base_url();?>index.php/MiControlador/index/1">Cancelar</a>



					</div>


				</form>

				<p class="col s12 m12 l12 center"><h6 class="center">¿Ya tienes una cuenta? <a href="<?=base_url();?>index.php/MiControlador/iniciar_sesion">Iniciar sesión</a> </h6></p>
			</div>

			<!-- Fin registrar cuenta -->
		</div>
	</div>
</body>
</html>
