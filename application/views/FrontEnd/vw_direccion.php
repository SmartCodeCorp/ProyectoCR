<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
            </div>
        </div>
    </div>
</section>
<section class="our-mission-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="pb-70 col-lg-8">
            	<h3 class="pb-20 text-center mb-30">TU PEDIDO</h3>
                <div class="table-responsive">
                <table class="table">
                    <tr class="thead-dark">
                        <th scope="col">Articulo</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Sub-Total</th>
                    </tr>
                    <?php $i = 1; ?>
                    <?php foreach ($this->cart->contents() as $items): ?>
                        <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
                    <tr>
                        <td>
                            <?php echo $items['name']; ?>
                            <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
                                <p>
                                    <?php foreach ($this->cart->product_options($items['rowid']) as 
                                    $option_name => $option_value): ?>
                                    <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />
                                    <?php endforeach; ?>
                                </p>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php echo $items['img']; ?>
                            <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
                                <p>
                                    <?php foreach ($this->cart->product_options($items['rowid']) as 
                                    $option_img => $option_value): ?>
                                    <img class="imgHW" src="<?=base_url();?>assets/uploads/files/<?=$option_img;?>" alt="">                
                                    <br />
                                    <?php endforeach; ?>
                                </p>
                            <?php endif; ?>
                        </td>         
                        <td >
                            <?php echo $this->cart->format_number($items['price']); ?>
                        </td>
                        <td>
                            <?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5', 'type' => 'number')); ?>
                        </td>
                        <td style="text-align:right">
                            $<?php echo $this->cart->format_number($items['subtotal']); ?>    
                        </td>
                    </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    <tr>
                        <td class="right">
                            <strong>Total</strong>
                        </td>
                        <td class="right" colspan="2">
                            $<?php echo $this->cart->format_number($this->cart->total()); ?>        
                        </td>
                    </tr>
                </table>
            </div>

            	<form class="form-wrap" action="<?=base_url().'index.php/Contacto/agregar';?>" method="POST">
					<h3 class="pb-20 text-center mb-30">DIRECCIÓN DE ENVÍO</h3>
					<input type="text" class="form-control" name="calle" placeholder="Calle" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre'" value="<?=set_value('Calle') ;?>">
					<input type="number" class="form-control" name="numeroExt" placeholder="Número exterior" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Asunto'" value="<?=set_value('Número exterior') ;?>">
					<input type="number" class="form-control" name="numeroInt" placeholder="Número interior" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Asunto'" value="<?=set_value('Número interior') ;?>">
					<input type="text" class="form-control" name="colonia" placeholder="Colonia" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Colonia'" value="<?=set_value('Calle') ;?>">
					<input type="number" class="form-control" name="codigopostal" placeholder="Código postal" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Código postal'" value="<?=set_value('Código postal') ;?>">
					<input type="text" class="form-control" name="ciudad" placeholder="Ciudad" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ciudad'" value="<?=set_value('Ciudad') ;?>">
					<input type="text" class="form-control" name="estado" placeholder="Estado" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Estado'" value="<?=set_value('Estado') ;?>">
					<label>Escribe alguna referencia de la direccion de envío</label>
					<textarea name="referencia" class="form-control" rows="10" placeholder="Escribe una referencia" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Referencia'" value="<?=set_value('Referencia') ;?>">
					</textarea>
					<?=validation_errors();?>
					<button class="primary-btn text-uppercase">Guardar dirección</button>
				</form>
            </div>
        </div>
    </div>
</section>