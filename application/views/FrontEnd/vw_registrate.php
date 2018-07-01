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
					<h3 class="pb-20 text-center mb-30">Registro</h3>
						<input type="text" class="form-control" name="nombre" placeholder="Nombre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre'" >
						<input type="text" class="form-control" name="apellidos" placeholder="Apelidos" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Apellidos'" >
						<input type="email" class="form-control" name="email" placeholder="Correo electrónico" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Correo electrónico'" >
						<input type="password" class="form-control" name="password" placeholder="Contraseña" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contraseña'" >
						<input type="text" class="form-control" name="telefono" placeholder="Teléfono" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Teléfono'" >
						<input type="text" class="form-control" name="calle" placeholder="calle" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Calle'" >
						<input type="number" class="form-control" name="num_ext" placeholder="Numero exterior" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Numero exterior'" >
						<input type="number" class="form-control" name="num_int" placeholder="Numero interior" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Numero interior'" >
						<input type="text" class="form-control" name="colonia" placeholder="Colonia" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Colonia'" >
						<input type="text" class="form-control" name="referencia" placeholder="Referencia" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Referencia'" >
						<input type="text" class="form-control" name="cpostal" placeholder="Código postal" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Código postal'" >
						<input type="text" class="form-control" name="ciudad" placeholder="Ciudad" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ciudad'" >
						<input type="text" class="form-control" name="estado" placeholder="Estado" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Estado'" >
						<input type="hidden" name="status" value="1" >
						<input type="hidden" name="privilegios" value="3" >
						<button class="primary-btn text-uppercase" type="submit">Registrarme</button>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>