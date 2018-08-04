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
                $pagoTarjeta = $this->session->flashdata('pagoTarjeta');
                    if ($pagoTarjeta) {?>
                        <script>
                            swal({
                              position: 'top-end',
                              type: 'success',
                              title: 'Tarjeta aceptada',
                              showConfirmButton: false,
                              timer: 1700
                            })
                        </script>
                    <?php
                    }
                ?>
        	<div class="col-md-3">
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
            <div class="col-md-3">
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
            <div class="col-md-3 text-center">
                <h5 class="pb-20 text-center mb-30">FORMA DE PAGO</h5>
                    <?php foreach($metodo as $met):?>
                        <label>PAGO CON:</label><br>
                        <label><?=$met->nombre_metodo;?></label><br>
                        <?php
                            if ($met->id_metodo == 3) { ?>
                                <img class="img" src="<?=base_url();?>FrontEnd/Template/img/credit-card.png">
                            <?php
                            }elseif ($met->id_metodo == 2) {?>
                                <img src="<?=base_url();?>FrontEnd/Template/img/PayPal-logo.png">
                            <?php
                            }elseif ($met->id_metodo == 1) {?>
                                <img src="<?=base_url();?>FrontEnd/Template/img/depositoicono.png">
                            <?php
                            }
                        ?>
                    <?php endforeach; ?>
                    <button class="primary-btn text-uppercase">GENERAR TICKET</button>
            </div>
        	<div class="col-md-2">
                <h5>RESUMEN DE TU PEDIDO</h5><br>
                <table class="table table-sm">
                    <tr class="thead-dark">
                        <th scope="col" class="text-center">Sub-Total</th>
                    </tr>
                    <?php $i = 1; ?>
                    <?php foreach ($this->cart->contents() as $items): ?>
                        <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
                    <tr>
                        <td style="text-align:right">
                            $<?php echo $this->cart->format_number($items['subtotal']); ?>
                        </td>
                    </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    <tr>
                        <td class="right">
                            <strong>Total: </strong>
                            $<?php echo $this->cart->format_number($this->cart->total()); ?>
                            <br>
                            <strong>Total a pagar: </strong>
                            $<?php echo $this->cart->format_number($this->cart->total()); ?>
                        </td>
                    </tr>
                </table>
                <button class="primary-btn text-uppercase" onclick="finalizar();">FINALIZAR COMPRA</button>
                <script>
                    function finalizar(){
                        swal(
                          '¡Gracias por su compra!',
                          'Casa Rocha agradece su preferencia!',
                          'success',
                          location.href = "<?=base_url();?>index.php/MiControlador/compraTerminada"
                        )
                    }
                </script>
        	</div>
        </div>
    </div>
</section>
