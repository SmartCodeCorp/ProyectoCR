<!DOCTYPE html>
<html>
<body>
	<table class="table table-bordered">
    <tr>
        <th>nombre</th>
        <th>precio</th>
        <th >cantidad</th>
        <th >Sub-Total</th>
        <th >Eliminar</th>
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
            <p><?php echo form_submit("Producto/actualizarCarrito", "Actualizar" , "class='btn btn-success'"); ?>
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
</body>
</html>