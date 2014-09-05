<?php
/* @var $this VentaController */
/* @var $model Venta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'venta-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($modelo); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad_detalleVenta'); ?>
		<?php echo $form->textField($model,'cantidad_detalleVenta'); ?>
		<?php echo $form->error($model,'cantidad_detalleVenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio_detalleVenta'); ?>
		<?php echo $form->textField($model,'precio_detalleVenta'); ?>
		<?php echo $form->error($model,'precio_detalleVenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_venta'); ?>
		<?php echo $form->dropDownList($model,'id_venta',CHtml::listData(Venta::model()->findAll(),'id_venta','id_venta'),array('empty'=>'Seleccione la venta')); ?>
		<?php echo $form->error($model,'id_venta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_producto'); ?>
		<?php echo $form->dropDownList($model,'id_producto',CHtml::listData(Producto::model()->findAll(),'id_producto','id_producto'),array('empty'=>'Seleccione Empleado')); ?>
		<?php echo $form->error($model,'id_producto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->