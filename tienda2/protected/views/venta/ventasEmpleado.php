<?php
/* @var $this VentaController */
/* @var $model Venta */

$this->breadcrumbs=array(
	'Ventas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Venta', 'url'=>array('index')),
	array('label'=>'Create Venta', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#venta-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1> Ventas por Empleado</h1>


<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$model->search(),
    'template'=>"{items}",
    'columns'=>array(
        array('name'=>'idEmpleado.nombre_empleado', 'header'=>'Nombre Empleado'),
        array('name'=>'idEmpleado.apellido_empleado', 'header'=>'Apellido Empleado'),
        array('name'=>'id_venta', 'header'=>'Venta'),
        array('name'=>'fecha_venta', 'header'=>'Fecha Venta'),
        array('name'=>'hora_venta', 'header'=>'Hora Venta'),
    ),
)); ?>
