<?php
/* @var $this ReporteController */
/* @var $model Reporte */

$this->breadcrumbs=array(
	'Reportes'=>array('index'),
	$model->id_inventario,
);

$this->menu=array(
	array('label'=>'List Reporte', 'url'=>array('index')),
	array('label'=>'Create Reporte', 'url'=>array('create')),
	array('label'=>'Update Reporte', 'url'=>array('update', 'id'=>$model->id_inventario)),
	array('label'=>'Delete Reporte', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_inventario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Reporte', 'url'=>array('admin')),
);
?>

<h1>View Reporte #<?php echo $model->id_inventario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_inventario',
		'codigo_producto',
		'stock_max',
		'stock',
		'stock_min',
		'estado',
		'id_ubicacion',
		'id_unidad',
		'id_agencia',
		'id_producto',
		'id_proveedor',
	),
)); ?>
