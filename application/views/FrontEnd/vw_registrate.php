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
						<h1 class="text-white">Se parte de nosotros</h1>
					</div>
				</div>
		    </div>
	</section>
	<section class="appointment-area">
		<div class="container">
			<div class="row justify-content-between align-items-center pb-120 appointment-wrap">
				<div class="col-lg-5 col-md-6 appointment-left">
					<h1>Horario de Servicio</h1>
					<ul class="time-list">
						<li class="d-flex justify-content-between">
							<span>Lunes-Sábado</span>
							<span>08.30 am - 07.30 pm</span>
						</li>
					</ul>
				</div>
			<div class="col-lg-6 col-md-6 appointment-right pt-60 pb-60">
				<form class="form-wrap" action="<?=base_url().'index.php/Usuario/registro_usuario';?>" method="POST">
					<h3 class="pb-20 text-center mb-30">REGISTRATE</h3>
						<input type="text" class="form-control" name="nombre" placeholder="Nombre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre'" value="<?=set_value('Nombre') ;?>">
						<input type="text" class="form-control" name="apellidos" placeholder="Apellidos" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Apellidos'" value="<?=set_value('Apellidos') ;?>">
						<input type="email" class="form-control" name="email" placeholder="Correo electrónico" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Correo electrónico'" value="<?=set_value('Correo electronico') ;?>">
						<input type="password" class="form-control" name="password" placeholder="Contraseña" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contraseña'" value="<?=set_value('Contraseña') ;?>">
						<input type="text" class="form-control" name="telefono" placeholder="Teléfono" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Teléfono'" value="<?=set_value('Telefono') ;?>">
						<input type="hidden" name="status" value="1" >
						<input type="hidden" name="privilegios" value="3" >
						<?=validation_errors();?>
						<button class="primary-btn text-uppercase" type="submit">Registrarme</button>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>