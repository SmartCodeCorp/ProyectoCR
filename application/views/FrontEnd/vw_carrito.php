<!DOCTYPE html>
<html>
<body>
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Carrito de compras
                </h1>

            </div>
        </div>
    </div>
</section>
<section class="our-mission-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <table class="table table-bordered">
                    <tr>
                        <th>Articulo</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Sub-Total</th>
                        <th>Eliminar</th>
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
                        <td ><?php echo $this->cart->format_number($items['price']); ?></td>
                        <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?>
                            <p><?php echo form_submit("Producto/actualizarCarrito", "Actualizar" , "class='btn btn-warning'"); ?>
                            </p>
                        </td>
                        <td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
                        <td id="eliminar"><?= anchor('../index.php/Producto/eliminarProducto/' . $items['rowid'], 'Eliminar') ?><span class="glyphicon glyphicon-trash"></span>
                        </td>
                    </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    <tr>
                        <td colspan="2" onclick="return confirm('¿Realmente desea eliminar este articulo?')"><?= anchor('../index.php/Producto/vaciarCarrito', 'Vaciar carrito')?><span class="glyphicon glyphicon-trash"></span>
                        </td>
                        <script>
                                    
                        </script>
                        <td class="right"><strong>Total</strong></td>
                        <td class="right" colspan="2">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
	
</body>
</html>