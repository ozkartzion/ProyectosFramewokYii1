<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Producto', 'url'=>array('index')),
	array('label'=>'Create Producto', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#producto-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Productos</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$model->search(),
    'template'=>"{items}",
    'columns'=>array(
        array('name'=>'id_producto', 'header'=>'Producto'),
        array('name'=>'nombre_producto', 'header'=>'Nombre Producto'),
        array('name'=>'codigo_producto', 'header'=>'Codigo Producto'),
        array('name'=>'stock_producto', 'header'=>'Stock Producto'),
        array('name'=>'precio_producto', 'header'=>'Precio Producto'),
        array('name'=>'id_empresa', 'header'=>'Empresa'),
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
)); ?>
