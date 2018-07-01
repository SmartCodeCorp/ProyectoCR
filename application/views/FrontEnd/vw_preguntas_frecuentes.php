
<link href="<?=base_url();?>/FrontEnd/header">

<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Preguntas Frecuentes
							</h1>

						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start our-mission Area -->
			<section class="our-mission-area section-gap">

				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Contáctanos es un gusto atenderte</h1>
								<p>"Siempre estamos encantados de saber de ti, tus preguntas y comentarios son muy importantes para nosotros".</p>
							</div>
						</div>
					</div>
                    <div class="row">
                        <div class="col-md-6 accordion-left">

                            <!-- accordion 2 start-->   	
                            <dl class="accordion">
                                <dt>
                                    <a href="">SOLUCIONA TUS DUDAS</a>
                                </dt>
                                <?php foreach ($preguntas as $pregunta): ?>
                                <dt>
                                    <a href=""><?=$pregunta->pregunta; ?></a>
                                </dt>
                                <dd>
                                    <?=$pregunta->respuesta; ?>
                                </dd>
                                <?php endforeach; ?>
                            </dl>
                            <!-- accordion 2 end-->
                        </div>
                        <div class="col-md-6 video-right justify-content-center align-items-center d-flex relative">
                        	<div class="overlay overlay-bg"></div>
							<a class="play-btn" href="https://www.youtube.com/watch?v=_-F3PsL4UvM"><img class="img-fluid mx-auto" src="<?=base_url();?>/FrontEnd/Template/img/icons/play.png" alt=""></a>
                        </div>
                    </div>
				</div>






				<div class="container">
					<div class="row col-md-12 col-lg-12 row">
				<div class="comment-form">
									<h3>Escríbenos...</h3>
									<br>
								<form>

									<div class="form-group form-inline ">

									  <div class="form-group col-md-5  name">
									    <input type="text" class="form-control" id="name" placeholder="Nombre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre'">
									  </div>
									  <div class="form-group col-md-7 email">
									    <input type="email" class="form-control" id="email" placeholder="Correo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Correo'">
									  </div>
									</div>
									<div class="form-group ">
										<input type="text" class="form-control" id="subject" placeholder="Asunto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Asunto'">
									</div>
									<div class="form-group  ">
										<textarea class="form-control mb-10" rows="5" name="message" placeholder="Mensaje" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mensaje'" required=""></textarea>
									</div>
									<div align="right">
									<a href="#" class="primary-btn text-uppercase">Enviar Comentario</a>
									</div>
								</form>
							</div>
						</div>
					</div>

			</section>
			<!-- End our-mission Area -->
