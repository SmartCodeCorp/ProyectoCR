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
        	<div class="col-md-4">
        		<h5 class="pb-20 text-center mb-30">TU PEDIDO</h5>
                <div class="table-responsive textCenter">
                <table class="table table-sm">
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
                <br>
                <div>
                	<!--<form class="form-wrap" action="<?=base_url().'index.php/Direcciones/agregarDireccion';?>" method="POST">-->
                        <h5 class="pb-20 text-center mb-30">DIRECCIÓN DE ENVÍO</h5>
                        <?php foreach($direccion as $dir):?>
                        	<label>CALLE: <?=$dir->calle;?></label><br>
                        	<label>NÚMERO: <?=$dir->numero_exterior;?></label>
                        	<label>INTERIOR: <?php if($dir->numero_interior == 0){echo "S/N";
                        		}else{?> <label><?=$dir->numero_interior; }?></label></label><br>
                        	<label>CP: <?=$dir->codigo_postal;?></label><br>
                        	<label>Col: <?=$dir->colonia;?></label><br>
                        	<label>CD: <?=$dir->ciudad;?></label><br>
                        	<label>ESTADO: <?=$dir->estado;?></label><br>
                        	<label>REFERENCIA: <?=$dir->referencia;?></label>
                        <?php endforeach; ?>
                    <!--</form>-->
                </div>
        	</div>
        	<div class="col-md-8">
        		<h5 class="pb-20 text-center mb-30">ELIGE UNA FORMA DE PAGO</h5>
                
                <div id="accordion">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Deposito bancario
                        </button>
                      </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Paypal
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">
                        <button class="primary-btn form-control form-control-sm col-4" type="submit">Guardar y continuar</button>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Tarjeta de crédito o débito
                        </button>
                      </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body">
                        <label>Aceptamos tarjetas nacionales de débito y crédito de todos los bancos. Coloca tus datos para ver las opciones de pago disponibles. Si quieres usar una tarjeta internacional, deberás hacerlo a través de Paypal.</label>
                        <br>
                            <form class="form-wrap">
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label>Nombre del titular</label>
                                        <input class="form-control form-control-sm" type="text" name="" placeholder="Nombre que muestra la tarjeta">
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Numero de tarjeta</label>
                                    <input class="form-control form-control-sm" type="password" name="" placeholder="**** **** **** ****">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-3">
                                        <label>Mes de expiración</label>
                                        <select class="form-control form-control-sm">
                                            <option>Enero</option>
                                            <option>Febrero</option>
                                            <option>Marzo</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-3">
                                        <label>Año de expiración</label>
                                        <select class="form-control form-control-sm">
                                            <option>2018</option>
                                            <option>2019</option>
                                            <option>2020</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Código de seguridad</label>
                                        <input class="form-control form-control-sm" type="text" name="" placeholder="Ingrese 3 digitos">
                                    </div>   
                                </div>
                                <button class="primary-btn form-control form-control-sm col-4" type="submit">Guardar y continuar</button>
                            </form>
                      </div>
                    </div>
                  </div>
                </div>
        	</div>
        </div>
    </div>
</section>