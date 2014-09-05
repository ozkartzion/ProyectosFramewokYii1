<?php
/* @var $this VentaController */
/* @var $data Venta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad_detalleVenta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cantidad_detalleVenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio_detalleVenta')); ?>:</b>
	<?php echo CHtml::encode($data->precio_detalleVenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_venta')); ?>:</b>
	<?php echo CHtml::encode($data->id_venta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_producto')); ?>:</b>
	<?php echo CHtml::encode($data->id_producto); ?>
	<br />



</div>