	

<html lang="en">
    <head>
            <meta charset="utf-8">
            <title></title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <style>
                    body {
                            padding-top: 100px;
                    }
            </style>
    </head>
    <body>
    <?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'type'=>'inverse', // null or 'inverse'
    'brand'=>'HIPERMAX',
    'brandUrl'=>'#',
    'collapse'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index'), 'active'=>true),
                array('label'=>'Registrar', 'url'=>'#', 'items'=>array(
                    array('label'=>'Cliente', 'url'=>array('/cliente/create')),
                    array('label'=>'Proveedor', 'url'=>array('/proveedor/create')),
                    array('label'=>'Empleado', 'url'=>array('/empleado/create')),
                    array('label'=>'Venta','url'=>array('/venta/create')),
                    array('label'=>'Producto', 'url'=>array('/producto/create')),
                    array('label'=>'Tipo Producto', 'url'=>array('/tipoProducto/create')),
                )),
                array('label'=>'Administrar', 'url'=>'#', 'items'=>array(
                    array('label'=>'Cliente', 'url'=>array('/cliente/admin')),
                    array('label'=>'Proveedor', 'url'=>array('/proveedor/admin')),
                    array('label'=>'Empleado', 'url'=>array('/empleado/admin')),
                    array('label'=>'Producto', 'url'=>array('/producto/admin')),
                )),
                array('label'=>'Listar', 'url'=>'#', 'items'=>array(
                    array('label'=>'Cliente', 'url'=>array('/cliente/index')),
                    array('label'=>'Proveedor', 'url'=>array('/proveedor/index')),
                    array('label'=>'Empleado', 'url'=>array('/empleado/index')),
                    array('label'=>'Venta','url'=>array('/venta/index')),
                    array('label'=>'Producto', 'url'=>array('/producto/index')),
                )),
                array('label'=>'Reportes', 'url'=>'#', 'items'=>array(
                    array('label'=>'Empleados Activos', 'url'=>array('/empleado/empleadosActivos')),
                    array('label'=>'Ventas por Vendedor', 'url'=>array('/venta/ventasEmpleado')),
                )),
            ),
        ),
    ),
)); ?>


            <div class="container">
                    <?php if(isset($this->breadcrumbs)):?>
                            <?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                                    'links'=>$this->breadcrumbs,
                            )); ?><!-- breadcrumbs -->
                    <?php endif?>

                    <?php echo $content; ?>
            </div>
    </body>
</html>



