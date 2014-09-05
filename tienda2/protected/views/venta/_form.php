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

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_venta'); ?>
		<?php echo $form->textField($model,'fecha_venta'); ?>
		<?php echo $form->error($model,'fecha_venta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_venta'); ?>
		<?php echo $form->textField($model,'hora_venta'); ?>
		<?php echo $form->error($model,'hora_venta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_cliente'); ?>
		<?php echo $form->dropDownList($model,'id_cliente',CHtml::listData(Cliente::model()->findAll(),'id_cliente','nombre_cliente'),array('empty'=>'Seleccione Cliente')); ?>
		<?php echo $form->error($model,'id_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_empleado'); ?>
		<?php echo $form->dropDownList($model,'id_empleado',CHtml::listData(Empleado::model()->findAll(),'id_empleado','nombre_empleado'),array('empty'=>'Seleccione Empleado')); ?>
		<?php echo $form->error($model,'id_empleado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->