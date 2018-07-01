
		<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-8 col-md-12">
							<h1>
								Calentadores
								    Solares
							</h1>
							<p class="pt-10 pb-10 text-white">
								Utilizando energía solar CUIDAMOS el ambiente.
							</p>
							<a href="<?=base_url();?>index.php/MiControlador/index/2" class="primary-btn text-uppercase">Productos</a>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start appointment Area -->
			<section class="appointment-area">
				<div class="container">
					<div class="row justify-content-between align-items-center pb-120 appointment-wrap">
						<div class="col-lg-5 col-md-6 appointment-left">
							<h1>
								Horario de Servicio
							</h1>
							<ul class="time-list">
								<li class="d-flex justify-content-between">
									<span>Lunes-Sábado</span>
									<span>08.30 am - 07.30 pm</span>
								</li>
								<li>
									<?php	
										echo $this->calendar->generate($this->uri->segment(3), $this->uri->segment(4));
									?>
								</li>
							</ul>
						</div>
						<div class="col-lg-6 col-md-6 appointment-right pt-60 pb-60">
							<form class="form-wrap" action="#">
								<h3 class="pb-20 text-center mb-30">Contacto</h3>
								<input type="text" class="form-control" name="nombre" placeholder="Nombre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre'" >
								<input type="text" class="form-control" name="asunto" placeholder="Asunto " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Asunto'" >
								<input type="email" class="form-control" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Correo'" >
								<textarea name="mensaje" class="" rows="5" placeholder="Mensaje" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mensaje'"></textarea>
								<button class="primary-btn text-uppercase">Enviar</button>
							</form>
						</div>
					</div>
				</div>

			<!-- Start offered-service Area -->
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
			<!-- End offered-service Area -->





			<!-- Start recent-blog Area -->
			<section class="recent-blog-area section-gap">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-7 pb-60 header-text">
							<h1>Productos recientes</h1>

						</div>
					</div>
					<div class="row">
						<div class="single-recent-blog col-lg-4 col-md-4">
							<div class="thumb">
								<img class="f-img img-fluid mx-auto" src="<?=base_url();?>/FrontEnd/Template/img/productos/calent_20.jpg" alt="">


							</div>
							<a href="#">
								<h4>Calentador solar</h4>
							</a>
							<p>
								Calentador solar sopray de 20 tubos.
							</p>

						</div>
						<div class="single-recent-blog col-lg-4 col-md-4">
							<div class="thumb">
								<img class="f-img img-fluid mx-auto" src="<?=base_url();?>/FrontEnd/Template/img/productos/calentador_10.jpg" alt="">

							</div>
							<a href="#">
								<h4>Calentador solar</h4>
							</a>
							<p>
						  Calentador solar sopray de 10 tubos.
							</p>




						</div>
						<div class="single-recent-blog col-lg-4 col-md-4">
							<div class="thumb">
								<img class="f-img img-fluid mx-auto" src="<?=base_url();?>/FrontEnd/Template/img/productos/calentador_20.jpg" alt="">
							</div>
							<a href="#">
								<h4>Calentador solar</h4>
							</a>
							<p>
								Calentador solar sopray de 20 tubos.
							</p>

						</div>
					</div>
				</div>
			</section>
			<!-- end recent-blog Area -->
