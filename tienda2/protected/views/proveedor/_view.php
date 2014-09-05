<?php
/* @var $this ProveedorController */
/* @var $data Proveedor */
?>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$data,
    'attributes'=>array(
        array('name'=>'id_proveedor', 'label'=>'Proveedor'),
        array('name'=>'nombre_proveedor', 'label'=>'Nombre Proveedor'),
        array('name'=>'direccion_proveedor', 'label'=>'Direccion Proveedor'),
        array('name'=>'telefono_proveedor', 'label'=>'Telefono Proveedor'),
        array('name'=>'direccion_proveedor', 'label'=>'Direccion Proveedor'),
        array('name'=>'email_proveedor', 'label'=>'Correo'),
    ),
)); ?>