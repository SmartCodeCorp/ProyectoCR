 			<link href="<?=base_url();?>/FrontEnd/header">

<!-- start banner Area -->
            <section class="banner-area relative about-banner" id="home">
                <div class="overlay overlay-bg"></div>
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white">
                                Calentadores
                            </h1>

                        </div>
                    </div>
                </div>
            </section>
            <!-- End banner Area -->

			 <!-- ##### Featured Properties Area Start ##### -->
    <section class="featured-properties-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp">
                        <h2>"La ciencia de iluminar es un arte y el arte de iluminar es una ciencia".</h2>
                        <p>-Carlos Laszlo</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Featured Property -->
                <?php foreach($productos as $producto):
                        if($producto->categorias_id_categoria == 1){ 
                    ?>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                            <img class="imgHW" src="<?=base_url();?>assets/uploads/files/<?=$producto->imagen?>" alt="">
                        </div>

                        <!-- Property Content -->
                        <div class="property-content">
                            <h3><?=$producto->nombre_producto; ?></h3>
                            <h4 class="location">STOCK: <?=$producto->unidades_stock; ?></h4>
                            <p>
                                <?=$producto->descripcion_producto; ?>
                            </p>
                            <div class="list-price">
                                <h4>$<?=$producto->precio_unitario; ?></h4>
                            </div>
                            <div align="right">
                                <a href="#" class="primary-btn text-uppercase">Añadir al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php 
            }

        endforeach;
        ?>

            </div>
        </div>
    </section>
    <!-- ##### Featured Properties Area End ##### -->
