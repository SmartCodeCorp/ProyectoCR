
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

                    </dt>
                    <?php foreach ($preguntas as $pregunta): ?>
                    	<?php if ($pregunta->status_pregunta==1): ?>


                    <dt>
                        <a href=""><?=$pregunta->pregunta; ?></a>
                    </dt>
                    <dd>
                        <?=$pregunta->respuesta; ?>
                    </dd>
                        <?php endif ?>
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
						<h3>Déjanos tu Pregunta...</h3>
						<br>
					<form method="post" action="<?=base_url().'index.php/Preguntas_Frecuentes/agregarDuda'?>">

						<p>
						<?php
			                $success_msg= $this->session->flashdata('success_msg');
			                  if($success_msg){?>
			                    <script>
			                    	swal({
									position: 'top-end',
									type: 'success',
									title: 'Tu pregunta se ha guardado correctamente',
									showConfirmButton: false,
									timer: 1600
									})
			                    </script>
			                  <?php
			              		}
			                   ?>
					</p>

						<div class="form-group form-inline ">

						  <div class="form-group col-md-8  pregunta">
						    <input type="text" class="form-control" id="pregunta" name="pregunta" placeholder="Pregunta" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pregunta'" value="<?=set_value('Pregunta');?>">
						    <input type="hidden" name="status" value="0">
						  </div>
						</div>
						<div align="right">
							<button>
								<a href="#" class="primary-btn text-uppercase">Enviar Pregunta</a>
							</button>
						</div>
						<?=validation_errors();?>
					</form>
				</div>
			</div>
		</div>




</section>
<!-- End our-mission Area -->
