<?php
/* @var $this ProductoController */
/* @var $data Producto */
?>
<?php $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$data,
    'attributes'=>array(
        array('name'=>'id_producto', 'label'=>'Producto'),
        array('name'=>'nombre_producto', 'label'=>'Nombre Producto'),
        array('name'=>'codigo_producto', 'label'=>'Codigo Producto'),
        array('name'=>'stock_producto', 'label'=>'Stock Producto'),
        array('name'=>'precio_producto', 'label'=>'Precio Producto'),
        array('name'=>'id_empresa', 'label'=>'Empresa'),
        array('name'=>'id_tipoproducto', 'label'=>'Tipo Producto'),
    ),
)); ?>