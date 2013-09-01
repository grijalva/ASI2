<?php
/* @var $this Inventario1Controller */
/* @var $model Inventario1 */

$this->breadcrumbs=array(
	'Inventario1s'=>array('index'),
	$model->id_inventario,
);

$this->menu=array(
	array('label'=>'List Inventario1', 'url'=>array('index')),
	array('label'=>'Create Inventario1', 'url'=>array('create')),
	array('label'=>'Update Inventario1', 'url'=>array('update', 'id'=>$model->id_inventario)),
	array('label'=>'Delete Inventario1', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_inventario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Inventario1', 'url'=>array('admin')),
);
?>

<h1>View Inventario1 #<?php echo $model->id_inventario; ?></h1>

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
