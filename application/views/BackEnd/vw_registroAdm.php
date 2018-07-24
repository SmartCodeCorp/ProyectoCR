<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registro Administrador</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?=base_url();?>BackEnd/Login_Adm/images/icons/logoCR.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>BackEnd/Login_Adm/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>BackEnd/Login_Adm/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>BackEnd/Login_Adm/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>BackEnd/Login_Adm/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>BackEnd/Login_Adm/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>BackEnd/Login_Adm/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>BackEnd/Login_Adm/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>BackEnd/Login_Adm/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>BackEnd/Login_Adm/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>BackEnd/Login_Adm/css/main.css">
<!--===============================================================================================-->

	<script src="<?=base_url();?>js/jquery.min.js"></script>
	<script src="<?=base_url();?>sweetalert2/dist/sweetalert2.all.min.js"></script>
	<script src="https://unpkg.com/promise-polyfill"></script>	
	<script src="<?=base_url();?>sweetalert2/dist/sweetalert2.min.js"></script>
	<link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?=base_url().'index.php/Login_Adm/registroAdm';?>" method="POST">
					<span class="login100-form-title p-b-26">
						Registrate
						<p>
							<?php
			                  $error_msg=$this->session->flashdata('error_msg');
			                  if($error_msg){?>
			                    <script>
			                    	swal({
									  type: 'error',
									  title: 'Oops...',
									  text: 'Lo sentimos ese email ya esta registrado!',
									  footer: '<a href>Why do I have this issue?</a>'
									})
			                    </script>
			                  <?php
			              		}
			                   ?>
						</p>
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="nombre">
						<span class="focus-input100" data-placeholder="Nombre"></span>
					</div>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="apellidos">
						<span class="focus-input100" data-placeholder="Apellidos"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Correo electrónico"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Contraseña"></span>
					</div>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="telefono">
						<span class="focus-input100" data-placeholder="Teléfono"></span>
					</div>
					<div>
						<input class="input100" type="hidden" name="status" value="0">
						<input class="input100" type="hidden" name="privilegios" value="2">
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" >
								Registrar
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Ya tengo una cuenta
						</span>

						<a class="txt2" href="<?=base_url().'index.php/Login_Adm';?>">
							Iniciar sessión.
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?=base_url();?>BackEnd/Login_Adm/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url();?>BackEnd/Login_Adm/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url();?>BackEnd/Login_Adm/vendor/bootstrap/js/popper.js"></script>
	<script src="<?=base_url();?>BackEnd/Login_Adm/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url();?>BackEnd/Login_Adm/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url();?>BackEnd/Login_Adm/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?=base_url();?>BackEnd/Login_Adm/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url();?>BackEnd/Login_Adm/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url();?>BackEnd/Login_Adm/js/main.js"></script>

</body>
</html>