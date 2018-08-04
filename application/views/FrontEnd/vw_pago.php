<?php
$id_usuario = $this->session->userdata('id_usuario');;

    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        $email = htmlspecialchars($email);
    }
?>
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
                        <th scope="col">Artículo</th>
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
        	</div>
            <div class="col-md-4">
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
        	<div class="col-md-4">
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
                        <label>Se te enviará un correo electrónico con el número de cuenta y la referencia de pago en el cual deberás realizar tu deposito bancario.
                        </label>
                        <form method="POST" action="<?=base_url().'index.php/Metodos_Pago/deposito';?>">
                            <input type="hidden" name="deposito" value="3">
                            <input type="hidden" name="direccion" value="<?=$dir->id_direccion;?>">
                            <input type="hidden" name="idUsuario" value="<?=$id_usuario ;?>">
                            <button class="primary-btn form-control" type="submit">Guardar y continuar
                            </button>
                        </form>
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
                        <form method="POST" action="<?=base_url().'index.php/Metodos_Pago/paypal';?>">
                            <input type="hidden" name="paypal" value="2">
                            <button class="primary-btn form-control" type="submit">Guardar y continuar
                            </button>
                        </form>
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
                            <form class="form-wrap" method="POST" action="<?=base_url().'index.php/Metodos_Pago/tarjeta';?>">
                                <?=validation_errors();?>
                                <div class="form-group col-12">
                                    <label>Nombre del titular</label>
                                    <input class="form-control form-control-sm" type="text" name="titular" placeholder="Nombre que muestra la tarjeta" value="<?=set_value('Nombre del titular');?>">
                                </div>
                                <div class="form-group col-12">
                                    <label>Numero de tarjeta</label>
                                    <input class="form-control form-control-sm" type="password" name="numero" placeholder="**** **** **** ****" value="<?=set_value('Numero de tarjeta') ;?>">
                                </div>
                                <div class="form-group col-12">
                                    <label>Mes de expiración</label>
                                    <select name="mes_expiracion" class="form-control form-control-sm" value="<?=set_value('Mes de expiracion') ;?>">
                                        <option value="enero">Enero</option>
                                        <option value="febrero">Febrero</option>
                                        <option value="marzo">Marzo</option>
                                        <option value="abril">Abril</option>
                                        <option value="mayo">Mayo</option>
                                        <option value="junio">Junio</option>
                                        <option value="julio">Julio</option>
                                        <option value="agosto">Agosto</option>
                                        <option value="septiembre">Septiembre</option>
                                        <option value="octubre">Octubre</option>
                                        <option value="noviembre">Noviembre</option>
                                        <option value="diciembre">Diciembre</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <label>Año de expiración</label>
                                    <input class="form-control" type="month" id="example-month-input" name="anyo_expiracion" value="<?=set_value('Año de expiracion') ;?>">
                                </div>
                                <div class="form-group col-12">
                                    <label>Código de seguridad</label>
                                    <input class="form-control form-control-sm" type="password" name="codigo" placeholder="Ingrese 3 digitos" value="<?=set_value('Codigo de seguridad') ;?>">
                                    <input name="idDireccion" type="hidden" value="<?=$dir->id_direccion ;?>">
                                    <input name="idUsuario" type="hidden" value="<?=$id_usuario ;?>">
                                    <input name="tarjeta" type="hidden" value="3">
                                </div>
                                <button class="primary-btn form-control" type="submit">Guardar y continuar</button>
                            </form>
                      </div>
                    </div>
                  </div>
                </div>
        	</div>
        </div>
    </div>
</section>
