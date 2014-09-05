<?php
/* @var $this VentaController */
/* @var $data Venta */
?>
<?php $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$data,
    'attributes'=>array(
        array('name'=>'id_venta', 'label'=>'Venta'),
        array('name'=>'fecha_venta', 'label'=>'Fecha'),
        array('name'=>'hora_venta', 'label'=>'Hora'),
        array('name'=>'id_cliente', 'label'=>'Cliente'),
        array('name'=>'id_empleado', 'label'=>'Empleado'),
    ),
)); ?>

<?php /*
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'verticalForm',
    'htmlOptions'=>array('class'=>'well'),
)); ?>
 
<?php echo $form->textFieldRow($model, 'textField', array('class'=>'span3')); ?>
<?php echo $form->passwordFieldRow($model, 'password', array('class'=>'span3')); ?>
<?php echo $form->checkboxRow($model, 'checkbox'); ?>
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Login')); ?>
 
<?php $this->endWidget();*/ ?>

