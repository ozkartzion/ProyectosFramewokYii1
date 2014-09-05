<?php
/* @var $this VentaController */
/* @var $model Venta */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cantidad_detalleVenta'); ?>
		<?php echo $form->textField($model,'cantidad_detalleVenta'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'precio_detalleVenta'); ?>
		<?php echo $form->textField($model,'precio_detalleVenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_venta'); ?>
		<?php echo $form->textField($model,'id_venta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_producto'); ?>
		<?php echo $form->textField($model,'id_producto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->