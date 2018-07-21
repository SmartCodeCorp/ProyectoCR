<!DOCTYPE html>
<html lang="en">
<head>
	<title>Iniciar Sesion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?=base_url().'FrontEnd/Template/img/icons/logoR.ico';?>">
	<link rel="icon" type="image/png" href="<?=base_url();?>/FrontEnd/Login/images/profile.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>FrontEnd/Login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>FrontEnd/Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>FrontEnd/Login/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>FrontEnd/Login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>FrontEnd/Login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>FrontEnd/Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>FrontEnd/Login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?=base_url();?>FrontEnd/Template/img/img-01.png" alt="IMG">
					<div class="text-center p-t-12">
						<a class="txt2" href="<?=base_url();?>index.php/MiControlador/index/1"> REGRESAR <i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</div>
				<form class="login100-form validate-form" method="POST" action="<?=base_url().'index.php/Login/log_in';?>">
					<span class="login100-form-title">Inicio de Sesión</span>
					<div class="wrap-input100 validate-input" data-validate = "El correo es requerido: ejemplo@abc.com">
						<input class="input100" type="text" name="email" placeholder="Correo electrónico">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>

					</div>
					<div class="wrap-input100 validate-input" data-validate = "La contraseña es requerida">
						<input class="input100" type="password" name="password" placeholder="Contraseña">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn" >
							Iniciar sesión
						</button>
					</div>
					<div class="text-center p-t-12">
						<span class="txt1">
							Olvidó su
						</span>
						<a class="txt2" href="#">
							Usuario / Contraseña?
						</a>
					</div>
					<div class="text-center p-t-12">
						<a class="txt2" href="#">
							REGISTRATE
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="<?=base_url();?>FrontEnd/Login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url();?>FrontEnd/Login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?=base_url();?>FrontEnd/Login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url();?>FrontEnd/Login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url();?>FrontEnd/Login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?=base_url();?>FrontEnd/Login/js/main.js"></script>

</body>
</html>
