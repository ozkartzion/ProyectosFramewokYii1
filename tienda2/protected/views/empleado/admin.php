<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Empleado', 'url'=>array('index')),
	array('label'=>'Create Empleado', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#empleado-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Empleados</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$model->search(),
    'template'=>"{items}",
    'columns'=>array(
        array('name'=>'id_empleado', 'header'=>'Empleado'),
        array('name'=>'nombre_empleado', 'header'=>'Nombre Empleado'),
        array('name'=>'apellido_empleado', 'header'=>'Apellido Empleado'),
        array('name'=>'direccion_empleado', 'header'=>'Direccion Empleado'),
        array('name'=>'telefono_empleado', 'header'=>'Telefono Empleado'),
        array('name'=>'email_empleado', 'header'=>'Correo Empleado'),
        array('name'=>'sexo_empleado', 'header'=>'Genero Empleado'),
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
)); ?>

