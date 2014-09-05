<?php
/* @var $this EmpleadoController */
/* @var $data Empleado */
?>


<?php $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$data,
    'attributes'=>array(
        array('name'=>'id_empleado', 'label'=>'Empleado'),
        array('name'=>'nombre_empleado', 'label'=>'Nombre Empleado'),
        array('name'=>'apellido_empleado', 'label'=>'Apellido Empleado'),
        array('name'=>'direccion_empleado', 'label'=>'Direccion Empleado'),
        array('name'=>'telefono_empleado', 'label'=>'Telefono Empleado'),
        array('name'=>'email_empleado', 'label'=>'Correo Empleado'),
        array('name'=>'sexo_empleado', 'label'=>'Genero'),
        array('name'=>'id_cargo', 'label'=>'Cargo'),
    ),
)); ?>