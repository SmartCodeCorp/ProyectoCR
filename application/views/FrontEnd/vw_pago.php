<section class="our-mission-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
        	<?php 
                $direccionAgregada = $this->session->flashdata('direccionAgregada');
                    if ($direccionAgregada) {?>
                        <script>
                            swal({
                              position: 'top-end',
                              type: 'success',
                              title: 'Direccion agregada',
                              showConfirmButton: false,
                              timer: 1700
                            })
                        </script>
                    <?php
                    }
                ?>
        	<div class="col-md-5">
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
                            <img class="imgCar" src="<?=base_url();?>assets/uploads/files/<?=$items['img'];?>" alt="">
                        </td>         
                        <td >
                            <?php echo $this->cart->format_number($items['price']); ?>
                        </td>
                        <td>
                            <?php echo $items['qty'];?>
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
            	<form class="form-wrap" action="<?=base_url().'index.php/Direcciones/agregarDireccion';?>" method="POST">
                    <h3 class="pb-20 text-center mb-30">DIRECCIÓN DE ENVÍO</h3>
                    <?php foreach($direccion as $dir):?>
                    	<label>CALLE: <?=$dir->calle;?></label><br>
                    	<label>NÚMERO: <?=$dir->numero_exterior;?></label><br>
                    	<label>INTERIOR: <?php if($dir->numero_interior == 0){echo "S/N";
                    		}else{?> <label><?=$dir->numero_interior; }?></label></label><br>
                    	<label>CP: <?=$dir->codigo_postal;?></label><br>
                    	<label>Col: <?=$dir->colonia;?></label><br>
                    	<label>CD: <?=$dir->ciudad;?></label><br>
                    	<label>ESTADO: <?=$dir->estado;?></label><br>
                    	<label>REFERENCIA: <?=$dir->referencia;?></label>
                    <?php endforeach; ?>
                </form>
        	</div>
        	<div class="col-md-7">
        		<h3 class="pb-20 text-center mb-30">ELIGE UNA FORMA DE PAGO</h3>
        	</div>
        </div>
    </div>
</section>