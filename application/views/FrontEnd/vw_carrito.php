<!DOCTYPE html>
<html>
<body>
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Mi Carrito
                </h1>
                <img src="<?=base_url();?>/FrontEnd/Template/img/shopping_cart.png" height="10%" width="10%">
            </div>
        </div>
    </div>
</section>
<?php 
    $eliminado = $this->session->flashdata('productoEliminado');
        if ($eliminado) {?>
            <script>
                swal({
                position: 'top-end',
                type: 'success',
                title: 'Producto eliminado',
                showConfirmButton: false,
                timer: 1700
                })
            </script>
        <?php
            }
        ?>
<section class="our-mission-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="pb-70 col-lg-8">
                <?php echo form_open('Producto/actualizarCarrito'); ?>
                <a onclick="accion();" class="primary-btn text-uppercase text-white">Vaciar Carrito</a>
                        <script>
                            function accion(){
                                const swalWithBootstrapButtons = swal.mixin({
                                  confirmButtonClass: 'btn btn-success',
                                  cancelButtonClass: 'btn btn-danger',
                                  buttonsStyling: false,
                                })
                                swalWithBootstrapButtons({
                                  title: 'Estas seguro de vaciar tu carrito?',
                                  text: "Puedes cancelar dando click en CANCELAR!",
                                  type: 'warning',
                                  showCancelButton: true,
                                  confirmButtonText: 'Si, Eliminar carrito!',
                                  cancelButtonText: 'Cancelar!',
                                  reverseButtons: true
                                }).then((result) => {
                                  if (result.value) {
                                    swalWithBootstrapButtons(
                                      'Eliminado!',
                                      'Tu carrito se ha eliminado.',
                                      'success',
                                      location.href ="<?=base_url();?>index.php/Producto/vaciarCarrito"
                                    )
                                  } else if (           
                                    result.dismiss === swal.DismissReason.cancel
                                  ) {
                                    swalWithBootstrapButtons(
                                      'Cancelado',
                                      'La accion se ha cancelado',
                                      'error'
                                    )
                                  }
                                })
                            }        
                        </script>
                <div class="table-responsive">
                <table class="table">
                    <tr class="thead-dark">
                        <th scope="col">Articulo</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Sub-Total</th>
                        <th scope="col">Eliminar</th>
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
                            <?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'min' => '1', 'max' => '3', 'size' => '5', 'type' => 'number')); ?>                            
                        </td>
                        <td style="text-align:right">
                            $<?php echo $this->cart->format_number($items['subtotal']); ?>    
                        </td>
                        <td>
                            <a href="<?=base_url().'index.php/Producto/eliminarProducto/'. $items['rowid'];?>">
                            <img src="<?=base_url();?>FrontEnd/Template/img/icons/trash.png" width="40px" heigth="40px">
                            </a>                          
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
                        <td>
                            <a href="<?=base_url();?>index.php/Producto/actualizarCarrito">
                                <button class="primary-btn text-uppercase">Actualizar</button>
                            </a>
                        </td>
                        <td class="right" colspan="2">
                            <a href="<?=base_url();?>index.php/Login_User/vistaLogin" class="primary-btn text-uppercase">
                                Procesar
                                <img src="<?=base_url();?>/FrontEnd/Template/img/shopping-cart-icon" height="10%" width="10%">
                            </a>
                        </td>
                    </tr>
                </table>
                </div>
                <a href="<?=base_url();?>index.php/MiControlador/index/3">
                    Seguir comprando
                </a>
            </div>
        </div>
    </div>
</section>
	
</body>
</html>