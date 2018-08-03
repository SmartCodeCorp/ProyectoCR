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
            <div class="col-md-4">
                <h5 class="pb-20 text-center mb-30">TU PEDIDO</h5>
                <div class="table-responsive text">
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
            </div>
            <div class="col-md-8">
                <form class="form-wrap" action="<?=base_url().'index.php/Direcciones/agregarDireccion';?>" method="POST">
                    <h5 class="pb-20 text-center mb-30">DIRECCIÓN DE ENVÍO</h5>
                    <?=validation_errors();?>
                    <input type="text" class="form-control form-control-sm" name="calle" placeholder="Calle" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Calle'" value="<?=set_value('Calle') ;?>">
                    <input type="text" class="form-control form-control-sm" name="numeroExt" placeholder="Número exterior" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Número exterior'" min="1" value="<?=set_value('NumeroExterior') ;?>">
                    <input type="text" class="form-control form-control-sm" name="numeroInt" placeholder="Número interior" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Número interior'" min="1" value="<?=set_value('NumeroInterior') ;?>">
                    <input type="number" class="form-control form-control-sm" name="codigoPostal" placeholder="Código postal" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Código postal'" min="1" value="<?=set_value('CodigoPostal') ;?>">
                    <input type="text" class="form-control form-control-sm" name="colonia" placeholder="Colonia" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Colonia'" value="<?=set_value('Colonia') ;?>">
                    <input type="text" class="form-control form-control-sm" name="ciudad" placeholder="Ciudad" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ciudad'" value="<?=set_value('Ciudad') ;?>">
                    <input type="text" class="form-control form-control-sm" name="estado" placeholder="Estado" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Estado'" value="<?=set_value('Estado') ;?>">
                    <label>Escribe alguna referencia de la direccion de envío</label>
                    <textarea name="referencia" class="form-control" rows="10" placeholder="Escribe una referencia" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Referencia'" value="<?=set_value('Referencia') ;?>">
                    </textarea>
                    <input name="idUsuario" type="hidden" value="<?=$id_usuario ;?>">
                    <button class="primary-btn text-uppercase">Guardar dirección</button>
                </form>
            </div>
            <!--<div class="col-md-2">
                <form method="POST" action="<?=base_url().'index.php/Direcciones/buscarDireccion';?>">
                    <label>Buscar mi direccion con mi CP</label>
                    <input type="number" class="form-control" name="codigoPostal" placeholder="Código postal" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Código postal'" min="1" value="<?=set_value('CodigoPostal') ;?>">
                    <?=validation_errors();?>
                    <button class="primary-btn text-uppercase">Buscar</button>
                </form>
            </div>-->
        </div>
    </div>
</section>
