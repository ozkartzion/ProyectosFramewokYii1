<?php
/* @var $this ClienteController */
/* @var $data Cliente */
?>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$data,
    'attributes'=>array(
        array('name'=>'id_cliente', 'label'=>'Cliente'),
        array('name'=>'nombre_cliente', 'label'=>'Nombre Cliente'),
        array('name'=>'direccion_cliente', 'label'=>'Direccion Cliente'),
        array('name'=>'telefono_cliente', 'label'=>'Telefono Cliente'),
        array('name'=>'id_tipocliente', 'label'=>'Tipo Cliente'),
    ),
)); ?>