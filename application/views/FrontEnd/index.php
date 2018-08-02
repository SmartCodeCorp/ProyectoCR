
<!-- Inicia Area banner -->
<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-8 col-md-12">
						<p class="pt-10 pb-10 text-white">INVIERTE EN</p>
					<h1>CALENTADORES SOLARES</h1>
					<p class="pt-10 pb-10 text-white">Y AHORRA DINERO MUCHOS AÑOS</p>
					<a href="<?=base_url();?>index.php/MiControlador/index/2" class="primary-btn text-uppercase">PRODUCTOS</a>
				</div>
			</div>
		</div>
</section>
<!-- Termina Area de banner -->

<!-- Start appointment Area -->
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
						<li>
							<div class="container">
					            <div class="row">
					            	<div class="col"></div>
					            	<div class="col-5"><div id="Calendar"></div></div>
					            	<div class="col"></div>
					            </div>
					        </div>
					        <script>
						    	$(document).ready(function(){
						    		$('#Calendar').fullCalendar();
						    	});
						    </script>
						</li>
					</ul>
			</div>
			<!--Seccion para los contactos-->
			<div class="col-lg-6 col-md-6 appointment-right pt-60 pb-60">
				<form class="form-wrap default-behavior" action="<?=base_url().'index.php/Contacto/agregar';?>" method="POST">

					<h3 class="pb-20 text-center mb-30">CONTACTO</h3>
					<input type="text" class="form-control" name="nombre_contacto" placeholder="Nombre" data-validate="validate(required, username, minlength(3), maxlength(50))" id="nombre">


					<input type="text" class="form-control" name="asunto" placeholder="Asunto" data-validate="validate(required, maxlength(100))" id="asunto">

					<input type="email" class="form-control" name="email_contacto" placeholder="Email" data-validate="validate(required,email)" id="email">


					<textarea name="mensaje" class="" rows="5" placeholder="Mensaje" data-validate="validate(required, maxlength(300))"></textarea>

					<button class="primary-btn text-uppercase">Enviar</button>
				</form>

				<script type="text/javascript">
				$('.default-behavior').ketchup();
				</script>

			</div>
		</div>
	</div>
</section>

<!-- Inicia area de servicios -->
<section class="offered-service-area section-gap">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-8 offered-left">
				<h1 class="text-white">Nuestros servicios</h1>
				<p>
				Casa Rocha te ofrece los mejores servicios de instalación y mantenimiento de tus calentadores solares.
				</p>
		<div class="service-wrap row">
			<div class="col-lg-6 col-md-6">
				<div class="single-service">
					<div class="thumb">
						<img class="img-fluid" src="<?=base_url();?>/FrontEnd/Template/img/gallery/6.jpg" alt="">
					</div>
					<a href="#">
						<h4 class="text-white">Instalación</h4>
					</a>
					<p>
						Contamos con el personal suficientemente capacitado.
					</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="single-service">
					<div class="thumb">
						<img class="img-fluid" src="<?=base_url();?>/FrontEnd/Template/img/gallery/3.jpg" alt="">
					</div>
						<a href="#">
							<h4 class="text-white">Mantenimiento</h4>
						</a>
						<p>
							Contamos con el personal suficientemente capacitado.
						</p>
				</div>
			</div>
		</div>
			</div>
				<div class="col-lg-4">
					<div class="offered-right relative">
						<div class="overlay overlay-bg"></div>
							<h3 class="relative text-white">Productos</h3>
							<ul class="relative dep-list">
								<li><a href="#">Material Eléctrico</a></li>
								<li><a href="#">Calentadores Solares</a></li>
								<li><a href="#">Lámparas solares</a></li>
								<li><a href="#">Pisos y Azulejos</a></li>
								<li><a href="#">Productos Ferreteros</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
</section>
<!-- Termina area de servicio-->

<!-- Inicia area de blog -->
<section class="recent-blog-area section-gap">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7 pb-60 header-text">
				<h1>Productos recientes</h1>

			</div>
		</div>
		<div class="row">

      <?php $urlimg = base_url().'assets/uploads/files/' ?>

      <?php foreach ($newproducts as $new): ?>
        <div class="single-recent-blog col-lg-4 col-md-4">

          <div class="thumb">

            <img class="f-img img-fluid mx-auto" src="<?=$urlimg.$new->imagen;?>" alt="">
          </div>
          <a href="#">
            <h4>Nombre:&nbsp;<?=$new->nombre_producto;?></h4>
          </a>
          <a href="">
            <h4>Descripción:&nbsp;<?=$new->descripcion_producto;?></h4>

          </a>

          <a href="">
            <h4>$ &nbsp;<?=$new->precio_unitario;?></h4>

          </a>

          <div align="right">
                    <a href="#" class="primary-btn text-uppercase">Añadir al carrito</a>
                    </div>


        </div>




      <?php endforeach; ?>



		</div>
	</div>
</section>
<!-- Termina area de blog -->
